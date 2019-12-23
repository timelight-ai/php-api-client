<?php
/**
 * ModelDto
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
 * ModelDto Class Doc Comment
 *
 * @category Class
 * @package  TimelightAi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModelDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
        'color' => 'string',
        'name' => 'string',
        'activity' => 'float[]',
        'top_tolerance' => 'float[]',
        'bottom_tolerance' => 'float[]',
        'x' => 'float',
        'y' => 'float',
        'value' => 'float',
        'anomaly' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'color' => null,
        'name' => null,
        'activity' => null,
        'top_tolerance' => null,
        'bottom_tolerance' => null,
        'x' => null,
        'y' => null,
        'value' => null,
        'anomaly' => null
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
        'color' => 'color',
        'name' => 'name',
        'activity' => 'activity',
        'top_tolerance' => 'top_tolerance',
        'bottom_tolerance' => 'bottom_tolerance',
        'x' => 'x',
        'y' => 'y',
        'value' => 'value',
        'anomaly' => 'anomaly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'color' => 'setColor',
        'name' => 'setName',
        'activity' => 'setActivity',
        'top_tolerance' => 'setTopTolerance',
        'bottom_tolerance' => 'setBottomTolerance',
        'x' => 'setX',
        'y' => 'setY',
        'value' => 'setValue',
        'anomaly' => 'setAnomaly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'color' => 'getColor',
        'name' => 'getName',
        'activity' => 'getActivity',
        'top_tolerance' => 'getTopTolerance',
        'bottom_tolerance' => 'getBottomTolerance',
        'x' => 'getX',
        'y' => 'getY',
        'value' => 'getValue',
        'anomaly' => 'getAnomaly'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['top_tolerance'] = isset($data['top_tolerance']) ? $data['top_tolerance'] : null;
        $this->container['bottom_tolerance'] = isset($data['bottom_tolerance']) ? $data['bottom_tolerance'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['anomaly'] = isset($data['anomaly']) ? $data['anomaly'] : null;
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
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['top_tolerance'] === null) {
            $invalidProperties[] = "'top_tolerance' can't be null";
        }
        if ($this->container['bottom_tolerance'] === null) {
            $invalidProperties[] = "'bottom_tolerance' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['anomaly'] === null) {
            $invalidProperties[] = "'anomaly' can't be null";
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
     * @param string $color color
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param float[] $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

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
     * @param float[] $top_tolerance top_tolerance
     *
     * @return $this
     */
    public function setTopTolerance($top_tolerance)
    {
        $this->container['top_tolerance'] = $top_tolerance;

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
     * @param float[] $bottom_tolerance bottom_tolerance
     *
     * @return $this
     */
    public function setBottomTolerance($bottom_tolerance)
    {
        $this->container['bottom_tolerance'] = $bottom_tolerance;

        return $this;
    }

    /**
     * Gets x
     *
     * @return float
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param float $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return float
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param float $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param bool $anomaly anomaly
     *
     * @return $this
     */
    public function setAnomaly($anomaly)
    {
        $this->container['anomaly'] = $anomaly;

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


