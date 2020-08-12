<?php

namespace App\Http\Controllers\Cloud;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cloud\ServiceDetailsRequest;
use App\Traits\CloudApi\AuthorizationTrait;
use App\Traits\CloudApi\ServicesTrait;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;

class ServiceController extends Controller
{
    use AuthorizationTrait, ServicesTrait;
    
    /**
     * Access token
     *
     * @var string
     */
    private $accessToken;
        
    /**
     * Guzzle client
     *
     * @var mixed
     */
    protected $client;
    
    /**
     * Create the Guzzle client
     *
     * @param  mixed $client
     * @return void
     */
    public function __construct(Guzzle $client)
    {
        $this->client = $client;
    }
    
    /**
     * Display all services from CloudLX API
     *
     * @return view
     */
    public function showServices()
    {
        $this->authorizeToCloudApi(); 
        $services = $this->getAllServices();       

        return view('cloud.services', compact('services'));
    }
        
    /**
     * Display service details 
     *
     * @param ServiceDetailsRequest $request
     * @return view
     */
    public function showServiceDetails(ServiceDetailsRequest $request)
    {
        $this->authorizeToCloudApi();
        $service = $this->getServiceDetails($request->service_id);        

        return view('cloud.service-details', compact('service'));
    }
}
