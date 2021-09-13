<?php 
	
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use SilverStripe\Forms\GridField\GridFieldComponent;
	
	class DrinkSearchPage extends Page {


			private static $has_many = [
				'DrinkObjects' => DrinkObject::class 
			];

			public function getCMSFields(){
				$fields = parent::getCMSFields();

				 $fields->addFieldToTab('Root.Main',GridField::create(
					'DrinkObjects',
					'Drinks',
					$this->DrinkObjects(),
					GridFieldConfig_RecordEditor::create()
			));

				 return $fields;
			}



	}