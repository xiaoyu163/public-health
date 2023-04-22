<!DOCTYPE html>
<?php
include 'nav.php';
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container {
            background-color: #A3E2BD;
            align-items: center;
            width: auto;
        }

        img {
            display: block;
            max-width: 100%;
            max-height: 100%;
            opacity: 0.2;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 0%);
        }

        .centered h2 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bolder;
        }

        .centered h6 {
            font-weight: light;
            text-align: justify;
        }

        .centered p {
            font-style: italic;
            font-family: "Segoe Script";
            font-size: medium;
            font-weight: light;
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="images/health.png">
        <div class="centered">
            <h2>Public Health</h2>
            <p>
                Public health is a field that focuses on improving the health of populations by preventing diseases,
                promoting healthy behaviors,
                and ensuring access to healthcare services. It involves a range of activities, from conducting research
                on the causes and prevention
                of diseases to developing policies and programs that promote healthy living.
            </p>
            <h2>Healthcare Access</h2>
            <p>
                Healthcare access refers to the ability of individuals to obtain healthcare services when they need
                them. Access to healthcare services can be affected by a range of factors, including geographic
                location, income, insurance coverage, and cultural and linguistic barriers.
                Access to healthcare is important for maintaining good health, preventing and managing chronic diseases,
                and treating acute illnesses and injuries.
            </p>

            <h6><i>
                    The availability and accessibility of healthcare services can have a significant impact on the
                    overall health and well-being of communities. Public health and healthcare access are closely
                    related,
                    as efforts to improve healthcare access often involve public health strategies, such as
                    community-based interventions, health education, and policy advocacy.
                </i></h6>
        </div>
    </div>
</body>