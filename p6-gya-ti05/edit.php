<?php
    require_once 'dbkoneksi.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM pelanggan WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

?>

<form method="">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label for="">kode</label>
    <input type="text" name="kode" value="<?= $row['kode'] ?>"><br><br>

    <label for="">nama</label>
    <input type="text" name="nama" value="<?= $row['nama'] ?>"><br><br>

    <label for="">jenis kelamin</label>
    <br>
    <label for="">laki-laki</label>
    <input type="radio" name="jk" value="L">
    <br>
    <label for="">perempuan</label>
    <input type="radio" name="jk" value="P"><br><br>

    <label for="">Tempat Lahir</label>
    <input type="text" name="tmp_lahir" value="<?= $row['tmp_lahir'] ?>"> <br><br>

    <label for="">tangal lahir</label>
    <input type="date" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>"> <br><br>

    <label for="">email</label>
    <input type="text" name="email" value="<?= $row['email'] ?>"><br><br>

    <label for="">kartu id</label>
    <input type="text" name="kartu_id" value="<?= $row['kartu_id'] ?>">

    <br><br>

    <button type="submit" name="submit">save</button>
    
</form>