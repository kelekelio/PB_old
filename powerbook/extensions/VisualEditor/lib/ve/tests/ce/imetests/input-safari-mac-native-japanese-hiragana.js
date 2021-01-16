/*!
 * VisualEditor IME test for Safari on Mac OS X in Hiragana Japanese using OS native IME.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-safari-mac-native-japanese-hiragana', [
	{ imeIdentifier: 'Mac 10.10 native Japanese Hiragana in Safari', userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.6.3 (KHTML, like Gecko) Version/8.0.6 Safari/600.6.3', startDom: '' },
	{ seq: 0, time: 8.893, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 1, time: 8.895, action: 'changeText', args: [ 'n' ] },
	{ seq: 2, time: 8.895, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 3, time: 8.895, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 4, time: 8.908, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 5, time: 8.908, action: 'endLoop', args: [] },
	{ seq: 6, time: 8.908, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 7, time: 8.911, action: 'endLoop', args: [] },
	{ seq: 8, time: 8.968, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 9, time: 8.972, action: 'endLoop', args: [] },
	{ seq: 10, time: 9.365, action: 'changeText', args: [ 'に' ] },
	{ seq: 11, time: 9.365, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 12, time: 9.365, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 13, time: 9.379, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 14, time: 9.379, action: 'endLoop', args: [] },
	{ seq: 15, time: 9.38, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 16, time: 9.383, action: 'endLoop', args: [] },
	{ seq: 17, time: 9.435, action: 'sendEvent', args: [ 'keyup', { keyCode: 73 } ] },
	{ seq: 18, time: 9.439, action: 'endLoop', args: [] },
	{ seq: 19, time: 9.813, action: 'changeText', args: [ 'にh' ] },
	{ seq: 20, time: 9.813, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 21, time: 9.813, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 22, time: 9.826, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 23, time: 9.826, action: 'endLoop', args: [] },
	{ seq: 24, time: 9.828, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 25, time: 9.832, action: 'endLoop', args: [] },
	{ seq: 26, time: 9.887, action: 'sendEvent', args: [ 'keyup', { keyCode: 72 } ] },
	{ seq: 27, time: 9.903, action: 'endLoop', args: [] },
	{ seq: 28, time: 10.221, action: 'changeText', args: [ 'にほ' ] },
	{ seq: 29, time: 10.221, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 30, time: 10.221, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 31, time: 10.237, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 32, time: 10.237, action: 'endLoop', args: [] },
	{ seq: 33, time: 10.239, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 34, time: 10.243, action: 'endLoop', args: [] },
	{ seq: 35, time: 10.335, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 36, time: 10.34, action: 'endLoop', args: [] },
	{ seq: 37, time: 10.588, action: 'changeText', args: [ 'にほn' ] },
	{ seq: 38, time: 10.588, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 39, time: 10.588, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 40, time: 10.605, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 41, time: 10.605, action: 'endLoop', args: [] },
	{ seq: 42, time: 10.608, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 43, time: 10.612, action: 'endLoop', args: [] },
	{ seq: 44, time: 10.68, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 45, time: 10.686, action: 'endLoop', args: [] },
	{ seq: 46, time: 11.092, action: 'changeText', args: [ 'にほんg' ] },
	{ seq: 47, time: 11.092, action: 'changeSel', args: [ 0, 4 ] },
	{ seq: 48, time: 11.092, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 49, time: 11.109, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 50, time: 11.109, action: 'endLoop', args: [] },
	{ seq: 51, time: 11.112, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 52, time: 11.117, action: 'endLoop', args: [] },
	{ seq: 53, time: 11.17, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 54, time: 11.176, action: 'endLoop', args: [] },
	{ seq: 55, time: 11.605, action: 'changeText', args: [ 'にほんご' ] },
	{ seq: 56, time: 11.605, action: 'changeSel', args: [ 0, 4 ] },
	{ seq: 57, time: 11.605, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 58, time: 11.631, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 59, time: 11.631, action: 'endLoop', args: [] },
	{ seq: 60, time: 11.635, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 61, time: 11.655, action: 'endLoop', args: [] },
	{ seq: 62, time: 11.687, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 63, time: 11.692, action: 'endLoop', args: [] },
	{ seq: 64, time: 16.103, action: 'changeText', args: [ '日本語' ] },
	{ seq: 65, time: 16.103, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 66, time: 16.103, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 67, time: 16.123, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 68, time: 16.125, action: 'endLoop', args: [] },
	{ seq: 69, time: 16.151, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 70, time: 16.153, action: 'endLoop', args: [] },
	{ seq: 71, time: 16.176, action: 'endLoop', args: [] },
	{ seq: 72, time: 16.227, action: 'sendEvent', args: [ 'keyup', { keyCode: 40 } ] },
	{ seq: 73, time: 16.234, action: 'endLoop', args: [] },
	{ seq: 74, time: 16.963, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 75, time: 16.966, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 76, time: 16.966, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 77, time: 16.997, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 78, time: 17.003, action: 'endLoop', args: [] },
	{ seq: 79, time: 17.03, action: 'sendEvent', args: [ 'keyup', { keyCode: 13 } ] },
	{ seq: 80, time: 17.078, action: 'endLoop', args: [] }
] ] );
