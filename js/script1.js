function msg(){
alert ("Bienvenido");
}

function sumar(){
    var numero1=document.getElementById("numero1").value;
     var numero2=document.getElementById("numero2").value;
    var suma=parseInt(numero1)+parseInt(numero2);
    alert ("la suma es:"+ suma);
}

function fgeneral(){
var numero1=document.getElementById('num1').value;
var numero2=document.getElementById('num2').value;
var numero3=document.getElementById('num3').value;
var r =(numero2*numero2) - (4*(numero1*numero3));
var	x1 = (-numero2 + Math.sqrt(r)) / (2 * numero1);
var x2 = (-numero2 - Math.sqrt(r)) / (2 * numero1);
                    
                        alert("X1="+ x1 +"X2="+x2);
}