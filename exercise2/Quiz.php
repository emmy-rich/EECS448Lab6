<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz</title>
  </head>
  <body>
    <h1>Quiz Results!</h1>
    <?php $correct = 0; ?>

        <h3>Question 1: In which state is Area 51 located?</h3>

        <?php 
            if($_POST["q1"] == "ans1"){
                echo("You answered: a) Nevada"."<br>");
                echo("Correct answer: a) Nevada"."<br>");
                $correct++;  
            }
            else if($_POST["q1"] == "ans2"){
                echo("You answered: b) New Mexico"."<br>");
                echo("Correct answer: a) Nevada"."<br>");  
            }
            else if($_POST["q1"] == "ans3"){
                echo("You answered: c) Arizona"."<br>");
                echo("Correct answer: a) Nevada"."<br>");  
            }
            else if($_POST["q1"] == "ans4"){
                echo("You answered: d) Utah"."<br>");
                echo("Correct answer: a) Nevada"."<br>");  
            }
            else {
                echo("You answered: You did not select an aswer"."<br>");
                echo("Correct answer: a) Nevada"."<br>");
            }
        ?>
        <h3>Question 2: Which US president appears on the 50 cent coin?</h3>

        <?php 
            if($_POST["q2"] == "ans1"){
                echo("You answered: a) James Polk"."<br>");
                echo("Correct answer: c) John F. Kennedy"."<br>");  
            }
            else if($_POST["q2"] == "ans2"){
                echo("You answered: b) William Howard Taft"."<br>");
                echo("Correct answer: c) John F. Kennedy"."<br>");  
            }
            else if($_POST["q2"] == "ans3"){
                echo("You answered: c) John F. Kennedy"."<br>");
                echo("Correct answer: c) John F. Kennedy"."<br>");
                $correct++;   
            }
            else if($_POST["q2"] == "ans4"){
                echo("You answered: d) Abraham Lincoln"."<br>");
                echo("Correct answer: c) John F. Kennedy"."<br>");  
            }
            else {
                echo("You answered: You did not select an answer"."<br>");
                echo("Correct answer: c) John F. Kennedy"."<br>");
            }
        ?>
        
        <h3>Question 3: How many baddies can fit into one Porsche?</h3>

        <?php 
            if($_POST["q3"] == "ans1"){
                echo("You answered: a) 1"."<br>");
                echo("Correct answer: b) 2"."<br>");  
            }
            else if($_POST["q3"] == "ans2"){
                echo("You answered: b) 2"."<br>");
                echo("Correct answer: b) 2"."<br>");
                $correct++;   
            }
            else if($_POST["q3"] == "ans3"){
                echo("You answered: c) 3"."<br>");
                echo("Correct answer: b) 2"."<br>");  
            }
            else if($_POST["q3"] == "ans4"){
                echo("You answered: d) 4"."<br>");
                echo("Correct answer: b) 2"."<br>");  
            }
            else {
                echo("You answered: You did not select an answer"."<br>");
                echo("Correct answer: b) 2"."<br>");
            }
        ?>
        
        <h3>Question 4: Who painted the Mona Lisa?</h3>

        <?php 
            if($_POST["q4"] == "ans1"){
                echo("You answered: a) Leonardo DiCaprio"."<br>");
                echo("Correct answer: d) Leonardo da Vinci"."<br>");  
            }
            else if($_POST["q4"] == "ans2"){
                echo("You answered: b) Michelangelo"."<br>");
                echo("Correct answer: d) Leonardo da Vinci"."<br>");  
            }
            else if($_POST["q4"] == "ans3"){
                echo("You answered: c) Claude Monet"."<br>");
                echo("Correct answer: d) Leonardo da Vinci"."<br>");  
            }
            else if($_POST["q4"] == "ans4"){
                echo("You answered: d) Leonardo da Vinci"."<br>");
                echo("Correct answer: d) Leonardo da Vinci"."<br>");
                $correct++;   
            }
            else {
                echo("You answered: You did not select an answer"."<br>");
                echo("Correct answer: d) Leonardo da Vinci"."<br>");
            }
        ?>
        
        <h3>Question 5: How long is New Zealand's Ninety Mile Beach?</h3>

        <?php 
            if($_POST["q5"] == "ans1"){
                echo("You answered: a) 55 miles"."<br>");
                echo("Correct answer: a) 55 miles"."<br>");
                $correct++;   
            }
            else if($_POST["q5"] == "ans2"){
                echo("You answered: b) 90 miles"."<br>");
                echo("Correct answer: a) 55 miles"."<br>");  
            }
            else if($_POST["q5"] == "ans3"){
                echo("You answered: c) 87 miles"."<br>");
                echo("Correct answer: a) 55 miles"."<br>");  
            }
            else if($_POST["q5"] == "ans4"){
                echo("You answered: d) 102 miles"."<br>");
                echo("Correct answer: a) 55 miles"."<br>");  
            }
            else {
                echo("You answered: You did not select an answer"."<br>");
                echo("Correct answer: a) 55 miles"."<br>");
            }
            
        ?>

        <h3>
            <?php
                $percent = ($correct/5) * 100;

                if($correct == 1){
                    echo("You got ".$correct." anwer correct"."<br>");
                }
                else{
                    echo("You got ".$correct." anwers correct"."<br>");
                }
                
                echo("You got a ".$percent."%"."<br>");
            ?>
        </h3>
        <button id="quiz" onclick="location.href = 'https://people.eecs.ku.edu/~e772r813/lab6/exercise2/Quiz.html'">Retry</button>
  </body>
</html>
