<!Doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">

<link href="https://fonts.googleapis.com/css?family=Cormorant+SC:700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inder&display=swap" rel="stylesheet">

<title>Dota 2 Quiz</title>

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
<div id="slim">
<!-- End Nav -->
</br>
    <!-- Header -->
    <div id="header">
    <h1>Test your Dota 2 Knowlege!</h1>
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
                    array('images/dota2logo.jpg',/*$big[1][0]*/
                          'images/creeps.jpg',
                          'images/neutrals.jpg',
                          'images/arcane.jpg',
                          'images/ward.jpg',
                          'images/boots.jpg',
                          'images/midas.png',
                          'images/roshan.jpg',
                          'images/haste.jpg',
                          'images/dayVnight.jpg',
                          'images/snapfire.jpg',
                          'images/ancient.jpg',
                          'images/roshann.jpg',
                          'images/agility.jpg',
                          'images/tower.jpg',
                          'images/summons.jpg',
                          'images/tinker.jpg',
                          'images/beats.jpg',
                          'images/io.jpg',
                          'images/invoker.jpg',
                        ),
                    array('q0',/*$big[2][0]*/
                          'q1',
                          'q2',
                          'q3',
                          'q4',
                          'q5',
                          'q6',
                          'q7',
                          'q8',
                          'q9',
                          'q10',
                          'q11',
                          'q12',
                          'q13',
                          'q14',
                          'q15',
                          'q16',
                          'q17',
                          'q18',
                          'q19',    
                           ),
                    array(array('correct','wrong','wrong','wrong'),/*$big[3][0][0]*/
                          array('wrong','correct','worng','wrong'),   
                          array('wrong','wrong','correct','wrong'),   
                          array('wrong','wrong','wrong','correct'),  
                          array('wrong','wrong','wrong','correct'),  
                          array('wrong','correct','wrong','wrong'),  
                          array('correct','wrong','wrong','wrong'),  
                          array('wrong','wrong','correct','wrong'),  
                          array('wrong','correct','wrong','wrong'),  
                          array('wrong','wrong','wrong','correct'),  
                          array('wrong','correct','wrong','wrong'),  
                          array('wrong','correct','wrong','wrong'),  
                          array('wrong','wrong','correct','wrong'),  
                          array('wrong','wrong','correct','wrong'),  
                          array('wrong','wrong','wrong','correct'),  
                          array('wrong','wrong','wrong','correct'),  
                          array('correct','wrong','wrong','wrong'),  
                          array('correct','wrong','wrong','wrong'),  
                          array('wrong','wrong','correct','wrong'),   
                          array('wrong','wrong','wrong','correct')),
                    array(array('At minute 4','At minute 5','At minute 6','At minute 10'),/*$big[3][1][0]*/
                          array('4 melee creeps, 1 ranged creep','3 melee creeps, 1 ranged creep','4 melee creeps, 2 ranged creeps','3 melee creeps, 2 ranged creeps'),
                          array('Centaur camp','Mud Golems','Hellbear camp','Wolf Camp'),
                          array('Boots of speed + Points Booster','Boots of Speed + Arcane Boots Recipe','Booots of Speed + Void Stone','Boots of Speed + Energy Booter'),    
                          array('8min','6min','5min','7min'),
                          array('Brown','Green','Blue','Red'),  
                          array('200','400','600','800'),  
                          array('2500','5000','7500','10000'),  
                          array('550 MS','522 MS','322 MS','650 MS'),  
                          array('1600 during the day, 800 during the night','2000 dauring the day, 800 during the night','1600 during the day, 1000 during the night','1800 during the day, 800 during the night'),  
                          array('20%','25%','30%','35%'),  /*25%*/
                          array('2HP/s','3HP/s','4HP/s','5HP/s'), /*3HP/s*/  
                          array('8000HP','9000HP','10000HP','15000HP'), /*10000*/  
                          array('Close to 2','Close to 3','Close to 4','Close to 5'),  /*close to 4*/
                          array('Once it has 220HP','Once it has 190HP','Once it has 160HP','Once it has 130HP'),  /*130HP*/
                          array('Plague Ward','Serpent Ward','Lycan Wold','Hawk'),  /*Hawk*/
                          array('Intelligence','Strength','Agility','All in the same measure'),  
                          array('Physical','Magical','Universal','Composite'),  
                          array('Doom Bringer','Pudge','Treant Protector','Spirit Breaker'),  
                          array('Rupture','Vendetta','Acid Spray','Weave'))  
                             );
                            
    ?>
<form role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>> 
<?php
for ($x=0; $x<count($big[0]); ++$x){
     echo"\n".'<h2>'.$big[0][$x].'</h2>';
     echo'</br> <img class=image src="'.$big[1][$x].'">';
       for($z=0; $z<count($big[4][0]); ++$z){
       echo'</br><div class="button"><input type="radio" name="'. $big[2][$x]. '" value="'. $big[3][$x][$z].'"/><label for="'. $big[2][$x].'">'.$big[4][$x][$z].'</label></div>';
}}
?>
    <button class="submitButton" type="submit" value="submit" name="submit">SUBMIT</button>
</form> 

<?php
if (isset($_POST["submit"])){

    $total = 0;
    for ($i = 0; $i <=19; $i++){

      $m[$i] = $_POST["q".$i];
    if($m[$i] == 'correct'){$total++;}
    }
    echo "<div id = 'resilts'>$total / 20</div>";
}

?>
</br>
</div>
<footer id="footer">
  <p>Created by: Andrew Steyn</p>
  <p>Contact information: <a id="email" href="andrewpvdrsteyn@gmail.com"> andrewpvdrsteyn@gmail.com</a>.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>