<?php 
/**
	Admin Page Framework v3.8.20 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/ct-interactive-map>
	Copyright (c) 2013-2019, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CtInteractiveMap_AdminPageFramework_Form_View___Script_RegisterCallback extends CtInteractiveMap_AdminPageFramework_Form_View___Script_Base {
    static public function getScript() {
        return <<<JAVASCRIPTS
(function ( $ ) {
            
    // Callback containers.
    $.fn.aCtInteractiveMap_AdminPageFrameworkAddRepeatableFieldCallbacks        = [];            
    $.fn.aCtInteractiveMap_AdminPageFrameworkRepeatFieldCallbacks               = [];    // 3.8.8+
    $.fn.aCtInteractiveMap_AdminPageFrameworkRemoveRepeatableFieldCallbacks     = [];
    $.fn.aCtInteractiveMap_AdminPageFrameworkSortedFieldsCallbacks              = [];            
    $.fn.aCtInteractiveMap_AdminPageFrameworkStoppedSortingFieldsCallbacks      = [];
    $.fn.aCtInteractiveMap_AdminPageFrameworkAddedWidgetCallbacks               = [];
    $.fn.aCtInteractiveMap_AdminPageFrameworkStoppedSortingSectionsCallbacks    = [];    // 3.8.0+
    
    /**
     * Gets triggered when the + (add) button of a repeatable field is pressed.
     */  
    $( document ).bind( 'ct-interactive-map_added_repeatable_field', function( oEvent, sFieldType, sID, iCallType, iSectionIndex, iFieldIndex ){          
        var _oThisNode = jQuery( oEvent.target );
        $.each( $.fn.aCtInteractiveMap_AdminPageFrameworkAddRepeatableFieldCallbacks, function( iIndex, aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ]; // '_nested', 'inline_mixed' are built-in
            
            // 2 here is reserved for built-in field types.
            if ( 2 < _aFieldTypes.length && -1 === $.inArray( sFieldType, _aFieldTypes ) ) {
                return true; // continue
            }            
            if ( ! $.isFunction( _hfCallback ) ) { 
                return true; // continue
            }   
            // Show console warnings for a deprecated method.
            if ( -1 === $.inArray( sFieldType, [ '_nested', 'inline_mixed' ] ) ) {                
                console.warn( 'Admin Page Framework (' + sFieldType + ' field type): The `added_repeatable_field` callback argument for the `registerCtInteractiveMap_AdminPageFrameworkCallbacks` method is deprecated. Use `repeated_field` instead.' );
            }
            _hfCallback( _oThisNode, sFieldType, sID, iCallType, iSectionIndex, iFieldIndex );
        });
        
        
    });  
    /**
     * Another way to handle repeatable fields.
     * 
     * Unlike the `ct-interactive-map_added_repeatable_field` event, this does not call the callback function
     * if it does not match the field type. This means `_nested` and `inline_mixed` will not trigger the callback.
     * 
     * @since       3.8.8
     * @param       oEvent              The jQuery event object.
     * @param       iCallType           0: repeated field, 1: repeated section.
     * @param       oModelContainer     The container that has data of model strings to generate incremented IDs and names.
     */
    $( document ).bind( 'ct-interactive-map_repeated_field', function( oEvent, iCallType, oModelContainer ){

        var _oThis     = jQuery( oEvent.target );
        var sFieldType = $( oEvent.target ).data( 'type' );
        var _aModel    = {}; 
        // var _aModel    = oModelContainer.data();
        _aModel[ 'call_type' ]      = iCallType;
        _aModel[ 'field_type' ]     = sFieldType;
        _aModel[ 'model_element' ]  = oModelContainer;
        _aModel[ 'added_element' ]  = _oThis;
        switch( iCallType ) {
            
            // Repeatable sections (calling a belonging field)
            case 1: 
                _aModel[ 'incremented_from' ] = Number( oModelContainer.attr( 'data-largest_index' ) );    
                _aModel[ 'index' ]            = _aModel[ 'incremented_from' ] + 1;
                _aModel[ 'id' ]               = oModelContainer.attr( 'data-section_id_model' );
                _aModel[ 'name' ]             = oModelContainer.attr( 'data-section_name_model' );
                _aModel[ 'flat_name' ]        = oModelContainer.attr( 'data-flat_section_name_model' );
                _aModel[ 'address' ]          = oModelContainer.attr( 'data-section_address_model' );
                break;
                
            // Repeatable fields
            default:
            case 0:
            case 2:
                _aModel[ 'incremented_from' ] = Number( oModelContainer.attr( 'data-largest_index' ) - 1 );   
                _aModel[ 'index' ]            = _aModel[ 'incremented_from' ] + 1;
                _aModel[ 'id' ]               = oModelContainer.attr( 'data-field_tag_id_model' );
                _aModel[ 'name' ]             = oModelContainer.attr( 'data-field_name_model' );
                _aModel[ 'flat_name' ]        = oModelContainer.attr( 'data-field_name_flat_model' );
                _aModel[ 'address' ]          = oModelContainer.attr( 'data-field_address_model' );
                break;                                

        }        
   
        $.each( $.fn.aCtInteractiveMap_AdminPageFrameworkRepeatFieldCallbacks, function( iIndex, aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ]; // '_nested', 'inline_mixed' are built-in
            if ( -1 !== $.inArray( sFieldType, [ '_nested', 'inline_mixed' ] ) ) {
                return true;    // continue
            }            
            if ( -1 === $.inArray( sFieldType, _aFieldTypes ) ) {
                return true;    // continue
            }
            if ( ! $.isFunction( _hfCallback ) ) { 
                return true;    // continue
            }
            _hfCallback( _oThis, _aModel );
        } );    
    
    } );
    /**
     * Gets triggered when sorting sections stops.
     * @since       3.8.0
     */
    $( document ).bind( 'ct-interactive-map_stopped_sorting_sections', function( oEvent ){  

        var _oThisNode = jQuery( oEvent.target );
        $.each( $.fn.aCtInteractiveMap_AdminPageFrameworkStoppedSortingSectionsCallbacks, function( iIndex, aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ];       
            if ( ! $.isFunction( _hfCallback ) ) { 
                return true;    // continue
            }               
            _hfCallback( _oThisNode );
        });
        
    });  
  
    /**
     * Supposed to get triggered when a repeatable field remove button is pressed.
     * @remark      Currently not used.
     */
    /* $( document ).bind( 'ct-interactive-map_removed_field', function( oEvent, sFieldType, sID, iCallType, iSectionIndex, iFieldIndex ){
        var _oThisNode = jQuery( oEvent.target );
        $.each( $.fn.aCtInteractiveMap_AdminPageFrameworkRemoveRepeatableFieldCallbacks, function( iIndex, aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ];       
            if ( 2 < _aFieldTypes.length && -1 === $.inArray( sFieldType, _aFieldTypes ) ) {
                return true; // continue
            }            
            if ( ! $.isFunction( _hfCallback ) ) { 
                return true;    // continue
            }   
            _hfCallback( _oThisNode, sFieldType, sID, iCallType, iSectionIndex, iFieldIndex );
        });
    });   */
 
    /**
     * Gets triggered when a sortable field is dropped and the sort event occurred.
     */
    $.fn.callBackSortedFields = function( sFieldType, sID, iCallType ) {
        var oThisNode = this;
        $.fn.aCtInteractiveMap_AdminPageFrameworkSortedFieldsCallbacks.forEach( function( aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ]; // '_nested', 'inline_mixed' are bult-in
            if ( 2 < _aFieldTypes.length && -1 === $.inArray( sFieldType, _aFieldTypes ) ) {
                return true; // continue
            }            
            if ( jQuery.isFunction( _hfCallback ) ) { 
                _hfCallback( oThisNode, sFieldType, sID, iCallType ); 
            }
        });
    };

    /**
     * Gets triggered when sorting fields stopped.
     * @since   3.1.6
     */
    $.fn.callBackStoppedSortingFields = function( sFieldType, sID, iCallType ) {
        var oThisNode = this;
        $.fn.aCtInteractiveMap_AdminPageFrameworkStoppedSortingFieldsCallbacks.forEach( function( aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ]; // '_nested', 'inline_mixed' are built-in
            if ( 2 < _aFieldTypes.length && -1 === $.inArray( sFieldType, _aFieldTypes ) ) {
                return true; // continue
            }
            if ( jQuery.isFunction( _hfCallback ) ) { 
                _hfCallback( oThisNode, sFieldType, sID, iCallType ); 
            }
        });
    };            
    
    /**
     * Gets triggered when a widget of the framework is saved.
     * @since    3.2.0 
     */
    $( document ).bind( 'ct-interactive-map_saved_widget', function( event, oWidget ){
        $.each( $.fn.aCtInteractiveMap_AdminPageFrameworkAddedWidgetCallbacks, function( iIndex, aCallback ) {
            var _hfCallback  = aCallback[ 0 ];
            var _aFieldTypes = aCallback[ 1 ];
            if ( ! $.isFunction( _hfCallback ) ) { 
                return true;    // continue
            }   
            _hfCallback( oWidget ); 
        });            
    });
    
    /**
     * Registers callbacks. This will be called in each field type definition class.
     * 
     * @since       unknown
     * @since       3.6.0       Changed the name from `registerAPFCallback()`.
     */
    $.fn.registerCtInteractiveMap_AdminPageFrameworkCallbacks = function( oCallbacks, aFieldTypeSlugs ) {

        // This is the easiest way to have default options.
        var oCallbacks = $.extend(
            {
                // The user specifies the settings with the following options.
                added_repeatable_field      : null, // @deprecated 3.8.8
                repeated_field              : null, // 3.8.8+
                removed_repeatable_field    : null, // @deprecated 3.6.0
                sorted_fields               : null,
                stopped_sorting_fields      : null,
                saved_widget                : null,
                stopped_sorting_sections    : null, // 3.8.0+
            }, 
            oCallbacks 
        );
        var aFieldTypeSlugs = 'undefined' === typeof aFieldTypeSlugs 
            ? []
            : aFieldTypeSlugs;
        aFieldTypeSlugs.push( '_nested', 'inline_mixed' );    // 3.8.0+

        // Store the callback functions
        $.fn.aCtInteractiveMap_AdminPageFrameworkAddRepeatableFieldCallbacks.push( 
            [ oCallbacks.added_repeatable_field, aFieldTypeSlugs ]
        );

        $.fn.aCtInteractiveMap_AdminPageFrameworkRepeatFieldCallbacks.push(  // 3.8.8+
            [ oCallbacks.repeated_field, aFieldTypeSlugs ]
        );        
        $.fn.aCtInteractiveMap_AdminPageFrameworkRemoveRepeatableFieldCallbacks.push( 
            [ oCallbacks.removed_repeatable_field, aFieldTypeSlugs ]
        );
        $.fn.aCtInteractiveMap_AdminPageFrameworkSortedFieldsCallbacks.push( 
            [ oCallbacks.sorted_fields, aFieldTypeSlugs ]
        );
        $.fn.aCtInteractiveMap_AdminPageFrameworkStoppedSortingFieldsCallbacks.push( 
            [ oCallbacks.stopped_sorting_fields, aFieldTypeSlugs ]
        );
        $.fn.aCtInteractiveMap_AdminPageFrameworkAddedWidgetCallbacks.push( 
            [ oCallbacks.saved_widget, aFieldTypeSlugs ]
        );

        // 3.8.0
        $.fn.aCtInteractiveMap_AdminPageFrameworkStoppedSortingSectionsCallbacks.push( 
            [ oCallbacks.stopped_sorting_sections, aFieldTypeSlugs ]
        );        

    };
    /**
     * An alias of the `registerCtInteractiveMap_AdminPageFrameworkCalbacks()` method.
     * @remark      Kept for backward compatibility. There are some custom field types which call the old method name. 
     * @deprecated
     */
    $.fn.registerAPFCallback = function( oCallbacks, aFieldTypeSlugs ) {
        $.fn.registerCtInteractiveMap_AdminPageFrameworkCallbacks( oCallbacks, aFieldTypeSlugs );
    }
        
}( jQuery ));
JAVASCRIPTS;
        
    }
    }
    