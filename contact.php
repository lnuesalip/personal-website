<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<?php 
if(isset($_POST['submit'])){
    $to = "lealip@zsogdozz.a2hosted.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Email Sent!";
    }
?>


<body class="ibm-plex-mono-regular">

    <div class="navbar">
        <nav class="ibm-plex-mono-regular">
            <a href="home.html">Home</a>
            <a href="experience.html">Experience</a>
            <a href="resume.html">Resume</a>
            <a href="watchlist.php">Watchlist</a>
            <a href="contact.php" class="current">Contact</a>
        </nav>
    </div>

    <h1 class="title-exp">Contact</h1>
    
    <div class="body-contact">
        <div class="container">
            <form action="" method="post" class="form">
                <div class="form-group">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control ibm-plex-mono-regular" id="first_name" name="first_name" placeholder="Your First Name" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control ibm-plex-mono-regular" id="last_name" name="last_name" placeholder="Your Last Name" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" name="email" pattern="[A-Za-z0-9._+\-']+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}" class="form-control ibm-plex-mono-regular" id="email" placeholder="email@example.com" tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control ibm-plex-mono-regular" id="subject" name="subject" placeholder="About Your Website" tabindex="4" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea rows="5" class="form-control ibm-plex-mono-regular" cols="50" id="message" name="message" placeholder="Enter your message" tabindex="5" required></textarea>
                </div>
                <div>
                    <input class="button ibm-plex-mono-regular" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

<footer>
    <p>-</p>
    <p>You've reached the end.</p>
    <p>lealip@memphis.edu</p>
    <p>Fall 2024</p>
</footer>


</html>

