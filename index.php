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
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
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
        font-family: 'Cinzel Decorative';font-size: 22px;
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

    .btn-archives{
    position: relative; 
    padding: 1.4rem 4.2rem;
    padding-right: 3.1rem;
    font-size: 1.4rem;
    color: rgba(255,255,255,0.3);
    letter-spacing: 1.1rem;
    text-transform: uppercase;
    transition: all 600ms cubic-bezier(0.77, 0, 0.175, 1);  
    cursor: pointer;
    user-select: none;
    border: none;
    }
    .btn-archives:hover {background-color:rgba()}

    .btn-archives:active {
    background-color: rgba();
    box-shadow: 0 5px #666;
    transform: translateY(4px);
    }

</style>
    <body>


    <!-- Title at the top of the page -->
<div id="container" class="jumbotron jumbotron-fluid bg-transparent" style="padding-right: 15%; padding-left: 15%; padding-bottom:10%;">
   <!--<div class="row text-center">
    <div class="col-12-sm col-12-lg"></div>
   </div>-->
        <div class="row title01" style="padding-right:25%; padding-left:25%;">
            <!--<div class="col-4-sm col-4-lg"></div>-->
                <div class="col-4-sm col-4-lg text-center" font-family="Cinzel Decorative">
                    <h1 class="display-1" style="color:rgba(1,1,1,0.66)">The Archives</h1><hr style="height:1em; width:90%; color:rgba(255,255,255,1);">
                    <h4 class="display-3" style="color:rgba(1,1,1,0.66)">Short Stories</h4>
                 <h4 class="display-3" style="color:rgba(1,1,1,0.66)">by</h4><br><h4 class="display-3" style="color:rgba(1,1,1,0.66)"> J.B. Peacock</h4>
                </div>
            <!--<div class="col-4-sm col-4-lg"></div>
        </div>-->
</div>    
    <div class="d-flex justify-content-between" style="padding-top:10%;">
        <div><button type="button" label="Stories" class="btn-archives" style="background-color:rgba(0,0,0,0.2)"><a style="color:rgba(0,0,0,0.6); text-decoration:none;" href="stories.php">Stories</a></button></div>                       
        <div><button type="button" label="About" class="btn-archives" style="background-color:rgba(0,0,0,0.2)"><a style="color:rgba(0,0,0,0.6); text-decoration:none;" href="about.php">About</a></button></div>                      
        <div><button type="button" label="Contact" class="btn-archives" style="background-color:rgba(0,0,0,0.2)"><a style="color:rgba(0,0,0,0.6); text-decoration:none;" href="contact.php">Contact</a></button></div>
    </div>
</div>
</div>      
    
    </body>
</html>
