<?php
class m_programKerja
{
    private $mysqli;
    public $hasil = array();
    public function __construct()
    {
        require "koneksiMVC.php";
    }
    public function
    setProgramKerja(
        $nomorProgram,
        $namaProgram,
        $suratKeterangan
    ) {
        require "koneksiMVC.php";
        $rs = $mysqli->query("INSERT INTO proker VALUES (nomorProgram ,'$namaProgram','$suratKeterangan')");
    }
    public function getSemuaProgramKerja()
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM proker");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil[] = $rows;
        return $this->hasil;
    }
    public function
    editProgramKerja(
        $nomorProgram,
        $namaProgram,
        $suratKeterangan
    ) {
        require "koneksiMVC.php";
        $rs = $mysqli->query("UPDATE proker SET namaProgram = '$namaProgram',suratKeterangan ='$suratKeterangan' WHERE nomorProgram = $nomorProgram");
    }
    public function deleteProgramKerja($nomorProgram)
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("DELETE FROM proker WHERE nomorProgram = '$nomorProgram'");
    }
}
