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
class Collection extends TBase {
    static $_TSPEC;

    /**
     * @var string[]
     */
    public $objects = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'objects',
                    'type' => TType::LST,
                    'etype' => TType::STRING,
                    'elem' => array(
                        'type' => TType::STRING,
                    ),
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'Collection';
    }

    public function read($input)
    {
        return $this->_read('Collection', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('Collection', self::$_TSPEC, $output);
    }

}

