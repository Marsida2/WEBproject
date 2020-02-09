window.addEventListener("load", start, false);
var btn;

function start(){
	btn=document.getElementById("shtoPost");
	btn.addEventListener("click", shfaq, false);
}

function shfaq(){
	var teksti=btn.innerText;
	if(teksti.indexOf("Anullo")==(-1)){
		document.getElementById("frmShto").setAttribute("style", "display: block;");
		btn.innerHTML="<i class='fa fa-minus-square fa-lg'></i> Anullo postim";
	} else if(teksti.indexOf("Shto")==(-1)){
		document.getElementById("titulli").value="";
		document.getElementById("permbajtja").value="";
		//document.getElementById("image").value="";
		document.getElementById("frmShto").setAttribute("style", "display: none;");
		btn.innerHTML="<i class='fa fa-plus-square fa-lg'></i> Shto postim";
	}
}