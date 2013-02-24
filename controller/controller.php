<?php
namespace Controller;

/**
 * Abstract class that provides the methods and properties that all
 * controllers will need to inherit.
 *
 * @abstract
 * @author  David Mitchel <david@cs.txstate.edu>
 * @author  Matt Wallace <matt@cs.txstate.edu>
 * @package MVC\Controller
 */
abstract class Controller {

    /**
     * The model object providing API that accesses the Database
     *
     * @var
     * @access protected
     */
    protected $model;

    /**
     * The view object that interfaces with the chosen view/templating
     * framework
     *
     * @var
     * @access protected
     */
    protected $view;

    /**
     * Constructor
     *
     * @access public
     * @return void
     */
    public function __construct() {
        // get the model
        $modelName = "\\Model\\$this->classShortName";
        $this->model = new $modelName();
    }

    /**
     * Renders and echoes the HTML
     *
     * @see \View\View
     * @access public
     * @return void
     */
    public function renderPage() {
        if (empty($this->view))
            trigger_error('The view was never set! See the documentation.', E_USER_ERROR);

        echo $this->view->renderPage();
    }
}
