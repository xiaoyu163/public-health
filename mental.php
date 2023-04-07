<!DOCTYPE html>

<style>
    body {
      font-family: Arial, sans-serif;
    }
    
    header {
      background-color: #bbe5e1;
      background-image: url('images/bg-image-1.png'),url('images/bg-image-2.png');
      background-size: contain, contain;
      background-repeat: no-repeat,no-repeat;
      background-position: left, right;
      position: relative;
      padding: 100px;
      font-family: Times;
      font-size : 30px;
      color: #27407E;
    }

    h1 {
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

    .subtitle {
      width :80%;
      margin: auto;
      text-align: center;
      padding-top: 100px;
    }

    .flex-container{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .flex-item {
      border-radius: 15px;
      flex-basis: 31%;
      background-color: #fff4df;
      margin-bottom: 5%;
      padding: 20px 12px;
      box-sizing: border-box;
      text-align:justify;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      margin: auto;
      justify-content: space-around;
      padding: 15px;
      align-items: center;
    }

    section {
      justify-content: center;
      text-align: center;
      margin: 20px;
      margin-bottom: 20px;;
      width: 400px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 10px;
    }
    
    @media(max-width: 600px){
      .flex-container{
          flex-direction: column;
      }
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

    <header>
        <h1>Mental Health</h1>
    </header>

    <div class ="subtitle">
        <h2>Know More About Mental Health Problems</h2>
    </div>

    <div class="flex-container">
        <div class="flex-item">
            <h2>Anxiety Disorders</h2>
            <p>
              <img src="images/anxiety.png" style="width:420px;height:260px;"><br>
              For a person with an anxiety disorder, the anxiety does not go away and can get worse over time. The symptoms can interfere with daily activities such as job performance, schoolwork, and relationships.
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/anxiety-disorders"> Learn More</a>
            </p>
        </div>
        <div class="flex-item">
            <h2>Behavioral Disorders</h2>
            <p>
              <img src="images/behavioral.jpg" style="width:420px;height:260px;"><br>
              Behavioral disorders involve a pattern of disruptive behaviors in children that last for at least 6 months and cause problems in school, at home and in social situations. 
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/behavioral-disorders"> Learn More</a>
            </p>
          </div>
          <div class="flex-item">
            <h2>Eating Disorders</h2>
            <p>
              <img src="images/eating.jpg" style="width:420px;height:260px;"><br>
              Eating disorders involve extreme emotions, attitudes, and behaviors involving weight and food.
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/eating-disorders"> Learn More</a>
            </p>
          </div>  
          <div class="flex-item">
            <h2>Substance Use Disorders</h2>
            <p>
              <img src="images/substance.jpeg" style="width:420px;height:260px;"><br>
              Substance use disorders can refer to substance use or substance dependence.          
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/mental-health-substance-use-disorders"> Learn More</a>
            </p>
          </div> 
          <div class="flex-item">
            <h2>Mood Disorders</h2>
            <p>
              <img src="images/mood.jpg" style="width:420px;height:260px;"><br>
              If you have a mood disorder, your general emotional state or mood is distorted or inconsistent with your circumstances and interferes with your ability to function.
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/mood-disorders"> Learn More</a>  
            </p>
          </div> 
          <div class="flex-item">
            <h2>Personality Disorders</h2>
            <p>
              <img src="images/personality.jpg" style="width:420px;height:260px;"><br>
              Personality disorders are conditions in which an individual differs significantly from an average person, in terms of how they think, perceive, feel or relate to others.           
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/personality-disorders">Learn More</a> 
            </p>
          </div> 
          <div class="flex-item">
            <h2>Psychotic Disorders</h2>
            <p>
              <img src="images/psychotic.jpeg" style="width:420px;height:260px;"><br>
              People with a psychotic disorder may be convinced that someone is spying on them or following them, may hear voices or have the feeling that others are manipulating their thoughts.          
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/psychotic-disorders">Learn More</a>
            </p>
          </div> 
          <div class="flex-item">
            <h2>Self-Harm</h2>
            <p>
              <img src="images/self harm.jpg" style="width:420px;height:260px;"><br>
              Self-harm refers to a person\'s harming their own body on purpose. 
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/self-harm"> Learn More</a>  
            </p>
          </div>
          <div class="flex-item">
            <h2>Suicidal Behavior</h2>
            <p>
              <img src="images/suicidal.jpg" style="width:420px;height:260px;"><br>
              Suicide causes immeasurable pain, suffering, and loss to individuals, families, and communities nationwide. 
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/suicidal-behavior"> Learn More</a>
            </p>
          </div>
          <div class="flex-item">
            <h2>Post-Traumatic Stress Disorder</h2>
            <p>
              <img src="images/post traumatic.jpg" style="width:420px;height:260px;"><br>
              You can get PTSD after living through or seeing a traumatic event, such as war, a hurricane, rape, physical abuse or a bad accident. 
              <br><br>
              <a href="https://www.mentalhealth.gov/what-to-look-for/post-traumatic-stress-disorder"> Learn More</a>
            </p>
          </div>
        </div>

        <div class="container">
          <section>
            <h2>Take a Stress Test</h2>
            <p>Take this quiz to measure your stress level and get tips for reducing stress.</p>
            <button onclick="location.href='stress-test.php'">Take Quiz</button>
          </section>
        </div>

</body>
