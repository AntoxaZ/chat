<div class="table_view_margin">
<br>
<h1>������� ����</h1>
<table class="table_view" cellspacing="2" cellpadding="2">
	<tr>
		<td>Id</td>
		<td>��� �������</td>
		<td>���� ��������</td>
	</tr>
	{foreach from=$view key=key item=items}
	<tr>
		<td>{$items.id}</td>
		<td><a href="chat/{$items.id}/">{$items.name}</a></td>
		<td>{$items.create_date}</td>
		{if $user_is_admin eq 1}<td><a href="/rooms/delete/{$items.id}/">�������</a></td>{/if}
	</tr>
	{/foreach}
	{if $user_is_admin eq 1}
	<tr>
		<td></td>
		<td>�������� �������</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<form method="post" action="/rooms/create_room/">
		<td></td>
		<td><input type="text" name="name_room"></td>
		<td></td>
		<td><input class="btn btn-info" type="submit" value="�������"></td>
		</form>
	</tr>
	{/if}
</table>

</div>