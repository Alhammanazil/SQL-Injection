<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Aman</title>
   
</head>
<link href="logo3.png" rel="shortcut icon">
<body style="background-image:url(bg.png) ;">
    <div style="width: 350px; margin: auto; padding: 20px;  height:300px;background-color: greenyellow; border: 2px solid white; border-radius: 1rem; " >
        <form action="daftar_aman_act.php" method="post">
        <div >
            <font size="7">Pendaftaran</font>
            <hr>
            <div class="text_a">Username :</div>
            <div><input class="input" required type="text" name="username" placeholder="Username"></div> 
            <br>
            <div class="text_a">Password :</div>
            <div><input class="input" required type="password" name="password" placeholder="Password"></div> 
            <br>
            <div class="text_a">Email :</div>
            <div><input class="input" required type="email" name="email" placeholder="Email"></div>
            <br>
            <div class="submit"><input class="submit1" type="submit" value="Daftar"></div>
            <hr>
            <a href="index_aman.php">Kembali</a>
        </div>
        </form>
    </div>
</body>
</html>