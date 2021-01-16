/*!
 * VisualEditor IME test for Internet Explorer on Windows in Korean.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-ie9-win7-korean', [
	{ imeIdentifier: 'Korean', userAgent: 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET4.0C)', startDom: 'x' },
	{ seq: 0, time: 3611.081, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 3611.082, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 2, time: 3611.112, action: 'changeText', args: [ 'ㅎ' ] },
	{ seq: 3, time: 3611.112, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 4, time: 3611.112, action: 'endLoop', args: [] },
	{ seq: 5, time: 3611.162, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 6, time: 3611.195, action: 'endLoop', args: [] },
	{ seq: 7, time: 3611.352, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 8, time: 3611.379, action: 'changeText', args: [ '하' ] },
	{ seq: 9, time: 3611.379, action: 'endLoop', args: [] },
	{ seq: 10, time: 3611.493, action: 'sendEvent', args: [ 'keyup', { keyCode: 75 } ] },
	{ seq: 11, time: 3611.513, action: 'endLoop', args: [] },
	{ seq: 12, time: 3611.618, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 13, time: 3611.647, action: 'changeText', args: [ '한' ] },
	{ seq: 14, time: 3611.647, action: 'endLoop', args: [] },
	{ seq: 15, time: 3611.734, action: 'sendEvent', args: [ 'keyup', { keyCode: 83 } ] },
	{ seq: 16, time: 3611.765, action: 'endLoop', args: [] },
	{ seq: 17, time: 3611.919, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 18, time: 3611.949, action: 'changeText', args: [ '한ㄱ' ] },
	{ seq: 19, time: 3611.949, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 20, time: 3611.949, action: 'endLoop', args: [] },
	{ seq: 21, time: 3612.045, action: 'sendEvent', args: [ 'keyup', { keyCode: 82 } ] },
	{ seq: 22, time: 3612.083, action: 'endLoop', args: [] },
	{ seq: 23, time: 3612.386, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 24, time: 3612.418, action: 'changeText', args: [ '한그' ] },
	{ seq: 25, time: 3612.418, action: 'endLoop', args: [] },
	{ seq: 26, time: 3612.536, action: 'sendEvent', args: [ 'keyup', { keyCode: 77 } ] },
	{ seq: 27, time: 3612.569, action: 'endLoop', args: [] },
	{ seq: 28, time: 3612.767, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 29, time: 3612.803, action: 'changeText', args: [ '한글' ] },
	{ seq: 30, time: 3612.803, action: 'endLoop', args: [] },
	{ seq: 31, time: 3612.938, action: 'sendEvent', args: [ 'keyup', { keyCode: 70 } ] },
	{ seq: 32, time: 3612.971, action: 'endLoop', args: [] },
	{ seq: 33, time: 3613.169, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 34, time: 3613.178, action: 'sendEvent', args: [ 'keydown', { keyCode: 32 } ] },
	{ seq: 35, time: 3613.186, action: 'sendEvent', args: [ 'keypress', { keyCode: 32 } ] },
	{ seq: 36, time: 3613.205, action: 'changeText', args: [ '한글 ' ] },
	{ seq: 37, time: 3613.205, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 38, time: 3613.205, action: 'endLoop', args: [] },
	{ seq: 39, time: 3613.309, action: 'sendEvent', args: [ 'keyup', { keyCode: 32 } ] },
	{ seq: 40, time: 3613.339, action: 'endLoop', args: [] },
	{ seq: 41, time: 3613.54, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 42, time: 3613.547, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 43, time: 3613.574, action: 'changeText', args: [ '한글 ㅅ' ] },
	{ seq: 44, time: 3613.574, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 45, time: 3613.574, action: 'endLoop', args: [] },
	{ seq: 46, time: 3613.69, action: 'sendEvent', args: [ 'keyup', { keyCode: 84 } ] },
	{ seq: 47, time: 3613.725, action: 'endLoop', args: [] },
	{ seq: 48, time: 3613.801, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 49, time: 3613.825, action: 'changeText', args: [ '한글 시' ] },
	{ seq: 50, time: 3613.825, action: 'endLoop', args: [] },
	{ seq: 51, time: 3613.941, action: 'sendEvent', args: [ 'keyup', { keyCode: 76 } ] },
	{ seq: 52, time: 3613.977, action: 'endLoop', args: [] },
	{ seq: 53, time: 3614.047, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 54, time: 3614.077, action: 'changeText', args: [ '한글 싷' ] },
	{ seq: 55, time: 3614.077, action: 'endLoop', args: [] },
	{ seq: 56, time: 3614.192, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 57, time: 3614.228, action: 'endLoop', args: [] },
	{ seq: 58, time: 3614.363, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 59, time: 3614.395, action: 'changeText', args: [ '한글 시허' ] },
	{ seq: 60, time: 3614.395, action: 'changeSel', args: [ 5, 5 ] },
	{ seq: 61, time: 3614.395, action: 'endLoop', args: [] },
	{ seq: 62, time: 3614.468, action: 'sendEvent', args: [ 'keyup', { keyCode: 74 } ] },
	{ seq: 63, time: 3614.512, action: 'endLoop', args: [] },
	{ seq: 64, time: 3614.591, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 65, time: 3614.63, action: 'changeText', args: [ '한글 시험' ] },
	{ seq: 66, time: 3614.63, action: 'endLoop', args: [] },
	{ seq: 67, time: 3614.764, action: 'sendEvent', args: [ 'keyup', { keyCode: 65 } ] },
	{ seq: 68, time: 3614.814, action: 'endLoop', args: [] },
	{ seq: 69, time: 3614.895, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 70, time: 3614.904, action: 'sendEvent', args: [ 'keydown', { keyCode: 32 } ] },
	{ seq: 71, time: 3614.912, action: 'sendEvent', args: [ 'keypress', { keyCode: 32 } ] },
	{ seq: 72, time: 3614.931, action: 'changeText', args: [ '한글 시험 ' ] },
	{ seq: 73, time: 3614.931, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 74, time: 3614.931, action: 'endLoop', args: [] },
	{ seq: 75, time: 3615.048, action: 'sendEvent', args: [ 'keyup', { keyCode: 32 } ] },
	{ seq: 76, time: 3615.082, action: 'endLoop', args: [] },
	{ seq: 77, time: 3615.381, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 78, time: 3615.39, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 79, time: 3615.417, action: 'changeText', args: [ '한글 시험 ㅎ' ] },
	{ seq: 80, time: 3615.417, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 81, time: 3615.417, action: 'endLoop', args: [] },
	{ seq: 82, time: 3615.486, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 83, time: 3615.535, action: 'endLoop', args: [] },
	{ seq: 84, time: 3615.64, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 85, time: 3615.669, action: 'changeText', args: [ '한글 시험 하' ] },
	{ seq: 86, time: 3615.669, action: 'endLoop', args: [] },
	{ seq: 87, time: 3615.762, action: 'sendEvent', args: [ 'keyup', { keyCode: 75 } ] },
	{ seq: 88, time: 3615.803, action: 'endLoop', args: [] },
	{ seq: 89, time: 3615.913, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 90, time: 3615.937, action: 'changeText', args: [ '한글 시험 합' ] },
	{ seq: 91, time: 3615.937, action: 'endLoop', args: [] },
	{ seq: 92, time: 3616.066, action: 'sendEvent', args: [ 'keyup', { keyCode: 81 } ] },
	{ seq: 93, time: 3616.104, action: 'endLoop', args: [] },
	{ seq: 94, time: 3616.339, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 95, time: 3616.372, action: 'changeText', args: [ '한글 시험 합ㄴ' ] },
	{ seq: 96, time: 3616.372, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 97, time: 3616.372, action: 'endLoop', args: [] },
	{ seq: 98, time: 3616.485, action: 'sendEvent', args: [ 'keyup', { keyCode: 83 } ] },
	{ seq: 99, time: 3616.523, action: 'endLoop', args: [] },
	{ seq: 100, time: 3616.613, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 101, time: 3616.641, action: 'changeText', args: [ '한글 시험 합니' ] },
	{ seq: 102, time: 3616.641, action: 'endLoop', args: [] },
	{ seq: 103, time: 3616.726, action: 'sendEvent', args: [ 'keyup', { keyCode: 76 } ] },
	{ seq: 104, time: 3616.775, action: 'endLoop', args: [] },
	{ seq: 105, time: 3616.927, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 106, time: 3616.959, action: 'changeText', args: [ '한글 시험 합닏' ] },
	{ seq: 107, time: 3616.959, action: 'endLoop', args: [] },
	{ seq: 108, time: 3617.08, action: 'sendEvent', args: [ 'keyup', { keyCode: 69 } ] },
	{ seq: 109, time: 3617.126, action: 'endLoop', args: [] },
	{ seq: 110, time: 3617.313, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 111, time: 3617.344, action: 'changeText', args: [ '한글 시험 합니다' ] },
	{ seq: 112, time: 3617.344, action: 'changeSel', args: [ 9, 9 ] },
	{ seq: 113, time: 3617.344, action: 'endLoop', args: [] },
	{ seq: 114, time: 3617.388, action: 'sendEvent', args: [ 'keyup', { keyCode: 75 } ] },
	{ seq: 115, time: 3617.429, action: 'endLoop', args: [] }
] ] );
