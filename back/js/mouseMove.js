window.addEventListener("load", ndertoTelajon, false);

function ndertoTelajon(){
	var tbody=document.getElementById("telajo");
	for(var i=0; i<6; i++){
		var rresht=document.createElement("tr");
			for(var j=0; j<10; j++){
				rresht.appendChild(document.createElement("td"));
			}
			tbody.appendChild(rresht);
	}
	tbody.addEventListener("mousemove", bardhe, false);
	tbody.addEventListener("mouseout", blu, false);

}

	function bardhe(e){
		if(e.target.tagName.toLowerCase()=="td"){
			e.target.setAttribute("style", "transition: background-color 0.2s;");
			e.target.setAttribute("class", "bardhe");
		}
}

	function blu(e){ 
        if(e.target.tagName.toLowerCase()=="td"){
			e.target.setAttribute("style", "transition: background-color 6s;");
			e.target.setAttribute("class", "blu");
	}
}