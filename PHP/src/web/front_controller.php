<?php
    require_once '../dispatcher.php';
    require_once '../routing.php';
    require_once '../controllers/controller.php';

    session_start();
    $action = $_GET['action'];
    dispatch($routing, $action);
?>