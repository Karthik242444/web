<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
    <link rel="stylesheet" href="css/Exer1.css">
    <style>
        p.message{
        position: absolute;
        font-size: 2em;
        color: darkblue;
        width: 100%;
        height: 40px;
    }
    </style>
</head>
<body>
<?php 
  
  session_start();
  
  ?>
    <div class="container">
        <form action="?" method="POST" enctype="multipart/form-data">
            <div class="entry">
                <label for="resume" style="font-size: 1.5rem;color:brown;">Enter youur name</label>
                <input type="text" name="name"/>
            </div>

            <div class="entry">
                <label for="resume" style="font-size: 1.5rem;color:brown;">Enter youur email</label>
                <input type="text" name="email"/>
            </div>

            <div class="entry">
                <label for="resume" style="font-size: 1.5rem;color:brown;">Enter youur phone</label>
                <input type="text" name="phonne"/>
            </div>

            <div class="entry">
                <label for="resume" style="font-size: 1.5rem;color:brown;">Enter youur designation</label>
                <input type="text" name="designation"/>
            </div>


            <input type="submit" class="submit" name="upload"/>
        </form>
    </div>
    <div class="container" style="top: 50%;">
    <p class="message">
        <?php
         //echo"name= ".$_SESSION['name'];
        ?>
        </p>
    </div>     
</body>
</html>