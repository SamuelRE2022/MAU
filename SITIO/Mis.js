function ingreso()
{
    var u = document.getElementById('usuario').value;
    var p = document.getElementById('pass').value;

    document.getElementById('usu').value=u;
    document.getElementById('clave').value=p;
    document.getElementById('frm').submit();
}

function DelHistory()
{
    if(confirm('ESTA SEGURO DE QUERER SALIR'))
    {
        //window.history.pushState({},'bar','/bar');
        //window.history.pushState(null,'','index.php');
        //browser.history.deleteAll();
        window.open('index.php','_self');
        //window.close();
    }
}

function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function Ver(datos,div){		
	eval("var divResultado_"+div+"=document.getElementById('"+div+"');");                
        eval("var objeto_"+div+"=objetoAjax();");
        eval('objeto_'+div+'.open("GET", "'+datos+'");');
      
 eval('objeto_'+div+'.onreadystatechange=function() {if (objeto_'+div+'.readyState==4) {divResultado_'+div+'.innerHTML = objeto_'+div+'.responseText}}');
	eval('objeto_'+div+'.send(null)');
}
function accion(accion, CveHerencia, CveUsuario, CveModulo, CvePrivilegio, CveSistema)
{
    var accion, CveHerencia, CveUsuario, CveModulo, CvePrivilegio, CveSistema;
    Ver('accion.php?accion='+accion+'&CveHerencia='+CveHerencia+'&CveUsuario='+CveUsuario+'&CveModulo='+CveModulo+'&CvePrivilegio='+CvePrivilegio+'&CveSistema='+CveSistema,'ajax');
    location.reload();
}

