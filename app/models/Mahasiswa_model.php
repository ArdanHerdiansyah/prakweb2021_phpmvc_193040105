<?php

class Mahasiswa_model {

    // cara konek ke databse
    //database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040105';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {    
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // private $mhs = [
    //     [
    //         "nama" => "Ardan Herdiansyah",
    //         "nrp" => "193040105",
    //         "email" => "ArdanHerdiansyah@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Riksa Kusumah",
    //         "nrp" => "193040078",
    //         "email" => "Riksa@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Jagaddhita",
    //         "nrp" => "193040098",
    //         "email" => "Jagaddhita@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    // ];

    
}