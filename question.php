<?php include 'database.php'; ?>
<?php session_start();?>

<?php 
    //set Question Number
$number= (int)$_GET ['n'];

    /*
    //Get total questions
    */
    $query= "SELECT * FROM question";
    //Get result
    $results= $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $total= $results->num_rows;

/*
Get Question
*/
$query = "SELECT * FROM question
            WHERE question_number = $number";

// get the result

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

/*
Get choices
*/
$query = "SELECT * FROM choices
            WHERE question_number = $number";

// get the results

$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);


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
        <div class="current" >Question <?php echo $question ['question_number']; ?> of <?php echo $total; ?> </div>
        <p class="question">
        <?php echo $question['text']; ?>
        </p>
        <form method="post" action ="process.php">
        <ul class="choices">
            <?php while ($row = $choices->fetch_assoc()):?>
            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"/> <?php echo $row['text']; ?> </li>
            <?php endwhile; ?>
         
            
            </ul>
        
          <input type="submit" value="Submit" />
            <input type="hidden" name="number" value="<?php echo $number;?>"/>
        </form>
        </div>
    
    </main>
    
    <footer>
    <div class="container">
        Copyright &copy; 2018, CAPS COWL PROTOTYPE
        </div>
    
    </footer>
</body>

</html>