<?php
//???????
namespace App\Http\Middleware;

use Closure;
use Route;
use App\Article;
use Auth;
use Redirect;
class CanOperation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!(Auth::user()->is_admin || Auth::id() == Article::find(Route::input('id'))->user_id))
        {
            return Redirect::to('/');
        }
      return $next($request);
    }
}