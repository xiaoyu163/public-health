<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Public Health and Healthcare Acces</title>
    <style>
    body{
        font-family: Time News Roman;
    }

    .sub-section-1 {
       display: flex;
       flex-direction: column;
       align-items: center;
       margin: 20px;
   }

    h2 {
       font-size: 24px;
       margin-bottom: 10px;
    }

    label {
       font-size: 16px;
       font-weight: bold;
       margin-bottom: 5px;
    }

    select {
       padding: 8px 12px;
       color:#333333;
       background-color: #F0FFF9;
       border: 1px solid #dddddd;
       cursor:pointer;
       border-radius: 5px;
    }

    .collapsible{
        background-color: #ADEADC;
        color: black;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 18px;
        font-family: 'Times New Roman';
    }

    .active, .collapsible :hover{
        background-color: #ADEADC;
    }

    .content{
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #EDECEC;
    }
    
    .container2{
       background-color: #FFFEFE;
       padding:15px 9%;
       padding-bottom: 60px;
       border-radius: 5px;
      
    }

    .heading{
       text-align: left;
       padding-bottom: 5px;
       color:#fff;
       text-shadow: 0 5px 10px rgba(0,0,0,.2);
       font-size: 30px;
       text-align: center;
    }
 
    .container{
       background-color: #B9DBCF;
       padding:15px 9%;
       padding-bottom: 100px;
       border-radius: 10px;
    }

    .container .heading{
       text-align: left;
       padding-bottom: 15px;
       color:#fff;
       text-shadow: 0 5px 10px rgba(0,0,0,.2);
       font-size: 30px;
    }

   .container .box-container{
       display: grid;
       grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
       gap:50px;
    }

   .container .box-container .box{
       box-shadow: 0 5px 10px rgba(0,0,0,.2);
       border-radius: 5px;
       background: #fff;
       text-align: center;
       padding:30px 20px;
   }

   .container .box-container .box img{
       height: 80px;
   }

   .container .box-container .box h3{
       color:#444;
       font-size: 22px;
       padding:10px 0;
   }

   .container .box-container .box p{
       color:#777;
       font-size: 15px;
       line-height: 1.8;
   }

   .container .box-container .box .btn{
       margin-top: 10px;
       display: inline-block;
       background:#333;
       color:#fff;
       font-size: 17px;
       border-radius: 5px;
       padding: 8px 25px;
     
   }

   .container .box-container .box .btn:hover{
       letter-spacing: 1px;
   }

   .container .box-container .box:hover{
       box-shadow: 0 10px 15px rgba(0,0,0,.3);
       transform: scale(1.03);
   }

   @media (max-width:768px){
       .container{
           padding:20px;
       }
   }

   header {
      background-color: #bbe5e1;
      background-image: url(''),url('images/healthcare.png');
      background-size: contain, contain;
      background-repeat: no-repeat,no-repeat;
      background-position: left, right;
      position: relative;
      padding: 100px;
      font-family: Times;
      font-size : 30px;
      color: #27407E;
    }

    </style>
</head>
<body> 
    <?php 
        include 'nav.php';
    ?>

    <header>
        <h1>Healthcare Access</h1>
      
    </header>
