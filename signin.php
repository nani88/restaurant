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
input[type=text],input[type=password]
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
<script>
function validate()
{
  var username=document.signin.username.value;
  var pwd=document.signin.password.value;
  var status=false;
  if(username==null || username=="")
  {
    document.getElementById("unamelocation").innerHTML="<img src='img/cross-red-128.png' width='10px' height='10px'/>Enter username";
    status=false;
  }
  else
  {
    document.getElementById("unamelocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";
    status=true;
  }
  if(pwd==null || pwd=="")
  {
    document.getElementById("passwordlocation").innerHTML="<img src='img/cross-red-128.png' width='25px' height='25px'/>Enter password";
    status=false;
  }
  else
  {
    document.getElementById("passwordlocation").innerHTML="<img src='img/circle-checkmark-128.png' width='25px' height='25px'/>";
    status=true;
  }
  return status;
}
</script>
</head>

<body>
<center>
		<img src="img/logo.jpg" width="20%" /><br/>		
		<b style="font-size: 18px; color: #660000">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b>
		<br/><br/><br/><br/>
		<div class="row" >
		<div class="col l3 m12 s12"></div>
		<div class="col l6 m12 s12">
<!--form-->
		 <form name="signin" action="home.php" method="post" onSubmit=" return validate()">
     
     <div class="col l12 m6 s12"><input name="username" id="username"  type="text" placeholder="Username"><span id="unamelocation" style="color:red"></span></div>
     <div class="col l12 m6 s12"><input name="password" id="password" type="password" placeholder="Password"><span id="passwordlocation" style="color:red"></span></div>
     
     

    <div class="center">  
     <input type="submit" value="SIGN IN" name="login_account" class="button"/>
    </div>
   
    </form>
    
<!--form-->
		</div>
		<div class="col l3 m12 s12"></div>
		</div>
	</center>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>