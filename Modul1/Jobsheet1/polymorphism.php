<?php
class Pengguna {

    public function __construct() {
    }

    public function aksesFitur() {
        return "Pengguna";
    }
}

class Dosen extends Pengguna {

    public function __construct() {
    }

    public function aksesFitur() {
        return "Dosen";
    }
}

class Mahasiswa extends Pengguna {

    public function __construct() {
    }

    public function aksesFitur() {
        return "Mahasiswa";
    }
}

$pengguna1 = new Pengguna();
echo $pengguna1->aksesFitur();
echo "<br>";
$dosen1 = new Dosen();
echo $dosen1->aksesFitur();
echo "<br>";
$mahasiswa1 = new Mahasiswa();
echo $mahasiswa1->aksesFitur();

?>