var numAnterior=0;

function arreglo(numero){
    
   // var result = eval("5+2");
   
   if(document.getElementById("Ctexto").value==0 && numAnterior==0){
		document.getElementById("Ctexto").value=numero;
		numAnterior = numero;
	}else{
		document.getElementById("Ctexto").value+=numero;
		numAnterior+=numero;	
	}
    
}


