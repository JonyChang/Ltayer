<?php
//include(dirname(__FILE__).'/../appfunctions.php');
include(dirname(__FILE__).'/../db_connect.php');
$file = $DB->Select("notepad",array('id' => $id));




?>