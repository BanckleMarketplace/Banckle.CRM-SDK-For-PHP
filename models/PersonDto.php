<?php

class PersonDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'favorite' => 'bool',
      'role' => 'string',
      'description' => 'string',
      'tags' => 'array[TagDto]',
      'creatorName' => 'string',
      'creatorId' => 'string',
      'skypeId' => 'string',
      'phones' => 'array[PhoneDto]',
      'lastName' => 'string',
      'version' => 'int',
      'firstName' => 'string',
      'id' => 'string',
      'updated' => 'DateTime',
      'companyName' => 'string',
      'birthDay' => 'DateTime',
      'isPrivate' => 'bool',
      'userId' => 'string',
      'title' => 'string',
      'tenantId' => 'string',
      'type' => 'string',
      'emails' => 'array[EmailDto]',
      'companyId' => 'string',
      'created' => 'DateTime',
      'addresses' => 'array[AddressDto]'

    );

  public $name; // string
  public $favorite; // bool
  public $role; // string
  public $description; // string
  public $tags; // array[TagDto]
  public $creatorName; // string
  public $creatorId; // string
  public $skypeId; // string
  public $phones; // array[PhoneDto]
  public $lastName; // string
  public $version; // int
  public $firstName; // string
  public $id; // string
  public $updated; // DateTime
  public $companyName; // string
  public $birthDay; // DateTime
  public $isPrivate; // bool
  public $userId; // string
  public $title; // string
  public $tenantId; // string
  public $type; // string
  public $emails; // array[EmailDto]
  public $companyId; // string
  public $created; // DateTime
  public $addresses; // array[AddressDto]
  }

