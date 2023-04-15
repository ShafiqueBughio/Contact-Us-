
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<div class="navbar">
   <ul><li><a href="login.php">Log Out</a></li></ul>
   <ul><li><a href="contactform.php">Form page</a></li></ul>
</div>
     <div class="fac">
     <h2>User no:</h2>
                <div class=o><i class="fa-solid fa-user fa-2xl"></i></div>
                        
            
                 <?php
                          $link=mysqli_connect("localhost","root","","contactinfo");

                            if($link===false){
                
                            die("Could not connect".mysqli_connect_error());
                            }
            
                         $res=mysqli_query($link,"SELECT* FROM contact");
                         $count=mysqli_num_rows($res);
                         
                         echo"<p>".$count."</p>";
                          ?>
            
             
              
            </div>
            



<h1 class="table-title">Contact Info</h1>
    <table class="contents">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact no</th>
                <th>Feedback</th>
               
            </tr>
        </thead>
        <tbody>
           
          
      


        <?php

                 $link=mysqli_connect("localhost","root","","contactinfo");

                if($link===false)
                {
    
                die("Could not connect".mysqli_connect_error());
                
                }

                $sql= "SELECT * FROM contact";
                $result=$link->query($sql);


                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr><td data-label=name>" . $row["fname"]. "</td><td data-label=email>". $row["email"]. "</td><td data-label=contact>" . $row["contact"]. "</td><td data-label=feedback>". $row["feedback"]. "</td></tr>";
                    }
                }

        ?>
    </tbody>
    </table>
      
      

</body>

</html>