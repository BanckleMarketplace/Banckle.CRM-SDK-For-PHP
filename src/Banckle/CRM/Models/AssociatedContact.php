<?php

namespace Banckle\CRM\Models;

class AssociatedContact {

  static $swaggerTypes = array(
      'name' => 'string',
      'id' => 'string',
      'updated' => 'DateTime',
      'type' => 'string',
      'created' => 'DateTime'

    );

  public $name; // string
  public $id; // string
  public $updated; // DateTime
  public $type; // string
  public $created; // DateTime
  }

