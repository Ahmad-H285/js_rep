
var mylinks=document.getElementsByTagName('a');
console.log("Links: ", mylinks.length);

var mainheader= document.getElementById("main-header");
mainheader.setAttribute("align","center");
console.log(mainheader.innerHTML);

/*document.onclick= function(){
	alert("You clicked somewhere in the document");
};
*/
/*
myImage= document.getElementById("main-image");

myImage.onclick= function(){
	alert("You clicked somewhere in the image");
};

var emailField= document.getElementById("email");

emailField.onfocus= function(){
	if(emailField.value=="Your Email"
	emailField.value= "";	
}

emailField.onblur= function(){
	if(emailField.value=="")
	emailField.value= "Your Email";		
}

function simpleMessage(){
	alert("Time out");
}
*/


function eventhandler(){
	document.getElementById("form-contact").onsubmit= function(){
		if(document.getElementById("email").value==""){
			document.getElementById("Error-message").innerHTML="Please insert the email";
			document.getElementById("Error-message").style.color="red";
			return false;
		}

		else{
			document.getElementById("Error-message").innerHTML="";
			return true; 
		}
	};


}

window.onload= function(){ 
		eventhandler();
		};

//$("label, p, h1, title, #main-image").hide(1000);
$("label, h1").click(function(){
	$(this).fadeOut();
});

//jQuery("#main-header").animate();

//setTimeout(simpleMessage,5000);
