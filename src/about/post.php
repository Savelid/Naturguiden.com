<?php
      	if (isset($_POST['Submit'])) { 
			
		   	$StartDate = $_POST['StartDate'];
			$EndDate = $_POST['EndDate'];
			$NumberOfPeople = $_POST['NumberOfPeople'];
			$Category = $_POST['Category'];
			$SubCategory = $_POST['SubCategory'];
			$Comment = $_POST['Comment'];
			$FirstName = $_POST['FirstName'];
			$LastName = $_POST['LastName'];
			$Email = $_POST['Email'];
			$Phone = $_POST['Phone'];
			$Country = $_POST['Country'];
			
			 
			$headers = "From: ".$email." \r\n";
			$headers .= "Reply-To: ".$email." \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\r\n";
			
			$subject = "Intresse av VED3";
			
			$mailto = "john@savelid.se";
			 
			$form_message = "<html><body><p><b>".$name."</b> har skickat ett meddelande angående VED3.\n
			<br>
			<b>E-post:</b> ".$Email." \n 
			<b>Telefon:</b> ".$Phone." \n
			<br>
			<b>Meddelande:<b/> ".$Comment." </p></body></html>"; 
			 	 
				 
			$sent = mail($mailto, $subject, $form_message, $headers);

			
	   	if($sent){
		   	echo "<p style='color: green'>Tack ".$FirstName.", ditt meddelande har skickats! Vi besvarar meddelandet så fort som möjligt.</p>"; 
		   }
	   	else {
		   	echo "<p style='color: red'>Meddelandet kunde inte skickas. Vänligen försök igen eller kontakta oss via telefon eller e-post.</p>"; 
	 }
	 
 }
?>       