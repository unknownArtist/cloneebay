<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $getCountryList = new Application_Model_Countries();
        $getCountryList = $getCountryList->fetchAll()->toArray();

        foreach ($getCountryList as $country) {
            $listCountries[] = $country['name'];
        }
    //////////////////////////////////////Zend From////////////////////////////////////////////////

        $this->setMethod('post')
             ->setAction('');

       $countries = new Zend_Form_Element_Select('countries');
       $countries->addMultiOptions($listCountries)
                 ->setLabel("Country/Region");

        $FirstName = new Zend_Form_Element_Text('f_name');
        $FirstName->setRequired(TRUE)
                  ->setLabel('First Name')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));
		$FirstName->class = "FirstName";			   
					   

        $LastName = new Zend_Form_Element_Text('l_name');
        $LastName->setRequired(TRUE)
                 ->setLabel('Last Name')
                 ->addFilter('StripTags')
                 ->addFilter('StringTrim')
                 ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

        $streetAddress = new Zend_Form_Element_Text('streetAdd');
        $streetAddress->setRequired(TRUE)
                 ->setLabel('Street Address')
                 ->addFilter('StripTags')
                 ->addFilter('StringTrim')
                 ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-1 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

        $zip = new Zend_Form_Element_Text('zip');
        $zip->setLabel('Zip')
                       ->addFilter('StripTags')
                    //   ->setRequired(true)
                       ->addFilter('StringTrim')
                       ->addValidator('Digits')
                       ->addValidator('NotEmpty');

        $cityOrState = new Zend_Form_Element_Text('citystate');
        $cityOrState->setRequired(TRUE)
                  ->setLabel('City/State')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));


        $EmailAddress = new Zend_Form_Element_Text('email');
        $EmailAddress->setLabel('Email Address')
                            ->setRequired(TRUE)
                            ->addFilter('StripTags')
                            ->addFilter('StringTrim')
                            ->addValidator('EmailAddress')
                            ->addErrorMessage('Valid Email is required');

        $phone        = new Zend_Form_Element_Text('phone');
        $phone->setLabel('Phone')
                        ->addFilter('StripTags')
                        ->setRequired(true)
                        ->addFilter('StringTrim')
                        ->addErrorMessage('Valid phone number is required')
                        ->addValidator('NotEmpty')
                        ->addValidator('Digits');

        $createBids = new Zend_Form_Element_Text('createBids');
        $createBids->setRequired(TRUE)
                 ->setLabel('Create your Bids or Buys user ID')
                 ->addFilter('StripTags')
                 ->addFilter('StringTrim')
                 ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-1 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));


        $Password = new Zend_Form_Element_Password('password');
        $Password->setRequired(TRUE)
                 ->setLabel('Create your password')
                 ->addFilter('StripTags')
                 ->addFilter('StringTrim');
        
        $ConfirmPassword = new Zend_Form_Element_Password('confirmPassword');
        $ConfirmPassword->setRequired(TRUE)
                        ->setLabel('Re-enter your password')
                        ->addFilter('StripTags')
                        ->addValidator(new Zend_Validate_Identical('password'))
                        ->setErrorMessages(array('pass' => 'Password do not match'))
                        ->addFilter('StringTrim');
						
						
						
						
		
		
						
						
						
						
						
						
						
						
						

        $submit = new Zend_Form_Element_Submit('Submit');




        $this->addElements(array(

        	$countries,
            $FirstName,
            $LastName,
            $streetAddress,
            $zip,
            $cityOrState,
            $EmailAddress,
            $phone,
            $createBids,
            $Password,
            $ConfirmPassword,
            $submit

        	));

    }


}

