<?php $this->load->view('header');?>
<div id="edit">
<h3>Edit Profile </h3>
<?php echo form_open('user/edit');?>

	Name:<br>
		<input type="text" name="name" value="<?php echo $data->name; ?>"><br>
	Phone no:<br>
		<input type="text" name="mobile" value="<?php echo $data->mobile; ?>"><br>
	Email:<br>
		<input type="email" name="email" value="<?php echo $data->email; ?>"><br>
		<button name="edit" type="submit">Submit</button>

</form>
</div>
<?php $this->load->view('footer');?>
