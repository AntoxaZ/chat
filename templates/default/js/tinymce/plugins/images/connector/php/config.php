<?php

//Корневая директория сайта
define('DIR_ROOT',		$_SERVER['DOCUMENT_ROOT']);
//Директория с изображениями (относительно корневой)
define('DIR_IMAGES',	'/uploads');
//Директория с файлами (относительно корневой)
define('DIR_FILES',		'/uploads');


//Высота и ширина картинки до которой будет сжато исходное изображение и создана ссылка на полную версию
define('WIDTH_TO_LINK', 1000);
define('HEIGHT_TO_LINK', 1000);

//Атрибуты которые будут присвоены ссылке (для скриптов типа lightbox)
define('CLASS_LINK', 'colorbox');
define('REL_LINK', 'colorbox');

?>