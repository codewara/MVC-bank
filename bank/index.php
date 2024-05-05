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
        p {
            margin: 0.5rem;
        }
        hr {
            width: 100%;
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
        .bubble h3 {
            margin-top: 1rem;
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
        .list {
            margin: 0;
            text-align: left;
        }
        .list li {
            padding-bottom: 0.5rem;
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
                $nasabah = new controller ();
                $nasabah->newUser('1', 'Ucup1', '123456789', 'Bandung', '0812', '999999999');
                $nasabah->newUser('2', 'Ucup2', '123456789', 'Bandung', '0812', '999999999');
                $nasabah->newUser('3', 'Ucup3', '123456789', 'Bandung', '0812', '999999999');
                $nasabah->getUser(1);
                $edit = new nasabah('4', 'Andi', '1234321', 'Medan', '9876', '1000');
                $nasabah->editUser(1, $edit);
                $nasabah->getUser(1);
                $nasabah->newUser('4', 'Ucup4', '123456789', 'Bandung', '0812', '999999999');
                $nasabah->getUsers();
                $nasabah->deleteUser(1);
                $nasabah->getUsers();
                ?>
            </div>
        </div>
    </div>
</body>
</html>