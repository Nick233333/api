<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        // 指定允许域名访问
        header('Access-Control-Allow-Origin: *');
        // 指定请求方法
        header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS, PUT, PATCH');
        // 响应头设置
        header('Access-Control-Allow-Headers: x-requested-with, content-type');
        //是否携带cookie
        header('Access-Control-Allow-Credentials: true');
        return $next($request);
    }
}
