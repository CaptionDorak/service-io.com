<div>
	<div class="user-content-push">
		<?php echo "Личный аккаунт"; ?>
	</div><br>
	<div style="float: left;width: 90%;">
		Ваши покупки и заказы:
		<br>
		<div style="float: left; width: 20%; height: 100%;">
			<?php 
				include('include/function_stockroom/thor.php');
				$connect_thor = $connection_thor->query("SELECT * FROM `orders_users`");
				printRestThor($connect_thor);
			 ?>
		</div>
	</div>
	<div style="float: right;">
	<div>
	Личный
	<button title="Данные личного аккаунта" onclick="userPushButtonData()" style="width: 15px;height: 15px;"></button>
	</div>
	<div>
	Рабочий
	<button title="Работа и организация" onclick="businessPushButton()" style="width: 15px;height: 15px;"></button>
	<button title="Данные рабочего аккаунта" onclick="businessPushButtonData()" style="width: 15px;height: 15px;"></button>
	</div>	
	</div>
</div>
<?php

?>