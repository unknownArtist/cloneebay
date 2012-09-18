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
           $this->motorsAction();
       }
       elseif ($categories == 'Electronics') {
          $this->electronicsAction();
       }
       elseif ($categories == 'Collectable & Art') {
           $this->collectableArtAction();
       }
       elseif ($categories == 'Home, Outdoors & Decor') {
             $this->homeAndDecorationAction();
       }
       elseif ($categories == 'CD & Media') {
          $this->cdmediaAction();
       }
       elseif ($categories == 'Entertainment') {
           # code...
       }
       elseif ($categories == 'Sports Goods') {
          $this->sportsAction();
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

    public function motorsAction()
    {
        $form = new Application_Form_Motors();
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

    public function homeAndDecorationAction()
    {
        $form = new Application_Form_HomeDecoration();
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

    public function electronicsAction()
    {
        $form = new Application_Form_Electronics();
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

    public function cdmediaAction()
    {
        $form = new Application_Form_CdMedia();
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

    public function sportsAction()
    {
        $form = new Application_Form_Sports();
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

    public function collectableArtAction()
    {
        $form = new Application_Form_CollectableArt();
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













