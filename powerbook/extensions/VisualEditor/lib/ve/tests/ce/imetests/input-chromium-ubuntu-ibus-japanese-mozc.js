/*!
 * VisualEditor IME test for Chromium on Ubuntu in Japanese using iBus Mozc.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chromium-ubuntu-ibus-japanese-mozc', [
	{ imeIdentifier: 'ibus Japanese mozc', userAgent: 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/43.0.2357.81 Chrome/43.0.2357.81 Safari/537.36', startDom: '' },
	{ seq: 0, time: 18.743, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 18.745, action: 'sendEvent', args: [ 'compositionstart', { } ] },
	{ seq: 2, time: 18.747, action: 'changeText', args: [ 'ｎ' ] },
	{ seq: 3, time: 18.747, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 4, time: 18.747, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 5, time: 18.752, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 6, time: 18.752, action: 'endLoop', args: [] },
	{ seq: 7, time: 18.87, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 8, time: 18.874, action: 'endLoop', args: [] },
	{ seq: 9, time: 19.722, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 10, time: 19.724, action: 'changeText', args: [ 'に' ] },
	{ seq: 11, time: 19.724, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 12, time: 19.724, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 13, time: 19.729, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 14, time: 19.729, action: 'endLoop', args: [] },
	{ seq: 15, time: 19.854, action: 'sendEvent', args: [ 'keyup', { keyCode: 73 } ] },
	{ seq: 16, time: 19.858, action: 'endLoop', args: [] },
	{ seq: 17, time: 20.573, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 18, time: 20.575, action: 'changeText', args: [ 'にｈ' ] },
	{ seq: 19, time: 20.575, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 20, time: 20.575, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 21, time: 20.58, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 22, time: 20.58, action: 'endLoop', args: [] },
	{ seq: 23, time: 20.689, action: 'sendEvent', args: [ 'keyup', { keyCode: 72 } ] },
	{ seq: 24, time: 20.692, action: 'endLoop', args: [] },
	{ seq: 25, time: 21.477, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 26, time: 21.48, action: 'changeText', args: [ 'にほ' ] },
	{ seq: 27, time: 21.48, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 28, time: 21.48, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 29, time: 21.485, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 30, time: 21.485, action: 'endLoop', args: [] },
	{ seq: 31, time: 21.594, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 32, time: 21.597, action: 'endLoop', args: [] },
	{ seq: 33, time: 22.305, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 34, time: 22.307, action: 'changeText', args: [ 'にほｎ' ] },
	{ seq: 35, time: 22.307, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 36, time: 22.307, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 37, time: 22.313, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 38, time: 22.313, action: 'endLoop', args: [] },
	{ seq: 39, time: 22.41, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 40, time: 22.415, action: 'endLoop', args: [] },
	{ seq: 41, time: 23.104, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 42, time: 23.107, action: 'changeText', args: [ 'にほんｇ' ] },
	{ seq: 43, time: 23.107, action: 'changeSel', args: [ 0, 4 ] },
	{ seq: 44, time: 23.107, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 45, time: 23.113, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 46, time: 23.113, action: 'endLoop', args: [] },
	{ seq: 47, time: 23.214, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 48, time: 23.218, action: 'endLoop', args: [] },
	{ seq: 49, time: 24.15, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 50, time: 24.153, action: 'changeText', args: [ 'にほんご' ] },
	{ seq: 51, time: 24.153, action: 'changeSel', args: [ 0, 4 ] },
	{ seq: 52, time: 24.153, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 53, time: 24.158, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 54, time: 24.158, action: 'endLoop', args: [] },
	{ seq: 55, time: 24.266, action: 'sendEvent', args: [ 'keyup', { keyCode: 79 } ] },
	{ seq: 56, time: 24.27, action: 'endLoop', args: [] },
	{ seq: 57, time: 25.258, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 58, time: 25.261, action: 'changeText', args: [ '日本語' ] },
	{ seq: 59, time: 25.261, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 60, time: 25.261, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 61, time: 25.267, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 62, time: 25.267, action: 'endLoop', args: [] },
	{ seq: 63, time: 25.38, action: 'sendEvent', args: [ 'keyup', { keyCode: 40 } ] },
	{ seq: 64, time: 25.384, action: 'endLoop', args: [] },
	{ seq: 65, time: 26.229, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 66, time: 26.232, action: 'changeSel', args: [ 0, 3 ] },
	{ seq: 67, time: 26.232, action: 'sendEvent', args: [ 'compositionend', { } ] },
	{ seq: 68, time: 26.236, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 69, time: 26.236, action: 'sendEvent', args: [ 'input', { } ] },
	{ seq: 70, time: 26.242, action: 'endLoop', args: [] }
] ] );
