<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="/templates/{$config.atpl}css/style.css" rel="stylesheet" type="text/css">
	<link href="/templates/{$config.atpl}css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/templates/{$config.atpl}js/jquery.js"></script>
	<script type="text/javascript" src="/templates/{$config.atpl}js/jquery-ui.js"></script>
	<script type="text/javascript" src="/templates/{$config.atpl}js/script.js"></script>
	<script type="text/javascript" src="/templates/{$config.atpl}js/form.js"></script>
	<script type="text/javascript" src="/templates/{$config.atpl}js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="/rooms/templates/{$config.atpl}i/favicon.png">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="pull-right">
			{if $login neq ""}
				<a class="btn btn-info" href="/logout/" >Logout, {$login}.</a></div>
			{/if}
		</div>
		<div class="row">
			<div class="content">
				{include file=$page}
			</div>
		</div>
	</div>
</body>
</html>