<!DOCTYPE html>
<html>
<head>
  <title>Studio Sirobk : Boris Brullmann</title>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
  <script src="processing.js"></script>

<canvas data-processing-sources="lefond.pde"></canvas>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<meta name="Keywords" content="Studio Sirobk, sirobk, StudioSirobk, Sirobkstudio, internet, communication en ligne, marketing, communication, agence interactive, site de marque, graphic design, grafik, graphisme, webdesign, Paris, Berlin, e-communication, e-marketing, e-pub, director Boris Brullmann, marketing en ligne, online marketing, corporate Identity, logo, web">

<meta name="Description" content="Founded by Boris Brullmann, studio sirobk is a Creative digital studio specialized in web and mobile devices' interface design. Berlin . Paris">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> 
<link rel="icon" type="image/png" href="http://www.studiosirobk.com/favicon.png" /> 




<link href='http://fonts.googleapis.com/css?family=Economica:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="leStyle.css" />
</head>


<script type="text/javascript">
/* $(document).ready(function(){
$(".faded").each(function(i) {
  $(this).delay(i * 400).fadeIn();
});
}

*/
$(document).ready(function(){
	setTimeout(function() { $(".fade1").fadeIn(500);},5000);
		setTimeout(function() { $(".fade2").fadeIn(500);},7000);
			setTimeout(function() { $(".fade3").fadeIn(500);},9000);
       
  });
</script>


 
<body>
<div class='boite'><img src='backImage.jpg' /></div>
<div id='logo'><img src='logo2012Web.png' /></div>

<div class="fade1"><div id='theExplan'>
<H1>Founded by <strong>Boris Brullmann</strong>, studio sirobk is a Creative digital studio specialized in web and mobile devices' interface design.<BR/>Berlin . Paris</H1>
</div></div>

<div class="fade3">
<div id='lesLiens'>
<div id='leTit'>RECENT PROJECTS</div>

<BR/>	

<table >
	<tr>
<?php


$retour = mysql_query('SELECT * FROM leSite ORDER BY ordre');
$cou=0;
while ($donnees = mysql_fetch_array($retour)){
echo  "<td width='400px'><div class='theLink'><a href='".$donnees['lien']."' target='_blank'>".$donnees['nom']."</a>";
echo  "<div class='laLeg'>".substr($donnees['lien'], 0, 20)."...</div>	</div></td>";
$cou++;
if($cou==3){
$cou=0;
echo "</tr><tr>";
}
}
?>
</table>
	
	
</div>
</div>


<div class='fade2'>
<a href='mailto:studio@studiosirobk.com'><div id='footer'><img src='bottomInfos.png'  /></div></a></div>


</body>
</html>