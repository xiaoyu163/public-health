<?php
  $score = 0;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $score = $q1 + $q2 + $q3;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Stress Test</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Stress Test</h1>
    </header>
    <div class="container-2">
      <?php if ($score == 0): ?>
        <form method="post">
          <h2>Question 1</h2>
          <p>On a scale of 1-10, how often do you feel stressed?</p>
          <input type="number" name="q1" min="1" max="10" required>
          <br><br><br>
          <h2>Question 2</h2>
          <p>How often do you feel overwhelmed?</p>
          <label><input type="radio" name="q2" value="0" required>Never</label><br>
          <label><input type="radio" name="q2" value="1">Sometimes</label><br>
          <label><input type="radio" name="q2" value="2">Often</label>
          <br><br><br>
          <h2>Question 3</h2>
          <p>How well do you manage your stress?</p>
          <label><input type="radio" name="q3" value="0" required>Very well</label><br>
          <label><input type="radio" name="q3" value="1">Somewhat well</label><br>
          <label><input type="radio" name="q3" value="2">Not well</label>
          <br><br>
          <button type="submit">Submit</button>
        </form>
      <?php else: ?>
        <div class ="result">
          <h2>Your Stress Level is <?php echo $score; ?></h2>
          <br>
          <?php if ($score < 5): ?>
            <p>You're doing a good job of managing stress! Keep it up!</p>
          <?php elseif ($score < 8): ?>
            <p>You could use some help managing stress. Here are some tips:</p>
            <ul>
              <li>Exercise regularly</li>
              <li>Meditate or do deep breathing exercises</li>
              <li>Talk to a therapist or counselor</li>
            </ul>
          <?php else: ?>
            <p>Your stress level is high. It's important to take action to manage stress. Here are some tips:</p>
            <ul>
              <li>Practice stress-reducing activities such as yoga or meditation</li>
              <li>Take breaks and engage in enjoyable activities</li>
              <li>Seek help from a mental health professional if needed</li>
            </ul>
          <?php endif; ?>
        </div>
      <?php endif; ?>
</div> 
