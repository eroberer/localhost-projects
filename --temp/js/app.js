window.addEventListener("load",function(){
	document.body.style.opacity = "1";
	document.body.style.transform = "scale(1)";

	let port = document.querySelector("input[name='port']");
	let button = document.querySelector("button");

	button.addEventListener("click", redirect);
	window.addEventListener("keydown", function(e){
		if(e.key === "Enter") redirect();	
	});



});

function redirect(){
	window.location.href = window.location.origin + ":" + port.value;
}