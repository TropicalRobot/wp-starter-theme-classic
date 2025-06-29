<?php

function viteAsset($asset)
{
    static $manifest = null;
    if (!$manifest) {
        $manifest_path = get_stylesheet_directory() . '/dist/manifest.json';
        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);
        }
    }
    if (isset($manifest[$asset])) {
        return get_stylesheet_directory_uri() . '/dist/' . $manifest[$asset]['file'];
    }
    // fallback
    return get_stylesheet_directory_uri() . '/assets/' . $asset;
}

function viteSvg($fileName, $color = 'black')
{
    $svg = file_get_contents(get_template_directory() . '/assets/images/' . $fileName . '.svg');

    if ($svg === false) {
        return ''; // Return empty if the file does not exist
    }
    return '<div class="text-' . $color . '">' . $svg . '</div>';
}
