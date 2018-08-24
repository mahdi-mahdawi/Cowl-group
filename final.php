<?php session_start();?>

<html>
    <head>
    <meta charset="utf-8" />
    <title>PROTO</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
<body>
   <header>
    <div class="container">
       <h1>CAPS COWL PROTOTYPE</h1>
       
       </div>
    
    </header>
    <main>
    
    <div class="container">
       <h2>You are done!</h2>
        <p>Congrats! You have completed the test.</p>
        <p>Final score: <?php echo $_SESSION['score']; 
            if( isset($_SESSION['score']))
{
    $_SESSION['score']= 0;
}?></p>
        <a href="question.php?n=1" class="start">Attempt Again</a>
        </div>
    
    </main>
    
    <footer>
    <div class="container">
        Copyright &copy; 2018, CAPS COWL PROTOTYPE
        </div>
    
    </footer>
</body>

</html>