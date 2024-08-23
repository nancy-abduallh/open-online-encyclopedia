<?php
require'vendor/autoload.php';

use Google\Cloud\Translate\V2\TranslateClient;
use GuzzleHttp\Client;
require 'vendor/guzzlehttp/guzzle/src/Client.php';

// Function to fetch HTML content of a webpage
function fetchWebpageContent($page_url) {
    $client = new Client();
    $response = $client->get($page_url);
    return (string) $response->getBody();
}

// Function to translate HTML content from English to Arabic
function translateWebpage($htmlContent) {
    $translate = new TranslateClient([
        'key' => 'AIzaSyAdsAY3qD2oqOL1ZzD26oNyqBekGggDND4'
    ]);

    // Extract text nodes from HTML
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // Disable libxml errors
    $dom->loadHTML(mb_convert_encoding($htmlContent, 'HTML-ENTITIES', 'UTF-8'));
    $xpath = new DOMXPath($dom);
    $textNodes = $xpath->query('//text()');

    // Translate each text node
    foreach ($textNodes as $node) {
        $translatedText = $translate->translate($node->nodeValue, [
            'target' => 'ar'
        ]);
        $node->nodeValue = $translatedText['text'];
    }

    // Return translated HTML
    return $dom->saveHTML();
}

// Usage: Translate a webpage from English to Arabic
$url = 'http://localhost/Views/operating%20system.php'; // Replace with your desired webpage URL
$htmlContent = fetchWebpageContent($url);
$translatedHTML = translateWebpage($htmlContent);

// Output translated HTML
echo $translatedHTML;