</br> 
    
    <h2 class="heading" style="color: black">Healthcare Facilites - Hospital</h2>    
    <!--dropdown list--> 
    <div class="container2">
     <div class="box-container">
        </div>
        <button type="button" class="collapsible">Johor</button>
        
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Enche' Besar Hajjah Kalsom</b></li>
                  <ul>
                      <li>KM 5, Jalan Kota Tinggi, 86000 Kluang, Johor</li>
                      <li>Telephone: 07-7787000</li>
                      <li>Faxs: 07-7787128</li>
                      <a href="https://www.google.com/maps/place/Enche'+Besar+Hajjah+Khalsom+Hospital,+Kluang/@2.0067251,103.3433135,17z/data=!3m1!4b1!4m5!3m4!1s0x31d06e0625af33d5:0x51bf2cb5837752e6!8m2!3d2.0067197!4d103.3477982?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kota Tinggi</b></li>
                  <ul>
                      <li>Jalan Tun Habab, Pekan Kota Tinggi, 81900 Kota Tinggi, Johor</li>
                      <li>Telephone: 07-8831131/32</li>
                      <li>Faxs: 07-9931333</li>
                      <a href="https://www.google.com/maps/place/Kota+Tinggi+Hospital/@1.7349886,103.8973084,17z/data=!3m1!4b1!4m5!3m4!1s0x31da608ed1059a47:0x2781fe89c3961b21!8m2!3d1.7349832!4d103.8994971?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Mersing</b></li>
                  <ul>
                      <li>Jalan Ismail, 86800, Mersing, Johor</li>
                      <li>Telephone: 07-7993333</li>
                      <li>Faxs: 07-7994200</li>
                      <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x31c54ba02b03f411:0x18d854db7313f804?source=g.page.share"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultanah Aminah</b></li>
                  <ul>
                      <li>Jalan Persiaran Abu Bakar Sultan, 80000, Johor Bahru, Johor</li>
                      <li>Telephone: 07-2231666</li>
                      <li>Faxs: 07-2242694</li>
                      <a href="https://www.google.com/maps/place/Sultanah+Aminah+Hospital/@1.4584962,103.7460342,17z/data=!3m1!4b1!4m6!3m5!1s0x31da12bdfc916aab:0x2a73735b3f4977f4!8m2!3d1.4584962!4d103.7460342!16s%2Fg%2F11b5wlhh70"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Permai</b></li>
                  <ul>
                      <li>Jalan Tampoi, Tampoi, 81200, Johor Bahru, Johor</li>
                      <li>Telephone: 07-2311000</li>
                      <li>Faxs: 07-2371396</li>
                      <a href="https://www.google.com/maps/place/Hospital+Permai/@1.5226378,103.702497,17z/data=!3m1!4b1!4m5!3m4!1s0x31da725d40d4bd67:0xc03f52041d5a7dcf!8m2!3d1.5226324!4d103.7046857?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Pontian</b></li>
                  <ul>
                      <li>Jalan Alsagoff, 82000, Pontian, Johor</li>
                      <li>Telephone: 07-6873333</li>
                      <li>Faxs: 07-6876211</li>
                      <a href="https://www.google.com/maps/place/Pontian+Hospital/@1.498465,103.3830184,17z/data=!3m1!4b1!4m5!3m4!1s0x31d0986e1a6a0871:0x6f46d5c697412516!8m2!3d1.4984596!4d103.3852071?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Segamat</b></li>
                  <ul>
                      <li><b>KM 6, Jalan Genuang, 85000, Segamat, Johor</b></li>
                      <li>Telephone: 07-9433333</li>
                      <li>Faxs: 07-9434641</li>
                      <a href="https://www.google.com/maps/place/Segamat+Hospital/@2.4932745,102.8568745,17z/data=!3m1!4b1!4m5!3m4!1s0x31cfd398e2b92361:0x598a142c07f7c1e0!8m2!3d2.4932691!4d102.8590632?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultan Ismail Johor Bahru</b></li>
                  <ul>
                      <li>Jalan Persiaran Mutiara Emas Utama, Taman Mount Austin, 81100, Johor Bahru, Johor</li>
                      <li>Telephone: 07-3565000</li>
                      <li>Faxs: 07-3565088</li>
                      <a href="https://www.google.com/maps/place/Sultan+Ismail+Hospital/@1.5463325,103.7887053,17z/data=!3m1!4b1!4m5!3m4!1s0x31da6c242360fe61:0xbee9b4f720a6fc8!8m2!3d1.5463271!4d103.790894?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Pakar Sultanah Fatimah</b></li>
                  <ul>
                      <li>Jln Salleh, Taman Utama Satu, 84000, Muar, Johor</li>
                      <li>Telephone: 06-9564000</li>
                      <li>Faxs: 06-9526003</li>
                      <a href="https://www.google.com/maps/place/Sultanah+Fatimah+Specialist+Hospital,+Muar/@2.057115,102.5744456,15z/data=!4m6!3m5!1s0x31d1b85524a8f931:0x85c308b3fc442463!8m2!3d2.057115!4d102.5744456!16s%2Fm%2F0bmg0m9"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
                  <li><b>Hospital Sultanah Nora Ismail</b></li>
                  <ul>
                      <li>Jalan Korma, Taman Soga, 83000, Batu Pahat, Johor</li>
                      <li>Telephone: 07-4363000</li>
                      <li>Faxs: 07-4322544</li>
                      <a href="https://www.google.com/maps/place/Sultanah+Nora+Ismail+Hospital,+Batu+Pahat/@1.8375214,102.9388081,17z/data=!3m1!4b1!4m5!3m4!1s0x31d056e3c1822067:0x9963a6a3e73fc6a0!8m2!3d1.837516!4d102.9409968?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tangkak</b></li>
                  <ul>
                      <li>Jalan Hospital, Tangkak Muar, 84900, Tangkak, Johor</li>
                      <li>Telephone: 06-9782792 / 06-9781206</li>
                      <li>Faxs: 06-9786521</li>
                      <a href="https://www.google.com/maps/place/Tangkak+Hospital/@2.2720689,102.5446305,17z/data=!3m1!4b1!4m5!3m4!1s0x31d1db6ea913a4cb:0x70f5098547465d75!8m2!3d2.2720635!4d102.5468192?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Temenggong Seri Maharaja Tun Ibrahim</b></li>
                  <ul>
                      <li>81000, Kulai, Johor</li>
                      <li>Telephone: 07-6623333</li>
                      <li>Faxs: 07-6622605</li>
                      <a href="https://www.google.com/maps/place/Temenggong+Seri+Maharaja+Tun+Ibrahim+Hospital,+Kulai/@1.6397458,103.6238512,17z/data=!3m1!4b1!4m6!3m5!1s0x31da79ef74d3d9b5:0x58f8f7307cf3a2b2!8m2!3d1.6397458!4d103.6238512!16s%2Fg%2F1217nvkn"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Kedah</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Baling</b></li>
                  <ul>
                      <li>Jalan Hospital Baling, 09100, Baling, Kedah</li>
                      <li>Telephone: 04-4701333</li>
                      <li>Faxs: 04-4701160</li>
                      <a href="https://www.google.com/maps/place/Baling+Hospital/@5.6777182,100.9236278,17z/data=!3m1!4b1!4m5!3m4!1s0x31b4def009343f8d:0xc64cc6260c31a9ee!8m2!3d5.6777182!4d100.9258165?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Jitra</b></li>
                  <ul>
                      <li>Jalan Changlun, 06000, Jitra, Kedah</li>
                      <li>Telephone: 04-9174333</li>
                      <li>Faxs: 04-9176346</li>
                      <a href="https://www.google.com/maps/place/Jitra+Hospital/@6.2787858,100.4168768,17z/data=!3m1!4b1!4m5!3m4!1s0x304b5957d6c407f9:0x56dc6e56d59278d3!8m2!3d6.2787858!4d100.4190655?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kuala Nerang</b></li>
                  <ul>
                      <li>06300, Kuala Nerang, Kedah</li>
                      <li>Telephone: 04-7867333</li>
                      <li>Faxs: 04-7867052</li>
                      <a href="https://www.google.com/maps/place/Kuala+Nerang+Hospital/@6.25263,100.6075828,17z/data=!3m1!4b1!4m5!3m4!1s0x304b54d76230d4c3:0x14f985507e03e0f7!8m2!3d6.25263!4d100.6097715?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kulim</b></li>
                  <ul>
                      <li>Jalan Mahang, 09000, Kulim, Kedah</li>
                      <li>Telephone: 04-4272733</li>
                      <li>Faxs: 04-4900760</li>
                      <a href="https://www.google.com/maps/place/Kulim+Hospital/@5.3931314,100.5708476,17z/data=!3m1!4b1!4m5!3m4!1s0x304acc7d854cafab:0xec95a06ede1692ba!8m2!3d5.3931314!4d100.5730363?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Langkawi</b></li>
                  <ul>
                      <li>Bukit Tekuh, Jalan Padang Maksirat, 07000, Langkai, Kedah</li>
                      <li>Telephone: 04-9663333</li>
                      <li>Faxs: 04-9660121</li>
                      <a href="https://www.google.com/maps/place/Hospital+Sultanah+Maliha,+Langkawi/@6.3248702,99.7944692,17z/data=!3m1!4b1!4m5!3m4!1s0x304c78a528f808e9:0x788dc09da53f3597!8m2!3d6.3248702!4d99.7966579?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sik</b></li>
                  <ul>
                      <li>08200, Sik, Kedah</li>
                      <li>Telephone: 04-4695333</li>
                      <li>Faxs: 04-4695990</li>
                      <a href="https://www.google.com/maps/place/Sik+Hospital/@5.8122196,100.7248,17z/data=!3m1!4b1!4m5!3m4!1s0x31b4ce16979d048f:0x1d3c16de3368e333!8m2!3d5.8122196!4d100.7269887?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultan Abudl Halim</b></li>
                  <ul>
                      <li><b>Jln. Lencongan Timur Bandar Amanjaya, 08000, Kuala Muda, Kedah</b></li>
                      <li>Telephone: 04-4457333</li>
                      <li>Faxs: 04-4480092</li>
                      <a href="https://www.google.com/maps/place/Hospital+Sultan+Abdul+Halim,Jalan+Lencong+Timur/@5.6684202,100.514674,17z/data=!4m6!3m5!1s0x304b299b289ba837:0x5676b2203146f97!8m2!3d5.668219!4d100.51769!15sChtob3NwaXRhbCBzdWx0YW4gYWJkdWwgaGFsaW2SAQhidXNfc3RvcA?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultanah Bahiyah</b></li>
                  <ul>
                      <li>KM 6, Jln Langgar, 05460, Kota Setar, Kedah</li>
                      <li>Telephone: 04-7406233</li>
                      <li>Faxs: 04-7350233</li>
                      <a href="https://www.google.com/maps/place/Hospital+Sultanah+Bahiyah,+Alor+Setar/@6.1488245,100.4063735,17z/data=!3m1!4b1!4m6!3m5!1s0x304b5b49f51aaaab:0x9d1c566c4ca23a5b!8m2!3d6.1488245!4d100.4063735!16s%2Fg%2F1234ztjf"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Yan</b></li>
                  <ul>
                      <li>Batu 25 Jalan Yan, 6900, Yan, Kedah</li>
                      <li>Telephone: 04-4655333</li>
                      <li>Faxs: 03-4655960</li>
                      <a href="https://www.google.com/maps/place/Yan+Hospital/@5.820611,100.3823225,17z/data=!3m1!4b1!4m5!3m4!1s0x304b3b234a3ad055:0x5937e955d9ceafc4!8m2!3d5.820611!4d100.3845112?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Kelantan</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Gua Musang</b></li>
                  <ul>
                      <li>Bandar Baru Gua Musang, 18300 Gua Musang, Kelantan</li>
                      <li>Telephone: 09-9121133</li>
                      <li>Faxs: 09-91212302</li>
                      <a href="https://www.google.com/maps/place/Gua+Musang+Hospital/@4.8594875,101.9546244,17z/data=!3m1!4b1!4m6!3m5!1s0x31ca0418a1179b01:0x8a86eaf1157acd5b!8m2!3d4.8594875!4d101.9546244!16s%2Fg%2F122k65dr"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Jeli</b></li>
                  <ul>
                      <li>Bandar Jeli, 17600 Jeli, Kelantan</li>
                      <li>Telephone: 09-9440092</li>
                      <li>Faxs: 09-9440068</li>
                      <a href="https://www.google.com/maps/place/Jeli+Hospital/@5.7012901,101.8421124,17z/data=!3m1!4b1!4m5!3m4!1s0x31b43182af7b59b3:0x3b2e79c6816bed2e!8m2!3d5.7012901!4d101.8443011?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Machang</b></li>
                  <ul>
                      <li>D18 Jalan Pasir Puteh, Kampung Bukit Tiu, 18500 Machang, Kelantan</li>
                      <li>Telephone: 09-9741300/301</li>
                      <li>Faxs: 09-9752470</li>
                      <a href="https://www.google.com/maps/place/Machang+Hospital/@5.7631889,102.2236412,17z/data=!3m1!4b1!4m5!3m4!1s0x31b685337894c969:0x3cb2baaf12d46fa6!8m2!3d5.7631889!4d102.2258299?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Pasir Mas</b></li>
                  <ul>
                      <li>Jalan Meranti, 17000 Pasir Mas, Kelantan</li>
                      <li>Telephone: 09-7932300</li>
                      <li>Faxs: 09-7900996</li>
                      <a href="https://www.google.com/maps/place/Pasir+Mas+Hospital/@6.0139824,102.1167931,17z/data=!3m1!4b1!4m5!3m4!1s0x31b6a12a5fe43785:0xcb6b9b4c884d83c4!8m2!3d6.0139824!4d102.1189818?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Raja Perempuan Zainab II</b></li>
                  <ul>
                      <li>Kota Bahru, Jalan Hospital, 15000, Kota Bahru, Kelantan</li>
                      <li>Telephone: 09-7452000</li>
                      <li>Faxs: 09-7486951</li>
                      <a href="https://www.google.com/maps/place/Raja+Perempuan+Zainab+II+Hospital,+Kota+Bharu/@6.1252883,102.2435233,17z/data=!3m1!4b1!4m5!3m4!1s0x31b6afdba81eaf23:0x6647f3f80c915890!8m2!3d6.1252883!4d102.245712?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultan Ismail Petra</b></li>
                  <ul>
                      <li>Jalan Kota Bahru, 18000, Kuala Krai, Kelantan</li>
                      <li>Telephone: 09-9611300</li>
                      <li>Faxs: 09-9666076</li>
                      <a href="https://www.google.com/maps/place/Sultan+Ismail+Petra+Hospital,+Kuala+Krai/@5.4963494,102.2206458,17z/data=!3m1!4b1!4m5!3m4!1s0x31b67b4430071c3f:0xe6968dd10ba187a1!8m2!3d5.4963494!4d102.2228345?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tanah Merah</b></li>
                  <ul>
                      <li><b>17500, Tanah Merah, Kelantan</b></li>
                      <li>Telephone: 09-9545000</li>
                      <li>Faxs: 09-9557929</li>
                      <a href="https://www.google.com/maps/place/Tanah+Merah+Hospital/@5.8099911,102.1501346,17z/data=!3m1!4b1!4m5!3m4!1s0x31b69c7d3d68ed5b:0xca49b5a20976c81b!8m2!3d5.8099911!4d102.1523233?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tengku Anis</b></li>
                  <ul>
                      <li>Jalan Pasir Puteh, 16800 Pasir Puteh, kelantan</li>
                      <li>Telephone: 09-7843333</li>
                      <li>Faxs: 09-7843444</li>
                      <a href="https://www.google.com/maps/place/Tengku+Anis+Hospital,+Pasir+Puteh/@5.8329518,102.3855688,17z/data=!4m5!3m4!1s0x31b6939cb580c6ef:0xe983edf8a697ba62!8m2!3d5.8329518!4d102.3877575?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tumpat</b></li>
                  <ul>
                      <li>Jalan Kelaburan, 16200, Tumpat, Kelantan</li>
                      <li>Telephone: 09-7263000</li>
                      <li>Faxs: 09-7257082</li>
                      <a href="https://www.google.com/maps/place/Tumpat+Hospital/@6.1897387,102.1551154,17z/data=!3m1!4b1!4m5!3m4!1s0x31b6abf981dcc955:0xc25a125f56447d3!8m2!3d6.1897387!4d102.1573041?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Melaka</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Alor Gajah</b></li>
                  <ul>
                      <li>Jalan Paya Datok / Simpang, Kampung Tepat, 78000 Alor Gajah, Melaka</li>
                      <li>Telephone: 06-5562333</li>
                      <li>Faxs: 06-5567392</li>
                      <a href="https://www.google.com/maps/place/Alor+Gajah+Hospital/@2.3954442,102.1998172,17z/data=!3m1!4b1!4m5!3m4!1s0x31d1fd8527f7edfb:0xe51e69c9b77cbe37!8m2!3d2.3954442!4d102.2020059?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Jasin</b></li>
                  <ul>
                      <li>Hospital Utama, Kampung Jasin Hilir, 77000 Jasin, Melaka</li>
                      <li>Telephone: 06-5294262</li>
                      <li>Faxs: 06-5295262</li>
                      <a href="https://www.google.com/maps/place/Jasin+Hospital/@2.3048477,102.4274165,17z/data=!3m1!4b1!4m5!3m4!1s0x31d1e767a41e7a1b:0x6e2c9d24f4c7f471!8m2!3d2.3048477!4d102.4296052?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Melaka</b></li>
                  <ul>
                      <li>Jalan Mufti Haji Khalil, 75400 Melaka</li>
                      <li>Telephone: 06-2892344</li>
                      <li>Faxs: 06-2841590</li>
                      <a href="https://www.google.com/maps/place/Hospital+Melaka/@2.2172348,102.2591463,17z/data=!3m1!4b1!4m5!3m4!1s0x31d1efd13c8080ed:0x27e0cc2279cc745f!8m2!3d2.2172348!4d102.261335?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        
        <button type="button" class="collapsible">Negeri Sembilan</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Jelebu</b></li>
                  <ul>
                      <li>Taman Bukit Petaling, 71600 Kuala Klawang, Negeri Sembilan</li>
                      <li>Telephone: 06-6136355</li>
                      <li>Faxs: 06-6137531</li>
                      <a href="https://www.google.com/maps/place/Jelebu+Hospital/@2.9503172,102.056896,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdd6083c620a61:0x4d198318dcf8050f!8m2!3d2.9503172!4d102.0590847?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Jempol</b></li>
                  <ul>
                      <li>Jalan Bahagia, Bandar Seri Jempol, 72120 Bandar Seri Jempol, Negeri Sembilan</li>
                      <li>Telephone: 06-4592000</li>
                      <li>Faxs: 06-4581086</li>
                      <a href="https://www.google.com/maps/place/Jempol+Hospital/@2.9032324,102.4069305,17z/data=!3m1!4b1!4m6!3m5!1s0x31ce5fa55511ebeb:0x4f956346395cf628!8m2!3d2.9032324!4d102.4069305!16s%2Fg%2F122j88d4"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Port Dickson</b></li>
                  <ul>
                      <li>KM 11, Jalan Pantai 71050 Port Dickson, Negeri Sembilan</li>
                      <li>Telephone: 06-6487333</li>
                      <li>Faxs: 06-6625003</li>
                      <a href="https://www.google.com/maps/place/Port+Dickson+Hospital/@2.4777276,101.8550101,17z/data=!3m1!4b1!4m6!3m5!1s0x31cdf731b4422e3d:0x18a66704c9e67856!8m2!3d2.4777276!4d101.8550101!16s%2Fg%2F121jt5rp"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Rembau</b></li>
                  <ul>
                      <li>Kampung Masjid Tanah, 71300 Pedas, Negeri Sembilan</li>
                      <li>Telephone: 06-6860600</li>
                      <li>Faxs: 06-6860700</li>
                      <a href="https://www.google.com/maps/place/Rembau+Hospital/@2.6003768,102.0728045,17z/data=!3m1!4b1!4m6!3m5!1s0x31ce082aaffd491f:0xce6a8c3c6e3717d6!8m2!3d2.6003768!4d102.0728045!16s%2Fg%2F11bxg9n_1s"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tampin</b></li>
                  <ul>
                      <li>Jalan Tampin-Gemas, Kampung Keru Tengah, 73000, Tampin, Negeri Sembilan</li>
                      <li>Telephone: 06-4411511 / 06-4411512</li>
                      <li>Faxs: 06-4419610</li>
                      <a href="https://www.google.com/maps/place/Tampin+Hospital/@2.484776,102.2336438,17z/data=!3m1!4b1!4m6!3m5!1s0x31ce04a1c1b30d6d:0x55c0f8806c2201a8!8m2!3d2.484776!4d102.2336438!16s%2Fg%2F122mwmky"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tuanku Ampuan Najihah</b></li>
                  <ul>
                      <li>KM 3 Jalan Melang, Kampung Gemelang, 72000, Kuala Pilah, Negeri Sembilan</li>
                      <li>Telephone: 06-4818001</li>
                      <li>Faxs: 06-4818010</li>
                      <a href="https://www.google.com/maps/place/Tuanku+Ampuan+Najihah+Hospital,+Kuala+Pilah/@2.7332582,102.2315849,17z/data=!3m1!4b1!4m6!3m5!1s0x31ce7295576a0ffd:0xfc088cfeca32b6f1!8m2!3d2.7332582!4d102.2315849!16s%2Fg%2F121fqmkk"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tuanku Ja'afar</b></li>
                  <ul>
                      <li>Seremban, Jalan Rasah, 70300, Seremban, Negeri Sembilan</li>
                      <li>Telephone: 06-7684000</li>
                      <li>Faxs: 06-7625771</li>
                      <a href="https://www.google.com/maps/place/Tuanku+Ja'afar+Hospital,+Seremban/@2.7097523,101.9448302,17z/data=!3m1!4b1!4m6!3m5!1s0x31cde77aebffb071:0x476b754d9666c9d3!8m2!3d2.7097523!4d101.9448302!16s%2Fg%2F121nm83s"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Pahang</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Bentong</b></li>
                  <ul>
                      <li>Jalan Padang, 28700, Bentong, Pahang</li>
                      <li>Telephone: 09-2223333</li>
                      <li>Faxs: 09-2224494</li>
                      <a href="https://www.google.com/maps/place/Bentong+Hospital/@3.5252327,101.9032507,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc0569eecdcc7f:0xdf01c0ea600a15a6!8m2!3d3.5252327!4d101.9054394?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Bera</b></li>
                  <ul>
                      <li>Jalan Masjid, Bandar Bera, 28200, Bera, Pahang</li>
                      <li>Telephone: -</li>
                      <li>Faxs: -</li>
                      <a href="https://www.google.com/maps/place/Bera+Hospital/@3.2697968,102.4499061,17z/data=!3m1!4b1!4m6!3m5!1s0x31ceeb5ac8784fed:0x1551bbc0986fa3bf!8m2!3d3.2697968!4d102.4499061!16s%2Fg%2F11fy_5zv3y"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Jengka</b></li>
                  <ul>
                      <li>Bandar Jengka Maran, 26400 Bandar Tun Razak, Pahang</li>
                      <li>Telephone: 09-4662333</li>
                      <li>Faxs: 09-4663215</li>
                      <a href="https://www.google.com/maps/place/Jengka+Hospital/@3.7731272,102.5495178,17z/data=!3m1!4b1!4m5!3m4!1s0x31c931200c6a7cf1:0xd56c39d0dddf9760!8m2!3d3.7731272!4d102.5517065?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Jerantut</b></li>
                  <ul>
                      <li>Taman Jaya, 27000 Jerantut, Pahang</li>
                      <li>Telephone: 09-2663333</li>
                      <li>Faxs: 09-2661462 </li>
                      <a href="https://www.google.com/maps/place/Jerantut+Hospital/@3.9293159,102.3579816,17z/data=!3m1!4b1!4m5!3m4!1s0x31c94170d870ffc3:0x6d238c6887e82611!8m2!3d3.9293159!4d102.3601703?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kuala Lipis</b></li>
                  <ul>
                      <li>27200 Kuala Lipis, Lipis, Pahang</li>
                      <li>Telephone: 09-3123333</li>
                      <li>Faxs: 09-3121787</li>
                      <a href="https://www.google.com/maps/place/Kuala+Lipis+Hospital/@4.1826046,102.0534248,17z/data=!3m1!4b1!4m5!3m4!1s0x31cbd63386a22705:0x45661bc9cf97a59f!8m2!3d4.1826046!4d102.0556135?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Muadzam Shah</b></li>
                  <ul>
                      <li>26700 Muadzam Shah, Rompin, Pahang</li>
                      <li>Telephone: 09-4523333 / 09-4523088 / 09-4523089</li>
                      <li>Faxs: 09-4523055</li>
                      <a href="https://www.google.com/maps/place/Muadzam+Shah+Hospital/@3.0537991,103.0887274,17z/data=!3m1!4b1!4m5!3m4!1s0x31cf0a2dab97b75d:0x683d85a619b5d048!8m2!3d3.0537991!4d103.0909161?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Pekan</b></li>
                  <ul>
                      <li>Jalan Batu Balik, Kampung Mengkasar, 26600, Pekan, Pahang</li>
                      <li>Telephone: 09-4223333</li>
                      <li>Faxs: 09-4228259</li>
                      <a href="https://www.google.com/maps/place/Pekan+Hospital/@3.5016696,103.3791768,17z/data=!3m1!4b1!4m6!3m5!1s0x31cf5070af7d0fd9:0xa80754cf184362d1!8m2!3d3.5016696!4d103.3791768!16s%2Fg%2F121hlr7z"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Raub</b></li>
                  <ul>
                      <li>Jalan Tengku Abd Samad, 27600, Raub, Penang</li>
                      <li>Telephone: 09-3553333 / 09-3551661 / 09-3551710</li>
                      <li>Faxs: 09-3554331</li>
                      <a href="https://www.google.com/maps/place/Raub+Hospital/@3.8099055,101.8514277,17z/data=!3m1!4b1!4m6!3m5!1s0x31cbf0311fb345f3:0x7915a90a2200ebfe!8m2!3d3.8099055!4d101.8514277!16s%2Fg%2F1217cpf2"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Rompin</b></li>
                  <ul>
                      <li>Jalan Kg. Kolam Rompin, 26800, Rompin, Pahang</li>
                      <li>Telephone: 09-4141305 / 09-4141543 / 09-4146333</li>
                      <li>Faxs: 09-4141554</li>
                      <a href="https://www.google.com/maps/place/Rompin+Hospital/@2.7960999,103.4939233,17z/data=!3m1!4b1!4m5!3m4!1s0x31cf897580378c87:0xce4316d80170e905!8m2!3d2.7960999!4d103.496112?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultan Hj Ahmad Shah</b></li>
                  <ul>
                      <li>Jalan Maran, 28000, Temerloh, Pahang</li>
                      <li>Telephone: 09-2955333</li>
                      <li>Faxs: 09-2972468</li>
                      <a href="https://www.google.com/maps/place/Hospital+Sultan+Haji+Ahmad+Shah,+Temerloh/@3.4531541,102.4493507,17z/data=!3m1!4b1!4m5!3m4!1s0x31cec7773ad78f01:0xe7a5e471a11b96f5!8m2!3d3.4531541!4d102.4515394?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sultanah Hajjah Kalsom</b></li>
                  <ul>
                      <li>Persiaran Dayang Endah, 39000, Cameron Highlands, Pahang</li>
                      <li>Telephone: 05-4913333 / 05-4915954 / 05-4915803</li>
                      <li>Faxs: 05-4915453</li>
                      <a href="https://www.google.com/maps/place/Sultanah+Hajjah+Kalsom+Hospital,+Cameron+Highlands/@4.4667742,101.3890202,17z/data=!3m1!4b1!4m5!3m4!1s0x31ca5778b2a8a425:0x455a960931f81930!8m2!3d4.4667742!4d101.3912089?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tengku Ampuan Afzan</b></li>
                  <ul>
                      <li>Jalan Air Putih, 25100, Kuantan, Pahang</li>
                      <li>Telephone: 09-5133333</li>
                      <li>Faxs: 09-5142712</li>
                      <a href="https://www.google.com/maps/place/Tengku+Ampuan+Afzan+Hospital,+Kuantan/@3.8009173,103.3193261,17z/data=!3m1!4b1!4m5!3m4!1s0x31c8b07870b33c15:0x552246d772783423!8m2!3d3.8009173!4d103.3215148?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Pulau Pinang</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Balik Pulau</b></li>
                  <ul>
                      <li>Balik Pulau, 11000, Barat Daya, Pulau Pinang</li>
                      <li>Telephone: 04-8669333</li>
                      <li>Faxs: 04-8666058</li>
                      <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x304aea5f6632656f:0xb7a177605082ee5e?source=g.page.share"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Bukit Mertajam</b></li>
                  <ul>
                      <li>Jalan Kulim, Bukit Mertajam, 14000, Seberang Perai Tengah, Pulau Pinang</li>
                      <li>Telephone: 04-5497333</li>
                      <li>Faxs: 04-5497299</li>
                      <a href="https://www.google.com/maps/place/Bukit+Mertajam+Hospital/@5.3593512,100.4618769,17z/data=!3m1!4b1!4m5!3m4!1s0x304ac8ecf3131f0d:0xb98e136db0ac623e!8m2!3d5.3593459!4d100.4640656?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kepala Batas</b></li>
                  <ul>
                      <li>Jalan Bertam, Kepala Batas, 13200, Seberang Perai Utara, Pulau Pinang</li>
                      <li>Telephone: 04-5793333 / 04-5623333</li>
                      <li>Faxs: 04-5791088</li>
                      <a href="https://www.google.com/maps/place/Kepala+Batas+Hospital/@5.5126518,100.4343842,17z/data=!3m1!4b1!4m5!3m4!1s0x304ada7fd3313569:0x7ee4751a8fca42de!8m2!3d5.5126465!4d100.4365729?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Pulau Pinang</b></li>
                  <ul>
                      <li>Jalan Residensi, 10990, Timur Laut, Pulau Pinang</li>
                      <li>Telephone: 04-2225333</li>
                      <li>Faxs: 04-2281737</li>
                      <a href="https://www.google.com/maps/place/Penang+General+Hospital/@5.4169121,100.3091414,17z/data=!3m1!4b1!4m5!3m4!1s0x304ac3b15a331655:0xa381d352fd842b5f!8m2!3d5.4169068!4d100.3113301?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sebarang Jaya</b></li>
                  <ul>
                      <li>Jln Tun Hussien Onn, 13700, Seberang Perai Tengah, Pulau Pinang</li>
                      <li>Telephone: 04-3827333</li>
                      <li>Faxs: 04-3970754</li>
                      <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x304ac5da15b86f23:0xc40095b41a8887f7?source=g.page.share"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sungai Bakap</b></li>
                  <ul>
                      <li>Sungai Jawi, 14200, Seberang Perai Selatan, Pulau Pinang</li>
                      <li>Telephone: 04-5824333</li>
                      <li>Faxs: 04-5822494</li>
                      <a href="https://www.google.com/maps/place/Sungai+Bakap+Hospital/@5.2192832,100.4950559,17z/data=!3m1!4b1!4m5!3m4!1s0x304ab13abfbbfb13:0x62110d37d5f1506b!8m2!3d5.2192779!4d100.4972446?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        
        <button type="button" class="collapsible">Perak</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Bahagia Ulu Kinta</b></li>
                  <ul>
                      <li>Jln Besar, 31250, Tanjung Rambutan, Perak</li>
                      <li>Telephone: 05-5332333</li>
                      <li>Faxs: 05-5331350</li>
                      <a href="https://www.google.com/maps/place/Hospital+Bahagia+Ulu+Kinta/@4.6756243,101.1485585,17z/data=!3m1!4b1!4m5!3m4!1s0x31ca92838ee40355:0x92e978967da7205!8m2!3d4.675619!4d101.1507472?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Batu Gajah</b></li>
                  <ul>
                      <li>Jalan Changkat Batu Gajah, Jalan Hospital, Batu Gajah, Perak</li>
                      <li>Telephone: 05-3663333</li>
                      <li>Faxs: 05-3663851</li>
                      <a href="https://www.google.com/maps/place/Batu+Gajah+Hospital/@4.4794237,101.0328296,17z/data=!3m1!4b1!4m5!3m4!1s0x31cae628a4c2bc19:0x554ab14fda703dc9!8m2!3d4.4794184!4d101.0350183?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Changkat Melintang</b></li>
                  <ul>
                      <li>Lambor Kanan, Parit Perak, 32900 Bota, Perak</li>
                      <li>Telephone: 05-3761333</li>
                      <li>Faxs: 05-3761400</li>
                      <a href="https://www.google.com/maps/place/Changkat+Melintang+Hospital/@4.3129633,100.9083023,17z/data=!3m1!4b1!4m5!3m4!1s0x31cb20a2262943dd:0x17bb078edad82fce!8m2!3d4.312958!4d100.910491?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Gerik</b></li>
                  <ul>
                      <li>Jalan Intan, 33300, Hulu Perak, Perak</li>
                      <li>Telephone: 05-7911333 / 05-7911334 / 05-7911081</li>
                      <li>Faxs: 05-7911945</li>
                      <a href="https://www.google.com/maps/place/Gerik+Hospital/@5.429032,101.1257329,17z/data=!3m1!4b1!4m5!3m4!1s0x31b510452ccab5ef:0xbae0bd732318f81d!8m2!3d5.4290267!4d101.1279216?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kampar</b></li>
                  <ul>
                      <li>Jalan Hospital, 31900, Kampar, Perak</li>
                      <li>Telephone: 05-4653333 / 05-4652177 / 05-4667612</li>
                      <li>Faxs: 05-4667612</li>
                      <a href="https://www.google.com/maps/place/Kampar+Hospital/@4.3119046,101.1541726,17z/data=!3m1!4b1!4m5!3m4!1s0x31cb1d542f24b997:0x719aaef204868fdb!8m2!3d4.3118993!4d101.1563613?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Kuala Kangsar</b></li>
                  <ul>
                      <li>Jalan Sultan Idris Shah 1, 33000, Kuala Kangsar, Perak</li>
                      <li>Telephone: 05-7763333</li>
                      <li>Faxs: 05-7769660</li>
                      <a href="https://www.google.com/maps/place/Kuala+Kangsar+Hospital/@4.7730711,100.9297794,17z/data=!3m1!4b1!4m5!3m4!1s0x31cabcfceda8bb59:0xa62dcb3a2918445!8m2!3d4.7730658!4d100.9319681?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Parit Buntar</b></li>
                  <ul>
                      <li>Jalan Sempadan, 34200, Kerian, Perak</li>
                      <li>Telephone: 05-7163333</li>
                      <li>Faxs: 05-7169675</li>
                      <a href="https://www.google.com/maps/place/Parit+Buntar+Hospital/@5.1303137,100.4827538,17z/data=!3m1!4b1!4m6!3m5!1s0x304aae4a7acf7f93:0xdf23cb8ac176e599!8m2!3d5.1303137!4d100.4827538!16s%2Fg%2F122xwdvq"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Raja Permaisuri Bainun</b></li>
                  <ul>
                      <li>Jalan Hospital, 30400, Kinta, Perak</li>
                      <li>Telephone: 05-2533333</li>
                      <li>Faxs: 05-2531541</li>
                      <a href="https://www.google.com/maps/place/Raja+Permaisuri+Bainun+Hospital,+Ipoh/@4.6039244,101.0879769,17z/data=!3m1!4b1!4m5!3m4!1s0x31caec8b8f49dcb3:0xcad988b70a4b8340!8m2!3d4.6039191!4d101.0901656?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Selama</b></li>
                  <ul>
                      <li>Jalan Taiping, 34100, Larut dan Matang, Perak</li>
                      <li>Telephone: 05-8394233 / 05-8394194 / 05-8394196</li>
                      <li>Faxs: 05-8394204</li>
                      <a href="https://www.google.com/maps/place/Selama+Hospital/@5.213129,100.6866865,17z/data=!3m1!4b1!4m5!3m4!1s0x31b54c0c9f2a1723:0x648f1524ec5b0840!8m2!3d5.2131237!4d100.6888752?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Seri Manjung</b></li>
                  <ul>
                      <li>32040 Seri Manjung, Perak</li>
                      <li>Telephone: 05-6896600</li>
                      <li>Faxs: 05-6884013</li>
                      <a href="https://www.google.com/maps/place/Seri+Manjung+Hospital/@4.1855579,100.6596364,17z/data=!3m1!4b1!4m5!3m4!1s0x31cb2d0a2b5df3fb:0x8f5a3a28eb7756c9!8m2!3d4.1855526!4d100.6618251?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
                  
                  <li><b>Hospital Slim River</b></li>
                  <ul>
                      <li>35800 Slim River, Perak</li>
                      <li>Telephone: 05-4508000 . 05-4526697 / 05-4520595</li>
                      <li>Faxs: 05-4508001 / 05-4508002</li>
                      <a href="https://www.google.com/maps/place/Slim+River+Hospital/@3.8374985,101.404769,17z/data=!3m1!4b1!4m6!3m5!1s0x31cb9ccf2325f211:0xeb92f7e578f00f07!8m2!3d3.8374985!4d101.404769!16s%2Fg%2F122pl7mh"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Sungai Siput</b></li>
                  <ul>
                      <li>Jalan Felda Lasah, 31100, Kuala Kangsar, Perak</li>
                      <li>Telephone: 05-5983333</li>
                      <li>Faxs: 05-5971834</li>
                      <a href="https://www.google.com/maps/place/Sungai+Siput+Hospital/@4.827946,101.0548649,17z/data=!3m1!4b1!4m5!3m4!1s0x31ca999232a9ae1d:0xb3abd3ca78f9b5fc!8m2!3d4.8279407!4d101.0570536?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Taiping</b></li>
                  <ul>
                      <li>Jalan Taming Sari, 34000, Larut dan Matang, Perak</li>
                      <li>Telephone: 05-8083333</li>
                      <li>Faxs: 05-8073894</li>
                      <a href="https://www.google.com/maps/place/Taiping+Hospital/@4.8510779,100.7346735,17z/data=!3m1!4b1!4m5!3m4!1s0x31caaef5c5a50ceb:0x393e1cd9800d4d43!8m2!3d4.8510726!4d100.7368622?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>

                  <li><b>Hospital Tapah</b></li>
                  <ul>
                      <li>Jalan Temoh, 35000 Batang Padang, Perak</li>
                      <li>Telephone: 05-4011333</li>
                      <li>Faxs: 05-4012863</li>
                      <a href="https://www.google.com/maps/place/Tapah+Hospital/@4.2018591,101.257423,17z/data=!3m1!4b1!4m5!3m4!1s0x31cb0684e7141ef7:0x2b3625940ae7fbcc!8m2!3d4.2018538!4d101.2596117?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Teluk Intan</b></li>
                  <ul>
                      <li>Jalan Changkat Jong, 36000, Hilir Perak, Perak</li>
                      <li>Telephone: 05-6213333</li>
                      <li>Faxs: 05-6212415</li>
                      <a href="https://www.google.com/maps/place/Teluk+Intan+Hospital/@4.0046102,101.0381346,17z/data=!3m1!4b1!4m5!3m4!1s0x31cb14cf9c379e39:0xbfb1d322b07c253c!8m2!3d4.0046049!4d101.0403233?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

             
        <button type="button" class="collapsible">Perlis</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Tuanku Fauziah</b></li>
                  <ul>
                      <li>3, Jalan Tun Abdul Razak, Pusat Bandar Kangar, 1000 Kangar, Perlis</li>
                      <li>Telephone: 04-9738000</li>
                      <li>Faxs: 04-9767237</li>
                      <a href="https://www.google.com/maps/place/Tuanku+Fauziah+Hospital/@6.4408864,100.1891789,17z/data=!3m1!4b1!4m5!3m4!1s0x304c99bb11060d23:0x7d8dc70e3c26d6a1!8m2!3d6.4408811!4d100.1913676?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Sabah</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Beaufort</b></li>
                  <ul>
                      <li>Peti Surat 40, 89807, Beaufort, Sabah</li>
                      <li>Telephone: 087-212333</li>
                      <li>Faxs: 087-211725</li>
                      <a href="https://www.google.com/maps/place/Beaufort+Hospital/@5.3513617,115.7410029,17z/data=!3m1!4b1!4m6!3m5!1s0x323ccdcbe8376d4b:0xf9b1abe25d422816!8m2!3d5.3513617!4d115.7410029!16s%2Fg%2F121912ft"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Beluran</b></li>
                  <ul>
                      <li>Karung Berkunci No. 02, Pekan Beluran, 90109, Beluran, Sabah</li>
                      <li>Telephone: 089-511233/333</li>
                      <li>Faxs: 089-511242</li>
                      <a href="https://www.google.com/maps/place/Beluran+Hospital/@5.8935,117.5532422,17z/data=!3m1!4b1!4m5!3m4!1s0x32394c9247ee1669:0x3c98151ee1811c48!8m2!3d5.8934947!4d117.5554309?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
     
                  <li><b>Hospital Duchess of Kent</b></li>
                  <ul>
                      <li>KM 3.2, Jalan Utara, 90000, Sandakan, Sabah</li>
                      <li>Telephone: 089-212111 / 089-213975</li>
                      <li>Faxs: 089-213607</li>
                      <a href="https://www.google.com/maps/place/Duchess+of+Kent+Hospital,+Sandakan/@5.858959,118.1007672,17z/data=!3m1!4b1!4m5!3m4!1s0x3238db3102cbb7f3:0x473fba15fffc4b40!8m2!3d5.8589537!4d118.1029559?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
           
                  <li><b>Hospital Keningau</b></li>
                  <ul>
                      <li>Peti Surat 11, 89007, Keningau, Sabah</li>
                      <li>Telephone: 087-313000</li>
                      <li>Faxs: 087-331595</li>
                      <a href="https://www.google.com/maps/place/Keningau+Hospital/@5.370133,116.1797641,17z/data=!3m1!4b1!4m5!3m4!1s0x323cf9890f7e953d:0x90df408dd25e19ff!8m2!3d5.3701277!4d116.1819528?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
      
                  <li><b>Hospital Kinabatangan</b></li>
                  <ul>
                      <li>W.D.T 200, 90020, Kinabatangan, Sabah</li>
                      <li>Telephone: 089-561858 / 089-561857</li>
                      <li>Faxs: 089-564854</li>
                      <a href="https://www.google.com/maps/place/Kinabatangan+Hospital/@5.5849683,117.8482292,17z/data=!3m1!4b1!4m5!3m4!1s0x323ed6a34434a79d:0x95f29de72f5dd939!8m2!3d5.584963!4d117.8504179?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
           
                  <li><b>Hospital Kota Belud</b></li>
                  <ul>
                      <li>Peti Surat 159, 89150, Kota Belud, Sabah</li>
                      <li>Telephone: 088-976333 / 088-976334</li>
                      <li>Faxs: 088-977492</li>
                      <a href="https://www.google.com/maps/place/Kota+Belud+Hospital/@6.3449498,116.4247906,17z/data=!3m1!4b1!4m5!3m4!1s0x323a55373c2544b9:0x9a10995342e7d784!8m2!3d6.3449445!4d116.4269793?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Kota Marudu</b></li>
                  <ul>
                      <li>Peti Surat 255, 89108, Kota Marudu, Sabah</li>
                      <li>Telephone: 088-663286</li>
                      <li>Faxs: 088-661967</li>
                      <a href="https://www.google.com/maps/place/Kota+Marudu+Hospital/@6.4573744,116.773832,17z/data=!3m1!4b1!4m5!3m4!1s0x323a4890ce268d83:0xc422b36ecc3c2681!8m2!3d6.4573691!4d116.7760207?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Kuala Penyu</b></li>
                  <ul>
                      <li>W.D.T. 35, 89740, Kuala Penyu, Sabah</li>
                      <li>Telephone: 087-853100</li>
                      <li>Faxs: 087-884212</li>
                      <a href="https://www.google.com/maps/place/Kuala+Penyu+Hospital/@5.5602841,115.5833686,17z/data=!3m1!4b1!4m5!3m4!1s0x322349eb9c7b9c83:0x7d6b72dde80cd2cd!8m2!3d5.5602788!4d115.5855573?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Kudat</b></li>
                  <ul>
                      <li>Peti Surat 22, 89057, Kudat, Sabah</li>
                      <li>Telephone: 088-613333</li>
                      <li>Faxs: -</li>
                      <a href="https://www.google.com/maps/place/Kudat+Hospital/@6.906668,116.835754,17z/data=!3m1!4b1!4m5!3m4!1s0x323a0b0675e526d3:0x50ec0b00a24c55c4!8m2!3d6.9066627!4d116.8379427?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Kunak</b></li>
                  <ul>
                      <li>W.D.T. 150, 91209, Kunak, Sabah</li>
                      <li>Telephone: 089-894100 / 089-894299 / 089-853326</li>
                      <li>Faxs: 089-853285</li>
                      <a href="https://www.google.com/maps/place/Kunak+Hospital/@4.6771228,118.2301104,17z/data=!3m1!4b1!4m5!3m4!1s0x323fc3de682569a1:0x3ab4f57f91b0301f!8m2!3d4.6771175!4d118.2322991?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Lahad Datu</b></li>
                  <ul>
                      <li>Peti Surat 60065, 91110, Lahad Datu, Sabah</li>
                      <li>Telephone: 089-895111</li>
                      <li>Faxs: 089-884670</li>
                      <a href="https://www.google.com/maps/place/Hospital+Lahad+Datu/@5.026694,118.3114849,17z/data=!3m1!4b1!4m5!3m4!1s0x323f9f93238f8b47:0x55cb332d713102c6!8m2!3d5.0266887!4d118.3136736?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Mesra Bukit Padang</b></li>
                  <ul>
                      <li>Peti Surat 11342, Bukit Padang, 88815, Kota Kinabalu, Sabah</li>
                      <li>Telephone: 088-240985 / 088-240986/ 088-240984</li>
                      <li>Faxs: 088-244703</li>
                      <a href="https://www.google.com/maps/place/Bukit+Padang+Psychiatric+Hospital/@5.9501784,116.1051903,17z/data=!3m1!4b1!4m6!3m5!1s0x323b691219a1578b:0x26cec4c558372ea!8m2!3d5.9501784!4d116.1051903!16s%2Fg%2F121nxd_d"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Papar</b></li>
                  <ul>
                      <li>Peti Surat No. 6, 89607, Papar, Sabah</li>
                      <li>Telephone: 088-913333</li>
                      <li>Faxs: 088-913587</li>
                      <a href="https://www.google.com/maps/place/Papar+Hospital/@5.7268599,115.9215827,17z/data=!3m1!4b1!4m5!3m4!1s0x323cbcb3d96b13c9:0xe7435ebae6117c6e!8m2!3d5.7268546!4d115.9237714?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Pitas</b></li>
                  <ul>
                      <li>Peti Surat 88, 89100, Pitas, Sabah</li>
                      <li>Telephone: 088-676100</li>
                      <li>Faxs: 088-611203</li>
                      <a href="https://www.google.com/maps/place/Pitas+Hospital/@6.711935,117.0274565,17z/data=!3m1!4b1!4m5!3m4!1s0x323a723f3d98c60b:0x9e634dec9f66b0c!8m2!3d6.7119297!4d117.0296452?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Queen Elizabeth</b></li>
                  <ul>
                      <li>Karung Berkunci No. 2029, 88586, Kota Kinabalu, Sabah</li>
                      <li>Telephone: 088-517555</li>
                      <li>Faxs: 088-318605</li>
                      <a href="https://www.google.com/maps/place/Queen+Elizabeth+Hospital,+Kota+Kinabalu/@5.9568392,116.0704212,17z/data=!3m1!4b1!4m5!3m4!1s0x323b69b162bae54f:0xd2ecb2b7d5e83f14!8m2!3d5.9568339!4d116.0726099?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Queen Elizabeth II</b></li>
                  <ul>
                      <li>Lorong Bersatu, Off Jalan Damai Luyang, 88300, Kota Kinabalu, Sabah</li>
                      <li>Telephone: 088-324600</li>
                      <li>Faxs: 088-272454/2375377</li>
                      <a href="https://www.google.com/maps/place/Queen+Elizabeth+Hospital+II/@5.9664925,116.0916041,17z/data=!3m1!4b1!4m5!3m4!1s0x323b690bede609a7:0xefc5a7bbfbb0642d!8m2!3d5.9664872!4d116.0937928?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Ranau</b></li>
                  <ul>
                      <li>Karung Berkunci 7, Jalan Hospital, 89300, Ranau, Sabah</li>
                      <li>Telephone: 088-875266</li>
                      <li>Faxs: 088-875223</li>
                      <a href="https://www.google.com/maps/place/Hospital+Ranau/@5.9533995,116.6687523,17z/data=!3m1!4b1!4m5!3m4!1s0x323b68efc5f2dd01:0xac358d655e8d1d1a!8m2!3d5.9533942!4d116.670941?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Semporna</b></li>
                  <ul>
                      <li>Peti Surat 80, 91307 Semporna, Sabah</li>
                      <li>Telephone: 089-781522 / 089-782288</li>
                      <li>Faxs: 089-781659</li>
                      <a href="https://www.google.com/maps/place/Semporna+Hospital/@4.4821431,118.6028856,17z/data=!3m1!4b1!4m5!3m4!1s0x323ffef56f15af2d:0x94c8b3af7ebc2d30!8m2!3d4.4821378!4d118.6050743?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Sipitang</b></li>
                  <ul>
                      <li>Peti Surat 250, 89857, Sipitang, Sabah</li>
                      <li>Telephone: 087-822296 / 087-822297 / 087-822295 / 087-822298/300</li>
                      <li>Faxs: 087-822304</li>
                      <a href="https://www.google.com/maps/place/Sipitang+Hospital/@5.0964931,115.5607703,17z/data=!3m1!4b1!4m5!3m4!1s0x3222d2081733edc3:0x3729c01645612d2!8m2!3d5.0964878!4d115.562959?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Tambunan</b></li>
                  <ul>
                      <li>Peti Surat 10, 89657, Tambunan, Sabah</li>
                      <li>Telephone: 087-774333 / 087-774286</li>
                      <li>Faxs: 087-774102</li>
                      <a href="https://www.google.com/maps/place/Tambunan+Hospital/@5.6825392,116.3710304,17z/data=!3m1!4b1!4m6!3m5!1s0x323c80e5c55ee97b:0x1007c36b2c75f812!8m2!3d5.6825392!4d116.3710304!16s%2Fg%2F122dsk_n"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Tawau</b></li>
                  <ul>
                      <li>Peti Surat 67, 91000, Tawau, Sabah</li>
                      <li>Telephone: 089-773533 / 089-771206 / 089-773161</li>
                      <li>Faxs: 089-778626</li>
                      <a href="https://www.google.com/maps/place/Tawau+Hospital/@4.2498221,117.8785542,17z/data=!3m1!4b1!4m5!3m4!1s0x32159e7de895776d:0x913a242feb250a92!8m2!3d4.2498168!4d117.8807429?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Tenom</b></li>
                  <ul>
                      <li>Peti surat 97, 89907, Tenom, Sabah</li>
                      <li>Telephone: 087-735577 / 087-735540 / 087-735589</li>
                      <li>Faxs: 087-735550</li>
                      <a href="https://www.google.com/maps/place/Tenom+Hospital/@5.12318,115.9390973,17z/data=!3m1!4b1!4m5!3m4!1s0x323d3b3f7e399dc9:0x292aa8a8fc5c0e7d!8m2!3d5.1231747!4d115.941286?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Tuaran</b></li>
                  <ul>
                      <li>Peti Surat 996, 89207, Tuaran, Sabah</li>
                      <li>Telephone: 088-788317</li>
                      <li>Faxs: 088-788167</li>
                      <a href="https://www.google.com/maps/place/Tuaran+Hospital/@6.1439293,116.2168383,17z/data=!3m1!4b1!4m5!3m4!1s0x323b11fa73cd9459:0xa5d64fd68a63d557!8m2!3d6.143924!4d116.219027?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Wanita dan Kanak-Kanak</b></li>
                  <ul>
                      <li>Karung Berkunci 187, 88996, Kota Kinabalu, Sabah</li>
                      <li>Telephone: 088-522600</li>
                      <li>Faxs: 088-438512</li>
                      <a href="https://www.google.com/maps/place/Hospital+Wanita+Dan+Kanak-Kanak+Sabah/@6.0138092,116.1173112,17z/data=!3m1!4b1!4m5!3m4!1s0x323b6b913f86d0c9:0x1bb979aede335f6b!8m2!3d6.0138039!4d116.1194999?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        
        <button type="button" class="collapsible">Sarawak</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Baut</b></li>
                  <ul>
                      <li>Batu 1 ½,  Jalan Bau-Lundu, 94000, Bau, Sarawak</li>
                      <li>Telephone: 082-763711</li>
                      <li>Faxs: 082-763716</li>
                      <a href="https://www.google.com/maps/place/Bau+Hospital/@1.4295059,110.1404546,17z/data=!3m1!4b1!4m5!3m4!1s0x31fb146b3f2895cd:0xc6f1aecf31ef2abc!8m2!3d1.4295005!4d110.1426433?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Betong</b></li>
                  <ul>
                      <li>Jalan Betong, 95707, Betong, Sarawak</li>
                      <li>Telephone: 083-472821 / 082-472822</li>
                      <li>Faxs: 083-472664</li>
                      <a href="https://www.google.com/maps/place/Betong+Hospital/@1.3739875,111.5715781,17z/data=!3m1!4b1!4m5!3m4!1s0x31f93e29603b1b37:0xdaada562fb602b98!8m2!3d1.3739821!4d111.5737668?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Bintulu</b></li>
                  <ul>
                      <li>Jalan Nyabau, 97000, Bintulu, Sarawak</li>
                      <li>Telephone: 086-255899</li>
                      <li>Faxs: 086-255866</li>
                      <a href="https://www.google.com/maps/place/Bintulu+Hospital/@3.2297011,113.0988414,17z/data=!3m1!4b1!4m5!3m4!1s0x321dc408a03a83f5:0x4a3703ee87eb8d93!8m2!3d3.2296957!4d113.1010301?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Dalat</b></li>
                  <ul>
                      <li>Jalan Oya-Dalat, 96300, Dalat, Sarawak</li>
                      <li>Telephone: 084-863213</li>
                      <li>Faxs: 048-863058</li>
                      <a href="https://www.google.com/maps/place/Dalat+Hospital/@2.7452223,111.9438527,17z/data=!3m1!4b1!4m5!3m4!1s0x31f7a8ca269cb38f:0x4d6148c244bc101d!8m2!3d2.7452169!4d111.9460414?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Daro</b></li>
                  <ul>
                      <li>Jalan Itol, 96200, Daro, Sarawak</li>
                      <li>Telephone: 084-823620 / 084-823621</li>
                      <li>Faxs: 084-823624</li>
                      <a href="https://www.google.com/maps/place/Daro+Hospital/@2.5218131,111.4109782,17z/data=!3m1!4b1!4m5!3m4!1s0x31f7418151ca9b7b:0x535bdea8fdd40bb6!8m2!3d2.5218077!4d111.4131669?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Kanowit</b></li>
                  <ul>
                      <li>Jalan Kanowit/ Durin, 96700, Kanowit, Sarawak</li>
                      <li>Telephone: 084-752333</li>
                      <li>Faxs: 084-752682</li>
                      <a href="https://www.google.com/maps/place/Kanowit+Hospital/@2.1027581,112.1523139,17z/data=!3m1!4b1!4m6!3m5!1s0x31f83c84366eab87:0xf6a70dd48da1dc07!8m2!3d2.1027581!4d112.1523139!16s%2Fg%2F121nxd_c"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Kapit</b></li>
                  <ul>
                      <li>Jalan Memora, 96800, Kapit, Sarawak</li>
                      <li>Telephone: 084-796333 / 084-796418 / 084-796144</li>
                      <li>Faxs: 084-796136</li>
                      <a href="https://www.google.com/maps/place/Kapit+Hospital/@2.0138706,112.940467,17z/data=!3m1!4b1!4m5!3m4!1s0x3202bef8336b41d9:0xc4bedd69f04a5c22!8m2!3d2.0138652!4d112.9426557?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
           
                  <li><b>Hospital Lawas</b></li>
                  <ul>
                      <li>Jalan Hospital, 98850, Lawas, Sarawak</li>
                      <li>Telephone: 085-283781</li>
                      <li>Faxs: 085-285993</li>
                      <a href="https://www.google.com/maps/place/Lawas+Hospital/@4.8544,115.4024021,17z/data=!3m1!4b1!4m5!3m4!1s0x3222b8eafa96c8a3:0x3980e08ac2dfee0e!8m2!3d4.8543947!4d115.4045908?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Limbang</b></li>
                  <ul>
                      <li>Jalan Pandaruan, 98700, Limbang, Sarawak</li>
                      <li>Telephone: 085-211457/ 085-211676 / 085-211200</li>
                      <li>Faxs: 085-216462</li>
                      <a href="https://www.google.com/maps/place/Limbang+Hospital/@4.7642525,115.0190368,17z/data=!3m1!4b1!4m6!3m5!1s0x31cc7aa9fe671039:0xf87dcca47b53d30e!8m2!3d4.7642525!4d115.0190368!16s%2Fg%2F1230ph27"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Lundu</b></li>
                  <ul>
                      <li>Jalan Sekambal, 94500, Lundu, Sarawak</li>
                      <li>Telephone: 082-735311</li>
                      <li>Faxs: 082-735055</li>
                      <a href="https://www.google.com/maps/place/Lundu+Hospital/@1.6755934,109.8528202,17z/data=!3m1!4b1!4m6!3m5!1s0x31fb26cd04cf8e17:0x178bffc455a01e5d!8m2!3d1.6755934!4d109.8528202!16s%2Fg%2F1238s89m"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Marudi</b></li>
                  <ul>
                      <li>Jalan Bungor, 98050, Marudi, Sarawak</li>
                      <li>Telephone: 085-755511</li>
                      <li>Faxs: 085-755217</li>
                      <a href="https://www.google.com/maps/place/Marudi+Hospital/@4.1784134,114.3231658,17z/data=!3m1!4b1!4m5!3m4!1s0x3218cf9044d2c441:0xf902a8f85746b406!8m2!3d4.1784081!4d114.3253545?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Miri</b></li>
                  <ul>
                      <li>Jalan Cahaya, 98000, Miri, Sarawak</li>
                      <li>Telephone: 085-420033</li>
                      <li>Faxs: 085-416514</li>
                      <a href="https://www.google.com/maps/place/Hospital+Miri/@4.374359,113.9976237,17z/data=!3m1!4b1!4m5!3m4!1s0x321f48e1ba999395:0xa7857de3ea207758!8m2!3d4.3743537!4d113.9998124?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Mukah</b></li>
                  <ul>
                      <li>Jalan Haji Mohamed Pauzi, 96400, Mukah, Sarawak</li>
                      <li>Telephone: 084-871333</li>
                      <li>Faxs: 084-872212</li>
                      <a href="https://www.google.com/maps/place/Mukah+Hospital/@2.9023586,112.0753235,17z/data=!3m1!4b1!4m5!3m4!1s0x31f64d0ebc608fd1:0xd314a8a0acc903cd!8m2!3d2.9023532!4d112.0775122?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Raja Charles Brooke Memorial</b></li>
                  <ul>
                      <li>Bt 13, Jalan Puncak Borneo, Kota Padawan, 93250, Kuching, Sarawak</li>
                      <li>Telephone: 082-611123</li>
                      <li>Faxs: 082-616582</li>
                      <a href="https://www.google.com/maps/place/Rajah+Charles+Brooke+Memorial+Hospital/@1.3890058,110.3202691,17z/data=!3m1!4b1!4m5!3m4!1s0x31fb75669c9b82d5:0x23bc41bd1c5ee53f!8m2!3d1.3890004!4d110.3224578?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Saratok</b></li>
                  <ul>
                      <li>KM 1, Jalan Saratok, 95400, Saratok, Sarawak</li>
                      <li>Telephone: 083-436311</li>
                      <li>Faxs: 083-436917</li>
                      <a href="https://www.google.com/maps/place/Saratok+Hospital/@1.7471482,111.3375306,17z/data=!3m1!4b1!4m5!3m4!1s0x31f99c5160faaf55:0x44f04da69e722039!8m2!3d1.7471428!4d111.3397193?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Sarikei</b></li>
                  <ul>
                      <li>Jalan Rentap, 96100, Sarikei, Sarawak</li>
                      <li>Telephone: 084-653333</li>
                      <li>Faxs: 084-653409</li>
                      <a href="https://www.google.com/maps/place/Sarikei+Hospital/@2.1320012,111.489813,17z/data=!3m1!4b1!4m5!3m4!1s0x31f9c2ba03f7a4f3:0x4bc0e7bc38b0db66!8m2!3d2.1319958!4d111.4920017?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Sentosa</b></li>
                  <ul>
                      <li>Kota Sentosa, Batu 7, Jalan Penrissen,93250, Kuching, Sarawak</li>
                      <li>Telephone: 082-612321/ 082-612989 / 082-612132 / 082-610252</li>
                      <li>Faxs: 082-6104953</li>
                      <a href="https://www.google.com/maps/place/Sentosa+Hospital/@1.4637324,110.3270761,17z/data=!3m1!4b1!4m5!3m4!1s0x31fb0a77b28f7bd3:0x937999d63bf5937a!8m2!3d1.463727!4d110.3292648?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Serian</b></li>
                  <ul>
                      <li>94700, Serian, Sarawak</li>
                      <li>Telephone: 082-874311</li>
                      <li>Faxs: 082-875182</li>
                      <a href="https://www.google.com/maps/place/Serian+Hospital/@1.1762712,110.5614211,17z/data=!3m1!4b1!4m5!3m4!1s0x31fb88fc7da893b9:0x61cb7e80c64bc292!8m2!3d1.1762658!4d110.5636098?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Sibu</b></li>
                  <ul>
                      <li>Batu 5 ½,  Jalan Ulu Oya, 96000, Sibu, Sarawak</li>
                      <li>Telephone: 084-343333</li>
                      <li>Faxs: 084-337354</li>
                      <a href="https://www.google.com/maps/place/Sibu+Hospital/@2.2964764,111.8897003,17z/data=!3m1!4b1!4m5!3m4!1s0x31f780915bc3d8d7:0x95c626ec12610d19!8m2!3d2.296471!4d111.891889?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Simunjan</b></li>
                  <ul>
                      <li>Jalan Gunung Ngeli, 94800, Simunjan, Sarawak</li>
                      <li>Telephone: 082-803982</li>
                      <li>Faxs: 082-803823</li>
                      <a href="https://www.google.com/maps/place/Simunjan+Hospital/@1.3700525,110.7840658,17z/data=!3m1!4b1!4m5!3m4!1s0x31fbebc05b5b0cd1:0x138905d02bc947fe!8m2!3d1.3700471!4d110.7862545?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Sri Aman</b></li>
                  <ul>
                      <li>Jalan Hospital, 95007, Sri Aman, Sarawak</li>
                      <li>Telephone: 083-322151</li>
                      <li>Faxs: 083-323063</li>
                      <a href="https://www.google.com/maps/place/Sri+Aman+Hospital/@1.2343855,111.4607466,17z/data=!3m1!4b1!4m5!3m4!1s0x31f949cd67fcf327:0x1fe040b38a4e98c8!8m2!3d1.2343801!4d111.4629353?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Umum Sarawak</b></li>
                  <ul>
                      <li>Jalan Tun Ahmad Zaidi Adruce, 93586, Kuching, Sarawak</li>
                      <li>Telephone: 082-276666</li>
                      <li>Faxs: 082-242751</li>
                      <a href="https://www.google.com/maps/place/Hospital+Umum+Sarawak/@1.5436494,110.3374463,17z/data=!3m1!4b1!4m5!3m4!1s0x31fba7859c696909:0x17af568b1d348182!8m2!3d1.543644!4d110.339635?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Selangor</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Ampang</b></li>
                  <ul>
                      <li>Jalan Mewah Utara, 68000, Hulu Langat, SelangorBatu 1 ½,  Jalan Bau-Lundu, 94000, Bau, Sarawak</li>
                      <li>Telephone: 03-42896000</li>
                      <li>Faxs: 03-42954666</li>
                      <a href="https://www.google.com/maps/place/Ampang+Hospital/@3.1282161,101.7618416,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc368d8851634f:0x4c4c8e4bfb2c1941!8m2!3d3.1282107!4d101.7640303?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
       >
                  <li><b>Hospital Banting</b></li>
                  <ul>
                      <li>Jalan Sultan Alam Shah, 42700, Kuala Langat, Selangor</li>
                      <li>Telephone: 03-31871333 / 0331871142 / 03-318792142</li>
                      <li>Faxs: 03- 31818834</li>
                      <a href="https://www.google.com/maps/place/Banting+Hospital/@2.8028671,101.4916392,17z/data=!3m1!4b1!4m5!3m4!1s0x31cda49c5f2e156b:0x1e2011d0a1e830c6!8m2!3d2.8028617!4d101.4938279?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
         
                  <li><b>Hospital Cyberjaya</b></li>
                  <ul>
                      <li>Persiaran Sepang, Cyber 11, 63000, Sepang, Selangor</li>
                      <li>Telephone: -</li>
                      <li>Faxs: -</li>
                      <a href="https://www.google.com/maps/place/Cyberjaya+Hospital+-+Acc+not+handle+by+any+hospital+staff+!/@2.9192499,101.6302989,17z/data=!3m1!4b1!4m6!3m5!1s0x31cdb6d95269fc79:0x88b4322d4a1e48c4!8m2!3d2.9192499!4d101.6302989!16s%2Fg%2F11gdhf8l98"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
           
                  <li><b>Hospital Kajang</b></li>
                  <ul>
                      <li>Jalan Semenyih, 43000, Hulu Langat, Selangor</li>
                      <li>Telephone: 03-87343333</li>
                      <li>Faxs: 03- 87367527</li>
                      <a href="https://www.google.com/maps/place/Kajang+Hospital/@2.9928804,101.7906571,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdcb81fb409889:0xa9a6012492ad7d36!8m2!3d2.992875!4d101.7928458?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
        
                  <li><b>Hospital Kuala Kubu Bharu</b></li>
                  <ul>
                    <li>Jalan Hospital, 44000, Hulu Selangor, Selangor</li>
                      <li>Telephone: 03-60641333 / 03-60641334 / 03-60644032</li>
                      <li>Faxs: 03- 60643039</li>
                      <a href="https://www.google.com/maps/place/Kuala+Kubu+Bharu+Hospital/@3.56424,101.650885,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc73a3c4f6050b:0xaeb5ab935df7ed05!8m2!3d3.5642346!4d101.6530737?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Orang Asli Gombak</b></li>
                  <ul>
                      <li>KM 24 Jalan Pahang Lama, 53100, Gombak, Selangor</li>
                      <li>Telephone: 03-61892122 / 03-61892125 / 03-61892669</li>
                      <li>Faxs: 03-61890695</li>
                      <a href="https://www.google.com/maps/place/Gombak+Aborigines+Hospital/@3.2919771,101.7287826,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc3f14e79aa183:0xd2d8284a757bcb56!8m2!3d3.2919717!4d101.7309713?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Selayang</b></li>
                  <ul>
                      <li>Lebuhraya Selayang-Kepong, 68100, Gombak, Selangor</li>
                      <li>Telephone: 03-61263333 / 03-61201054</li>
                      <li>Faxs: 03-61377097</li>
                      <a href="https://www.google.com/maps/place/Selayang+Hospital/@3.2423061,101.6462759,17z/data=!3m1!4b1!4m6!3m5!1s0x31cc46ee574f5a0d:0x7d5ea2fb9cd0babc!8m2!3d3.2423061!4d101.6462759!16s%2Fg%2F121r6wxc"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
           
                  <li><b>Hospital Serdang</b></li>
                  <ul>
                      <li>Jalan Puchong, 43000, Sepang, Selangor</li>
                      <li>Telephone:  03-89475555 / 03-89475430</li>
                      <li>Faxs: 03-89475050</li>
                      <a href="https://www.google.com/maps/place/Serdang+Hospital/@2.9764666,101.7178426,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdca6d09d2b279:0x7f5a4e71d5eda6cf!8m2!3d2.9764612!4d101.7200313?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Shah Alam</b></li>
                  <ul>
                      <li>Persiaran Kayangan, Seksyen 7, 40000, Petaling, Selangor</li>
                      <li>Telephone: 03-5526 3000 / 03-5526 3400</li>
                      <li>Faxs: 03-5526 3202</li>
                      <a href="https://www.google.com/maps/place/Shah+Alam+Hospital/@3.0714543,101.4886009,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc539e497ea457:0x74efa647eb216966!8m2!3d3.0714489!4d101.4907896?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              
                  <li><b>Hospital Sungai Buloh</b></li>
                  <ul>
                      <li>Jalan Hospital, 47000, Gombak, Selangor</li>
                      <li>Telephone: 03-61454333</li>
                      <li>Faxs: 03-61454222</li>
                      <a href="https://www.google.com/maps/place/Sungai+Buloh+Hospital/@3.219573,101.5830811,17z/data=!3m1!4b1!4m6!3m5!1s0x31cc45b07898fcd7:0x6a7debe5f1a4a9ed!8m2!3d3.219573!4d101.5830811!16s%2Fg%2F11byzfmrnc"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Tanjung Karang</b></li>
                  <ul>
                      <li>Tanjung Karang, 45500 Kuala Selangor, Selangor</li>
                      <li>Telephone: 03-32698333 / 03-342698312 / 03-32694854</li>
                      <li>Faxs:  03-32695907</li>
                      <a href="https://www.google.com/maps/place/Tanjung+Karang+Hospital/@3.4252624,101.1767313,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc8dafdcecebd1:0x942050cc6498403a!8m2!3d3.425257!4d101.17892?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Tengku Ampuan Jemaah</b></li>
                  <ul>
                      <li>Sabak Bernam, 45200 Sabak Bernam, Selangor</li>
                      <li>Telephone: 03-32163333 / 03-32162814 / 03-32162815</li>
                      <li>Faxs: 03-32164333</li>
                      <a href="https://www.google.com/maps/place/Tengku+Ampuan+Jemaah+Hospital,+Sabak+Bernam/@3.759113,100.9871168,17z/data=!3m1!4b1!4m5!3m4!1s0x31cb6751a28dcf25:0xf2af73be441208da!8m2!3d3.7591076!4d100.9893055?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Tengku Ampuan Rahimah</b></li>
                  <ul>
                      <li>41200, Klang, Selangor</li>
                      <li>Telephone: 03-33757000</li>
                      <li>Faxs: 03-233729089</li>
                      <a href="https://www.google.com/maps/place/Tengku+Ampuan+Rahimah+Hospital,+Klang/@3.0201612,101.4377107,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdac634329905f:0xf759281c7157e609!8m2!3d3.0201558!4d101.4398994?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Terengganu</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Besut</b></li>
                  <ul>
                      <li>Jalan Pasir Akar, Jerteh, 22000, Besut, Terengganu</li>
                      <li>Telephone: 09-6971130 / 09-6971200</li>
                      <li>Faxs: 09-6972762</li>
                      <a href="https://www.google.com/maps/place/Besut+Hospital/@5.7296556,102.4903812,17z/data=!3m1!4b1!4m5!3m4!1s0x31b6f25a7b28fc4b:0xd3f4730a9d9f8743!8m2!3d5.7296503!4d102.4925699?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            >
                  <li><b>Hospital Dungun</b></li>
                  <ul>
                      <li>Hospital Dungun, 23000, Dungun, Terengganu</li>
                      <li>Telephone: 09-8483333</li>
                      <li>Faxs: 09-8484160</li>
                      <a href="https://www.google.com/maps/place/Dungun+Hospital/@4.7518816,103.412643,17z/data=!3m1!4b1!4m5!3m4!1s0x31c80f7ae94e8e77:0x7f8b5b173d2ecff3!8m2!3d4.7518763!4d103.4148317?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Hulu Terengganu</b></li>
                  <ul>
                      <li>Btu 23, Jalan Kuala Berang, 21700, Hulu Terengganu, Terengganu</li>
                      <li>Telephone: 09-6813333 / 09-6813120</li>
                      <li>Faxs: 09-6813099</li>
                      <a href="https://www.google.com/maps/place/Hulu+Terengganu+Hospital/@5.0732216,103.042586,17z/data=!3m1!4b1!4m5!3m4!1s0x31b7db22930a8069:0x72048e434beb147c!8m2!3d5.0732163!4d103.0447747?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
          
                  <li><b>Hospital Kemaman</b></li>
                  <ul>
                      <li>Jalan Da' Omar, Cukai, 24000, Kemaman, Terengganu</li>
                      <li>Telephone: 09-8513333</li>
                      <li>Faxs: 09-8595512</li>
                      <a href="https://www.google.com/maps/place/Kemaman+Hospital/@4.2326183,103.4188687,17z/data=!3m1!4b1!4m5!3m4!1s0x31c886e4149e3d91:0x68e705585abd4367!8m2!3d4.232613!4d103.4210574?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
           
                  <li><b>Hospital Setiu</b></li>
                  <ul>
                    <li>Bandar Permaisuri, 22100, Setiu, Terengganu</li>
                      <li>Telephone: 09-6090333</li>
                      <li>Faxs: 09-6090377</li>
                      <a href="https://www.google.com/maps/place/Setiu+Hospital/@5.5141328,102.767328,17z/data=!3m1!4b1!4m5!3m4!1s0x31b6543020836785:0xebbbd09a541110f5!8m2!3d5.5141275!4d102.7695167?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Sultanah Nur Zahirah</b></li>
                  <ul>
                      <li>Jalan Sultan Mahmud, 20400, Kuala Terengganu, Terenggan4u</li>
                      <li>Telephone: 09-6212121</li>
                      <li>Faxs: 09-6221820/6221739</li>
                      <a href="https://www.google.com/maps/place/Sultanah+Nur+Zahirah+Hospital,+Kuala+Terengganu/@5.3239113,103.148485,17z/data=!3m1!4b1!4m5!3m4!1s0x31b7bfb426ef2e85:0x687526b9d5ee20ce!8m2!3d5.323906!4d103.1506737?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">Kuala Lumpur</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Kuala Lumpur</b></li>
                  <ul>
                      <li>Jalan Pahang, 50586, Wilayah Persekutuan Kuala Lumpur</li>
                      <li>Telephone: 03-26155555</li>
                      <li>Faxs: 03-26989845</li>
                      <a href="https://www.google.com/maps/place/Kuala+Lumpur+General+Hospital/@3.1715415,101.7003534,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc4818bac57b15:0x46fc8dd0d036613c!8m2!3d3.1715361!4d101.7025421?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
            
                  <li><b>Hospital Rehabilitasi Cheras</b></li>
                  <ul>
                      <li>Jalan Yaacob Latif, Bandar Tun Razak, 56000 Cheras, Wilayah Persekutuan Kuala Lumpur</li>
                      <li>Telephone: 03-91453400</li>
                      <li>Faxs: 03-91300560</li>
                      <a href="https://www.google.com/maps/place/Hospital+Rehabilitasi+Cheras/@3.1055227,101.726365,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc35e0d19cfeb1:0x21e28467f6f4f3ac!8m2!3d3.1055173!4d101.7285537?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
             
                  <li><b>Hospital Tunku Azizah (Wanita Dan Kanak-Kanak)</b></li>
                  <ul>
                      <li>Jalan Dr Latif, Titiwangsa, 50586 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</li>
                      <li>Telephone: 03-40232966</li>
                      <li>Faxs: 03-40218807</li>
                      <a href="https://www.google.com/maps/place/Hospital+Tunku+Azizah+(HTA)/@3.1699379,101.6863375,15z/data=!4m6!3m5!1s0x31cc4821ede2a0bd:0xec6dc51b035c58ec!8m2!3d3.1699379!4d101.702817!15sCi5ob3NwaXRhbCB0dW5rdSBheml6YWggKHdhbml0YSBkYW4ga2FuYWsta2FuYWspWi4iLGhvc3BpdGFsIHR1bmt1IGF6aXphaCB3YW5pdGEgZGFuIGthbmFrIGthbmFrkgETZ292ZXJubWVudF9ob3NwaXRhbJoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VOdGRFOHlka1JSRUFF?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <button type="button" class="collapsible">WP Labuan</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Labuan</b></li>
                  <ul>
                      <li>Peti Surat 81006 Labuan, WP Labuan</li>
                      <li>Telephone: 087-423922 / 423919</li>
                      <li>Faxs: 087-423928</li>
                      <a href="https://www.google.com/maps/place/Labuan+Hospital/@5.3111503,115.2278291,17z/data=!3m1!4b1!4m5!3m4!1s0x322319b1fc82250b:0xffc8a8b081350d0!8m2!3d5.311145!4d115.2300178?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>
        
        <button type="button" class="collapsible">WP Putrajaya</button>
        <div class="content">
          <p>
              <ul>
                  <li><b>Hospital Putrajaya</b></li>
                  <ul>
                      <li>Jalan P9, Presint 7, 62250 Wilayah Persekutuan Putrajaya</li>
                      <li>Telephone: 03-83124200</li>
                      <li>Faxs: 03-88880137</li>
                      <a href="https://www.google.com/maps/place/Putrajaya+Hospital/@2.9290583,101.6720069,17z/data=!3m1!4b1!4m5!3m4!1s0x31cdb644e849bab5:0x4535a9c1df4bb9a5!8m2!3d2.9290529!4d101.6741956?shorturl=1"><img src="images/googlemap.png" width="70" height="70"></a>
                  </ul>
              </ul>
          </p>
        </div>

        <script>
           var coll = document.getElementsByClassName("collapsible");
           var i;

           for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
               this.classList.toggle("active");
               var content = this.nextElementSibling;
               if (content.style.display === "block") {
                 content.style.display = "none";
                } else {
                 content.style.display = "block";
                }
              });
           }
    </script> 
