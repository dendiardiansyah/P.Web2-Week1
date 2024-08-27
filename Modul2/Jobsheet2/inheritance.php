<?php
// Mendefinisikan kelas Pengguna
class Pengguna {
    protected $nama; // Atribut untuk menyimpan data nama (hanya bisa diakses di kelas ini dan turunannya)

    // Konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method untuk mengambil data nama
    public function getNama() {
        return $this->nama; // Mengembalikan atribut nama
    }
}

// Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {
    private $matakuliah; // Atribut untuk menyimpan data matakuliah (hanya bisa diakses di kelas ini)

    // Konstruktor
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama); // Memanggil konstruktor dari kelas parent (Pengguna)
        $this->matakuliah = $matakuliah; 
    }

    // Method untuk mengambil data matakuliah
    public function getMatakuliah() {
        return $this->matakuliah; // Mengembalikan atribut matakuliah
    }
}

// Membuat objek dosen1 dari kelas Dosen
$dosen1 = new Dosen("Bobon", "Pemrograman Web");
echo $dosen1->getNama() ."<br>"; // Memanggil method getNama untuk mengambil data nama
echo $dosen1->getMatakuliah();  // Memanggil method getMatakuliah untuk mengambil data matakuliah
?>