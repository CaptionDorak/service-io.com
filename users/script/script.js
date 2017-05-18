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
function logOut(){
	document.location.href='include/security/logout.php';
}
function businessPushButton(){
		document.location.href='business/state/business-content-state.php';
}		
function userPushButton(){
		document.location.href='users/state/user-content-state.php';
}
function businessPushButtonData(){
		document.location.href='business/state/business-content-state-data.php';
}		
function userPushButtonData(){
		 document.location.href='users/state/user-content-state-data.php';
}
function businessPush(){
	document.location.href='include/state/business-content-state.php';
}	
function userPushButtonSale(){
		 document.location.href='users/state/user-content-state-push.php';
}
function userThorPushAway(){
	document.getElementById('wrapper_test').style.display = 'block';
}
function userThorPushAwayExit(){
	document.getElementById('wrapper_test').style.display = 'none';
}