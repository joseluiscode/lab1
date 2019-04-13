function validar()
{
    if(document.getElementById("tamaño").value.length==0){
       document.getElementById("tamaño").innerHTML = "&nbsp;<span style='color:red;'>Campo Requerido (*)</span>";
       document.getElementById("tamaño").focus();
       return false;
    }else{
        document.getElementById("tamaño").innerHTML ="&nbsp;";
    }

}