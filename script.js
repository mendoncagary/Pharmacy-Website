$(document).ready(function() {
        var headerTop = $('#header').offset().top;
        var headerBottom = headerTop + 70; // Sub-menu should appear after this distance from top.
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop(); // Current vertical scroll position from the top
            if (scrollTop > 680) { // Check to see if we have scrolled more than headerBottom
                if (($("#header").is(":visible") === false)) {
                    $('#header').fadeIn('slow');
                }
            } else {
                if ($("#header").is(":visible")) {
                    $('#header').hide();
                }
            }
        });
		
		
		$("#pagedownarrow").click(function(){
			

			//document.getElementById("content").scrollIntoView();
			    $('html,body').animate({scrollTop:$("#content").offset().top}, 500);
			
		});
		
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
        window.location="index.php";
    }, 5000);
     });
		
		
		
    });
