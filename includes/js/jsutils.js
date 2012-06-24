//Base code taken from http://trevordavis.net/ Thanks!
$(document).ready(function(){
						   
	$("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'light_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			
		});
	
	$("#submit1").click(function() {
								 
		$("#error").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var emailToVal = $("#email").val();
		if(emailToVal == '') {
			$("#email").after('<span id="error" class="small-bright-red"><br>Is there anything there?</span>');
			hasError = true;
		} else if(!emailReg.test(emailToVal)) {	
			$("#email").after('<span id="error" class="small-bright-red"><br>Is that an <em>email</em> address?</span>');
			hasError = true;
		}
		
		if(hasError == false) {
			$(this).hide();
			$("#email").hide();
			$("#sendEmail li.buttons").append('<img src="imgs/templates/loading.gif" alt="Loading" id="loading" />');
			$.post("includes/php/sendemail.php",
					{ emailTo: emailToVal },
						function(data){
							$("#sendEmail").slideUp("fast", function() {
								confirmationMsg = '<span id="confirmationMsg" class="small-bright-blue">' + emailToVal + ' has joined the fray!<a id="addAnotherEmail" href="#">  (add another email)</a></span><br />';
								$("#sendEmail").before(confirmationMsg);
								$("#addAnotherEmail").click(function() {
									$(this).remove();
									$("#email").show();
									$("#submit1").show();
									$("#sendEmail li.buttons #loading").hide();
									$("#sendEmail").slideDown("normal");
									return false;
								 });
							});
						}
					 );
			}
			
		return false;
	});
	
});

function preloader() 
{
     // counter
     var i = 0;

     // create object
     imageObj = new Image();
	 
     // set image list
     images = new Array();
     
	 for( var i = 0; i < arguments.length; i++ ) {
	 	images[i] = arguments[i];
		imageObj.src = images[i];
	 }
} 


function toggleVisibility(toggID) {
 document.getElementById(toggID).style.display = "";
  if(document.getElementById(toggID).style.visibility == "hidden" ) {
    document.getElementById(toggID).style.visibility = "visible";
  }
  else {
  document.getElementById(toggID).style.visibility = "hidden";
  }
}

function toggleDisplay(toggID) {
/*  el = document.getElementById(toggID);
  el.style.visibility = "visible";
if(el.style.display == "none" ) {
   document.getElementById(toggID).style.display = "";
  }  else {
    document.getElementById(toggID).style.display = "none";
    el.style.visiblity = "none";
  }*/
}

function targetLargeImg(e, target) {
    document.getElementById('g').src=target;
    if (e.stopPropagation) {
       e.stopPropagation();
    }
}

function cancelAction(e) {
 if(e.stopPropagation) {
     e.stopPropagation();
 }
}

function shackmanEmail() {
    ML="p n:t=iaem/\"r.o<@hfs>lkc";
    MI="?71A<8B5;976E4>3C79@CA7GF9720<8CC=G>9;DC79@CA7GF9720<8CC=G>9?:7D";
    OT="";
    for(j=0;j<MI.length;j++){
    OT+=ML.charAt(MI.charCodeAt(j)-48);
    }
    document.write(OT);
}



