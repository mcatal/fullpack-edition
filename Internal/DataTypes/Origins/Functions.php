<?php namespace ZN\DataTypes;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\DataTypes\Exception\InvalidArgumentException;

class Functions implements FunctionsInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Call Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param callable $callback
    // @param array    $params
    //
    //--------------------------------------------------------------------------------------------------------
    public function callArray(Callable $callback, Array $params = [])
    {
        return call_user_func_array($callback, $params);
    }

    //--------------------------------------------------------------------------------------------------------
    // Call
    //--------------------------------------------------------------------------------------------------------
    //
    // @param variadic $args
    //
    //--------------------------------------------------------------------------------------------------------
    public function call(...$args)
    {
        return call_user_func(...$args);
    }

    //--------------------------------------------------------------------------------------------------------
    // Static Call Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param callable $callback
    // @param array    $params
    //
    //--------------------------------------------------------------------------------------------------------
    public function staticCallArray(Callable $callback, Array $params = [])
    {
        return forward_static_call_array($callback, $params);
    }

    //--------------------------------------------------------------------------------------------------------
    // Static Call
    //--------------------------------------------------------------------------------------------------------
    //
    // @param variadic $args
    //
    //--------------------------------------------------------------------------------------------------------
    public function staticCall(...$args)
    {
        return forward_static_call(...$args);
    }

    //--------------------------------------------------------------------------------------------------------
    // Shutdown
    //--------------------------------------------------------------------------------------------------------
    //
    // @param variadic $args
    //
    //--------------------------------------------------------------------------------------------------------
    public function shutdown(...$args)
    {
        return register_shutdown_function(...$args);
    }

    //--------------------------------------------------------------------------------------------------------
    // Tick
    //--------------------------------------------------------------------------------------------------------
    //
    // @param variadic $args
    //
    //--------------------------------------------------------------------------------------------------------
    public function tick(...$args)
    {
        return register_tick_function(...$args);
    }

    //--------------------------------------------------------------------------------------------------------
    // Untick
    //--------------------------------------------------------------------------------------------------------
    //
    // @param variadic $args
    //
    //--------------------------------------------------------------------------------------------------------
    public function untick(...$args)
    {
        return unregister_tick_function(...$args);
    }

    //--------------------------------------------------------------------------------------------------------
    // Defined
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function defined() : Array
    {
        return get_defined_functions();
    }
}
