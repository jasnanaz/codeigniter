<?php $this->load->view('header');?>
<div id="contact">

	<h2>Contact Us For Your Queries </h2>
	<p>Contact no: 9000768546</p>
	<p>Mail Id: safran@gmail.com</p>
<?php echo form_open('registration/contact');?>
	Name:<br>&nbsp;
		<input type="text" name="fname"><br>
	Email:<br>&nbsp;
		<input type="email" name="mailid"><br>
	Contact No:<br>&nbsp;
		<input type="text" name="contact"><br>
	Your Suggestions&Queries:<br>&nbsp;
		<textarea name="textarea">  </textarea><br>&nbsp;
		<button type="submit">Submit</button>
</form>
</div>
<?php $this->load->view('footer');?>
