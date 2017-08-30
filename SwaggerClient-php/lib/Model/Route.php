<?php
/**
 * Route
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IronFunctions
 *
 * The open source serverless platform.
 *
 * OpenAPI spec version: 0.1.29
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Route Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Route implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Route';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'path' => 'string',
        'image' => 'string',
        'headers' => 'map[string,string[]]',
        'memory' => 'int',
        'type' => 'string',
        'format' => 'string',
        'max_concurrency' => 'int',
        'config' => 'map[string,string]',
        'timeout' => 'int',
        'idle_timeout' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'path' => null,
        'image' => null,
        'headers' => null,
        'memory' => 'int64',
        'type' => null,
        'format' => null,
        'max_concurrency' => 'int32',
        'config' => null,
        'timeout' => null,
        'idle_timeout' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'path' => 'path',
        'image' => 'image',
        'headers' => 'headers',
        'memory' => 'memory',
        'type' => 'type',
        'format' => 'format',
        'max_concurrency' => 'max_concurrency',
        'config' => 'config',
        'timeout' => 'timeout',
        'idle_timeout' => 'idle_timeout'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'path' => 'setPath',
        'image' => 'setImage',
        'headers' => 'setHeaders',
        'memory' => 'setMemory',
        'type' => 'setType',
        'format' => 'setFormat',
        'max_concurrency' => 'setMaxConcurrency',
        'config' => 'setConfig',
        'timeout' => 'setTimeout',
        'idle_timeout' => 'setIdleTimeout'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'path' => 'getPath',
        'image' => 'getImage',
        'headers' => 'getHeaders',
        'memory' => 'getMemory',
        'type' => 'getType',
        'format' => 'getFormat',
        'max_concurrency' => 'getMaxConcurrency',
        'config' => 'getConfig',
        'timeout' => 'getTimeout',
        'idle_timeout' => 'getIdleTimeout'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_SYNC = 'sync';
    const TYPE_ASYNC = 'async';
    const FORMAT__DEFAULT = 'default';
    const FORMAT_HTTP = 'http';
    const FORMAT_JSON = 'json';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SYNC,
            self::TYPE_ASYNC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT__DEFAULT,
            self::FORMAT_HTTP,
            self::FORMAT_JSON,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['max_concurrency'] = isset($data['max_concurrency']) ? $data['max_concurrency'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['idle_timeout'] = isset($data['idle_timeout']) ? $data['idle_timeout'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getFormatAllowableValues();
        if (!in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getFormatAllowableValues();
        if (!in_array($this->container['format'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path URL path that will be matched to this route
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image Name of Docker image to use in this route. You should include the image tag, which should be a version number, to be more accurate. Can be overridden on a per route basis with route.image.
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets headers
     * @return map[string,string[]]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     * @param map[string,string[]] $headers Map of http headers that will be sent with the response
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets memory
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     * @param int $memory Max usable memory for this route (MiB).
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Route type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format Payload format sent into function.
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'format', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets max_concurrency
     * @return int
     */
    public function getMaxConcurrency()
    {
        return $this->container['max_concurrency'];
    }

    /**
     * Sets max_concurrency
     * @param int $max_concurrency Maximum number of hot functions concurrency
     * @return $this
     */
    public function setMaxConcurrency($max_concurrency)
    {
        $this->container['max_concurrency'] = $max_concurrency;

        return $this;
    }

    /**
     * Gets config
     * @return map[string,string]
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param map[string,string] $config Route configuration - overrides application configuration
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout Timeout for executions of this route. Value in Seconds
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets idle_timeout
     * @return int
     */
    public function getIdleTimeout()
    {
        return $this->container['idle_timeout'];
    }

    /**
     * Sets idle_timeout
     * @param int $idle_timeout Hot functions idle timeout before termination. Value in Seconds
     * @return $this
     */
    public function setIdleTimeout($idle_timeout)
    {
        $this->container['idle_timeout'] = $idle_timeout;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

