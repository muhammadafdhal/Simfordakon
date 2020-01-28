<?php
include 'conn/koneksi.php';
if (isset($_POST['log'])) {
    $user = mysql_real_escape_string($_POST['user']);
    $pass = mysql_real_escape_string($_POST['pass']);
    $pass = ($pass);
    $sql = mysql_query("SELECT * FROM login where loginName='$user' and loginPassword='$pass'");
    $data = mysql_fetch_array($sql);
    $username = $data['loginName'];
    $nama = $data['nama'];
    $password = $data['loginPassword'];
    $level = $data['level'];


    if ($user == $username && $pass == $password) {
        session_start();
        $_SESSION['nama']=$nama;
        $_SESSION['level'] = $level;
        
        if ($level == 'admin') {
            echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
            echo "<meta http-equiv='refresh' content='0; url=acts/index.php'>";
        } else {
            echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
            echo "<meta http-equiv='refresh' content='0; url=acts/index.php'>";
        }
    } else {
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
    }
}
?>