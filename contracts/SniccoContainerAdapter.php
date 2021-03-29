<?php
	
	namespace Contracts;
	
	use ArrayAccess;
	
	interface SniccoContainerAdapter extends ArrayAccess {
		
		/**
		 * Resolves the given type from the container.
		 *
		 * @param  string  $abstract
		 * @param  array  $parameters
		 * @return mixed
		 *
		 */
		public function make($abstract, array $parameters = []);
		
		/**
		 * Hotswap an underlying Container Instance
		 *
		 * @param $abstract
		 * @param $concrete
		 *
		 * @return mixed
		 */
		public function swapInstance( $abstract, $concrete);
		
		/**
		 * Register an existing instance as shared in the container.
		 *
		 * @param  string  $abstract
		 * @param  mixed  $instance
		 * @return mixed
		 */
		public function instance($abstract, $instance);
		
		/**
		 *
		 * Call the given Closure / class@method and inject its dependencies.
		 *
		 * @param $method
		 * @param $class
		 *
		 * @return mixed
		 */
		public function call ( $method , $class );
		
	}