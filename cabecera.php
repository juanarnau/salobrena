<?
session_start();
include "config.php";
?><!DOCTYPE html>
<html>
<head>
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?=(isset($titulo)?$titulo:"Lavanderia Automatizada")?></title>
<link rel="stylesheet" href="jquery.mobile-1.3.1.min.css" />
<script src="jquery-2.0.0.min.js"></script>
<script src="jquery.mobile-1.3.1.min.js"></script>

<?=(isset($cabecera)?$cabecera:"")?>	

<link rel="apple-touch-startup-image" href="320X460.png">

<link rel="apple-touch-icon" href="images/57x57.png" sizes="57x57">

<link rel="apple-touch-icon" href="images/114X114.png" sizes="114x114">

<link rel="apple-touch-icon-precomposed" sizes="android-only" href="images/57x57.png">

<link rel="apple-touch-icon" href="images/57x57.png" sizes="57x57">

<link rel="apple-touch-icon" href="72X72.png" sizes="72x72">
<style type="text/css">
.align-left {
float: left; 
}
.align-right {
float: right;
}
</style>
</head>
<body>
<div data-role="page">

<?

if (!isset($_SESSION['login'])) include "login.php";

?>
