<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RedirectToDefaultPrefix
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $prefix = config('fortify.prefix');

        // التحقق من وجود البادئة المطلوبة في رابط الصفحة
        if (!$this->hasRequiredPrefix($request, $prefix)) {
            return redirect($this->getDefaultPath());
        }

        return $next($request);
    }

    private function hasRequiredPrefix($request, $prefix)
    {
        $currentPath = $request->path();
        $requiredPrefix = "cms/{guard}/";

        // تحقق من وجود البادئة المطلوبة في رابط الصفحة
        return Str::startsWith($currentPath, $requiredPrefix);
    }

    private function getDefaultPath()
    {
        // احصل على المسار الافتراضي
        return route('list');
    }
}
