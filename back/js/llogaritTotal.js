window.addEventListener("load", start, false);
var total;
var cmimi="0 L";

function start(){
	total=document.getElementById("total");
	total.innerText=cmimi;
}

function merrCmimin(value){
	cmimi=value+" L";
	total.innerText=cmimi;
} 