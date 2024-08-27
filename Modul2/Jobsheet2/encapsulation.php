<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    private $nama; // Atribut untuk menyimpan data nama (hanya bisa diakses di kelas ini)
    private $nim; // Atribut untuk menyimpan data NIM (hanya bisa diakses di kelas ini)
    private $jurusan; // Atribut untuk menyimpan data jurusan (hanya bisa diakses di kelas ini)

    // Konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama; // Memasukkan data ke atribut nama
        $this->nim = $nim;  // Memasukkan data ke atribut nim
        $this->jurusan = $jurusan; // Memasukkan data ke atribut jurusan
    }

    // Method untuk mengambil data nama
    public function getNama() {
        return $this->nama; // Mengembalikan atribut nama
    }

    // Method untuk mengambil data NIM
    public function getNIM() {
        return $this->nim; // Mengembalikan atribut nim
    }

    // Method untuk mengambil data jurusan
    public function getJurusan() {
        return $this->jurusan; // Mengembalikan atribut jurusan
    }

    // Method untuk mengubah data nama
    public function setNama($nama) {
        $this->nama = $nama; // Memasukkan data ke atribut nama
    }

    // Method untuk mengubah data NIM
    public function setNIM($nim) {
        $this->nim = $nim; // Memasukkan data ke atribut nim
    }

    // Method untuk mengubah data jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan; // Memasukkan data ke atribut jurusan
    }
}

// Membuat objek mahasiswa1 dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa("Dendi", "123456", "Teknik Informatika");

echo $mahasiswa1->getNama(); // Memanggil method getNama untuk mengambil data nama
echo "<br>";
echo $mahasiswa1->getNIM(); // Memanggil method getNIM untuk mengambil data NIM
echo "<br>";
echo $mahasiswa1->getJurusan(); // Memanggil method getJurusan untuk mengambil data jurusan
?>