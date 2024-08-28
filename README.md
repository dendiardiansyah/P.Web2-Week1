# PHP OOP 
## Modul 1
### Pendahuluan
Penggunaan class dan object adalah inti dari pemrograman berorientasi objek (OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan class dan object, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali.

### Class dan Object
• Class : Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek. <br>
• Object : Instansiasi dari kelas yang memiliki akses ke atribut dan metode yang didefinisikan dalam kelas. <br>
• Contoh Coding :
```php
<?php
// Definisi Kelas
class Mobil {
    // Atribut atau Property
    public $merk;
    public $warna;

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Method atau Function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }

}

// Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>
```

• Output <br>
![image](https://github.com/user-attachments/assets/221ba2c5-14e0-4b78-8b7a-bfa702640fa8)
<br>

### Attribute/Properties dan Method
• Attribute/Properties : Variabel yang meyimpan data untuk objek. <br>
• Method : Fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek. <br>
• Contoh Coding :
```php
<?php
// Menambah attribute dan method
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    } 

    public function tampilkanInfo() {
        return "Buku : $this->judul, ditulis oleh $this->penulis";
    }
}

$buku1 = new Buku("Pemrograman PHP", "John Doe");
echo $buku1->tampilkanInfo();
?>
```
• Output <br>
![image](https://github.com/user-attachments/assets/ad7aad18-2917-4270-8790-0e2ff23c6997)
<br>

### Jobsheet 1
Pada Jobsheet 1 ini saya menerapkan konsep kelas dan objek dalam PHP melalui tugas yang diberikan dalam Modul 1 yang berisi pembuatan serta penggunaan kelas dan objek.<br>
• Berikut Contoh coding dari file jobsheet1: 
```php
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
```
• Output <br>
![image](https://github.com/user-attachments/assets/07c93f31-d3c4-4dfe-933b-12e43a08f892)
<br>


## Modul 2
### Pendahuluan
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip- prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara.

### Jobsheet 2 
Pada Jobsheet 2 saya mengimplementasikan konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta menerapkan prinsip OOP seperti Encapsulation, Inheritance, Polymorphism, dan Abstraction. Berikut merupakan penjelasan mengenai konsep dasar OOP dan prinsip OOP disertai dengan kodenya.

### Konsep Dasar OOP
• Class : Blueprint atau template untuk menciptakan objek. <br>
• Object : Instance dari class yang memiliki atribut/properti (attribute) dan fungsi/metode (methods). <br>
• Contoh Coding : 
```php
<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    public $nama; // Atribut untuk menyimpan data nama
    public $nim; // Atribut untuk menyimpan data NIM
    public $jurusan; // Atribut untuk menyimpan data jurusan

// Konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama; // Memasukkan data ke atribut nama
        $this->nim = $nim; // Memasukkan data ke atribut nim
        $this->jurusan = $jurusan; // Memasukkan data ke atribut jurusan
    }

// Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan data berupa string yang berisi nama, NIM, dan jurusan
        return "Nama : $this->nama"."<br>". "NIM : $this->nim"."<br>". "Jurusan : $this->jurusan";
    }
}

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Dendi", "123456", "Teknik Informatika");
// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
```
• Output <br> 
![image](https://github.com/user-attachments/assets/ab80ce65-434f-4625-b66f-a035d21c5ce2)

### Prinsip OOP
1. Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu. <br>
   • Contoh Coding :
```php
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
```
  • Output <br>
  ![image](https://github.com/user-attachments/assets/1b95b5ce-ce74-47c7-8110-e1572c411daa)
  <br> 
  
2. Inheritance : Kelas dapat mewarisi properti dan metode dari kelas lain. <br>
  • Contoh Coding :
```php
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
```
• Output <br>
![image](https://github.com/user-attachments/assets/4a67c41d-e60b-40ee-84c8-af7e731864b3)
<br>

3. Polymorphism : Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda. <br>
  • Contoh Coding :
```php
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
```
• Output <br>
![image](https://github.com/user-attachments/assets/cfa21e2a-cc6a-49d5-ab2b-8ec69aa00e09) <br>

4. Abstraction : Menyembunyikan detail implementasi dan hanya menampilkan
fungsi penting. <br>
    • Contoh Coding <br>
```php
<?php
// Mendefinisikan kelas abstrak Pengguna
abstract class Pengguna {
    abstract public function aksesFitur(); // Method abstrak
}

// Mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas abstrak Pengguna
class Mahasiswa extends Pengguna {

    // Method yang ditambahkan pada kelas abstrak
    public function aksesFitur() {
        return "Mahasiswa"; // Mengembalikan string "Mahasiswa" 
    }
}

// Mendefinisikan kelas Dosen yang merupakan turunan dari kelas abstrak Pengguna
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen"; // Mengembalikan string "Dosen"
    }
}

// Instansiasi objek dosen1
$dosen1 = new Dosen();
echo $dosen1->aksesFitur(); // Mengembalikan string "Dosen"
echo "<br>";

// Instansiasi objek mahasiswa1
$mahasiswa1 = new Mahasiswa();
echo $mahasiswa1->aksesFitur(); // Mengembalikan string "Mahasiswa"
?>
```
• Output <br>
![image](https://github.com/user-attachments/assets/d6085d9d-32dc-4ebc-a121-eabb5b1e8a02)
<br>


## Modul 3
### Pendahuluan 
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance, Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

### Jobsheet 3
Pada jobsheet 3 saya menerapkan prinsip OOP dalam pemrograman PHP melalui tugas yang mengintegrasikan konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction. <br>
• Contoh Coding 
```php
<?php
// Mendefinisikan Kelas Person  
class Person {
    private $name; // Atribut untuk menyimpan data name (hanya bisa diakses di kelas ini)

    // Konstruktor
    public function __construct($name) {
        $this->name = $name; // Memasukkan data ke atribut name
    }

    // Method untuk mengambil data name
    public function getName() {
        return $this->name; // Mengembalikan atribut name
    }

    // Method untuk mengubah data name
    public function setName($name) {
        $this->name = $name; // Memasukkan data ke atribut name
    }

    // Method getRole 
    public function getRole () {
        return "I am"; // Mengembalikan string "I am"        
    }
}

// Mendefinisikan kelas Student yang merupakan turunan dari kelas Person
class Student extends Person {
    private $studentID; // Atribut untuk menyimpan data studentID (hanya bisa diakses di kelas ini)

    // Konstruktor
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil konstruktor dari kelas parent (Person)
        $this->studentID = $studentID; // Memasukkan data ke atribut studentID
    }

    // Method untuk mengambil data studentID
    public function getStudentID() {
        return $this->studentID; // Mengembalikan atribut studentID
    }

    // Method untuk mengubah data studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID; // Memasukkan data ke atribut studentID
    }

    // Method untuk mengambil data name
    public function getName() {
        return parent::getName(). " idnya "; // Mengembalikan atribut name
    }

    // Method untuk mengubah data name
    public function setName($name) {
        parent::setName($name); // Memasukkan data ke atribut name
    }
}

// Mendefinisikan kelas Teacher yang merupakan turunan dari kelas Person
class Teacher extends Person {
    public $teacherID; // Atribut untuk menyimpan data teacherID

    // Konstruktor
    public function __construct ($name, $teacherID) {
        parent::__construct($name); // Memanggil konstruktor dari kelas parent (Person)
        $this->teacherID = $teacherID; // Memasukkan data ke atribut teacherID
    }

    // Method untuk mengambil data teacherID
    public function getName() {
        return parent::getName(). " punya id ". $this->teacherID; // Mengembalikan atribut name
    }

    // Method untuk mengubah data name
    public function setName($name) {
        parent::setName($name); // Memasukkan data ke atribut name
    }

    // Method untuk mengambil data teacherID
    public function getTeacherID() {    
        return $this->teacherID; // Mengembalikan atribut teacherID
    }

    // Method untuk mengubah data teacherID
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID; // Memasukkan data ke atribut teacherID
    }
}

// Mendefinisikan kelas Dosen yang merupakan turunan dari kelas Person
class Dosen extends Person {
    private $nidn; // Atribut untuk menyimpan data nidn (hanya bisa diakses di kelas ini)

    // Konstruktor
    public function __construct($name, $nidn) {
        parent::__construct($name); // Memanggil konstruktor dari kelas parent (Person)
        $this->nidn = $nidn; // Memasukkan data ke atribut nidn
    }

    // Method untuk mengambil data nidn
    public function getRole() {
        return parent::getRole() . " Dosen";
    }
}

// Mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas Person
class Mahasiswa extends Person {
    private $nim; // Atribut untuk menyimpan data nim (hanya bisa diakses di kelas ini)

    // Konstruktor
    public function __construct($name, $nim) {
        parent::__construct($name); // Memanggil konstruktor dari kelas parent (Person)
        $this->nim = $nim; // Memasukkan data ke atribut nim
    }

    // Method untuk mengambil data nim
    public function getRole() {
        return parent::getRole() . " Mahasiswa";
    }
}

// Mendefinisikan kelas abstrak Course  
abstract class Course {
    abstract public function getCourseDetails(); // Abstract method
}

// Mendefinisikan kelas OnlineCourse yang merupakan turunan dari kelas Course
class OnlineCourse extends Course {

    // Implementasi abstract method
    public function getCourseDetails() {
        return "Online Course"; // Mengembalikan string "Online Course"
    }
}

// Mendefinisikan kelas OfflineCourse yang merupakan turunan dari kelas Course
class OfflineCourse extends Course {

    // Implementasi abstract method
    public function getCourseDetails() {
        return "Offline Course"; // Mengembalikan string "Offline Course"
    }
}

// Mendefinisikan kelas abstrak Jurnal
abstract class Jurnal {
    abstract public function pengajuan(); // Abstract method
}

// Mendefinisikan kelas JurnalDosen yang merupakan turunan dari kelas Jurnal
class JurnalDosen extends Jurnal {

    // Implementasi abstract method
    public function pengajuan() {
        return "Jurnal Dosen"; // Mengembalikan string "Jurnal Dosen"
    }
}

// Mendefinisikan kelas JurnalMahasiswa yang merupakan turunan dari kelas Jurnal
class JurnalMahasiswa extends Jurnal {

    // Implementasi abstract method
    public function pengajuan() {
        return "Jurnal Mahasiswa"; // Mengembalikan string "Jurnal Mahasiswa"
    }
}

// Instansiasi objek student1 dari kelas Student
$student1 = new Student("Andi", "123456") ;
echo "<h3> Student </h3>";
echo $student1->getName(); // Memanggil method getName untuk mengambil data name
echo $student1->getStudentID() . "<br>";  // Memanggil method getStudentID untuk mengambil data studentID

echo $student1->setName("Inda"); // Memanggil method setName untuk mengubah data name
echo $student1->setStudentID("654321"); // Memanggil method setStudentID untuk mengubah data studentID
echo $student1->getName(); // Memanggil method getName untuk mengambil data name
echo $student1->getStudentID() ."<br> <br>";

// Instansiasi objek teacher1 dari kelas Teacher
$teacher1 = new Teacher("Budi", "778899"); 
echo "<h3> Teacher </h3>"; 
echo $teacher1->getName(); // Memanggil method getName untuk mengambil data name
echo $teacher1->getTeacherID() . "<br>"; // Memanggil method getTeacherID untuk mengambil data teacherID

echo $teacher1->setName("Caca"); // Memanggil method setName untuk mengubah data name
echo $teacher1->setTeacherID("112233"); // Memanggil method setTeacherID untuk mengubah data teacherID
echo $teacher1->getName(); // Memanggil method getName untuk mengambil data name
echo $teacher1->getTeacherID(); // Memanggil method getTeacherID untuk mengambil data teacherID
?>
```

• Output <br>
![image](https://github.com/user-attachments/assets/774b9fbc-ca84-42c2-a1ff-9dc3c928f3e4)
