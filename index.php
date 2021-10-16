<html>

<head>
    <title>INHERENT Bank</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #21D4FD;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            font-size:20px;
        }

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0;
            /* Remove scrollbar space */
            background: transparent;
            /* Optional: just make scrollbar invisible */
        }

        .main_div {
            color: #FFC100;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
        }

        .main_text {
            color: #FFC100;
            margin-top: 250px;
            font-size:50px;
            font-weight:900;
        }

        .big-text {

            margin: 5px 0;
            color: #FFC100;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
            font-size:25px;
            font-weight:700;
        }

        .contactus {
            width: 100%;
            height: 100vh;
            padding: 80px 0;
            position: relative;
            margin-top:170px;
            color: white;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
        }

        .linkedin,
        .facebook,.instagram {
            margin: 10px 10px;
            padding: 10px 10px;
            border: 2px solid #FFF;
            border-radius: 20px;
            width: 5vw;
            color: var(--indigo);
        }

        .instagram {
            color: var(--pink);
        }
        .instagram:hover{
            color: 	#FFB6C1;
        }
        .linkedin:hover,.facebook:hover{
            color: var(--primary);
        }
        
        .formbutton button {
            border: 1px solid #FFC100;
            border-radius: 18px;
            margin: 0 50px;
            padding: 12px 35px;
            outline: none;
            columns: #50d1c0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.4;
            text-align: center;
            background: transparent;
            color: white;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
        }

        form:hover .formbutton button {
            background: #FFC100;
            color: white;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);

        }


        @media(min-width:400px) {
            .main_div {
                max-height: 1000px;
            }
        }
    </style>
</head>

<body>
    <div class="main_div">

        <div class="navbar navbar-expand-md">

            <a href="#" class="navbar-brand font-weight-bold text-white text-center">
                <h2>IB</h2>
            </a>
            <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="padding: 0px 4px;">
                        <a href="index.php" class="nav-link text-white "><span style="margin-left:90px;">HOME</span></a>
                    </li>
                    <li class="nav-item" style="padding: 0px 0px 0px 4px;">
                        <a href="viewcustomers.php" class="nav-link text-white ">VIEW CUSTOMERS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link text-white">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1 class="main_text">INHERENT BANK</h1>
                    <p class="big-text"> Building a Better life with banking</p>
                </div>

                <div class="col-sm-6">
                    <!-- 560 345 -->
                    <img src="images/bank.png" class="img-fluid" width="400" height="300" style="margin-top:30px; position: relative; top:60px; left:130px; right: 0px;">

                </div>

            </div>

        </div>

    </div>

    </div>


    <!--contact starts-->
    <section class="contactus" id="contact">
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p style="padding: 15px 0px;;">Contact us at the follwing social media platforms</p>
            <p style="padding: 5px 0px;">Feel FREE to ask your QUESTIONS !! It would be a great pleasure to help you :)</p>
            <a href="https://www.linkedin.com/in/sanketardekar/">
                <i class="fa fa-linkedin linkedin" ></i>
            </a>
            <a href="https://www.facebook.com/sanket.ardekar.9/">
                <i class="fa fa-facebook facebook" ></i>
            </a>
            <a href="https://www.instagram.com/sanketardekar/">
                <i class="fa fa-instagram instagram" ></i>
            </a>
            <p style="padding: 100px 0px; font-family: cursive;"> Copyrights &copy; All Rights Reserved</p>
        </div>
    </section>
</body>

</html>