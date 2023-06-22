CREATE DATABASE garageParrot;

CREATE TABLE
    avis (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(255) NOT NULL,
        commentaire LONGTEXT NOT NULL,
        note INT NOT NULL,
        approuve BOOLEAN DEFAULT 0
    );

CREATE TABLE
    cars (
        id INT PRIMARY KEY AUTO_INCREMENT,
        marque VARCHAR(50),
        modele VARCHAR(50),
        annee INT DEFAULT NULL,
        kilometres INT,
        carburant VARCHAR(50),
        boite_de_vitesse VARCHAR(50),
        prix INT
    );

CREATE TABLE
    images (
        id INT AUTO_INCREMENT PRIMARY KEY,
        car_id int(11),
        image_base64 LONGTEXT,
        FOREIGN KEY (car_id) REFERENCES cars(id) ON DELETE CASCADE
    );

CREATE TABLE
    employes (
        id INT PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(80),
        password LONGTEXT,
        isAdmin TINYINT(1)
    );

INSERT INTO employes (id, email, password, isAdmin)
VALUES (0, 'Vparrot@gmail.com', 'Vparrot31500', 1);

CREATE TABLE
    horaires (
        id INT PRIMARY KEY AUTO_INCREMENT,
        lundi_vendredi VARCHAR(100),
        samedi VARCHAR(100)
    );

CREATE TABLE
    services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titre VARCHAR(255) NOT NULL,
        paragraphe VARCHAR(5000) NOT NULL
    );

CREATE TABLE
    imageService (
        id INT AUTO_INCREMENT PRIMARY KEY,
        service_id INT NOT NULL,
        image_base64 LONGTEXT NOT NULL,
        FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
    );

CREATE TABLE
    messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        prenom VARCHAR(50) NOT NULL,
        nom VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        sujet VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        telephone VARCHAR(50) NOT NULL
    );
