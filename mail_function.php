<?php
/**
 * 
 */
class ClassName extends AnotherClass
{
	function __construct()
	{
		# code...
		$data	=	array(
			"full_name"			=>	"John Doe",
			"email_address"		=>	"customermail@gmail.com",
			"Phone"				=>	"9876543210",
			"description"		=>	"hello this is mail description."
		);
		$this->send_mail($data);
	}
	public  function send_mail($data)
   {
    # code...

      


/******message design start****/

$email="example@gmail.com ";

$message_of_verify_email="
<!-- Latest compiled and minified CSS -->
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>

<!-- jQuery library -->
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js></script>

<!-- Latest compiled JavaScript -->
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js></script>
<center>
  <table class='body-wrap' style='text-align:center;width:86%;font-family:arial,sans-serif;border:12px solid rgba(126, 122, 122, 0.08);border-spacing:4px 20px;'>
        <tr>
          <img src='logo-img.png' class='img-responsive img-circle' style='width:100px; border-radius:500px'>
          </tr>
          <tr>
            <td>
                <center>
                    <table bgcolor='#FFFFFF' width='80%'' border='0'>
                        <tbody>
                            <tr>
                                <td style='font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5'>
                                    <h1 style='color:#575252;text-align:center;'>Welcome Master Creationz</h1>
                                </td>
                            </tr>
                            <tr style='text-align:center;color:#575252;font-size:14px;'>
                                <td>
                                    <span><h3>Congratulations<h3></span>
                                </td>
                            </tr>
                            <tr style='text-align:center;color:#a2a2a2;font-size:14px;'>
                                <td>
                                    <span>You have new enquiry</span>
                                </td>
                            </tr>
                            
                           
                        </tbody>
                    </table>

                </center>
            </td>
        </tr>
    </table>

<div class='container'>
  <h2>Enquiry details</h2>
  
  <table class='table'>
    
    <tbody>
      <tr>
        <th>Name</th>
        <td>".$data['full_name']."</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>".$data['email_address']."</td>
      </tr>
      <tr>
        <th>Phone</th>
        <td>".$data['Phone']."</td>
      </tr>
        <th>Description</th>
        <td>".$data['description']."</td>
      </tr>

     
      </tbody>
    </table>
  </div>

  </center>

  ";
  /******message design end****/
  /********************email send start***************/
$from_email=$data['email_address'];
  $headers= "MIME-Version: 1.0\r\n";
  $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $headers.="FROM : <$from_email> \r\n ";
  $subject_of_verification="Subject of mail";
  mail($email,$subject_of_verification,$message_of_verify_email,$headers);
  /********************email send end**********************/
  }
}
/**
 * 
 */

?>