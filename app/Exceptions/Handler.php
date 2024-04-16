<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    

    // public function render($request, Exception $exception)
    // {
    //     if ($exception instanceof NotFoundHttpException) {
    //         return response()->view('errors/404', ['invalid_url' => true], 404);
    //     }

    //     // if ($exception instanceof TokenMismatchException && Auth::guest()) {
    //     //     error_log('Error :' . $exception->getMessage());
    //     //     abort(500);
    //     // }


    //     if ($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException && getenv('APP_ENV') != 'local') {
    //         error_log('Error :' . $exception->getMessage());
    //         abort(404);
    //     }

    //     return parent::render($request, $exception);
    // }
}
