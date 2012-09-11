<?php

class Application_Form_AddPost extends Zend_Form
{

    public function init()
    {
        // $getCategories = new Application_Model_Categories();
        // $getCategories = $getCategories->fetchAll()->toArray();

        // foreach ($getCountryList as $country) {
        //     $listCountries[] = $country['name'];
        // }


        $this->setMethod('post');
        $this->setAction('');
    	
    	$title = new Zend_Form_Element_Text('title');
        $title->setRequired(TRUE)
                  ->setLabel('Title')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

        // $categories = new Zend_Form_Element_Select('categories');
        // $categories->addMultiOptions($categories)
        //          ->setLabel("Country/Region");

    	$this->addElements(array(

    		$title,
    		));
    }


}

