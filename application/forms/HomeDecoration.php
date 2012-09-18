<?php

class Application_Form_HomeDecoration extends Zend_Form
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
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));
        $this->addElement($title);

        $subtitle = new Zend_Form_Element_Text('subtitle');
        $subtitle->setRequired(false)
                  ->setLabel('Sub Title')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

		$this->addElement($subtitle);

         $SellerStateofResidence = new Zend_Form_Element_Text('SellerStateofResidence');
        $SellerStateofResidence->setRequired(TRUE)
                  ->setLabel('Seller State of Residence')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));
		$this->addElement($SellerStateofResidence);

        $PropertyAddress = new Zend_Form_Element_Text('PropertyAddress');
        $PropertyAddress->setRequired(false)
                  ->setLabel('Property Address')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

                 $this->addElement($PropertyAddress);
        $StateProvince = new Zend_Form_Element_Text('StateProvince');
        $StateProvince->setRequired(TRUE)
                  ->setLabel('State/Province')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));
                  $this->addElement($StateProvince);

	        $ZipPostalCode = new Zend_Form_Element_Text('ZipPostalCode');
	        $ZipPostalCode->setRequired(false)
	                  ->setLabel('Zip/Postal Code')
	                  ->addFilter('StripTags')
	                  ->addFilter('StringTrim')
	                  ->addValidator('regex', true, 
	                                 array(
	                                       'pattern'=>'/^[(a-zA-Z0-90-9 ]+$/', 
	                                       'messages'=>array(
	                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
	                                      )
	                       ));
	                  $this->addElement($ZipPostalCode);

	        $NumberofBedrooms = new Zend_Form_Element_Text('NumberofBedrooms');
	        $NumberofBedrooms->setRequired(false)
	                  ->setLabel('Number of Bedrooms')
	                  ->addFilter('StripTags')
	                  ->addFilter('StringTrim')
	                  ->addValidator('regex', true, 
	                                 array(
	                                       'pattern'=>'/^[(a-zA-Z0-90-9 ]+$/', 
	                                       'messages'=>array(
	                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
	                                      )
	                       ));
	                  $this->addElement($NumberofBedrooms);

	        $NumerOfBathrooms = new Zend_Form_Element_Select('NumerOfBathrooms');
            $NumerOfBathrooms->setLabel("Numer Of Bathrooms")
            		 ->addMultiOptions(array(
            	'0.5'=>'0.5',
            	'1'=>'1',
            	'1.5'=>'1.5',
            	'2'=>'2',
            	'2.5'=>'2.5',
            	'3'=>'3',
            	'3.5'=>'3.5',
            	'4'=>'4',
            	'4.5'=>'4.5',
            	'5+'=>'5+'

            	));
            		 $this->addElement($NumerOfBathrooms);

            $PropertyType = new Zend_Form_Element_Text('PropertyType');
	        $PropertyType->setRequired(false)
	                  ->setLabel('Property Type')
	                  ->addFilter('StripTags')
	                  ->addFilter('StringTrim')
	                  ->addValidator('regex', true, 
	                                 array(
	                                       'pattern'=>'/^[(a-zA-Z0-90-9 ]+$/', 
	                                       'messages'=>array(
	                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
	                                      )
	                       ));
	                  $this->addElement($PropertyType);


            $SaleType = new Zend_Form_Element_Text('SaleType');
	        $SaleType->setRequired(false)
	                  ->setLabel('Sale Type')
	                  ->addFilter('StripTags')
	                  ->addFilter('StringTrim')
	                  ->addValidator('regex', true, 
	                                 array(
	                                       'pattern'=>'/^[(a-zA-Z0-90-9 ]+$/', 
	                                       'messages'=>array(
	                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
	                                      )
	                       ));
	                  $this->addElement($SaleType);


	        $Setting = new Zend_Form_Element_Select('Setting');
            $Setting->setLabel("Setting")
            		 ->addMultiOptions(array(
            	'Mountain'=>'Mountain',
            	'Ocean'=>'Ocean',
            	'Rural,Country'=>'Rural,Country',
            	'SubUrban'=>'SubUrban',
            	'Urban, City'=>'Urban, City',
            	            	));
            		 $this->addElement($Setting);


            $url = new Zend_Form_Element_Text('url');
     		$url->setRequired(TRUE)
                  ->setLabel('Enter the URL (Web address) of picture to link to on a Web server')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');

$this->addElement($url);
            $desc = new Zend_Form_Element_Textarea('desc');
     	    $desc->setRequired(TRUE)
                  ->setLabel('Description')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim')
                  ->addValidator('regex', true, 
                                 array(
                                       'pattern'=>'/^[(a-zA-Z0-90-9 ]+$/', 
                                       'messages'=>array(
                                       'regexNotMatch'=>'Kindly Enter only Alphabets'
                                      )
                       ));

$this->addElement($desc);


     $auctionOrFixed = new Zend_Form_Element_Select('auctionOrFixed');
     $auctionOrFixed->setlabel('Choose how youd like to sell your item')
        		  ->addMultiOptions(array('0'=>'Online Auction','1'=>'Fixed Price'));
$this->addElement($auctionOrFixed);
     $startPrice = new Zend_Form_Element_Text('startPrice');
     $startPrice->setRequired(false)
                  ->setLabel('starting Price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');
                  
$this->addElement($startPrice);
     $BuyItNowprice = new Zend_Form_Element_Text('BuyItNowprice');
     $BuyItNowprice->setRequired(false)
                  ->setLabel('Buy It Now price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');
$this->addElement($BuyItNowprice);

      $endPrice = new Zend_Form_Element_Text('endPrice');
     $endPrice->setRequired(false)
                  ->setLabel('Desired Price')
                  ->addFilter('StripTags')
                  ->addFilter('StringTrim');
                  
$this->addElement($endPrice);
                                       
      $submit = new Zend_Form_Element_Submit('Enter');
        $this->addElement($submit);

     

    	

		
    }


}

