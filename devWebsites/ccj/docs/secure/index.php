<?php
   if ($_SERVER['REQUEST_METHOD']=="POST"){
// we'll begin by assigning the To address and message subject
$to="mstewart@comunidadyjusticia.org";
$subject="Cuidate Test sent from CCJ website";
// get the sender's name and email address
// we'll just plug them a variable to be used later
//$from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";
//if(empty($_POST['name'])  ||
//  empty($_POST['email']) ||
//empty($_POST['message']))$from = stripslashes($_POST['message']);
//{
//    $errors .= "\n Error: all fields are required";
//}
//$name = $_POST['name'];
//$email_address = $_POST['email'];
$message = $_POST['message'];
//if (!eregi(
//"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
//$email_address))
//{
//    $errors .= "\n Error: Invalid email address";
//}
   // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
   // store the file information to variables for easier access
   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $file_name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];
   // here we'll hard code a text message
   // again, in reality, you'll normally get this from the form submission
   $message = "\n\n Message: \n\n $message \n\nHere is your file: $file_name";
   // if the upload succeded, the file will exist
   if (file_exists($tmp_name)){
      // check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){
         // open the file for a binary read
         $file = fopen($tmp_name,'rb');
         // read the file content into a variable
         $data = fread($file,filesize($tmp_name));
         // close the file
         fclose($file);
         // now we encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }
     // now we'll build the message headers
     $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";
      // next, we'll build the message body
      // note that we insert two dashes in front of the
      // MIME boundary when we use it
      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";
      // now we'll insert a boundary to indicate we're starting the attachment
      // we have to specify the content type, file name, and disposition as
      // an attachment, then add the file content and set another boundary to
      // indicate that the end of the file has been reached
      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";
      // now we just send the message
      if (@mail($to, $subject, $message, $headers))
         echo "Message Sent, thank you!";
      else
         echo "Failed to send, give us a call to talk about other was to send us your test";
   }
} else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Centro de Comuinidad y Justicia</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<div id="contact_form">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data" name="form1" id="contactForm"/>
</head>
<body>
<div class="one_third">
<label for="tele">Upload Your Test:</label>
<input id="tele" name="filename" type="file" />
<label for="message">Optional Message:</label>
<textarea cols="71" rows="5" name="message"></textarea></div>
<input class="formbtn" type="submit" value="Send Message" />
</form>
</div>
</body>
</html>
<?php } ?>

