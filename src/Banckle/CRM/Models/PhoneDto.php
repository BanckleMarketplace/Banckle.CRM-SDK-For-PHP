<?php

namespace Banckle\CRM\Models;

class PhoneDto {

  static $swaggerTypes = array(
      'number' => 'string',
      'id' => 'string',
      'updated' => 'DateTime',
      'type' => 'string',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $number; // string
  public $id; // string
  public $updated; // DateTime
  public $type; // string
  public $parentId; // string
  public $created; // DateTime
  }

