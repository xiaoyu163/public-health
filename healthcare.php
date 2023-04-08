<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
  .bg1{ 
    background-image:url("https://i.pinimg.com/originals/78/bc/6b/78bc6b1c9d2b9663b80cb840f7f45ffc.jpg");  
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    width:100%;
    margin: 0%;
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
  padding: 25px;
  background-color: rgba(216, 121, 121, 0.8);
  border: 2px solid rgb(238, 232, 232);
  text-align: center;

}

/* Main column */
.main {
  flex: 60%;
  padding: 60px;
  background-color: rgba(230, 169, 169, 0.8);
  border: 2px solid rgb(238, 232, 232);
  font-family:Arial, Helvetica, sans-serif;
  font-size: larger;
  
}
  </style>
</head>
<body class=bg1> 
  <?php 
        include 'nav.php';
  ?>

  <section class=my-4>
    <div class="py-4" >
      <h2 class="text-center" >Ways To Maintain Health <i class='fas fa-heartbeat' style='font-size:50px;color:Tomato'></i></h2>
    </div>

 
<!--Point 1-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  1. Eat A Healthy Diet</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Healthy Diet.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="Different food provides distinct nutrient which is required by our body. Fruit supplies a wealth of vitamin C and potassium, vegetables are a rich source of vitamin, fiber, and minerals, dairy product contains calcium and potassium, etc. By selecting healthier food, we can reduce the risk of malnutrition, cancer, heart disease, and diabetes. On top of that, we should implement a balanced diet to extract nutrients from multiple resources but remember not to take in an excessive amount of food which brings countereffect.";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>

 
<!--Point 2-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  2. Reduce Intake Of harmful Fats</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Harmful Fat.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="Fats are divided into three types which are saturated fat, unsaturated fat, and trans-fat. World Health Organization (WHO) recommends the intake of unsaturated fat instead of saturated fat and trans-fat because unsaturated fat may lower the “bad” cholesterol while saturated fat and trans-fat are unhealthy fats. Therefore, we should limit the consumption of food such as fatty meat, cheese, snacks, and cookies which compromise harmful fat.";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>


<!--Point 3-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  3. Exercise Regularly</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Exercise.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="Regular exercise boosts energy level, make your day refreshing and promote better sleep. It is advised to make exercise a basic routine and always keep our body active. Centers for Disease Control and Prevention (CDC) recommends us to carry out cardio and strength-building activities with a duration of at least 2.5 hours per week. Type of exercise carried out may be varied with age group. Children above six years old and adults can carry out vigorous exercise, senior citizens can do brisk walking while moderate-intensity aerobic activity is suitable for pregnant and postpartum women. ";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>


<!--Point 4-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  4. Consume Less Salt And Sugar</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Salt And Sugar.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="Salt and sugar are commonly used to enhance taste when preparing dishes. However, over intake of salt lead to high blood pressure which causes heart failure whilst excessive sugar consumption is the root cause of diabetes and obesity. Adult is advised to consume not more than a teaspoon of salt per day. Moreover, the sugar intake for a female adult is limited to 6 teaspoons while that of a male adult is 9 teaspoons daily. Some tips to reduce sugar intake are drinking water, opting for jam with reduced sugar, and avoiding food with added sugar. On the other hand, control sodium input by eating fresh meat or vegetables instead of processed food, keeping away from buying canned food, and promoting salt-free seasoning blends in cooking.";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>


<!--Point 5-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  5. Avoid Accessing Drinking Of Alcohol</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Alcohol.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="The reason people drink alcohol mostly due to facing stress, social norms or influenced by the environment. However, alcohol abuse interferes brain’s communication pathway and make your body out of control, causes the development of cancerous cells, liver problems and depression. There are some ways to guard against the temptation for alcoholic drinks by keeping yourself busy, seek for support when facing troubles, and don’t keep alcohol in house.";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>


<!--Point 6-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  6. Quit Smoking</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Smoking.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="Millions of people live in poor health because of smoking. The most common effect of smoking is lung and heart disease. Smoking not only brings detrimental effects for the smoker but also for passive smoker. According to a survey done by the Institute for Health Metrics and Evaluation (IHME), around 15% of death is caused by tobacco in the year 2017. Therefore, the important agenda for smokers is to quit smoking while non-smokers should persist in saying no to tobacco smoke.";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>


<!--Point 7-->

<div div class="m-4 ",class="py-0" >
  <h5 class="text-left">  7. Regular Body Checkup</h5>

<div class="row">

  <div class="side">
    <div div class="m-4 ",class="py-0" >
      <image src="images/Body Checkup.jpg" width=300 height=150>
    </div>
    </div>

    <div class="main">
        <p>  
          <?php
          $str1="Even if we are not having any symptoms of anything, it is crucial to be aware of our health as we get older because prevention is better than cure. Regular body check up allow us to have an early detection on potential life-threatening disease, increase treatment opportunity and improve our health. In a nutshell, we should do regular body checkup at least once a year to put ourselves in green health. ";
          echo wordwrap($str1,130,"<br>\n");
          ?>
        </p>
    </div>
</div>
</div>
    <br>
  </section>

</body>



</html>
