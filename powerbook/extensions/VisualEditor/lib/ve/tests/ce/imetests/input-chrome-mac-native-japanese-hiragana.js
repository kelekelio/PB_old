/*!
 * VisualEditor IME test for Chrome on Mac OS X in Hiragana Japanese using OS native IME.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chrome-mac-native-japanese-hiragana', [
	{ imeIdentifier: 'Mac 10.10 native Japanese Hiragana in Chrome', userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36', startDom: '' },
	{ seq: 0, time: 8.086, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 8.088, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 2, time: 8.089, action: 'changeText', args: [ 'n' ] },
	{ seq: 3, time: 8.089, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 4, time: 8.089, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 5, time: 8.093, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 6, time: 8.093, action: 'endLoop', args: [] },
	{ seq: 7, time: 8.198, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 8, time: 8.202, action: 'endLoop', args: [] },
	{ seq: 9, time: 8.557, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 10, time: 8.559, action: 'changeText', args: [ 'に' ] },
	{ seq: 11, time: 8.559, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 12, time: 8.559, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 13, time: 8.564, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 14, time: 8.564, action: 'endLoop', args: [] },
	{ seq: 15, time: 8.638, action: 'sendEvent', args: [ 'keyup', { keyCode: 73 } ] },
	{ seq: 16, time: 8.641, action: 'endLoop', args: [] },
	{ seq: 17, time: 9.284, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 18, time: 9.286, action: 'changeText', args: [ 'にh' ] },
	{ seq: 19, time: 9.286, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 20, time: 9.286, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 21, time: 9.291, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 22, time: 9.291, action: 'endLoop', args: [] },
	{ seq: 23, time: 9.407, action: 'sendEvent', args: [ 'keyup', { keyCode: 72 } ] },
	{ seq: 24, time: 9.41, action: 'endLoop', args: [] },
	{ seq: 25, time: 9.844, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 26, time: 9.846, action: 'changeText', args: [ 'にほ' ] },
	{ seq: 27, time: 9.846, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 28, time: 9.846, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 29, time: 9.851, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 30, time: 9.851, action: 'endLoop', args: [] },
	{ seq: 31, time: 9.974, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 32, time: 9.977, action: 'endLoop', args: [] },
	{ seq: 33, time: 10.34, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 34, time: 10.342, action: 'changeText', args: [ 'にほn' ] },
	{ seq: 35, time: 10.342, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 36, time: 10.342, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 37, time: 10.347, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 38, time: 10.347, action: 'endLoop', args: [] },
	{ seq: 39, time: 10.43, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 40, time: 10.435, action: 'endLoop', args: [] },
	{ seq: 41, time: 10.94, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 42, time: 10.943, action: 'changeText', args: [ 'にほんg' ] },
	{ seq: 43, time: 10.943, action: 'changeSel', args: [ 0, 4 ] },
	{ seq: 44, time: 10.943, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 45, time: 10.95, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 46, time: 10.95, action: 'endLoop', args: [] },
	{ seq: 47, time: 11.077, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 48, time: 11.08, action: 'endLoop', args: [] },
	{ seq: 49, time: 11.724, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 50, time: 11.727, action: 'changeText', args: [ 'にほんご' ] },
	{ seq: 51, time: 11.727, action: 'changeSel', args: [ 0, 4 ] },
	{ seq: 52, time: 11.727, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 53, time: 11.734, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 54, time: 11.734, action: 'endLoop', args: [] },
	{ seq: 55, time: 11.789, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 56, time: 11.794, action: 'endLoop', args: [] },
	{ seq: 57, time: 13.852, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 58, time: 13.858, action: 'changeText', args: [ '日本語' ] },
	{ seq: 59, time: 13.858, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 60, time: 13.858, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 61, time: 13.864, action: 'endLoop', args: [] },
	{ seq: 62, time: 13.95, action: 'sendEvent', args: [ 'keyup', { keyCode: 40 } ] },
	{ seq: 63, time: 13.954, action: 'endLoop', args: [] },
	{ seq: 64, time: 16.54, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 65, time: 16.542, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 66, time: 16.544, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 67, time: 16.544, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 68, time: 16.55, action: 'endLoop', args: [] },
	{ seq: 69, time: 16.589, action: 'sendEvent', args: [ 'keyup', { keyCode: 13 } ] },
	{ seq: 70, time: 16.594, action: 'endLoop', args: [] }
] ] );
