<?php
// Mendefinisikan kelas Pengguna
class Pengguna {

    // Konstruktor
    public function __construct() {
    }

    // Method untuk mengembalikan string
    public function aksesFitur() {
        return "Pengguna"; // Mengembalikan string "Pengguna"
    }
}

// Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {

    // Konstruktor
    public function __construct() {
    }

    // Method untuk mengembalikan string
    public function aksesFitur() {
        return "Dosen"; // Mengembalikan string "Dosen"
    }
}

// Mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna {

    // Konstruktor
    public function __construct() {
    }

    // Method untuk mengembalikan string
    public function aksesFitur() {
        return "Mahasiswa"; // Mengembalikan string "Mahasiswa"
    }
}

// Membuat objek pengguna1
$pengguna1 = new Pengguna();
echo $pengguna1->aksesFitur(); // Mengembalikan string "Pengguna"
echo "<br>";

// Membuat objek dosen1
$dosen1 = new Dosen();
echo $dosen1->aksesFitur(); // Mengembalikan string "Dosen"
echo "<br>";

// Membuat objek mahasiswa1
$mahasiswa1 = new Mahasiswa();
echo $mahasiswa1->aksesFitur(); // Mengembalikan string "Mahasiswa"
?>