<?php

namespace Banckle\CRM\Models;

class CustomFieldDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'valueHolder' => 'CustomFieldValue',
      'options' => 'array[EnumOption]',
      'id' => 'string',
      'updated' => 'DateTime',
      'type' => 'string',
      'created' => 'DateTime'

    );

  public $name; // string
  public $valueHolder; // CustomFieldValue
  public $options; // array[EnumOption]
  public $id; // string
  public $updated; // DateTime
  public $type; // string
  public $created; // DateTime
  }

