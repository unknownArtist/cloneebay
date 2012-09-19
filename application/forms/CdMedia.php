<?php

class Application_Form_CdMedia extends Zend_Form
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
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
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

        $upc = new Zend_Form_Element_Text('upc');
        $upc->setLabel('upc')
             ->setRequired(TRUE);

        $condition = new Zend_Form_Element_Select('condition');
        $condition->setlabel('Condition')
        		  ->addMultiOptions(array('new'=>'New','used'=>'Used'));


        $genre = new Zend_Form_Element_Text('genre');
        $genre->setRequired(false)
                  ->setLabel('genre')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

     $releaseYear = new Zend_Form_Element_Text('releaseYear');
     $releaseYear->setLabel('releaseYear')
                //->addValidator('alnum')
                ->addValidator('regex', true, array('/^[ a-zA-Z0-9]/'))
                ->addValidator('Alnum', false, array('allowWhiteSpace' => true))
                ->addErrorMessage('Kindly enter alplanumaric only')
                ->setRequired(TRUE);

       	$countries = new Zend_Form_Element_Select('countries');
        $countries->setlabel('Countries')
        		  ->setValue($tt)
        		  ->addMultiOptions($tt);

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

      $endPrice = new Zend_Form_Element_Text('endPrice');
     $endPrice->setRequired(false)
                  ->setLabel('Desired Price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');

    $pic    = new Zend_Form_Element_File('pic');
    $pic->setLabel('Select the file to upload:')
                      ->setDestination(APPLICATION_PATH.'/../public/images')
                      ->addValidator('Count', false, 1) // ensure only 1 file
                      ->addValidator('Size', false,802400) // limit to 8MB
                      ->addValidator('Extension', false, 'jpg,jpeg,png,gif');
                  

                                       
      $submit = new Zend_Form_Element_Submit('Enter');
        

     

    	$this->addElements(array(

    		$title,
    		$subtitle,
    		$condition,
    		$upc,
    		$genre,
    		$releaseYear,
    		$countries,
    		$auctionOrFixed,
    		$startPrice,
    		$endPrice,
    		$BuyItNowprice,
    		$pic,

    		$submit,
    		));
    }


}

