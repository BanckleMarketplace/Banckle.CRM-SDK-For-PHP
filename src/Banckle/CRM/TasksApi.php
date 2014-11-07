<?php

namespace Banckle\CRM;

class TasksApi {

    function __construct($apiClient) {
        $this->apiClient = $apiClient;
    }

    /**
     * getTasks
     * Gets all tasks
     * 
     * @return Array[TaskOccurrenceDto]
     */
    public function getTasks() {
        //parse inputs
        $resourcePath = "/tasks";
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
        if(! $response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
                                                        'array[TaskOccurrenceDto]');
        return $responseObject;
    }
  
    /**
     * createTask
     * Create a Task
     * 
     * body, array: Task Info (required)
     * 
     * @return ExecutionResult
     */
    public function createTask($body) {
        //parse inputs
        $resourcePath = "/tasks";
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
     * getTask
     * Get task by id
     * 
     * id, string: Task id (required)
     * 
     * @return TaskOccurrenceDto
     */
    public function getTask($id) {
        //parse inputs
        $resourcePath = "/tasks/{id}";
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
                                                        'TaskOccurrenceDto');
        return $responseObject;
    }
    
    /**
     * updateTask
     * Update Task
     * 
     * id, string: Task id (required)
     * body, array: Task Info (required)
     * 
     * @return ExecutionResult
     */
    public function updateTask($id, $body) {
        //parse inputs
        $resourcePath = "/tasks/{id}";
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
     * deleteTask
     * Delete Task by id
     * 
     * id, string: Task id (required)
     * 
     * @return ExecutionResult
     */
    public function deleteTask($id) {
        //parse inputs
        $resourcePath = "/tasks/{id}";
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

