<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require ("Database.php");
$db = new Database();

$realisations=$db->selectAll('realisations');
$competences=$db->selectAll('competences');
$croix=$db->selectAll('lk_real_comp');
//echo $realisations;
echo (json_encode(["realisations"=>$realisations,"competences"=>$competences,"croix"=>$croix]));
//echo json_encode("plop");