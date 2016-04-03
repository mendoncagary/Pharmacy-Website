$(document).ready(function() {


$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
		
		$("#content").hover(function(){
			$("#submenu").hide();
			
		});
		
		
		//$("#searchcontainer").click(function(){
			
			
			//$("#searchform").submit();
			
		//});
		
		
            
			$("#plus").click(function(){
			
			
			var oldvalue=$("#number").value;
			var newvalue=parseFloat(oldvalue)+1;
			$("#number").value(newvalue);
			
		});
		
		
		$("#minus").click(function(){
			
			
			document.getElementById("number").stepdown(1);
			
		});
		
		
			$("#menulogo").click(function() {
    $(this).toggleClass('rotated');
  });
		
		$("#menulogo").click(function() {
    setTimeout(function() {
        window.location="../index.php";
    }, 5000);
     });
		
		
			
				
			
		
		});
		
		
		function searchq(){
			
			var searchtxt=$("input[name='search']").val();
			
			
		
			
			
			$.get("search.php",{Searchval:searchtxt},function(output0,output1,output2,output3,output4,output5){
				
				$("#mainoutput").css({"background-image":"url(../img/img21.png)"});
				$("#topper").css({"display":"initial"});
				$("#photo1").css({"display":"none"});
				$("#contrast").css({"display":"none"});
				
				$("#mainoutput").html(output0,output1,output2,output3,output4,output5);
		

		
			
			});
			
			
			
			
		}
		
		
		
		
		