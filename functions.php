<?php
/**
 * Tema WordPress di base basato su Timber e
 * Advanced Custom Fields per Mohole.
 */

use Timber\Timber;

// Importa le dipendenze installate con Composer.
require_once __DIR__ . "/vendor/autoload.php";

require_once __DIR__ . "/src/StarterSite.php";

// Inizializza Timber
Timber::init();

// Imposta le cartelle dove Timber cercherà i file .twig
// all'interno del tuo tema.
Timber::$dirname = ["templates", "components"];

new StarterSite();
