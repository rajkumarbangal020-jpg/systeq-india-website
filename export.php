<?php
$dir = __DIR__;
chdir($dir);

$pages = ['index', 'about', 'services', 'industries', 'projects', 'faq', 'contact'];

// Function to replace .php links with .html links
function rewrite_links(string $html, array $pages): string {
    foreach ($pages as $p) {
        $html = preg_replace('/href="(' . $p . ')\.php(#?[^"]*)"/i', 'href="$1.html$2"', $html);
    }
    return $html;
}

$outputDir = $dir . '/dist';
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

foreach ($pages as $page) {
    ob_start();
    // Simulate query parameters for contact or others if needed
    $_GET = [];
    include $dir . '/' . $page . '.php';
    $rendered = ob_get_clean();
    $processed = rewrite_links($rendered, $pages);
    file_put_contents($outputDir . '/' . $page . '.html', $processed);
    echo "Exported {$page}.html (" . strlen($processed) . " bytes)\n";
}

// Function to recursively copy assets
function copy_recursive(string $src, string $dst): void {
    $dir = opendir($src);
    @mkdir($dst, 0755, true);
    while (false !== ($file = readdir($dir))) {
        if ($file !== '.' && $file !== '..') {
            if (is_dir($src . '/' . $file)) {
                copy_recursive($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

copy_recursive($dir . '/assets', $outputDir . '/assets');
echo "Copied assets directory to dist/assets\n";
