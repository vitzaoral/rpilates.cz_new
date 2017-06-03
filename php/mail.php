<?php 
if(isset($_POST['email']) &&
 isset($_POST['fname']) && isset($_POST['lname']) &&
 isset($_POST['phone']) && 
 isset($_POST['message']))
  {	
	// TODO - kam posílat email
    $to = "vitzaoral@seznam.cz";	
	
	// 	email zakaznika
	$from = $_POST['email'];
	
	// jméno zákazníka, phone
    $name = $_POST['fname'] . " " . $_POST['lname']; 
    $phone = $_POST['phone']; 
    $subject = "Email ze stránek rpilates.cz";
    
    // zprava
    $message = $name . " odeslal z formuláře na rpilates.cz následující:" . "\n\n" . $_POST['message'];
    $message = $message . "\n\n\nKontakt na odesílatele:\n\nJméno: " . $name . "\nE-mail: " . $from . "\nTelefon: " . $phone;
   
    // odesílatel
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;    
    
    // poslu email nám i odesílateli
    mail($to,$subject,$message,$headers);    
    //mail($from,"rpilates.cz - potvrzení emailu","Děkujeme za Vaši zprávu, budeme se Vám snažit co nejdříve odpovědět. rpilates.cz",$headers2);
    
    // vratim ze se odeslal 1 email tak jak to ocekava scripts.js
    echo 1; 
}
else{	
	//echo "email " . $_POST['email'] . " name " . $_POST['name'] . " message " . $_POST['message'];	
	// neco se nepovedlo
    return -1;	
}
?>