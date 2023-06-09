<!DOCTYPE html>
<html lang="en">

<?php
include 'nav.php';
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    body {
      background-color: #527a7a;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;
      width: 100%;
      margin: 0%;
    }

    header h1 {
      text-align: center;
      position: relative;
      font-family: 'Times New Roman', Times, serif;
      color: #d0e1e1;
    }

    /* Column container */
    .row {
      display: flex;
      flex-wrap: wrap;
    }

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      flex: 20%;
      padding: 50px;
      background-color: rgb(198, 216, 235, 0.95);
      border: 2px solid rgb(238, 232, 232);
      text-align: center;
    }

    /* Main column */
    .main {
      flex: 60%;
      padding: 60px;
      background-color: rgb(217, 229, 242, 0.95);
      border: 2px solid rgb(238, 232, 232);
      font-family: 'Times New Roman', Times, serif;
      font-size: larger;
      word-spacing: 5px;
    }

    h3 {
      color: #d0e1e1;
      text-shadow: 2px 2px 5px #336699;
      text-align: center;
      position: relative;
      font-family: 'Times New Roman', Times, serif;
    }
  </style>
</head>

<body class=bg1>

  <header>
    <h1>Ways To Maintain Health <i class='fas fa-heartbeat' style='font-size:50px;color:#94b8b8'></i></h1>
  </header>
  <br>

  <!--Point 1-->
  <h3> Eat A Healthy Diet</h3>
  <div class="row">
    <div class="side">
      <image src="images/Healthy Diet.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary" href="https://www.who.int/news-room/fact-sheets/detail/healthy-diet">Learn
          More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "Different food provides distinct nutrient which is required by our body. Fruit supplies a wealth of vitamin C and potassium, vegetables are a rich source of vitamin, fiber, and minerals, dairy product contains calcium and potassium, etc. By selecting healthier food, we can reduce the risk of malnutrition, cancer, heart disease, and diabetes. On top of that, we should implement a balanced diet to extract nutrients from multiple resources but remember not to take in an excessive amount of food which brings countereffect.";
        print $str1;
        ?>
      </p>
    </div>
  </div>
  <br>


  <!--Point 2-->
  <h3 class="text-center"> Reduce Intake Of harmful Fats</h3>
  <div class="row">
    <div class="side">
      <image src="images/Harmful Fat.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary"
          href="https://www.texasheart.org/heart-health/heart-information-center/topics/14-simple-ways-to-reduce-saturated-fat/#:~:text=14%20Simple%20Ways%20to%20Reduce%20Saturated%20Fat%201,whites%20instead%20of%20one%20whole%20egg.%20More%20items">Learn
          More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "Fats are divided into three types which are saturated fat, unsaturated fat, and trans-fat. World Health Organization (WHO) recommends the intake of unsaturated fat instead of saturated fat and trans-fat because unsaturated fat may lower the “bad” cholesterol while saturated fat and trans-fat are unhealthy fats. Therefore, we should limit the consumption of food such as fatty meat, cheese, snacks, and cookies which compromise harmful fat.";
        print $str1;
        ?>
      </p>
    </div>
  </div>
  <br>


  <!--Point 3-->
  <h3 class="text-center"> Exercise Regularly</h3>
  <div class="row">
    <div class="side">
      <image src="images/Exercise.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary"
          href="https://www.cdc.gov/physicalactivity/basics/age-chart.html#:~:text=Physical%20Activity%20for%20Different%20Groups%201%20Preschool-Aged%20Children,5%20Adults%20with%20Chronic%20Conditions%20and%20Disabilities%20">Learn
          More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "Regular exercise boosts energy level, make your day refreshing and promote better sleep. It is advised to make exercise a basic routine and always keep our body active. Centers for Disease Control and Prevention (CDC) recommends us to carry out cardio and strength-building activities with a duration of at least 2.5 hours per week. Type of exercise carried out may be varied with age group. Children above six years old and adults can carry out vigorous exercise, senior citizens can do brisk walking while moderate-intensity aerobic activity is suitable for pregnant and postpartum women. ";
        print $str1
          ?>
      </p>
    </div>
  </div>
  <br>


  <!--Point 4-->
  <h3 class="text-center"> Consume Less Salt And Sugar</h3>
  <div class="row">
    <div class="side">
      <image src="images/Salt And Sugar.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary"
          href="https://www.dallasnews.com/news/healthy-living/2013/04/15/the-dangers-of-salt-and-sugar-and-how-to-protect-yourself/">Learn
          More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "Salt and sugar are commonly used to enhance taste when preparing dishes. However, over intake of salt lead to high blood pressure which causes heart failure whilst excessive sugar consumption is the root cause of diabetes and obesity. Adult is advised to consume not more than a teaspoon of salt per day. Moreover, the sugar intake for a female adult is limited to 6 teaspoons while that of a male adult is 9 teaspoons daily. Some tips to reduce sugar intake are drinking water, opting for jam with reduced sugar, and avoiding food with added sugar. On the other hand, control sodium input by eating fresh meat or vegetables instead of processed food, keeping away from buying canned food, and promoting salt-free seasoning blends in cooking.";
        print $str1;
        ?>
      </p>
    </div>
  </div>
  <br>


  <!--Point 5-->
  <h3 class="text-center"> Avoid Accessing Drinking Of Alcohol</h3>
  <div class="row">
    <div class="side">
      <image src="images/Alcohol.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary"
          href="https://www.health.harvard.edu/staying-healthy/11-ways-to-curb-your-drinking">Learn More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "The reason people drink alcohol mostly due to facing stress, social norms or influenced by the environment. However, alcohol abuse interferes brain’s communication pathway and make your body out of control, causes the development of cancerous cells, liver problems and depression. There are some ways to guard against the temptation for alcoholic drinks by keeping yourself busy, seek for support when facing troubles, and don’t keep alcohol in house.";
        print $str1;
        ?>
      </p>
    </div>
  </div>
  <br>


  <!--Point 6-->
  <h3 class="text-center"> Quit Smoking</h3>
  <div class="row">
    <div class="side">
      <image src="images/Smoking.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary"
          href="https://ourworldindata.org/smoking#the-global-distribution-of-smoking-deaths">Learn More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "Millions of people live in poor health because of smoking. The most common effect of smoking is lung and heart disease. Smoking not only brings detrimental effects for the smoker but also for passive smoker. According to a survey done by the Institute for Health Metrics and Evaluation (IHME), around 15% of death is caused by tobacco in the year 2017. Therefore, the important agenda for smokers is to quit smoking while non-smokers should persist in saying no to tobacco smoke.";
        print $str1;
        ?>
      </p>
    </div>
  </div>
  <br>


  <!--Point 7-->
  <h3 class="text-center"> Regular Body Checkup</h3>
  <div class="row">
    <div class="side">
      <image src="images/Body Checkup.jpg" class="img-thumbnail" width=300 height=150> <br><br> <a
          class="btn btn-outline-primary"
          href="https://www.healthline.com/health/how-often-should-you-get-routine-checkups-at-the-doctor#:~:text=Regular%20checkups%20with%20your%20healthcare%20provider%20can%20benefit,which%20increases%20the%20odds%20of%20a%20good%20outcome">Learn
          More</a>
    </div>
    <div class="main">
      <p>
        <?php
        $str1 = "Even if we are not having any symptoms of anything, it is crucial to be aware of our health as we get older because prevention is better than cure. Regular body check up allow us to have an early detection on potential life-threatening disease, increase treatment opportunity and improve our health. In a nutshell, we should do regular body checkup at least once a year to put ourselves in green health. ";
        print $str1;
        ?>
      </p>
    </div>
  </div>
  <br>

</body>

</html>