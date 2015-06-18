$(document).on("ready", generando);
function generando(){
// confirm("funciona");
}

function pruebaOn()
{
    // alert("operando");
     if (window.confirm("Do you really want to leave?")) 
             { 
                 window.open("exit.html", "Thanks for Visiting!");
             }
}

function confirmaTC()
{
    // alert("operando");
     if (window.confirm("Esta seguro de que desea solicitar este formato?")) 
             { 
                 window.open("gen/TC.php", "Solicitud para Tarjeta Credito Realizada");
             }
}

function confirmaCM()
{
    // alert("operando");
     if (window.confirm("Esta seguro de que desea solicitar este formato?")) 
             { 
                 window.open("gen/CM.php", "Solicitud para Caja Menor Realizada");
             }
}

function confirmaGR()
{
    // alert("operando");
     if (window.confirm("Esta seguro de que desea solicitar este formato?")) 
             { 
                 window.open("gen/GR.php", "Solicitud para Gastos Reembolsables Realizada");
             }
}

// console.log();
function legaliza()
{
    $("#gReembolsa").on("click", gReembolsable);
       function gReembolsable()
        {
            alert("funciona");
            console.log();
  //        if (window.confirm("Do you really want to leave?")) 
  //            { 
  //                window.open("exit.html", "Thanks for Visiting!");
  //            }
        }   
//            alert("Confirma que desea obtener el formato de Gastos Reembolsables?");
}