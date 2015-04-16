
	// AJAX and javaScript --- Ch1

/*	
	var request;
	if(window.XMLHttpRequest){
		request= new XMLHttpRequest();
	}
	else {
		request= new ActiveXObject("Microsoft.XMLHTTP");
	}

	request.open("GET", "data.xml");
	request.onreadystatechange=function(){

		 if((request.readyState===4) && (request.status===200)){
		 	//console.log(request);
		 	//document.writeln(request.responseText);
		 	var modify= document.getElementsByTagName("li");
		 	
		 	/*for(var i=0;i<modify.length;i++)
		 	{
		 		modify[i].innerHTML=request.responseText;
		 	}
		 	
	}
}
request.send();
*/
$("#search").keyup(function(){
	var searchField= $("#search").val();
	console.log(searchField);
});

