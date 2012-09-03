<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod('post')
                       ->setAction('');

        $fname = new Zend_Form_Element_Text('fname');
        $fname->setLabel("First Name");

        $lname = new Zend_Form_Element_Text('lname');
        $lname->setLabel("Last Name");


        $this->addElements(array(

        	$fname,$lname,

        	));

    }


}

