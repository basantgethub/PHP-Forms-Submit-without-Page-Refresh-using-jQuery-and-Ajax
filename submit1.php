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
	?>
<?php	
}

?>
