/*!
 * VisualEditor IME test for Internet Explorer on Windows in Greek.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-ie9-win7-greek', [
	{ imeIdentifier: 'Greek', userAgent: 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET4.0C)', startDom: '' },
	{ seq: 0, time: 12.904, action: 'sendEvent', args: [ 'keydown', { keyCode: 69 } ] },
	{ seq: 1, time: 12.906, action: 'sendEvent', args: [ 'keypress', { keyCode: 949 } ] },
	{ seq: 2, time: 12.911, action: 'changeText', args: [ 'ε' ] },
	{ seq: 3, time: 12.911, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 4, time: 12.911, action: 'endLoop', args: [] },
	{ seq: 5, time: 13.046, action: 'sendEvent', args: [ 'keyup', { keyCode: 69 } ] },
	{ seq: 6, time: 13.056, action: 'endLoop', args: [] },
	{ seq: 7, time: 13.35, action: 'sendEvent', args: [ 'keydown', { keyCode: 76 } ] },
	{ seq: 8, time: 13.351, action: 'sendEvent', args: [ 'keypress', { keyCode: 955 } ] },
	{ seq: 9, time: 13.359, action: 'changeText', args: [ 'ελ' ] },
	{ seq: 10, time: 13.359, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 11, time: 13.359, action: 'endLoop', args: [] },
	{ seq: 12, time: 13.454, action: 'sendEvent', args: [ 'keyup', { keyCode: 76 } ] },
	{ seq: 13, time: 13.463, action: 'endLoop', args: [] },
	{ seq: 14, time: 13.708, action: 'sendEvent', args: [ 'keydown', { keyCode: 76 } ] },
	{ seq: 15, time: 13.71, action: 'sendEvent', args: [ 'keypress', { keyCode: 955 } ] },
	{ seq: 16, time: 13.715, action: 'changeText', args: [ 'ελλ' ] },
	{ seq: 17, time: 13.715, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 18, time: 13.715, action: 'endLoop', args: [] },
	{ seq: 19, time: 13.822, action: 'sendEvent', args: [ 'keyup', { keyCode: 76 } ] },
	{ seq: 20, time: 13.832, action: 'endLoop', args: [] },
	{ seq: 21, time: 14.026, action: 'sendEvent', args: [ 'keydown', { keyCode: 72 } ] },
	{ seq: 22, time: 14.028, action: 'sendEvent', args: [ 'keypress', { keyCode: 951 } ] },
	{ seq: 23, time: 14.038, action: 'changeText', args: [ 'ελλη' ] },
	{ seq: 24, time: 14.038, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 25, time: 14.038, action: 'endLoop', args: [] },
	{ seq: 26, time: 14.15, action: 'sendEvent', args: [ 'keyup', { keyCode: 72 } ] },
	{ seq: 27, time: 14.164, action: 'endLoop', args: [] },
	{ seq: 28, time: 14.423, action: 'sendEvent', args: [ 'keydown', { keyCode: 78 } ] },
	{ seq: 29, time: 14.43, action: 'sendEvent', args: [ 'keypress', { keyCode: 957 } ] },
	{ seq: 30, time: 14.44, action: 'changeText', args: [ 'ελλην' ] },
	{ seq: 31, time: 14.44, action: 'changeSel', args: [ 5, 5 ] },
	{ seq: 32, time: 14.44, action: 'endLoop', args: [] },
	{ seq: 33, time: 14.558, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 34, time: 14.569, action: 'endLoop', args: [] },
	{ seq: 35, time: 14.771, action: 'sendEvent', args: [ 'keydown', { keyCode: 73 } ] },
	{ seq: 36, time: 14.778, action: 'sendEvent', args: [ 'keypress', { keyCode: 953 } ] },
	{ seq: 37, time: 14.789, action: 'changeText', args: [ 'ελληνι' ] },
	{ seq: 38, time: 14.789, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 39, time: 14.789, action: 'endLoop', args: [] },
	{ seq: 40, time: 14.896, action: 'sendEvent', args: [ 'keyup', { keyCode: 73 } ] },
	{ seq: 41, time: 14.906, action: 'endLoop', args: [] },
	{ seq: 42, time: 15.174, action: 'sendEvent', args: [ 'keydown', { keyCode: 75 } ] },
	{ seq: 43, time: 15.181, action: 'sendEvent', args: [ 'keypress', { keyCode: 954 } ] },
	{ seq: 44, time: 15.191, action: 'changeText', args: [ 'ελληνικ' ] },
	{ seq: 45, time: 15.191, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 46, time: 15.191, action: 'endLoop', args: [] },
	{ seq: 47, time: 15.293, action: 'sendEvent', args: [ 'keyup', { keyCode: 75 } ] },
	{ seq: 48, time: 15.304, action: 'endLoop', args: [] },
	{ seq: 49, time: 15.537, action: 'sendEvent', args: [ 'keydown', { keyCode: 186 } ] },
	{ seq: 50, time: 15.551, action: 'endLoop', args: [] },
	{ seq: 51, time: 15.665, action: 'sendEvent', args: [ 'keyup', { keyCode: 186 } ] },
	{ seq: 52, time: 15.675, action: 'endLoop', args: [] },
	{ seq: 53, time: 15.935, action: 'sendEvent', args: [ 'keydown', { keyCode: 65 } ] },
	{ seq: 54, time: 15.942, action: 'sendEvent', args: [ 'keypress', { keyCode: 940 } ] },
	{ seq: 55, time: 15.952, action: 'changeText', args: [ 'ελληνικά' ] },
	{ seq: 56, time: 15.952, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 57, time: 15.952, action: 'endLoop', args: [] },
	{ seq: 58, time: 16.129, action: 'sendEvent', args: [ 'keyup', { keyCode: 65 } ] },
	{ seq: 59, time: 16.142, action: 'endLoop', args: [] }
] ] );
