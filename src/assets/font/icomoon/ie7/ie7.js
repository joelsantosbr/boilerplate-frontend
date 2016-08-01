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
		'icon-envelope2': '&#xe900;',
		'icon-world': '&#xe901;',
		'icon-boca3': '&#xe908;',
		'icon-configuration1': '&#xe90e;',
		'icon-list1': '&#xe90f;',
		'icon-messagebox1': '&#xe912;',
		'icon-peoples6': '&#xe913;',
		'icon-recycle1': '&#xe914;',
		'icon-shild1': '&#xe915;',
		'icon-boca1': '&#xe902;',
		'icon-nariz1': '&#xe903;',
		'icon-redomoinho1': '&#xe904;',
		'icon-boca2': '&#xe905;',
		'icon-orelha1': '&#xe906;',
		'icon-rosto1': '&#xe910;',
		'icon-arrowdown1': '&#xe90d;',
		'icon-book1': '&#xe90c;',
		'icon-certifield1': '&#xe90b;',
		'icon-computer1': '&#xe90a;',
		'icon-peoples2': '&#xe909;',
		'icon-peoples3': '&#xe907;',
		'icon-peoples4': '&#xe917;',
		'icon-peoples5': '&#xe918;',
		'icon-webcam1': '&#xe91a;',
		'icon-alvo1': '&#xe919;',
		'icon-design1': '&#xe91b;',
		'icon-hand1': '&#xe91d;',
		'icon-mobile3': '&#xe91e;',
		'icon-search1': '&#xe921;',
		'icon-time1': '&#xe920;',
		'icon-sequenza-logo-min': '&#xe925;',
		'icon-sequenza-logo': '&#xe926;',
		'icon-block1': '&#xe91f;',
		'icon-fluig1': '&#xe922;',
		'icon-computer12': '&#xe923;',
		'icon-rfid': '&#xe924;',
		'icon-peoples1': '&#xe927;',
		'icon-mobile2': '&#xe928;',
		'icon-lampada1': '&#xe92a;',
		'icon-digital': '&#xe929;',
		'icon-computer2': '&#xe92f;',
		'icon-arrow-down1': '&#xe92e;',
		'icon-mail1': '&#xe92d;',
		'icon-marker2': '&#xe916;',
		'icon-calendar1': '&#xe92b;',
		'icon-tent1': '&#xe92c;',
		'icon-archive1': '&#xe930;',
		'icon-bed1': '&#xe931;',
		'icon-bus1': '&#xe932;',
		'icon-bus-left1': '&#xe933;',
		'icon-bus-right1': '&#xe934;',
		'icon-chopp1': '&#xe935;',
		'icon-facebook1': '&#xe936;',
		'icon-facebook2': '&#xe93d;',
		'icon-flatware1': '&#xe93c;',
		'icon-gift1': '&#xe93b;',
		'icon-instagram1': '&#xe93a;',
		'icon-linkedin1': '&#xe939;',
		'icon-man1': '&#xe938;',
		'icon-marker1': '&#xe937;',
		'icon-ribbon1': '&#xe93e;',
		'icon-shirt1': '&#xe93f;',
		'icon-skype1': '&#xe940;',
		'icon-telephone1': '&#xe911;',
		'icon-telephone2': '&#xe942;',
		'icon-twitter1': '&#xe941;',
		'icon-whatsapp1': '&#xe943;',
		'icon-whatsapp2': '&#xe91c;',
		'icon-woman1': '&#xe944;',
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
