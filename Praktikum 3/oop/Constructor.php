<?php

# membuat class
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama,$alamat,$jurusan)
    {
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->alamat = $alamat;
    }

    # membuat method
    public function setNama($data)
    {
        $this->nama = $data;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getjurusan()
    {
        return $this->jurusan;
    }
}

# membuat object
$Faisal = new Person ("M.Faisal Umar","Depok","Teknik Informatika");
$ismail = new Person ("Ismail Yusuf","Bekasi","Sistem Informasi");

# mengakses method
$Faisal->setNama('M.Faisal Umar');
echo $Faisal->getNama();
echo $Faisal->getjurusan();

echo "<br>";
$ismail->nama = "Ismail yusuf";
echo $ismail->getNama();
echo $ismail->getjurusan();
