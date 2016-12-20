      <?php
	  session_start();
			if(isset($_POST['submit']))
			{
			          
					  
   		if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) 
		{
						                 $strTo="info@coursefounder.com";
							 
							               
							 $strSubject=" Contact by " .$_POST['name'];
							 $message = "\n".
							 $message = '
            <table width=497 border="0" cellspacing="3"  >
              <tr>
                <td  colspan="3" >&nbsp;</td>
              </tr>
			  
			  <tr>
                
				<td >Name(s)</td>
                <td  > : </td>
                <td  >'.$_POST['name'].'</td>
              </tr>
			   <tr>
                
				<td >Email</td>
                <td  > : </td>
                <td  >'.$_POST['email'].'</td>
              </tr>
			   <tr>
                
				<td >Phone</td>
                <td  > : </td>
                <td  >'.$_POST['phone'].'</td>
              </tr>

			   <tr>
                
				<td >Course</td>
                <td  > : </td>
                <td  >'.$_POST['courses'].'</td>
              </tr>
			  <tr>

                
				<td >Comments(s)</td>
                <td  > : </td>
                <td  >'.$_POST['message'].'</td>
              </tr>
            </table>
                               
                                             ';
                             
							
								 $headers .= "From:".$_REQUEST['email'] ."\n";
                                 $headers .= "MIME-version: 1.0\n";
                                 $headers .= "Content-type: text/html; charset= iso-8859-1\n"; 
                             $result = mail($strTo,$strSubject,$message,$headers);
							 if ($result)
							 {
							 echo "<script>alert('Thank you for contacting us. We will get back to you shortly')</script>";
							 echo "<script>location.replace('index.html')</script>";
							 }
							 else
							 {
							 echo "<script>alert('Sorry..')</script>";
							 echo "<script>location.replace('index.html')</script>";
							 
							 }

		}
		else
		{
			echo '<script>alert("Sorry, you have provided an invalid security code")</script>';
			echo "<script>location.replace('index.html')</script>";
			
		}
       
							}
							
							
			?>
