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
        $big = array(array('When does the first night start?',
                           'How many melee and ranged creeps spawn in the first wave, for only one lane?',
                           'Pick one set of the neutral creeps that can\'t spawn in the medium camp.',
                           'At the start of the game, only Bounty runes can spawn.',
                           'Once placed, Observer Ward will last for how long?',
                           'You can reveal the Wards (Observer and Sentry Wards) with Dust.',
                           'What is the correct amount of experience a Hero has to gain to advance from Level 1 to Level 2?',
                           'First Roshan spawns with how much HP?',
                           'Once you activate a Haste rune, your movement speed is set to - ?',
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
                          array(array('At minute 4','At minute 5','At minute 6','At minute 10'),
                                array('4 melee creeps, 1 ranged creep','3 melee creeps, 1 ranged creep','4 melee creeps, 2 ranged creeps','3 melee creeps, 2 ranged creeps'),
                                array('Centaur camp','Mud Golems','Hellbear camp','wolf Camp'),
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
                            
                            );
    ?>
<form role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
<?php
for ($x=0; $x<count($big[0]); ++$x){?>
    <h1><?php echo"\n".$big[1][$x];?></h1>
    <img class=image src="<?php echo"\n".$big[0][$x];?>">
      <?php  for($z=o; $z,count($big[2]); ++$z)?>
    <button class="button" type="radio" name="<?php echo"\n".$big[2][0][$x];?>" value="<?php echo"\n".$big[2][1][$z]; ?>"><?php echo"\n".$big[2][2][$z]; ?></button>
</br>
}

    <button class="submitButton" type="submit">Submit</button>
</form>

<footer id="footer">
  <p>Created by: Andrew Steyn</p>
  <p>Contact information: <a id="email" href="andrewpvdrsteyn@gmail.com"> andrewpvdrsteyn@gmail.com</a>.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>