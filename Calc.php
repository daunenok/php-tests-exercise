<?php
class Calc {
	public function add($a, $b) {
		return $a + $b;
	}

	public function subtract($a, $b) {
		return $a - $b;
	}

	public function sum(array $arr) {
		return array_sum($arr);
	}

	public function multiply(array $arr) {
		$mult = 1;
		foreach ($arr as $val) {
			$mult *= $val;
		}
		return $mult;
	}

	public function power($a, $b) {
		return $a**$b;
	}

	public function factorial($a) {
		if (!$a) return 0;
		$f = 1;
		for ($i = 1; $i <= $a; $i++) { 
			$f *= $i;
		}
		return $f;
	}
}