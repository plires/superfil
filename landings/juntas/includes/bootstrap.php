<?php
// Shared setup for every page of this landing: autoload, shared landings/.env and helpers
require_once( __DIR__ . '/../../vendor/autoload.php' );
require_once( __DIR__ . '/landing.inc.php' );

$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ . '/../../' );
$dotenv->safeLoad();

// Escape any value printed into the HTML
function e($value) {
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

// Public key of this landing in the Libre leads platform (empty = tracker disabled)
$portalKey = $_ENV['PORTAL_KEY_JUNTAS'] ?? '';
