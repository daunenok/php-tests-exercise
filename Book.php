<?php
class Book {
	public function title($arg) {
		$arr = explode(" ", $arg);
		foreach ($arr as &$word) {
			if ($word != "the" && $word != "a" && $word != "an" && $word != "and" && $word != "in" && $word != "of")
				$word = ucfirst($word);
		}
		$arr[0] = ucfirst($arr[0]);
		return implode(" ", $arr);
	}
}