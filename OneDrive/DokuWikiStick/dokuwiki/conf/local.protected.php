<?php
/**
 * Use the local temp directory for volatile files
 */
 
$conf['cachedir'] = $_ENV['TEMP'].'/dokuwiki/cache';
$conf['tmpdir']   = $_ENV['TEMP'].'/dokuwiki/tmp';
$conf['lockdir']  = $_ENV['TEMP'].'/dokuwiki/locks';
 
@mkdir($_ENV['TEMP'].'/dokuwiki');
@mkdir($conf['cachedir']);
@mkdir($conf['tmpdir']);
@mkdir($conf['lockdir']);