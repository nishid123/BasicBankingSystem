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
            width: 100vw;
            height: 100vh;
        }

        .display_table {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            background-color: #21D4FD;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
        }

        .center_div {
            width: 90vw;
            height: 80vh;
            background-repeat: no-repeat;
            background-size: 100%;
            padding: 20px 0 0 0;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            margin-left: 30px;
        }

        h1 {
            font-size: 18px;
            color: #FFC100;
            font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            margin-top: -20px;
            margin-bottom: 20px;
            font-size: 30px;
        }

        table {
            border-collapse: collapse;
            background-color: #192841;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            border-collapse: collapse;
            table-layout: auto;
            opacity: 0.7;
            color: #FFC100;
            font-weight: bold;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #f2f2f2;
            padding: 8px 30px;
            text-align: center;
            opacity: 0.9;
            color: yellow;
            font-size: 13px;
        }

        th {
            text-transform: uppercase;
            font-weight: bolder;
        }

        tr:hover {
            transform: scale(1.02);
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

        <div class="navbar navbar-expand-md" style="font-family: 'Arvo', serif;
            font-family: 'Montserrat', sans-serif;">

            <a href="index.php" class="navbar-brand font-weight-bold text-white text-center">
                <h2>IB</h2>
            </a>
            <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon" style="background:white;"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="padding: 0px 5px 0px 0px;">
                        <a href="index.php" class="nav-link text-white">HOME</a>
                    </li>
                    <li class="nav-item" style="padding: 0px 0px 0px 5px;">
                        <a href="viewcustomers.php" class="nav-link text-white">VIEW CUSTOMER</a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="display_table">
            <h1>Customer Details</h1>
            <div class="center_div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Amount</th>

                                <th colspan="2">operation</th>
                            </tr>
                        </thead>
                        <tbody>
                </div>
                <?php
                include 'connection.php';
                $selectquery = " select * from banksystem";
                $query = mysqli_query($con, $selectquery);
                $numofrows = mysqli_num_rows($query);
                $i = 1;
                while ($i <= $numofrows) {
                    $res = mysqli_fetch_array($query)
                ?>
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['amount']; ?></td>
                        <td><a style="color: aqua;" href="transfermoney.php?idtransfer=<?php echo $res['id']; ?>">transfer</a></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>


                </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>

</body>

</html>