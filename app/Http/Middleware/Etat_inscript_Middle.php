<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Etat_inscript_Middle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $event = \App\Models\Event::first();
        
        if($event->etat_inscript=="active"){

        return $next($request);
    }else{
        return redirect()->route('suivi')->with('success', "Inscription est fermée");

    }
    }
}
