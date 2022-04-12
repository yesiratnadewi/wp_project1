<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <h1> Konversi Suhu </h1>
        Konversi : <br>
        <input type="radio" name="konversi" value="celcius ke fahrenhait" > Celcius ke Farenhait
        <input type="radio" name="konversi" value="fahrenhait ke celcius" > Farenhait ke Celcius
        <br>
        Suhu <input type="text" name="suhu"><br><br>
        <hr>
        <input type="submit" name="submit" value="konversi" >
    </form>
    
</body>
</html>