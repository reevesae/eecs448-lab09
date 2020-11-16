<?php
    echo "<h1>Results</h1>";
    $ans1 = $_POST['q1a'];
    $ans2 = $_POST['q2a'];
    $ans3 = $_POST['q3a'];
    $ans4 = $_POST['q4a'];
    $ans5 = $_POST['q5a'];

    $score = 0;

    echo "<h3>1. 1 + 2 = __</h3>";
    echo "<div>Correct answer: 3</div>";
    echo "<div>Your answer: $ans1</div>";
    if($ans1 == "3") {$score++;}

    echo "<h3>2. 45 - 10 = __</h3>";
    echo "<div>Correct answer: 35</div>";
    echo "<div>Your answer: $ans2</div>";
    if($ans2 == "35") {$score++;}

    echo "<h3>3. 7 * 5 = __</h3>";
    echo "<div>Correct answer: 35</div>";
    echo "<div>Your answer: $ans3</div>";
    if($ans3 == "35") {$score++;}

    echo "<h3>4. 16 / 2 = __</h3>";
    echo "<div>Correct answer: 8</div>";
    echo "<div>Your answer: $ans4</div>";
    if($ans4 == "8") {$score++;}

    echo "<h3>5. 4 + 32 - 8 = __</h3>";
    echo "<div>Correct answer: 28</div>";
    echo "<div>Your answer: $ans5</div>";
    if($ans5 == "28") {$score++;}

    $finalScore = ($score/5)*100;

    echo "<h2>Final score: $finalScore%</h2>";
?>