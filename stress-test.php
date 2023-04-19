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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    #banner {
      background-color: #bbe5e1;
      color: #27407E;
      padding-top: 5%;
    }

    .website-title {
      font-family: 'Times New Roman', Times, serif;
      font-size: 70px;
      font-weight: 600;
      margin-top: 100px;
    }

    .test-container {
      text-align: justify;
      width: fit-content;
      margin: auto;
    }
  </style>
</head>

<body>
  <main>
    <section id="banner">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 text-center">
            <p class="website-title">Stress Test</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="image/bg-image-2.png" class="img-fluid" style="height:200px">
          </div>
        </div>
      </div>
    </section>

    <section id="test" class="py-5">
      <div class="test-container">
        <?php if ($score == 0) : ?>
          <form method="post">
            <div class="mb-3">
              <h2>Question 1</h2>
              <label for="q1" class="form-label">On a scale of 1-10, how often do you feel stressed?</label>
              <input type="number" class="form-control" id="q1" name="q1" min="1" max="10" required>
            </div>
            <form method="post">

              <h2>Question 2</h2>
              <p>How often do you feel overwhelmed?</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="0" required>
                <label class="form-check-label">Never</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="1">
                <label class="form-check-label">Sometimes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="2">
                <label class="form-check-label">Often</label>
              </div>

              <h2>Question 3</h2>
              <p>How well do you manage your stress?</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="0" required>
                <label class="form-check-label">Very well</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="1">
                <label class="form-check-label">Somewhat well</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="2">
                <label class="form-check-label">Not well</label>
              </div>
              <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <?php else : ?>
            <div class="result">
              <h2>Your Stress Level is <?php echo $score; ?></h2>
              <br>
              <?php if ($score < 5) : ?>
                <p>You're doing a good job of managing stress! Keep it up!</p>
              <?php elseif ($score < 8) : ?>
                <p>You could use some help managing stress. Here are some tips:</p>
                <ul>
                  <li>Exercise regularly</li>
                  <li>Meditate or do deep breathing exercises</li>
                  <li>Talk to a therapist or counselor</li>
                </ul>
              <?php else : ?>
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
      </div>
    </section>
</body>

</html>
