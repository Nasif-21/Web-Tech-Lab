<?php
$isPost=false;
$username="";
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
}
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$username=$_POST["pass"];
}

?>

<div >
    <center><img src="Pilot.jpg" height=200 width=1300 style="opacity:0.4" ></center>
    <br>
   <center> <h1 style="color:rgb(171,60,60)">Welcome Pilot</center>
   <center><p style="color:rgb(171,60,12)">Lets get yourself introduce with other pilots around the world</center>
   
</div>
<style>
table, th, td {

}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
<form action="#" method="post">
<table class="center">
    <tr>
        <td>
        
        <th></th>
        <th></th>
         <td>
        </tr>
    <tr>
    <td>Username:</td>
    <td><input type="text" id="uname" name="uname"></td><br><br>
    <?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
</tr>
    <tr>
   <td> Password:</td>
   <td><input type="password" id="pass" name="pass"></td>
   <?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
</tr>

</table>

   <center> Gender:
   <input type="radio" id="gender" name="gender" value="Male">Male


   <input type="radio" id="gender" name="gender" value="Female">Female

   <input type="radio" id="gender" name="gender" value="Others">Others<br></br>
</center>

<center>
    Skills:
    <input type="checkbox" id="skill[]" value="ATR72">ATR72
    <input type="checkbox" id="skill[]" value="Boing777">Boing 777
    <input type="checkbox" id="skill[]" value="DHC 8">DHC 8
   <input type="checkbox" id="skill[]" value="Airbus 350">Airbus 350
</center>
   <br>
   <br>
   <center> 
   License type :<select name="License">
    <option value="Domestic">Domestic</option>
    <option value="International">International</option>
    <option value="Cargo">Cargo</option>
    <option value="Military">Military</option>
    <option value="Private">Private</option>
</select>
</center>
<table class="center">
<tr>
<td>Present Address:</td>
    <td><textarea rowspan="4" colspan="40"></textarea></td><br><br>
</tr>
<tr>
<td>Permanent Address:</td>
    <td><textarea rowspan="4" colspan="40"></textarea></td><br><br>
</tr>
</table>
<br>
<br>
<center><button type="button"> Confirm</button>
</form>
