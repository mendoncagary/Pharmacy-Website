$(document).ready(function() {	
	
	
	
	$("#icon").click(function(){
			
			$("#submenu").toggle("slow");
			
		});
		
		$("#content").hover(function(){
			$("#submenu").hide();
			
		});
		
		
		
				$("#menulogo").click(function() {
    $(this).toggleClass('rotated');
  });
		
		$("#menulogo").click(function() {
    setTimeout(function() {
        window.location="../index.php";
    }, 5000);
     });
		
		
		$(".radio").on("click",function() { // all radios with class="radio ..." 
    // ajax get or post someserver.php?value=twenty/fourty...
    $.get("cost.php", {value:this.value},function(output) { 
      // add the returned value to a container
      $("#dummycost").css({"display":"none"});
	  $("#dummyship").css({"display":"none"});
	  $("#shipcost").html(output); 
    });
	
	
	$.get("ordertotal.php", {value:this.value},function(ordertotal) { 
      // add the returned value to a container
      $("#dummycost").css({"display":"none"});
	  $("#dummyship").css({"display":"none"});
	 // $("#shipcost").html(output); 
    $("#finalcost").html(ordertotal);
	});
	
  });
		
		
		

    $("#radio2").click(function(){
		$("#visa").css({"box-shadow":"0px 0px 2px 2px #00DBBD"});
		$("#mastercard").css({"box-shadow":"none"});
		$("#amex").css({"box-shadow":"none"});
		$("#paypal").css({"box-shadow":"none"});
		$("#cashondelivery").css({"box-shadow":"none"});
	});

	

    $("#radio3").click(function(){
		$("#mastercard").css({"box-shadow":"0px 0px 2px 2px #00DBBD"});
		$("#visa").css({"box-shadow":"none"});
		$("#amex").css({"box-shadow":"none"});
		$("#paypal").css({"box-shadow":"none"});
		$("#cashondelivery").css({"box-shadow":"none"});
	});
	
	

    $("#radio4").click(function(){
		$("#amex").css({"box-shadow":"0px 0px 2px 2px #00DBBD"});
		$("#mastercard").css({"box-shadow":"none"});
		$("#visa").css({"box-shadow":"none"});
		$("#paypal").css({"box-shadow":"none"});
		$("#cashondelivery").css({"box-shadow":"none"});
	});
	
	

    $("#radio5").click(function(){
		$("#paypal").css({"box-shadow":"0px 0px 2px 2px #00DBBD"});
		$("#amex").css({"box-shadow":"none"});
		$("#mastercard").css({"box-shadow":"none"});
		$("#visa").css({"box-shadow":"none"});
		$("#cashondelivery").css({"box-shadow":"none"});
	});

    $("#radio6").click(function(){
		$("#cashondelivery").css({"box-shadow":"0px 0px 2px 2px #00DBBD"});
		$("#paypal").css({"box-shadow":"none"});
		$("#amex").css({"box-shadow":"none"});
		$("#mastercard").css({"box-shadow":"none"});
		$("#visa").css({"box-shadow":"none"});
		
	});


    
	
	
	
		});
		
		
		