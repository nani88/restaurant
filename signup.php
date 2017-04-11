<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<style>
.button{
    background-color: white; 
    
    padding:10px;
   border:none;
   border-bottom: 1px solid red;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-bottom: 100px;
}
input[type=text],input[type=password],input[type=email]
{
    
    font-size:15px;
    padding-left: 7px;
    border-radius:5px;
    background:rgba(0,0,0,0.1);
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #94b8b8;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #94b8b8;
}
:-ms-input-placeholder { /* IE 10+ */
  color:#94b8b8;
}
:-moz-placeholder { /* Firefox 18- */
  color:#94b8b8;
}
</style>
<script type="text/javascript" language="javascript">
function validate()
{
  var fname=document.signup.fname.value;
  var lname=document.signup.lname.value;
  var uname=document.signup.uname.value;
  var pwdlen=document.signup.password.value.length;
  var pwd1=document.signup.password.value;
  var repwd=document.signup.password1.value;
  var mail=document.signup.email.value;
   var atpos = mail.indexOf("@");
    var dotpos = mail.lastIndexOf(".");
  var status=false;
   
  if(fname==null || fname=="")
  {
    document.getElementById("fnamelocation").innerHTML="<img src='img/cross-red-128.png' width='25px' height='25px'/>Enter first name";
    status=false;
  }
  else
  {
    document.getElementById("fnamelocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";
    status=true;
  }
  if(lname==null || lname=="")
  {
    document.getElementById("lnamelocation").innerHTML="<img src='img/cross-red-128.png' width='25px' height='25px'/>Enter last name";
    status=false;
  }
  else
  {
    document.getElementById("lnamelocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";
    status=true;
  }
  if(uname==null || uname=="")
  {
    document.getElementById("unamelocation").innerHTML="<img src='img/cross-red-128.png' width='25px' height='25px'/>Enter username";
    status=false;
  }
  else
  {
    document.getElementById("unamelocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";
    status=true;
  }
  if(pwdlen<6)
  {  
       document.getElementById("passwordlocation").innerHTML="<img src='img/cross-red-128.png' width='25px' height='25px' />Minimum 6 characters";  
       status=false; 
    }
  else
  {  
        document.getElementById("passwordlocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";  
        status=true;
    } 
  if(pwd1!=repwd||repwd=="")
  {
    document.getElementById("password1location").innerHTML="<img src='img/cross-red-128.png' width='25px' height='25px'/>Same as password"; 
    status=false;
  }
  else
  {
    document.getElementById("password1location").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";  
        status=true;
  }
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length || mail == "" )
  {
    document.getElementById("maillocation").innerHTML ="<img src='img/cross-red-128.png' width='25px' height='25px'/> enter valid email";
    return false;
   }
   else
   {
     document.getElementById("maillocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";
    status=true;
   }
  return status; 
}
</script>
</head>

<body>
<center>
		<a href="index.php"><img src="img/logo.jpg" width="20%" /><br/></a>		
		<b style="font-size: 18px; color: #660000">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b>
		<br/><br/><br/><br/>
		<div class="row" >
		<div class="col l3 m12 s12"></div>
		<div class="col l6 m12 s12">
<!--form-->
		 <form name="signup" action="signup.php" method="post" onSubmit=" return validate()">
     <div class="row">
     
     <div class="col l6 m6 s12"><input name="fname"  type="text" placeholder="First name"><span id="fnamelocation" style="color:red"></span></div>

     <div class="col l6 m6 s12"><input name="lname"  type="text" placeholder="Last name"><span id="lnamelocation" style="color:red"></span></div>
     </div>
       <div class="row">
     <div class="col l6 m6 s12"><input name="uname"  type="text" placeholder="Username"><span id="unamelocation" style="color:red"></span></div>
     <div class="col l6 m6 s12"><input name="email"  type="email" placeholder="Email" ><span id="maillocation" style="color:red"></span></div>
     </div>
      <div class="row">
     <div class="col l6 m6 s12"><input name="password"  type="password" placeholder="Password"><span id="passwordlocation" style="color:red"></span></div>
     <div class="col l6 m6 s12"><input name="password1"  type="password" placeholder="Re-enter Password"><span id="password1location" style="color:red"></span></div>
     </div>
       
      <div class="row"> <div class="col l12 m12 s12"><input name="address"  type="text" placeholder="Address"> <span id="addresslocation" style="color:red"></span></div></div>
     
     
    <div class="center">  
     <input type="submit" value="SIGN UP" name="create_account" class="button"/></div>
    </div>

    
   
    </form>
    <?php
if(isset($_POST['create_account']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
    die('could not connect '.mysql_error());
  }
  mysql_select_db("restaurant",$con);
  mysql_query("INSERT INTO `users` (
  `firstname`,
  `lastname`,
  `username`,
  `email`,
  `password`,
  `address` )
  VALUES('$fname', '$lname', '$uname', '$email', '$password', '$address' );");
}
  ?>
    
<!--form-->
		</div>
		<div class="col l3 m12 s12"></div>
		</div>
	</center>


	
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>