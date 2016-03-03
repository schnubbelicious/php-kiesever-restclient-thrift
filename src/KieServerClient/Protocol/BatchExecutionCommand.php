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
class BatchExecutionCommand extends TBase {
    static $_TSPEC;

    /**
     * @var \KieServerClient\Protocol\FireAllRulesCommand
     */
    public $fireAllRulesCommand = null;
    /**
     * @var \KieServerClient\Protocol\InsertObjectCommand[]
     */
    public $insertObjectCommands = null;
    /**
     * @var \KieServerClient\Protocol\InsertElementsCommand[]
     */
    public $insertElementsCommands = null;
    /**
     * @var \KieServerClient\Protocol\SetGlobalCommand[]
     */
    public $setGlobalCommands = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'fireAllRulesCommand',
                    'type' => TType::STRUCT,
                    'class' => '\KieServerClient\Protocol\FireAllRulesCommand',
                ),
                2 => array(
                    'var' => 'insertObjectCommands',
                    'type' => TType::LST,
                    'etype' => TType::STRUCT,
                    'elem' => array(
                        'type' => TType::STRUCT,
                        'class' => '\KieServerClient\Protocol\InsertObjectCommand',
                    ),
                ),
                3 => array(
                    'var' => 'insertElementsCommands',
                    'type' => TType::LST,
                    'etype' => TType::STRUCT,
                    'elem' => array(
                        'type' => TType::STRUCT,
                        'class' => '\KieServerClient\Protocol\InsertElementsCommand',
                    ),
                ),
                4 => array(
                    'var' => 'setGlobalCommands',
                    'type' => TType::LST,
                    'etype' => TType::STRUCT,
                    'elem' => array(
                        'type' => TType::STRUCT,
                        'class' => '\KieServerClient\Protocol\SetGlobalCommand',
                    ),
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'BatchExecutionCommand';
    }

    public function read($input)
    {
        return $this->_read('BatchExecutionCommand', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('BatchExecutionCommand', self::$_TSPEC, $output);
    }

}
