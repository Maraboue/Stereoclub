<?php

	use SilverStripe\ORM\DataObject;
	use SilverStripe\Assets\File;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\NumericField;
	use SilverStripe\Forms\DatetimeField;


	class DrinkObject extends DataObject{


		
		private static $db = [
				'Title' => 'Varchar',
				'Description' => 'Text',
				'Ingredients' => 'Text',
				'Price' => 'Int',
				'Timestamp' => 'Datetime'
  		];

		private static $has_one = [

				'ImageSource' => File::class,
				'DrinkSearchPage' => DrinkSearchPage::class,
				
		];

		private static $owns = [

				'ImageSource',
				'Title',
				'Description',
				'Ingredients',
				'Price'
		];



		// Return the FieldList for the DrinkObject to the CMS. 
		public function getCMSFields(){
			return new FieldList(
				UploadField::create('ImageSource'),
				TextField::create('Title','Drink Title'),
				TextareaField::create('Description','Drink Description'),
				TextareaField::create('Ingredients','Drink Ingredients'),
				NumericField::create('Price', 'Drink Price'),
				DatetimeField::create('Timestamp','Date added') // only for CMS, not used in front end. 
			);
		}
	}
