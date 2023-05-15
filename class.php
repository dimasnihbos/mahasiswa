<?php
class mahasiswa{
    public $nim = "01";
    public $nama = "Dimas";
    public $jurusan = "RPL";

    function tampil_biodata(){
        echo $this->nim ;
        echo $this->nama ;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata()
?>