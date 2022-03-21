<?php

/**
 * FileMinifier.php - JS and CSS file minifier
 *
 * Minify the javascript code generated by the Jaxon library and plugins.
 *
 * @package jaxon-core
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright 2022 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/jaxon-php/jaxon-core
 */

namespace Jaxon\Utils\File;

use MatthiasMullie\Minify\JS as JsMinifier;

use function is_file;

class FileMinifier
{
    /**
     * Minify javascript code
     *
     * @param string $sJsFile The javascript file to be minified
     * @param string $sMinFile The minified javascript file
     *
     * @return bool
     */
    public function minify(string $sJsFile, string $sMinFile): bool
    {
        $xJsMinifier = new JsMinifier();
        $xJsMinifier->add($sJsFile);
        $xJsMinifier->minify($sMinFile);
        return is_file($sMinFile);
    }
}