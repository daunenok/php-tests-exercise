<?php
class Pig {
	public function translate($arg) {
		$arr = explode(" ", $arg);
		$new = [];
		foreach ($arr as $value) {
			$new[] = $this->translateWord($value);
		}
		return implode(" ", $new);
	}

	public function translateWord($arg) {
		$vowels = ["e", "y", "u", "i", "o", "a"];
		$flag = (strtoupper($arg[0]) == $arg[0]);
		$arg = strtolower($arg);
		if (in_array($arg[0], $vowels)) {
			$result = $arg . "ay";
		} else {
			$i = 1;
			while (!in_array($arg[$i], $vowels) || ($arg[$i-1] == "q" && $arg[$i] == "u")) 
				$i++;
			$result = substr($arg, $i) . substr($arg, 0, $i) . "ay";
		}
		if ($flag) 
			$result = ucfirst($result);
		return $result;
	}
}