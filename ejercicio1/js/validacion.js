function validar()
{
    if(document.getElementById("email").value.length==0){
       document.getElementById("email").innerHTML = "&nbsp;<span style='color:red;'>Campo Requerido (*)</span>";
       document.getElementById("email").focus();
       return false;
    }else{
        document.getElementById("email").innerHTML ="&nbsp;";
    }
}