<?php

namespace Banckle\CRM\Models;

class ContactDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'favorite' => 'bool',
      'description' => 'string',
      'tags' => 'array[TagDto]',
      'creatorName' => 'string',
      'creatorId' => 'string',
      'skypeId' => 'string',
      'phones' => 'array[PhoneDto]',
      'version' => 'int',
      'id' => 'string',
      'updated' => 'DateTime',
      'isPrivate' => 'bool',
      'userId' => 'string',
      'tenantId' => 'string',
      'type' => 'string',
      'emails' => 'array[EmailDto]',
      'created' => 'DateTime',
      'addresses' => 'array[AddressDto]'

    );

  public $name; // string
  public $favorite; // bool
  public $description; // string
  public $tags; // array[TagDto]
  public $creatorName; // string
  public $creatorId; // string
  public $skypeId; // string
  public $phones; // array[PhoneDto]
  public $version; // int
  public $id; // string
  public $updated; // DateTime
  public $isPrivate; // bool
  public $userId; // string
  public $tenantId; // string
  public $type; // string
  public $emails; // array[EmailDto]
  public $created; // DateTime
  public $addresses; // array[AddressDto]
  }

