<?php

class DashboardController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
      $user_id = Zend_Auth::getInstance()->getIdentity()->id;
      $bids = new Application_Model_Bids();
      $where = "itemOwner_id =".$user_id;
      $bids_info = $bids->fetchAll($where,'bids_id DESC')->toArray();
      $this->view->bids_info = $bids_info;
      
      $count = 0;  
      $item = new Application_Model_Products();
      $where = 'id='. $bids_info[$count]['item_id'];
      $item_info = $item->fetchAll($where,'id DESC')->toArray();
      $this->view->item_info = $item_info;

      $itemOwner = new Application_Model_UserRegistration();
      $where = 'id='. $bids_info[$count]['user_id']; 
      $owner_info = $itemOwner->fetchAll($where,'id DESC')->toArray();
      $this->view->owner_info = $owner_info;
      $count++;
            
    }


}

