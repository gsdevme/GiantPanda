<?php

	/**
	 * Router
	 *
	 * @author Gavin Staniforth <Email:gsdev@me.com> <Arpanet:http://gsdev.me> @gsphpdev
	 */

	namespace Panda\System;

	use \SplFixedArray;

	/**
	 * Router class, this will parse the request into an array which can be routed, it will added default controllers or methods if needed
	 */
	class Router
	{

		private $_request, $_panda, $_isDirectory;

		/**
		 * Assigns Request + Panda, then checks what application we need to route to
		 * 
		 * @param Request $request
		 * @param Panda $panda 
		 */
		public function __construct(Request $request, Panda $panda)
		{
			$this->_request = $request;
			$this->_panda = $panda;

			// Get application name
			$application = $this->_request->getApplication();

			// If application directory exists
			if (($application !== null) && (is_dir($this->_panda->root . $this->_request->getApplication()))) {
				$this->_panda->application = $this->_request->getApplication();
			}

			// Loads of the application configuration into the Panda registry
			$this->_panda->loadApplicationConfig();
		}

		/**
		 * Returns an array of the route
		 * 
		 * @return array
		 */
		public function getRoute()
		{
			$request = $this->_request->getRequest();

			// is there a request string?
			if($request){
				// Do we have any rewrites defined?
				if((isset($this->_panda->rewrites)) && (!empty($this->_panda->rewrites))){
					$request = preg_replace($this->_panda->rewrites['pattern'], $this->_panda->rewrites['replacement'], $request);
				}else{
					$request = $this->_request->getRequest();
				}

				// If there is a request, explode into array based upon slash, else load default controller/method
				$route = explode('/', $request);
			}else{
				$route = array($this->_panda->defaultController, $this->_panda->defaultMethod);
			}

			// Check if the first is a folder and not a controller
			if (is_dir($this->_panda->root . $this->_panda->application . '/Controllers/' . ucfirst($route[0]))) {
				$this->_isDirectory = ( bool ) true;

				// If we dont have a controller defined
				if (count($route) == 1) {
					array_push($route, $this->_panda->defaultController);
				}

				// If we dont have a method defined
				if (count($route) == 2) {
					array_push($route, $this->_panda->defaultMethod);
				}
			}

			// If we dont have a mrthod defined
			if (count($route) == 1) {
				array_push($route, $this->_panda->defaultMethod);
			}

			return $route;
		}

		/**
		 * Returns of the route is within a folder
		 * 
		 * @return bool
		 */
		public function isDirectory()
		{
			return ( bool ) $this->_isDirectory;
		}

	}