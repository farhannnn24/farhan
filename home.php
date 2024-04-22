<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: white;
}

h1 {
    text-align: center;
    margin-top: 30px;
    color: blue;
}

p {
    text-align: center;
    margin-top: 40px;
    color: blue;
    font-size: 350%
}

ul {
    list-style-type: none;
    padding: 40px;
    text-align: center;
    margin-top: 20px;
}

ul li {
    display: inline;
    margin-right: 60px;
}
ul li a {
            text-decoration: none;
            color: white;
            padding: 8px 16px;
            border-radius: 15px;
            transition: background-color 0.3s ease;
            background-color: blue;
        }

        ul li a:hover {
            background-color: #5E616B;
            color: #CDD3D6;
        }
a {
            text-decoration: none;
            color:   #f58634;
            transition: color 0.3s ease;
            margin-right: 10px;
        }

        a:hover {
            color:  blue;
        }

        b {
            color: blue;
        }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Website Galeri Foto</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
<ul>  
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
      
</ul>    

</body>
</html>