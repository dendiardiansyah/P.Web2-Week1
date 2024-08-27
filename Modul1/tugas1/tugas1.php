<?php
class Dosen {
    public $name;
    public $nip;
    public $mataKuliah;

    public function __construct($name, $nip, $mataKuliah) {
        $this->name = $name;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "Nama : $this->name"."<br>". "NIP : $this->nip"."<br>". "Mata Kuliah : $this->mataKuliah";
    }
}

$dosen1 = new Dosen("Mamad Alkatiri", "123456", "Pemrograman Web");
echo $dosen1->tampilkanDosen();
?>