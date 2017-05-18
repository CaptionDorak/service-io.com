<?php 
	function printRestLoki($connect_loki){
		while (($row = $connect_loki->fetch_assoc()) != false) {
			$i = 0;
			while ($i <= false) {
					$i++;
				echo '<div class="left-workshop"><div class="stop-block"><img src="..">'.substr($row["login"],0,30).'<a href="business/html_include/business-content/business-away.php"> Далее...<a/></div></div>';
			}
		}
	}
	
?>