/*!
 * VisualEditor IME test for Safari on Mac OS X in Katakana Japanese using OS native IME.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-safari-mac-native-japanese-katakana', [
	{ imeIdentifier: 'Mac 10.10 native Japanese Katakana in Safari', userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.6.3 (KHTML, like Gecko) Version/8.0.6 Safari/600.6.3', startDom: '' },
	{ seq: 0, time: 7.979, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 1, time: 7.981, action: 'changeText', args: [ 't' ] },
	{ seq: 2, time: 7.981, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 3, time: 7.981, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 4, time: 7.991, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 5, time: 7.991, action: 'endLoop', args: [] },
	{ seq: 6, time: 7.993, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 7, time: 8.019, action: 'endLoop', args: [] },
	{ seq: 8, time: 8.051, action: 'sendEvent', args: [ 'keyup', { keyCode: 84 } ] },
	{ seq: 9, time: 8.055, action: 'endLoop', args: [] },
	{ seq: 10, time: 8.339, action: 'changeText', args: [ 'ト' ] },
	{ seq: 11, time: 8.339, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 12, time: 8.339, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 13, time: 8.351, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 14, time: 8.351, action: 'endLoop', args: [] },
	{ seq: 15, time: 8.352, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 16, time: 8.369, action: 'endLoop', args: [] },
	{ seq: 17, time: 8.43, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 18, time: 8.434, action: 'endLoop', args: [] },
	{ seq: 19, time: 8.819, action: 'changeText', args: [ 'トt' ] },
	{ seq: 20, time: 8.819, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 21, time: 8.819, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 22, time: 8.845, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 23, time: 8.845, action: 'endLoop', args: [] },
	{ seq: 24, time: 8.847, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 25, time: 8.869, action: 'endLoop', args: [] },
	{ seq: 26, time: 8.902, action: 'sendEvent', args: [ 'keyup', { keyCode: 84 } ] },
	{ seq: 27, time: 8.906, action: 'endLoop', args: [] },
	{ seq: 28, time: 9.115, action: 'changeText', args: [ 'トト' ] },
	{ seq: 29, time: 9.115, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 30, time: 9.115, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 31, time: 9.129, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 32, time: 9.129, action: 'endLoop', args: [] },
	{ seq: 33, time: 9.132, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 34, time: 9.155, action: 'endLoop', args: [] },
	{ seq: 35, time: 9.221, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 36, time: 9.227, action: 'endLoop', args: [] },
	{ seq: 37, time: 9.595, action: 'changeText', args: [ 'トトr' ] },
	{ seq: 38, time: 9.595, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 39, time: 9.595, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 40, time: 9.611, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 41, time: 9.611, action: 'endLoop', args: [] },
	{ seq: 42, time: 9.614, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 43, time: 9.636, action: 'endLoop', args: [] },
	{ seq: 44, time: 9.669, action: 'sendEvent', args: [ 'keyup', { keyCode: 82 } ] },
	{ seq: 45, time: 9.674, action: 'endLoop', args: [] },
	{ seq: 46, time: 9.979, action: 'changeText', args: [ 'トトロ' ] },
	{ seq: 47, time: 9.979, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 48, time: 9.979, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 49, time: 9.996, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 50, time: 9.996, action: 'endLoop', args: [] },
	{ seq: 51, time: 9.999, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 52, time: 10.004, action: 'endLoop', args: [] },
	{ seq: 53, time: 10.07, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 54, time: 10.075, action: 'endLoop', args: [] },
	{ seq: 55, time: 10.682, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 56, time: 10.682, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 57, time: 10.699, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 58, time: 10.701, action: 'endLoop', args: [] },
	{ seq: 59, time: 10.729, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 60, time: 10.731, action: 'endLoop', args: [] },
	{ seq: 61, time: 10.736, action: 'endLoop', args: [] },
	{ seq: 62, time: 10.787, action: 'sendEvent', args: [ 'keyup', { keyCode: 9 } ] },
	{ seq: 63, time: 10.795, action: 'endLoop', args: [] },
	{ seq: 64, time: 11.249, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 65, time: 11.252, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 66, time: 11.252, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 67, time: 11.28, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 68, time: 11.286, action: 'endLoop', args: [] },
	{ seq: 69, time: 11.309, action: 'sendEvent', args: [ 'keyup', { keyCode: 13 } ] },
	{ seq: 70, time: 11.316, action: 'endLoop', args: [] }
] ] );
