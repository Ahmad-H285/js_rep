var mylinks=document.getElementsByTagName('a');
console.log("Links: ", mylinks.length);

var mainheader= document.getElementById("main-header");
mainheader.setAttribute("align","center");
console.log(mainheader.innerHTML);

/*document.onclick= function(){
	alert("You clicked somewhere in the document");
}
*/

myImage= document.getElementById("main-image");

myImage.onclick= function(){
	alert("You clicked somewhere in the image");
}

