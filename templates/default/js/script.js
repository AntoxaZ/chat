function add_message(id_room) {
	var msg = $('#chat-msg').val();
	if(!msg) { 
		alert("Введите текст сообщения");  
	} else {	
	//alert(id_room);
		$.post( "/backend/add_message.php", {text_message: msg, id_room: id_room}); 
		$("#chat-msg").val('');
	}
	return false;
}

function add_message_private() {
	var msg = $('#chat-msg').val();
	var id_room = parseInt($("#chat").attr('room'));
	var id_reciver = parseInt($("#chat").attr('id_reciver'));
	if(!msg) { 
		alert("Введите текст сообщения");  
	} else {
		$.post( "/backend/add_message_privat.php", {text_message: msg, id_room: id_room, id_reciver: id_reciver}); 
		$("#chat-msg").val('');
	}
	return false;
}

function print_r(arr, level) {
    var print_red_text = "";
    if(!level) level = 0;
    var level_padding = "";
    for(var j=0; j<level+1; j++) level_padding += "    ";
    if(typeof(arr) == 'object') {
        for(var item in arr) {
            var value = arr[item];
            if(typeof(value) == 'object') {
                print_red_text += level_padding + "'" + item + "' :\n";
                print_red_text += print_r(value,level+1);
		} 
            else 
                print_red_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
        }
    } 

    else  print_red_text = "===>"+arr+"<===("+typeof(arr)+")";
    return print_red_text;
}



//подгрузка сообщений
var last_id = 0;
function update_chat(){
	var id_room = parseInt($("#chat").attr('room'));
    $.ajax({
		url: "/backend/update_chat.php",
		global: true,
		data: {id: last_id, id_room: id_room},
		type: "POST",
		success: function(msg_j){
			if(msg_j.length > 2){
				//alert(print_r(msg_j));
				var obj = JSON.parse(msg_j);
				for(var i=0; i < obj.length; i ++){
					var str;
					if(obj[i].id_user != obj[i].id_user_now){
						str = "<a class = 'private' href='/privat_chat/"+obj[i].id_user+"/'>"+obj[i].name+" </a>";
					}else{str = obj[i].name;} 
					var del;
					if(obj[i].is_admin == 1){
						del = "<a class='remove' id_message = "+obj[i].id+">Delete</a>";
					}else{del="";}
					$('#chat').append("<b>"+str+"</b><b>"+obj[i].date+"</b>: "+obj[i].text+"<br>"+del+"<br>");
					last_id = obj[i].id;
				}
			}	
		}
    });
	setTimeout(update_chat, 1500);
}
  

function update_chat_icons(){
	
	$.ajax({
		url: "/backend/update_chat_icons.php",
		global: true,
		data: {},
		type: "POST",
		success: function(msg_j){
			$('a.new_dialogs').remove();
			if(msg_j != "null"){
				if(msg_j.length > 2){
					//alert(print_r(msg_j));
					var obj = JSON.parse(msg_j);
					for(var i=0; i < obj.length; i++){
						//alert(print_r(obj[i].id));
						$('#chat').append("<a class = 'new_dialogs' href='/chat_privat.php?id_user="+obj[i].id+"'>New chat<a>");
					}
				}
			}
		}	
    });
	setTimeout(update_chat_icons, 1500);
}

  //подгрузка сообщений приват
var last_id = 0;
function update_chat_private(){
	var id_reciver = parseInt($("#chat").attr('id_reciver'));
    $.ajax({
		url: "/backend/update_chat_private.php",
		global: true,
		data: {id: last_id, id_reciver: id_reciver},
		type: "POST",
		success: function(msg_j){
			if(msg_j.length > 2){
				//alert(print_r(msg_j));
				var obj = JSON.parse(msg_j);
				for(var i=0; i < obj.length; i ++){
					var del;
					if(obj[i].is_admin == 1){
						del = "<a class='remove' id_message = "+obj[i].id+">Delete</a>";
					}else{del="";}
					
					
					
					
					$('#chat').append("<b>"+obj[i].name+" </b><b>"+obj[i].date+"</b>: "+obj[i].text+" "+del+"<br>");
					last_id = obj[i].id;
				}
			}
		}
    });
	setTimeout(update_chat_private, 1500);
  }


//Удаление записи
$(document).on('click', 'a[class^="remove"]', function(e) {	
	var id = parseInt($(this).attr('id_message'));
	$.ajax({
		url: "/backend/delete_message.php",
		global: true,
		data: {'id': id},
		type: "POST",
		success: function(mes){
			if(mes == "OK"){
				var rem = $('a[id_message='+id+']').prev();
				rem.remove();
				$('a[id_message='+id+']').remove();
			}
		}
    });
});


  