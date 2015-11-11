function Notebook() {
  var str = $("#formnotebook").serialize();
  $.post("/lati/notebook/", str, function(data) {
    $("#divnotebook").html(data);
  });
}

function checkAll(){
	for (var i=0;i<document.forms[0].elements.length;i++)
	{
		var e=document.forms[0].elements[i];
		if ((e.name != 'box') && (e.type=='checkbox'))
		{
			e.checked=document.forms[0].box.checked;
		}
	}
}

function Valid(obj) {
    if(obj.title.value =='') { alert( 'Заполните все поля!' ); return false; }
    if(obj.title.value.length > 120) { alert('Длина поля должна быть не больше 120 символов!'); return false; }
    obj.submit();
}

function conf(location)	{
	if (window.confirm("Внимание!\nВы действительно хотите удалить запись?") == false) {
	} else { window.location = location; }
}

function Login(obj) {
      if(obj.login.value =='') { alert( 'Заполните пожалуйста поле Логин!' ); return false; }
      if(obj.login.value.length > 60) { alert('Длина должна быть не больше 60 символов!'); return false; }
      if(obj.password.value =='') { alert( 'Заполните пожалуйста поле Пароль!' ); return false; }
      if(obj.password.value.length > 60) { alert('Длина должна быть не больше 60 символов!'); return false; }
      obj.submit();
}



function AdminAdd(obj) {
      if(obj.login.value =='') { alert( 'Заполните пожалуйста поле Логин!' ); return false; }
      if(obj.login.value.length > 60) { alert('Длина должна быть не больше 60 символов!'); return false; }
      if(obj.password.value =='') { alert( 'Заполните пожалуйста поле Пароль!' ); return false; }
      if(obj.password.value.length > 60) { alert('Длина должна быть не больше 60 символов!'); return false; }
      if(obj.password.value =='') { alert( 'Заполните пожалуйста поле Пароль!' ); return false; }
      if(obj.password.value.length > 60) { alert('Длина должна быть не больше 60 символов!'); return false; }
      if(obj.email.value =='') { alert( 'Заполните пожалуйста поле Email!' ); return false; }
      if(obj.email.value.length > 120) { alert('Длина должна быть не больше 120 символов!'); return false; }
      obj.submit();
}

function UploadsFiles(obj) {
      if(obj.file.value =='') { alert( 'Укажите пожалуйста файл!'); return false; }
      obj.submit();
}

function Config(obj) {
      if(obj.page.value =='') { alert( 'Заполните пожалуйста поле Количество вывода елементов на странице!'); return false; }
      if(obj.page.value.length > 4) { alert('Длина поля должна быть не больше 4 символов!'); return false; }
      if(obj.keywords.value =='') { alert( 'Заполните пожалуйста поле Ключевые слова!'); return false; }
      if(obj.keywords.value.length > 255) { alert('Длина поля должна быть не больше 255 символов!'); return false; }
      if(obj.description.value =='') { alert( 'Заполните пожалуйста поле Описание!'); return false; }
      if(obj.description.value.length > 255) { alert('Длина поля должна быть не больше 255 символов!'); return false; }
      obj.submit();
}