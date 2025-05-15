Buat folder nama_npm

Taro folder di htdocs atau www

buat file index.php

ganti nama database di line 5

buat database, untuk kode dibawah ini:

CREATE DATABASE nama_npm;
USE DATABASE nama_npm;

CREATE TABLE mhs (
    id_mhs INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20),
    nama VARCHAR(100),
    alamat TEXT,
    prodi VARCHAR(50)
);
