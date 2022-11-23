<?php
    
    include_once("topo.php");
    include_once("menu.php");

    if(empty($_SERVER["QUERY_STRING"])) {
        $cont = "principal.php";
        include_once("$cont");
    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("rodape.php");

