<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.wikimedia.geocoder/xml/schema/CRM/Geocoder/Geocoder.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:93a68283b2162ffc60003f67fd4fcae4)
 */
use CRM_Geocoder_ExtensionUtil as E;

/**
 * Database access object for the Geocoder entity.
 */
class CRM_Geocoder_DAO_Geocoder extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_geocoder';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'title';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Geocoder ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Provider name
   *
   * @var string
   *   (SQL type: varchar(32))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * Provider Title
   *
   * @var string
   *   (SQL type: varchar(32))
   *   Note that values will be retrieved from the database as a string.
   */
  public $title;

  /**
   * Non generic part of the class name - after Geocoder_Provider. See mgd files for examples
   *
   * @var string
   *   (SQL type: varchar(32))
   *   Note that values will be retrieved from the database as a string.
   */
  public $class;

  /**
   * Enabled?
   *
   * @var bool|string|null
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_active;

  /**
   * Weight
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $weight;

  /**
   * API Key or a json array of user customised values.
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $api_key;

  /**
   * URL (if required)
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $url;

  /**
   * Array of fields required for this to parse
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $required_fields;

  /**
   * fields to be retained from the response
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $retained_response_fields;

  /**
   * fields retained to fill but not overwrite data
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $datafill_response_fields;

  /**
   * Number of seconds to wait before retrying after hitting threshold. Geocaching delayed in this time
   *
   * @var int|string|null
   *   (SQL type: int)
   *   Note that values will be retrieved from the database as a string.
   */
  public $threshold_standdown;

  /**
   * Timestamp when the threshold was last hit.
   *
   * @var string
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $threshold_last_hit;

  /**
   * Countries this geocoder is valid for
   *
   * @var string
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $valid_countries;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_geocoder';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Geocoders') : E::ts('Geocoder');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Geocoder ID'),
          'description' => E::ts('Unique Geocoder ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.id',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Name'),
          'description' => E::ts('Provider name'),
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.name',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Title'),
          'description' => E::ts('Provider Title'),
          'required' => TRUE,
          'maxlength' => 32,
          'size' => 60,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.title',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'class' => [
          'name' => 'class',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Class'),
          'description' => E::ts('Non generic part of the class name - after Geocoder_Provider. See mgd files for examples'),
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.class',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Enabled'),
          'description' => E::ts('Enabled?'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.is_active',
          'default' => '0',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => NULL,
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Weight'),
          'description' => E::ts('Weight'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.weight',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'api_key' => [
          'name' => 'api_key',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('API key'),
          'description' => E::ts('API Key or a json array of user customised values.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.api_key',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'url' => [
          'name' => 'url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Url'),
          'description' => E::ts('URL (if required)'),
          'maxlength' => 255,
          'size' => 60,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.url',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'required_fields' => [
          'name' => 'required_fields',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Required Fields'),
          'description' => E::ts('Array of fields required for this to parse'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.required_fields',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'retained_response_fields' => [
          'name' => 'retained_response_fields',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Retained Response Fields'),
          'description' => E::ts('fields to be retained from the response'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.retained_response_fields',
          'default' => '["geo_code_1","geo_code_2"]',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'datafill_response_fields' => [
          'name' => 'datafill_response_fields',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Datafill Response Fields'),
          'description' => E::ts('fields retained to fill but not overwrite data'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.datafill_response_fields',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'threshold_standdown' => [
          'name' => 'threshold_standdown',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Threshold Standdown'),
          'description' => E::ts('Number of seconds to wait before retrying after hitting threshold. Geocaching delayed in this time'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.threshold_standdown',
          'default' => '60',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'threshold_last_hit' => [
          'name' => 'threshold_last_hit',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Threshold Last Hit'),
          'description' => E::ts('Timestamp when the threshold was last hit.'),
          'required' => FALSE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.threshold_last_hit',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'valid_countries' => [
          'name' => 'valid_countries',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Valid Countries'),
          'description' => E::ts('Countries this geocoder is valid for'),
          'required' => FALSE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_geocoder.valid_countries',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'readonly' => TRUE,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'geocoder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'geocoder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
