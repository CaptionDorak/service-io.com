<div class="left-header">
	<div class="logo-header">
			<span>
				
			</span>
	</div>
</div>
<div class="center-header">
	<div class="search-header"> 
		    <form  class="search-form">
		        <input type="text" name="search" id="search-line" placeholder="Введите запрос"> 
		        <input type="submit" value="Поиск" id="search-button" onclick="searchPush()">
		    </form>
    </div>
</div>
<div class="rigth-header">
	<div class="form-login">	
		<?php
			if(isset($_COOKIE['business-content'])){
				echo '<div>Пользователь: '.substr($_COOKIE["TestCookie"],0,15).'</div>';
				echo ' <a href="" id="setting-button">Настройки</a><br>';
				echo '<button type="button" name="logout-button" id="logout-button" onclick="logOut()">Выход</button>';
			}
		?>
    </div>
</div>