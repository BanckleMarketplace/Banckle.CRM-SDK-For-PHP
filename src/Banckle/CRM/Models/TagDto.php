<?php

namespace Banckle\CRM\Models;

class TagDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'id' => 'string',
      'updated' => 'DateTime',
      'tenantId' => 'string',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $name; // string
  public $id; // string
  public $updated; // DateTime
  public $tenantId; // string
  public $parentId; // string
  public $created; // DateTime
  }

