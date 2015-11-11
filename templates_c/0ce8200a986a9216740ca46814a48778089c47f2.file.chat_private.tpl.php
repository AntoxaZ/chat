<?php /* Smarty version Smarty-3.0.8, created on 2015-11-10 23:05:51
         compiled from "templates/default/chat_private.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2529656425c2f2277d9-25365542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce8200a986a9216740ca46814a48778089c47f2' => 
    array (
      0 => 'templates/default/chat_private.tpl',
      1 => 1447189543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2529656425c2f2277d9-25365542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
Чат с <?php echo $_smarty_tpl->getVariable('id_user')->value;?>

<div id="chat" room="<?php echo $_smarty_tpl->getVariable('id_room')->value;?>
" id_reciver="<?php echo $_smarty_tpl->getVariable('id_user')->value;?>
">
</div>
<form id="chat-form" class="form-search" onsubmit="return false;">
    <input type="text" class="search-query" id="chat-msg"/>
    <input  class="btn btn-info" type="submit" value="Написать" onclick="add_message_private();"/>
</form>

	<script>
		update_chat_private();
	</script>
