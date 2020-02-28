<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>task</title>
<style>
	#main nav{
		float:right;
		margin-top:35px;
		
	}
	body{
		background-color:rgb(127, 255, 212);
	}
	a{
		padding:18px;
	}

	#main img{
		height:100px;
		width:200px;
		background-color:rgb(127, 255, 212);
        
	}
	#main{
		width:100%;
		height:150px;
	}
	

	#link{
		padding:18px;
		background-color:rgb(0, 128, 128);
		margin-top:350px;
		text-align:center;
		color:#000080;
		font-size:18px;
	}
	.content{
		text-align:center;
		margin-top:50px;

	}
	#contact,#login,#profile,#edit,#change,#admin{
		text-align:center;
		margin-top:50px;
	}
	#reg{
		
		margin-top:50px;
		margin-left:40%;
		
	}
	

</style>      

    </head>
    <body>
	<div id="container">
        <div id="main">
               <img src="<?php echo base_url()."/asset/images/company.png"?>">
			   <nav>
					<?php
						if($this->session->userdata('id') && $this->session->userdata('id') !=""){
					?>
					
			
                    	<a href="<?php echo site_url("user/userprofile"); ?>">User Profile</a>
		
						<a href="<?php echo site_url('user/edit') ?>">Edit Profile</a>

						<a href="<?php echo site_url('user/changepass') ?>">Change Password</a>

						<a href="<?php echo site_url('user/contactpage') ?>">Contact Admin</a>

						<a href="<?php echo site_url('user/logout') ?>">Logout </a>

						
					
					<?php
						}else{
					?>

                       
                  
                    	<a href="<?php echo site_url()."/registration/home"; ?>">Home</a>

						<a href="<?php echo site_url()."/registration/about"; ?>">About</a>

						<a href="<?php echo site_url()."/registration/contact"; ?>">Contact</a>
			
						<a href="<?php echo site_url()."/registration/reg_page"; ?>">Registration</a>

						<a href="<?php echo site_url()."/user/userloginpage"; ?>">user Login</a>

						<a href="<?php echo site_url()."/login/loginpage"; ?>">Admin Login</a>

						
			
						
					
					<?php } ?>
			
					
                 </nav>
				<h1 style="text-align:center;">SAFRAN</h1>
                
      
			</div>	
	</body>
</html>
