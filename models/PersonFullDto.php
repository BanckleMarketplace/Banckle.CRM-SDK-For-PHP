<?php

class PersonFullDto {

  static $swaggerTypes = array(
      'birthday' => 'DateTime',
      'name' => 'string',
      'favorite' => 'bool',
      'role' => 'string',
      'description' => 'string',
      'tags' => 'array[TagDto]',
      'creatorName' => 'string',
      'colleagues' => 'array[PersonDto]',
      'websites' => 'array[WebsiteDto]',
      'customFields' => 'array[CustomFieldDto]',
      'associatedFiles' => 'Dictionary2Guid',
      'creatorId' => 'string',
      'skypeId' => 'string',
      'phones' => 'array[PhoneDto]',
      'lastName' => 'string',
      'version' => 'int',
      'firstName' => 'string',
      'id' => 'string',
      'tasks' => 'array[TaskOccurrenceDto]',
      'updated' => 'DateTime',
      'companyName' => 'string',
      'isPrivate' => 'bool',
      'notes' => 'array[NoteDto]',
      'userId' => 'string',
      'title' => 'string',
      'tenantId' => 'string',
      'type' => 'string',
      'deals' => 'array[DealDto]',
      'socials' => 'array[SocialDto]',
      'emails' => 'array[EmailDto]',
      'companyId' => 'string',
      'created' => 'DateTime',
      'addresses' => 'array[AddressDto]'

    );

  public $birthday; // DateTime
  public $name; // string
  public $favorite; // bool
  public $role; // string
  public $description; // string
  public $tags; // array[TagDto]
  public $creatorName; // string
  public $colleagues; // array[PersonDto]
  public $websites; // array[WebsiteDto]
  public $customFields; // array[CustomFieldDto]
  public $associatedFiles; // Dictionary`2[[Guid`
  public $creatorId; // string
  public $skypeId; // string
  public $phones; // array[PhoneDto]
  public $lastName; // string
  public $version; // int
  public $firstName; // string
  public $id; // string
  public $tasks; // array[TaskOccurrenceDto]
  public $updated; // DateTime
  public $companyName; // string
  public $isPrivate; // bool
  public $notes; // array[NoteDto]
  public $userId; // string
  public $title; // string
  public $tenantId; // string
  public $type; // string
  public $deals; // array[DealDto]
  public $socials; // array[SocialDto]
  public $emails; // array[EmailDto]
  public $companyId; // string
  public $created; // DateTime
  public $addresses; // array[AddressDto]
  }

