<!Doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">

<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">

<title>20 questions to blow your mind</title>

</head>

<body>
    <!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Back <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Nav -->
</br>
    <!-- Header -->
    <div id="header">
    <h1>How well do you know?</h1>
    </div>
    <!-- End Headr -->
</br>
    <?php

        $big = array(array('1. In which year were the first of the questions developed?',
                           'when?',
                           'Where?',
                           'Who?',
                           'With What?',
                           'hjqwj?',
                           'jafj?',
                           'asfjsaf?',
                           'jasf?',
                           'jasfj',
                           'njaff',
                           'jho?',
                           'pghm?',
                           'tj?',
                           'lkn?',
                           'tf?',
                           'ljvxbc?',
                           'fbsd?',
                           'oafsk?',
                           'oei?',
                            ),
                    array('quiztest.jpg',
                          'when.jpg',
                          'where.jpg',
                          'who.jpg',
                          'with-what.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                          'who.jpg',
                        ),
                    array(array('name',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',    
                                ),
                          array('value',
                                '', 
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',   
                                ),
                          array('answers',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                                '',
                             )  
                            )
                            
                        )
    ?>

<?php
for ($x=0; $x<count($big[0]); ++$x){
    echo"\n".$big[1][$x];
    echo"\n".$big[0][$x];
        for($z=o; $z,count($big[2]); ++$z)
        echo"\n".$big[2][$x][$z];
}


?>



    <!-- Image -->
    <div id="image">
        <?php
        $i=0;
            echo '<img src=images/'."$big[1][0]".'>';
        ?>
    </div>
    <!-- End Image -->
</br>
    <!-- Question -->
    <a id="question">
       <?php
            echo '<h3>'."$questions[0]".'</3>'."</br>";
        ?>
    <!-- End Question -->
</br>
    <!-- Answers -->
    <form role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    
    <button class="button" type="radio">1.<?php echo $answer[0][0] ?></button>
</br>
</br>
    <button class="button" type="radio">2.<?php echo $answer[0][1] ?></button>
</br>
</br>
    <button class="button" type="radio">3.<?php echo $answer[0][2] ?></button>
</br>
</br>
    <button class="button" type="radio">4.<?php echo $answer[0][3] ?></button>

</br>

    <button class="submitButton" type="submit">Submit</button>
</form>
 <!-- End Answers -->
<!-- Score -->
<?php
$score=10;
switch ($score){
    case '<10';
    echo "Fail. You can do better next time.";
    break;
    case '>10&&<15';
    echo "You did well but can still do better.";
    break;
    case '15<';
    echo "You Passed! Congradulations.";
    break;
}
?>
<!-- End Score -->


<footer id="footer">
  <p>Created by: Andrew Steyn</p>
  <p>Contact information: <a id="email" href="andrewpvdrsteyn@gmail.com"> andrewpvdrsteyn@gmail.com</a>.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>