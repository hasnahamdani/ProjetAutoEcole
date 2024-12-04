<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class TestEmailController extends Controller
{
    public function sendEmail()
    {
        // Charger la bibliothèque Email avec la configuration par défaut
        $email = Services::email();

        // Récupérer les valeurs depuis le fichier .env (ou valeurs par défaut si elles sont vides)
        $fromEmail = env('email.fromEmail') ?: 'hamdanihasna610@gmail.com';
        $fromName = env('email.fromName') ?: 'Nom Par Défaut';

        // Configuration de l'email
        $email->setFrom($fromEmail, $fromName);

        // Destinataires (assurez-vous que cette liste n'est pas vide)
        $recipients = ['hasnahs463@gmail.com']; // Liste des destinataires
        $email->setTo($recipients);

        // Sujet et message de l'email
        $email->setSubject('Test d\'envoi d\'e-mail avec Elastic Email');
        $email->setMessage('<p>Ceci est un e-mail de test envoyé via CodeIgniter 4 et Elastic Email.</p>');

        // Configuration SMTP
        $config = [
            'protocol' => 'smtp',
            'SMTPHost' => env('email.SMTPHost'),
            'SMTPUser' => env('email.SMTPUser'),
            'SMTPPass' => env('email.SMTPPass'),
            'SMTPPort' => env('email.SMTPPort'),
            'SMTPCrypto' => env('email.SMTPCrypto'),
            'mailType' => env('email.mailType'),
            'charset'  => env('email.charset'),
        ];

        // Initialisation de la configuration
        $email->initialize($config);

        // Envoi de l'email et gestion des erreurs
        if ($email->send()) {
            echo 'E-mail envoyé avec succès.';
        } else {
            echo 'Erreur lors de l\'envoi de l\'e-mail.';
            // Affichage des erreurs pour le débogage
            print_r($email->printDebugger(['headers', 'subject', 'message', 'recipients']));
        }
    }
}
