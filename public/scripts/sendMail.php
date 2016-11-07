<?php
$succsMsg = "Mail Sent Successfully";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email']; //<== user input email address
$ph = $_POST['ph'];
$company = $_POST['company'];

$email_from = $email;
$to = "info@eeeblr.in"; //<== update the email address
$email_subject = "$company";
$email_body = "Customer's Name: $name.\n\nCompany Name: $company. \n\nPhone No: $ph. \n\nEmail Address: $email \n";

$headers = "From: $email_from \r\n";
$headers.= "Bcc: invinciblemuffi@gmail.com \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
}
?>
