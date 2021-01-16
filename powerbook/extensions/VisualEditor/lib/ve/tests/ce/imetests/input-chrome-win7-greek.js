/*!
 * VisualEditor IME test for Chromium on Windows in Greek.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chrome-win7-greek', [
	{ imeIdentifier: 'Greek', userAgent: 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', startDom: '' },
	{ seq: 0, time: 3.023, action: 'sendEvent', args: [ 'keydown', { keyCode: 69 } ] },
	{ seq: 1, time: 3.026, action: 'sendEvent', args: [ 'keypress', { keyCode: 949 } ] },
	{ seq: 2, time: 3.061, action: 'changeText', args: [ 'ε' ] },
	{ seq: 3, time: 3.061, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 4, time: 3.061, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 5, time: 3.078, action: 'endLoop', args: [] },
	{ seq: 6, time: 3.137, action: 'sendEvent', args: [ 'keyup', { keyCode: 69 } ] },
	{ seq: 7, time: 3.144, action: 'endLoop', args: [] },
	{ seq: 8, time: 3.475, action: 'sendEvent', args: [ 'keydown', { keyCode: 76 } ] },
	{ seq: 9, time: 3.476, action: 'sendEvent', args: [ 'keypress', { keyCode: 955 } ] },
	{ seq: 10, time: 3.479, action: 'changeText', args: [ 'ελ' ] },
	{ seq: 11, time: 3.479, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 12, time: 3.479, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 13, time: 3.499, action: 'endLoop', args: [] },
	{ seq: 14, time: 3.574, action: 'sendEvent', args: [ 'keyup', { keyCode: 76 } ] },
	{ seq: 15, time: 3.586, action: 'endLoop', args: [] },
	{ seq: 16, time: 3.852, action: 'sendEvent', args: [ 'keydown', { keyCode: 76 } ] },
	{ seq: 17, time: 3.854, action: 'sendEvent', args: [ 'keypress', { keyCode: 955 } ] },
	{ seq: 18, time: 3.856, action: 'changeText', args: [ 'ελλ' ] },
	{ seq: 19, time: 3.856, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 20, time: 3.856, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 21, time: 3.879, action: 'endLoop', args: [] },
	{ seq: 22, time: 3.957, action: 'sendEvent', args: [ 'keyup', { keyCode: 76 } ] },
	{ seq: 23, time: 3.971, action: 'endLoop', args: [] },
	{ seq: 24, time: 4.235, action: 'sendEvent', args: [ 'keydown', { keyCode: 72 } ] },
	{ seq: 25, time: 4.237, action: 'sendEvent', args: [ 'keypress', { keyCode: 951 } ] },
	{ seq: 26, time: 4.24, action: 'changeText', args: [ 'ελλη' ] },
	{ seq: 27, time: 4.24, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 28, time: 4.24, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 29, time: 4.265, action: 'endLoop', args: [] },
	{ seq: 30, time: 4.374, action: 'sendEvent', args: [ 'keyup', { keyCode: 72 } ] },
	{ seq: 31, time: 4.389, action: 'endLoop', args: [] },
	{ seq: 32, time: 4.688, action: 'sendEvent', args: [ 'keydown', { keyCode: 78 } ] },
	{ seq: 33, time: 4.69, action: 'sendEvent', args: [ 'keypress', { keyCode: 957 } ] },
	{ seq: 34, time: 4.694, action: 'changeText', args: [ 'ελλην' ] },
	{ seq: 35, time: 4.694, action: 'changeSel', args: [ 5, 5 ] },
	{ seq: 36, time: 4.694, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 37, time: 4.717, action: 'endLoop', args: [] },
	{ seq: 38, time: 4.822, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 39, time: 4.837, action: 'endLoop', args: [] },
	{ seq: 40, time: 5.122, action: 'sendEvent', args: [ 'keydown', { keyCode: 73 } ] },
	{ seq: 41, time: 5.124, action: 'sendEvent', args: [ 'keypress', { keyCode: 953 } ] },
	{ seq: 42, time: 5.128, action: 'changeText', args: [ 'ελληνι' ] },
	{ seq: 43, time: 5.128, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 44, time: 5.128, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 45, time: 5.153, action: 'endLoop', args: [] },
	{ seq: 46, time: 5.236, action: 'sendEvent', args: [ 'keyup', { keyCode: 73 } ] },
	{ seq: 47, time: 5.254, action: 'endLoop', args: [] },
	{ seq: 48, time: 5.643, action: 'sendEvent', args: [ 'keydown', { keyCode: 75 } ] },
	{ seq: 49, time: 5.647, action: 'sendEvent', args: [ 'keypress', { keyCode: 954 } ] },
	{ seq: 50, time: 5.651, action: 'changeText', args: [ 'ελληνικ' ] },
	{ seq: 51, time: 5.651, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 52, time: 5.651, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 53, time: 5.674, action: 'endLoop', args: [] },
	{ seq: 54, time: 5.753, action: 'sendEvent', args: [ 'keyup', { keyCode: 75 } ] },
	{ seq: 55, time: 5.768, action: 'endLoop', args: [] },
	{ seq: 56, time: 6.155, action: 'sendEvent', args: [ 'keydown', { keyCode: 186 } ] },
	{ seq: 57, time: 6.174, action: 'endLoop', args: [] },
	{ seq: 58, time: 6.26, action: 'sendEvent', args: [ 'keyup', { keyCode: 186 } ] },
	{ seq: 59, time: 6.276, action: 'endLoop', args: [] },
	{ seq: 60, time: 6.678, action: 'sendEvent', args: [ 'keydown', { keyCode: 65 } ] },
	{ seq: 61, time: 6.681, action: 'sendEvent', args: [ 'keypress', { keyCode: 940 } ] },
	{ seq: 62, time: 6.686, action: 'changeText', args: [ 'ελληνικά' ] },
	{ seq: 63, time: 6.686, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 64, time: 6.686, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 65, time: 6.712, action: 'endLoop', args: [] },
	{ seq: 66, time: 6.817, action: 'sendEvent', args: [ 'keyup', { keyCode: 65 } ] },
	{ seq: 67, time: 6.832, action: 'endLoop', args: [] }
] ] );
