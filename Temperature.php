<?php

class Temperature {
	public function ftoc($f) {
		$c = 5 / 9 * ($f - 32);
		return $c;
	}

	public function ctof($c) {
		$f = 32 + 9 / 5 *$c;
		return $f;
	}
}

