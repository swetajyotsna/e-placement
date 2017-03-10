// JavaScript Document
$(document).ready(function(e) {
    
	$("#signin").click(function(){
		var uid=$("#uid").val();
		var pwd=$("#pwd").val();
		
		$.ajax({
			
			type:'post',
			url:'ajaxlogin.php',
			data:{uid:uid,pwd:pwd},
			success:function(res)
			{	  	
				alert(res);
			}
			
			});
		
		
		});
	
});