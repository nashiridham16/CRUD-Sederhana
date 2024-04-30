<?php
include_once("m_programKerja.php");
class c_programKerja
{
    public $model;
    public function __construct()
    {
        $this->model = new m_programKerja();
    }
    public function add($nomorProgram,$namaProgram,$suratKeterangan) {
        $this->model->setProgramKerja($nomorProgram,$namaProgram,$suratKeterangan);
        header('Location: index.php');
    }
    public function delete($nomorProgram)
    {
        $this->model->deleteProgramKerja($nomorProgram);
        header('Location:index.php');
    }
    public function edit($nomorProgram,$namaProgram,$suratKeterangan) {
        $this->model->editProgramKerja($nomorProgram,$namaProgram,$suratKeterangan);
        header('Location: index.php');
    }
    public function invoke()
    {
        $proker = $this->model->getSemuaProgramKerja();
        include
        'v_programKerja.php';
    }
}
