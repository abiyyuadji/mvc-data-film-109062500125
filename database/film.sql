CREATE DATABASE IF NOT EXISTS film_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE film_db;

CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    tahun_rilis YEAR NOT NULL,
    durasi INT NOT NULL,
    sutradara VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO film 
(judul, genre, tahun_rilis, durasi, sutradara)
VALUES
('Interstellar', 'Sci-Fi', 2014, 169, 'Christopher Nolan'),
('Inception', 'Sci-Fi', 2010, 148, 'Christopher Nolan'),
('Parasite', 'Drama', 2019, 132, 'Bong Joon-ho');