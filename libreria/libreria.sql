create database libreria;
-- Crea la tabella con un campo per l'anno di pubblicazione come intero
CREATE TABLE libreria.libri (
    titolo VARCHAR(20),
    autore VARCHAR(20),
    genere VARCHAR(20),
    prezzo DECIMAL(5,2),
    anno_pubblicazione INT
);
-- Inserisci i dati nella tabella libreria.libri
INSERT INTO libreria.libri (titolo, autore, genere, prezzo, anno_pubblicazione) VALUES
('Il Nome della Rosa', 'Umberto Eco', 'Romanzo', 9.99, 1980),
('Orgoglio e Pregiudizio', 'Jane Austen', 'Romanzo', 7.99, 1813),
('Il Signore degli Anelli', 'J.R.R. Tolkien', 'Fantasy', 24.99, 1954),
('Harry Potter', 'J.K. Rowling', 'Fantasy', 19.99, 1997),
('Il Piccolo Principe', 'Antoine de Saint-Exupéry', 'Fiaba', 5.99, 1943),
('1984', 'George Orwell', 'Distopia', 8.99, 1949),
('Don Chisciotte', 'Miguel de Cervantes', 'Romanzo', 11.99, 1605),
('Cime Tempestose', 'Emily Brontë', 'Romanzo', 6.99, 1847),
('Moby-Dick', 'Herman Melville', 'Avventura', 12.99, 1851),
('La Divina Commedia', 'Dante Alighieri', 'Poema', 14.99, 1320);
