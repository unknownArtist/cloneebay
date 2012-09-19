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

       $_SESSION = $this->_request->getParam('cat');

        $form = new Application_Form_Fashion();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                  $data = array();
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
<<<<<<< HEAD
                   $data['user_id'] = $id;

=======
                   array_push($data['user_id'] );
                   print_r($data);
                   die();
>>>>>>> 3a0f9927f015495fc42e6d852fb2468224788e2e
                   $products->insert($data);
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
      
        $_SESSION = $this->_request->getParam('cat');
        
        
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
      $_SESSION = $this->_request->getParam('cat');
        $form = new Application_Form_HomeDecoration();
        $this->view->form = $form;
         $_SESSION = $this->_request->getParam('cat');
         
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
      $_SESSION = $this->_request->getParam('cat');
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
      $_SESSION = $this->_request->getParam('cat');
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
      $_SESSION = $this->_request->getParam('cat');
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
      $_SESSION = $this->_request->getParam('cat');
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













