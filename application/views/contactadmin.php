<?php $this->load->view('header');?>
<div id="admin">

<?php echo form_open('user/contactpage');?>
	From:<br>
		Name:<br>
			<input type="text" name="fname" value="<?php echo $_SESSION['name'];?>" readonly/><br>
		Email:<br>
			<input type="email" name="mailid" value="<?php echo $_SESSION['email'];?>" readonly/><br>
	To:<br>
		Name:<br>
			<input type="text" name="name"><br>
		Email:<br>
			<input type="email" name="email"><br>
		Message:<br>
			<textarea name="message">  </textarea><br>
			<button type="submit">Submit</button>
</form>
</div>
<?php $this->load->view('footer');?>
