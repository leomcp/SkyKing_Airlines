<html>
<head>
<title>faq</title>
<link rel=stylesheet href="css/stylle.css" type="text/css" media=screen />
<style type="text/css">
#alertmsg{
margin:0 auto;
display:block;
background-color:#d0d0d0;
width:500px;
padding:30px;
color:#333;
border:1 solid#333;
border-radius:10px;
}</style>
</head>
<body >
<div id="divone">
<h1 style="color:#FFF;" ><center> SKY KING AIRLINES</center></h1></div>
<div id="divwrapper"> 
   <div id="divlinks">
      <div id="divnav" >
         <ul>
<li><a href="homepage.html"  >Home</a></li>
        <li><a href="fa.html" >FlyAccount</a></li>
         <li><a href="abtus.html" >About us</a></li>
        <li><a href="contact.html" >Contact us</a></li>
        <li><a href="sm.html" >Site Map </a></li>
       </ul>
     </div >
   </div >
</div>
<div id="divfive">

<div id="divsix">

<?php

$flag="ok";
$msg="";
if(!$_POST['email']){
$msg="Please enter your Email Id";
$flag="notok";
}
else
if(!$_POST['pwd']){
$msg="Please enter your Password";
$flag="notok";
}
if($flag=="notok"){
echo"<div id='alertmsg'>";
echo "<h1> $msg </h1>";
echo "<input type='button' value='back' id='a' onClick='history.go(-1)' >";echo"</div>";
}
if($flag=="ok"){
$host="localhost";
$user="root";
$pass="";
$database="skyking";
$query="select * from member where pwd='$p1';";
@mysql_connect("$host","$user","$pass") or  die("connection failed");
@mysql_select_db($database) or die("connection failed");
@mysql_query($query) or die("efef");
echo "<div id='alertmsg'><h1>Congratulations ! you have successfully changed the  password </h1> 
<br>
<a href='log.html' id='a'>Sign_in</a></div>";

}
?>
</div>
</div>
</body>
</html>