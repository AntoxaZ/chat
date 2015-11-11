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
    if(obj.title.value =='') { alert( '��������� ��� ����!' ); return false; }
    if(obj.title.value.length > 120) { alert('����� ���� ������ ���� �� ������ 120 ��������!'); return false; }
    obj.submit();
}

function conf(location)	{
	if (window.confirm("��������!\n�� ������������� ������ ������� ������?") == false) {
	} else { window.location = location; }
}

function Login(obj) {
      if(obj.login.value =='') { alert( '��������� ���������� ���� �����!' ); return false; }
      if(obj.login.value.length > 60) { alert('����� ������ ���� �� ������ 60 ��������!'); return false; }
      if(obj.password.value =='') { alert( '��������� ���������� ���� ������!' ); return false; }
      if(obj.password.value.length > 60) { alert('����� ������ ���� �� ������ 60 ��������!'); return false; }
      obj.submit();
}



function AdminAdd(obj) {
      if(obj.login.value =='') { alert( '��������� ���������� ���� �����!' ); return false; }
      if(obj.login.value.length > 60) { alert('����� ������ ���� �� ������ 60 ��������!'); return false; }
      if(obj.password.value =='') { alert( '��������� ���������� ���� ������!' ); return false; }
      if(obj.password.value.length > 60) { alert('����� ������ ���� �� ������ 60 ��������!'); return false; }
      if(obj.password.value =='') { alert( '��������� ���������� ���� ������!' ); return false; }
      if(obj.password.value.length > 60) { alert('����� ������ ���� �� ������ 60 ��������!'); return false; }
      if(obj.email.value =='') { alert( '��������� ���������� ���� Email!' ); return false; }
      if(obj.email.value.length > 120) { alert('����� ������ ���� �� ������ 120 ��������!'); return false; }
      obj.submit();
}

function UploadsFiles(obj) {
      if(obj.file.value =='') { alert( '������� ���������� ����!'); return false; }
      obj.submit();
}

function Config(obj) {
      if(obj.page.value =='') { alert( '��������� ���������� ���� ���������� ������ ��������� �� ��������!'); return false; }
      if(obj.page.value.length > 4) { alert('����� ���� ������ ���� �� ������ 4 ��������!'); return false; }
      if(obj.keywords.value =='') { alert( '��������� ���������� ���� �������� �����!'); return false; }
      if(obj.keywords.value.length > 255) { alert('����� ���� ������ ���� �� ������ 255 ��������!'); return false; }
      if(obj.description.value =='') { alert( '��������� ���������� ���� ��������!'); return false; }
      if(obj.description.value.length > 255) { alert('����� ���� ������ ���� �� ������ 255 ��������!'); return false; }
      obj.submit();
}