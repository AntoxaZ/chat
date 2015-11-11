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

function create_watermark( $image, $logo) {
 
  $watermark = imagecreatefrompng($logo);
  $img = imagecreatefromjpeg($image);
  
  // ширина и высота водяного знака
  $width = imagesx($watermark); 
  $height = imagesy($watermark); 

  $dest_x = intval(imagesx($img)*0.5) - intval($width*0.5); 
  $dest_y = intval(imagesy($img)*0.5) - intval($height*0.5);     
 
  imagecopy($img, $watermark, $dest_x, $dest_y, 0, 0, $width, $height);    

  imagejpeg($img, $image);
 
  imagedestroy($watermark);
  imagedestroy($img);
 
}  


/*function Watermark($image) {
list($width, $height) = getimagesize($image);
if($width>300) $width=(INT)($width/2)-200; else $width=10;
$height=(INT)($height/2)+12;
// 300, 120, 12- размеры картинки и надписи

$img = ImageCreateFromJpeg($image);
$color = ImageColorAllocate($img,0xFF,0xFF,0xFF);
// 0xFF,0xFF,0xFF - белый цвет

ImageTTFText($img,40,0, $width, $height, $color,'../system/Comic_Sans_MS.ttf','www.nikmagnit.com.ua');
// 18 - размер шрифта. arial.ttf- шрифт. нужно загрузить файл в корень сайта. 'www.yoursite.com' - надпись

$color = ImageColorAllocate($img,0x99,0x99,0x99);
// 0x99,0x99,0x99 серый цвет

ImageTTFText($img,40,0, $width+1, $height+1, $color,'../system/Comic_Sans_MS.ttf','www.nikmagnit.com.ua');
// вторая надпись с небольшим сдвигом делается для того, чтобы надпись была видна на разных изображениях

imagejpeg($img, $image, 100);
// 'image.jpg' - читать и записывать в тот же файл возможно. 100- процент сжатия для JPG, можно установить меньше, но не желательно.

imagedestroy($img);

}

function Logos($photo, $logo) {
    $logo_hw = getimagesize($logo);
    $foto_hw = getimagesize($photo);

    $logo = imagecreatefrompng ($logo);
    $foto = imagecreatefromjpeg ($photo);

    imagecopy ($foto,
    $logo,
    $foto_hw[0] - $logo_hw[0],
    $foto_hw[1] - $logo_hw[1],
    0,
    0,
    $logo_hw[0],
    $logo_hw[1]);

    imagejpeg ($foto, $photo, "100");

    imagedestroy ($logo);
    imagedestroy ($foto);

}*/

function generatePassword($length){
  $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}

function SendMail($admin_email, $email, $subj, $content) {

	mail($admin_email, $subj, $content, "MIME-Version: 1.0\n".
		"Content-type: text/html; charset=UTF-8\n".
		"From: ".$email."\n".
		"X-Mailer: PHP/".phpversion());

}

function SendMailNew($admin_email, $email, $subj, $content, $attachment) {

$mess = "Хуй пизда сковорода"; 

        $mail = new PHPMailer(); 
		$mail->CharSet = 'utf-8';
        $mail->From = $email;      // от кого 
    //  $mail->FromName = 'Заказ от ';   // от кого 
        $mail->AddAddress($admin_email); // кому - адрес, Имя 
        $mail->IsHTML(true);        // выставляем формат письма HTML 
        $mail->Subject = $subj;  // тема письма 
		$mail->AddAttachment($attachment); 
   
        $mail->Body = $content;
        // отправляем наше письмо 
        if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo); 

}

function towin($text) {
	return iconv('windows-1251', 'utf-8', $text);
	//return iconv('utf-8', 'windows-1251', $text);

}

function Page($url, $table, $limit, $start, $page, $lati, $where = 0) {	

	$limit_pag = '3';
	$query = mysql_query("SELECT id FROM ".PREF.$table." WHERE ".$where);
	$total_rows = mysql_num_rows($query);

	if($total_rows) {

		$tot = ($total_rows - 1) / $limit;
		$total = intval($tot + 1);
		if($page > $total) $page = $total;
		$start = $page*$limit - $limit;

	}	
	
	if($total != "1") { 

		if($total_rows >= $limit) {
			
			$a = "<a href=\"".$url;
				
			if($page!=1) { 
				$pervpage = $a."1\">Начало</a> ";
			}
					
			if($page != $total) {
				$nextpage = $a.$total."\">Конец</a>";
			}
				
			$pageleft = "";
			$pageright = "";
				
			for($i = $limit_pag; $i >= 1; $i--) {
				if($page-$i > 0) {
					$pageleft .= $a.($page-$i)."\">".($page-$i)."</a>";
				}
			}
				
			for($i = 1; $i <= $limit_pag; $i++) { 
				if($page+$i <= $total) {
					$pageright .= $a.($page+$i)."\">".($page+$i)."</a>"; 
				}
			}	
					
			$page_link = "<div class=\"pagination\">".$pervpage.$pageleft."<b><span class=\"page_link\">".$page."</span></b>".$pageright.$nextpage."</div>";
			$lati->assign("page_link", $page_link);

		}
	}	
}	

