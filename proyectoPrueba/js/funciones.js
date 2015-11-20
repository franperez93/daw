var numAnterior;
var op=false;
var cont=0;

function numero1(num){
   if(document.getElementById("Ctexto").value=="" && op==false ){
   		$('#dados1,#dados2,#dados3,#dados4,#dados5').click(function (){$(this).hide()});
		document.getElementById("Ctexto").value=num;
		op=true;
		cont++;
		
		//document.getElementById("dados1").style.visibility ="hidden";
		
	}else if(op==false){
		$('#dados1,#dados2,#dados3,#dados4,#dados5').click(function (){$(this).hide()});
		document.getElementById("Ctexto").value+=num;
		op=true;
		cont++;
	
	//	document.getElementById("dados1").style.visibility ="hidden";
	}
	


}
function numero2(num){
   if(document.getElementById("Ctexto").value=="" && op==false ){
		document.getElementById("Ctexto").value=num;
		op=true;
		cont++;
		document.getElementById("dados2").style.visibility ="hidden";
	}else if(op==false){
		document.getElementById("Ctexto").value+=num;
		op=true;
		cont++;
		document.getElementById("dados2").style.visibility ="hidden";
	}
}
function numero3(num){
   if(document.getElementById("Ctexto").value=="" && op==false ){
		document.getElementById("Ctexto").value=num;
		op=true;
		cont++;
		document.getElementById("dados3").style.visibility ="hidden";
	}else if(op==false){
		document.getElementById("Ctexto").value+=num;
		op=true;
		cont++;
		document.getElementById("dados3").style.visibility ="hidden";
	}
}
function numero4(num){
   if(document.getElementById("Ctexto").value=="" && op==false ){
		document.getElementById("Ctexto").value=num;
		op=true;
		cont++;
		document.getElementById("dados4").style.visibility ="hidden";
	}else if(op==false){
		document.getElementById("Ctexto").value+=num;
		op=true;
		cont++;
		document.getElementById("dados4").style.visibility ="hidden";
	}
}
function numero5(num){
   if(document.getElementById("Ctexto").value=="" && op==false ){
		document.getElementById("Ctexto").value=num;
		op=true;
		cont++;
		document.getElementById("dados5").style.visibility ="hidden";
	}else if(op==false){
		document.getElementById("Ctexto").value+=num;
		op=true;
		cont++;
		document.getElementById("dados5").style.visibility ="hidden";
	}
}

function operador(oper){
	if(	op==true){
			document.getElementById("Ctexto").value+=oper;
			op=false;
			cont++;
	}	
}
function resultado(){
	if(cont >=3){
		var operar = document.getElementById("Ctexto").value
		var result = eval(operar);
		numAnterior=result;
		document.getElementById("Ctexto").value=result;
	}else{
		alert("No estas listo para realizar la operacion");
	}
}



	