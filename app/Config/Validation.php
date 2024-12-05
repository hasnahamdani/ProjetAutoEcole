<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public $ruleSets = [
        \CodeIgniter\Validation\Rules::class,
        \CodeIgniter\Validation\FileRules::class,
        \CodeIgniter\Validation\FormatRules::class,
        \CodeIgniter\Validation\CreditCardRules::class,
        \Myth\Auth\Authentication\Passwords\ValidationRules::class, // Ajoutez cette ligne
    ];
    
=======
=======
>>>>>>> b89bed5c559c1a136074bf6185f35c42fa522a5b
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];
<<<<<<< HEAD
>>>>>>> b3da94a285d2918939ed59599fb917cd18b2fb04
=======
>>>>>>> b89bed5c559c1a136074bf6185f35c42fa522a5b

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
