<?php $this->load->view('header'); ?>
<div id="login">
<h3>User Login</h3>
<?php echo form_open('user/userloginpage');?>
<?php
	if(isset($data)){
		echo $data. '<br>';
	}
?>

        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password">
        <br>
        <input type="checkbox" name="keep_me_logged_in" value="yes">keep me logged in<br>
        <button type="submit"name="login">login</button>
		<button type="submit"name="login">cancel</button>
    </form>
	</div>
	<?php $this->load->view('footer'); ?>
