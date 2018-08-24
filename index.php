<?php include 'database.php'; ?>

<?php  

//Get total questions
$query="SELECT * FROM question";

//get results
$results= $mysqli->query($query) or die($mysqli->error.__LINE__);
$total= $results->num_rows;


?>
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
        <h2> CAPS COWL PROTOTYPE </h2>
        <p>This is a multiple choice quiz</p>
        <ul>
        <li><strong>Number of Questions:</strong><?php echo $total;?></li>
            <li><strong>Type:</strong>Multiple Choice</li>
            <li><strong>Estimated Time:</strong><?php echo $total*.5;?> Minutes</li>
        </ul>
        <a href="vid1.html" class="start">Start Quiz</a>
        </div>
    
    </main>
    
    <footer>
    <div class="container">
        Copyright &copy; 2018, CAPS COWL PROTOTYPE
        </div>
    
    </footer>
</body>

</html>