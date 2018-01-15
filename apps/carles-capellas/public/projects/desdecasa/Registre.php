<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<link rel="Shortcut Icon"  href="http://desdecasacat.ipage.com/favicon.ico" /> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Fes-te Soci! - DesdeCasa</title>
	  <meta name="keywords" content="desdecasa,descomptes,vic,Vic,ofertes,restaurants,bars,osona,Osona" />
        <meta name="description" content="Aconsegueix descomptes exclusius als bars i restaurants de Vic. Ofertes dels establiments de la capital d'Osona." />
		<link href="estil.css" rel="stylesheet" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>

		<script language="JavaScript" type="text/JavaScript">

			function MM_reloadPage(init) {  //reloads the window if Nav4 resized
 				 if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    				document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
 				 else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
					}
				MM_reloadPage(true);

			function MM_findObj(n, d) { //v4.01
  				var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
   				 d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
 				 if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  				for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  				if(!x && d.getElementById) x=d.getElementById(n); return x;
				}

			function MM_validateForm() { //v4.0
 				var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
 				for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    			if (val) { nm=val.name; if ((val=val.value)!="") {
     			if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        		if (p<1 || p==(val.length-1)) errors+='- El camp "'+nm+'" ha de contenir una adreça electrònica vàlida.\n';
     				 } else if (test!='R') { num = parseFloat(val);
        		if (isNaN(val)) errors+='- El camp "'+nm+'" ha de contenir un número.\n'; 
        		if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          			min=test.substring(8,p); max=test.substring(p+1);
          		if (num<min || max<num) errors+='- El camp "'+nm+'" conté un valor incorrecte.\n';
  				  } } } else if (test.charAt(0) == 'R') errors += '- El camp "'+nm+'" és obligatori.\n'; }
 				 } if (errors) {
 				 alert('Han aparegut els següents errors:\n'+errors);
 				 }
  				else {
     			if (document.form1.rest.selectedIndex==0){ 
      	 		alert("Han aparegut els següents errors:\n - Falta seleccionar el restaurant") 
      	 		return 0; 
   				} 
  				}
  				document.MM_returnValue = (errors == '');
				}
   	
		</script>

<script type="text/javascript" language="JavaScript">
<!--
function checkCheckBoxes(theForm) {
	if (
	theForm.CHECKBOX_1.checked == false) 
	{
		alert ('Primer has d\'acceptar les condicions d\'ús i la política de privacitat');
		return false;
	} else { 	
		return true;
	}
}
//-->
</script>

	</head>
    <body><div id="mainbg">
        
		<?php include 'Header.html' ?>
  		
		<!-- Contingut de la pàgina -->  
    	<div align="left"> </div>
      <!-- action="RegistreAccio.php" -->
    		<form name="form1" id="form1" method="post"  onsubmit="return checkCheckBoxes(this);">
      			<p align="left">&nbsp;</p>
      			
      <p align="left"><font color="#FFFFFF" size="3">Passa 
        a formar part de la comunitat<strong> <em>DesdeCasa</em></strong> i aconsegueix 
        el teu carnet <strong>per només 5€</strong>! Omple el formulari següent 
        amb les teves dades i rebràs un e-mail de confirmació amb més detalls 
        sobre l'entrega del carnet. Registra't i podràs disfrutar de tot un any de descomptes! ( Recorda que les següents dades són les que apareixeràn com a soci i titular del carnet)</font></p>
      <p align="left">&nbsp;</p>
	  
	   
      <table cellpadding="0" cellspacing="0" width="100%" align="center" bgcolor="" >
        <tr> 
          <td width="51%" height="345"><img src="imatges/ExempleCarnet.png" alt="" width="432" height="313" /></td>
	   
	   <td width="49%"><p align="left">&nbsp;</p>
            <p align="left"><font color="#FFFFFF" size="3">Nom 
              i cognoms:<img src="imatges/gif-transparente.gif" width="15" height="8" /> 
              <input name="nom" type="text" id="nom" size="35"/>
              </font></p>
            <p align="left">&nbsp;</p>
            <p align="left"><font color="#FFFFFF" size="3">Adreça:<img src="imatges/gif-transparente.gif" width="12" height="8" /> 
              <input name="adreca" type="text" id="adreca" size="35" />
              </font></p>
            <p align="left">&nbsp;</p>
            <p align="left"><font color="#FFFFFF" size="3">Correu 
              electrònic*: <img src="imatges/gif-transparente.gif" width="11" height="8" /> 
              <input name="correu" type="text" id="correu" size="35" />
              </font></p>
            <p align="left">&nbsp;</p>
            <p align="left"><font color="#FFFFFF" size="3">Telèfon 
              de contacte:<img src="imatges/gif-transparente.gif" width="12" height="8" /> 
              <input name="telefon" type="text" id="telefon" size="13" maxlength="9" />
              </font></p>
            <p align="left">&nbsp;</p>
            <input type="hidden" name="on" value="Modalitat: "><font size="3" color="#FFFFFF" face="Karla">Modalitat:</font><font color="#FFFFFF" size="3"><img src="imatges/gif-transparente.gif" alt="" width="12" height="8" /></font><font size="3" color="#FFFFFF" face="Karla">&nbsp; </font>
