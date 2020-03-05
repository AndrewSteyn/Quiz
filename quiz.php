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
        $big = array(array('When does the first night start?',/*$big[0][0]*/
                           'How many melee and ranged creeps spawn in the first wave, for only one lane?',
                           'Pick one set of the neutral creeps that can\'t spawn in the medium camp.',
                           'You need the following for Arcane Boots.',
                           'Once placed, Observer Ward will last for how long?',
                           'What color are Tranquil Boots?',
                           'What is the correct amount of experience a Hero has to gain to advance from Level 1 to Level 2?',
                           'First Roshan spawns with how much HP?',
                           'Once you activate a Haste rune, your movement speed is set to - ?',
                           'What is the day and night vision for most Heroes?',
                           'Most of the Heroes start with how much Magical Resistance?',
                           'Ancients (main buildings) regenerate how much HP per second? ',
                           'At 20 minutes into the game, Roshan will have how much maximum HP?',
                           'With additional 28 Agility, your Hero gains how much Armor?',
                           'When are you able to deny your Tier 1 Tower?',
                           'Which summoned unit lasts for the longest time before expiring? ',
                           'What stat does Scythe of Vyse boost the most?',
                           'What type of damage does Wild Axes do?',
                           'Which of the following heroes has the highest base damage at level 1 in the game?',
                           'Which of the following skills deals only magic damage?',
                            ),
                    array('quiztest.jpg',/*$big[1][0]*/
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
                    array('name',/*$big[2][0]*/
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
                    array(array('value'),/*$big[3][0][0]*/
                          array(''),   
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array(''),  
                          array('')),
                    array(array('1. At minute 4','2. At minute 5','3. At minute 6','4. At minute 10'),/*$big[3][1][0]*/
                          array('A. 4 melee creeps, 1 ranged creep','B. 3 melee creeps, 1 ranged creep','C. 4 melee creeps, 2 ranged creeps','D. 3 melee creeps, 2 ranged creeps'),
                          array('1. Centaur camp','2. Mud Golems','3. Hellbear camp','4. Wolf Camp'),
                          array('1. Boots of speed + Points Booster','2. Boots of Speed + Arcane Boots Recipe','3. Booots of Speed + Void Stone','4. Boots of Speed + Energy Booter'),    
                          array('1. 8min','2. 6min','3. 5min','4. 7min'),
                          array('1. Brown','2. Green','3. Blue','4. Red'),  
                          array('1. 200','2. 400','3. 600','4. 800'),  
                          array('1. 2500','2. 5000','3. 7500','4. 10000'),  
                          array('1. 550 MS','2. 522 MS','3. 322 MS','4. 650 MS'),  
                          array('1. 1600 during the day, 800 during the night','2. 2000 dauring the day, 800 during the night','3. 1600 during the day, 1000 during the night','4. 1800 during the day, 800 during the night'),  
                          array('1. 20%','2. 25%','3. 30%','4. 35%'),  /*25%*/
                          array('1. 2HP/s','2. 3HP/s','3. 4HP/s','4. 5HP/s'), /*3HP/s*/  
                          array('1. 8000HP','2. 9000HP','3. 10000HP','4. 15000HP'), /*10000*/  
                          array('1. Close to 2','2. Close to 3','3. Close to 4','4. Close to 5'),  /*close to 4*/
                          array('1. Once it has 220HP','2. Once it has 190HP','3. Once it has 160HP','4. Once it has 130HP'),  /*130HP*/
                          array('1. Plague Ward','Serpent Ward','Lycan Wold','Hawk'),  /*Hawk*/
                          array('1. Intelligence','2. Strength','3. Agility','4. All in the same measure'),  
                          array('1. Physical','2. Magical','3. Universal','4. Composite'),  
                          array('1. Doom Bringer','2. Pudge','3. Treant Protector','4. Spirit Breaker'),  
                          array('1. Heartstopper Aura','2. Hoof Stomp','3. Acid Spray','4.Weave'))  
                             );
    ?>
<form role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
<?php
for ($x=0; $x<count($big[0]); ++$x)?>{<?php
     echo"\n".$big[2][$x];?>
    <img class=image src="<?php echo $big[1][$x];?>">
      <?php  for($z=0; $z,count($big[2]); ++$z)?>
    <button class="button" type="radio" name="<?php echo"\n".$big[2][$x];?>" value="<?php echo"\n".$big[3][$x][$x]; ?>"><?php echo"\n".$big[4][$x][$z]; ?></button>
</br>
}

    <button class="submitButton" type="submit" value="submit" name="submit">Submit</button>
</form>
<?php echo $big[3][1][0] ?>
<footer id="footer">
  <p>Created by: Andrew Steyn</p>
  <p>Contact information: <a id="email" href="andrewpvdrsteyn@gmail.com"> andrewpvdrsteyn@gmail.com</a>.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>