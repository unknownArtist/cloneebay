<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       $products = new Application_Model_Categories();
       $this->view->items = $products->fetchAll()->toArray();
    }

    public function addAction()
    {
        // action body
    }


}



