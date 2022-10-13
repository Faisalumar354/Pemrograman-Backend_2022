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
}

# membuat object
$Faisal = new Person ();
$ismail = new Person ();

# mengakses property
$Faisal->nama = "M.Faisal Umar";
echo $Faisal->nama;

echo "<br>";
$ismail->nama = "Ismail yusuf";
echo $ismail->nama;

# mengakses method
echo "<br>";
$Faisal->setNama('Faisal');
echo $Faisal->nama;