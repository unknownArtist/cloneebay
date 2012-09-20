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
	        $form = new Application_Form_Bids();
	        $this->view->form = $form;

	        
	        if ($this->getRequest()->isPost()) 
            {
            
	            $formData = $this->getRequest()->getPost();
	            

	            if ($form->isValid($formData)) 
	                {
	                	$bids = new Application_Model_Bids();
	                	$data = array(
	                		'item_id' 		=> $this->_request->getParam('itemID'),
	                		'user_id' 		=> Zend_Auth::getInstance()->getIdentity()->id,
	                		'amount'  		=> $form->getValue('amount'),
	                		'itemOwner_id'	=> $this->_request->getParam('itemOwnerid'),
	                		);
	                	$bids->insert($data);

	                }
            }
    	}
    	else
    	{
    		$this->_redirect('user/sign-in');
    	}

    }


}

