<?php
/**
 * CORE : DO NOT EDIT THIS CLASS
 * The loader for all vendors
 *
 * @category  Root
 * @package   Root
 * @author    OSS sifar <simon.farail@smile.fr>
 * @copyright 2017 oss
 * @license   OSL 3.0 http://opensource.org/licenses/osl-3.0.php
 */
define( 'DS', DIRECTORY_SEPARATOR );
define( 'ROOTPATH', join( DS, array(dirname(__DIR__))) );
define( 'CONFPATH', join( DS, array(dirname(__DIR__), 'config')) );
define( 'MODPATH', join( DS, array(dirname(__DIR__), 'modules')) );
define( 'TEMPLATEPATH', join( DS, array(dirname(__DIR__), 'modules/Oss/view/_template')) );
define( 'URLASSET', join( DS, array(dirname(__DIR__), 'www')) );

if( $dir = opendir( __DIR__ ) ){
    while( false !== ($file = readdir( $dir )) ) {
        if( is_dir(__DIR__ . DS . $file) && $file !== '.' && $file !== '..' ){
            require_once join(DS, array($file, 'autoload.php'));
        }
    }
    closedir($dir);
}