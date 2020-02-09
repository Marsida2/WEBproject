window.addEventListener("load", start, false);
var btnShiko;
var diviQeShfaqet;

function start(){
	btnShiko=document.getElementById("btnShikoTeGjitha");
	btnShiko.addEventListener("click", shfaqDivin, false);
}

function shfaqDivin(){
	diviQeShfaqet=document.getElementById("kampetKomplet");
	diviQeShfaqet.setAttribute("style", "display: block");
} 