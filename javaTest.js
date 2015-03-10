var mylinks=document.getElementsByTagName('a');
console.log("Links: ", mylinks.length);

var mainheader= document.getElementById("main-header");
mainheader.setAttribute("align","center");
console.log(mainheader.innerHTML);

/*document.onclick= function(){
	alert("You clicked somewhere in the document");
};
*/

myImage= document.getElementById("main-image");

myImage.onclick= function(){
	alert("You clicked somewhere in the image");
};

var emailField= document.getElementById("email");

emailField.onfocus= function(){
	if(emailField.value=="Your Email")
	emailField.value= "";	
}

emailField.onblur= function(){
	if(emailField.value=="")
	emailField.value= "Your Email";		
}

function simpleMessage(){
	alert("Time out");
}

setTimeout(simpleMessage,5000);
