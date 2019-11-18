<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Archives by J.B. Peacock</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--        <script src="js/bootstrap.min.js"></script>
-->
    </head>
<style type="text/css">
    body{
        background-image: url('archivebg.jpg');
        
    }
    .title01{
        border: outset;
        border-radius: 2;
        background-color: rgba(255,255,255,0.3);
}
    .navbar{
        border: none;
        border-radius: 0;
        background-color: rgba(0,0,0,0.5);
        
    }
</style>
    <body>


    <!-- Title at the top of the page -->
<div id="container" class="jumbotron jumbotron-fluid bg-transparent">
   <div class="row">
    <div class="col-12-sm"></div>
   </div>
        <div class="row title01">
            <div class="col"></div>
                <div class="col-4-sm text-center">
                    <h1 class="display-1">The Archives</h1>
                    <h1 class="display-3">Short Stories</h4>
                 <h1 class="display-3">by J.B. Peacock</h4>
                </div>
            <div class="col"></div>
        </div>
</div>    
<div class="row">
    <div class="col-4-sm" style="padding-top:30%;"></div>
    <div class="col-4-sm text-center">
    
                        <button type="button" label="Stories" class="btn btn-primary"><?php echo '<a class="nav-link" href="stories.php">Stories</a></button>';?>                       
                        <button type="button" label="About" class="btn btn-primary"><?php echo '<a class="nav-link" href="about.php">About</a></button>';?>                       
                        <button type="button" label="Contact" class="btn btn-primary"><?php echo '<a class="nav-link" href="contact.php">Contact</a></button>';?>
       
    </div>
    <div class="col-4-sm"></div>
</div>
</div>      
    
    </body>
</html>
