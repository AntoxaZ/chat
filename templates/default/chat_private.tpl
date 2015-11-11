Чат с {$id_user}
<div id="chat" room="{$id_room}" id_reciver="{$id_user}">
</div>
<form id="chat-form" class="form-search" onsubmit="return false;">
    <input type="text" class="search-query" id="chat-msg"/>
    <input  class="btn btn-info" type="submit" value="Написать" onclick="add_message_private();"/>
</form>
{literal}
	<script>
		update_chat_private();
	</script>
{/literal}