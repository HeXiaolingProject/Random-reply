/*PHP Random Reply 1.0
* designed for YzACG Scarlet Sight engine.
* Merry Xmas and Happy New Year 2018!
* 2017 TEAM A72
* Dec 24 ,2017
/*
 <?php
    $cat=$_GET["file"];
	$code = $_GET["code"];
    include("texts/" . $cat . ".php");
    $length=count($library);
    $rand=rand(0,$length-1);
    $randomText=$library[$rand];
	if($code == "js"||$code == "javascript"){
		echo("document.write(\"" . $randomText . "\");")
	}else{
		echo($randomText);
	}

 ?>