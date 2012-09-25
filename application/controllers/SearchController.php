<?php

class SearchController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$cat = $_POST['Category'];
    	$text = $_POST['searchtxt'];

    	if(empty($text))
    	{
	    	$where = "category = '$cat'";
	    	$products = new Application_Model_Products();
	        $data = $products->fetchAll($where)->toArray();
	        $this->view->items = $data;
    	}

    	else
    	{

	    	$where = "category = '$cat' AND description LIKE '$text'";
	    	$products = new Application_Model_Products();
	        $data = $products->fetchAll($where)->toArray();
	        $this->view->items = $data;
    	}

    }


}

