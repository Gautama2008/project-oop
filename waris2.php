<?php
include("waris1.php");
// Pewarisan tanpa perubahan
class OrangSunda extends Orang{
}
// Oewarisan dengan meng-override function UcapSalam
// dan Penambahan Method
class OrangInggris extends Orang{
    protected $asal="England"; //penambah properti baru
    function UcapSalam(){
        echo "Hello. My name is ".$this->nama."<br>";
    }
    function UcapNegara(){ //penambah method baru
        echo "I'm from ".$this->asal."<br>";
    }
}

$kabayan=new OrangSunda("Kabayan");
$kabayan->UcapSalam();
$william=new OrangInggris("Prince William");
$william->UcapSalam();
$william->UcapNegara();
?>