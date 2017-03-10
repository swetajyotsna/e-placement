// JavaScript Document
$(document).ready(function(e) {
	
	$("#regform").validate({
		  rules:
		  {
			  'name':{
				  required:true
			  },
			  'uid':{
				  required:true
			  },
			  'pwd':{
				  required:true
			  },
			  'cpwd':{
				  required:true,
				  equalTo:"#pass"
				  }
		  }
		});
	
	/*$("#loginform").validate({
		  rules:
		  {
			  'uid':{
				  required:true
			  },
			  'pwd':{
				  required:true
			  }
			  
		  }
		});
	
	$("#chngpwdform").validate({
		  rules:
		  {
			  'crpwd':{
				  required:true
			  },
			  'npwd':{
				  required:true
			  },
			  'cpwd':{
				  required:true,
				  equalTo:"#pass"
			  }
			  
		  }
		});
	
	$("#forgotform").validate({
		  rules:
		  {
			  'uid':{
				  required:true
			  },
			  'secq':{
				  required:true
			  },
			  'answer':{
				  required:true
			  }
			  
		  }
		});*/
		
		
		
		$("#login").validate(
		{
			rules:{
				
				},
				submitHandler:function()
				{
					var uid=$("#uid").val();
					var pwd=$("#pwd").val();
					$.ajax({
						type:'post',
						url:'ajaxlogin.php',
						data:{uid:uid,pwd:pwd},
						success:function(res)
						{	  	
							if(res=="success")
							{
								window.location="userhome.php";
							}
						}
						
						});
			}
		});
		
});
		



	
		

 
