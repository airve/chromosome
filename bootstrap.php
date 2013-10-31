<?php
use \chromosome\Chromosome;
use \slash\Path;

# dependencies
\trait_exists('\\traits\\Aware') or require \dirname(__DIR__) . '/traits/Aware.php'; 
\trait_exists('\\traits\\Data') or require \dirname(__DIR__) . '/traits/Data.php';
\trait_exists('\\traits\\Mixin') or require \dirname(__DIR__) . '/traits/Mixin.php'; 
\class_exists('\\slash\\Path') or require \dirname(__DIR__) . '/slash/Path.php';

# needed package files
\class_exists('\\chromosome\\Chromosome') or require __DIR__ . '/chromosome.php';
\class_exists('\\chromosome\\Loci') or require __DIR__ . '/loci.php';
require_once __DIR__ . '/base.php';

# suggestions
\class_exists('\\airve\\Phat') or Path::inc(\dirname(__DIR__) . '/phat/phat.php') and Loci::blast('phat.php');

# Fire and flush event handlers.
Chromosome::blast(\basename(__FILE__));