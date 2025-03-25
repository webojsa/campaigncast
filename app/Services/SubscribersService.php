<?php
declare(strict_types = 1);
namespace App\Services;

use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Request;

class SubscribersService
{
    public function __construct()
    {
       //
    }

    public function storeNewSubscriber(StoreSubscriberRequest $request): Subscriber{
        $user = $request->user();
        $data = $request->only(['email', 'phone', 'push_token', 'name', 'country']);
        return $user->subscribers()->create($data);
    }
}
