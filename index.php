<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi,
 oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce.
 Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili
 solo in un periodo particolare (es. da maggio ad agosto).
*/
class e_commerce
{
    public $nome;
    function __construct($_name)
    {
        $this->nome = $_name;
    }
}

class prodotto extends e_commerce
{
    public $settore;
    public $nomeProdotto;
    public $periodoDiDisponibilita;
    public $prezzo;
    function __construct($_settore, $_nomeProdotto, $_prezzo)
    {
        $this->nome = $_settore;
        $this->nomeProdotto = $_nomeProdotto;
        $this->prezzo = $_prezzo;
    }
}
class pagamenti extends e_commerce
{
    public $nomeCarta;
    public $banca;
    public $iban;
}
class utente extends e_commerce
{
    public $nomeUtente;
    public $cognomeUtente;
    public $codiceFiscale;
    public $registrato; //tipo booleano, true o false
    public $carrello; //totale dei prodotti che vuole acquistare
    public $prodottoDaAcquistare;
    public $prodottiAcquistati;
    function __construct($_name, $_cognome, $_codiceFiscale)
    {
        $this->nome = $_name;
        $this->cognome = $_cognome;
        $this->codiceFiscale = $_codiceFiscale;
    }
    function set($_carrello)
    {
        $this->carrello = $_carrello;
    }
    function sconto()
    {
        if ($this->registrato == true) {
            $prezzoFinale = $carrello * 20 / 100;
            return $carrello = -$prezzoFinale;
        }
    }
}
class cartaDiCredito extends utente
{
    public $nomeTitolare;
    public $scadenza;
    public $numeroCarta;
    public $iban;
    public $cvv;
    public $scaduta;


}
?>

<h1>OOP_2</h1>