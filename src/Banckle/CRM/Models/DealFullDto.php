<?php

namespace Banckle\CRM\Models;

class DealFullDto {

  static $swaggerTypes = array(
      'dealSourceId' => 'string',
      'name' => 'string',
      'stageColor' => 'string',
      'stageId' => 'string',
      'tags' => 'array[TagDto]',
      'creatorName' => 'string',
      'customFields' => 'array[CustomFieldDto]',
      'associatedFiles' => 'Dictionary2Guid',
      'creatorId' => 'string',
      'contacts' => 'array[AssociatedContact]',
      'stageDate' => 'DateTime',
      'version' => 'int',
      'id' => 'string',
      'stageName' => 'string',
      'tasks' => 'array[TaskOccurrenceDto]',
      'updated' => 'DateTime',
      'isHot' => 'bool',
      'assigneeName' => 'string',
      'dealSourceName' => 'string',
      'currency' => 'string',
      'assigneeId' => 'string',
      'notes' => 'array[NoteDto]',
      'tenantId' => 'string',
      'lossReasonName' => 'string',
      'value' => 'float',
      'lossReasonId' => 'string',
      'created' => 'DateTime'

    );

  public $dealSourceId; // string
  public $name; // string
  public $stageColor; // string
  public $stageId; // string
  public $tags; // array[TagDto]
  public $creatorName; // string
  public $customFields; // array[CustomFieldDto]
  public $associatedFiles; // Dictionary`2[[Guid`
  public $creatorId; // string
  public $contacts; // array[AssociatedContact]
  public $stageDate; // DateTime
  public $version; // int
  public $id; // string
  public $stageName; // string
  public $tasks; // array[TaskOccurrenceDto]
  public $updated; // DateTime
  public $isHot; // bool
  public $assigneeName; // string
  public $dealSourceName; // string
  public $currency; // string
  public $assigneeId; // string
  public $notes; // array[NoteDto]
  public $tenantId; // string
  public $lossReasonName; // string
  public $value; // float
  public $lossReasonId; // string
  public $created; // DateTime
  }

