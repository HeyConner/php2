<?php 
	class String {
	function string_count($input1, $input2) {
			$input1 = strtolower($input1);
			$input2 = strtolower($input2);
			$stringArray = explode(" ", $input2);
			$stringCount = 0;

			foreach ($stringArray as $word) {
				if($word == $input1) {
					++$stringCount;
				}
			}
			return $stringCount;
		}
	}
?>