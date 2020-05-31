<?php

$pd = new PDO("mysql:host=db;dbname=db", "root", "6");

function dd($var) {
    echo '<pre style="margin-left: 100px; margin-top: 60px; position:absolute; padding: 10px; background:#000; color: #00fe00; font-weight:bold; font-size: 14px">' . print_r($var, true) . '</pre>';
}


$a = $pd->query("SELECT * FROM `blo`")->fetchAll(2);


dd($a);
