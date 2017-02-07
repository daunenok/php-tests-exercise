<?php
class Timer {
	public $time;

	public function setTimer() {
		$this->time = 0;
	}

	public function timeString($a) {
		$hours = intdiv($a, 3600);
		$minsec = $a % 3600;
		$min = intdiv($minsec, 60);
		$sec = $minsec % 60;
		$hours = $this->pad($hours);
		$min = $this->pad($min);
		$sec = $this->pad($sec);
		return $hours . ":" . $min . ":" . $sec;
	}

	public function pad($a) {
		if ($a <= 9) 
			return "0$a";
		else
			return "$a";
	}
}