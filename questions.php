<?php include 'database.php';?>
<?php
//Set Question Number
//$number = (int) $_GET['n'];

//Get Question - puts it into a variable - not run yet
$query = "SELECT * FROM 'questions'";
//WHERE question_number = $number";


//Get results
$result = mysqli_query($conn, $query);
//$question=mysqli_fetch_assoc($result);

   



//$question = $result->mysqli_fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question 1 of 5</div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form method="post" action="process.php">
                <ul class="choices">

                    <li><input name="choice" type="radio" value="1" />PHP: Hypertext Preprocessor</li>
                    <li><input name="choice" type="radio" value="1" />Private Home Page</li>
                    <li><input name="choice" type="radio" value="1" />Personal Home Page</li>
                    <li><input name="choice" type="radio" value="1" />Personal Hypertext Preprocessor</li>
                </ul>
                <input type="submit" value="Submit" />
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2017, PHP Quizzer
        </div>
    </footer>
</body>

</html>
