<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send a message</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Message body starts here -->
	<section class="food-search-2">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to send out the message.</h2>

            <form action="" method="POST" class="order">
               
                <fieldset>
                    <legend>Message Information</legend>
                    <div class="order-label">To</div>
                    <input type="text" name="to" placeholder="Mom" class="input-responsive" required>
                    <div class="order-label">From</div>
                    <input type="text" name="from" placeholder="Son" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="text" name="contact" placeholder="+1xxxxxxxxxx" class="input-responsive" required>

                    <div class="order-label">Message</div>
                    <textarea name="message" rows="10" placeholder="Happy Mother's Day!!!" class="input-responsive" required></textarea>
                    <input type="submit" name="submit" value="Send" class="btn btn-primary">
                </fieldset>

            </form>
        </div>
    </section>
	<!-- Message body ends here -->

      <!--Social starts Here-->
      <!-- <section class="social">
        <div class="container text-center">
            <p>Follow us on</p>
            <br>
            <ul>
                <li>
                    <a href="#"><img src="images/socialLogo/facebook.png" alt="Facebook Logo" class="logo-fix"></a>
                </li>
                <li>
                    <a href="#"><img src="images/socialLogo/instagram.png" alt="Instagram Logo" class="logo-fix"></a>
                </li>
                <li>
                    <a href="#"><img src="images/socialLogo/twitter.png" alt="Twitter Logo" class="logo-fix"></a>
                </li>
                <li>
                    <a href="#"><img src="images/socialLogo/pinterest.png" alt="Pinterest Logo" class="logo-fix"></a>
                </li>
            </ul>
        </div>
        <div class = "clearfix"></div>
    </section> -->
    <!--Social ends Here-->

    <!--footer starts Here-->
    <section class="footer">
        <div class="container text-center">
            <p>2022 All rights reserved</p>
            <p>Made with ❤️ in San Francisco by <a href="redirect.php">Adrian Xu</a></p>
        </div>
    </section>
    <!--footer ends Here-->

</body>
</html>


<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    if (isset($_POST['submit'])) {
        $number = $_POST['contact'];
        $body = $_POST['message'];
        $to = $_POST['to'];
        $from = $_POST['from'];

        // echo $number;
        // echo $message;
        // die();
        $message = "Dear ".$to.",\n\n".$body."\n\nBest,\n".$from;

        // echo $message;

        
        // In production, these should be environment variables.
        $account_sid = 'AC8a032b4e75891f01a3de1fa9187f7771';
        $auth_token = '43f4421478abb5b695d4c1ccec737651';
        $twilio_number = "+18788881588"; // Twilio number you own
        $client = new Client($account_sid, $auth_token);
        // Below, substitute your cell phone
        $msg = $client->messages->create(
            $_POST['contact'],  
            [
                'from' => $twilio_number,
                'body' => $message
            ] 
        );

        if ($msg->sid) {
            echo "Message Sent!!!";
        } else {
            echo "Failed to send!!!";
        }

    }
