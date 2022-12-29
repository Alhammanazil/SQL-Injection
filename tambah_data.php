
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="logo3.png" rel="shortcut icon">
    <title>Document</title>

    <style>
        tr{
            text-align: left;
        }
    </style>
</head>
<body style="background-image: url(bg.png);" >
    <div class="container" style="padding:20px ; width: 500px; height: 400px;background-color: gold;  margin: auto; border: 2px solid white ;border-radius: 1rem; "  >

        <h4 style="text-align: center; font-weight: bold; " >TAMBAH DATA MAHASISWA</h4>
    
        <hr>
      
        <form name="form" align="center" method="POST" action="tambah_data_act.php" >

            <table  style="margin: auto; " >
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text"  name="nim" ></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>NAMA MAHASISWA</td>
                    <td>:</td>
                    <td><input type="text" name="nama" ></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>MATA KULIAH</td>
                    <td>:</td>
                    <td><input type="text" name="makul" ></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>JUMLAH SKS</td>
                    <td>:</td>
                    <td><input type="number"  min="1" max="24" name="sks" ></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>SEMESTER </td>
                    <td>:</td>
                    <td><input type="number" min="1" max="8" name="semester" ></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>TANGGAL INPUT</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" ></td>
                </tr>
                <tr></tr>
                <tr></tr>
             
                <tr></tr>
                <tr></tr>
    
                
            
            </table>
            
            <div class="tekan" style="margin: auto; width: 150px; height: 50px; "  >
                <font size="4">
              
                    <input type="submit"  name="Input" value="Input">
                    <input type="reset"  name="reset" value="Hapus">
            

            </div>

            <a href="tampil_data.php">Kembali</a>
          
            </form>      
          
            <br>
            <br>
            <hr>


         
    </div>
    

</body>
</html>