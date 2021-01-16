/*!
 * VisualEditor IME test for Firefox on Ubuntu in Malayalam using iBus Swanalekha.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-firefox-ubuntu-ibus-malayalam-swanalekha', [
	{ imeIdentifier: 'ibus Malayalam swanalekha m17n', userAgent: 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:24.0) Gecko/20100101 Firefox/24.0', startDom: 'x' },
	{ seq: 0, time: 1.681, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 1, time: 1.689, action: 'changeText', args: [ 'ട്' ] },
	{ seq: 2, time: 1.689, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 3, time: 1.689, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 4, time: 1.74, action: 'endLoop', args: [] },
	{ seq: 5, time: 1.861, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 6, time: 1.873, action: 'changeText', args: [ 'ത്' ] },
	{ seq: 7, time: 1.873, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 8, time: 1.964, action: 'endLoop', args: [] },
	{ seq: 9, time: 2.138, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 10, time: 2.143, action: 'changeText', args: [ 'തോ' ] },
	{ seq: 11, time: 2.143, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 12, time: 2.16, action: 'endLoop', args: [] },
	{ seq: 13, time: 2.387, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 14, time: 2.392, action: 'changeText', args: [ 'ട്' ] },
	{ seq: 15, time: 2.392, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 16, time: 2.411, action: 'changeText', args: [ 'തോ' ] },
	{ seq: 17, time: 2.411, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 18, time: 2.416, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 19, time: 2.42, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 20, time: 2.424, action: 'changeText', args: [ 'തോട്' ] },
	{ seq: 21, time: 2.424, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 22, time: 2.424, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 23, time: 2.453, action: 'endLoop', args: [] },
	{ seq: 24, time: 2.598, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 25, time: 2.607, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 26, time: 2.615, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 27, time: 2.619, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 28, time: 2.624, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 29, time: 2.629, action: 'changeText', args: [ 'തോട്ട്' ] },
	{ seq: 30, time: 2.629, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 31, time: 2.629, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 32, time: 2.661, action: 'endLoop', args: [] },
	{ seq: 33, time: 2.831, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 34, time: 2.84, action: 'changeText', args: [ 'തോട്ടി' ] },
	{ seq: 35, time: 2.84, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 36, time: 2.871, action: 'endLoop', args: [] },
	{ seq: 37, time: 3.083, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 38, time: 3.101, action: 'changeText', args: [ 'തോട്ന്' ] },
	{ seq: 39, time: 3.101, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 40, time: 3.118, action: 'changeText', args: [ 'തോട്ടി' ] },
	{ seq: 41, time: 3.118, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 42, time: 3.132, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 43, time: 3.138, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 44, time: 3.145, action: 'changeText', args: [ 'തോട്ടിന്' ] },
	{ seq: 45, time: 3.145, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 46, time: 3.145, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 47, time: 3.192, action: 'endLoop', args: [] },
	{ seq: 48, time: 3.282, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 49, time: 3.298, action: 'changeText', args: [ 'തോട്ടിങ്ങ്' ] },
	{ seq: 50, time: 3.298, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 51, time: 3.298, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 52, time: 3.405, action: 'endLoop', args: [] },
	{ seq: 53, time: 3.522, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 54, time: 3.536, action: 'changeText', args: [ 'തോട്ടിന്' ] },
	{ seq: 55, time: 3.536, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 56, time: 3.536, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 57, time: 3.567, action: 'changeText', args: [ 'തോട്ടിങ്ങ്' ] },
	{ seq: 58, time: 3.567, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 59, time: 3.567, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 60, time: 3.586, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 61, time: 3.594, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 62, time: 3.602, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ന്' ] },
	{ seq: 63, time: 3.602, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 64, time: 3.602, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 65, time: 3.65, action: 'endLoop', args: [] },
	{ seq: 66, time: 3.729, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 67, time: 3.745, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ്' ] },
	{ seq: 68, time: 3.745, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 69, time: 3.745, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 70, time: 3.787, action: 'endLoop', args: [] },
	{ seq: 71, time: 3.977, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 72, time: 3.992, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ' ] },
	{ seq: 73, time: 3.992, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 74, time: 3.992, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 75, time: 4.032, action: 'endLoop', args: [] },
	{ seq: 76, time: 4.249, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 77, time: 4.267, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ല്' ] },
	{ seq: 78, time: 4.267, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 79, time: 4.267, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 80, time: 4.295, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ' ] },
	{ seq: 81, time: 4.295, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 82, time: 4.295, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 83, time: 4.321, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 84, time: 4.33, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 85, time: 4.339, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങല്' ] },
	{ seq: 86, time: 4.339, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 87, time: 4.339, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 88, time: 4.389, action: 'endLoop', args: [] },
	{ seq: 89, time: 4.724, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 90, time: 4.743, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ' ] },
	{ seq: 91, time: 4.743, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 92, time: 4.743, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 93, time: 4.772, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 94, time: 4.783, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 95, time: 4.794, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങല്' ] },
	{ seq: 96, time: 4.794, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 97, time: 4.794, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 98, time: 4.823, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 99, time: 4.841, action: 'sendEvent', args: [ 'keyup', { keyCode: 49 } ] },
	{ seq: 100, time: 4.867, action: 'endLoop', args: [] }
] ] );
