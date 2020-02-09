window.addEventListener("load", start, false);

function start(){
	var btnRegj=document.getElementsByName("submit")[0];
	btnRegj.addEventListener("click", krahasoPasswordet, false);
}

function krahasoPasswordet(){
	var pass1=document.getElementsByName("fjalekalimi")[0];
	var pass2=document.getElementsByName("fjalekalimi2")[0];
	if(pass2.value!=pass1.value){
		pass1.value="";
		pass1.setAttribute("placeholder", "Fjlekalimi nuk perputhet");
		pass2.value="";
		pass2.setAttribute("placeholder", "Fjlekalimi nuk perputhet");
	}
}