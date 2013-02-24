<?php
namespace Model;

/**
 * Abstract database class that all models will inherit from. This class should
 * be extended by your own abstract model that uses a trait that adds the
 * desired database connection.
 *
 * TODO: This either needs to be fleshed out with some standard functionality
 * or we need to rethink if this class even has a purpose.
 *
 * @abstract
 * @author David Mitchel <david@cs.txstate.edu>
 * @package MVC\Model
 */
abstract class Model {

    /**
     * Constructor
     *
     * @access protected
     * @return void
     */
    function __construct() {
    }

}

