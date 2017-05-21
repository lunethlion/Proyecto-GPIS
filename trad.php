<?php
	$converter = new HtmlConverter();
	$html = $_POST['enhtml'];
	$markdown = $converter->convert($html);
?>