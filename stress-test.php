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

<style>
    body {
      font-family: Arial, sans-serif;
    }
    
    header {
      background-color: #bbe5e1;
      background-image: url('bg-image-1.png'),url('bg-image-2.png');
      background-size: contain, contain;
      background-repeat: no-repeat,no-repeat;
      background-position: left, right;
      position: relative;
      padding: 100px;

      font-family: Times;
      font-size : 30px;
      color: #27407E;
    }

    header h1 {
      text-align:center;
      background:
      linear-gradient(65deg , transparent 50%,rgba(3,78,136,0.7) 50%) left no-repeat, 
      linear-gradient(0deg , rgba(3,78,136,0.7),rgba(3,78,136,0.7)) 30px 0 no-repeat;
      background-size:30px 100%, 100% 100%;
      width:400px;
      height:60px;
      padding:0 20px;
      color:white;
      margin:20px auto;
      position:relative;
    }

    h2 {
      margin-top: 0;
      text-align: center;
    }

    .container-2 {
      background-color: #fff4df;
      text-align: justify;
      width: fit-content;
      padding: 50px;
      margin: auto;
      margin-top: 30px;
      border-radius: 25px;
    }
    
    button {
      background-color: #27407E;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 0 auto;
      margin-top: 10px;
      color:white;
    }
    
    button:hover {
      background-color: #bbe5e1;
      color: black;
    }
    
    button:focus {
      outline: none;
    }
</style>

<body>
    <?php 
        include 'nav.php';
    ?>
    <!--  Header  -->
    <header>
      <h1>Stress Test</h1>
    </header>
    <!--  Quiz -->
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
      <!--  Result -->
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
  </body>
