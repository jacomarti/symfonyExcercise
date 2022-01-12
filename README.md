# Esercizio "postcards" - versione symfony

## Richieste dell'esercizio

* come utente, posso inserire il nome e l'indirizzo e-mail di un destinatario
* come utente, posso inserire un messaggio personalizzato
* come utente, posso scegliere una parola chiave corrispondente all'evento
* il sistema seleziona un'immagine casuale da un elenco (o da un servizio online) in base alla parola chiave selezionata
* il sistema costruisce un messaggio e-mail con l'immagine e il messaggio personalizzato e lo invia al destinatario

## Descrizione del progetto

### Controller

Viene usato un unico controller, SendPostcardController, che si occupa delle richieste effettuate
In esso vi troviamo due metodi pubblici:

* **index()** usato per le richieste GET e, quindi, per renderizzare l'applicativo con il form
* **submitData()** usato per le richieste POST e, quindi, per inviare l'email
Inoltre vi sono 6 metodi privati utilizzati dai metodi pubblici

### Routing

Il routing viene effettuato perlopiù tramite gli attributes del controller
Unica eccezione fa il routing della root a che subisce un redirect verso "/sendPostcard" tramite "/config/routes.yaml"
In generale, la situazione del routing è la seguente:

| Name            | Method | Scheme | Host | Path          |
|-----------------|--------|--------|------|---------------|
| send_postcard   |  GET   | ANY    | ANY  | /sendPostcard |
| submit_postcard | POST   | ANY    | ANY  | /sendPostcard |
| index           | ANY    | ANY    | ANY  | /             |

### Template engine

Come template engine ho usato twig

### Testing

Per effettuare il testing mi sono servito sia del comando `symfony serve` per eseguire l'applicativo che del programma [MailSlurper](https://www.mailslurper.com/) per creare un server smtp per provare la funzione di invio mail

### Requirements

* Symfony

* PHP 8.0.14 or higher

Sono installati dei bundle, pertanto bisogna eseguire un `composer install`
