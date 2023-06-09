<!DOCTYPE html>
<html lang="en">

<?php
include 'nav.php';
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <style>
    .item1 {
      grid-area: "myArea";
      text-align: center;
    }

    .grid-container {
      display: grid;
      grid-template-areas: 'myArea myArea';
      grid-gap: 10px;
      padding: 10px;
    }

    .grid-container>div {
      background-color: rgba(255, 255, 255, 0.3);
      text-align: center;
      padding: 20px 0;
      font-size: 30px;
    }

    /*paragraph*/
    .p1 {
      padding: 8px;
      margin: 10px;
      background-color: rgb(102, 153, 153);
      border-radius: 10px;
      border: 1px solid rgb(238, 232, 232);
      color: black;
      font-family: 'Times New Roman', Times, serif;
      font-size: x-large;
      text-align: relative;
      word-spacing: 5px;
    }

    body {
      background-color: rgb(209, 224, 224);
    }

    header h1 {
      text-align: center;
      position: relative;
      font-family: 'Times New Roman', Times, serif;
    }

    .point {
      text-align: left;
      position: relative;
      font-family: 'Times New Roman', Times, serif;
        padding-left: 1%;
    }
  </style>
</head>

<body class=bg>

  <header>
    <h1>Latest Diseases Occur Globally</h1>
  </header>


  <!--Point 1-->
  <h3 class=point> 1. Coronavirus Disease (Covid 19)</h3>
  <div class="grid-container">
    <div div class=item1>
      <image src="images/Covid 19.jpg" class="rounded" width=300 height=200> <br> <a class="btn btn-outline-primary"
          href="https://www.mayoclinic.org/diseases-conditions/coronavirus/symptoms-causes/syc-20479963">Learn More</a>
    </div>
    <p class=p1>
      <?php
      $str1 = "Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus. On the 31st of December, the World Health Organization (WHO) was notified of cases of pneumonia in Wuhan, China and this information led to the first confirmed cases of COVID-19. Coronavirus diseases are distributed globally except for some countries such as North Korea and islands located in Pacific. The virus of this disease spreads easily from person to person through nose, mouth, and eye. The common signs of coronavirus are fever, cough, running nose, and tiredness. Vaccination is the only Covid-19 prevention measure. However, vaccinated people will also have the chance to be infected. Antiviral medications have been approved by the FDA to treat mild to moderate COVID-19 in those who are more prone to become seriously ill. ";
      print $str1;
      ?>
    </p>
  </div>
  <br>


  <!--Point 2-->
  <h3 class=point> 2. MonkeyPox (Mpox)</h3>
  <div class="grid-container">
    <div div class=item1>
      <image src="images/Monkeypox.jpg" class="rounded" width=300 height=200> <br> <a class="btn btn-outline-primary"
          href="https://www.who.int/news-room/fact-sheets/detail/monkeypox">Learn More</a>
    </div>
    <p class=p1>
      <?php
      $str1 = "Mpox is a kind of virus transmitted from animal to human which primarily occurs in central Africa, west Africa, and areas near the tropical rainforest. However, it can also transmit among humans when having skin contact with infected humans. Nowadays, the case of Mpox that appears in urban areas has been increasing. Tree squirrels, rope squirrels, dormice, and some other species are suspected to be the Mpox virus propagation source. A total of 86 724 laboratory-confirmed cases of Mpox, including 112 fatalities, have been reported to WHO from 110 nations between 1 January 2022 and 27 March 2023. United States of America, Brazil, and Spain are the countries which have reported the highest cumulative number of cases globally. Fever, chills, and rash that might take weeks to clear are some flu-like symptoms of Mpox. Approved antiviral treatments for Mpox are currently unavailable but research is being taken to study treatment for it. Some of the practice which is believed to safeguard yourself from Mpox virus make sure meat is cooked thoroughly before consuming, ensuring the cleanliness of your hand, and avoiding contact with sick or dead animals.";
      print $str1;
      ?>
    </p>
  </div>
  <br>


  <!--Point 3-->
  <h3 class=point> 3. Marburg Virus Disease (MVD)</h3>
  <div class="grid-container">
    <div class=item1>
      <image src="images/marburg.jpg" class="rounded" width=300 height=200> <br> <a class="btn btn-outline-primary"
          href="https://www.cdc.gov/vhf/marburg/outbreaks/chronology.html">Learn More</a>
    </div>
    <p class=p1>
      <?php
      $str1 = "Marburg virus disease (MVD) is an uncommon but severe hemorrhagic fever which will afflict both human and non-human primates. It is closely related to Ebola and it will lead to death in some severe cases. The root cause of this disease is Marburgvirus single-stranded RNA virus of the filovirus family. In 2023, there are reported Marburg virus disease cases in Tanzania and Equatorial Guinea. A typical transmission source of MVD is African fruit bats. When a person gets infected, the disease can be transferred via the contact of body fluids such as blood and respiratory droplets. Symptoms of MVD include fever, lethargy, severe bleeding, and more. It is sad to say that there is no therapy method to prevent this disease contemporarily while the vaccine to prevent it is in the development stage. The only prevention method is via the barrier nursing technique to isolate the infected patient and avoid having contact with their body fluid.";
      print $str1;
      ?>
    </p>
  </div>
  <br>


  <!--Point 4-->
  <h3 class=point> 4. Measles</h3>
  <div class="grid-container">
    <div class=item1>
      <image src="images/Measles.jpg" class="rounded" width=300 height=200> <br> <a class="btn btn-outline-primary"
          href="https://www.mayoclinic.org/diseases-conditions/measles/symptoms-causes/syc-20374857">Learn More</a>
    </div>
    <p class=p1>
      <?php
      $str1 = "Measles or rubeola is a highly contagious disease caused by a virus in the paramyxovirus family. South Sudan National Ministry of Health declared the outbreak of Measles in December 2022. Data show that between January 2022 and April 2023, there are already 37 countries with the confirmed outbreak of measles cases. Moreover, a total of 5999 suspected cases have been announced within this duration. Measles virus commonly can be found in the nose and throat of the patient. When they cough, sneeze, or talk the infectious droplet will be spread through the air and remain there for around an hour. The infected people will only discover the symptoms 10 to 14 days after being exposed to the virus. Some signs of measles are a rash on the skin that consists of big, flat patches that frequently flow into one another, inflamed eyes, and Koplik's spots found inside the mouth. Although there is no cure for Measles, one can prevent it by taking a vaccination.";
      print $str1;
      ?>
    </p>
  </div>
  <br>


  <!--Point 5-->
  <h3 class=point> 5. Avian Influenza A (H5N1)</h3>
  <div class="grid-container">
    <div class=item1>
      <image src="images/H5N1.jpg" class="rounded" width=300 height=200> <br> <a class="btn btn-outline-primary"
          href="https://www.who.int/news-room/questions-and-answers/item/influenza-h5n1">Learn More</a>
    </div>
    <p class=p1>
      <?php
      $str1 = "H5N1 is the source of Avian influenza or bird flu which results in contagious respiratory disease in birds. Cambodia, China, Ecuador, Spain, United Kingdom, and United States have verified the occurrence of H5N1 cases. Nearly all human cases of the H5N1 virus have been linked to intimate contact with infected live or dead birds. According to the current survey, it is found that H5N1 will not be transmitted from person to person. High fever and malaise, diarrhea, muscle ashes, and abdominal pain are some early symptoms of H5N1 avian influenza in humans. The infection may progress quickly to severe respiratory illness and neurologic changes. Oseltamivir, an antiviral drug, can lessen the severity of disease and avert mortality. Although H5N1 candidate vaccines have been created, they are not yet prepared for general use.";
      print $str1;
      ?>
    </p>
  </div>
  <br>

</body>

</html>
