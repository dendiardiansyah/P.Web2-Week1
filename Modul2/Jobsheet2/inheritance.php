<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $matakuliah;

    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    public function getMatakuliah() {
        return $this->matakuliah;
    }
}

$dosen1 = new Dosen("Bobon", "Pemrograman Web");
echo $dosen1->getNama() ."<br>";
echo $dosen1->getMatakuliah(); 
?>
