/*!
 * VisualEditor IME test for Chromium on Ubuntu in Cantonese Chinese using iBus.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chromium-ubuntu-ibus-chinese-cantonese', [
	{ imeIdentifier: 'ibus Chinese cantonese', userAgent: 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.22 (KHTML, like Gecko) Ubuntu Chromium/25.0.1364.160 Chrome/25.0.1364.160 Safari/537.22', startDom: 'x' },
	{ seq: 0, time: 24.114, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 24.118, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 2, time: 24.131, action: 'changeText', args: [ '唔' ] },
	{ seq: 3, time: 24.131, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 4, time: 24.131, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 5, time: 24.134, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 6, time: 24.134, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 7, time: 24.145, action: 'endLoop', args: [] },
	{ seq: 8, time: 24.635, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 9, time: 24.637, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 10, time: 24.637, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 11, time: 24.64, action: 'changeText', args: [ '<br>' ] },
	{ seq: 12, time: 24.64, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 13, time: 24.64, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 14, time: 24.643, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 15, time: 24.651, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 16, time: 24.654, action: 'changeText', args: [ '唔' ] },
	{ seq: 17, time: 24.654, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 18, time: 24.654, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 19, time: 24.658, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 20, time: 24.67, action: 'endLoop', args: [] },
	{ seq: 21, time: 24.996, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 22, time: 24.999, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 23, time: 25.005, action: 'changeText', args: [ '唔家' ] },
	{ seq: 24, time: 25.005, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 25, time: 25.042, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 26, time: 25.042, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 27, time: 25.054, action: 'endLoop', args: [] },
	{ seq: 28, time: 25.375, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 29, time: 25.382, action: 'changeText', args: [ '唔高' ] },
	{ seq: 30, time: 25.382, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 31, time: 25.382, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 32, time: 25.393, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 33, time: 25.393, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 34, time: 25.404, action: 'endLoop', args: [] },
	{ seq: 35, time: 25.715, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 36, time: 25.721, action: 'changeText', args: [ '唔改' ] },
	{ seq: 37, time: 25.721, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 38, time: 25.721, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 39, time: 25.728, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 40, time: 25.728, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 41, time: 25.739, action: 'endLoop', args: [] },
	{ seq: 42, time: 26.741, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 43, time: 26.743, action: 'changeSel', args: [ 1, 2 ] },
	{ seq: 44, time: 26.743, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 45, time: 26.748, action: 'changeText', args: [ '唔' ] },
	{ seq: 46, time: 26.748, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 47, time: 26.748, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 48, time: 26.756, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 49, time: 26.758, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 50, time: 26.764, action: 'changeText', args: [ '唔該' ] },
	{ seq: 51, time: 26.764, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 52, time: 26.769, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 53, time: 26.769, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 54, time: 26.781, action: 'endLoop', args: [] }
] ] );
