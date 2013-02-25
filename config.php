<?php
class Config {
    /**
     *Constructor
     *
     *@access public
     *@return void
     *
     */
    public function __construct() {

        define('MONGO_SERVER', 'mongodb://localhost:27017');
        define('MONGO_DATABASE', 'punymvc_demo');
    }

}