function to1251($txt)  {
    $in_arr = array (
        chr(208).chr(160), chr(208).chr(144), chr(208).chr(145),
        chr(208).chr(146), chr(208).chr(147), chr(208).chr(148),
        chr(208).chr(149), chr(208).chr(129), chr(208).chr(150),
        chr(208).chr(151), chr(208).chr(152), chr(208).chr(153),
        chr(208).chr(154), chr(208).chr(155), chr(208).chr(156),
        chr(208).chr(157), chr(208).chr(158), chr(208).chr(159),
        chr(208).chr(161), chr(208).chr(162), chr(208).chr(163),
        chr(208).chr(164), chr(208).chr(165), chr(208).chr(166),
        chr(208).chr(167), chr(208).chr(168), chr(208).chr(169),
        chr(208).chr(170), chr(208).chr(171), chr(208).chr(172),
        chr(208).chr(173), chr(208).chr(174), chr(208).chr(175),
        chr(208).chr(176), chr(208).chr(177), chr(208).chr(178),
        chr(208).chr(179), chr(208).chr(180), chr(208).chr(181),
        chr(209).chr(145), chr(208).chr(182), chr(208).chr(183),
        chr(208).chr(184), chr(208).chr(185), chr(208).chr(186),
        chr(208).chr(187), chr(208).chr(188), chr(208).chr(189),
        chr(208).chr(190), chr(208).chr(191), chr(209).chr(128),
        chr(209).chr(129), chr(209).chr(130), chr(209).chr(131),
        chr(209).chr(132), chr(209).chr(133), chr(209).chr(134),
        chr(209).chr(135), chr(209).chr(136), chr(209).chr(137),
        chr(209).chr(138), chr(209).chr(139), chr(209).chr(140),
        chr(209).chr(141), chr(209).chr(142), chr(209).chr(143)
    );  

    $out_arr= array (
        chr(208), chr(192), chr(193), chr(194),
        chr(195), chr(196), chr(197), chr(168),
        chr(198), chr(199), chr(200), chr(201),
        chr(202), chr(203), chr(204), chr(205),
        chr(206), chr(207), chr(209), chr(210),
        chr(211), chr(212), chr(213), chr(214),
        chr(215), chr(216), chr(217), chr(218),
        chr(219), chr(220), chr(221), chr(222),
        chr(223), chr(224), chr(225), chr(226),
        chr(227), chr(228), chr(229), chr(184),
        chr(230), chr(231), chr(232), chr(233),
        chr(234), chr(235), chr(236), chr(237),
        chr(238), chr(239), chr(240), chr(241),
        chr(242), chr(243), chr(244), chr(245),
        chr(246), chr(247), chr(248), chr(249),
        chr(250), chr(251), chr(252), chr(253),
        chr(254), chr(255)
    );  
 
    $txt = str_replace($in_arr,$out_arr,$txt);
    return $txt;
}

/*function to1251($text) {

	return iconv('utf-8', 'windows-1251', $text);
	//return iconv('windows-1251', 'utf-8', $text);
}*/

function date_view($date) {

	$date = getdate(strtotime($date));
	$month = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
	return $date['mday'].' '.$month[$date['mon']-1].' '.$date['year'];

}

function validate($info, $length = 0) {

	$info = trim($info);
	$info = htmlspecialchars($info, ENT_QUOTES);
	$info = mysql_real_escape_string($info);
	if($length != 0) {
		$info = substr($info, 0, $length);
	}
    return $info;

}

function translit($content) {

	$transA = array('А' => 'a', 'Б' => 'b', 'В' => 'v', 'Г' => 'h', 'Ґ' => 'g', 'Д' => 'd', 'Е' => 'e', 'Ё' => 'jo', 'Є' => 'e', 'Ж' => 'zh', 'З' => 'z', 'И' => 'i', 'І' => 'i', 'Й' => 'i', 'Ї' => 'i', 'К' => 'k', 'Л' => 'l', 'М' => 'm', 'Н' => 'n', 'О' => 'o', 'П' => 'p', 'Р' => 'r', 'С' => 's', 'Т' => 't', 'У' => 'u', 'Ў' => 'u', 'Ф' => 'f', 'Х' => 'h', 'Ц' => 'c', 'Ч' => 'ch', 'Ш' => 'sh', 'Щ' => 'sz', 'Ъ' => '', 'Ы' => 'y', 'Ь' => '', 'Э' => 'e', 'Ю' => 'yu', 'Я' => 'ya');
	$transB = array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'ґ' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'jo', 'є' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'і' => 'i', 'й' => 'i', 'ї' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ў' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sz', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', '&quot;' => '', '&amp;' => '', 'µ' => 'u', '№' => '');
	$content = trim(strip_tags($content));
	$content = strtr($content, $transA);
	$content = strtr($content, $transB);
	$content = preg_replace("/\s+/ms", "-", $content);
	$content = preg_replace("/[ ]+/", "-", $content);
	$content = preg_replace("/[^a-z0-9_]+/mi", "-", $content);
	$content = stripslashes($content);
	return $content;
	
}
	
?>