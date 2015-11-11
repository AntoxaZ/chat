<?php /* Smarty version Smarty-3.0.8, created on 2015-11-10 23:10:00
         compiled from "templates/default/chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583156425d28de3c76-33422855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de5a0d3e21842cf9f67af810cfdf29f1195f075' => 
    array (
      0 => 'templates/default/chat.tpl',
      1 => 1447189731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583156425d28de3c76-33422855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="chat" room="<?php echo $_smarty_tpl->getVariable('get_id')->value;?>
">
</div>
<form id="chat-form" class="form-search"  onsubmit="return false;">
    <input type="text" id="chat-msg" class="search-query input-medium"/>
    <input type="submit" value="Написать" onclick="add_message(<?php echo $_smarty_tpl->getVariable('get_id')->value;?>
)"/>
</form>

	<script>
		update_chat();
		update_chat_icons()
	</script>
