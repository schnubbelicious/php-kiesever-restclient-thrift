<?php
namespace KieServerClient\Protocol;

use Thrift\Base\TBase;
use Thrift\Type\TType;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
class BigInteger extends TBase {
    static $_TSPEC;

    /**
     * @var string
     */
    public $value = null;
    /**
     * @var int
     */
    public $radix = 10;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'value',
                    'type' => TType::STRING,
                ),
                2 => array(
                    'var' => 'radix',
                    'type' => TType::I32,
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'BigInteger';
    }

    public function read($input)
    {
        return $this->_read('BigInteger', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('BigInteger', self::$_TSPEC, $output);
    }

}
