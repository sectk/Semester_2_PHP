
<form action="" method="post">
    barang :
    <input type="text" name="barang" placeholder="namabarang">
    <br>
    harga :
    <input type="number" name ="harga" placeholder="harga">
    <br>
    stok :
    <input type="number" nama="stok" placeholder="stok barang">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php

    // code koneksi php ke mysql
    $host = "127.0.0.1";
    $user = "root";
    $password = ""; 
    $db = "dbtoko";

    $koneksi =new mysqli($host, $user, $password, $db);

    if(isset($_POST["simpan"])){
        $barang = $_POST["namabarang"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];
        $sql = "INSERT INTO barang (namabarang, harga, stok) VALUES('$namabarang', $harga, $stok)";
        $hasil = mysqli_query($koneksi, $sql);
    }

    $sql = "SELECT*FROM barang";
    $hasil = mysqli_query($koneksi, $sql);
    var_dump($hasil);

    echo "<table border=2px>
    <thead>
    <tr>
        <th>
        PELANGGAN
        </th>

        <th>
        HARGA
        </th>

        <th>
        STOK
        </th>
    </tr>
    </thead>
    <tbody>";

    while($row=mysqli_fetch_array($hasil)){
            echo"<tr>";
            echo "<td>" .$row[1]."</td>";
            echo "<td>" .$row[2]."</td>";
            echo "<td>" .$row[3]."</td>";
            echo "</tr>";
    }
    echo"</tbody>
        </table>";
    
?>

  