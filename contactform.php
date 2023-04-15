<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width"  initial-scale="1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.css">
</head>

<body>
    <!--Contact Form-->

   
    
        <div class="items">
            <div class="contact-info">
                <div class="Title">Get us in Touch</div>
                <img src="./img/339672519_133936059649441_7693322616686162479_n.jpg" alt="" class="images">
                <span class="tv">Connect with us:</span>
                <div class="social-links">
                    <ul class="social-media">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
           
            </div>
            <form action="contact to db.php" method="POST" class="submit-form">
                <h4 class="contact-title">Contact US</h4>
                <input type="text" class="field" placeholder="Enter your name" name="fname">
                <input type="email" class="field" placeholder="Your Email" name="email">
                <input type="text" class="field" placeholder="Enter your phone number" name="phone">
                <textarea class="field" placeholder="Your Feedback..." cols="1" rows="8" name="feedback"></textarea>
               
               
               
                 <?php if (isset($_GET['error']))
                {?>
                 <P class="e">   <?php echo $_GET['error'];?></P>
                
                 <?php }?>
               
                 <input type="submit" value="Submit" class="mb">
            </form>
        </div>
    


</body>

</html>