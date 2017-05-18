<div>
	<div class="business-content-push" style="float: left;width: 90%;" >
	<span style="float: left;">Рабочий аккаунт</span><br>
		<div style="float: left;width: 100%;height: 250px;min-height: 50%;">
			<div style="float: left;">
				<span>Услуги</span>
			</div>
			<div style="float: left;">
				<span>Персонал</span>
			</div>
			<div style="float: left;">
				<span>Файлы</span>
			</div>
		</div><br>
		<div style="float: left;">

			<div class="business-content-push-workshop">
				<?php 
					include('include/function_stockroom/loki.php');
					$connect_loki = $connection_loki->query("SELECT * FROM `organization`");
					printRestLoki($connect_loki);
				 ?>
			</div>
		</div>
		
	</div>
	<div style="float: right; width: 10%;">
	Личный
	<button title="Личные покупки и услуги" onclick="userPushButton()" style="width: 15px;height: 15px;"></button>
	<button title="Данные личного аккаунта" onclick="userPushButtonData()" style="width: 15px;height: 15px;"></button>
	</div><br>
	<div style="float: right;width: 10%;">
	Рабочий
	<button title="Данные рабочего аккаунта" onclick="businessPushButtonData()" style="width: 15px;height: 15px;"></button>
	</div>
</div>
<?php

?>