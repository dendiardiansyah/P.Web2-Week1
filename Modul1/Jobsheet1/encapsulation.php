<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim; 
        $this->jurusan = $jurusan;
    }

    public function setData ($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getData () {
        return "Nama : $this->nama" . "<br>" . "NIM : $this->nim" . "<br>" . "Jurusan : $this->jurusan" . "<br>";
    }
}

$mahasiswa1 = new Mahasiswa("Andi Prasetyo", "123456", "Teknik Informatika");
echo $mahasiswa1->getData(); // Output: Mahasiswa : Andi Prasetyo, NIM : 123456, Jurusan : Teknik Informatika
?>