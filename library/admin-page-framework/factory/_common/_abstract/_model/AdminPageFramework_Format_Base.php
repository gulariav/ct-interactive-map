<?php 
/**
	Admin Page Framework v3.8.20 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/ct-interactive-map>
	Copyright (c) 2013-2019, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class CtInteractiveMap_AdminPageFramework_Format_Base extends CtInteractiveMap_AdminPageFramework_FrameworkUtility {
    static public $aStructure = array();
    public $aSubject = array();
    public function __construct() {
        $_aParameters = func_get_args() + array($this->aSubject,);
        $this->aSubject = $_aParameters[0];
    }
    public function get() {
        return $this->aSubject;
    }
    }
    