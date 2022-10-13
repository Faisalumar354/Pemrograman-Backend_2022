<?php

# membuat class Animal
class Animals
{
  # property animals
  public $binatang;
  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data)
  {
    $this->binatang = $data;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->binatang as $animals){
        echo $animals. "<br>";
    }
    echo "<hr>";
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($binatang)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->binatang, $binatang);
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $binatang)
  {
    $this->binatang[$index] = $binatang;
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    unset($this->binatang[$index]);
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$binatang = new Animals(['Anjing', 'Babi', 'Monyet']);

echo "Index - Menampilkan seluruh hewan <br>";
$binatang->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$binatang->store('burung');
$binatang->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$binatang->update(0, 'Kucing Anggora');
$binatang->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$binatang->destroy(1);
$binatang->index();
echo "<br>";
?>