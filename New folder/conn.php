<?php
session_start();

$host = 'localhost';
$username = 'root';
$pw = '';
$db = 'test';

$conn = Mysqli_Connect($host,$username,$pw,$db);