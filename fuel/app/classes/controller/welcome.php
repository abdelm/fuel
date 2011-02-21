<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Welcome extends Controller {

	public function action_index()
	{
		return new Response(View::factory('welcome/index'));
	}

	public function action_404()
	{
		return new Response(View::factory('welcome/404'), 404);
	}
}