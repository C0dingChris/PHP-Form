<?php 
if (isset($_post['submit'])) {
    $name = $post['name'];
    $subject = $post['subject'];
    $mailFrom = $post['mail'];
    $message = $post['message'];

    $mailTo = "chris.sanger@outlook.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have recieved mail from: ".$name.".\n\n".$message

    mail($mailTo, $subject , $txt , $headers);
    header("Location: index.php?mailsend");
}
?>