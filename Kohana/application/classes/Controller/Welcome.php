<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Default {

	
	public function before()
      	{
          parent::before();
         }        

	//The main method called.
	public function action_index()
        {

                //add the navigation bar
                $this->template->navigation = View::factory( 'navigation' );


                //add the content
                $this->template->bodycontent = View::factory( 'welcome' );
        }


      	public function after()
      	{
                parent::after();
      	}

} // End Welcome
