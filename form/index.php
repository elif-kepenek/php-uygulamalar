<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3'e Bölünebilme</title>
    <style>
        .container {
            text-align: center;
        }
        .box {
            border: 1px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>3'e Bölünebilir mi?</h1>
        <div class="box">
            <form action="post.php" method="post">
                <label for="">Sayı Giriniz:</label>
                <input type="number" name="sayi" required>
                <input type="submit" value="Gönder">
            </form>
        </div>
    </div>    
</body>
</html>