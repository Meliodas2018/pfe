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
 $T3    = '';
 $T4    = '';
 $T5    = '';
 $T6    = '';
 $T7    = '';
 


function getPosts()
{
    $posts = array();
    
    $posts[1] = $_POST['T2'];
    $posts[2] = $_POST['T3'];
	$posts[3] = $_POST['T4'];
    $posts[4] = $_POST['T5'];
	$posts[5] = $_POST['T6'];
    $posts[6] = $_POST['T7'];
	 
    return $posts;
}

// Insert Data

if(isset($_POST['B1']))
{
    $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5]) || empty($data[6]) )
    {
        echo '
		Please Enter Your Data :';
    }  else {
        
        $insertStmt = $con->prepare('INSERT INTO rat (mat, prof, salle, hor, fil, grp) VALUES (:mat,:prof,:salle,:hor,:fil,:grp);');
        $insertStmt->execute(array(
                    ':mat'    => $data[1],
                    ':prof'    => $data[2], 
                    ':salle'    => $data[3],
                    ':hor'    => $data[4], 
                    ':fil'    => $data[5],
                    ':grp'    => $data[6], 					
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
<link rel="File-List" href="Rattrappage_fichiers/filelist.xml">
<title>Gestion De Rattrappage</title>
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

<form method="POST" name = "f">
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
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
 <v:fill src="Rattrappage_fichiers/image001.jpg" o:title="Marbre blanc" type="tile"/>
 <v:shadow color="#868686"/>
 <o:extrusion v:ext="view" backdepth="10pt" color="#630" on="t" viewpoint=",0"
  viewpointorigin=",0" skewangle="180" brightness="4000f" lightposition="-50000"
  lightlevel="52000f" lightposition2="50000" lightlevel2="14000f"
  lightharsh2="t"/>
 <v:textpath style='font-family:"Arial Black";v-text-kern:t' trim="t"
  fitpath="t" string="Gestion De Rattrappage :"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=686 height=89
src="Rattrappage_fichiers/image002.gif" alt="Gestion De Rattrappage :" v:shapes="_x0000_s1025"><![endif]></p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<table border="0" width="100%">
		<tr>
			<td width="491">
			<p align="center"><b>ID :</b></td>
			<td>
			<p align="left"><input name="T1" size="47" style="font-weight: 700"></td>
		</tr>
	</table>
	<table border="0" width="100%" height="159">
		<tr>
			<td width="492">
			<p align="center"><b>Matiere :</b></td>
			<td>
			<p align="left"><input name="T2" size="47" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="492">
			<p align="center"><b>Enseignant :</b></td>
			<td>
			<p align="left"><input name="T3" size="47" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="492">
			<p align="center"><b>Salle :</b></td>
			<td>
			<p align="left"><input name="T4" size="47" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="492">
			<p align="center"><b>Horaire&nbsp; :</b></td>
			<td><input name="T5" size="47" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="492">
			<p align="center"><b>Filliere :</b></td>
			<td>
			<p align="left"><input name="T6" size="47" style="font-weight: 700"></td>
		</tr>
		<tr>
			<td width="492">
			<p align="center"><b>Groupe :</b></td>
			<td>
			<p align="left"><input name="T7" size="47" style="font-weight: 700"></td>
		</tr>
	</table>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Enregistrer" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Modifier" name="B2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Supprimer" name="B3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="index.htm"><input type="reset" value="Page D'acceuil" name="B4"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
</form>

</body>

</html>
