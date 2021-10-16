<html>

<head>
    <title>INHERENT BANK</title>
    <link rel="stylesheet" type="text/css" href="css/userstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

        .main_div {
            width: 100%;
            height: 100vh;
        }

        .row {
            display: flex;
            padding: 0px 0px 0px 250px;
            flex-direction: row;
            justify-content: center;
        }

        input {
            margin-top: 10px;
            width: 230px;
            height: 40px;
            border-radius: 5px;
            outline: none;
        }

        ::placeholder {
            padding: 10px;
            color: black;
            font-weight: normal;
        }

        li {
            color: #FFC100;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
        }

        button {
            color: white;
            background: transparent;
            border: 1px solid #FFC100;
            padding: 20px 25px;
            cursor: pointer;
            border-radius: 18px;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
        }

        button:hover {
            color: white;
            background: #FFC100;
            border: none;
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
    </style>
</head>

<body>
    <div class="main_div">

        <div class="navbar navbar-expand-md">

            <a href="index.php" class="navbar-brand font-weight-bold text-white text-center" style="font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;">
                <h2>IB</h2>
            </a>
            <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon" style="background:white;"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewcustomers.php" class="nav-link text-white">VIEW CUSTOMER</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <div class="card text-center" style="margin-top:76px;background-color: transparent;border-radius:10px;color:white;border: 1px solid #FFC100;">
                        <form method="POST">

                            <?php
                            include 'connection.php';
                            $ids = $_GET['idtransfer'];
                            $showquery = "select * from `banksystem` where id=($ids) ";
                            $showdata = mysqli_query($con, $showquery);
                            if (!$showdata) {
                                printf("Error: %s\n", mysqli_error($con));
                                exit();
                            }
                            $arrdata = mysqli_fetch_array($showdata);

                            ?>

                            <div class="card-body">

                                <h3 style="padding: 0px 0px 10px 0px;">Sender Details</h3>
                                <label>Name</label>
                                <input style="font-weight:bold;" type="text" name="name1" value="<?php echo $arrdata['name']; ?>" required placeholder="Enter your name" /><br><br>
                                <label>Email</label>
                                <input style="font-weight:bold;" type="text" name="email1" value="<?php echo $arrdata['email']; ?>" required placeholder="Enter email id" /><br><br>
                                <label>Amount</label>
                                <input style="font-weight:bold;" type="text" name="amount1" value="" style="width:210px;" required placeholder="Enter amount to transfer" /><br><br>
                            </div>

                    </div>
                </div>



                <div class="col-sm-4">
                    <div class="card text-center" style="margin-top:76px;background-color:transparent;border-radius:10px;color:white; border: 1px solid #FFC100;">

                        <div class="card-body">
                            <h3 style="padding: 0px 0px 10px 0px;">Receiver Details</h3>
                            <label>Name</label>
                            <input style="font-weight:bold;" type="text" name="name2" value="" required placeholder="Enter receiver's name" /><br><br>
                            <label>Email</label>
                            <input style="font-weight:bold;" type="text" name="email2" value="" required placeholder="Enter receiver's email id" /><br><br>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <button name="submit" style="position: absolute; top: 66vh; right: 24vw;">Proceed to Pay</button>
                </div>

            </div>

        </div>
    </div>
    </form>
    <?php

    include 'connection.php';

    if (isset($_POST['submit'])) {


        $Sender_name = $_POST['name1'];
        $Sender_email = $_POST['email1'];
        $Sender = $_POST['amount1'];
        $Receiver_name = $_POST['name2'];
        $Receiver_email = $_POST['email2'];



        $ids = $_GET['idtransfer'];
        $senderquery = "select * from `banksystem` where id=$ids ";
        $senderdata = mysqli_query($con, $senderquery);

        if (!$senderdata) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }
        $arrdata = mysqli_fetch_array($senderdata);

        //receiverquery
        $receiverquery = "select * from `banksystem` where Email='$Receiver_email' ";
        $receiver_data = mysqli_query($con, $receiverquery);

        if (!$receiver_data) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }
        $receiver_arr = mysqli_fetch_array($receiver_data);
        $id_receiver = $receiver_arr['id'];


        if ($arrdata['amount'] >= $Sender) {
            $decrease_sender = $arrdata['amount'] - $Sender;
            $increase_receiver = $receiver_arr['amount'] + $Sender;
            $query = "UPDATE `banksystem` SET `id`=$ids,`amount`= $decrease_sender  where `id`=$ids ";
            $rec_query = "UPDATE`banksystem` SET `id`=$id_receiver,`amount`= $increase_receiver where  `id`=$id_receiver ";
            $res = mysqli_query($con, $query);
            $rec_res = mysqli_query($con, $rec_query);

            if ($res && $rec_res) {
    ?>
                <script>
                    swal("Transfer done SUCCESSFULLY!!");
                </script>

            <?php

            } else {
            ?>
                <script>
                    swal("Oops!! Some ERROR occured during the transfer");
                </script>

            <?php

            }
        } else {
            ?>
            <script>
                swal("Oops!! You have INSUFFICIENT balance.");
            </script>
    <?php

        }
    }
    ?>





</body>

</html>