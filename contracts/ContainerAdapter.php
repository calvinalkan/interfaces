<?php
	
	namespace Contracts;
	
	use ArrayAccess;
    use Closure;

    interface ContainerAdapter extends ArrayAccess {
		
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
		 * @param         $callable
		 * @param  array  $parameters
		 *
		 * @return mixed
		 */
		public function call ( $callable , array $parameters = [] );

        /**
         * Register a binding with the container.
         * This will not be a singleton but a new object everytime it gets resolved.
         *
         * @param  string  $abstract
         * @param  Closure|string|null  $concrete
         * @return void
         */
        public function bind( $abstract, $concrete );

        /**
         * Register a shared binding in the container.
         * This object will be a singleton always
         *
         * @param  string  $abstract
         * @param  Closure|string|null  $concrete
         * @return void
         */
        public function singleton($abstract, $concrete );

	}