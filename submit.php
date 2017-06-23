<?php
    include 'connection.php';
if( $_POST ){
	
	$fname = $_POST['txt_fname'];
	$email = $_POST['txt_email'];

    $sql = "INSERT INTO tbl_pet(name, email) VALUES('".$fname."', '".$email."')";
    $conn->query($sql);

	?>
    
    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>Success</strong>, Form Submitted Successfully...
    	</div>
    </td>
    </tr>
    
    <tr>
    <td>Name</td>
    <td><?php echo $fname ?></td>
    </tr>
    
    
    <tr>
    <td>Your eMail</td>
    <td><?php echo $email; ?></td>
    </tr>   
    
    </table>
    <?php
	
}