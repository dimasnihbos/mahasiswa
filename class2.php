<?php
class mahasiswa{
    public $nim;
    public $nama;
    public $jurusan;

    function tampil_biodata(){
        echo $this->nim = "1";
        echo $this->nama = "dims";
        echo $this->jurusan = "rpl";
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata("1","dims","rpl")
?>