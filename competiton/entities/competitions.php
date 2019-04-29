<?php
class competiton{
	private $nom;
	private $nom_c_s;
	private $heure;
	private $date;
	private $cout;
	private $type;

	function __construct($nom,$nom_c_s,$heure,$date,$cout,$type)
	{
		$this->nom=$nom;
		$this->nom_c_s=$nom_c_s;
		$this->heure=$heure;
		$this->date=$date;
		$this->cout=$cout;
		$this->type=$type;
	}

	function setNom()
	function getNom()
	{return $this->nom;}

	function setNom_c_s()
	function getNom_c_s()
	{return $this->nom_c_s;}

	function setHeure()
	function getHeure()
	{return $this->heure;}

	function setDate()
	function getDate()
	{return $this->date;}

	function setCout()
	function getCout()
	{return $this->cout;}

	function setType()
	function getType()
	{return $this->type;}
}