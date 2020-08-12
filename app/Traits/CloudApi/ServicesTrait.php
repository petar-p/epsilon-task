<?php

namespace App\Traits\CloudApi;

trait ServicesTrait {
    
    /**
     * Get a list of all services currently commissioned through CloudLX.
     *
     * @return json
     */
    public function getAllServices()
    {
        $response = $this->client->get(config('cloud_api.url') . '/api/services', [
            'headers' => [
                'Accept' => 'application/vnd.cloudlx.v1+json',                
                'Authorization' => 'Bearer '. $this->accessToken,
            ],
        ]);

        return json_decode((string) $response->getBody(), true);
    }
    
    /**
     * List details of a service using the CloudLX service ID.
     *
     * @param  integer $service_id
     * @return json
     */
    public function getServiceDetails($service_id)
    {
        $response = $this->client->get(config('cloud_api.url') . '/api/services/' . $service_id . '/service'  , [
            'headers' => [
                'Accept' => 'application/vnd.cloudlx.v1+json',                
                'Authorization' => 'Bearer '. $this->accessToken,
            ],
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}
