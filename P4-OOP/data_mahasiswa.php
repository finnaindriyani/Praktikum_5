<?php
    require_once ('class_mahasiswa.php');

    $mahasiswa = new Mahasiswa(123,'fia',3);

    echo 'Nama : '.$mahasiswa->nama.'</br>';
    echo 'Predikat : '.$mahasiswa->predikat_ipk().'</br>';
    echo 'NIM : '.$mahasiswa->nim.'</br>';
    echo 'IPK : '.$mahasiswa->ipk.'</br>';
?>