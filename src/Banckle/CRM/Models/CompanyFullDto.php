<?php

namespace Banckle\CRM\Models;

class CompanyFullDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'favorite' => 'bool',
      'description' => 'string',
      'tags' => 'array[TagDto]',
      'creatorName' => 'string',
      'websites' => 'array[WebsiteDto]',
      'customFields' => 'array[CustomFieldDto]',
      'associatedFiles' => 'Dictionary2Guid',
      'industry' => 'string',
      'employees' => 'array[PersonDto]',
      'creatorId' => 'string',
      'skypeId' => 'string',
      'phones' => 'array[PhoneDto]',
      'version' => 'int',
      'id' => 'string',
      'tasks' => 'array[TaskOccurrenceDto]',
      'updated' => 'DateTime',
      'isPrivate' => 'bool',
      'established' => 'DateTime',
      'notes' => 'array[NoteDto]',
      'userId' => 'string',
      'tenantId' => 'string',
      'type' => 'string',
      'deals' => 'array[DealDto]',
      'socials' => 'array[SocialDto]',
      'emails' => 'array[EmailDto]',
      'created' => 'DateTime',
      'addresses' => 'array[AddressDto]'

    );

  public $name; // string
  public $favorite; // bool
  public $description; // string
  public $tags; // array[TagDto]
  public $creatorName; // string
  public $websites; // array[WebsiteDto]
  public $customFields; // array[CustomFieldDto]
  public $associatedFiles; // Dictionary`2[[Guid`
  public $industry; // string
  public $employees; // array[PersonDto]
  public $creatorId; // string
  public $skypeId; // string
  public $phones; // array[PhoneDto]
  public $version; // int
  public $id; // string
  public $tasks; // array[TaskOccurrenceDto]
  public $updated; // DateTime
  public $isPrivate; // bool
  public $established; // DateTime
  public $notes; // array[NoteDto]
  public $userId; // string
  public $tenantId; // string
  public $type; // string
  public $deals; // array[DealDto]
  public $socials; // array[SocialDto]
  public $emails; // array[EmailDto]
  public $created; // DateTime
  public $addresses; // array[AddressDto]
  }

