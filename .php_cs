<?php
/**
 * Unjudder Mail Module on top of Zendframework 2
 *
 * @link http://github.com/unjudder/zf2-mail for the canonical source repository
 * @copyright Copyright (c) 2012 unjudder
 * @license http://unjudder.com/license/new-bsd New BSD License
 * @package Uj\Mail
 */
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->finder($finder)
;
