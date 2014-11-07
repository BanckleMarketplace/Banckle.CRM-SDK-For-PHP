<?php

namespace Banckle\CRM\Models;

class TypeDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'id' => 'string',
      'updated' => 'DateTime',
      'entity' => 'string',
      'tenantId' => 'string',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $name; // string
  public $id; // string
  public $updated; // DateTime
  public $entity; // string
  public $tenantId; // string
  public $parentId; // string
  public $created; // DateTime
  }

