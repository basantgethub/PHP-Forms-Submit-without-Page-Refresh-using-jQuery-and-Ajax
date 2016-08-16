<?php

if(!empty($_REQUEST['submit']))
{	
	$registration = array();
	$length = count($_REQUEST['registration']);	
	for($i=0; $i < $length; $i+=4){
		if(!empty($_REQUEST['registration'][$i]['value'])){
		?>	
	<?php
			$registration['name'] = $_REQUEST['registration'][$i]['value'];
			$registration['username'] = $_REQUEST['registration'][$i+1]['value'];
			$registration['email'] = $_REQUEST['registration'][$i+2]['value'];
			$registration['password'] = $_REQUEST['registration'][$i+3]['value'];
			print_r($registration);
	?>		
	
    
    <table border="0">
    <tr>
    <td colspan="2" style="color:blue; font-size:30px; font-family:cursive; font-weight:bold;">Successfully Registered !!!</td>
    </tr>
    
    <tr>
    <td colspan="2"><hr /></td>
    </tr>
    
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">Name</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $_REQUEST['registration'][$i]['value']; ?></td>
    </tr>
    
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">User Name</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $_REQUEST['registration'][$i+1]['value']; ?></td>
    </tr>
	
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">Email</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $_REQUEST['registration'][$i+2]['value']; ?></td>
    </tr>
	
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">password</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $_REQUEST['registration'][$i+3]['value']; ?></td>
    </tr>
    </table>
	<?php	}
	}
	//print json_encode($registration);die;
	?>
    <?php
	
}else if(!empty($_POST)){
	
	print_r($_POST);
	$first_name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	?>
    
    <table border="0">
    <tr>
    <td colspan="2" style="color:blue; font-size:30px; font-family:cursive; font-weight:bold;">Successfully Registered !!!</td>
    </tr>
    
    <tr>
    <td colspan="2"><hr /></td>
    </tr>
    
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">First Name</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $first_name; ?></td>
    </tr>
    
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">User Name</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $user_name; ?></td>
    </tr>
	
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">User Name</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $password; ?></td>
    </tr>
    
    <tr>
    <td style="color:blue; font-size:18px; font-family:cursive; font-weight:bold;">Email</td>
    <td style="color:red; font-size:18px; font-family:cursive; font-weight:bold;"><?php echo $email; ?></td>
    </tr>
    </table>
<?php	
}

?>
