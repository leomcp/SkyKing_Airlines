<html>
<head>
<title>faq</title>
<link rel=stylesheet href="css/stylle.css" type="text/css" media=screen />
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
<div id="divb">
<ul>
<li><a href="book.html">Book Tickets</a></li>
<li><a href="web.html">Web_Check_IN </a></li>
<li><a href="flista.html">Flight_Status</a></li>
<li><a href="getfares.html">Get Fares</a></li>
<li><a href="so.html">Special Offers</a></li>
<li><a href="getreg.html">Get Registered</a>
<li><a href="skyexp.html">Skyking Expereince</a></li>
</ul>

</div>
<div id="divsix">

<?php
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$mymail="leomcp550@gmail.com";
$header='from $fn $ln'.phpversion();
$subject='enquiry';
mail($mymail,$subject,$msg,$header);
echo"<h3><center> Thank you for Submitting the form $fn $ln !<br> We will send you an Email and confirmation message as soon as possible.</center></h3>";

?>
</div>
</div><br>
<div id="divlink">
<table width="1000px"  cellpadding="1" cellspacing="10" align="center" >
<caption ><h3>Quick Links</h3></caption>
<tr>
<td ><a href="Book.html">Book_ticket</a></td>
<td><a href="skyexp.html">Skyking Expereince</a></td>
<td><a href="career.html">careers</a></td>
</tr>

<tr>
<td ><a href="web.html">WebCheckIn</a></td>
<td><a href="fa.html">FlyAccount</a></td>
<td><a href="faq.html"class="current">FAQs</a></td>
</tr>

<tr>
<td ><a href="flista.html">Flight Status</a></td>
<td><a href="log.html">Login</a></td>
<td><a href="abtus.html">About Us</a></td>
</tr>

<tr>
<td ><a href="getfares.html">Get Fares</a></td>
<td><a href="getreg.html">Get Registered</a></td>
<td><a href="contact.html">Contact Us</a></td>
</tr>

<tr>
<td ><a href="so.html">Special Offers</a></td>
<td><a href="forgetpawd.html">Forget Password</a></td>
<td><a href="sm.html">Site Map</a></td>
</tr>



</table>

</div>

<div id="divcopy">
<p>Copyright � 2014 The  SKYKing Ltd. All rights reserved.</p>
</div>
</body>
</html>



