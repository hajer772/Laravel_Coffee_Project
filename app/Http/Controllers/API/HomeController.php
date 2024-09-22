<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Http\Resources\CounterResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\SliderResource;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $slider;
    private $page;
    private $feature;
    private $counter;
    private $client;

    public function __construct(Slider $slider, Page $page, Feature $feature, Counter $counter, Client $client)
    {
        $this->slider = $slider;
        $this->page = $page;
        $this->feature = $feature;
        $this->counter = $counter;
        $this->client = $client;
    }

    public function __invoke(Request $request)
    {
        try {
            $data['sliders'] = SliderResource::collection($this->slider->active()->latest('id')->get());
            $data['pages'] = PageResource::collection($this->page->get());
            $data['features'] = FeatureResource::collection($this->feature->active()->latest('id')->get());
            $data['counters'] = CounterResource::collection($this->counter->active()->latest('id')->get());
            $data['clients'] = ClientResource::collection($this->client->active()->latest('id')->get());
            return successResponse($data, 'success', 200);
        } catch (\Exception $e) {
            return failureResponse(__("message.something_wrong"), 'error', 400);
        }
    }
}
