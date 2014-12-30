<?php
session_start();
if (!empty($_SESSION['count'])) {
	echo $_SESSION['count']++;
} else {
	$_SESSION['count'] = 1;
}
