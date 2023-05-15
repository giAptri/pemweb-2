<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM kategori_produk WHERE id=?";
   } else {
        $_kategori_produk = $_POST['kategori_produk'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_kategori_produk;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO kategori_produk (kategori_produk) VALUES (?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE kategori_produk SET kategori_produk=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   header('location:list_kategori.php');
?>