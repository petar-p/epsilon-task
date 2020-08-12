<?php

namespace App\Traits\CloudApi;

trait AuthorizationTrait {
    
    /**
     * Authorize to CloudLX API and obatain an access token
     * 
     * @return void
     */
    public function authorizeToCloudApi()
    {
        $response = $this->client->post(config('cloud_api.url') . '/api/oauth2/access-token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => config('cloud_api.client_id'),
                'client_secret' => config('cloud_api.client_secret'),                
            ],
        ]);

        $response = json_decode((string) $response->getBody(), true);       
        
        $this->accessToken = $response['access_token'];
    }
}
