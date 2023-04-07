<!DOCTYPE html>
<style>
    h2{
        margin-left: 15px;
    }

    .container {
        display: flex;                  /* establish flex container */
        flex-direction: row;            /* default value; can be omitted */
        flex-wrap: nowrap;              /* default value; can be omitted */
        justify-content: space-between; /* switched from default (flex-start, see below) */
        margin-right: 15px;
    }
    .content-container {
        background-color: #b9dbcf;
        border-radius: 10px;
        width: 40%;
        
        margin-left: 15px;
    }
    .content-title h3 {
        text-align: center;
    }
    .content-title {
        padding-left:20px;
        padding-right:20px;
        padding-top:10px;
        padding-bottom:1px;
      
    }
    .content-desc {
        padding-left:20px;
        padding-right:20px;
        padding-top:10px;
        padding-bottom:1px;
        text-align: justify;
    }

    img {
        width: 200px;
        height: 130px;
        border-radius: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>

<body>
    <?php
    include 'nav.php';
    ?>

    <h2>Common Health Problems</h2>

    <div class="container">

        <div class="content-container">
            <div class="content-title">            
                <img src="images/heart.png" alt="Heart.">
                <h3>Heart Disease</h3>
            </div>
        </div>

        <div class="content-container">
            <div class="content-title">            
                <img src="images/diabetes.png" alt="Blood sugar meter.">
                <h3>Diabetes</h3>
            </div>    
        </div>

        <div class="content-container">  
            <div class="content-title">
                <img src="images/blood-pressure.png" alt="Blood pressure meter.">
                <h3>High Blood Pressure</h3>
            </div>
        </div>
    </div>
    

</body>