<?php
    include_once ("controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sori Bank Jago</title>
    <link 
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"
    >
    <style>
        p { margin: 0.5rem; }
        hr {
            border: solid 1px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .attribute {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            padding-left: 1rem;
            text-align: left;
        }
        .container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin-top: 50px;
            text-align: center;
            text-align: center;
        }
        .bubble {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: 5rem;
            width: 100%;
            height: 350px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .listarea {
            margin: 1rem;
            overflow: auto;
            border-radius: 20px;
            text-align: left;
        }
        .listarea::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Selamat Datang di Bank kok!</h1>
            <p class="lead">mau pinjam uang berapa?</p>
        </div>
        <hr>
        <div class="bubble">
            <div class="listarea">
                <?php
                $nasabah = new controller();
                // $nasabah -> newUser ($nama, $norek, $alamat, $telepon, $saldo);
                $nasabah -> newUser ('Budi', '1234567890', 'Jl. Jalan No. 1', '081234567890', 1000000);
                $nasabah -> newUser ('Budiono', '1234567890', 'Jl. Jalan No. 1', '081234567890', 1000000);
                $nasabah -> deleteUser (0);
                $nasabah -> getUsers();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
