<?php
/**
 * Include the main class
 */
include("Shortener.php");
/**
 * Instantiate it
 * @var wayurl
 */
$shortener = new wayurl\Shortener();
/**
 * Set the URL & API key
 */
$shortener->setURL("http://url.kbr/api");
$shortener->setKey("Fgvsld81Hvex");
/**
 * Simple call
 */
echo $shortener->shorten("https://wayurl.com");

/**
 * Get short URL directly
 */
echo $shortener->getShort()->shorten("https://wayurl.com");

/**
 * Advanced call
 */
// Custom Alias
$shortener->setCustom("way url");

// Format: text or json
$shortener->setFormat("text");

echo $shortener->shorten("https://wayurl.com");


/**
 * Unshorten call
 */

echo $shortener->unshorten("http://url.kbr/wayurl");
