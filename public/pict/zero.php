<?php
function size_font($tex)
{
 $s=strlen($tex);
 $imp=600/$s;
 $size=ceil($imp);
 if($size>60){$size=60;}
  return $size;
}
 require_once "../strr/dfd.php";
 if(!isset($_GET['p'])){$text="No pictures";}
 else
 {
$sql="SELECT * FROM  `new_slovar` WHERE  `ind`=".$_GET['p'] ;
$dict_q=mysql_query($sql,$db);
$dict_S = mysql_fetch_array($dict_q);
$text=iconv("cp1251", "UTF-8",$dict_S['rus']);
 }

header ("Content-type: image/jpeg");
    $im = ImageCreate (440, 300)
            or die ("Ошибка при создании изображения");
            $ttf="arial.ttf";
    $couleur_fond = ImageColorAllocate ($im,255, 255, 255);
    $color1=Imagecolorallocate($im,0,0,250);
    //$text="0123456789012345678901234678901234567890123456789";
    $mass_sl=explode(" ",$text);
    $kl_m=count($mass_sl);
 if($kl_m==1)
    {
    ImageTTFtext($im,size_font($mass_sl[0]),0,5,160,$color1,$ttf,$mass_sl[0]);
    }
    elseif($kl_m==2)
    {
    ImageTTFtext($im,size_font($mass_sl[0]),0,5,60,$color1,$ttf,$mass_sl[0]);
    ImageTTFtext($im,size_font($mass_sl[1]),0,5,160,$color1,$ttf,$mass_sl[1]);
    }
    elseif($kl_m==3)
    {
    ImageTTFtext($im,size_font($mass_sl[0]),0,5,60,$color1,$ttf,$mass_sl[0]);
    ImageTTFtext($im,size_font($mass_sl[1]." ".$mass_sl[2]),0,5,160,$color1,$ttf,$mass_sl[1]." ".$mass_sl[2]);
    }
    elseif($kl_m==4)
    {
    ImageTTFtext($im,size_font($mass_sl[0]." ".$mass_sl[1]),0,5,60,$color1,$ttf,$mass_sl[0]." ".$mass_sl[1]);
    ImageTTFtext($im,size_font($mass_sl[2]." ".$mass_sl[3]),0,5,160,$color1,$ttf,$mass_sl[2]." ".$mass_sl[3]);
    }
    elseif($kl_m==5)
    {
    ImageTTFtext($im,size_font($mass_sl[0]." ".$mass_sl[1]),0,5,60,$color1,$ttf,$mass_sl[0]." ".$mass_sl[1]);
    ImageTTFtext($im,size_font($mass_sl[2]." ".$mass_sl[3]." ".$mass_sl[4]),0,5,160,$color1,$ttf,$mass_sl[2]." ".$mass_sl[3]." ".$mass_sl[4]);
    }
     elseif($kl_m==6)
    {
    ImageTTFtext($im,size_font($mass_sl[0]." ".$mass_sl[1]),0,5,60,$color1,$ttf,$mass_sl[0]." ".$mass_sl[1]);
    ImageTTFtext($im,size_font($mass_sl[2]." ".$mass_sl[3]),0,5,160,$color1,$ttf,$mass_sl[2]." ".$mass_sl[3]);
    ImageTTFtext($im,size_font($mass_sl[4]." ".$mass_sl[5]),0,5,260,$color1,$ttf,$mass_sl[4]." ".$mass_sl[5]);
    }
    else
    {
    ImageTTFtext($im,size_font($text),0,5,150,$color1,$ttf,$text);
    }

     echo Imagejpeg ($im);
     imagedestroy($im);
?>