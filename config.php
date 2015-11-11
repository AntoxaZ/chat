<?
/*
============================================
 Lati Content Management System
--------------------------------------------
 Copyright (c) 2013 Tanasov Andrey
--------------------------------------------
 http://www.itlati.com
--------------------------------------------
 ������ ��� ������� ���������� �������
============================================
*/

// ����� session
session_start();

// ������������ ���� ������
define('PREF', ''); // ������� ������
$config['dbhost'] = "localhost";
$config['dbname'] = "chat";
$config['dbuser'] = "root";
$config['dbpass'] = "";

// ������������ �����
$config["site_path"] = "http://chat/";
$config["site_root"] = "";
$config['site'] = $config["site_path"].$config["site_root"];

// ����������� �������
require_once('system/db/adodb.inc.php');
require_once('system/smarty/Smarty.class.php');
require_once('system/class/pages.class.php');
require_once('system/class/validate.class.php');
require_once('system/class/config.class.php');
require_once('system/class/users.class.php');//������
require_once('system/class/rooms.class.php');
require_once('system/class/images.class.php');
require_once('system/class/messages.class.php');
require_once('system/function.php');

// ����������� � ���� ������ mySQL
$db = ADONewConnection('mysql');
$connect = $db->Connect($config['dbhost'], $config['dbuser'], $config['dbpass'], $config['dbname']);
if($connect == false) { die("<center>����������� � ������� ���� ������ �� ��������.<br>P.S. LatiCMS</center>"); }
$db->Execute("set character_set_results='cp1251'");
$db->Execute("set names 'cp1251'");
$db->debug = 0; // ������� �������� 0/1

// ������� �������������
$lati = new Smarty;
$lati->debugging = false; // ������� true/false
$lati->caching = false; // ��� true/false
$lati->cache_lifetime = 120; // ����� ���� � ��������

// ������ ���������� �������
$Validate = new Validate();
$Images = new Images();
$Config = new Config();
$rs_cfg = $Config->View();

// ��������� �������
$act = validate($_GET['act'], 60);
$mod = validate($_GET['mod'], 60);
$upload_image = array("jpg", "jpeg", "png", "gif"); // ���������� ������� �������� ������
$config["meta_title"] = $rs_cfg->fields['meta_title'];
$config['admin_mail'] = $rs_cfg->fields['email'];
$config["meta_keywords"] = $rs_cfg->fields['meta_keywords']; //$rs_cfg->fields['meta_keywords'];
$config["meta_description"] = $rs_cfg->fields['meta_description']; //$rs_cfg->fields['meta_description'];
if($rs_cfg->fields['templates']) $config["tpl"] = $rs_cfg->fields['templates']."/"; else $config["tpl"] = "default/"; // ����� ������� �����
$config["atpl"] = "default/"; // ����� ������� ����� ������

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
1 => '���������� ���������� ����', 
2 => '��������� �������', 
3 => '��������� �������', 
4 => '���������������� �������', 
5 => '�������� �������', 
6 => '����������� �������', 
7 => '������������ �������', 
8 => '����������� �������', 
9 => '�����-����������� �������',  
10 => '�������� �������', 
11 => '�������������� �������', 
12 => '��������� �������', 
13 => '��������� �������', 
14 => '������������ �������', 
15 => '�������� �������',  
16 => '���������� �������', 
17 => '���������� �������', 
18 => '������� �������', 
19 => '������������� �������', 
20 => '����������� �������', 
21 => '���������� �������', 
22 => '����������� �������', 
23 => '���������� �������', 
24 => '������������ �������', 
25 => '����������� �������'
);
$lati->assign('region', $region);

?>