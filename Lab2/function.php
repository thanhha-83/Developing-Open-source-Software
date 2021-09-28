<?php 
	function nguyenTo($n)
	{
	    for ($i = 2; $i <= (int)sqrt($n); $i++)
	        if ($n % $i == 0 and $n != $i)
	        {
	            return 1;
	            break;
	        }
	}

	function soChuSo($n)
	{
		$dem = 0;
		while($n > 0) {
			$n = (int)($n/ 10);
			$dem++;
		}
		return $dem;
	}

	function chuSoMax($n)
	{
		$max = -1;
		while($n > 0) {
			$m = $n % 10;
			$n = (int)($n/ 10);
			if($m > $max)
				$max = $m;
		}
		return $max;
	}
?>