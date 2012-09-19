<?php

class ItemsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function listAction()
    {
        $category = $this->_request->getParam('cat');
        $products = new Application_Model_Products();
        $items = new Application_Model_Categories();

        $where = "category = '$category'"; 
        //sending products but categorically
        $this->view->pitems = $products->fetchAll($where)->toArray();

        //send categories to side navigation
       $this->view->items = $items->fetchAll()->toArray();
       
        
    }

    public function itemDetailAction()
    {
        $id = $this->_request->getParam('id');
        $products = new Application_Model_Products();
        $where = "id = '$id'";
        $this->view->pitemDetail = $products->fetchAll($where)->toArray();

    }

    public function addtocartAction()
    {

        if(!Zend_Auth::getInstance()->hasIdentity())
        {
            $this->_redirect('user/sign-in');
        }

        else

        {
            $id = $this->_request->getParam('id');

                if(isset($_SESSION['cart']))
                {
                    $_SESSION['cart'][] = $id;
                }
                else
                {
                    $_SESSION['cart'] = array();
                    $_SESSION['cart'][] = $id;

                }     

            $this->_redirect('index');
        }
    }

    public function checkoutAction()
    {
        // echo "checkout.....";
        // die();

        // $products = new Application_Model_Products();
        // $where = "id = '$id'";
        // $this->view->pitemDetail = $products->fetchAll($where)->toArray();

    }


}





