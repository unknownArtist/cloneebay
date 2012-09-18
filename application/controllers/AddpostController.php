<?php

class AddpostController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function addAction()
    {
       $categories = $this->_request->getParam('cat');

       if($categories == 'Fashion')
       {
          $this->fashionAction();
       }
       elseif ($categories == 'Motors') {
           echo "its Motors";
       }
       elseif ($categories == 'Electronics') {
           # code...
       }
       elseif ($categories == 'Collectable & Art') {
           # code...
       }
       elseif ($categories == 'Home, Outdoors & Decor') {
           # code...
       }
       elseif ($categories == 'CD & Media') {
           # code...
       }
       elseif ($categories == 'Entertainment') {
           # code...
       }
       elseif ($categories == 'Sports Goods') {
           # code...
       } 
       else
       {
           echo "genral";
       }   
    }

    public function selectCatagoryAction()
    {
        $cat = new Application_Model_Categories();
        $this->view->cat = $cat->fetchAll()->toArray();

    }

    public function fashionAction()
    {
        $form = new Application_Form_Fashion();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                   $products = new Application_Model_Products();
                   $products->insert($form->getValues());
                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            }
    }


}







