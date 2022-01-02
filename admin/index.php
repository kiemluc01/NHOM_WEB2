<?php
session_start();
define('BASEPATH', true);
include_once('config.php');
include_once('core/Database.php');
include_once('core/load.php');
loadTemplate('layout');
