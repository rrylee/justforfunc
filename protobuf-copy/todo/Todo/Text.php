<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: todo.proto

namespace Todo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>todo.Text</code>
 */
class Text extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';

    public function __construct() {
        \GPBMetadata\Todo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

