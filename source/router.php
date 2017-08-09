<?php

namespace routing;

use closure;

class router implements \agreed\router
{
	private $routes = [ ];

	public function add ( string $key, closure $task )
	{
		$this->routes [ $key ] = $task;
	}

	public function match ( string $key ) : closure
	{
		return $this->routes [ $key ];
	}

	public function has ( string $key ) : bool
	{
		return array_key_exists ( $key, $this->routes );
	}
}