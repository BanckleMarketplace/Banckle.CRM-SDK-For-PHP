<?php

namespace Banckle\CRM\Models;

class TaskOccurrenceDto {

  static $swaggerTypes = array(
      'name' => 'string',
      'favorite' => 'bool',
      'description' => 'string',
      'tags' => 'array[TagDto]',
      'creatorName' => 'string',
      'customFields' => 'array[CustomFieldDto]',
      'creatorId' => 'string',
      'contacts' => 'array[TaskAssociatedContact]',
      'version' => 'int',
      'id' => 'string',
      'updated' => 'DateTime',
      'assigneeName' => 'string',
      'assigneeId' => 'string',
      'done' => 'bool',
      'finishDate' => 'DateTime',
      'tenantId' => 'string',
      'deals' => 'array[OptionDto]',
      'startDate' => 'DateTime',
      'created' => 'DateTime'

    );

  public $name; // string
  public $favorite; // bool
  public $description; // string
  public $tags; // array[TagDto]
  public $creatorName; // string
  public $customFields; // array[CustomFieldDto]
  public $creatorId; // string
  public $contacts; // array[TaskAssociatedContact]
  public $version; // int
  public $id; // string
  public $updated; // DateTime
  public $assigneeName; // string
  public $assigneeId; // string
  public $done; // bool
  public $finishDate; // DateTime
  public $tenantId; // string
  public $deals; // array[OptionDto]
  public $startDate; // DateTime
  public $created; // DateTime
  }

