<!Doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">

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
    <!-- Header -->
    <div id="header">
    <h1>How well do you know?</h1>
    </div>
    <!-- End Headr -->

    <?php

        $questions = array('In which year were the first of the questions develpoed?','when?','Where?','Who?','With What?');
        $photo= array('quiztest.jpg','when.jpeg','where.jpeg','who.jpeg','with-what.jpeg');
        $answer = array('an1','an2','an3','an4','an5')
    ?>
    <!-- Image -->
    <div id="image">
        <span><?php
            echo '<img src=images/'."$photo[0]".'>';
        ?></span>
    </div>
    <!-- End Image -->

    <!-- Question -->
    <div id="question">
       <?php
            echo "$questions[0]";
        ?>
    </div> 
    <!-- End Question -->

    <!-- Answers -->
    <div id="answer" >
        <?php
          echo "$answer[0]";
        ?>
    
    </div>
    <!-- End Answers -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>