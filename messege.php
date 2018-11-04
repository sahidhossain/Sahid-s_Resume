<?php
if(isset($_POST['submit']))
{

	include_once('db.php');
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);	
	$messege=mysqli_real_escape_string($con,$_POST['messege']);	


	if(!preg_match("/^[a-zA-Z ]*$/",$name))
    	{
    		     		header('Location:index.php?Name_got_Some_Bad_Character_1');
	                    exit();
    	}
    	else
    	{
    		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    		{
    		     		 header('Location:index.php?Email_is_not_valid');
	                    exit();
    		}
    		else
    		{
					// $insert="insert into information(firstname,lastname,username,email,phoneno,birthdate,city,country,password,terms) values('$firstname','$lastname','$username','$email','$phoneno','$date','$city','$country','$pass','$terms')";

                    $insert="INSERT INTO `portfolio`(`name`, `email`, `subject`, `messege`) VALUES ('$name','$email','$subject','$messege')";
    					$lastvar=mysqli_query($con,$insert);
    					if($lastvar==True)
    					{
    			 		header('Location:index.php?You_Successfully_Send_The_Messege');
	                    exit();
    					}
    					else
    					{
    						    		header('Location:index.php?You_ar_not_success');
    						    		exit();
    					}
			}

    	}

    				// move_uploaded_file($tmp,"../images/$image");

}
   
?>