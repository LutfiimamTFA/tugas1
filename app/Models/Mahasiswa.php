<?php

class Mahasiswa {
    private $id;
    private $nama;
    private $nim;
    private $prodi;
    private $universitas;
    private $jenis_kelamin;

    // Constructor
    public function __construct($nama, $nim, $prodi, $universitas, $jenis_kelamin) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->universitas = $universitas;
        $this->jenis_kelamin = $jenis_kelamin;
    }

    // Getter dan Setter untuk setiap properti
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }

    public function getUniversitas() {
        return $this->universitas;
    }

    public function setUniversitas($universitas) {
        $this->universitas = $universitas;
    }

    public function getJenisKelamin() {
        return $this->jenis_kelamin;
    }

    public function setJenisKelamin($jenis_kelamin) {
        $this->jenis_kelamin = $jenis_kelamin;
    }
}
?>
