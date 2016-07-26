/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-configuration1': '&#xe90e;',
		'icon-list1': '&#xe90f;',
		'icon-messagebox1': '&#xe911;',
		'icon-peoples6': '&#xe912;',
		'icon-recycle1': '&#xe913;',
		'icon-shild1': '&#xe914;',
		'icon-arrowdown1': '&#xe901;',
		'icon-book1': '&#xe902;',
		'icon-certifield1': '&#xe903;',
		'icon-computer1': '&#xe904;',
		'icon-peoples2': '&#xe905;',
		'icon-peoples3': '&#xe906;',
		'icon-peoples4': '&#xe908;',
		'icon-peoples5': '&#xe90c;',
		'icon-webcam1': '&#xe909;',
		'icon-alvo1': '&#xe900;',
		'icon-arrow-down1': '&#xe917;',
		'icon-facebook2': '&#xe907;',
		'icon-instagram1': '&#xe90a;',
		'icon-linkedin1': '&#xe90b;',
		'icon-marker1': '&#xe90d;',
		'icon-skype1': '&#xe910;',
		'icon-whatsapp2': '&#xe91c;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
