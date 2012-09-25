<?php

class Application_Form_Sports extends Zend_Form
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

        $upc = new Zend_Form_Element_Text('upc');
        $upc->setLabel('upc')
             ->setRequired(TRUE);

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

     $type = new Zend_Form_Element_Text('type');
     $type->setLabel('type')
                //->addValidator('alnum')
                ->addValidator('regex', true, array('/^[ a-zA-Z0-9]/'))
                ->addValidator('Alnum', false, array('allowWhiteSpace' => true))
                ->addErrorMessage('Kindly enter alplanumaric only')
                ->setRequired(TRUE);

     $brand = new Zend_Form_Element_Text('brand');
     $brand->setLabel('brand')
                //->addValidator('alnum')
                ->addValidator('regex', true, array('/^[ a-zA-Z0-9]/'))
                ->addValidator('Alnum', false, array('allowWhiteSpace' => true))
                ->addErrorMessage('Kindly enter alplanumaric only')
                ->setRequired(TRUE);

     $model = new Zend_Form_Element_Text('model');
     $model->setLabel('model')
                //->addValidator('alnum')
                ->addValidator('regex', true, array('/^[ a-zA-Z0-9]/'))
                ->addValidator('Alnum', false, array('allowWhiteSpace' => true))
                ->addErrorMessage('Kindly enter alplanumaric only')
                ->setRequired(TRUE);

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

    
    $pic    = new Zend_Form_Element_File('pic');
    $pic->setLabel('Select the file to upload:')
                      ->setDestination(APPLICATION_PATH.'/../public/images')
                      ->addValidator('Count', false, 1) // ensure only 1 file
                      ->addValidator('Size', false, 102400) // limit to 1MB
                      ->addValidator('Extension', false, 'jpg,jpeg,png,gif');

                                       
      $submit = new Zend_Form_Element_Submit('Enter');
        

     

    	$this->addElements(array(

    		$title,
    		$subtitle,
    		$condition,
    		$countries,
    		$url,
    		$upc,
    		$type,
    		$brand,
    		$model,
    		$desc,
    		$auctionOrFixed,
    		$startPrice,
    		$endPrice,
    		$BuyItNowprice,
    		$pic,

    		$submit,
    		));
    }


}

