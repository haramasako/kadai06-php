<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-image:url("img/beer.jpg");
            background-repeat: repeat;
            text-align:center;
            color: white;
            padding:2px 0
        }

        .form {text-align:center

        }
    </style>
    <title>POST課題</title>
</head>

<body>
    <div class="menu">
        <h2>アンケート</h2>
        <ul>
            <h3>ビールに関するアンケートにお答えください</h3>
            <br></br>
        </ul>
    </div>
     
    <div class="form">
        <form action="write.php" method="post">
            <P>お名前: <input type="text" name="name"></P>
            <p>EMAIL: <input type="text" name="email"></P>
            <p>好み: <input type="text" name="likes"></P>
            <p>香り: <input type="text" name="aroma"></P>
            <input type="submit" value="送信">
       </form>
</body>

</html>
