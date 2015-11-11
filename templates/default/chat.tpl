<div id="chat" room="{$get_id}">
</div>
<form id="chat-form" class="form-search"  onsubmit="return false;">
    <input type="text" id="chat-msg" class="search-query input-medium"/>
    <input type="submit" value="Написать" onclick="add_message({$get_id})"/>
</form>
{literal}
	<script>
		update_chat();
		update_chat_icons()
	</script>
{/literal}