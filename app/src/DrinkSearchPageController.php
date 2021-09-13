<?php 

use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\PaginatedList;

use SilverStripe\Control\HTTP;
use SilverStripe\Control\HTTPRequest;

use SilverStripe\Forms\DropdownField; 
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\View\ArrayData;

class DrinkSearchPageController extends PageController {

		
		private static $allowed_actions = [

			'sortByPrice'
		];


		// Executes upon loading. 

		public function index(HTTPRequest $request)
		{
			$Drinks = DrinkObject::get();
			$Filters = ArrayList::create();

			// Sort by price.
			if($search = $request->getVar('Price')){
				$Filters->push(ArrayData::create([
					'Price' => "'$search'"
				]));

				$Drinks = $Drinks ->filter([
					'Price' => $search
				]);

			}
			// Create the paginated list.
			$pagintedDrinks = PaginatedList::create(

				$Drinks,
				$request
				// Set the number of drinks displayed in the grid.
			)->setPageLength(6)->setPaginationGetVar('s');

			$data = [
				'Results' => $pagintedDrinks,
				'Filters' => $Filters
			];

			return $data;
		}

		// Function for sorting by price.

		public function sortByPrice(){


				$form = Form::create(
					$this,
					'sortByPrice',
					FieldList::create(
					DropdownField::create('Price', '', DrinkObject::get()->map('Price', 'Price'))
					->setEmptyString('Sort by Price')
				),
				FieldList::create(FormAction::create('sortPrice','Submit')) // Could implement a handler.
			);

			$form->setFormMethod('GET')->setFormAction($this->Link())
				->disableSecurityToken()
				->loadDataFrom($this->request->getVars());

				return $form;
			
		}

}