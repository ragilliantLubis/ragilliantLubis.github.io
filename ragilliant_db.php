CREATE DATABASE soal_pilihan_ganda;

USE soal_pilihan_ganda;

CREATE TABLE soal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pertanyaan TEXT NOT NULL,
    opsi_a VARCHAR(255) NOT NULL,
    opsi_b VARCHAR(255) NOT NULL,
    opsi_c VARCHAR(255) NOT NULL,
    opsi_d VARCHAR(255) NOT NULL,
    jawaban CHAR(1) NOT NULL
);

                
