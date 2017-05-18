<?php 
	function printRestThor($connect_thor){
	
		while (($row = $connect_thor->fetch_assoc()) != false) {
			$i = 0;
			while ($i <= false) {
					$i++;
				echo '<div class="left-workshop"><div class="stop-block"><img src="..">'.substr($row["user_login"],0,30).'<a href="" onmousedown="userThorPushAway()"> Далее...<a/></div></div>';
			}
		}

	}
	//printRestThor($connect_thor);
?>