
function searchPush(){
				$(".search-form").submit(function(){
					var str = $(this).serialize();
			$.ajax({
					type: "post",
					url: "include/search_include/search.php",
					data: str,
					success: function(html){
						$('.blog-content').html(html);
					}})
					return false;
					});
}
function loginPush(){
	//document.location.href='include/form/login.php';
	document.getElementById('wrapper_test').style.display = 'block';
}
function regPush(){
	//document.location.href='include/form/regin.php';
	document.getElementById('wrapper_disk').style.display = 'block';
	
}
function logOut(){
	document.location.href='include/security/logout.php';
}
function businessPush(){
	document.location.href='include/state/business-content-state.php';
}		
function userPush(){
	 document.location.href='include/state/user-content-state.php';	
}
function businessPushButton(){
		document.location.href='include/state/business-content-state.php';
}		
function userPushButton(){
		document.location.href='include/state/user-content-state.php';
}
function businessPushButtonData(){
		document.location.href='include/state/business-content-state.php';
}		
function userPushButtonData(){
		 document.location.href='include/state/user-content-state.php';
}
function checkPush(){
	 document.location.href="include/security/check.php";
}
/*
function userPush(){
	
  $(document).on('click',function(){
	$('#button-user-content-efil').click(function () {
		$('.user-content').toggleClass('user-content').toggleClass('user-categories');
		});
	});
}
function businessPush(){
		 $(document).ready(function(){
	$('.index').click(function () {
		$(this).toggleClass('click');
		});
	});
		//$('.blog-content').empty();
	//var dd = $('.blog-content').append($('.left-footer'));
		// document.location.href='include/state/user-content-state.php';
			//document.location.href='include/state/business-content-state.php';
				$.ajax({
				 	type: "post",
					url: "business/html_include/business-content/business-content.php",
					data: 1,
					success: function(html){
						$('.blog-content').html(html);
					}})
					return false;
			$.ajax({
					type: "post",
					url: "users/html_include/user-content/user-content.php",
					data: 1,
					success: function(html){
						$('.blog-content').html(html);
					}})
					return false;
}*/