<select name="os">
	<option value="Estandard">Estàndard  5,00 €</option>
	<option value="Premium">Premium  9,00 €</option>
</select> 
            
<br /><br />

<input type="hidden" name="on0" value="Modalitat">
            <font size="3" color="#FFFFFF" face="Karla">Pagament:</font><font color="#FFFFFF" size="3"><img src="imatges/gif-transparente.gif" alt="" width="12" height="8" /></font> 
            <select name="os0">
	<option value="Targeta">Targeta o PayPal</option>
	<option value="Metalic">Metàl·lic</option>
</select>
            <p align="left">&nbsp;</p>
            <p align="left">
              <font color="#FFFFFF" size="2">
              <input name="CHECKBOX_1" type="checkbox" id="checkbox" align="bottom" />
              <font color="#FFFFFF" size="3"><img src="imatges/gif-transparente.gif" alt="" width="12" height="8" /></font>Accepto les<a href="Legal.php" target="_blank"><font color="#FFFFFF" face="Karla"><em> condicions d'ús i la política de privacitat</em></font></a></font></p>
            <p align="left">&nbsp;</p>
            <p align="left"></font><img src="imatges/gif-transparente.gif" width="156" height="8" /> 
              <input name="Enviar" type="submit" id="Enviar" disabled value="  Enviar  " onclick="MM_validateForm('nom','','R','adreca','','R','correu','','RisEmail','telefon','','RinRange599999999:999999999'); return document.MM_returnValue"/>
              <input name="Esborrar" type="reset" id="Esborrar" value="Esborrar" />
            </p></td>
	   
	   </tr>
	   </table>
      <p align="left">&nbsp;</p>
      <p align="left"><font color="#FFFFFF" size="2">* 
        Si pagues amb targeta assegura't que el correu electrònic coincideixi amb el del propietari de la targeta de crèdit o el compte de PayPal. </font>      </p>
      <p align="left">&nbsp;</p>
	  
	  
      			
      </form>
    		<p align="left"><font color="#FFFFFF" size="+1" face="Georgia, Times New Roman, Times, serif"><strong><font size="+2">	
      		</font></strong></font><font face="Georgia, Times New Roman, Times, serif"></font> </p>

		<!-- Peu de pagina -->
      	
    	<div id="main">
      	<div id="buttons2"> 
      	<ul>
        <li><font face="Georgia, Times New Roman, Times, serif"><a href="https://twitter.com/DesdeCasa_cat" title="" target="_blank" class="active"><strong></strong></a></font></li>
        <li><font face="Georgia, Times New Roman, Times, serif"><a href="Anunciat.php" title=""><strong>Vols anunciar-te?</strong></a></font></li>
        <li><font face="Georgia, Times New Roman, Times, serif"><a href="Contacte.php" title=""><strong>Contacta'ns</strong></a></font></li>
        <li><font face="Times New Roman, Times, serif"><a href="Legal.php" title=""><strong>Avís legal</strong></a></font></li>
        <li><font face="Times New Roman, Times, serif"><a href="http://www.facebook.com/DesdeCasa.cat" title="" target="_blank"><strong> </strong></a></font></li>
      	</ul>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
</div>
        </div>
        </div>
        </div>
		<div align="left"><div align="center"><div style="text-align: center; font-size: 0.75em;"></div>
		</div></div>

		<!-- Google Analitycs -->
		<script type="text/javascript">

			var _gaq = _gaq || [];
  			_gaq.push(['_setAccount', 'UA-25082308-1']);
  			_gaq.push(['_trackPageview']);

  			(function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  			})();

		</script>
		
</body>
</html>
