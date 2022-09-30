<?php
$_title= "Hi!"; 
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json');
$data = json_decode($data, true); 
?>

<body class="info_container">
    <h1><?= $data['en_title'] ?></h1>





</body>