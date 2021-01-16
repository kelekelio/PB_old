/*!
 * VisualEditor UserInterface TriggerRegistry class.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

/**
 * Trigger registry.
 *
 * @class
 * @extends OO.Registry
 * @constructor
 */
ve.ui.TriggerRegistry = function VeUiTriggerRegistry() {
	// Parent constructor
	ve.ui.TriggerRegistry.super.call( this );
};

/* Inheritance */

OO.inheritClass( ve.ui.TriggerRegistry, OO.Registry );

/* Methods */

/**
 * Register a constructor with the factory.
 *
 * The only supported platforms are 'mac' and 'pc'. All platforms not identified as 'mac' will be
 * considered to be 'pc', including 'win', 'linux', 'solaris', etc.
 *
 * @method
 * @param {string|string[]} name Symbolic name or list of symbolic names
 * @param {ve.ui.Trigger[]|Object} triggers Trigger object(s) or map of trigger object(s) keyed by
 * platform name e.g. 'mac' or 'pc'
 * @throws {Error} Trigger must be an instance of ve.ui.Trigger
 * @throws {Error} Incomplete trigger
 */
ve.ui.TriggerRegistry.prototype.register = function ( name, triggers ) {
	var i, l, triggerList,
		platform = ve.getSystemPlatform(),
		platformKey = platform === 'mac' ? 'mac' : 'pc';

	if ( ve.isPlainObject( triggers ) ) {
		if ( Object.prototype.hasOwnProperty.call( triggers, platformKey ) ) {
			triggerList = Array.isArray( triggers[ platformKey ] ) ? triggers[ platformKey ] : [ triggers[ platformKey ] ];
		} else {
			return;
		}
	} else {
		triggerList = Array.isArray( triggers ) ? triggers : [ triggers ];
	}

	// Validate arguments
	for ( i = 0, l = triggerList.length; i < l; i++ ) {
		if ( !( triggerList[ i ] instanceof ve.ui.Trigger ) ) {
			throw new Error( 'Trigger must be an instance of ve.ui.Trigger' );
		}
		if ( !triggerList[ i ].isComplete() ) {
			throw new Error( 'Incomplete trigger' );
		}
	}

	ve.ui.TriggerRegistry.super.prototype.register.call( this, name, triggerList );
};

/**
 * Get trigger messages for a trigger by name
 *
 * @param {string} name Symbolic name
 * @return {string[]} List of trigger messages
 */
ve.ui.TriggerRegistry.prototype.getMessages = function ( name ) {
	return ( this.lookup( name ) || [] ).map( function ( trigger ) { return trigger.getMessage(); } );
};

/* Initialization */

ve.ui.triggerRegistry = new ve.ui.TriggerRegistry();

/* Registrations */

