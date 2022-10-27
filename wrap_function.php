<?php
	function wrap($string, $length){

		$line_break="\n";

		$final_string = '';

		if(!empty($string)){

			$total_len_string = strlen($string);

			if($total_len_string > $length){

				$condition = '/(.{1,'.$length.'})( +|$)|(.{'.$length.'})(?!$)/uS';
	    		$replacewith = '$1$3'.$line_break;

				$final_string = preg_replace($condition, $replacewith, $string);

			} else {

				$final_string = $string;

			}
		}

		return $final_string;
	}


	$string ='The quick brown fox jumped over the lazy dog.';

	$length = 10;

	echo wrap($string, $length);
?>