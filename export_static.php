<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Http\Controllers\LandingController;

$portfolios = LandingController::getStaticPortfolios();
$html = view('welcome', compact('portfolios'))->render();

// 1. Get Vite manifest files
$manifest = json_decode(file_get_contents(__DIR__ . '/public/build/manifest.json'), true);
$cssFile = $manifest['resources/css/app.css']['file'] ?? 'assets/app-D8Prp-dB.css';
$jsFile = $manifest['resources/js/app.js']['file'] ?? 'assets/app-D0Q7HimY.js';

// 2. Replace Vite directive output with clean static relative links
$viteReplacement = '<link rel="stylesheet" href="./build/' . $cssFile . '">' . "\n" .
                   '    <script type="module" src="./build/' . $jsFile . '"></script>';

// Match all generated vite link/scripts in head
$html = preg_replace(
    '~<link rel="preload" as="style" href="[^"]*build/[^"]*" />.*?<script type="module" src="[^"]*build/[^"]*"></script>~s',
    $viteReplacement,
    $html
);

// 3. Local asset URLs to relative
$baseUrl = url('/');
$patterns = [
    $baseUrl . '/storage/portfolios/' => './portfolios/',
    $baseUrl . '/portfolios/'         => './portfolios/',
    $baseUrl . '/build/'              => './build/',
    $baseUrl . '/favicon.svg'         => './favicon.svg',
    $baseUrl . '/favicon.ico'         => './favicon.ico',
    $baseUrl . '/hamid.jpg'           => './hamid.jpg',
    $baseUrl . '/support_agent_avatar.png' => './support_agent_avatar.png',
    $baseUrl . '/cv-hamid.pdf'        => './cv-hamid.pdf',
    $baseUrl . '/portofolio'          => '#portfolio',
    $baseUrl . '/#portfolio'          => '#portfolio',
    $baseUrl . '/#skills'             => '#skills',
    $baseUrl . '/#experience'         => '#experience',
    $baseUrl . '/#contact'            => '#contact',
    $baseUrl . '/'                    => './',
    $baseUrl                          => '.',
];

foreach ($patterns as $search => $replace) {
    $html = str_replace($search, $replace, $html);
}

// 4. Also catch any http://127.0.0.1:8000 or http://localhost variants
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/storage/portfolios/~i', './portfolios/', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/portfolios/~i', './portfolios/', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/build/~i', './build/', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/favicon\.svg~i', './favicon.svg', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/hamid\.jpg~i', './hamid.jpg', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/support_agent_avatar\.png~i', './support_agent_avatar.png', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/cv-hamid\.pdf~i', './cv-hamid.pdf', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/portofolio~i', '#portfolio', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/?#(portfolio|skills|experience|contact)~i', '#$1', $html);
$html = preg_replace('~https?://(?:127\.0\.0\.1|localhost)(?::\d+)?/?(?="|\'|\s|>)~i', './', $html);

// Clean up double dots or bad relative hrefs like .#portfolio or ./#portfolio
$html = str_replace(['.#portfolio', './#portfolio'], '#portfolio', $html);
$html = str_replace(['.#skills', './#skills'], '#skills', $html);
$html = str_replace(['.#experience', './#experience'], '#experience', $html);
$html = str_replace(['.#contact', './#contact'], '#contact', $html);
$html = str_replace('href="."', 'href="#"', $html);

// Remove any remaining /dashboard link if auth left anything
$html = preg_replace('~<a href="[^"]*dashboard"[^>]*>.*?</a>~is', '', $html);

// Write output
file_put_contents(__DIR__ . '/index.html', $html);
echo "Successfully generated static index.html (" . strlen($html) . " bytes)\n";
