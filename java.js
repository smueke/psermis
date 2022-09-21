(function(){
		   var preloader = document.getElementById("preload");
		   
		   var loading = 0;
		   var id = setInterval(frame, 500);
		   function frame(){
			       if(loading==10){
					   clearInterval(id);
					   window.open("lg.php","_self");
					   }
					   else{
						   loading = loading + 1;
						   if(loading==10){
							   preload.style.anumation="fadeout 1s ease"
						   }
			             }
		              }
		   
		            })();
		            