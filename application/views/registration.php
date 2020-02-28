<?php $this->load->view('header'); ?>
<div id="reg">

    <body>
		<h3>Registration</h3>
	
		<?php echo form_open('registration/reg_page');?>
			  <table>
                    
                    <tr>
                        <td class="v"> Name <span class=red>*</span> </td>
                        <td><input type="text" class="a"  name="name" placeholder="Enter name"></td>
                    </tr>
            
					
                     <tr>
                        <td class="v">Email <span class=red>*</span></td>
                        <td><input type="email" class="a" name="email" placeholder="Enter E-mail"></td>
                    </tr>
                    <tr>
                        <td class="v">Phone </td>
                        <td><input type="number" class="a" name="mobile" placeholder="Enter Phone"></td>
                    </tr>
					<tr>
                        <td class="v">User Name </td>
                        <td><input type="text" class="a" name="username" placeholder="Enter user Name"></td>
					</tr>
					
                    <tr>
                        <td class="v">Password <span class=red>*</span></td>
                        <td><input type="password" class="b" name="password" ></td>
					</tr>
					<tr>
                        <td class="v">Confirm Password <span class=red>*</span></td>
                        <td><input type="password" class="b"  name="confirmpassword" ></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="check" value="bike">I agree to the Terms of use</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="v2">                                   
                            <input class="v1" type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
            </table>
            
        </form>
    </body>
	</div>
</html>
<?php $this->load->view('footer'); ?>
