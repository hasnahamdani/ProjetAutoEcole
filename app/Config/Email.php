<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    // Configuration de l'email
    public $fromEmail = 'hamdanihasna610@gmail.com'; // Adresse email de l'expéditeur
    public $fromName = 'AUTO'; // Nom de l'expéditeur
    public $recipients = ['hasnahs463@gmail.com']; // Liste des destinataires

    // Configuration du serveur SMTP
    public $SMTPHost = 'smtp.elasticemail.com'; // Serveur SMTP
    public $SMTPUser = 'hamdanihasna610@gmail.com'; // Nom d'utilisateur SMTP (ou email)
    public $SMTPPass = '85A81EA2BB04FDDDF2E61C2AD125D4FAA5404C585AF6110BC5230783A1AF3134793F017B39B883435A40BF8B9FE2BC72'; // Clé API ou mot de passe SMTP
    public $SMTPPort = 587; // Port pour TLS (ou 465 pour SSL)
    public $SMTPTimeout = 60; // Timeout du serveur SMTP
    public $SMTPCrypto = 'tls'; // Chiffrement (TLS ou SSL)

    // Autres paramètres
    public $mailType = 'html'; // Type d'email (html ou texte)
    public $charset = 'UTF-8'; // Encodage des caractères
}
