<?php
class Simon {
	public function secho($arg) {
		return $arg;
	}

	public function sshout($arg) {
		return strtoupper($arg);
	}

	public function srepeat($arg, $count = 2) {
		$str = $arg;
		for ($i = 2; $i <= $count ; $i++) { 
			$str = $str . " " . $arg;
		}
		return $str;
	}

	public function sstart($arg, $count) {
		return substr($arg, 0, $count);
	}

	public function sword($arg) {
		$arr = explode(" ", $arg);
		return $arr[0];
	}

	public function stitle($arg) {
		return ucwords($arg);
	}
}