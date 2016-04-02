$(document).ready(function() {


$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
		
		$("body").hover(function(){
			$("#submenu").hide();
			
		});
		
		
	//	window.onbeforeunload = function(){
		//	return "Are you sure you want to leace this page ?";
			
	//	};
		
		
				$("#menulogo").click(function() {
    $(this).toggleClass('rotated');
  });
		
		$("#menulogo").click(function() {
    setTimeout(function() {
        window.location="../index.php";
    }, 5000);
     });
		

		
		
		
		});
		
		 