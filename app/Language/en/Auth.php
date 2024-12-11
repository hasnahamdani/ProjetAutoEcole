<?php

namespace Myth\Auth\Language\en;

return [
    // Exceptions
    'invalidModel'        => 'Le modèle {0} doit être chargé avant utilisation.',
    'userNotFound'        => 'Impossible de localiser un utilisateur avec l\'ID = {0, number}.',
    'noUserEntity'        => 'L\'entité utilisateur doit être fournie pour la validation du mot de passe.',
    'tooManyCredentials'  => 'Vous ne pouvez valider qu\'un seul identifiant autre qu\'un mot de passe.',
    'invalidFields'       => 'Le champ "{0}" ne peut pas être utilisé pour valider les identifiants.',
    'unsetPasswordLength' => 'Vous devez définir le paramètre `minimumPasswordLength` dans le fichier de configuration Auth.',
    'unknownError'        => 'Désolé, nous avons rencontré un problème lors de l\'envoi de l\'email. Veuillez réessayer plus tard.',
    'notLoggedIn'         => 'Vous devez être connecté pour accéder à cette page.',
    'notEnoughPrivilege'  => 'Vous n\'avez pas les autorisations suffisantes pour accéder à cette page.',

    // Registration
    'registerDisabled' => 'Désolé, les comptes utilisateurs ne sont pas autorisés pour le moment.',
    'registerSuccess'  => 'Bienvenue à bord ! Veuillez vous connecter avec vos nouveaux identifiants.',
    'registerCLI'      => 'Nouvel utilisateur créé : {0}, #{1}',

    // Activation
    'activationNoUser'       => 'Impossible de localiser un utilisateur avec ce code d\'activation.',
    'activationSubject'      => 'Activez votre compte',
    'activationSuccess'      => 'Veuillez confirmer votre compte en cliquant sur le lien d\'activation dans l\'email que nous avons envoyé.',
    'activationResend'       => 'Renvoyer le message d\'activation.',
    'notActivated'           => 'Ce compte utilisateur n\'est pas encore activé.',
    'errorSendingActivation' => 'Impossible d\'envoyer le message d\'activation à : {0}',

    // Login
    'badAttempt'      => 'Impossible de vous connecter. Veuillez vérifier vos identifiants.',
    'loginSuccess'    => 'Bon retour parmi nous !',
    'invalidPassword' => 'Impossible de vous connecter. Veuillez vérifier votre mot de passe.',

    // Forgotten Passwords
    'forgotDisabled'  => 'L\'option de réinitialisation du mot de passe a été désactivée.',
    'forgotNoUser'    => 'Impossible de localiser un utilisateur avec cet email.',
    'forgotSubject'   => 'Instructions de réinitialisation du mot de passe',
    'resetSuccess'    => 'Votre mot de passe a été modifié avec succès. Veuillez vous connecter avec le nouveau mot de passe.',
    'forgotEmailSent' => 'Un jeton de sécurité vous a été envoyé par email. Entrez-le dans la case ci-dessous pour continuer.',
    'errorEmailSent'  => 'Impossible d\'envoyer l\'email avec les instructions de réinitialisation à : {0}',
    'errorResetting'  => 'Impossible d\'envoyer les instructions de réinitialisation à {0}',

    // Passwords
    'errorPasswordLength'         => 'Les mots de passe doivent comporter au moins {0, number} caractères.',
    'suggestPasswordLength'       => 'Les phrases de passe - jusqu\'à 255 caractères - permettent de créer des mots de passe plus sûrs et plus faciles à mémoriser.',
    'errorPasswordCommon'         => 'Le mot de passe ne doit pas être un mot de passe courant.',
    'suggestPasswordCommon'       => 'Le mot de passe a été vérifié parmi plus de 65 000 mots de passe courants ou ayant été divulgués lors de piratages.',
    'errorPasswordPersonal'       => 'Les mots de passe ne peuvent pas contenir d\'informations personnelles hachées.',
    'suggestPasswordPersonal'     => 'Les variations de votre adresse email ou nom d\'utilisateur ne doivent pas être utilisées pour les mots de passe.',
    'errorPasswordTooSimilar'     => 'Le mot de passe est trop similaire au nom d\'utilisateur.',
    'suggestPasswordTooSimilar'   => 'Ne pas utiliser de parties de votre nom d\'utilisateur dans votre mot de passe.',
    'errorPasswordPwned'          => 'Le mot de passe {0} a été exposé lors d\'une fuite de données et a été vu {1, number} fois dans {2} mots de passe compromis.',
    'suggestPasswordPwned'        => '{0} ne doit jamais être utilisé comme mot de passe. Si vous l\'utilisez quelque part, changez-le immédiatement.',
    'errorPasswordPwnedDatabase'  => 'une base de données',
    'errorPasswordPwnedDatabases' => 'des bases de données',
    'errorPasswordEmpty'          => 'Un mot de passe est requis.',
    'passwordChangeSuccess'       => 'Mot de passe changé avec succès',
    'userDoesNotExist'            => 'Le mot de passe n\'a pas été changé. L\'utilisateur n\'existe pas',
    'resetTokenExpired'           => 'Désolé. Votre jeton de réinitialisation a expiré.',

    // Groups
    'groupNotFound' => 'Impossible de localiser le groupe : {0}.',

    // Permissions
    'permissionNotFound' => 'Impossible de localiser l\'autorisation : {0}',

    // Banned
    'userIsBanned' => 'L\'utilisateur a été banni. Contactez l\'administrateur',

    // Too many requests
    'tooManyRequests' => 'Trop de demandes. Veuillez patienter {0, number} secondes.',

    // Login views
    'home'                      => 'Accueil',
    'current'                   => 'Courant',
    'forgotPassword'            => 'Mot de passe oublié ?',
    'enterEmailForInstructions' => 'Pas de problème ! Entrez votre email ci-dessous et nous vous enverrons des instructions pour réinitialiser votre mot de passe.',
    'email'                     => 'Email',
    'emailAddress'              => 'Adresse Email',
    'sendInstructions'          => 'Envoyer les instructions',
    'loginTitle'                => 'Se connecter',
    'loginAction'               => 'Se connecter',
    'rememberMe'                => 'Se souvenir de moi',
    'needAnAccount'             => 'Vous n\'avez pas de compte ?',
    'forgotYourPassword'        => 'Mot de passe oublié ?',
    'password'                  => 'Mot de passe',
    'repeatPassword'            => 'Répétez le mot de passe',
    'emailOrUsername'           => 'Email ou Nom d\'utilisateur',
    'username'                  => 'Nom d\'utilisateur',
    'register'                  => 'S\'inscrire',
    'signIn'                    => 'Se connecter',
    'alreadyRegistered'         => 'Déjà inscrit ?',
    'weNeverShare'              => '',
    'resetYourPassword'         => 'Réinitialisez votre mot de passe',
    'enterCodeEmailPassword'    => 'Entrez le code que vous avez reçu par email, votre adresse email et votre nouveau mot de passe.',
    'token'                     => 'Jeton',
    'newPassword'               => 'Nouveau mot de passe',
    'newPasswordRepeat'         => 'Répétez le nouveau mot de passe',
    'resetPassword'             => 'Réinitialiser le mot de passe',
];
