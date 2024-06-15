# DESCRIZIONE
Continuate lo sviluppo della web-app ma implementando la persistenza dei dati.
Vi consiglio di seguire le milestone.
# MILESTONE 1
Ricalcate i passaggi visti in mattinata: spostate l'array da PHP ad un file JSON, adeguando la sintassi al nuovo formato.
Leggete il contenuto del file e restituitelo (con echo) quando arriva la chiamata che deve ottenere la lista dei risultati.
Rinominate questo file come list.php e aggiornate la chiamata axios di conseguenza.
# MILESTONE 2
- Creare un nuovo file create.php che sarà l'endpoint della vostra API da richiamare per aggiungere un ToDo.
- Questo file dovrà controllare la presenza dei dati necessari nel $_POST e poi usarli per creare un nuovo ToDo.
- A questo punto ricordate il giro:
- leggo il testo presente nel file JSON su disco
- lo converto da JSON ad Array PHP
- aggiungo il nuovo studente nell'array
- riconverto in JSON
- scrivo nuovamente su file
- Completato il giro stampate il contenuto del file aggiornato.

# BONUS
- Create un nuovo file delete.php che andrà chiamato quando vogliamo eliminare un task dalla lista. In questo caso cosa dovremo passare al backend? Ci basta l'indice del task da rimuovere in array. Anche questo endpoint potrebbe restituire la lista dei file aggiornata.
- Creare un ulteriore nuovo file updateTask.php da chiamare per modificare un task da done: true a done: false . Anche qui possiamo ricalcare la logica usata nel delete, ma invece di rimuovere l'elemento dall'array, ne andremo a modificare una proprietà.
- Se volete, potete provare a unire tutti i metodi in un unico file api.php che in base ai dati presenti nel $_POST dovrà capire cosa fare: list, create, delete o update. All'inizio aiutatevi facendo var_dump di cosa vi arriva e ragionando bene su come distinguere le casistiche.