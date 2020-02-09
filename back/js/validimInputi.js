window.addEventListener("load", starto, false);

function starto(){
	var btnVazhdo=document.getElementById("vazhdo");
	btnVazhdo.addEventListener("click", inputetMbushur, false);
}


function inputetMbushur(){
	var emri=document.getElementsByName("emri")[0].value;
	var mbiemri=document.getElementsByName("mbiemri")[0].value;
	var datelindja=document.getElementsByName("datelindja")[0].value;
	var pass1=document.getElementsByName("fjalekalimi")[0].value;
	var pass2=document.getElementsByName("fjalekalimi2")[0].value;
	if (emri=="" || mbiemri=="" || datelindja=="" || pass2=="" || pass1=="")
		alert("Ju lutem, plotesoni te gjitha fushat!");
	else if(pass2!=pass1){
		alert("Kujdes! Fjalekalimet tuaja nuk perputhen!");
	}
	else{
		document.getElementById("second").setAttribute("style", "display: none;" );
		document.getElementById("third").setAttribute("style", "display: block;" );
	}

}