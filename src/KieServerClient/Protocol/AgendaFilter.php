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
class AgendaFilter extends TBase {
    static $_TSPEC;

    /**
     * @var int
     */
    public $agendaFilterType = null;
    /**
     * @var string
     */
    public $expression = null;
    /**
     * @var bool
     */
    public $accept = true;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'agendaFilterType',
                    'type' => TType::I32,
                ),
                2 => array(
                    'var' => 'expression',
                    'type' => TType::STRING,
                ),
                3 => array(
                    'var' => 'accept',
                    'type' => TType::BOOL,
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'AgendaFilter';
    }

    public function read($input)
    {
        return $this->_read('AgendaFilter', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('AgendaFilter', self::$_TSPEC, $output);
    }

}