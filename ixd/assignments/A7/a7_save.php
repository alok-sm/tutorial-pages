<?php

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$helpful = $_GET["helpful"];

	if (($handle = fopen("a7_feedback_log.csv", "a")) !== FALSE) {
		$data = array($id, $helpful, date("m-d--h-i-sa")); 
		fputcsv($handle, $data);
		echo "success";
	} else {
		echo error_get_last()["message"];
	}
	fclose($handle);
} else if (isset($_GET["loadpage"])) {
	if (($handle = fopen("a7_feedback_log.csv", "a")) !== FALSE) {
		$data = array("page load", "", date("m-d--h-i-sa")); 
		fputcsv($handle, $data);
		echo "success";
	} else {
		echo error_get_last()["message"];
	}
}
?>