<?php
include_once("c_programKerja.php");
$controller = new c_programKerja();
if (isset($_POST['add'])) {
    $nomorProgram = $_POST['nomor'];
    $namaProgram = $_POST['nama'];
    $suratKeterangan = $_POST['surat'];
    $controller->add($nomorProgram,$namaProgram,$suratKeterangan);
} else if (isset($_POST['edit'])) {
    $nomorProgram = $_POST['nomor'];
    $namaProgram = $_POST['nama'];
    $suratKeterangan = $_POST['surat'];
    $controller->edit($nomorProgram,$namaProgram,$suratKeterangan);
} else if (isset($_GET['delete'])) {
    $nomorProgram = $_GET['nomor'];
    $controller->delete($nomorProgram);
} else {
    $controller->invoke();
}

