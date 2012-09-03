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
                   $insertRegistrationData = new Application_Model_UserRegistration();
                   $data = array(

                    'countries'         =>  $form->getValue('countries'),
                    'f_name'            =>  $form->getValue('f_name'),
                    'l_name'            =>  $form->getValue('l_name'),
                    'streetAdd'         =>  $form->getValue('streetAdd'),
                    'zip'               =>  $form->getValue('zip'),
                    'citystate'         =>  $form->getValue('citystate'),
                    'email'             =>  $form->getValue('email'),
                    'phone'             =>  $form->getValue('phone'),
                    'createBids'        =>  $form->getValue('createBids'),
                    'password'          =>  $form->getValue('password'),
                   );

                   $insertRegistrationData->insert($data);
                   $this->sendMailAction($form->getValue('f_name'),$form->getValue('email'));
                   $this->view->successMsg = "Your account has been created";

                }
            }
            
    }

    public function signInAction()
    {
        
    }

    public function activateUserAction()
    {
        // action body
    }

    public function sendMailAction($username,$email)
    {
        
        $smtpConfigs = array(
            
            'auth'          =>      'login',
            'username'      =>      'nayatelorg',
            'password'      =>      'quickbrown123',
            'ssl'           =>      'ssl',
            'port'          =>       465
            
        );
        
        $smtpTransportObject = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $smtpConfigs);
        
        $mail = new Zend_Mail();
    
        $message = $username.' Thank you for signing up!';
 
        $mail->addTo($email,"john evans")
             ->setFrom('nayatelorg@gmail.com', "Ebay Clone")
             ->setSubject('Accounet Confirmation')
             ->setBodyText($message)
             ->send($smtpTransportObject);
    }


}









