<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;
#[
    OA\Info(version: "1.0.0", description: "School API Documentation", title: "School API
    Documentation"),
    OA\Server(url: 'http://127.0.0.1:8000/api', description: "local server"),
    OA\Server (url: 'http://staging.example.com', description: "staging server"),
    OA\Server(url: 'http://example.com', description: "production server"),
    OA\SecurityScheme (securityScheme: 'bearerAuth', type: "http", name: "Authorization", in:
    "header"),
    ]
abstract class Controller
{
    //
}
