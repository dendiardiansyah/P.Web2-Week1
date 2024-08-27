<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    public $nama; // Atribut untuk menyimpan data nama
    public $nim; // Atribut untuk menyimpan data NIM
    public $jurusan; // Atribut untuk menyimpan data jurusan

// Konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama; // Memasukkan data ke atribut nama
        $this->nim = $nim; // Memasukkan data ke atribut nim
        $this->jurusan = $jurusan; // Memasukkan data ke atribut jurusan
    }

// Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan data berupa string yang berisi nama, NIM, dan jurusan
        return "Nama : $this->nama"."<br>". "NIM : $this->nim"."<br>". "Jurusan : $this->jurusan";
    }
}

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Dendi", "123456", "Teknik Informatika");
// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>