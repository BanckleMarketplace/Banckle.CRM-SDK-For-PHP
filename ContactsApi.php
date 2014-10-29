<?php

class ContactsApi {

    function __construct($apiClient) {
        $this->apiClient = $apiClient;
    }

    /**
     * getContacts
     * Get all contacts
     * 
     * @return Array[ContactDto]
     */
    public function getContacts() {
        //parse inputs
        $resourcePath = "/contacts";
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
                                                        'array[ContactDto]');
        return $responseObject;
    }
    
    /**
     * createDealByContactId
     * Create a deal for a contact
     * 
     * contactId, string: Contact Id (required)
     * body, array: Deal Information (required)
     * 
     * @return ExecutionResult
     */
    public function createDealByContactId($contactId, $body) {
        //parse inputs
        $resourcePath = "/contacts/{contactId}/adddeals";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($contactId != null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                                        $this->apiClient->toPathValue($contactId), $resourcePath);
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
     * createDealByContactName
     * Create a deal for a contact with Name
     * 
     * contactName, string: Contact name (required)
     * body, string: Deal Info (required)
     * 
     * @return ExecutionResult
    */
    public function createDealByContactName($contactName, $body) {
        //parse inputs
        $resourcePath = "/contacts/{contactName}/deals";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($contactName != null) {
            $resourcePath = str_replace("{" . "contactName" . "}",
                                        $this->apiClient->toPathValue($contactName), $resourcePath);
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
     * getContact
     * Get contact by id
     * 
     * id, string: Contact id (required)
     * 
     * @return ContactFullDto
     */
    public function getContact($id) {
        //parse inputs
        $resourcePath = "/contacts/{id}";
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
                                                        'ContactFullDto');
        return $responseObject;
    }
    
    /**
     * deleteContact
     * Delete contact by id
     * 
     * id, string: Contact id (required)
     * 
     * @return ExecutionResult
     */
    public function deleteContact($id) {
        //parse inputs
        $resourcePath = "/contacts/{id}";
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
    
    /**
    * getContactByName
    * Get contact by name
    * name, string: Contact Name (required)
    * @return ContactFullDto
    */
    public function getContactByName($name) {
        //parse inputs
        $resourcePath = "/contacts/byname/{name}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($name != null) {
            $resourcePath = str_replace("{" . "name" . "}",
                                        $this->apiClient->toPathValue($name), $resourcePath);
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
                                                        'ContactFullDto');
        return $responseObject;
    }
    
    /**
     * createCompany
     * Create a company
     * 
     * body, string: Company Info (required)
     * 
     * @return 
     */
    public function createCompany($body) {
        //parse inputs
        $resourcePath = "/contacts/company";
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
    }
    
    /**
     * getCompanyByName
     * Get company by name
     * 
     * companyName, string: Company name (required)

     * @return CompanyFullDto
     */
    public function getCompanyByName($companyName) {
        //parse inputs  
        $resourcePath = "/contacts/company/{companyName}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($companyName != null) {
            $resourcePath = str_replace("{" . "companyName" . "}",
                                        $this->apiClient->toPathValue($companyName), $resourcePath);
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
                                                        'CompanyFullDto');
        return $responseObject;
    }
    
    /**
     * getEmployeesByCompanyName
     * Get employees by company name
     * 
     * companyName, string: Company name (required)
     * 
     * @return Array[PersonDto]
     */
    public function getEmployeesByCompanyName($companyName) {
        //parse inputs
        $resourcePath = "/contacts/company/{companyName}/employees";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($companyName != null) {
            $resourcePath = str_replace("{" . "companyName" . "}",
                                        $this->apiClient->toPathValue($companyName), $resourcePath);
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
                                                        'array[PersonDto]');
        return $responseObject;
    }

    /**
     * createEmployee
     * Create an employee
     * 
     * companyName, string: Company name (required)
     * body, string: Employee Info (optional)
     * 
     * @return 
     */
    public function createEmployee($companyName, $body) {
        //parse inputs
        $resourcePath = "/contacts/company/{companyName}/employees";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($companyName != null) {
            $resourcePath = str_replace("{" . "companyName" . "}",
                                        $this->apiClient->toPathValue($companyName), $resourcePath);
        }
        
    //make the API Call
    if (! isset($body)) {
        $body = null;
    }
    $response = $this->apiClient->callAPI($resourcePath, $method,
                                          $queryParams, $body,
                                          $headerParams);
    }
    
    /**
    * updateCompany
    * Update a company
    * id, string: Company id (required)
    * body, string: Company Info (required)
    * @return ExecutionResult
    */
    public function updateCompany($id, $body) {

        //parse inputs
        $resourcePath = "/contacts/company/{id}";
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
     * createPerson
     * Create a person
     * body, string: Person Info (required)
     * @return 
     */
    public function createPerson($body) {
        //parse inputs
        $resourcePath = "/contacts/person";
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
    }

    /**
     * updatePerson
     * Update a person
     * id, string: Person id (required)
     * body, string: Person Info (required)
     * @return ExecutionResult
     */
    public function updatePerson($id, $body) {
        //parse inputs
        $resourcePath = "/contacts/person/{id}";
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
     * getPersonByName
     * Get person by name
     * 
     * personName, string: Person name (required)
     * @return PersonFullDto
     */
    public function getPersonByName($personName) {
        //parse inputs
        $resourcePath = "/contacts/person/{personName}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($personName != null) {
            $resourcePath = str_replace("{" . "personName" . "}",
                                        $this->apiClient->toPathValue($personName), $resourcePath);
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
                                                        'PersonFullDto');
        return $responseObject;
    }
    
    /**
    * getColleaguesByPersonName
    * Get colleagues by person name
     * 
    * personName, string: Person name (required)
     * 
    * @return Array[PersonDto]
    */
    public function getColleaguesByPersonName($personName) {
        //parse inputs
        $resourcePath = "/contacts/person/{personName}/colleagues";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($personName != null) {
            $resourcePath = str_replace("{" . "personName" . "}",
                                        $this->apiClient->toPathValue($personName), $resourcePath);
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
                                                        'array[PersonDto]');
        return $responseObject;
    }
    
    /**
     * createColleague
     * Create a colleague
     * 
     * personName, string: Person name (required)
     * body, string: Person Info (required)
     * 
     * @return Array[PersonDto]
     */
    public function createColleague($personName, $body) {
        //parse inputs
        $resourcePath = "/contacts/person/{personName}/colleagues";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($personName != null) {
            $resourcePath = str_replace("{" . "personName" . "}",
                                        $this->apiClient->toPathValue($personName), $resourcePath);
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
                                                        'array[PersonDto]');
        return $responseObject;
    }
    
    /**
     * getcontactstagstag
     * Search contacts by tag
     * tag, string: Contact tag (required)
     * @return Array[ContactDto]
     */
    public function getContactsByTag($tag) {
        //parse inputs
        $resourcePath = "/contacts/tags/{tag}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = 'application/json';

        if($tag != null) {
        $resourcePath = str_replace("{" . "tag" . "}",
                                    $this->apiClient->toPathValue($tag), $resourcePath);
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
                                                        'array[ContactDto]');
        return $responseObject;
    }

}

