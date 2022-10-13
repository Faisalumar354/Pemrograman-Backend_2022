<?php

// Jika nilai diatas 90, Dapat A
// Jika nilai diatas 80, Dapat B
// Jika nilai diatas 75, Dapat B+
// Selain itu Dapat 
$nilai = 95;

if ($nilai > 90 ) {
    echo "Nilai Anda A";
}   else if ($nilai > 80 ) {
    echo "Nilai Anda B";
}   else {
    echo "Nilai Anda C";
}