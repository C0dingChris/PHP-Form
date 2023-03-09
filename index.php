<!DOCTYPE html>
<form lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Contact Page</title>

</head>

<body>

   
     <div class="contact-card-container">
        <div class="contact-card">
            <div class="contact-card-logo">
                <img src="fire_logo.png"alt="logo">
            </div>
            <div class ="contact-card-header">
                <h1>Get in touch...</h1>
            </div>
            <div class ="contact-card-form">
                <form action="contactform.php" method="post">
            <div class="form-item">
                <label for="name">Name</label>
                    <input class="title-input" name="name" type="text" placeholder="Full Name" required autofocus>
                </div>
                <div class="form-item">
                <label for="mail">Mail</label>
                    <input class="title-input" name="mail" type="text" placeholder="Your E-mail" required autofocus>
                </div>
                <div class="form-item">
                <label for="subject">Title</label>
                    <input class="title-input" name="subject" type="text" placeholder="Subject" required autofocus>
                </div>
                <div class="form-item">
                    <label for="message">Message</label>
                    <input class="message-input" name="message" type="text" placeholder="Message" required>
                </div>
                
            <div class="button-container">
            <button onclick="window.location.href='success.html';" name="submit" type="submit">Submit</button>
            </div>
            </form>
            </div>
          
        </div>
        
     </div>
</body>
</html>