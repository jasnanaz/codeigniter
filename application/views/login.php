<?php $this->load->view('header'); ?>
<div class="content">
<h3>Admin Login</h3>
<?php echo form_open('login/loginpage');?>
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
				<button type="submit"name="login">Cancel</button>
    </form>
		</div>
	<?php $this->load->view('footer'); ?>
