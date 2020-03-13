<?php 
/**
	Admin Page Framework v3.8.20 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/ct-interactive-map>
	Copyright (c) 2013-2019, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CtInteractiveMap_AdminPageFramework_FieldType__nested extends CtInteractiveMap_AdminPageFramework_FieldType {
    public $aFieldTypeSlugs = array('_nested');
    protected $aDefaultKeys = array();
    protected function getStyles() {
        return ".ct-interactive-map-fieldset > .ct-interactive-map-fields > .ct-interactive-map-field.with-nested-fields > .ct-interactive-map-fieldset.multiple-nesting {margin-left: 2em;}.ct-interactive-map-fieldset > .ct-interactive-map-fields > .ct-interactive-map-field.with-nested-fields > .ct-interactive-map-fieldset {margin-bottom: 1em;}.with-nested-fields > .ct-interactive-map-fieldset.child-fieldset > .ct-interactive-map-child-field-title {display: inline-block;padding: 0 0 0.4em 0;}.ct-interactive-map-fieldset.child-fieldset > label.ct-interactive-map-child-field-title {display: table-row; white-space: nowrap;}";
    }
    protected function getField($aField) {
        $_oCallerForm = $aField['_caller_object'];
        $_aInlineMixedOutput = array();
        foreach ($this->getAsArray($aField['content']) as $_aChildFieldset) {
            if (is_scalar($_aChildFieldset)) {
                continue;
            }
            if (!$this->isNormalPlacement($_aChildFieldset)) {
                continue;
            }
            $_aChildFieldset = $this->getFieldsetReformattedBySubFieldIndex($_aChildFieldset, ( integer )$aField['_index'], $aField['_is_multiple_fields'], $aField);
            $_oFieldset = new CtInteractiveMap_AdminPageFramework_Form_View___Fieldset($_aChildFieldset, $_oCallerForm->aSavedData, $_oCallerForm->getFieldErrors(), $_oCallerForm->aFieldTypeDefinitions, $_oCallerForm->oMsg, $_oCallerForm->aCallbacks);
            $_aInlineMixedOutput[] = $_oFieldset->get();
        }
        return implode('', $_aInlineMixedOutput);
    }
    }
    class CtInteractiveMap_AdminPageFramework_FieldType_inline_mixed extends CtInteractiveMap_AdminPageFramework_FieldType__nested {
        public $aFieldTypeSlugs = array('inline_mixed');
        protected $aDefaultKeys = array('label_min_width' => '', 'show_debug_info' => false,);
        protected function getStyles() {
            return ".ct-interactive-map-field-inline_mixed {width: 98%;}.ct-interactive-map-field-inline_mixed > fieldset {display: inline-block;overflow-x: visible;padding-right: 0.4em;}.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields{display: inline;width: auto;table-layout: auto;margin: 0;padding: 0;vertical-align: middle;white-space: nowrap;}.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field {float: none;clear: none;width: 100%;display: inline-block;margin-right: auto;vertical-align: middle; }.with-mixed-fields > fieldset > label {width: auto;padding: 0;}.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field .ct-interactive-map-input-label-string {padding: 0;}.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field > .ct-interactive-map-input-label-container,.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field > * > .ct-interactive-map-input-label-container{padding: 0;display: inline-block;width: 100%;}.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field > .ct-interactive-map-input-label-container > label,.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field > * > .ct-interactive-map-input-label-container > label{display: inline-block;}.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field > .ct-interactive-map-input-label-container > label > input,.ct-interactive-map-field-inline_mixed > fieldset > .ct-interactive-map-fields > .ct-interactive-map-field > * > .ct-interactive-map-input-label-container > label > input{display: inline-block;min-width: 100%;margin-right: auto;margin-left: auto;}.ct-interactive-map-field-inline_mixed .ct-interactive-map-input-label-container,.ct-interactive-map-field-inline_mixed .ct-interactive-map-input-label-string{min-width: 0;}";
        }
    }
    