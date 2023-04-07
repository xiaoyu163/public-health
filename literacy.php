<!DOCTYPE html>
<style>
    a {
        text-decoration:none;
    }

    .container {
        display: flex;
        /* establish flex container */
        flex-direction: row;
        /* default value; can be omitted */
        flex-wrap: nowrap;
        /* default value; can be omitted */
        justify-content: space-between;
        /* switched from default (flex-start, see below) */
        margin-right: 15px;
        margin-bottom: 20px;
    }

    .container .content-container {    
        
        background-color: #b9dbcf;
        border-radius: 10px;
        width: 40%;
        margin-left: 15px;
    }

    .container .content-container a .content-title h3 {
        color: black;
        text-align: center;
    }

    .container .content-container a .content-desc {
        color: grey;    
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 1px;
        text-align: justify;
    }
    
    img {
        width: 200px;
        height: 130px;
        border-radius: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        width: 50%;
    }
</style>

<body>

    <?php
    include 'nav.php';
    ?>

    <h2>General Health Problems</h2>

    <div class="container">

        <div class="content-container">
            <a href="https://medlineplus.gov/heartdiseases.html">
                <div class="content-title">
                    <img src="images/heart.png" alt="Heart.">
                    <h3>Heart Disease</h3>
                </div>
                <p class="content-desc">
                    Heart disease is a general term that includes many types of heart problems.
                    It's also called cardiovascular disease, which means heart and blood vessel disease.
                </p>
            </a>            
        </div>
        <div class="content-container">
            <a href="https://medlineplus.gov/diabetes.html">
                <div class="content-title">
                    <img src="images/diabetes.png" alt="Blood sugar meter.">
                    <h3>Diabetes</h3>
                </div>
                <p class="content-desc">
                    Diabetes is a disease in which your blood glucose, or blood sugar, levels are too high.
                </p>
            </a>            
        </div>
        <div class="content-container">
            <a href="https://medlineplus.gov/highbloodpressure.html">
                <div class="content-title">
                    <img src="images/blood-pressure.png" alt="Blood pressure meter.">
                    <h3>Hypertension</h3>
                </div>
                <p class="content-desc">
                    Hypertension (high blood pressure) is when the pressure in your blood vessels is too high (140/90 mmHg or higher). It is common but can be serious if not treated.
                </p>
            </a>            
        </div>
        <div class="content-container">
            <a href="https://medlineplus.gov/highbloodpressure.html">
                <div class="content-title">
                    <img src="images/obesity.png" alt="Obese man.">
                    <h3>Obesity</h3>
                </div>
                <p class="content-desc">
                    Hypertension (high blood pressure) is when the pressure in your blood vessels is too high (140/90 mmHg or higher). It is common but can be serious if not treated.
                </p>
            </a>            
        </div>
        
        
    </div>

    <div class="container">
        <div class="content-container">
            <a href="https://medlineplus.gov/cancer.html">
                <div class="content-title">
                    <img src="images/cancer.png" alt="Cancer.">
                    <h3>Cancer</h3>
                </div>
                <p class="content-desc">
                    Cancer is not just one disease but many diseases. There are more than 100 different types of cancer.
                </p>
            </a>            
        </div>
        <div class="content-container">
            <a href="https://medlineplus.gov/flu.html">
                <div class="content-title">
                    <img src="images/influenza.png" alt="Flu.">
                    <h3>Influenza</h3>
                </div>
                <p class="content-desc">
                    Influenza is a contagious respiratory illness caused by influenza viruses that infect the nose, throat, and sometimes the lungs. It can cause mild to severe illness, and at times can lead to death.                 </p>
            </a>            
        </div>
        <div class="content-container">
            <a href="https://medlineplus.gov/hiv.html">
                <div class="content-title">
                    <img src="images/HIV.png" alt="HIV.">
                    <h3>HIV/AIDS</h3>
                </div>
                <p class="content-desc">
                    HIV harms your immune system by destroying a type of white blood cell that helps your body fight infection. This puts you at risk for other infections and diseases.
                    AIDS is the final stage of infection with HIV.
                </p>
            </a>            
        </div>
        <div class="content-container">
            <a href="https://medlineplus.gov/alzheimersdisease.html">
                <div class="content-title">
                    <img src="images/alzheimer.png" alt="Alzheimer.">
                    <h3>Alzheimer’s Disease</h3>
                </div>
                <p class="content-desc">
                    Alzheimer's disease (AD) is the most common form of dementia among older people. Dementia is a brain disorder that seriously affects a person's ability to carry out daily activities.
                </p>
            </a>            
        </div>
    </div>



</body>