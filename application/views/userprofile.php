<?php $this->load->view('header'); ?>
<div id="profile">
<?php
	echo 'id'.':'.$_SESSION['id'].'<br>';
	echo 'name'.':'.$_SESSION['name'].'<br>';
	echo 'email'.':'.$_SESSION['email'].'<br>';
	echo 'mobile'.':'.$_SESSION['mobile'].'<br>';
	echo 'username'.':'.$_SESSION['username'].'<br>';
	echo 'password'.':'.$_SESSION['password'].'<br>';
	?>
	</div>
	<?php $this->load->view('footer'); ?>
