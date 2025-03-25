<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscriberRequest;
use App\Services\SubscribersService;
use App\Traits\SelectOptions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscribersController extends Controller
{
    use SelectOptions;
    private $service;

    public function __construct(SubscribersService $service){
        $this->service = $service;
    }

    public function create(){
        $countryOptions = $this->countryOptions();
        return view('subscribers.create', ['countryOptions' => $countryOptions]);
    }
    public function storeSubscriber(StoreSubscriberRequest $request): RedirectResponse{
        try{
            $subscriber = $this->service->storeNewSubscriber($request);
            return redirect()->route('subscribers.create')
                ->with('success', 'Subscriber created successfully');
        }catch (\Throwable $e){
            dd($e->getMessage());
            //TODO: Add log
            return redirect()->route('subscribers.create')
                ->with('error', 'Error: Subscriber not created');
        }
    }
}
