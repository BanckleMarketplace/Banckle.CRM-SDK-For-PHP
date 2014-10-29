<?php

class WebsiteDto {

  static $swaggerTypes = array(
      'id' => 'string',
      'updated' => 'DateTime',
      'address' => 'string',
      'type' => 'string',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $id; // string
  public $updated; // DateTime
  public $address; // string
  public $type; // string
  public $parentId; // string
  public $created; // DateTime
  }

