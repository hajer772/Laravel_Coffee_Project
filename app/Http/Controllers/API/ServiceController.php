<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        try {
            $data['services'] = ServiceResource::collection($this->service->active()->search()->latest('id')->get());

            return successResponse($data, 'success', 200);
        } catch (\Exception $e) {
            return failureResponse(__("message.something_wrong"), 'error', 400);
        }
    }
}
