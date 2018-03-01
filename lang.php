<?php
session_start();

$_SESSION['lang'] = htmlspecialchars($_GET['lang']);
header('Location: /'.$_GET['backurl']);