<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function registerAction()
    {
        // action body
        $form = new Application_Form_Register();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {

                    print_r($form->getvalues());
                    die();
                }
            }
    }

    public function signInAction()
    {
        // action body
    }


}





