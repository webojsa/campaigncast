<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Services\SubscribersService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
class SubscribersController extends Controller
{
    private $service;

    public function __construct(SubscribersService $service){
        $this->service = $service;
    }
    public function storeSubscriber(StoreSubscriberRequest $request): JsonResponse{
        try{
            $subscriber = $this->service->storeNewSubscriber($request);
            return response()->json([
                'message' => 'Subscriber created successfully',
                'subscriber' => $subscriber
            ], Response::HTTP_CREATED);
        }catch (\Throwable $e){
            Log::channel('error')->error([
                'message' => 'Subscriber storing failed',
                'error' => $e->getMessage(),
                'user' => $request->user()->getAttributes()
            ]);
            return response()->json([
                'message' => 'Error: Subscriber not created',
                //'error' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
