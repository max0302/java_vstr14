<?php
/**
 * 
 */
class NastyaApi
{
	public $token;
	public $action;
	public $tokens;
	
	function __construct($token, $action)
	{
		$this->token = $token;
		$this->action = $action;
		$this->tokens = ['dimon', 'Nastya', 'roma', 'daniil', 'slava', 'max'];
	}

	public function returnResponse() {
		switch ($this->action) {
			case 'getCars':
				return $this->actionGetCars();
				break;
			case 'getCountries':
				return $this->actionGetCountries();
				break;
			case 'getPlayers':
				return $this->actionGetPlayers();
				break;		
			case 'getDrags':
				return $this->actionGetDrags();
				break;
		}
	}

	public function check_token() {
		return in_array($this->token, $this->tokens);
	}
	function actionGetPlayers() {
		return ['1'=>'Pit Sumpras', '2'=>'Rafael Nadel', '3'=>'Roger Federer'];
	}
	function actionGetCars() {
		return ['1'=>'Lada', '2'=>'VolkswagenPolo', '3'=>'AudiA8'];
	}
	function actionGetCountries() {
		return ['1'=>'Ukraine', '2'=>'USA', '3'=>'Germany'];
	}
	function actionGetDrags() {
		return ['1'=>'Наркотик1', '2'=>'Drag2', '3'=>'Drag3'];
	}
}