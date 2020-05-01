 $(document).ready(function(){
 	 $(".box").click(function(){
 	 	 $(this).hide(2000,function(){
 				 $(this).remove();
 			 });
 	 });
 		 $("html").mouseover(function(){
 		 		$(".container").slideDown(10000);
 		 });
 });
 