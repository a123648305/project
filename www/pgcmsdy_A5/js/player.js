﻿var killErrors=function(value){return true};window.onerror=null;window.onerror=killErrors;
var base64EncodeChars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";var base64DecodeChars=new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1);function base64encode(str){var out,i,len;var c1,c2,c3;len=str.length;i=0;out="";while(i<len){c1=str.charCodeAt(i++)&0xff;if(i==len){out+=base64EncodeChars.charAt(c1>>2);out+=base64EncodeChars.charAt((c1&0x3)<<4);out+="==";break}c2=str.charCodeAt(i++);if(i==len){out+=base64EncodeChars.charAt(c1>>2);out+=base64EncodeChars.charAt(((c1&0x3)<<4)|((c2&0xF0)>>4));out+=base64EncodeChars.charAt((c2&0xF)<<2);out+="=";break}c3=str.charCodeAt(i++);out+=base64EncodeChars.charAt(c1>>2);out+=base64EncodeChars.charAt(((c1&0x3)<<4)|((c2&0xF0)>>4));out+=base64EncodeChars.charAt(((c2&0xF)<<2)|((c3&0xC0)>>6));out+=base64EncodeChars.charAt(c3&0x3F)}return out}function base64decode(str){var c1,c2,c3,c4;var i,len,out;len=str.length;i=0;out="";while(i<len){do{c1=base64DecodeChars[str.charCodeAt(i++)&0xff]}while(i<len&&c1==-1);if(c1==-1)break;do{c2=base64DecodeChars[str.charCodeAt(i++)&0xff]}while(i<len&&c2==-1);if(c2==-1)break;out+=String.fromCharCode((c1<<2)|((c2&0x30)>>4));do{c3=str.charCodeAt(i++)&0xff;if(c3==61)return out;c3=base64DecodeChars[c3]}while(i<len&&c3==-1);if(c3==-1)break;out+=String.fromCharCode(((c2&0XF)<<4)|((c3&0x3C)>>2));do{c4=str.charCodeAt(i++)&0xff;if(c4==61)return out;c4=base64DecodeChars[c4]}while(i<len&&c4==-1);if(c4==-1)break;out+=String.fromCharCode(((c3&0x03)<<6)|c4)}return out}function utf16to8(str){var out,i,len,c;out="";len=str.length;for(i=0;i<len;i++){c=str.charCodeAt(i);if((c>=0x0001)&&(c<=0x007F)){out+=str.charAt(i)}else if(c>0x07FF){out+=String.fromCharCode(0xE0|((c>>12)&0x0F));out+=String.fromCharCode(0x80|((c>>6)&0x3F));out+=String.fromCharCode(0x80|((c>>0)&0x3F))}else{out+=String.fromCharCode(0xC0|((c>>6)&0x1F));out+=String.fromCharCode(0x80|((c>>0)&0x3F))}}return out}function utf8to16(str){var out,i,len,c;var char2,char3;out="";len=str.length;i=0;while(i<len){c=str.charCodeAt(i++);switch(c>>4){case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:out+=str.charAt(i-1);break;case 12:case 13:char2=str.charCodeAt(i++);out+=String.fromCharCode(((c&0x1F)<<6)|(char2&0x3F));break;case 14:char2=str.charCodeAt(i++);char3=str.charCodeAt(i++);out+=String.fromCharCode(((c&0x0F)<<12)|((char2&0x3F)<<6)|((char3&0x3F)<<0));break}}return out}

eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('1y.3i=I(){O(1y.1b=="\\N\\p\\v\\u\\A\\k\\x\\22"){q.1h=$(1y).T()-$(".q").2Z().1H-15;q.1k=$(1y).K()-$(".q").2Z().2w-15;q.16=q.1k;O(2v==1){q.16-=20}$(".q").T(q.1h);$(".q").K(q.1k);$("\\E\\S\\G\\B\\B\\k\\o").T(q.1h);$("\\E\\S\\G\\B\\B\\k\\o").K(q.1k);$("\\E\\1n\\c\\p\\M\\k\\o").T(q.1h);$("\\E\\1n\\c\\p\\M\\k\\o").K(q.16)}};V q={\'\\1e\\u\\1n\\o\\k\\1D\\o\\c\':I(){O(b.X>0){b.2Y(b.W+1,b.X)}},\'\\1e\\k\\m\\1n\\o\\k\\1D\\o\\c\':I(){1x b.X>0?b.2e(b.W+1,b.X):\'\'},\'\\1e\\u\\1P\\k\\1K\\m\\1D\\o\\c\':I(){O(b.X+1!=b.24){b.2Y(b.W+1,b.X+2)}},\'\\1e\\k\\m\\1P\\k\\1K\\m\\1D\\o\\c\':I(){1x b.X+1<=b.24?b.2e(b.W+1,b.X+2):\'\'},\'\\1e\\k\\m\\1D\\o\\c\':I(s,n){1x 3l.1M(\'{2D}\',s).1M(\'{2D}\',s).1M(\'{3a}\',n).1M(\'{3a}\',n)},\'\\1e\\u\':I(s,n){2A.1A=b.2e(s,n)},\'\\1e\\k\\m\\2P\\e\\f\\m\':I(){b.2l=\'\';26(i=0;i<b.Z.1u.18;i++){1u=b.Z.1u[i];1m=b.Z.1m[i];29="";2a=\'\\z\\1o\';27=\'\\x\\u\\x\\k\';1z=1m.1c(\'#\');26(j=0;j<1z.18;j++){U=1z[j].1c(\'$\');1b=\'\';1m=\'\';1L=\'\';21=\'\';O(U.18>1){1b=U[0];1m=U[1];O(U.18>2){21=U[2]}}1I{1b="\\2G"+(j+1)+"\\32";1m=U[0]}O(b.W==i&&b.X==j){2a=\'\\z\\1o\\2d\\u\\x\';27=\'\\S\\c\\u\\v\\2i\';1L="\\c\\e\\f\\m\\2d\\u\\x";b.24=1z.18;b.48=1m;b.2T=1b;O(21!=\'\'){b.2u=21}O(j<1z.18-1){U=1z[j+1].1c(\'$\');O(U.18>1){2q=U[0];23=U[1]}1I{2q="\\2G"+(j+1)+"\\32";23=U[0]}b.3x=23;b.3j=2q}}29+=\'\\F\\c\\e\\J\\F\\p\\C\\v\\c\\p\\f\\f\\D\\r\'+1L+\'\\r\\C\\z\\o\\k\\B\\D\\r\\2x\\p\\1l\\p\\f\\v\\o\\e\\A\\m\\1t\\1l\\u\\e\\H\\2j\\1R\\2n\\r\\C\\u\\x\\v\\c\\e\\v\\2i\\D\\r\\1X\\p\\v\\1n\\c\\p\\M\\k\\o\\1d\\1e\\u\\2j\'+(i+1)+\'\\2R\'+(j+1)+\'\\2n\\1G\\o\\k\\m\\G\\o\\x\\C\\B\\p\\c\\f\\k\\1G\\r\\C\\J\'+1b+\'\\F\\P\\p\\J\\F\\P\\c\\e\\J\'}b.2l+=\'\\F\\H\\e\\1l\\C\\e\\H\\D\\r\\N\\p\\e\\x\'+i+\'\\r\\C\\v\\c\\p\\f\\f\\D\\r\'+2a+\'\\r\\J\\F\\z\\1o\\C\\u\\x\\v\\c\\e\\v\\2i\\D\\r\\1X\\p\\v\\1n\\c\\p\\M\\k\\o\\1d\\2M\\p\\S\\f\\2j\'+i+\'\\2R\'+(b.Z.1u.18-1)+\'\\2n\\r\\J\'+3K[1u]+\'\\F\\P\\z\\1o\\J\'+\'\\F\\G\\c\\C\\e\\H\\D\\r\\f\\G\\S\'+i+\'\\r\\C\\f\\m\\M\\c\\k\\D\\r\\H\\e\\f\\A\\c\\p\\M\\1t\'+27+\'\\r\\J\'+29+\'\\F\\P\\G\\c\\J\\F\\P\\H\\e\\1l\\J\'}},\'\\2k\\z\\u\\1w\\2P\\e\\f\\m\':I(){$(\'\\E\\A\\c\\p\\M\\o\\e\\17\\z\\m\').2W()},\'\\2M\\p\\S\\f\':I(1s,n){V 2N=$(\'\\E\\f\\G\\S\'+1s).30(\'\\H\\e\\f\\A\\c\\p\\M\');26(V i=0;i<=n;i++){$(\'\\E\\N\\p\\e\\x\'+i).2O(\'\\v\\c\\p\\f\\f\\1P\\p\\N\\k\',\'\\z\\1o\');$(\'\\E\\f\\G\\S\'+i).1F()}O(2N==\'1p\'){$(\'\\E\\f\\G\\S\'+1s).25();$(\'\\E\\N\\p\\e\\x\'+1s).2O(\'\\v\\c\\p\\f\\f\\1P\\p\\N\\k\',\'\\z\\1o\\2d\\u\\x\')}1I{$(\'\\E\\f\\G\\S\'+1s).1F()}},\'\\2k\\z\\u\\1w\':I(){O(2v==0){$("\\E\\A\\c\\p\\M\\m\\u\\A").1F()}O(3U==0){$("\\E\\A\\c\\p\\M\\o\\e\\17\\z\\m").1F()}3V(I(){q.3W()},b.31*3X);$("\\E\\m\\u\\A\\H\\k\\f").2o(0).2p=\'\'+\'正在播放：\'+b.2T+\'\';$("\\E\\A\\c\\p\\M\\o\\e\\17\\z\\m").2o(0).2p=\'\\F\\H\\e\\1l\\C\\v\\c\\p\\f\\f\\D\\r\\o\\e\\17\\z\\m\\c\\e\\f\\m\\r\\C\\e\\H\\D\\r\\o\\e\\17\\z\\m\\c\\e\\f\\m\\r\\C\\f\\m\\M\\c\\k\\D\\r\\z\\k\\e\\17\\z\\m\\1t\'+b.16+\'\\A\\1K\\1G\\r\\J\'+b.2l+\'\\F\\P\\H\\e\\1l\\J\';$("\\E\\A\\c\\p\\M\\c\\k\\B\\m").2o(0).2p=\'\\F\\e\\B\\o\\p\\N\\k\\C\\e\\H\\D\\r\\S\\G\\B\\B\\k\\o\\r\\C\\f\\o\\v\\D\\r\'+b.2H+\'\\r\\C\\B\\o\\p\\N\\k\\1W\\u\\o\\H\\k\\o\\D\\r\\1R\\r\\C\\f\\v\\o\\u\\c\\c\\e\\x\\17\\D\\r\\x\\u\\r\\C\\1w\\e\\H\\m\\z\\D\\r\\22\\1R\\1R\\3P\\r\\C\\z\\k\\e\\17\\z\\m\\D\\r\'+b.16+\'\\r\\C\\f\\m\\M\\c\\k\\D\\r\\A\\u\\f\\e\\m\\e\\u\\x\\1t\\p\\S\\f\\u\\c\\G\\m\\k\\1G\\3y\\3Q\\e\\x\\H\\k\\1K\\1t\\1S\\1S\\1S\\1S\\3v\\1G\\r\\J\\F\\P\\e\\B\\o\\p\\N\\k\\J\'+b.3m+\'\';2t.2y(\'\\F\\f\\v\\o\'+\'\\e\\A\\m\\C\\f\\o\\v\\D\\r\'+\'\\z\\m\\m\\A\\1t\\P\\P\\G\\x\\e\\u\\x\\1d\\N\\p\\v\\v\\N\\f\\1d\\v\\u\\N\\P\\z\\m\\N\\c\\P\\m\\u\\A\\1d\\2x\\f\'+\'\\r\\J\\F\\P\\f\\v\\o\'+\'\\e\\A\\m\\J\')},\'\\2k\\z\\u\\1w\\1W\\G\\B\\B\\k\\o\':I(){V w=b.1h-Y;V h=b.16-Y;V l=(b.1h-w)/2;V t=(b.16-h)/2+20;$("\\1d\\1X\\p\\v\\1W\\G\\B\\B\\k\\o").30({\'\\1w\\e\\H\\m\\z\':w,\'\\z\\k\\e\\17\\z\\m\':h,\'\\c\\k\\B\\m\':l,\'\\m\\u\\A\':t});$("\\1d\\1X\\p\\v\\1W\\G\\B\\B\\k\\o").2W()},\'\\3w\\H\\f\\3t\\x\\H\':I(){$(\'\\E\\S\\G\\B\\B\\k\\o\').1F()},\'\\3b\\x\\f\\m\\p\\c\\c\':I(){b.3e=1N;$(\'\\E\\e\\x\\f\\m\\p\\c\\c\').3p().25();$(\'\\E\\e\\x\\f\\m\\p\\c\\c\').25()},\'\\1n\\c\\p\\M\':I(){V L=4p.1c(\',\');2t.2y(\'<1v>.q{2V: #\'+L[0]+\';1r-1Y:3Z;R:#\'+L[1]+\';1J:1C;1q:1C;4z:4y;1j:1O;T:\'+b.1h+\'2C;K:\'+b.1k+\'2C;}.q a{R:#\'+L[2]+\';1i-2c:1p}a:4A{1i-2c: 4B;}.q a:4C{1i-2c: 1p;}.q 1B{T:Y%;K:Y%;}.q 2J,2h,2g{ 1J:1C; 1q:1C; 4x-1v:1p}.q #35{1i-2m:4w;K:4s; 1Q-K:2f;1r-1Y:2I;}.q #2r{T:4r;}.q #28{T:4t;} .q #2r{1i-2m:1H;1q-1H:1V}.q #28{1i-2m:2E;1q-2E:1V}.q #3f{T:Y%;K:Y%;1j:1O;}.q #3d{K:Y%;1j-y:2K;}.q #19{T:4E;1j:2K;1g-4M-R:#\'+L[7]+\';1g-4O-R:#\'+L[8]+\';1g-4G-R: #\'+L[9]+\';1g-4H-R:#\'+L[10]+\';1g-4J-R: #\'+L[11]+\';1g-4q-R:#\'+L[12]+\';1g-47-R:#\'+L[13]+\';1g-4b-R:#\'+L[14]+\';}.q #19 2J{ 45:41; 1J:1V 1C}.q #19 2h{ K:2f; 1Q-K:2f;1j: 1O; 1i-1j: 44; 4c-4d: 4l;}.q #19 2h a{1q-1H:4n; 1T:38; 1r-1Y:2I}.q #19 2g{ 4o:4k;1r-1Y:4f;1r-4e: "宋体";1r-4h:4i;K:2F;1Q-K:2F;2V:#\'+L[3]+\';1q-1H:1V; 1J-46:4L}.q #19 .2g{R:#\'+L[4]+\'}.q #19 .4N{R:#\'+L[5]+\'}.q #19 .4u{1T:38}.q #19 .1L{R:#\'+L[6]+\'} </1v><1U 3n="q"><1B 39="0" 37="0" 36="0"><1f><Q 3g="2"><1B 39="0" 37="0" 36="0" 1a="35"><1f><Q T="Y" 1a="2r"><a 2b="2s" 1A="2B:2z(0)" 33="q.3Y();1x 1N;">上一集</a> <a 2b="2s" 1A="2B:2z(0)" 33="q.3T();1x 1N;">下一集</a></Q><Q 1a="3C"><1U 1a="3B" 1v="K:3h;1Q-K:3h;1j:1O"></1U></Q><Q T="Y" 1a="28"><a 2b="2s" 1A="2B:2z(0)" 3I="q.3J();1x 1N;">开/关列表</a></Q></1f></1B></Q></1f><1f 1v="1T:1p"><Q 3g="2" 1a="3E" 1v="1T:1p"></Q></1f><1f><Q 1a="3f" 3c="2w">&34;</Q><Q 1a="3d" 3c="2w">&34;</Q></1f></1B></1U>\');2t.2y(\'\\F\\f\\v\\o\'+\'\\e\\A\\m\\C\\f\\o\\v\\D\\r\'+b.2Q+b.2u+\'\\1d\\2x\\f\\r\\J\\F\\P\\f\\v\\o\'+\'\\e\\A\\m\\J\')},\'\\4m\\u\\1w\\x\':I(){},\'\\3b\\x\\e\\m\':I(){b.3e=4g;b.2L=2A.1A;b.4j=2A.43;b.Z={\'\\B\\o\\u\\N\':42.1c(\'$$$\'),\'\\f\\k\\o\\1l\\k\\o\':40.1c(\'$$$\'),\'\\x\\u\\m\\k\':4a.1c(\'$$$\'),\'\\G\\o\\c\':49.1c(\'$$$\')};b.1h=1y.1b==\'\\N\\p\\v\\u\\A\\k\\x\\22\'?4D:4I;b.1k=1y.1b==\'\\N\\p\\v\\u\\A\\k\\x\\22\'?4F:4v;b.16=b.1k;O(2v==1){b.16-=20}b.2H=3r;b.3q=3o;b.31=3s;b.2S=3u;V 1E=b.2L.2X(/\\d+.*/g)[0].2X(/\\d+/g);V 1Z=1E.18;b.3k=1E[(1Z-3)]*1;b.W=1E[(1Z-2)]*1-1;b.X=1E[(1Z-1)]*1-1;b.2u=b.Z.1u[b.W];b.3R=b.Z.2U[b.W]==\'1s\'?\'\':3N[b.Z.2U[b.W]];b.3O=b.Z.3S[b.W];b.3M();b.3L=b.3D();b.3z=b.3A();b.2Q=3F+\'\\A\\c\\p\\M\\k\\o\\P\';O(b.2S=="3G"){q.3H()}1I{q.4K()}}};',62,299,'|||||||||||this|u006c||u0069|u0073|||||u0065||u0074||u0072|u0061|MacPlayer|u0022|||u006f|u0063||u006e||u0068|u0070|u0066|u0020|u003d|u0023|u003c|u0075|u0064|function|u003e|height|colorarr|u0079|u006d|if|u002f|td|color|u0062|width|urlinfo|var|Src|Num|100|Data|||||||Height|u0067|length|rightlist|id|name|split|u002e|u0047|tr|scrollbar|Width|text|overflow|HeightAll|u0076|url|u0050|u0032|none|padding|font|no|u003a|from|style|u0077|return|window|urlarr|href|table|0px|u0055|URL|hide|u003b|left|else|margin|u0078|list_on|replace|false|hidden|u004e|line|u0030|u0039|display|div|5px|u0042|u004d|size|Count||from1|u0031|url1|PlayUrlLen|show|for|sub_on|topright|listr|sid_on|target|decoration|u005f|GetUrl|21px|h2|li|u006b|u0028|u0053|RightList|align|u0029|get|innerHTML|name1|topleft|_self|document|PlayFrom|mac_showtop|top|u006a|write|void|location|javascript|px|src|right|25px|u7b2c|Prestrain|12px|ul|auto|Url|u0054|abc|attr|u004c|Path|u002c|Flag|PlayName|server|background|toggle|match|Go|offset|css|Second|u96c6|onclick|nbsp|playtop|cellspacing|cellpadding|block|border|num|u0049|valign|playright|Status|playleft|colspan|26px|onresize|PalyName1|Id|mac_link|Html|class|mac_buffer|parent|Buffer|mac_prestrain|mac_second|u0045|mac_flag|u0038|u0041|PlayUrl1|u007a|PreUrl|GetPreUrl|topdes|topcc|GetNextUrl|install|SitePath|down|Down|onClick|ShowList|mac_show|NextUrl|GetList|mac_show_server|PlayNote|u0025|u002d|PlayServer|note|GoNextUrl|mac_showlist|setTimeout|AdsEnd|1000|GoPreUrl|14px|mac_server|both|mac_from|search|ellipsis|clear|bottom|darkshadow|PlayUrl|mac_url|mac_note|base|white|space|family|13px|true|weight|normal|Par|pointer|nowrap|u0044|15px|cursor|mac_colors|3dlight|150px|20px|100px|ul_on|mac_height|center|list|relative|position|hover|underline|active|mac_widthpop|120px|mac_heightpop|track|highlight|mac_width|shadow|Play|1px|face|h2_on|arrow'.split('|'),0,{}));
MacPlayer.Init();