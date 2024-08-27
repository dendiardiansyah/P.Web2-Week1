<?php
// Mendefinisikan kelas Mahasiswa dengan atribut nama, nim, dan jurusan
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa (nama, nim, jurusan)
    public function tampilkanData() {
        return "Nama : $this->nama"."<br>". "NIM : $this->nim"."<br>". "Jurusan : $this->jurusan";
    }

    // Method untuk mengupdate jurusan mahasiswa
    public function updateJurusan($updateJurusan) {
        $this->jurusan = $updateJurusan;
    }

    // Method untuk mengupdate NIM
    public function setNIM($nim) {
        $this->nim = $nim;
    }
}

// Mendefinisikan kelas Dosen dengan atribut nama, nip, dan mata kuliah
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Method untuk menampilkan data dosen (nama, nip, mata kuliah)
    public function tampilkanDosen() {
        return "Nama : $this->nama"."<br>". "NIP : $this->nip"."<br>". "Mata Kuliah : $this->mataKuliah";
    }
}

// Membuat objek mahasiswa1 dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa("Mamat Alkatiri", "123456", "Teknik Informatika");
// Menampilkan data mahasiswa1
echo $mahasiswa1->tampilkanData();
echo "<hr>"; // garis pemisah

// Memanggil method updateJurusan dan setNIM untuk mengupdate jurusan dan NIM
$mahasiswa1->updateJurusan("Sistem Informasi");
$mahasiswa1->setNIM("987433");

// Menampilkan data setelah diupdate
echo "<h3>Data setelah diupdate</h3>";
echo $mahasiswa1->tampilkanData();
echo "<hr>";

// Membuat objek dosen1 dari kelas Dosen
$dosen1 = new Dosen("Hajime", "992277", "Basis Data");
// Menampilkan data dosen1
echo "<h3>Data Dosen</h3>";
echo $dosen1->tampilkanDosen();
?>