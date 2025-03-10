<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginUserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //ログインユーザーIDを取得
         $loginId = Auth::id();
         //カート情報のユーザーIDを取得
         $requestId = $request->user_id;

         //ログイン者とカート情報作成者が一致しなければ別のページにリダイレクト
         if ($loginId != $requestId) {
            return redirect(route('/login'));
         }
        return $next($request);
    }
}
