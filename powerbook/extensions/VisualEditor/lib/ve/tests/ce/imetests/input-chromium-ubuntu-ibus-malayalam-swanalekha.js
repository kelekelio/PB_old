/*!
 * VisualEditor IME test for Chromium on Ubuntu in Malayalam using iBus Swanalekha.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chromium-ubuntu-ibus-malayalam-swanalekha', [
	{ imeIdentifier: 'ibus Malayalam swanalekha', userAgent: 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.22 (KHTML, like Gecko) Ubuntu Chromium/25.0.1364.160 Chrome/25.0.1364.160 Safari/537.22', startDom: 'x' },
	{ seq: 0, time: 22.934, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 22.938, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 2, time: 22.968, action: 'changeText', args: [ 'ട്' ] },
	{ seq: 3, time: 22.968, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 4, time: 22.968, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 5, time: 22.976, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 6, time: 22.976, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 7, time: 22.988, action: 'endLoop', args: [] },
	{ seq: 8, time: 23.024, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 9, time: 23.028, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 10, time: 23.028, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 11, time: 23.033, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 12, time: 23.033, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 13, time: 23.036, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 14, time: 23.043, action: 'changeText', args: [ 'ത്' ] },
	{ seq: 15, time: 23.043, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 16, time: 23.043, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 17, time: 23.05, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 18, time: 23.05, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 19, time: 23.066, action: 'endLoop', args: [] },
	{ seq: 20, time: 23.089, action: 'sendEvent', args: [ 'keyup', { keyCode: 84 } ] },
	{ seq: 21, time: 23.1, action: 'endLoop', args: [] },
	{ seq: 22, time: 23.149, action: 'sendEvent', args: [ 'keyup', { keyCode: 72 } ] },
	{ seq: 23, time: 23.158, action: 'endLoop', args: [] },
	{ seq: 24, time: 23.301, action: 'sendEvent', args: [ 'keydown', { keyCode: 16 } ] },
	{ seq: 25, time: 23.309, action: 'endLoop', args: [] },
	{ seq: 26, time: 23.432, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 27, time: 23.437, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 28, time: 23.437, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 29, time: 23.443, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 30, time: 23.443, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 31, time: 23.448, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 32, time: 23.455, action: 'changeText', args: [ 'തോ' ] },
	{ seq: 33, time: 23.455, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 34, time: 23.455, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 35, time: 23.464, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 36, time: 23.464, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 37, time: 23.478, action: 'endLoop', args: [] },
	{ seq: 38, time: 23.58, action: 'sendEvent', args: [ 'keyup', { keyCode: 16 } ] },
	{ seq: 39, time: 23.59, action: 'endLoop', args: [] },
	{ seq: 40, time: 23.782, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 41, time: 23.787, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 42, time: 23.787, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 43, time: 23.794, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 44, time: 23.794, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 45, time: 23.808, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 46, time: 23.814, action: 'changeText', args: [ 'ട്' ] },
	{ seq: 47, time: 23.814, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 48, time: 23.814, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 49, time: 23.825, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 50, time: 23.825, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 51, time: 23.833, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 52, time: 23.837, action: 'changeSel', args: [ 0, 2 ] },
	{ seq: 53, time: 23.837, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 54, time: 23.846, action: 'changeText', args: [ 'തോ' ] },
	{ seq: 55, time: 23.846, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 56, time: 23.846, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 57, time: 23.859, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 58, time: 23.859, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 59, time: 23.868, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 60, time: 23.872, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 61, time: 23.877, action: 'changeText', args: [ 'തോട്' ] },
	{ seq: 62, time: 23.877, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 63, time: 23.887, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 64, time: 23.887, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 65, time: 23.905, action: 'endLoop', args: [] },
	{ seq: 66, time: 23.939, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 67, time: 23.947, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 68, time: 23.947, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 69, time: 23.96, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 70, time: 23.96, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 71, time: 23.971, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 72, time: 23.977, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 73, time: 23.977, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 74, time: 23.987, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 75, time: 23.987, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 76, time: 24.003, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 77, time: 24.01, action: 'changeSel', args: [ 2, 4 ] },
	{ seq: 78, time: 24.01, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 79, time: 24.023, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 80, time: 24.023, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 81, time: 24.034, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 82, time: 24.034, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 83, time: 24.045, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 84, time: 24.051, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 85, time: 24.072, action: 'changeText', args: [ 'തോട്ട്' ] },
	{ seq: 86, time: 24.072, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 87, time: 24.084, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 88, time: 24.084, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 89, time: 24.102, action: 'endLoop', args: [] },
	{ seq: 90, time: 24.138, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 91, time: 24.147, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 92, time: 24.147, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 93, time: 24.162, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 94, time: 24.162, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 95, time: 24.175, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 96, time: 24.185, action: 'changeText', args: [ 'തോട്ടി' ] },
	{ seq: 97, time: 24.185, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 98, time: 24.185, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 99, time: 24.204, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 100, time: 24.204, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 101, time: 24.227, action: 'endLoop', args: [] },
	{ seq: 102, time: 24.302, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 103, time: 24.313, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 104, time: 24.313, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 105, time: 24.334, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 106, time: 24.334, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 107, time: 24.347, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 108, time: 24.359, action: 'changeText', args: [ 'തോട്ന്' ] },
	{ seq: 109, time: 24.359, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 110, time: 24.359, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 111, time: 24.381, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 112, time: 24.381, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 113, time: 24.402, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 114, time: 24.422, action: 'changeSel', args: [ 4, 6 ] },
	{ seq: 115, time: 24.422, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 116, time: 24.439, action: 'changeText', args: [ 'തോട്ടി' ] },
	{ seq: 117, time: 24.439, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 118, time: 24.439, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 119, time: 24.463, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 120, time: 24.463, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 121, time: 24.48, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 122, time: 24.488, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 123, time: 24.496, action: 'changeText', args: [ 'തോട്ടിന്' ] },
	{ seq: 124, time: 24.496, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 125, time: 24.513, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 126, time: 24.513, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 127, time: 24.538, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 128, time: 24.552, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 129, time: 24.552, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 130, time: 24.57, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 131, time: 24.57, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 132, time: 24.587, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 133, time: 24.6, action: 'changeText', args: [ 'തോട്ടിങ്ങ്' ] },
	{ seq: 134, time: 24.6, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 135, time: 24.6, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 136, time: 24.626, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 137, time: 24.626, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 138, time: 24.644, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 139, time: 24.653, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 140, time: 24.662, action: 'endLoop', args: [] },
	{ seq: 141, time: 24.681, action: 'endLoop', args: [] },
	{ seq: 142, time: 24.975, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 143, time: 24.987, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 144, time: 24.987, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 145, time: 25.011, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 146, time: 25.011, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 147, time: 25.03, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 148, time: 25.04, action: 'changeText', args: [ 'തോട്ടിന്' ] },
	{ seq: 149, time: 25.04, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 150, time: 25.04, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 151, time: 25.069, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 152, time: 25.069, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 153, time: 25.097, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 154, time: 25.12, action: 'changeSel', args: [ 6, 8 ] },
	{ seq: 155, time: 25.12, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 156, time: 25.142, action: 'changeText', args: [ 'തോട്ടിങ്ങ്' ] },
	{ seq: 157, time: 25.142, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 158, time: 25.142, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 159, time: 25.173, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 160, time: 25.173, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 161, time: 25.194, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 162, time: 25.205, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 163, time: 25.216, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ന്' ] },
	{ seq: 164, time: 25.216, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 165, time: 25.239, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 166, time: 25.239, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 167, time: 25.271, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 168, time: 25.282, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 169, time: 25.295, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 170, time: 25.295, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 171, time: 25.318, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 172, time: 25.318, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 173, time: 25.34, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 174, time: 25.353, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ്' ] },
	{ seq: 175, time: 25.353, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 176, time: 25.353, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 177, time: 25.393, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 178, time: 25.393, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 179, time: 25.416, action: 'sendEvent', args: [ 'keyup', { keyCode: 71 } ] },
	{ seq: 180, time: 25.438, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 181, time: 25.452, action: 'endLoop', args: [] },
	{ seq: 182, time: 25.465, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 183, time: 25.465, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 184, time: 25.489, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 185, time: 25.489, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 186, time: 25.513, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 187, time: 25.527, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ' ] },
	{ seq: 188, time: 25.527, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 189, time: 25.527, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 190, time: 25.564, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 191, time: 25.564, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 192, time: 25.601, action: 'endLoop', args: [] },
	{ seq: 193, time: 25.951, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 194, time: 25.969, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 195, time: 25.969, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 196, time: 25.997, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 197, time: 25.997, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 198, time: 26.023, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 199, time: 26.04, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ല്' ] },
	{ seq: 200, time: 26.04, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 201, time: 26.04, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 202, time: 26.08, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 203, time: 26.08, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 204, time: 26.118, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 205, time: 26.133, action: 'changeSel', args: [ 10, 12 ] },
	{ seq: 206, time: 26.133, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 207, time: 26.162, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ' ] },
	{ seq: 208, time: 26.162, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 209, time: 26.162, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 210, time: 26.205, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 211, time: 26.205, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 212, time: 26.233, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 213, time: 26.247, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 214, time: 26.263, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങല്' ] },
	{ seq: 215, time: 26.263, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 216, time: 26.293, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 217, time: 26.293, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 218, time: 26.338, action: 'endLoop', args: [] },
	{ seq: 219, time: 26.431, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 220, time: 26.453, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 221, time: 26.453, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 222, time: 26.483, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 223, time: 26.483, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 224, time: 26.512, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 225, time: 26.528, action: 'changeSel', args: [ 13, 15 ] },
	{ seq: 226, time: 26.528, action: 'sendEvent', args: [ 'compositionend', {} ] },
	{ seq: 227, time: 26.558, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങ' ] },
	{ seq: 228, time: 26.558, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 229, time: 26.558, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 230, time: 26.604, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 231, time: 26.62, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 232, time: 26.636, action: 'changeText', args: [ 'തോട്ടിങ്ങ്ങ്ങല്' ] },
	{ seq: 233, time: 26.636, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 234, time: 26.668, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 235, time: 26.668, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 236, time: 26.706, action: 'endLoop', args: [] }
] ] );
