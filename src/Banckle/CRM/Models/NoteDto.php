<?php

namespace Banckle\CRM\Models;

class NoteDto {

  static $swaggerTypes = array(
      'id' => 'string',
      'updated' => 'DateTime',
      'content' => 'string',
      'type' => 'TypeDto',
      'parentId' => 'string',
      'created' => 'DateTime'

    );

  public $id; // string
  public $updated; // DateTime
  public $content; // string
  public $type; // TypeDto
  public $parentId; // string
  public $created; // DateTime
  }

