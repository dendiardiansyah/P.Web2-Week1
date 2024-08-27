<?php
abstract class Pengguna {
    abstract public function aksesFitur();
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen";
    }
}

$dosen1 = new Dosen();
echo $dosen1->aksesFitur();
echo "<br>";
$mahasiswa1 = new Mahasiswa();
echo $mahasiswa1->aksesFitur();
?>