<?php

class Application_Form_Motors extends Zend_Form
{

    public function init()
    {
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

        $condition = new Zend_Form_Element_Select('condition');
        $condition->setlabel('Condition')
        		  ->addMultiOptions(array('new'=>'New','used'=>'Used'));          




        $vin = new Zend_Form_Element_Text('vin');
        $vin->setRequired(TRUE)
                  ->setLabel('Vin')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');




         $make = new Zend_Form_Element_Text('make');
        $make->setRequired(TRUE)
                  ->setLabel('Make')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));


        $model = new Zend_Form_Element_Text('model');
        $model->setRequired(TRUE)
                  ->setLabel('Model')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));
        
        $year = new Zend_Form_Element_Text('releaseYear');
        $year->setRequired(TRUE)
                  ->setLabel('Year')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');



        $engine = new Zend_Form_Element_Text('engine');
        $engine->setRequired(TRUE)
                  ->setLabel('Engine')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');


        $driveType = new Zend_Form_Element_Text('driveType');
        $driveType->setRequired(TRUE)
                  ->setLabel('Make')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));  



         $mileage = new Zend_Form_Element_Text('mileage');
        $mileage->setRequired(TRUE)
                  ->setLabel('Mileage')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');




		$ExteriorColor = new Zend_Form_Element_Text('ExteriorColor');
        $ExteriorColor->setRequired(TRUE)
                  ->setLabel('Exterior Color')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       )); 



	    $interiorcolor = new Zend_Form_Element_Text('interiorcolor');
        $interiorcolor->setRequired(TRUE)
                  ->setLabel('Interior color')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z ]+$/', 
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

      $endPrice = new Zend_Form_Element_Text('endPrice');
      $endPrice->setRequired(false)
                  ->setLabel('Desired Price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');



      $submit = new Zend_Form_Element_Submit('Enter');



      $this->addElements(array(

    		$title,
    		$subtitle,
    		$condition,
    		$vin,
    		$make,
    		$model,
    		$year,
    		$engine,
    		$driveType,
    		$mileage,
    		$ExteriorColor,
    		$interiorcolor,
    		$auctionOrFixed,
    		$startPrice,
    		$endPrice,
    		$BuyItNowprice,

    		$submit,
    		));



         






    }


}

