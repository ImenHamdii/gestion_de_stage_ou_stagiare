Use stage;

Create TABLE liste (
    cin INTEGER(9) NOT NULL PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    department VARCHAR(30) NOT NULL,
    telephone INTEGER(5) NOT NULL,
    debut DATE NOT NULL,
    fin DATE NOT NULL,
    stage VARCHAR(10) NOT NULL,
    pdf LONGTEXT NOT NULL,
    mail VARCHAR(30) NOT NULL
); 
Create TABLE Admin (
    nom  VARCHAR(30) NOT NULL,
    cin INTEGER(9) NOT NULL PRIMARY KEY,
    telephone INTEGER(5) NOT NULL,
    age INTEGER(5) NOT NULL,
    pwd VARCHAR(30) NOT NULL,
    photo BLOB

); 

Create TABLE accepter (
    cin INTEGER(9) NOT NULL PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    department VARCHAR(30) NOT NULL,
    telephone INTEGER(5) NOT NULL,
    debut DATE NOT NULL,
    fin DATE NOT NULL,
    stage VARCHAR(10) NOT NULL,
    pdf LONGTEXT NOT NULL,
    email VARCHAR(30) NOT NULL
); 
Create TABLE refuser (
    cin INTEGER(9) NOT NULL PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    department VARCHAR(30) NOT NULL,
    telephone INTEGER(5) NOT NULL,
    debut DATE NOT NULL,
    fin DATE NOT NULL,
    stage VARCHAR(10) NOT NULL,
    pdf LONGTEXT NOT NULL,
    email VARCHAR(30) NOT NULL
); 
