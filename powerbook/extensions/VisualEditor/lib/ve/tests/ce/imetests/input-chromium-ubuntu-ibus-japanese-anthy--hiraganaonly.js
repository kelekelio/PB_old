/*!
 * VisualEditor IME test for Chromium on Ubuntu in Japanese using iBus Anthy.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see http://ve.mit-license.org
 */

ve.ce.imetests.push( [ 'input-chromium-ubuntu-ibus-japanese-anthy--hiraganaonly', [
	{ imeIdentifier: 'ibus Japanese anthy', userAgent: 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.22 (KHTML, like Gecko) Ubuntu Chromium/25.0.1364.160 Chrome/25.0.1364.160 Safari/537.22', startDom: 'x' },
	{ seq: 0, time: 8.792, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 1, time: 8.797, action: 'sendEvent', args: [ 'compositionstart', {} ] },
	{ seq: 2, time: 8.799, action: 'changeText', args: [ 'n' ] },
	{ seq: 3, time: 8.799, action: 'changeSel', args: [ 0, 1 ] },
	{ seq: 4, time: 8.799, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 5, time: 8.802, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 6, time: 8.802, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 7, time: 8.815, action: 'endLoop', args: [] },
	{ seq: 8, time: 8.902, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 9, time: 8.904, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 10, time: 8.904, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 11, time: 8.907, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 12, time: 8.907, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 13, time: 8.91, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 14, time: 8.913, action: 'changeText', args: [ 'な' ] },
	{ seq: 15, time: 8.913, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 16, time: 8.913, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 17, time: 8.917, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 18, time: 8.917, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 19, time: 8.925, action: 'sendEvent', args: [ 'keyup', { keyCode: 78 } ] },
	{ seq: 20, time: 8.933, action: 'endLoop', args: [] },
	{ seq: 21, time: 9.057, action: 'sendEvent', args: [ 'keyup', { keyCode: 65 } ] },
	{ seq: 22, time: 9.069, action: 'endLoop', args: [] },
	{ seq: 23, time: 9.073, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 24, time: 9.076, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 25, time: 9.076, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 26, time: 9.08, action: 'changeSel', args: [ 1, 1 ] },
	{ seq: 27, time: 9.08, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 28, time: 9.083, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 29, time: 9.086, action: 'changeText', args: [ 'なm' ] },
	{ seq: 30, time: 9.086, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 31, time: 9.086, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 32, time: 9.092, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 33, time: 9.092, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 34, time: 9.103, action: 'endLoop', args: [] },
	{ seq: 35, time: 9.201, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 36, time: 9.204, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 37, time: 9.204, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 38, time: 9.209, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 39, time: 9.209, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 40, time: 9.213, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 41, time: 9.217, action: 'changeText', args: [ 'なま' ] },
	{ seq: 42, time: 9.217, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 43, time: 9.217, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 44, time: 9.288, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 45, time: 9.288, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 46, time: 9.304, action: 'endLoop', args: [] },
	{ seq: 47, time: 9.473, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 48, time: 9.477, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 49, time: 9.477, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 50, time: 9.483, action: 'changeSel', args: [ 2, 2 ] },
	{ seq: 51, time: 9.483, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 52, time: 9.488, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 53, time: 9.492, action: 'changeText', args: [ 'なまm' ] },
	{ seq: 54, time: 9.492, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 55, time: 9.492, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 56, time: 9.5, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 57, time: 9.5, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 58, time: 9.517, action: 'endLoop', args: [] },
	{ seq: 59, time: 9.977, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 60, time: 9.982, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 61, time: 9.982, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 62, time: 9.988, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 63, time: 9.988, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 64, time: 9.999, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 65, time: 10.004, action: 'changeText', args: [ 'なまむ' ] },
	{ seq: 66, time: 10.004, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 67, time: 10.004, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 68, time: 10.056, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 69, time: 10.056, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 70, time: 10.073, action: 'endLoop', args: [] },
	{ seq: 71, time: 10.234, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 72, time: 10.239, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 73, time: 10.239, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 74, time: 10.246, action: 'changeSel', args: [ 3, 3 ] },
	{ seq: 75, time: 10.246, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 76, time: 10.253, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 77, time: 10.257, action: 'changeText', args: [ 'なまむg' ] },
	{ seq: 78, time: 10.257, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 79, time: 10.257, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 80, time: 10.268, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 81, time: 10.268, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 82, time: 10.293, action: 'endLoop', args: [] },
	{ seq: 83, time: 10.461, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 84, time: 10.466, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 85, time: 10.466, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 86, time: 10.474, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 87, time: 10.474, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 88, time: 10.481, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 89, time: 10.486, action: 'changeText', args: [ 'なまむぎ' ] },
	{ seq: 90, time: 10.486, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 91, time: 10.486, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 92, time: 10.498, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 93, time: 10.498, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 94, time: 10.517, action: 'endLoop', args: [] },
	{ seq: 95, time: 10.832, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 96, time: 10.837, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 97, time: 10.837, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 98, time: 10.845, action: 'changeSel', args: [ 4, 4 ] },
	{ seq: 99, time: 10.845, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 100, time: 10.854, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 101, time: 10.859, action: 'changeText', args: [ 'なまむぎ、' ] },
	{ seq: 102, time: 10.859, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 103, time: 10.859, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 104, time: 10.872, action: 'changeSel', args: [ 5, 5 ] },
	{ seq: 105, time: 10.872, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 106, time: 10.891, action: 'endLoop', args: [] },
	{ seq: 107, time: 11.192, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 108, time: 11.198, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 109, time: 11.198, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 110, time: 11.209, action: 'changeSel', args: [ 5, 5 ] },
	{ seq: 111, time: 11.209, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 112, time: 11.218, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 113, time: 11.224, action: 'changeText', args: [ 'なまむぎ、n' ] },
	{ seq: 114, time: 11.224, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 115, time: 11.224, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 116, time: 11.239, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 117, time: 11.239, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 118, time: 11.26, action: 'endLoop', args: [] },
	{ seq: 119, time: 11.381, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 120, time: 11.387, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 121, time: 11.387, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 122, time: 11.397, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 123, time: 11.397, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 124, time: 11.407, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 125, time: 11.414, action: 'changeText', args: [ 'なまむぎ、な' ] },
	{ seq: 126, time: 11.414, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 127, time: 11.414, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 128, time: 11.453, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 129, time: 11.453, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 130, time: 11.47, action: 'endLoop', args: [] },
	{ seq: 131, time: 11.607, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 132, time: 11.614, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 133, time: 11.614, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 134, time: 11.625, action: 'changeSel', args: [ 6, 6 ] },
	{ seq: 135, time: 11.625, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 136, time: 11.635, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 137, time: 11.641, action: 'changeText', args: [ 'なまむぎ、なm' ] },
	{ seq: 138, time: 11.641, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 139, time: 11.641, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 140, time: 11.657, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 141, time: 11.657, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 142, time: 11.675, action: 'endLoop', args: [] },
	{ seq: 143, time: 11.735, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 144, time: 11.742, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 145, time: 11.742, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 146, time: 11.754, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 147, time: 11.754, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 148, time: 11.765, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 149, time: 11.772, action: 'changeText', args: [ 'なまむぎ、なま' ] },
	{ seq: 150, time: 11.772, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 151, time: 11.772, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 152, time: 11.789, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 153, time: 11.789, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 154, time: 11.809, action: 'endLoop', args: [] },
	{ seq: 155, time: 11.953, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 156, time: 11.96, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 157, time: 11.96, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 158, time: 11.973, action: 'changeSel', args: [ 7, 7 ] },
	{ seq: 159, time: 11.973, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 160, time: 11.985, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 161, time: 11.993, action: 'changeText', args: [ 'なまむぎ、なまg' ] },
	{ seq: 162, time: 11.993, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 163, time: 11.993, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 164, time: 12.011, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 165, time: 12.011, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 166, time: 12.036, action: 'endLoop', args: [] },
	{ seq: 167, time: 12.15, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 168, time: 12.158, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 169, time: 12.158, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 170, time: 12.171, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 171, time: 12.171, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 172, time: 12.184, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 173, time: 12.191, action: 'changeText', args: [ 'なまむぎ、なまご' ] },
	{ seq: 174, time: 12.191, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 175, time: 12.191, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 176, time: 12.211, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 177, time: 12.211, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 178, time: 12.231, action: 'endLoop', args: [] },
	{ seq: 179, time: 12.363, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 180, time: 12.371, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 181, time: 12.371, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 182, time: 12.386, action: 'changeSel', args: [ 8, 8 ] },
	{ seq: 183, time: 12.386, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 184, time: 12.4, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 185, time: 12.408, action: 'changeText', args: [ 'なまむぎ、なまごm' ] },
	{ seq: 186, time: 12.408, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 187, time: 12.408, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 188, time: 12.429, action: 'changeSel', args: [ 9, 9 ] },
	{ seq: 189, time: 12.429, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 190, time: 12.452, action: 'endLoop', args: [] },
	{ seq: 191, time: 12.566, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 192, time: 12.575, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 193, time: 12.575, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 194, time: 12.59, action: 'changeSel', args: [ 9, 9 ] },
	{ seq: 195, time: 12.59, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 196, time: 12.605, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 197, time: 12.614, action: 'changeText', args: [ 'なまむぎ、なまごめ' ] },
	{ seq: 198, time: 12.614, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 199, time: 12.614, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 200, time: 12.638, action: 'changeSel', args: [ 9, 9 ] },
	{ seq: 201, time: 12.638, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 202, time: 12.663, action: 'endLoop', args: [] },
	{ seq: 203, time: 12.833, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 204, time: 12.841, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 205, time: 12.841, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 206, time: 12.857, action: 'changeSel', args: [ 9, 9 ] },
	{ seq: 207, time: 12.857, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 208, time: 12.872, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 209, time: 12.881, action: 'changeText', args: [ 'なまむぎ、なまごめ、' ] },
	{ seq: 210, time: 12.881, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 211, time: 12.881, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 212, time: 12.905, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 213, time: 12.905, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 214, time: 12.932, action: 'endLoop', args: [] },
	{ seq: 215, time: 13.144, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 216, time: 13.153, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 217, time: 13.153, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 218, time: 13.17, action: 'changeSel', args: [ 10, 10 ] },
	{ seq: 219, time: 13.17, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 220, time: 13.187, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 221, time: 13.197, action: 'changeText', args: [ 'なまむぎ、なまごめ、n' ] },
	{ seq: 222, time: 13.197, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 223, time: 13.197, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 224, time: 13.226, action: 'changeSel', args: [ 11, 11 ] },
	{ seq: 225, time: 13.226, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 226, time: 13.254, action: 'endLoop', args: [] },
	{ seq: 227, time: 13.297, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 228, time: 13.307, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 229, time: 13.307, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 230, time: 13.323, action: 'changeSel', args: [ 11, 11 ] },
	{ seq: 231, time: 13.323, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 232, time: 13.34, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 233, time: 13.349, action: 'changeText', args: [ 'なまむぎ、なまごめ、な' ] },
	{ seq: 234, time: 13.349, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 235, time: 13.349, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 236, time: 13.375, action: 'changeSel', args: [ 11, 11 ] },
	{ seq: 237, time: 13.375, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 238, time: 13.399, action: 'endLoop', args: [] },
	{ seq: 239, time: 13.461, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 240, time: 13.471, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 241, time: 13.471, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 242, time: 13.489, action: 'changeSel', args: [ 11, 11 ] },
	{ seq: 243, time: 13.489, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 244, time: 13.506, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 245, time: 13.516, action: 'changeText', args: [ 'なまむぎ、なまごめ、なm' ] },
	{ seq: 246, time: 13.516, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 247, time: 13.516, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 248, time: 13.542, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 249, time: 13.542, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 250, time: 13.568, action: 'endLoop', args: [] },
	{ seq: 251, time: 13.629, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 252, time: 13.639, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 253, time: 13.639, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 254, time: 13.659, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 255, time: 13.659, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 256, time: 13.677, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 257, time: 13.688, action: 'changeText', args: [ 'なまむぎ、なまごめ、なま' ] },
	{ seq: 258, time: 13.688, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 259, time: 13.688, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 260, time: 13.716, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 261, time: 13.716, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 262, time: 13.745, action: 'endLoop', args: [] },
	{ seq: 263, time: 13.934, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 264, time: 13.946, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 265, time: 13.946, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 266, time: 13.966, action: 'changeSel', args: [ 12, 12 ] },
	{ seq: 267, time: 13.966, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 268, time: 13.986, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 269, time: 13.997, action: 'changeText', args: [ 'なまむぎ、なまごめ、なまt' ] },
	{ seq: 270, time: 13.997, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 271, time: 13.997, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 272, time: 14.028, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 273, time: 14.028, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 274, time: 14.058, action: 'endLoop', args: [] },
	{ seq: 275, time: 14.117, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 276, time: 14.128, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 277, time: 14.128, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 278, time: 14.148, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 279, time: 14.148, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 280, time: 14.169, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 281, time: 14.18, action: 'changeText', args: [ 'なまむぎ、なまごめ、なまた' ] },
	{ seq: 282, time: 14.18, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 283, time: 14.18, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 284, time: 14.211, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 285, time: 14.211, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 286, time: 14.243, action: 'endLoop', args: [] },
	{ seq: 287, time: 14.3, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 288, time: 14.312, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 289, time: 14.312, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 290, time: 14.333, action: 'changeSel', args: [ 13, 13 ] },
	{ seq: 291, time: 14.333, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 292, time: 14.354, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 293, time: 14.365, action: 'changeText', args: [ 'なまむぎ、なまごめ、なまたm' ] },
	{ seq: 294, time: 14.365, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 295, time: 14.365, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 296, time: 14.397, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 297, time: 14.397, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 298, time: 14.431, action: 'endLoop', args: [] },
	{ seq: 299, time: 14.454, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 300, time: 14.467, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 301, time: 14.467, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 302, time: 14.488, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 303, time: 14.488, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 304, time: 14.51, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 305, time: 14.522, action: 'changeText', args: [ 'なまむぎ、なまごめ、なまたま' ] },
	{ seq: 306, time: 14.522, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 307, time: 14.522, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 308, time: 14.555, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 309, time: 14.555, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 310, time: 14.584, action: 'endLoop', args: [] },
	{ seq: 311, time: 14.671, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 312, time: 14.683, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 313, time: 14.683, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 314, time: 14.707, action: 'changeSel', args: [ 14, 14 ] },
	{ seq: 315, time: 14.707, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 316, time: 14.73, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 317, time: 14.742, action: 'changeText', args: [ 'なまむぎ、なまごめ、なまたまg' ] },
	{ seq: 318, time: 14.742, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 319, time: 14.742, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 320, time: 14.776, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 321, time: 14.776, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 322, time: 14.811, action: 'endLoop', args: [] },
	{ seq: 323, time: 14.831, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 324, time: 14.844, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 325, time: 14.844, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 326, time: 14.868, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 327, time: 14.868, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 328, time: 14.891, action: 'sendEvent', args: [ 'keydown', { keyCode: 229 } ] },
	{ seq: 329, time: 14.904, action: 'changeText', args: [ 'なまむぎ、なまごめ、なまたまご' ] },
	{ seq: 330, time: 14.904, action: 'changeSel', args: [ 0, 0 ] },
	{ seq: 331, time: 14.904, action: 'sendEvent', args: [ 'input', {} ] },
	{ seq: 332, time: 14.94, action: 'changeSel', args: [ 15, 15 ] },
	{ seq: 333, time: 14.94, action: 'sendEvent', args: [ 'keyup', { keyCode: 229 } ] },
	{ seq: 334, time: 14.974, action: 'endLoop', args: [] }
] ] );
