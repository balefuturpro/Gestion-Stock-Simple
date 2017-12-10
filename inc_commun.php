<?php
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	//error_reporting(E_ALL ^ E_DEPRECATED);
	require_once "fonctionsSql.php";
	require_once "classes/class.stock.php";
	require_once "classes/class.article.php";
	require_once "classes/class.ligneStock.php";
	require_once "classes/class.ligneSortie.php";
	require_once "classes/class.sortie.php";
	require_once "classes/class.utilisateur.php";
	session_start();
	require_once "connexion.php";

	if (!isset($_SESSION["estConnecte"])) {
		header('Location: login.php');
	}

	$idStock=$_SESSION["idStock"];
	$utilisateur=$_SESSION["utilisateur"];

	if (!isset($_SESSION['stock'])) {
		chargerStock();
	}
	$stock=$_SESSION["stock"];
	
	function chargerStock() {
		global $stock;
		$_SESSION["stock"]=Stock::charger($_SESSION["idStock"]);
		$stock=$_SESSION["stock"];
	}
?>