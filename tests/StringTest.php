<?php
	require_once "src/String.php";

	class StringTest extends PHPUnit_Framework_TestCase {


		function test_word() {
			$test_String = new String;
			$input1 = "Cat";
			$input2 = "my cat is cute, and my cat is soft.";

			$result = $test_String->string_count($input1, $input2);

			$this->assertEquals(2, $result);

		}
		function test_number() {
			$test_String = new String;
			$input1 = "2";
			$input2 = "I have 2 dogs and 2 cats";

			$result = $test_String->string_count($input1, $input2);

			$this->assertEquals(2, $result);

		}

		function test_letter() {
			$test_String = new String;
			$input1 = "a";
			$input2= "a";

			$result = $test_String->string_count($input1, $input2);

			$this->assertEquals(1, $result);

		}

		function test_special() {
			$test_String = new String;
			$input1 = "!";
			$input2 = "!";

			$result = $test_String->string_count($input1, $input2);

			$this->assertEquals(1, $result);
	}
}
?>