ve.ui.triggerRegistry.register(
	'undo', { mac: new ve.ui.Trigger( 'cmd+z' ), pc: new ve.ui.Trigger( 'ctrl+z' ) }
);
ve.ui.triggerRegistry.register(
	'redo', {
		mac: [
			new ve.ui.Trigger( 'cmd+shift+z' ),
			new ve.ui.Trigger( 'cmd+y' )
		],
		pc: [
			new ve.ui.Trigger( 'ctrl+shift+z' ),
			new ve.ui.Trigger( 'ctrl+y' )
		]
	}
);
ve.ui.triggerRegistry.register(
	'bold', { mac: new ve.ui.Trigger( 'cmd+b' ), pc: new ve.ui.Trigger( 'ctrl+b' ) }
);
ve.ui.triggerRegistry.register(
	'italic', { mac: new ve.ui.Trigger( 'cmd+i' ), pc: new ve.ui.Trigger( 'ctrl+i' ) }
);
ve.ui.triggerRegistry.register(
	'link', { mac: new ve.ui.Trigger( 'cmd+k' ), pc: new ve.ui.Trigger( 'ctrl+k' ) }
);
ve.ui.triggerRegistry.register(
	'clear', {
		mac: [
			new ve.ui.Trigger( 'cmd+\\' )
		],
		pc: [
			new ve.ui.Trigger( 'ctrl+\\' ),
			new ve.ui.Trigger( 'ctrl+m' )
		]
	}
);
ve.ui.triggerRegistry.register(
	'underline', { mac: new ve.ui.Trigger( 'cmd+u' ), pc: new ve.ui.Trigger( 'ctrl+u' ) }
);
ve.ui.triggerRegistry.register(
	'code', { mac: new ve.ui.Trigger( 'cmd+shift+6' ), pc: new ve.ui.Trigger( 'ctrl+shift+6' ) }
);
ve.ui.triggerRegistry.register(
	'strikethrough', { mac: new ve.ui.Trigger( 'cmd+shift+5' ), pc: new ve.ui.Trigger( 'ctrl+shift+5' ) }
);
ve.ui.triggerRegistry.register(
	'subscript', { mac: new ve.ui.Trigger( 'cmd+,' ), pc: new ve.ui.Trigger( 'ctrl+,' ) }
);
ve.ui.triggerRegistry.register(
	'superscript', { mac: new ve.ui.Trigger( 'cmd+.' ), pc: new ve.ui.Trigger( 'ctrl+.' ) }
);
ve.ui.triggerRegistry.register(
	'indent', {
		mac: [
			new ve.ui.Trigger( 'tab' ),
			new ve.ui.Trigger( 'cmd+]' )
		],
		pc: [
			new ve.ui.Trigger( 'tab' ),
			new ve.ui.Trigger( 'ctrl+]' )
		]
	}
);
ve.ui.triggerRegistry.register(
	'outdent', {
		mac: [
			new ve.ui.Trigger( 'shift+tab' ),
			new ve.ui.Trigger( 'cmd+[' )
		],
		pc: [
			new ve.ui.Trigger( 'shift+tab' ),
			new ve.ui.Trigger( 'ctrl+[' )
		]
	}
);
ve.ui.triggerRegistry.register(
	'commandHelp', {
		mac: [
			new ve.ui.Trigger( 'cmd+/' ),
			new ve.ui.Trigger( 'cmd+shift+/' ) // =cmd+? on most systems, but not all
		],
		pc: [
			new ve.ui.Trigger( 'ctrl+/' ),
			new ve.ui.Trigger( 'ctrl+shift+/' ) // =ctrl+? on most systems, but not all
		]
	}
);
// Ctrl+0-7 below are not mapped to Cmd+0-7 on Mac because Chrome reserves those for switching tabs
ve.ui.triggerRegistry.register(
	'paragraph', new ve.ui.Trigger( 'ctrl+0' )
);
ve.ui.triggerRegistry.register(
	'heading1', new ve.ui.Trigger( 'ctrl+1' )
);
ve.ui.triggerRegistry.register(
	'heading2', new ve.ui.Trigger( 'ctrl+2' )
);
ve.ui.triggerRegistry.register(
	'heading3', new ve.ui.Trigger( 'ctrl+3' )
);
ve.ui.triggerRegistry.register(
	'heading4', new ve.ui.Trigger( 'ctrl+4' )
);
ve.ui.triggerRegistry.register(
	'heading5', new ve.ui.Trigger( 'ctrl+5' )
);
ve.ui.triggerRegistry.register(
	'heading6', new ve.ui.Trigger( 'ctrl+6' )
);
ve.ui.triggerRegistry.register(
	'preformatted', new ve.ui.Trigger( 'ctrl+7' )
);
ve.ui.triggerRegistry.register(
	'blockquote', new ve.ui.Trigger( 'ctrl+8' )
);
ve.ui.triggerRegistry.register(
	'selectAll', { mac: new ve.ui.Trigger( 'cmd+a' ), pc: new ve.ui.Trigger( 'ctrl+a' ) }
);
ve.ui.triggerRegistry.register(
	'pasteSpecial', {
		mac: new ve.ui.Trigger( 'cmd+option+shift+v' ),
		pc: new ve.ui.Trigger( 'ctrl+shift+v' )
	}
);
ve.ui.triggerRegistry.register(
	'findAndReplace', { mac: new ve.ui.Trigger( 'cmd+f' ), pc: new ve.ui.Trigger( 'ctrl+f' ) }
);
ve.ui.triggerRegistry.register(
	'changeDirectionality', { mac: new ve.ui.Trigger( 'cmd+shift+x' ), pc: new ve.ui.Trigger( 'ctrl+shift+x' ) }
);
ve.ui.triggerRegistry.register(
	'findNext', {
		mac: new ve.ui.Trigger( 'cmd+g' ),
		pc: [
			new ve.ui.Trigger( 'ctrl+g' ),
			new ve.ui.Trigger( 'f3' )
		]
	}
);
ve.ui.triggerRegistry.register(
	'findPrevious', {
		mac: new ve.ui.Trigger( 'cmd+shift+g' ),
		pc: [
			new ve.ui.Trigger( 'shift+ctrl+g' ),
			new ve.ui.Trigger( 'shift+f3' )
		]
	}
);
