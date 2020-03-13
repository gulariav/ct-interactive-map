<?php 
/**
	Admin Page Framework v3.8.20 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/ct-interactive-map>
	Copyright (c) 2013-2019, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CtInteractiveMap_AdminPageFramework_Form_View___CSS_Section extends CtInteractiveMap_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getFormSectionRules();
    }
    private function _getFormSectionRules() {
        $_sCSSRules = ".ct-interactive-map-section .form-table {margin-top: 0;}.ct-interactive-map-section .form-table td label { display: inline;}.ct-interactive-map-section-tabs-contents {margin-top: 1em;}.ct-interactive-map-section-tabs { margin: 0;}.ct-interactive-map-tab-content { padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd; }.ct-interactive-map-section-tab {background-color: transparent;vertical-align: bottom; margin-bottom: -2px;margin-left: 0px;margin-right: 0.5em;background-color: #F1F1F1;font-weight: normal;}.ct-interactive-map-section-tab:hover {background-color: #F8F8F8;}.ct-interactive-map-section-tab.active {background-color: #fdfdfd; }.ct-interactive-map-section-tab h4 {margin: 0;padding: 0.4em 0.8em;font-size: 1.12em;vertical-align: middle;white-space: nowrap;display:inline-block;font-weight: normal;}.ct-interactive-map-section-tab.nav-tab {padding: 0.2em 0.4em;}.ct-interactive-map-section-tab.nav-tab a {text-decoration: none;color: #464646;vertical-align: inherit; outline: 0; }.ct-interactive-map-section-tab.nav-tab a:focus { box-shadow: none;}.ct-interactive-map-section-tab.nav-tab.active a {color: #000;}.ct-interactive-map-content ul.ct-interactive-map-section-tabs > li.ct-interactive-map-section-tab {list-style-type: none;margin: -4px 4px -1px 0;}.ct-interactive-map-repeatable-section-buttons {float: right;clear: right;margin-top: 1em;}.ct-interactive-map-repeatable-section-buttons.disabled > .repeatable-section-button {color: #edd;border-color: #edd;}.ct-interactive-map-section-caption {text-align: left;margin: 0;}.ct-interactive-map-section .ct-interactive-map-section-title {}.ct-interactive-map-sections.sortable-section > .ct-interactive-map-section {padding: 1em 1.8em 1em 2.6em;}.ct-interactive-map-sections.sortable-section > .ct-interactive-map-section.is_subsection_collapsible {display: block; float: none;border: 0px;padding: 0;background: transparent;}.ct-interactive-map-sections.sortable-section > .ct-interactive-map-tab-content {display: block; float: none;border: 0px;padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd;}.ct-interactive-map-sections.sortable-section > .ct-interactive-map-section {margin-bottom: 1em;}.ct-interactive-map-section {margin-bottom: 1em; }.ct-interactive-map-sectionset {margin-bottom: 1em; display:inline-block;width:100%;}.ct-interactive-map-section > .ct-interactive-map-sectionset {margin-left: 2em;}";
        $_sCSSRules.= $this->___getForWP47();
        return $_sCSSRules;
    }
    private function ___getForWP47() {
        if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
            return '';
        }
        return ".ct-interactive-map-content ul.ct-interactive-map-section-tabs > li.ct-interactive-map-section-tab {margin-bottom: -2px;}";
    }
    }
    