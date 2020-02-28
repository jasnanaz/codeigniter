<?php $this->load->view('header');?>
<div id="change">

<?php echo form_open('user/changepass');?>

	Current Password:<br>
		<input type="password" name="currentpassword"><br>
	New Password:<br>
		<input type="password" name="newpassword"><br>
	Confirm Password:<br>
    	<input type="password" name="confirmpassword"><br>

		<button type="submit"name="save" style="margin:10px;">save</button>
</form>
</div>

<?php $this->load->view('footer');?>
