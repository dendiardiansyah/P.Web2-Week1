<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama : $this->nama, NIM : $this->nim, Jurusan : $this->jurusan";
    }
}

$mahasiswa1 = new Mahasiswa("Andi Prasetyo", "123456", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>