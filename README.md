# GjacBot SQL

× GjacBot è un framework php per lo sviluppo di bot Telegram.

× La base è scritta per la totale sicurezza nell'esecuzione infatti, non c'è modo per attaccarla e per questo è utilizzabile per la creazione di bot importanti.

× Inoltre può essere utilizzata su ogni versione di php (è consigliato però eseguirlo dalla php7.0 in poi) e si ha la scelta se utilizzarlo con il database mysql (per il salvataggio di dati, per esempio) o senza.

# INSTALLAZIONE

× Modificare il file webhook.php inserendo token e url bot.php e dal browser aprirlo.
× Se non vuoi usare il Database MySQL, basta togliere la linea di codice:
`$bot->useDatabase(
'localhost',
'testad',
'',
'my_testad'
);`

A questo punto il vostro bot è pronto, potrete avviarlo e vedere i comandi e le funzioni! 👍 
