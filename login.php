<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./login.css">
</head>

<body>
   
        <div class="login-form">

            <div class="left-side">
                <img src="./img/laptop.png" alt="" class="images">
            </div>



            <div class="right-side">
                <h1>Login</h1>
                <form action="verify.php" method="POST">

                <?php if (isset($_GET['error']))
                {?>
                 <P class="e">   <?php echo $_GET['error'];?></P>
                
                 <?php }?>
            
                    <div class="user-input">
                        <input type="text" placeholder="Enter your Username" name="username"><i class="fa-sharp fa-solid fa-user"></i>
                    </div>
                    <div class="user-input">
                        <input type="password" placeholder="Password" name="password"><i class="fa-solid fa-lock"></i>
                    </div>
                    <button class="main-btn">LOGIN</button>
                </form>
            </div>
        </div>
    
</body>

</html>