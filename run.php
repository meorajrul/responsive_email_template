<?php
error_reporting(~E_ALL);
require_once 'vendor/autoload.php';

use InlineStyle\InlineStyle;

$htmldoc = new InlineStyle("email.php");

file_put_contents('email_inline.html',$htmldoc->applyStylesheet($htmldoc->extractStylesheets())->getHTML());

?>