<?php

class Application_Form_CollectableArt extends Zend_Form
{

    public function init()
    {
        $country = new Application_Model_Countries();
        $dd = $country->fetchAll()->toArray();
        foreach ($dd as $count) {
        	$tt[] = $count['countryName'];
        }

	 $this->setMethod('post');
        $this->setAction('');

        $category = new Zend_Form_Element_Hidden('category');
        $category->setRequired(TRUE)
                  
                  ->setValue($_SESSION)
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');
                  $this->addElement($category);
    	
    	$title = new Zend_Form_Element_Text('title');
        $title->setRequired(TRUE)
                  ->setLabel('Title')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

         $subtitle = new Zend_Form_Element_Text('subtitle');
        $subtitle->setRequired(false)
                  ->setLabel('Sub Title')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));


        $condition = new Zend_Form_Element_Select('condition');
        $condition->setlabel('Condition')
        		  ->addMultiOptions(array('new'=>'New','used'=>'Used'));

       	$countries = new Zend_Form_Element_Select('countries');
        $countries->setlabel('Countries')
        		  ->setValue($tt)
        		  ->addMultiOptions($tt);

     $url = new Zend_Form_Element_Text('url');
     $url->setRequired(TRUE)
                  ->setLabel('Enter the URL (Web address) of picture to link to on a Web server')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');

     $desc = new Zend_Form_Element_Textarea('desc');
     $desc->setRequired(TRUE)
                  ->setLabel('Description')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

     $auctionOrFixed = new Zend_Form_Element_Select('auctionOrFixed');
     $auctionOrFixed->setlabel('Choose how youd like to sell your item')
        		  ->addMultiOptions(array('0'=>'Online Auction','1'=>'Fixed Price'));

     $startPrice = new Zend_Form_Element_Text('startPrice');
     $startPrice->setRequired(false)
                  ->setLabel('starting Price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');
                  

     $BuyItNowprice = new Zend_Form_Element_Text('BuyItNowprice');
     $BuyItNowprice->setRequired(false)
                  ->setLabel('Buy It Now price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');

     
                  

                                       
      $submit = new Zend_Form_Element_Submit('Enter');
        

     

    	$this->addElements(array(

    		$title,
    		$subtitle,
    		$condition,
    		$countries,
    		$url,
    		$desc,
    		$auctionOrFixed,
    		$startPrice,
    		
    		$BuyItNowprice,

    		$submit,
    		));
    }


}

