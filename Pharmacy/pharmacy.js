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
			
			$.get("search.php",{Searchval:searchtxt},function(output){
				
				
				$("#output").html(output);
			});
			
			
		}
		
		
		
		