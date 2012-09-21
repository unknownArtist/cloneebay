<?php

class BidsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	if(Zend_Auth::getInstance()->hasIdentity())
    	{
    		$itemid = $this->_request->getParam('itemID');
    			
	       $db = Zend_Db::factory('Pdo_Mysql', array(
                'host'     => 'localhost',
                'username' => 'root',
                'password' => '',
                'dbname'   => 'cloneebay'
            ));

	       $sql = "SELECT MAX( amount ) FROM tbl_bids where item_id = '$itemid'";

	       $maxBid = $db->fetchRow($sql);
              
	        $this->view->maxBid = $maxBid;

	        $form = new Application_Form_Bids();

	        $this->view->form = $form;

	        
	        if ($this->getRequest()->isPost()) 
            {
            
	            $formData = $this->getRequest()->getPost();
	            

	            if ($form->isValid($formData)) 
	                {
	                	$bids = new Application_Model_Bids();
	                	$data = array(
	                		'item_id' 		=> $itemid,
	                		'user_id' 		=> Zend_Auth::getInstance()->getIdentity()->id,
	                		'amount'  		=> $form->getValue('amount'),
	                		'itemOwner_id'	=> $this->_request->getParam('itemOwnerid'),
	                		);
	                	$bids->insert($data);
                        $this->_redirect('bids/email/itemID/'.$itemid .'/itemOwnerid/'.$this->_request->getParam('itemOwnerid'));
	                	$form->reset();

	                }
            }
    	}
    	else
    	{
    		$this->_redirect('user/sign-in');
    	}

    }

     public function emailAction()
    {
        
        $bids = new Application_Model_Bids();
        $where = 'item_id='. $this->_request->getParam('itemID');
        
        $bids_info = $bids->fetchRow($where)->toArray();

        $item = new Application_Model_Products();
        $where = 'id='. $this->_request->getParam('itemID');
        $item_info = $item->fetchRow($where)->toArray();

        $itemOwner = new Application_Model_UserRegistration();
        $wheree = 'id='. $this->_request->getParam('itemOwnerid');
        
        $Owner = $itemOwner->fetchRow($wheree)->toArray();
        $Owner_email = $Owner['email'];
        
        $smtpConfigs = array(
            
            'auth'          =>      'login',
            'username'      =>      'nayatelorg',
            'password'      =>      'brownquick321',
            'ssl'           =>      'ssl',
            'port'          =>       465
            
        );
        
        $smtpTransportObject = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $smtpConfigs);
        
        $mail = new Zend_Mail();
        $message ='

                   Dear User ! '.
                   $Owner['f_name'].' '. $Owner['l_name'].' has bidded an amount of $'. $bids_info['amount'].' on your Item :'.$item_info['title'];
       
                    
        $mail->addTo($Owner_email,"john evans")
             ->setFrom('nayatelorg@gmail.com', "Ebay Clone")
             ->setSubject('Biding Notification')
             ->setBodyText($message)
             ->send($smtpTransportObject);

    }


}

