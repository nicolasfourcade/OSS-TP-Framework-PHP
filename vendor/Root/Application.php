<?php
/**
 * CORE : DO NOT EDIT THIS CLASS
 * Application Class Base : Manages the Application
 *
 * @category  System
 * @package   Root
 * @author    OSS sifar <simon.farail@smile.fr>
 * @copyright 2017 oss
 * @license   OSL 3.0 http://opensource.org/licenses/osl-3.0.php
 */

namespace Root\System;


class Application
{
    /** @var array main config */
    protected $config = array();

    /**
     * "Start" the application:
     * Initialise the application
     *
     * @param array $config The config
     */
    public function __construct($config)
    {
        if (is_array($config)) {
            $this->config = $config;
        }
    }

    /**
     * Call a page from the request uri
     *
     * @param string $uri The requested uri
     * @return self
     */
    public function call($URI = null)
    {
        echo "<br>";
        var_dump(__CLASS__);

        if (is_null($URI)) {
            $URI = $_SERVER['REQUEST_URI'];
            $uri = explode("/",$URI);
            $uri = $uri[2];
        }
        if (!is_string($URI)) {
            throw new \Exception("The requested URI is not a string.", 1);
        }
        $routes = $this->config['routes'];

        /**
         * If the path exists in the config array
         */
        if (isset($routes[$uri])) {
            $index = $uri;
        } else if (isset($routes['/'])) {
            $index = '/';
        } else {
            $index = 0;
        }

        if (
        isset($routes[$index]['model'])
        ) {
            $model= $this->loadModel($uri);
        }

        /**
         * We load the file from the call
         */
        if (
        isset($routes[$index]['call'])
        ) {
            require_once MODPATH . DS . $routes[$index]['call'];
            $ctl = new $routes[$index]['action']($routes[$index]['view']);

        }


        return $this;
    }

    /**
     * Start an Application instance
     *
     * @return Application
     */
    public static function oss_start()
    {
        $config = array();
        // Load all the config files we have to /config folder
        if ($dir = opendir(CONFPATH)) {
            while (false !== ($file = readdir($dir))) {
                if (!is_dir(__DIR__ . DS . $file) && $file !== '.' && $file !== '..') {
                    $config = array_merge_recursive(
                        $config,
                        include_once CONFPATH . DS . $file
                    );
                }
            }
            closedir($dir);
        } else {
            throw new \Exception("Impossible to access the config path.", 1);
        }
        // easiest version with only just 1 config file :
        //$config = include_once CONFPATH . DS . 'routes.php';
        $app = new self($config);

        $app->call();
        return $app;
    }
    public function loadModel($index)
    {
        $routes = $this->config['routes'];
        /**
         * We load the file from the call
         */
        if (
        isset($routes[$index]['model'])
        ) {
           require_once MODPATH . DS . $routes[$index]['model'];
            $cn = new $routes[$index]['model_action']($index);
        }
    }

    public function loadModels()
    {
        // Load all the config files we have to /config folder
        if ($dir = opendir(MODPATH)) {
            while (false !== ($module = readdir($dir))) {
                if (is_dir(MODPATH . DS . $module) && $module !== '.' && $module !== '..') {
                    $modelPath = MODPATH . DS . $module . DS . 'model';
                    if (is_dir($modelPath) && $modelDIR = opendir($modelPath)) {
                        while (false !== ($file = readdir($modelDIR))) {
                            if (!is_dir($modelPath . DS . $file) && $file !== '.' && $file !== '..') {
                                require_once $modelPath . DS . $file;
                            }
                        }

                    }
                }
            }
            closedir($dir);
        } else {
            throw new \Exception("Impossible to access the model path.", 1);
        }
    }
}