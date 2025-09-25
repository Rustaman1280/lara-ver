<?php
// Test file to check if assets are accessible
header('Content-Type: text/html');

echo "<h1>Asset Test Page</h1>";
echo "<p>Testing if CSS files are accessible:</p>";

$cssFiles = [
    '/css/sb-admin-2.min.css',
    '/vendor/fontawesome-free/css/all.min.css',
];

foreach ($cssFiles as $css) {
    $fullPath = __DIR__ . $css;
    if (file_exists($fullPath)) {
        echo "<p>✓ {$css} - File exists</p>";
        echo "<link rel='stylesheet' href='{$css}'>";
    } else {
        echo "<p>✗ {$css} - File NOT found at {$fullPath}</p>";
    }
}

echo "<h2>Test Styles</h2>";
echo "<div class='alert alert-success'>This should be green if Bootstrap is loaded</div>";
echo "<i class='fas fa-check'></i> This should show a checkmark if FontAwesome is loaded";
?>