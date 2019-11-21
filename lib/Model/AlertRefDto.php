<?php
/**
 * AlertRefDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  TimelightAi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * timelight
 *
 * This is the timelight api.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TimelightAi\Model;

use \ArrayAccess;
use \TimelightAi\ObjectSerializer;

/**
 * AlertRefDto Class Doc Comment
 *
 * @category Class
 * @package  TimelightAi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlertRefDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlertRefDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
        'source_id' => 'float',
        'date' => 'string',
        'criticity' => 'float',
        'shape' => 'bool',
        'activity' => 'string',
        'comment' => 'string',
        'day_activity' => 'float[]',
        'better_model_name' => 'string',
        'better_model_value' => 'float',
        'better_model_color' => 'string',
        'better_model_activity' => 'float[]',
        'better_model_top_tolerance' => 'float[]',
        'better_model_bottom_tolerance' => 'float[]',
        'closest_model_name' => 'string',
        'closest_model_value' => 'float',
        'closest_model_color' => 'string',
        'closest_model_activity' => 'float[]',
        'closest_model_top_tolerance' => 'float[]',
        'closest_model_bottom_tolerance' => 'float[]',
        'day_model_name' => 'string',
        'day_model_value' => 'float',
        'day_model_color' => 'string',
        'day_model_activity' => 'float[]',
        'day_model_top_tolerance' => 'float[]',
        'day_model_bottom_tolerance' => 'float[]',
        'day_prevision_model_name' => 'string',
        'day_prevision_model_value' => 'float',
        'day_prevision_model_color' => 'string',
        'day_prevision_model_activity' => 'float[]',
        'day_prevision_model_top_tolerance' => 'float[]',
        'day_prevision_model_bottom_tolerance' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'source_id' => null,
        'date' => null,
        'criticity' => null,
        'shape' => null,
        'activity' => null,
        'comment' => null,
        'day_activity' => null,
        'better_model_name' => null,
        'better_model_value' => null,
        'better_model_color' => null,
        'better_model_activity' => null,
        'better_model_top_tolerance' => null,
        'better_model_bottom_tolerance' => null,
        'closest_model_name' => null,
        'closest_model_value' => null,
        'closest_model_color' => null,
        'closest_model_activity' => null,
        'closest_model_top_tolerance' => null,
        'closest_model_bottom_tolerance' => null,
        'day_model_name' => null,
        'day_model_value' => null,
        'day_model_color' => null,
        'day_model_activity' => null,
        'day_model_top_tolerance' => null,
        'day_model_bottom_tolerance' => null,
        'day_prevision_model_name' => null,
        'day_prevision_model_value' => null,
        'day_prevision_model_color' => null,
        'day_prevision_model_activity' => null,
        'day_prevision_model_top_tolerance' => null,
        'day_prevision_model_bottom_tolerance' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'source_id' => 'source_id',
        'date' => 'date',
        'criticity' => 'criticity',
        'shape' => 'shape',
        'activity' => 'activity',
        'comment' => 'comment',
        'day_activity' => 'dayActivity',
        'better_model_name' => 'betterModelName',
        'better_model_value' => 'betterModelValue',
        'better_model_color' => 'betterModelColor',
        'better_model_activity' => 'betterModelActivity',
        'better_model_top_tolerance' => 'betterModelTopTolerance',
        'better_model_bottom_tolerance' => 'betterModelBottomTolerance',
        'closest_model_name' => 'closestModelName',
        'closest_model_value' => 'closestModelValue',
        'closest_model_color' => 'closestModelColor',
        'closest_model_activity' => 'closestModelActivity',
        'closest_model_top_tolerance' => 'closestModelTopTolerance',
        'closest_model_bottom_tolerance' => 'closestModelBottomTolerance',
        'day_model_name' => 'dayModelName',
        'day_model_value' => 'dayModelValue',
        'day_model_color' => 'dayModelColor',
        'day_model_activity' => 'dayModelActivity',
        'day_model_top_tolerance' => 'dayModelTopTolerance',
        'day_model_bottom_tolerance' => 'dayModelBottomTolerance',
        'day_prevision_model_name' => 'dayPrevisionModelName',
        'day_prevision_model_value' => 'dayPrevisionModelValue',
        'day_prevision_model_color' => 'dayPrevisionModelColor',
        'day_prevision_model_activity' => 'dayPrevisionModelActivity',
        'day_prevision_model_top_tolerance' => 'dayPrevisionModelTopTolerance',
        'day_prevision_model_bottom_tolerance' => 'dayPrevisionModelBottomTolerance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source_id' => 'setSourceId',
        'date' => 'setDate',
        'criticity' => 'setCriticity',
        'shape' => 'setShape',
        'activity' => 'setActivity',
        'comment' => 'setComment',
        'day_activity' => 'setDayActivity',
        'better_model_name' => 'setBetterModelName',
        'better_model_value' => 'setBetterModelValue',
        'better_model_color' => 'setBetterModelColor',
        'better_model_activity' => 'setBetterModelActivity',
        'better_model_top_tolerance' => 'setBetterModelTopTolerance',
        'better_model_bottom_tolerance' => 'setBetterModelBottomTolerance',
        'closest_model_name' => 'setClosestModelName',
        'closest_model_value' => 'setClosestModelValue',
        'closest_model_color' => 'setClosestModelColor',
        'closest_model_activity' => 'setClosestModelActivity',
        'closest_model_top_tolerance' => 'setClosestModelTopTolerance',
        'closest_model_bottom_tolerance' => 'setClosestModelBottomTolerance',
        'day_model_name' => 'setDayModelName',
        'day_model_value' => 'setDayModelValue',
        'day_model_color' => 'setDayModelColor',
        'day_model_activity' => 'setDayModelActivity',
        'day_model_top_tolerance' => 'setDayModelTopTolerance',
        'day_model_bottom_tolerance' => 'setDayModelBottomTolerance',
        'day_prevision_model_name' => 'setDayPrevisionModelName',
        'day_prevision_model_value' => 'setDayPrevisionModelValue',
        'day_prevision_model_color' => 'setDayPrevisionModelColor',
        'day_prevision_model_activity' => 'setDayPrevisionModelActivity',
        'day_prevision_model_top_tolerance' => 'setDayPrevisionModelTopTolerance',
        'day_prevision_model_bottom_tolerance' => 'setDayPrevisionModelBottomTolerance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source_id' => 'getSourceId',
        'date' => 'getDate',
        'criticity' => 'getCriticity',
        'shape' => 'getShape',
        'activity' => 'getActivity',
        'comment' => 'getComment',
        'day_activity' => 'getDayActivity',
        'better_model_name' => 'getBetterModelName',
        'better_model_value' => 'getBetterModelValue',
        'better_model_color' => 'getBetterModelColor',
        'better_model_activity' => 'getBetterModelActivity',
        'better_model_top_tolerance' => 'getBetterModelTopTolerance',
        'better_model_bottom_tolerance' => 'getBetterModelBottomTolerance',
        'closest_model_name' => 'getClosestModelName',
        'closest_model_value' => 'getClosestModelValue',
        'closest_model_color' => 'getClosestModelColor',
        'closest_model_activity' => 'getClosestModelActivity',
        'closest_model_top_tolerance' => 'getClosestModelTopTolerance',
        'closest_model_bottom_tolerance' => 'getClosestModelBottomTolerance',
        'day_model_name' => 'getDayModelName',
        'day_model_value' => 'getDayModelValue',
        'day_model_color' => 'getDayModelColor',
        'day_model_activity' => 'getDayModelActivity',
        'day_model_top_tolerance' => 'getDayModelTopTolerance',
        'day_model_bottom_tolerance' => 'getDayModelBottomTolerance',
        'day_prevision_model_name' => 'getDayPrevisionModelName',
        'day_prevision_model_value' => 'getDayPrevisionModelValue',
        'day_prevision_model_color' => 'getDayPrevisionModelColor',
        'day_prevision_model_activity' => 'getDayPrevisionModelActivity',
        'day_prevision_model_top_tolerance' => 'getDayPrevisionModelTopTolerance',
        'day_prevision_model_bottom_tolerance' => 'getDayPrevisionModelBottomTolerance'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ACTIVITY_OVER = 'over';
    const ACTIVITY_UNDER = 'under';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityAllowableValues()
    {
        return [
            self::ACTIVITY_OVER,
            self::ACTIVITY_UNDER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['criticity'] = isset($data['criticity']) ? $data['criticity'] : null;
        $this->container['shape'] = isset($data['shape']) ? $data['shape'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['day_activity'] = isset($data['day_activity']) ? $data['day_activity'] : null;
        $this->container['better_model_name'] = isset($data['better_model_name']) ? $data['better_model_name'] : null;
        $this->container['better_model_value'] = isset($data['better_model_value']) ? $data['better_model_value'] : null;
        $this->container['better_model_color'] = isset($data['better_model_color']) ? $data['better_model_color'] : null;
        $this->container['better_model_activity'] = isset($data['better_model_activity']) ? $data['better_model_activity'] : null;
        $this->container['better_model_top_tolerance'] = isset($data['better_model_top_tolerance']) ? $data['better_model_top_tolerance'] : null;
        $this->container['better_model_bottom_tolerance'] = isset($data['better_model_bottom_tolerance']) ? $data['better_model_bottom_tolerance'] : null;
        $this->container['closest_model_name'] = isset($data['closest_model_name']) ? $data['closest_model_name'] : null;
        $this->container['closest_model_value'] = isset($data['closest_model_value']) ? $data['closest_model_value'] : null;
        $this->container['closest_model_color'] = isset($data['closest_model_color']) ? $data['closest_model_color'] : null;
        $this->container['closest_model_activity'] = isset($data['closest_model_activity']) ? $data['closest_model_activity'] : null;
        $this->container['closest_model_top_tolerance'] = isset($data['closest_model_top_tolerance']) ? $data['closest_model_top_tolerance'] : null;
        $this->container['closest_model_bottom_tolerance'] = isset($data['closest_model_bottom_tolerance']) ? $data['closest_model_bottom_tolerance'] : null;
        $this->container['day_model_name'] = isset($data['day_model_name']) ? $data['day_model_name'] : null;
        $this->container['day_model_value'] = isset($data['day_model_value']) ? $data['day_model_value'] : null;
        $this->container['day_model_color'] = isset($data['day_model_color']) ? $data['day_model_color'] : null;
        $this->container['day_model_activity'] = isset($data['day_model_activity']) ? $data['day_model_activity'] : null;
        $this->container['day_model_top_tolerance'] = isset($data['day_model_top_tolerance']) ? $data['day_model_top_tolerance'] : null;
        $this->container['day_model_bottom_tolerance'] = isset($data['day_model_bottom_tolerance']) ? $data['day_model_bottom_tolerance'] : null;
        $this->container['day_prevision_model_name'] = isset($data['day_prevision_model_name']) ? $data['day_prevision_model_name'] : null;
        $this->container['day_prevision_model_value'] = isset($data['day_prevision_model_value']) ? $data['day_prevision_model_value'] : null;
        $this->container['day_prevision_model_color'] = isset($data['day_prevision_model_color']) ? $data['day_prevision_model_color'] : null;
        $this->container['day_prevision_model_activity'] = isset($data['day_prevision_model_activity']) ? $data['day_prevision_model_activity'] : null;
        $this->container['day_prevision_model_top_tolerance'] = isset($data['day_prevision_model_top_tolerance']) ? $data['day_prevision_model_top_tolerance'] : null;
        $this->container['day_prevision_model_bottom_tolerance'] = isset($data['day_prevision_model_bottom_tolerance']) ? $data['day_prevision_model_bottom_tolerance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['source_id'] === null) {
            $invalidProperties[] = "'source_id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['criticity'] === null) {
            $invalidProperties[] = "'criticity' can't be null";
        }
        if ($this->container['shape'] === null) {
            $invalidProperties[] = "'shape' can't be null";
        }
        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        $allowedValues = $this->getActivityAllowableValues();
        if (!is_null($this->container['activity']) && !in_array($this->container['activity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['day_activity'] === null) {
            $invalidProperties[] = "'day_activity' can't be null";
        }
        if ($this->container['better_model_name'] === null) {
            $invalidProperties[] = "'better_model_name' can't be null";
        }
        if ($this->container['better_model_value'] === null) {
            $invalidProperties[] = "'better_model_value' can't be null";
        }
        if ($this->container['better_model_color'] === null) {
            $invalidProperties[] = "'better_model_color' can't be null";
        }
        if ($this->container['better_model_activity'] === null) {
            $invalidProperties[] = "'better_model_activity' can't be null";
        }
        if ($this->container['better_model_top_tolerance'] === null) {
            $invalidProperties[] = "'better_model_top_tolerance' can't be null";
        }
        if ($this->container['better_model_bottom_tolerance'] === null) {
            $invalidProperties[] = "'better_model_bottom_tolerance' can't be null";
        }
        if ($this->container['closest_model_name'] === null) {
            $invalidProperties[] = "'closest_model_name' can't be null";
        }
        if ($this->container['closest_model_value'] === null) {
            $invalidProperties[] = "'closest_model_value' can't be null";
        }
        if ($this->container['closest_model_color'] === null) {
            $invalidProperties[] = "'closest_model_color' can't be null";
        }
        if ($this->container['closest_model_activity'] === null) {
            $invalidProperties[] = "'closest_model_activity' can't be null";
        }
        if ($this->container['closest_model_top_tolerance'] === null) {
            $invalidProperties[] = "'closest_model_top_tolerance' can't be null";
        }
        if ($this->container['closest_model_bottom_tolerance'] === null) {
            $invalidProperties[] = "'closest_model_bottom_tolerance' can't be null";
        }
        if ($this->container['day_model_name'] === null) {
            $invalidProperties[] = "'day_model_name' can't be null";
        }
        if ($this->container['day_model_value'] === null) {
            $invalidProperties[] = "'day_model_value' can't be null";
        }
        if ($this->container['day_model_color'] === null) {
            $invalidProperties[] = "'day_model_color' can't be null";
        }
        if ($this->container['day_model_activity'] === null) {
            $invalidProperties[] = "'day_model_activity' can't be null";
        }
        if ($this->container['day_model_top_tolerance'] === null) {
            $invalidProperties[] = "'day_model_top_tolerance' can't be null";
        }
        if ($this->container['day_model_bottom_tolerance'] === null) {
            $invalidProperties[] = "'day_model_bottom_tolerance' can't be null";
        }
        if ($this->container['day_prevision_model_name'] === null) {
            $invalidProperties[] = "'day_prevision_model_name' can't be null";
        }
        if ($this->container['day_prevision_model_value'] === null) {
            $invalidProperties[] = "'day_prevision_model_value' can't be null";
        }
        if ($this->container['day_prevision_model_color'] === null) {
            $invalidProperties[] = "'day_prevision_model_color' can't be null";
        }
        if ($this->container['day_prevision_model_activity'] === null) {
            $invalidProperties[] = "'day_prevision_model_activity' can't be null";
        }
        if ($this->container['day_prevision_model_top_tolerance'] === null) {
            $invalidProperties[] = "'day_prevision_model_top_tolerance' can't be null";
        }
        if ($this->container['day_prevision_model_bottom_tolerance'] === null) {
            $invalidProperties[] = "'day_prevision_model_bottom_tolerance' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return float
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param float $source_id source_id
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets criticity
     *
     * @return float
     */
    public function getCriticity()
    {
        return $this->container['criticity'];
    }

    /**
     * Sets criticity
     *
     * @param float $criticity criticity
     *
     * @return $this
     */
    public function setCriticity($criticity)
    {
        $this->container['criticity'] = $criticity;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return bool
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param bool $shape shape
     *
     * @return $this
     */
    public function setShape($shape)
    {
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $allowedValues = $this->getActivityAllowableValues();
        if (!in_array($activity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets day_activity
     *
     * @return float[]
     */
    public function getDayActivity()
    {
        return $this->container['day_activity'];
    }

    /**
     * Sets day_activity
     *
     * @param float[] $day_activity day_activity
     *
     * @return $this
     */
    public function setDayActivity($day_activity)
    {
        $this->container['day_activity'] = $day_activity;

        return $this;
    }

    /**
     * Gets better_model_name
     *
     * @return string
     */
    public function getBetterModelName()
    {
        return $this->container['better_model_name'];
    }

    /**
     * Sets better_model_name
     *
     * @param string $better_model_name better_model_name
     *
     * @return $this
     */
    public function setBetterModelName($better_model_name)
    {
        $this->container['better_model_name'] = $better_model_name;

        return $this;
    }

    /**
     * Gets better_model_value
     *
     * @return float
     */
    public function getBetterModelValue()
    {
        return $this->container['better_model_value'];
    }

    /**
     * Sets better_model_value
     *
     * @param float $better_model_value better_model_value
     *
     * @return $this
     */
    public function setBetterModelValue($better_model_value)
    {
        $this->container['better_model_value'] = $better_model_value;

        return $this;
    }

    /**
     * Gets better_model_color
     *
     * @return string
     */
    public function getBetterModelColor()
    {
        return $this->container['better_model_color'];
    }

    /**
     * Sets better_model_color
     *
     * @param string $better_model_color better_model_color
     *
     * @return $this
     */
    public function setBetterModelColor($better_model_color)
    {
        $this->container['better_model_color'] = $better_model_color;

        return $this;
    }

    /**
     * Gets better_model_activity
     *
     * @return float[]
     */
    public function getBetterModelActivity()
    {
        return $this->container['better_model_activity'];
    }

    /**
     * Sets better_model_activity
     *
     * @param float[] $better_model_activity better_model_activity
     *
     * @return $this
     */
    public function setBetterModelActivity($better_model_activity)
    {
        $this->container['better_model_activity'] = $better_model_activity;

        return $this;
    }

    /**
     * Gets better_model_top_tolerance
     *
     * @return float[]
     */
    public function getBetterModelTopTolerance()
    {
        return $this->container['better_model_top_tolerance'];
    }

    /**
     * Sets better_model_top_tolerance
     *
     * @param float[] $better_model_top_tolerance better_model_top_tolerance
     *
     * @return $this
     */
    public function setBetterModelTopTolerance($better_model_top_tolerance)
    {
        $this->container['better_model_top_tolerance'] = $better_model_top_tolerance;

        return $this;
    }

    /**
     * Gets better_model_bottom_tolerance
     *
     * @return float[]
     */
    public function getBetterModelBottomTolerance()
    {
        return $this->container['better_model_bottom_tolerance'];
    }

    /**
     * Sets better_model_bottom_tolerance
     *
     * @param float[] $better_model_bottom_tolerance better_model_bottom_tolerance
     *
     * @return $this
     */
    public function setBetterModelBottomTolerance($better_model_bottom_tolerance)
    {
        $this->container['better_model_bottom_tolerance'] = $better_model_bottom_tolerance;

        return $this;
    }

    /**
     * Gets closest_model_name
     *
     * @return string
     */
    public function getClosestModelName()
    {
        return $this->container['closest_model_name'];
    }

    /**
     * Sets closest_model_name
     *
     * @param string $closest_model_name closest_model_name
     *
     * @return $this
     */
    public function setClosestModelName($closest_model_name)
    {
        $this->container['closest_model_name'] = $closest_model_name;

        return $this;
    }

    /**
     * Gets closest_model_value
     *
     * @return float
     */
    public function getClosestModelValue()
    {
        return $this->container['closest_model_value'];
    }

    /**
     * Sets closest_model_value
     *
     * @param float $closest_model_value closest_model_value
     *
     * @return $this
     */
    public function setClosestModelValue($closest_model_value)
    {
        $this->container['closest_model_value'] = $closest_model_value;

        return $this;
    }

    /**
     * Gets closest_model_color
     *
     * @return string
     */
    public function getClosestModelColor()
    {
        return $this->container['closest_model_color'];
    }

    /**
     * Sets closest_model_color
     *
     * @param string $closest_model_color closest_model_color
     *
     * @return $this
     */
    public function setClosestModelColor($closest_model_color)
    {
        $this->container['closest_model_color'] = $closest_model_color;

        return $this;
    }

    /**
     * Gets closest_model_activity
     *
     * @return float[]
     */
    public function getClosestModelActivity()
    {
        return $this->container['closest_model_activity'];
    }

    /**
     * Sets closest_model_activity
     *
     * @param float[] $closest_model_activity closest_model_activity
     *
     * @return $this
     */
    public function setClosestModelActivity($closest_model_activity)
    {
        $this->container['closest_model_activity'] = $closest_model_activity;

        return $this;
    }

    /**
     * Gets closest_model_top_tolerance
     *
     * @return float[]
     */
    public function getClosestModelTopTolerance()
    {
        return $this->container['closest_model_top_tolerance'];
    }

    /**
     * Sets closest_model_top_tolerance
     *
     * @param float[] $closest_model_top_tolerance closest_model_top_tolerance
     *
     * @return $this
     */
    public function setClosestModelTopTolerance($closest_model_top_tolerance)
    {
        $this->container['closest_model_top_tolerance'] = $closest_model_top_tolerance;

        return $this;
    }

    /**
     * Gets closest_model_bottom_tolerance
     *
     * @return float[]
     */
    public function getClosestModelBottomTolerance()
    {
        return $this->container['closest_model_bottom_tolerance'];
    }

    /**
     * Sets closest_model_bottom_tolerance
     *
     * @param float[] $closest_model_bottom_tolerance closest_model_bottom_tolerance
     *
     * @return $this
     */
    public function setClosestModelBottomTolerance($closest_model_bottom_tolerance)
    {
        $this->container['closest_model_bottom_tolerance'] = $closest_model_bottom_tolerance;

        return $this;
    }

    /**
     * Gets day_model_name
     *
     * @return string
     */
    public function getDayModelName()
    {
        return $this->container['day_model_name'];
    }

    /**
     * Sets day_model_name
     *
     * @param string $day_model_name day_model_name
     *
     * @return $this
     */
    public function setDayModelName($day_model_name)
    {
        $this->container['day_model_name'] = $day_model_name;

        return $this;
    }

    /**
     * Gets day_model_value
     *
     * @return float
     */
    public function getDayModelValue()
    {
        return $this->container['day_model_value'];
    }

    /**
     * Sets day_model_value
     *
     * @param float $day_model_value day_model_value
     *
     * @return $this
     */
    public function setDayModelValue($day_model_value)
    {
        $this->container['day_model_value'] = $day_model_value;

        return $this;
    }

    /**
     * Gets day_model_color
     *
     * @return string
     */
    public function getDayModelColor()
    {
        return $this->container['day_model_color'];
    }

    /**
     * Sets day_model_color
     *
     * @param string $day_model_color day_model_color
     *
     * @return $this
     */
    public function setDayModelColor($day_model_color)
    {
        $this->container['day_model_color'] = $day_model_color;

        return $this;
    }

    /**
     * Gets day_model_activity
     *
     * @return float[]
     */
    public function getDayModelActivity()
    {
        return $this->container['day_model_activity'];
    }

    /**
     * Sets day_model_activity
     *
     * @param float[] $day_model_activity day_model_activity
     *
     * @return $this
     */
    public function setDayModelActivity($day_model_activity)
    {
        $this->container['day_model_activity'] = $day_model_activity;

        return $this;
    }

    /**
     * Gets day_model_top_tolerance
     *
     * @return float[]
     */
    public function getDayModelTopTolerance()
    {
        return $this->container['day_model_top_tolerance'];
    }

    /**
     * Sets day_model_top_tolerance
     *
     * @param float[] $day_model_top_tolerance day_model_top_tolerance
     *
     * @return $this
     */
    public function setDayModelTopTolerance($day_model_top_tolerance)
    {
        $this->container['day_model_top_tolerance'] = $day_model_top_tolerance;

        return $this;
    }

    /**
     * Gets day_model_bottom_tolerance
     *
     * @return float[]
     */
    public function getDayModelBottomTolerance()
    {
        return $this->container['day_model_bottom_tolerance'];
    }

    /**
     * Sets day_model_bottom_tolerance
     *
     * @param float[] $day_model_bottom_tolerance day_model_bottom_tolerance
     *
     * @return $this
     */
    public function setDayModelBottomTolerance($day_model_bottom_tolerance)
    {
        $this->container['day_model_bottom_tolerance'] = $day_model_bottom_tolerance;

        return $this;
    }

    /**
     * Gets day_prevision_model_name
     *
     * @return string
     */
    public function getDayPrevisionModelName()
    {
        return $this->container['day_prevision_model_name'];
    }

    /**
     * Sets day_prevision_model_name
     *
     * @param string $day_prevision_model_name day_prevision_model_name
     *
     * @return $this
     */
    public function setDayPrevisionModelName($day_prevision_model_name)
    {
        $this->container['day_prevision_model_name'] = $day_prevision_model_name;

        return $this;
    }

    /**
     * Gets day_prevision_model_value
     *
     * @return float
     */
    public function getDayPrevisionModelValue()
    {
        return $this->container['day_prevision_model_value'];
    }

    /**
     * Sets day_prevision_model_value
     *
     * @param float $day_prevision_model_value day_prevision_model_value
     *
     * @return $this
     */
    public function setDayPrevisionModelValue($day_prevision_model_value)
    {
        $this->container['day_prevision_model_value'] = $day_prevision_model_value;

        return $this;
    }

    /**
     * Gets day_prevision_model_color
     *
     * @return string
     */
    public function getDayPrevisionModelColor()
    {
        return $this->container['day_prevision_model_color'];
    }

    /**
     * Sets day_prevision_model_color
     *
     * @param string $day_prevision_model_color day_prevision_model_color
     *
     * @return $this
     */
    public function setDayPrevisionModelColor($day_prevision_model_color)
    {
        $this->container['day_prevision_model_color'] = $day_prevision_model_color;

        return $this;
    }

    /**
     * Gets day_prevision_model_activity
     *
     * @return float[]
     */
    public function getDayPrevisionModelActivity()
    {
        return $this->container['day_prevision_model_activity'];
    }

    /**
     * Sets day_prevision_model_activity
     *
     * @param float[] $day_prevision_model_activity day_prevision_model_activity
     *
     * @return $this
     */
    public function setDayPrevisionModelActivity($day_prevision_model_activity)
    {
        $this->container['day_prevision_model_activity'] = $day_prevision_model_activity;

        return $this;
    }

    /**
     * Gets day_prevision_model_top_tolerance
     *
     * @return float[]
     */
    public function getDayPrevisionModelTopTolerance()
    {
        return $this->container['day_prevision_model_top_tolerance'];
    }

    /**
     * Sets day_prevision_model_top_tolerance
     *
     * @param float[] $day_prevision_model_top_tolerance day_prevision_model_top_tolerance
     *
     * @return $this
     */
    public function setDayPrevisionModelTopTolerance($day_prevision_model_top_tolerance)
    {
        $this->container['day_prevision_model_top_tolerance'] = $day_prevision_model_top_tolerance;

        return $this;
    }

    /**
     * Gets day_prevision_model_bottom_tolerance
     *
     * @return float[]
     */
    public function getDayPrevisionModelBottomTolerance()
    {
        return $this->container['day_prevision_model_bottom_tolerance'];
    }

    /**
     * Sets day_prevision_model_bottom_tolerance
     *
     * @param float[] $day_prevision_model_bottom_tolerance day_prevision_model_bottom_tolerance
     *
     * @return $this
     */
    public function setDayPrevisionModelBottomTolerance($day_prevision_model_bottom_tolerance)
    {
        $this->container['day_prevision_model_bottom_tolerance'] = $day_prevision_model_bottom_tolerance;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

