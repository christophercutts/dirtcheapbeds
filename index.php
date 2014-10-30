<?php
if(isset($_SERVER['REQUEST_URI'])){
	if($_SERVER['REQUEST_URI'] == "/"){
			include 'meta/index.inc';
	} elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . "/content" . $_SERVER['REQUEST_URI'] . ".inc")){
		if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/meta" . $_SERVER['REQUEST_URI'] . ".inc")){
			include 'meta/' . $_SERVER['REQUEST_URI'] . ".inc";
		}
	} else {
		header("HTTP/1.0 404 Not Found");
		$error = true;
		if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/meta/404.inc")){
			include 'meta/404.inc';
		}
	}
	if($_SERVER['REQUEST_URI'] == "/404"){
		header("HTTP/1.0 404 Not Found");
	}
}
ob_start("ob_gzhandler");
include 'includes/header.inc';
include 'includes/nav.inc';?>
<? if(!isset($error)){
	if(isset($_SERVER['REQUEST_URI'])){
	if($_SERVER['REQUEST_URI'] == "/"){
		include 'content/index.inc';
	} elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . "/content" . $_SERVER['REQUEST_URI'] . ".inc")){
		include 'content/' . $_SERVER['REQUEST_URI'] . ".inc";
	}
	}
} else {
	include 'content/404.inc';
}?>
<?php include 'includes/footer.inc';?>
