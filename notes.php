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
 $D1    = '';
 $D2    = '';
 $D3    = '';
 $D4    = '';
 $T2    = '';
 $T3    = '';
 


function getPosts()
{
    $posts = array();
    
    $posts[0] = $_POST['T1'];
    $posts[1] = $_POST['D1'];
	$posts[2] = $_POST['D2'];
    $posts[3] = $_POST['D3'];
	$posts[4] = $_POST['D4'];
    $posts[5] = $_POST['T2'];
	  $posts[6] = $_POST['T3'];
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
        
        $insertStmt = $con->prepare('INSERT INTO note (code,fil,grp,mat,type,date,note) VALUES (:code,:fil,:grp,:mat,:type,:date,:note);');
        $insertStmt->execute(array(
                    ':code'    => $data[0],
                    ':fil'    => $data[1], 
                    ':grp'    => $data[2],
                    ':mat'    => $data[3], 
                    ':type'    => $data[4],
                    ':date'    => $data[5], 	
                     ':note'    => $data[6], 					
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
<link rel="File-List" href="notes_fichiers/filelist.xml">
<title>Gestion De Notes</title>
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

<form method="POST"   >
	
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p align="center">&nbsp;<!--[if gte vml 1]><v:shapetype id="_x0000_t136"
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
 <v:fill src="notes_fichiers/image001.jpg" o:title="Marbre blanc" type="tile"/>
 <v:shadow color="#868686"/>
 <o:extrusion v:ext="view" backdepth="10pt" color="#630" on="t" viewpoint=",0"
  viewpointorigin=",0" skewangle="180" brightness="4000f" lightposition="-50000"
  lightlevel="52000f" lightposition2="50000" lightlevel2="14000f"
  lightharsh2="t"/>
 <v:textpath style='font-family:"Arial Black";v-text-kern:t' trim="t"
  fitpath="t" string="Gestion De Notes :"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=686 height=89
src="notes_fichiers/image002.gif" alt="Gestion De Notes :" v:shapes="_x0000_s1025"><![endif]></p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<table border="0" width="100%">
		<tr>
			<td width="443">Code Etudiant&nbsp;&nbsp; :</td>
			<td><input type="text" name="T1" size="46"></td>
		</tr>
		<tr>
			<td width="443">Filliére :</td>
			<td><select size="1" name="D1">
			<option>Controle</option>
			<option>Synthése</option></select></td>
		</tr>
		<tr>
			<td width="443">Groupe :</td>
			<td><select size="1" name="D2">
			<option>Controle</option>
			<option>Synthése</option></select></td>
		</tr>
		<tr>
			<td width="443">Matiere :</td>
			<td><select size="1" name="D3">
			<option>Controle</option>
			<option>Synthése</option>
			</select></td>
		</tr>
		<tr>
			<td width="443">Type D'examen :</td>
			<td><select size="1" name="D4">
			<option>Controle</option>
			<option>Synthése</option>
			</select></td>
		</tr>
		<tr>
			<td width="443">Date : </td>
			<td><input type="date" name="T2" size="46"></td>
		</tr>
		<tr>
			<td width="443">Note : </td>
			<td><input type="text" name="T3" size="46"></td>
		</tr>
		<tr>
			<td width="443">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="443">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="443">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<p>&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Enregistrer" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Effacer" name="B2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Page Principale" name="B4"  href="index.htm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Sortir" name="B3"></p>
</form>

</body>

</html>
