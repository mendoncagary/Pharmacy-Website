$(document).ready(function() {


$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
		
		$("#content").hover(function(){
			$("#submenu").hide();
			
		});
		
		
		$("#searchcontainer").click(function(){
			
			
			$("#searchform").submit();
			
		});
		
		
		});
		
		
		function searchq(){
			
			var searchtxt=$("input[name='search']").val();
			
			
			$.get("search.php",{Searchval:searchtxt},function(output0,output1,output2,output3,output4,output5){
				
				$("#topper").css({"display":"initial"});
				$("#photo1").css({"display":"none"});
				$("#contrast").css({"display":"none"});
				
				$("#mainoutput").html(output0,output1,output2,output3,output4,output5);
				
				
			
			});
			
			
		}
		
		
		
		
		