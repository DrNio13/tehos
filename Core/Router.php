<?php

// namespace Core;

class Router {

	// the routing table
	protected $routes = [];

	// parameters of the matched route
	protected $params = [];

	// $route the route url
	// $params parameters from the routing table - 	controller, action etc.
	public function add($route, $params) {
		$this->routes[$route] = $params;
	}

	public function match($url) {
		foreach ($this->routes as $route => $params) {
			if ($url == $route) {
				$this->params = $params;
				return true;
			}
		}
		
		return false;
	}

	public function getRoutes() {
		return $this->routes;
	}

	public function getParams() {
		return $this->params;
	}
}