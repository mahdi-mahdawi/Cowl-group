<?php include 'database.php';?>
<?php session_start();?>

<?php 
// check to see if score is set_error_handler

if(! isset($_SESSION['score']))
{
    $_SESSION['score']= 0;
}
if( $_POST)
{
   $number= $_POST['number'];
    $selected_choice= $_POST['choice'];
    //echo $number.'<br>';
    //echo $selected_choice;
    $next = $number+1;
    
    /*
    //Get total questions
    */
    $query= "SELECT * FROM question";
    //Get result
    $results= $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $total= $results->num_rows;
    
    
    /*
    //get correct choice
    */
    $query = "SELECT * FROM choices
                WHERE question_number= $number AND is_correct = 1";
    
    //get result
    
    $result= $mysqli->query($query) or die ($mysqli->error.__LINE__);
    
    //get row
    $row= $result ->fetch_assoc();
    
    //Set correct choice
    $correct_choice= $row['id'];
    
    //Compare
    
    if($correct_choice== $selected_choice)
    {
        //Answer is correct
        $_SESSION['score']++;
       
    }
    
    //check if last question
    if($number== $total)
    {
        header("Location: final.php");
        exit();
    }
    else
    {
        header("Location: question.php? n=".$next);
    }
}

?>

















