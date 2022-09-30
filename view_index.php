<?php
$_title= "Welcome!"; 
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json');
$data = json_decode($data, true); 
?>