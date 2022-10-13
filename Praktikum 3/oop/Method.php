<?php

# membuat class
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat method
    public function setNama($data)
    {
        $this->nama = $data;
    }
    public function getNama(){
        return $this->nama;
    }
}

# membuat object
$Faisal = new Person ();
$ismail = new Person ();

# mengakses method
$Faisal->setNama('M.Faisal Umar');
echo $Faisal->getNama();

echo "<br>";
$ismail->nama = "Ismail yusuf";
echo $ismail->getNama();