<?php

namespace App\Http\Middleware\API\Course;

use App\Models\Course;
use Closure;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class UpdateOrDestroyMiddleware
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
        $couseId = $request->id;
        $token = JWTAuth::getToken();
        $user = JWTAuth::toUser($token);
        $course = Course::findOrFail($couseId);
        if($course->created_by != $user->id){
            return response()->json([
                'status' => 'Unauthorized',
                'message' => 'You can not update the course. The course created by other user.'
            ], 422);
        }
        return $next($request);
    }
}
