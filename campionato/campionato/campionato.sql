Si devono gestire i dati relativi a un campionato automobilistico: è necessario registrare le informazioni relative ai piloti(nome,cognome,nazionalità e numero), alle case automobilistiche (nome e colore della livrea), ai risultati di ogni gara e alla classifica generale (per pilota e per squadra), ricordando che un pilota può correre solo per una  determinata casa nell'arco del campionato e che ogni casa può avere più piloti. Realizzare un'applicazione (front-end e back-end) che permetta di:
- inserire tutti i dati richiesti nella fase di iscrizione al campionato;
- aggiornare e visualizzare le due classifiche generali durante la stagione agonistica;
- visualizzare il risultato di una determinata gara (ordine di arrivo e tempo più veloce in gara).
NOTA: lo schema concettuale deve essere realizzato con DRAWIO (drawio.com); come schema relazionale può essere presentato quello di DBeaver (screenshot).

CREATE DATABASE campionato;
CREATE TABLE campionato.casa_automobilistica(
nome varchar(30) PRIMARY KEY unique NOT null,
colore_livrea varchar(20)
);
CREATE TABLE campionato.pilota(
nome varchar(20),
cognome varchar(20),
nazionalita varchar(30),
numero int PRIMARY KEY UNIQUE NOT null,
nome_casa varchar(20),
foreign key (nome_casa) references campionato.casa_automobilistica(nome) 
);
CREATE TABLE campionato.gara(
circuito varchar(20) ,
data_gara date,
CONSTRAINT pk_gara PRIMARY KEY (circuito, data_gara)
);
CREATE TABLE campionato.gareggia(
n_pilota int,
punteggio int,
circuito varchar(20),
data_gara date,
CONSTRAINT pk_gareggia PRIMARY key(data_gara,circuito,n_pilota),
FOREIGN KEY (n_pilota) references campionato.pilota (numero),
CONSTRAINT fk_gara FOREIGN KEY(circuito, data_gara) REFERENCES campionato.gara(circuito,data_gara)
);