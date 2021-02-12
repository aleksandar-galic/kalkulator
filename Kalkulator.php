<?php

class Kalkulator {
	
	private $prviBroj;
	private $drugiBroj;
	private $operacija;

	public function __construct($prviBroj, $drugiBroj, $operacija)
	{
		$this->prviBroj = $prviBroj;
		$this->drugiBroj = $drugiBroj;
		$this->operacija = $operacija;
	}

	private function saberi()
	{
		return $this->prviBroj + $this->drugiBroj;
	}

	private function oduzmi()
	{
		return $this->prviBroj - $this->drugiBroj;
	}

	private function pomnozi()
	{
		return $this->prviBroj * $this->drugiBroj;
	}

	private function podeli()
	{
		return $this->prviBroj / $this->drugiBroj;
	}

	public function izracunaj()
	{
		switch ($this->operacija) {
		case 'sabiranje':
			return $this->saberi();
			break;
		
		case 'oduzimanje':
			return $this->oduzmi();
			break;
		
		case 'mnozenje':
			return $this->pomnozi();
			break;

		case 'deljenje':
			return $this->podeli();
			break;
		
		default:
			return;
			break;
		}
	}

}