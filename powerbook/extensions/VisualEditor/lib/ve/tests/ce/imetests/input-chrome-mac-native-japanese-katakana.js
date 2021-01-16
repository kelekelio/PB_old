/*!
 * VisualEditor IME test for Chrome on Mac OS X in Katakana Japanese using OS native IME.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chrome-mac-native-japanese-katakana', [
	{ imeIdentifier: 'Mac 10.10 native Japanese Katakana in Chrome', userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36', startDom: '' },
	{ seq: 0, time: 3.981, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 3.983, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 2, time: 3.984, action: 'changeText', args: [ 't' ] },
	{ seq: 3, time: 3.984, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 4, time: 3.984, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 5, time: 3.988, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 6, time: 3.988, action: 'endLoop', args: [] },
	{ seq: 7, time: 4.033, action: 'sendEvent', args: [ 'keyup', { keyCode: 84 } ] },
	{ seq: 8, time: 4.038, action: 'endLoop', args: [] },
	{ seq: 9, time: 4.094, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 10, time: 4.097, action: 'changeText', args: [ 'ト' ] },
	{ seq: 11, time: 4.097, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 12, time: 4.097, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 13, time: 4.105, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 14, time: 4.105, action: 'endLoop', args: [] },
	{ seq: 15, time: 4.133, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 16, time: 4.14, action: 'endLoop', args: [] },
	{ seq: 17, time: 5.452, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 18, time: 5.457, action: 'changeText', args: [ 'トt' ] },
	{ seq: 19, time: 5.457, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 20, time: 5.457, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 21, time: 5.471, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 22, time: 5.471, action: 'endLoop', args: [] },
	{ seq: 23, time: 5.501, action: 'sendEvent', args: [ 'keyup', { keyCode: 84 } ] },
	{ seq: 24, time: 5.508, action: 'endLoop', args: [] },
	{ seq: 25, time: 5.523, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 26, time: 5.53, action: 'changeText', args: [ 'トト' ] },
	{ seq: 27, time: 5.53, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 28, time: 5.53, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 29, time: 5.555, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 30, time: 5.555, action: 'endLoop', args: [] },
	{ seq: 31, time: 5.571, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 32, time: 5.582, action: 'endLoop', args: [] },
	{ seq: 33, time: 7.235, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 34, time: 7.248, action: 'changeText', args: [ 'トトr' ] },
	{ seq: 35, time: 7.248, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 36, time: 7.248, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 37, time: 7.279, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 38, time: 7.279, action: 'endLoop', args: [] },
	{ seq: 39, time: 7.302, action: 'sendEvent', args: [ 'keyup', { keyCode: 82 } ] },
	{ seq: 40, time: 7.316, action: 'endLoop', args: [] },
	{ seq: 41, time: 7.331, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 42, time: 7.345, action: 'changeText', args: [ 'トトロ' ] },
	{ seq: 43, time: 7.345, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 44, time: 7.345, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 45, time: 7.389, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 46, time: 7.389, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 47, time: 7.424, action: 'endLoop', args: [] },
	{ seq: 48, time: 7.444, action: 'endLoop', args: [] },
	{ seq: 49, time: 9.187, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 50, time: 9.21, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 51, time: 9.21, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 52, time: 9.25, action: 'endLoop', args: [] },
	{ seq: 53, time: 9.277, action: 'sendEvent', args: [ 'keyup', { keyCode: 9 } ] },
	{ seq: 54, time: 9.3, action: 'endLoop', args: [] },
	{ seq: 55, time: 10.026, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 56, time: 10.049, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 57, time: 10.072, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 58, time: 10.072, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 59, time: 10.12, action: 'sendEvent', args: [ 'keyup', { keyCode: 13 } ] },
	{ seq: 60, time: 10.148, action: 'endLoop', args: [] },
	{ seq: 61, time: 10.177, action: 'endLoop', args: [] }
] ] );
