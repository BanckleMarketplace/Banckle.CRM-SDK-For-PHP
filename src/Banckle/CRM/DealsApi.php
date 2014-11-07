<?php

namespace Banckle\CRM;

class DealsApi {

    function __construct($apiClient) {
        $this->apiClient = $apiClient;
    }

    /**
     * getDeals
     * Gets all deals
     * 
     * @return DealDto
     */
    public function getDeals() {
        //parse inputs
        $resourcePath = "/deals";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        //make the API Call
        if (! isset($body)) {
            $body = null;
        }
        
        $response = $this->apiClient->callAPI($resourcePath, $method,
                                              $queryParams, $body,
                                              $headerParams);
        if(! $response){
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
                                                        'array[DealDto]');
        return $responseObject;
    }
    
    /**
     * createDeal
     * Create a deal
     * 
     * body, string: Deal Info (required)
     * 
     * @return ExecutionResult
    */
    public function createDeal($body) {
        //parse inputs
        $resourcePath = "/deals";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        //make the API Call
        if (! isset($body)) {
            $body = null;
        }
        $response = $this->apiClient->callAPI($resourcePath, $method,
                                              $queryParams, $body,
                                              $headerParams);
        if(! $response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
                                                        'ExecutionResult');
        return $responseObject;
    }
    
    /**
     * getDeal
     * Get deal by id
     * 
     * id, string: Deal id (required)
     * 
     * @return DealFullDto
    */
    public function getDeal($id) {
        //parse inputs
        $resourcePath = "/deals/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($id != null) {
            $resourcePath = str_replace("{" . "id" . "}",
                                        $this->apiClient->toPathValue($id), $resourcePath);
        }
        
        //make the API Call
        if (! isset($body)) {
            $body = null;
        }
        $response = $this->apiClient->callAPI($resourcePath, $method,
                                              $queryParams, $body,
                                              $headerParams);
        if(! $response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
								'DealFullDto');
        return $responseObject;
    }
    
    /**
     * updateDeal
     * Update deal
     * 
     * id, string: Deal id (required)
     * body, string: Deal Info (required)
     * 
     * @return ExecutionResult
     */
    public function updateDeal($id, $body) {
        //parse inputs
        $resourcePath = "/deals/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($id != null) {
            $resourcePath = str_replace("{" . "id" . "}",
                                        $this->apiClient->toPathValue($id), $resourcePath);
        }
        
        //make the API Call
        if (! isset($body)) {
            $body = null;
        }
        $response = $this->apiClient->callAPI($resourcePath, $method,
                                              $queryParams, $body,
                                              $headerParams);
        if(! $response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
								'ExecutionResult');
        return $responseObject;
    }
    
    /**
     * deleteDeal
     * Delete deal by id
     * 
     * id, string: Deal id (required)
     * 
     * @return ExecutionResult
     */
    public function deleteDeal($id) {
        //parse inputs
        $resourcePath = "/deals/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($id != null) {
            $resourcePath = str_replace("{" . "id" . "}",
                                        $this->apiClient->toPathValue($id), $resourcePath);
        }
        
        //make the API Call
        if (! isset($body)) {
            $body = null;
        }
        $response = $this->apiClient->callAPI($resourcePath, $method,
                                              $queryParams, $body,
                                              $headerParams);
        if(! $response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
								'ExecutionResult');
        return $responseObject;
    }

}

