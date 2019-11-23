<?php
/**
 * Capitalization
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Capitalization Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Capitalization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Capitalization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'small_camel' => 'string',
        'capital_camel' => 'string',
        'small_snake' => 'string',
        'capital_snake' => 'string',
        'sca_eth_flow_points' => 'string',
        'att_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'small_camel' => null,
        'capital_camel' => null,
        'small_snake' => null,
        'capital_snake' => null,
        'sca_eth_flow_points' => null,
        'att_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'small_camel' => 'smallCamel',
        'capital_camel' => 'CapitalCamel',
        'small_snake' => 'small_Snake',
        'capital_snake' => 'Capital_Snake',
        'sca_eth_flow_points' => 'SCA_ETH_Flow_Points',
        'att_name' => 'ATT_NAME'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'small_camel' => 'setSmallCamel',
        'capital_camel' => 'setCapitalCamel',
        'small_snake' => 'setSmallSnake',
        'capital_snake' => 'setCapitalSnake',
        'sca_eth_flow_points' => 'setScaEthFlowPoints',
        'att_name' => 'setAttName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'small_camel' => 'getSmallCamel',
        'capital_camel' => 'getCapitalCamel',
        'small_snake' => 'getSmallSnake',
        'capital_snake' => 'getCapitalSnake',
        'sca_eth_flow_points' => 'getScaEthFlowPoints',
        'att_name' => 'getAttName'
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
        return self::$openAPIModelName;
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
        $this->container['small_camel'] = isset($data['small_camel']) ? $data['small_camel'] : null;
        $this->container['capital_camel'] = isset($data['capital_camel']) ? $data['capital_camel'] : null;
        $this->container['small_snake'] = isset($data['small_snake']) ? $data['small_snake'] : null;
        $this->container['capital_snake'] = isset($data['capital_snake']) ? $data['capital_snake'] : null;
        $this->container['sca_eth_flow_points'] = isset($data['sca_eth_flow_points']) ? $data['sca_eth_flow_points'] : null;
        $this->container['att_name'] = isset($data['att_name']) ? $data['att_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets small_camel
     *
     * @return string|null
     */
    public function getSmallCamel()
    {
        return $this->container['small_camel'];
    }

    /**
     * Sets small_camel
     *
     * @param string|null $small_camel small_camel
     *
     * @return $this
     */
    public function setSmallCamel($small_camel)
    {
        $this->container['small_camel'] = $small_camel;

        return $this;
    }

    /**
     * Gets capital_camel
     *
     * @return string|null
     */
    public function getCapitalCamel()
    {
        return $this->container['capital_camel'];
    }

    /**
     * Sets capital_camel
     *
     * @param string|null $capital_camel capital_camel
     *
     * @return $this
     */
    public function setCapitalCamel($capital_camel)
    {
        $this->container['capital_camel'] = $capital_camel;

        return $this;
    }

    /**
     * Gets small_snake
     *
     * @return string|null
     */
    public function getSmallSnake()
    {
        return $this->container['small_snake'];
    }

    /**
     * Sets small_snake
     *
     * @param string|null $small_snake small_snake
     *
     * @return $this
     */
    public function setSmallSnake($small_snake)
    {
        $this->container['small_snake'] = $small_snake;

        return $this;
    }

    /**
     * Gets capital_snake
     *
     * @return string|null
     */
    public function getCapitalSnake()
    {
        return $this->container['capital_snake'];
    }

    /**
     * Sets capital_snake
     *
     * @param string|null $capital_snake capital_snake
     *
     * @return $this
     */
    public function setCapitalSnake($capital_snake)
    {
        $this->container['capital_snake'] = $capital_snake;

        return $this;
    }

    /**
     * Gets sca_eth_flow_points
     *
     * @return string|null
     */
    public function getScaEthFlowPoints()
    {
        return $this->container['sca_eth_flow_points'];
    }

    /**
     * Sets sca_eth_flow_points
     *
     * @param string|null $sca_eth_flow_points sca_eth_flow_points
     *
     * @return $this
     */
    public function setScaEthFlowPoints($sca_eth_flow_points)
    {
        $this->container['sca_eth_flow_points'] = $sca_eth_flow_points;

        return $this;
    }

    /**
     * Gets att_name
     *
     * @return string|null
     */
    public function getAttName()
    {
        return $this->container['att_name'];
    }

    /**
     * Sets att_name
     *
     * @param string|null $att_name Name of the pet
     *
     * @return $this
     */
    public function setAttName($att_name)
    {
        $this->container['att_name'] = $att_name;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


