<?php
/**
 * ModelPostDto
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
 * Swagger Codegen version: 2.4.10
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
 * ModelPostDto Class Doc Comment
 *
 * @category Class
 * @package  TimelightAi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelPostDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModelPostDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'color' => 'string',
        'name' => 'string',
        'anomaly' => 'bool',
        'top_tolerance' => 'float[]',
        'activity' => 'float[]',
        'bottom_tolerance' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'color' => null,
        'name' => null,
        'anomaly' => null,
        'top_tolerance' => null,
        'activity' => null,
        'bottom_tolerance' => null
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
        'color' => 'color',
        'name' => 'name',
        'anomaly' => 'anomaly',
        'top_tolerance' => 'topTolerance',
        'activity' => 'activity',
        'bottom_tolerance' => 'bottomTolerance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor',
        'name' => 'setName',
        'anomaly' => 'setAnomaly',
        'top_tolerance' => 'setTopTolerance',
        'activity' => 'setActivity',
        'bottom_tolerance' => 'setBottomTolerance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor',
        'name' => 'getName',
        'anomaly' => 'getAnomaly',
        'top_tolerance' => 'getTopTolerance',
        'activity' => 'getActivity',
        'bottom_tolerance' => 'getBottomTolerance'
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['anomaly'] = isset($data['anomaly']) ? $data['anomaly'] : null;
        $this->container['top_tolerance'] = isset($data['top_tolerance']) ? $data['top_tolerance'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['bottom_tolerance'] = isset($data['bottom_tolerance']) ? $data['bottom_tolerance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['anomaly'] === null) {
            $invalidProperties[] = "'anomaly' can't be null";
        }
        if ($this->container['top_tolerance'] === null) {
            $invalidProperties[] = "'top_tolerance' can't be null";
        }
        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['bottom_tolerance'] === null) {
            $invalidProperties[] = "'bottom_tolerance' can't be null";
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
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color The color in hex format. Ex: '#FFFFFF'
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The model name, between 1 and 100 characters
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets anomaly
     *
     * @return bool
     */
    public function getAnomaly()
    {
        return $this->container['anomaly'];
    }

    /**
     * Sets anomaly
     *
     * @param bool $anomaly True if the model is an anomaly and should be ignored by the ML engine
     *
     * @return $this
     */
    public function setAnomaly($anomaly)
    {
        $this->container['anomaly'] = $anomaly;

        return $this;
    }

    /**
     * Gets top_tolerance
     *
     * @return float[]
     */
    public function getTopTolerance()
    {
        return $this->container['top_tolerance'];
    }

    /**
     * Sets top_tolerance
     *
     * @param float[] $top_tolerance An array of 144, 1440 or 86400 values. Each value represents a time window of 10 minutes, 1 minute or 1 second
     *
     * @return $this
     */
    public function setTopTolerance($top_tolerance)
    {
        $this->container['top_tolerance'] = $top_tolerance;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return float[]
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param float[] $activity An array of 144, 1440 or 86400 values. Each value represents a time window of 10 minutes, 1 minute or 1 second
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets bottom_tolerance
     *
     * @return float[]
     */
    public function getBottomTolerance()
    {
        return $this->container['bottom_tolerance'];
    }

    /**
     * Sets bottom_tolerance
     *
     * @param float[] $bottom_tolerance An array of 144, 1440 or 86400 values. Each value represents a time window of 10 minutes, 1 minute or 1 second
     *
     * @return $this
     */
    public function setBottomTolerance($bottom_tolerance)
    {
        $this->container['bottom_tolerance'] = $bottom_tolerance;

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

