<?php

class SocialDto {

  static $swaggerTypes = array(
      'network' => 'string',
      'id' => 'string',
      'updated' => 'DateTime',
      'address' => 'string',
      'type' => 'string',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $network; // string
  public $id; // string
  public $updated; // DateTime
  public $address; // string
  public $type; // string
  public $parentId; // string
  public $created; // DateTime
  }

