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
                  
                   
                }else

                   $insertRegistrationData->insert($data);
                   $this->sendMailAction(

                    $form->getValue('f_name'),
                    $form->getValue('email'),
                    $form->getValue('password')

                    );
                   $this->view->successMsg = "An email has been sent to ".$form->getValue('email')." Kindly activate your account";

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
                 $email = $form->getValue('email');
                 $status = new Application_Model_UserRegistration();
                 $where = "email = '$email'";
                 $data = $status->fetchRow()->toArray();

                    if($data['status'] == 1)
                    {
                        $auth->getStorage()->write($authAdapter->getResultRowObject(array('id', 'f_name','status')));
                        $this->_redirect('index');
                        session_start();
                    }
                    else
                    {
                        $form->populate($formData);
                        $this->view->activationError = "your account is not activated";
                        Zend_Auth::getInstance()->clearIdentity();
                    }
                    //if()
                    
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

    public function sendMailAction($username, $email, $password)
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
    
        $message = '
                    Thanks for signing up!
                    Your account has been created, you can login with the following credentials after you 
                    have activated your account by pressing the url below.

                    ------------------------
                    Username: '.$username.'
                    Password: '.$password.'
                    ------------------------

                    Please click this link to activate your account:

                    http://cloneebay/user/activate/email/'.$email.'/password/'.$password.'

                                    ';
 
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
        session_destroy();
        $this->_redirect('index');

    }

    public function activateAction()
    {
        // Selecting the users table
        $user = new Application_Model_UserRegistration();
        $email = $this->_request->getParam('email');//getting userName from url passed in the confirmation email
        $where = "email = '$email'";
        $u_Name = $user->fetchAll($where)->toArray();
        
        if(!empty($u_Name))//if username is present
            {

                //searching in db for the password passed in the url
                $password = $this->_request->getParam('password');
                // $password = $u_Name['password'];
                $where = "password = '$password'";
                $u_password = $user->fetchAll($where)->toArray();

                if(!empty($u_password))//if email is present
                {

                    
                    //update the staus of the user from 0 to 1(user activated)
                    $where = "email = '$email'";
                    $data = array('status' => '1');
                    $user->update($data, $where);
                    $this->_redirect('user/sign-in');

                 }
            }
            
        else
            {
              echo "invalid operation.";
            }


    }


}













