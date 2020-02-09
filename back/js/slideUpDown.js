window.addEventListener("load", start, false);
var link1;
var link2;
var first;
var second;
var btnRegj;



function start(){
	
	link1=document.getElementById("link1");
	link2=document.getElementById("link2");
	first=document.getElementById("first");
	second=document.getElementById("second");
	link1.addEventListener("click", shfaqRegjistro, false);
	link2.addEventListener("click", shfaqHyr, false);
}


function shfaqRegjistro(){
	first.setAttribute("style", "display: none;" );
	second.setAttribute("style", "display: block;" );
}



function shfaqHyr(){
	second.setAttribute("style", "display: none;" );
	first.setAttribute("style", "display: block;" );
}
