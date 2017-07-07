<?php
	class App {
		//TODO: Create database (MySQL Workbench)

		var $debug;
		var $db;

		function __construct($debug = false){
			$this->debug = $debug;
			$this->db    = new PDO("sqlite:assets/codeat.db");
		}

		/*
			@var page: TODO: lazy load ideas 10 by ten in the future 
			@return: array of get
			//Pub toutes les 5 idées
		*/
		function getIdeas($page = 0){
			$q = $this->db->query("SELECT * FROM ideas ORDER BY created DESC");
			return $q->fetchAll(PDO::FETCH_OBJ);
		}

		/*
			@return: boolean
		*/
		function publishIdea($username, $licensekey, $title, $content, $symbol, $time){
			if($username === "jstab_" && $licensekey === "edPS_Jvypc2_549sjqT-jy&cpUbESz6*553BqcX&7"){
				$color = dechex(rand(0x000000, 0xFFFFFF));

			}else{
				return false;
			}
		}
	}
?>