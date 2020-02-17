<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns="http://www.w3.org/TR/REC-html40">

<head>

<?php
$dsn = 'mysql:host=localhost;dbname=app';
$username = 'root';
$password = '';

try{
    // Connect To MySQL Database
    $con = new PDO($dsn,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
} catch (Exception $ex) {
    
    echo 'Database Not Connected '.$ex->getMessage();
    
}


 $T1    = '';
 $T2    = '';
 $D1    = '';
 $T3    = '';
 $T4    = '';
 $T5    = '';
 $T6    = '';
  $T7    = '';


function getPosts()
{
    $posts = array();
    
    $posts[0] = $_POST['T1'];
    $posts[1] = $_POST['T2'];
	$posts[2] = $_POST['D1'];
    $posts[3] = $_POST['T3'];
	$posts[4] = $_POST['T4'];
    $posts[5] = $_POST['T5'];
	  $posts[6] = $_POST['T6'];
	  
    return $posts;
}

// Insert Data

if(isset($_POST['B1']))
{
    $data = getPosts();
    if(empty($data[0]) ||  empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5]) || empty($data[6]) )
    {
        echo '
		Please Enter Your Data :';
    }  else {
        
        $insertStmt = $con->prepare('INSERT INTO pay (code,type,mois,fil,spec,grp,frais) VALUES (:code,:type,:mois,:fil,:spec,:grp,:frais);');
        $insertStmt->execute(array(
                    ':code'    => $data[0],
                    ':type'    => $data[1], 
                    ':mois'    => $data[2],
                    ':fil'    => $data[3], 
                    ':spec'    => $data[4],
                    ':grp'    => $data[5], 	
                     ':frais'    => $data[6], 	
                     					 
        ));
        
        if($insertStmt)
        {
               echo 'Your Date Has Been Succesfully Inserted';
        }
        
    }
}


?>


<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="paiement_fichiers/filelist.xml">
<title>Gestion De Paiement</title>
<!--[if !mso]>
<style>
v\:*         { behavior: url(#default#VML) }
o\:*         { behavior: url(#default#VML) }
.shape       { behavior: url(#default#VML) }
</style>
<![endif]--><!--[if gte mso 9]>
<xml><o:shapedefaults v:ext="edit" spidmax="1027"/>
</xml><![endif]-->
</head>

<body>

<form method="POST" >
	
	<p align="center"><!--[if gte vml 1]><v:shapetype id="_x0000_t136"
 coordsize="21600,21600" o:spt="136" adj="10800" path="m@7,l@8,m@5,21600l@6,21600e">
 <v:formulas>
  <v:f eqn="sum #0 0 10800"/>
  <v:f eqn="prod #0 2 1"/>
  <v:f eqn="sum 21600 0 @1"/>
  <v:f eqn="sum 0 0 @2"/>
  <v:f eqn="sum 21600 0 @3"/>
  <v:f eqn="if @0 @3 0"/>
  <v:f eqn="if @0 21600 @1"/>
  <v:f eqn="if @0 0 @2"/>
  <v:f eqn="if @0 @4 21600"/>
  <v:f eqn="mid @5 @6"/>
  <v:f eqn="mid @8 @5"/>
  <v:f eqn="mid @7 @8"/>
  <v:f eqn="mid @6 @7"/>
  <v:f eqn="sum @6 0 @5"/>
 </v:formulas>
 <v:path textpathok="t" o:connecttype="custom" o:connectlocs="@9,0;@10,10800;@11,21600;@12,10800"
  o:connectangles="270,180,90,0"/>
 <v:textpath on="t" fitshape="t"/>
 <v:handles>
  <v:h position="#0,bottomRight" xrange="6629,14971"/>
 </v:handles>
 <o:lock v:ext="edit" text="t" shapetype="t"/>
</v:shapetype><v:shape id="_x0000_s1025" type="#_x0000_t136" style='width:405pt;
 height:51pt' fillcolor="#fc9">
 <v:fill src="paiement_fichiers/image001.jpg" o:title="Marbre blanc" type="tile"/>
 <v:shadow color="#868686"/>
 <o:extrusion v:ext="view" backdepth="10pt" color="#630" on="t" viewpoint=",0"
  viewpointorigin=",0" skewangle="180" brightness="4000f" lightposition="-50000"
  lightlevel="52000f" lightposition2="50000" lightlevel2="14000f"
  lightharsh2="t"/>
 <v:textpath style='font-family:"Arial Black";v-text-kern:t' trim="t"
  fitpath="t" string="Gestion De Paiement :"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=686 height=89
src="paiement_fichiers/image002.gif" alt="Gestion De Paiement :" v:shapes="_x0000_s1025"><![endif]></p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<table border="0" width="100%">
		<tr>
			<td width="631">
			<p align="center"><b>Code Etudiant :</b></td>
			<td>
			<p align="center">
			<input name="T1" size="46" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Type De Paiement :</b></td>
			<td>
			<p align="center">
			<input name="T2" size="46" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Mois Payé :</b></td>
			<td>
			<p align="center">
			<select size="1" name="D1" style="font-weight: 700">
			<option selected>Choisir Le Mois</option>
			<option>Janvier</option>
			<option>Fevrier</option>
			<option>Mars</option>
			<option>Avril</option>
			<option>Mai</option>
			<option>Juin</option>
			<option>Juillet</option>
			<option>Aout</option>
			<option>Septembre</option>
			<option>Novembre</option>
			<option>Decembre</option>
			<option>Octobre</option>
			</select></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Filliere&nbsp; :</b></td>
			<td>
			<p align="center">
			<input name="T3" size="46" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Specialite :</b></td>
			<td>
			<p align="center">
			<input name="T4" size="46" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Groupe :</b></td>
			<td>
			<p align="center">
			<input name="T5" size="46" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Le Frais :</b></td>
			<td>
			<p align="center">
			<input name="T6" size="46" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="631">
			<p align="center"><b>Numero De Paiement :</b></td>
			<td>
			<p align="center">
			<input name="T7" size="46" style="font-weight: 700"></td>
		</tr>
	</table>
	<p align="center">&nbsp;</p>
	<p align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</b>
	<input type="submit" value="Enregistrer" name="B1" style="font-weight: 700"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</b>
	<input type="reset" value="Modifier" name="B2" style="font-weight: 700"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</b><a href="../../../Users/admin/Desktop/application/index.htm">
	<input type="reset" value="Page Principale" name="B4" style="font-weight: 700"></a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</b></p>
</form>

</body>

</html>
