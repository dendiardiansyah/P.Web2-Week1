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
        return "Nama : $this->nama"."<br>". "NIM : $this->nim"."<br>". "Jurusan : $this->jurusan";
    }

    public function updateJurusan($updateJurusan) {
        $this->jurusan = $updateJurusan;
    }

    public function setNIM($nim) {
        $this->nim = $nim;
    }
}

$mahasiswa1 = new Mahasiswa("Mamat Alkatiri", "123456", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
echo "<hr>";
$mahasiswa1->updateJurusan("Sistem Informasi");
$mahasiswa1->setNIM("987433");
echo $mahasiswa1->tampilkanData();
?>