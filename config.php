<?
/*
============================================
 Lati Content Management System
--------------------------------------------
 Copyright (c) 2013 Tanasov Andrey
--------------------------------------------
 http://www.itlati.com
--------------------------------------------
 Данный код защищен авторскими правами
============================================
*/

// Старт session
session_start();

// Конфигурации базы данных
define('PREF', ''); // Префикс таблиц
$config['dbhost'] = "localhost";
$config['dbname'] = "chat";
$config['dbuser'] = "root";
$config['dbpass'] = "";

// Конфигурации сайта
$config["site_path"] = "http://chat/";
$config["site_root"] = "";
$config['site'] = $config["site_path"].$config["site_root"];

// Подключение классов
require_once('system/db/adodb.inc.php');
require_once('system/smarty/Smarty.class.php');
require_once('system/class/pages.class.php');
require_once('system/class/validate.class.php');
require_once('system/class/config.class.php');
require_once('system/class/users.class.php');//Начало
require_once('system/class/rooms.class.php');
require_once('system/class/images.class.php');
require_once('system/class/messages.class.php');
require_once('system/function.php');

// Подключение к базе данных mySQL
$db = ADONewConnection('mysql');
$connect = $db->Connect($config['dbhost'], $config['dbuser'], $config['dbpass'], $config['dbname']);
if($connect == false) { die("<center>Подключение к серверу базы данных не доступно.<br>P.S. LatiCMS</center>"); }
$db->Execute("set character_set_results='cp1251'");
$db->Execute("set names 'cp1251'");
$db->debug = 0; // Отладка запросов 0/1

// Конфиги шаблонизатора
$lati = new Smarty;
$lati->debugging = false; // Отладка true/false
$lati->caching = false; // Кэш true/false
$lati->cache_lifetime = 120; // Время кэша в секундах

// Запуск глобальных классов
$Validate = new Validate();
$Images = new Images();
$Config = new Config();
$rs_cfg = $Config->View();

// Настройки системы
$act = validate($_GET['act'], 60);
$mod = validate($_GET['mod'], 60);
$upload_image = array("jpg", "jpeg", "png", "gif"); // Допустимые форматы загрузки файлов
$config["meta_title"] = $rs_cfg->fields['meta_title'];
$config['admin_mail'] = $rs_cfg->fields['email'];
$config["meta_keywords"] = $rs_cfg->fields['meta_keywords']; //$rs_cfg->fields['meta_keywords'];
$config["meta_description"] = $rs_cfg->fields['meta_description']; //$rs_cfg->fields['meta_description'];
if($rs_cfg->fields['templates']) $config["tpl"] = $rs_cfg->fields['templates']."/"; else $config["tpl"] = "default/"; // Папка шаблона сайта
$config["atpl"] = "default/"; // Папка шаблона админ панели

if($_SERVER['REMOTE_ADDR'] == "46.33.229.23") $config["is_close"] = 0; else $config["is_close"] = $rs_cfg->fields['is_close'];


$config["copyright"] = $rs_cfg->fields['copyright'];
$config["phone"] = $rs_cfg->fields['phone'];
$config["phone2"] = $rs_cfg->fields['phone2'];
$config["phone3"] = $rs_cfg->fields['phone3'];
$config["icq"] = $rs_cfg->fields['icq'];
$config["skype"] = $rs_cfg->fields['skype'];
$config["counter"] = $rs_cfg->fields['counter'];
$config["min_price"] = $rs_cfg->fields['min_price'];
$config["dollar"] = $rs_cfg->fields['dollar'];


$config["year"] = date("Y");
$config["act"] = $act;
$config["mod"] = $mod;

$lati->assign("act", $act);
$lati->assign("mod", $mod);
$lati->assign("config", $config);

$region = array(
1 => 'Автономная Республика Крым', 
2 => 'Винницкая область', 
3 => 'Волынская область', 
4 => 'Днепропетровская область', 
5 => 'Донецкая область', 
6 => 'Житомирская область', 
7 => 'Закарпатская область', 
8 => 'Запорожская область', 
9 => 'Ивано-Франковская область',  
10 => 'Киевская область', 
11 => 'Кировоградская область', 
12 => 'Луганская область', 
13 => 'Львовская область', 
14 => 'Николаевская область', 
15 => 'Одесская область',  
16 => 'Полтавская область', 
17 => 'Ровненская область', 
18 => 'Сумская область', 
19 => 'Тернопольская область', 
20 => 'Харьковская область', 
21 => 'Херсонская область', 
22 => 'Хмельницкая область', 
23 => 'Черкасская область', 
24 => 'Черниговская область', 
25 => 'Черновицкая область'
);
$lati->assign('region', $region);

?>