<?php

	function wrap($string, $length){

		$line_break="\n";

		$final_string = '';

		if(!empty($string)){

			$total_len_string = strlen($string);

			if(isset($length) && !empty($length) && $total_len_string > $length){

				$condition = '/(.{1,'.$length.'})( +|$)|(.{'.$length.'})(?!$)/uS';
	    		$replacewith = '$1$3'.$line_break;

				$final_string = rtrim(preg_replace($condition, $replacewith, $string));

			} else {

				$final_string = $string;

			}
		}

		return $final_string;
	}


	$string ='word word word.';

	$length = 4;

	echo wrap($string, $length);
?>
