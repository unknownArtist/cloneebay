<?php

class Application_Form_SignIn extends Zend_Form
{

    public function init()
    {
        $this->setAction('#');
        $this->setMethod('post');
        
        $email = new Zend_Form_Element_Text('email');
        $email->setRequired(TRUE)
                  ->setLabel('Email')
                  ->addValidator('EmailAddress')
                 ->setErrorMessages(array('email is Required'))
                 ->addFilter('StripTags')
                 ->addFilter('StringTrim');
		$email->class = "text";
				 
		
        
        $password = new Zend_Form_Element_Password('password');
        $password->setRequired(TRUE)
                 ->setLabel('Password')
                 ->setErrorMessages(array('Password is Required'))
                 ->setRequired(TRUE)
                 ->addFilter('StripTags')
                 ->addFilter('StringTrim');
		$password->class = "text";		 
        
        

        $submit = new Zend_Form_Element_Submit('a');
		$submit->class = "button";

        $submit = new Zend_Form_Element_Submit('i');
		$submit->class = "sin_button";

        
        $this->addElements(array(
            
            $email,
            $password,
            $submit
        ));
    }


}

