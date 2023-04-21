<!DOCTYPE html>
<style>
    h2 {
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .card {
        width: 400px;
        height: 800px;
        margin-left: 40px;
        margin-bottom: 50px;
    }

    .card-text {
        text-align: justify;
    }

    p {
        height:110px;
    }

    img {
        width: 200px;
        height: 250px;
        border-radius: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 50%;
    }
</style>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    include 'nav.php';
    ?>
</head>

<body>
    <h2>
        <center><strong>General Health Problems</center></strong>
    </h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/heart.png" alt="Heart.">
                <div class="card-header">
                    <h3>Heart Disease</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Heart disease is a general term that includes many types of heart problems.
                    It's also called cardiovascular disease, which means heart and blood vessel disease.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/heartdiseases.html">Learn More</a></div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/diabetes.png" alt="Blood sugar meter.">
                <div class="card-header">

                    <h3>Diabetes</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Diabetes is a disease in which your blood glucose, or blood sugar, levels are too high.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/diabetes.html">Learn More</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/blood-pressure.png" alt="Blood pressure meter.">
                <div class="card-header">
                    <h3>Hypertension</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Hypertension (high blood pressure) is when the pressure in your blood vessels is too high (140/90
                    mmHg or higher). It is common but can be serious if not treated.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/highbloodpressure.html">Learn More</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/obesity.png" alt="Obese man.">
                <div class="card-header">

                    <h3>Obesity</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Obesity means having too much body fat.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/obesity.html">Learn More</a></div>
            </div>
        </div>
    </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/cancer.png" alt="Cancer.">

                <div class="card-header">

                    <h3>Cancer</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Cancer is not just one disease but many diseases. There are more than 100 different types of cancer.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/cancer.html">Learn More</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/influenza.png" alt="Flu.">
                <div class="card-header">

                    <h3>Influenza</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Influenza is a contagious respiratory illness caused by influenza viruses that infect the nose,
                    throat, and sometimes the lungs. It can cause mild to severe illness, and at times can lead to
                    death. </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/flu.html">Learn More</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/HIV.png" alt="HIV.">
                <div class="card-header">

                    <h3>HIV/AIDS</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    HIV harms your immune system by destroying a type of white blood cell that helps your body fight
                    infection. This puts you at risk for other infections and diseases.
                    AIDS is the final stage of infection with HIV.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/hiv.html">Learn More</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light">
                <img class="card-img-top" src="images/alzheimer.png" alt="Alzheimer.">
                <div class="card-header">

                    <h3>Alzheimer’s Disease</h3>
                </div>
                <div class="card-body"><p class="card-text">
                    Alzheimer's disease (AD) is the most common form of dementia among older people. Dementia is a brain
                    disorder that seriously affects a person's ability to carry out daily activities.
                </p>
                <a class="btn btn-primary" href="https://medlineplus.gov/alzheimersdisease.html">Learn More</a></div>
            </div>
        </div>
    </div>

</body>