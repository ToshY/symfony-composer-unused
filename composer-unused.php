<?php

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;
use ComposerUnused\ComposerUnused\Configuration\PatternFilter;
use Webmozart\Glob\Glob;

return static function (Configuration $config): Configuration {
    $config
        ->addNamedFilter(NamedFilter::fromString('doctrine/annotations'))
        ->addNamedFilter(NamedFilter::fromString('doctrine/orm'))
        ->addNamedFilter(NamedFilter::fromString('league/flysystem-ftp'))
        ->addNamedFilter(NamedFilter::fromString('phpdocumentor/reflection-docblock'))
        ->addNamedFilter(NamedFilter::fromString('phpstan/phpdoc-parser'))
        ->addPatternFilter(PatternFilter::fromString('/ext-.*/'))
        ->addPatternFilter(PatternFilter::fromString('/-bundle.*/'))
        ->addPatternFilter(PatternFilter::fromString('/symfony\/.*/'))
        ->addPatternFilter(PatternFilter::fromString('/twig\/.*/'))
        ->setAdditionalFilesFor('__root__', [
            __FILE__,
            ...Glob::glob(__DIR__ . '/config/*.php'),
            ...Glob::glob(__DIR__ . '/config/schemas/*.php'),
        ]);

    return $config;
};