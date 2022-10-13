<?php

# membuat fungsi
function hitungluaslingkaran($jari)
{
    $phi = 3.14;
    $hasil = $phi * $jari * $jari;
    return $hasil;
}

# memanggil 1
echo hitungluaslingkaran(5);
echo "<br>";
echo hitungluaslingkaran(7);