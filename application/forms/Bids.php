<?php

class Application_Form_Bids extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->setAction('');


 
    	
    	$amount = new Zend_Form_Element_Text('amount');
        $amount->setRequired(TRUE)
                  ->setLabel('Amount')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('Digits');
        $this->addElement($amount);


        $submit = new Zend_Form_Element_Submit('Submit Your Bid');
        $this->addElement($submit);

        
    }


}

