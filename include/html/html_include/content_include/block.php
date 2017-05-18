<div class="block-left">
<?php 	
		function printRes($connect){
			while (($row = $connect->fetch_assoc()) != false) {
			$i = 0;
				while ($i <= false) {
					$i++;
				echo '<div class="left-workshop"><div class="stop-block"><img src="..">'.$row["id"].'<a href="">...<a/></div></div>';
				}
			}
		}
		$connect = $connection_thor->query("SELECT * FROM `orders_users` WHERE `status_order` != '0'");
		printRes($connect);
		
	?>
</div>
<div class="block-rigth">
	<?php 	
		function printPres($connect){
			while (($row = $connect->fetch_assoc()) != false) {
			$i = 0;
				while ($i <= false) {
					$i++;
				echo '<div class="rigth-workshop">'.$row["id"].'</div>';
				}
			}
		}
		$connect = $connection_loki->query("SELECT * FROM `organization_orders` WHERE `status_order` != '0'");
		printPres($connect);
		
	?>
</div>
