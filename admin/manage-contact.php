<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
<?php
        if(!empty($_POST["send"]))
        {
            $name=$_POST["name"];
            $email=$_POST["email"];
            $mobile=$_POST["mobile"];
            $subject=$_POST["subject"];
            $message=$_POST["message"];
            $toEmail="rushipalakudtewar@gmail.com";

            $mailHeaders="Name: ". $name .
            "\r\n Email: " . $email .
            "\r\n Mobile: " . $mobile .
            "\r\n Subject: " . $subject .
            "\r\n Message: " . $message . "\r\n";

            if(mail($toEmail, $name, $mailHeaders))
            {
                $message="Your Information is Received successfully.";
            }
        }
    ?>

    <div class="form1">
        <form method="post" name="emailcontact">
            <div class="twice-two">
                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
            <div class="twice-two">
                <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="" pattern="\d{10}" onkeypress="return isNumber(event)">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>
            <textarea name="message" class="form-control1" placeholder="Message" required=""></textarea>
            <div class="input-row">
                <input type="submit" name="send" value="Send Message" class="btn btn-contact">
                <?php if(!empty($message)){ ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
            </div>
            <?php } ?>
        </form>
    </div>

    
</body>
</html>