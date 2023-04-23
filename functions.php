<?php 

$link = new mysqli('localhost','root','','db_sdkramat2');

function query($sql){

  global $link;
  $rows = [];
  $hasil = $link->query($sql);
  while($row = $hasil->fetch_assoc()){
    $rows[] = $row;
  }
  return $rows;

}

function tambah($data){
  global $link;

  $nama = htmlspecialchars($data['nama']); 
  $nip = htmlspecialchars($data['nip']); 
  $jk = htmlspecialchars($data['jk']); 
  $alamat = htmlspecialchars($data['alamat']);
  $mapel = htmlspecialchars($data['mapel']);
  $role = htmlspecialchars($data['role']);

  // Password Ngacak
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 1; $i <= 8; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  $password = $randomString;
  
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = 'default_gambar.png';
  }else {
    $gambar = upload();
    if ($gambar === false) {
      $gambar = 'default_gambar.png';
    }
  }
  
  
  $query = "INSERT INTO guru VALUES(null, '$mapel', '$nip', '$nama', '$jk', '$password', '$alamat', '$role', '$gambar')";

  mysqli_query($link, $query);

  return mysqli_affected_rows($link);

}

function ubah($data){
  global $link;

  $id = htmlspecialchars($data['id_guru']);
  $nama = htmlspecialchars($data['nama']); 
  $nip = htmlspecialchars($data['nip']); 
  $jk = htmlspecialchars($data['jk']); 
  $alamat = htmlspecialchars($data['alamat']);
  $mapel = htmlspecialchars($data['mapel']);
  $role = htmlspecialchars($data['role']);
  $password = htmlspecialchars($data['password']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambar_lama;
  } else {
    $gambar = upload();
    if ($gambar === false) {
      $gambar = $gambar_lama;
    }
    $file = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM guru WHERE id_guru='$id'"));
    if($file['gambar'] != 'default_gambar.png'){
      unlink('../assets/imgs/Foto SD/Foto Guru/' . $file["gambar"]);
    }
  }

  $query = "UPDATE guru SET id_mapel=$mapel, nip_guru='$nip', nama_guru='$nama', jk_guru='$jk', password='$password', alamat_guru='$alamat', role='$role', gambar='$gambar' WHERE id_guru='$id'";

  mysqli_query($link, $query);

  return mysqli_affected_rows($link);

}

function upload(){

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  if(isset($_FILES['gambar']['eror'])){
    $eror = $_FILES['gambar']['eror'];
  }
  $tmpName = $_FILES['gambar']['tmp_name'];


  // cek apakah yang di upload adalah gambar
  $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
      echo "
      <script>
      alert('Masukan gambar terlebih dahulu');
      document.location.href = 'daftarGuru/daftar_guru.php'; 
      </script>";
      return false;
  }
  
  // cek jika ukurannya terlalu besar
  if( $ukuranFile > 20000000 ){
      echo "
      <script>
      alert('ukuran Gambar Terlalu Besar');
      document.location.href = 'daftarGuru/daftar_guru.php'; 
      </script>";
      return false;
  }

  // lolos pengecekan gambar siap di upload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  
  move_uploaded_file($tmpName, '../assets/imgs/Foto SD/Foto Guru/' . $namaFileBaru);
  
  return $namaFileBaru;
  
}

function hapus($id){
  $id = htmlspecialchars($id['id_guru']);

  global $link;
  $file = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM guru WHERE id_guru='$id'"));
  if($file['gambar'] != 'default_gambar.png'){
    unlink('../assets/imgs/Foto SD/Foto Guru/' . $file["gambar"]);
  }
  $hapus = "DELETE FROM guru WHERE id_guru='$id'";
  mysqli_query($link,$hapus);
  return mysqli_affected_rows($link);
}

?>