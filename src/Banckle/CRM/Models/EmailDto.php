<?php

namespace Banckle\CRM\Models;

class EmailDto {

  static $swaggerTypes = array(
      'id' => 'string',
      'updated' => 'DateTime',
      'address' => 'string',
      'type' => 'string',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $id; // Guid
  public $updated; // DateTime
  public $address; // string
  public $type; // string
  public $parentId; // string
  public $created; // DateTime
  }

