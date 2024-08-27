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

    public function getNama() {
        return $this->nama;
    }

    public function getNIM() {
        return $this->nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNIM($nim) {
        $this->nim = $nim;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

$mahasiswa1 = new Mahasiswa("Dendi", "123456", "Teknik Informatika");
echo $mahasiswa1->getNama();
echo "<br>";
echo $mahasiswa1->getNIM();
echo "<br>";
echo $mahasiswa1->getJurusan();
?>