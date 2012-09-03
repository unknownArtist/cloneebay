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

                $emailAddress = $form->getValue('email');
                
                $where = "email = '$emailAddress'";
                $temp = $insertRegistrationData->fetchAll($where)->count();
                if($temp > 0)
                {
                   $this->view->errorMsg = "This email is already registered";
                   $form->populate($formData);
                  
                   
                }

                   $insertRegistrationData->insert($data);
                   $this->sendMailAction($form->getValue('f_name'),$form->getValue('email'));
                   $this->view->successMsg = "Your account has been created";

                }
            }
            
    }

    public function signInAction()
    {
        $form = new Application_Form_SignIn();
        $this->view->signIn = $form;

        $authAdapter = $this->getAuthAdapter();
           
        if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                $email    = $form->getValue('email');
                $password = $form->getValue('password');
                $authAdapter->setIdentity($email)
                            ->setCredential($password);
                
             $auth = Zend_Auth::getInstance();
        
             $result = $auth->authenticate($authAdapter);
         
        
             if($result->isValid())
               {
                    $auth->getStorage()->write($authAdapter->getResultRowObject(array('id', 'f_name','status')));
                    $this->_redirect('index');
               }
               else
            {
                $form->populate($formData);
                $this->view->SignUpError = "Invalid Username or Password";
            }
                
            } 
            else
            {
                $form->populate($formData);
            }
               
        }   
    }

    public function sendMailAction($username, $email)
    {
        
        $smtpConfigs = array(
            
            'auth'          =>      'login',
            'username'      =>      'nayatelorg',
            'password'      =>      'brownquick321',
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

    private function getAuthAdapter()
    {
        $auth = new Zend_Auth_Adapter_DbTable(Zend_Db_Table::getDefaultAdapter());
        $auth->setTableName('user_registration')
             ->setIdentityColumn('email')
             ->setCredentialColumn('password');
        
        return $auth;
    }

    public function logoutAction()
    {
        Zend_Auth::getInstance()->clearIdentity();
        $this->_redirect('index');
    }


}











