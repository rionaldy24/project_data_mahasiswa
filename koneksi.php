<?php
class Koneksi{
  private $server="localhost";
  private $username="rionaldy";
  private $password = "adelia99";
  private $db = "id4892559_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
