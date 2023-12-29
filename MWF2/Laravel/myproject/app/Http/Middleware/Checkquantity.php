<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \Redirect;
class Checkquantity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->input('qunatity'));
        if ($request->input('qunatity') < 0) {
            // return redirect('home');
            // dd("inside if");
            return Redirect::back()->withErrors(['msg' => 'Invalid Quantity']);

        }
        // if ($request->input('_tkn') !== '123') {
        //     return Redirect::back()->withErrors(['msg' => 'Invalid Quantity']);
        // }
 
        return $next($request);
        // return $next($request);
    }
}
