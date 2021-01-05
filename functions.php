<?php 

function get_klients() {

	global $link_outputs;

	$sql = "SELECT * FROM klients";
	$result = mysqli_query($link_outputs, $sql);
	$klients = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $klients;
}