</div>

<h2 class="heading" style="color: black">Medical Appointment Applications</h2> 
        </br>
    <div class="container">
    <div class="box-container">
        <div class="box">
            <img src="images/bookdoc.png" alt="">
            <h3>BookDoc</h3>
            <p>Connect & Unite</p>
            <a href="https://www.bookdoc.com/" class="btn">Read More</a>
        </div>
    
        <div class="box">
            <img src="images/doc2us.png" alt="">
            <h3>Doc2Us</h3>
            <p>Your Trusted Online Doctor</p>
            <a href="https://www.doc2us.com/" class="btn">Read More</a>
        </div>

        <div class="box">
            <img src="images/doctoranywhere.png" alt="">
            <h3>Doctor Anywhere</h3>
            <p>Anytime Anywhere</p>
            <a href="https://www.doctoranywhere.my/" class="btn">Read More</a>
        </div>

        <div class="box">
            <img src="images/doctoroncall.png" alt="">
            <h3>DoctorOnCall</h3>
            <p>Your online doctor and pharmacy</p>
            <a href="https://www.doctoroncall.com.my/" class="btn">Read More</a>
        </div>

        <div class="box">
            <img src="images/speedoc.png" alt="">
            <h3>Speedoc</h3>
            <p>Your healthcare comes to you</p>
            <a href="https://my.speedoc.com/" class="btn">Read More</a>
        </div>

        <div class="box">
            <img src="images/teleme.png" alt="">
            <h3>Teleme</h3>
            <p>Your #1 healthcare app</p>
            <a href="https://teleme.co/" class="btn">Read More</a>
        </div>

    </div>

</div>
</body>
</html>
