<div>
	<p>Cách 1</p>
	<?php
		// Cho vòng lặp vô hạn đến khi gặp kí tự sau 'z' (là 'aa')
		$x = 'a';
		for(;;) {
			if($x == 'aa')
				break;
			else {
				echo $x."<br>";
				$x++;
			}
		}

	?>
</div>

<div>
	<p>Cách 2</p>
	<?php
		// Cho vòng lặp vô hạn đến khi gặp kí tự 'z', in 'z' và thoát vòng lặp
		$x = 'a';
		for(;;) {
			if($x == 'z') {
				echo $x."<br>";
				break;
			}
			else {
				echo $x."<br>";
				$x++;
			}
		}
	?>
</div>

<div>
	<p>Cách 3</p>
	<?php
		// Cho vòng lặp 26 lần tương đương 26 kí tự a-z
		$x = 'a';
		for($i = 1; $i <= 26; $i++) {
			echo $x."<br>";
			$x++;
		}
	?>
</div>

<style>
	div {
		float: left;
		margin-left: 20px;
	}
</style>