<?php
    include('connectdb.php');

    if (isset($_POST['daftar'])) {
        $namaLengkap = $_POST['namaLengkap'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        
        $sql = "INSERT INTO registrasi (Nama_Lengkap, Pass, Email, No_Hp, Alamat) VALUES 
        ('$namaLengkap', '$pass', '$email', '$hp', '$alamat')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<p>Data Berhasil Di tambahkan </p>";
            echo "<p><a href='index.html'>Kembali ke Home </a></p>";
        }else{
            die('Invalid query: ' . mysqli_error($conn));
        }

        mysqli_close($conn);
    }
?>