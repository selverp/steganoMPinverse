<?php
include "common.inc";
include "funkcijeDvodim.php"; 
include "funkcijeStorage.php";

?>
<!DOCTYPE HTML PUBLIC "//W3CC//DTD HTML 4.0 Final//EN">
<HTML>
<HEAD><TITLE>MATRIX operation</TITLE>
<META NAME="KEYWORDS" CONTENT="
calculus, algebra, mathematics, trigonometry, trig, math, maths,
tutoring, AP, tutors, homework, tutorial,
derivatives, indefinite, definite, integral, integrals, functions, differentials, polynomials,
calculators,
differentiation, differentiating, differentiate, differentiates, derive,
integration, integrating, integrate, integrates,
antiderivative, antiderivatives, antidifferentiate, antidifferentiating, antidifferentiation,
substitution, substitutions, reduction, formula, formulas,
multiplication, division, multiply, divide,

exercise, exercises,
product, rule, quotient, chain, chain rule.
parts, power, powers, product, products, multiples, angle, angles,
rational, rationals, partial, fraction, fractions
">

<META NAME="DESCRIPTION" CONTENT="Check your calculus homework! Enter your function to get your calculus derivative or integral with each step explained, automatically and fast.">
<META NAME="robots" CONTENT="index,follow">
<link rel="stylesheet" type="text/css" href="calc101.css">
<style type="text/css">
<!--
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #006600;
}
.style6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style17 {font-size: 12px; font-weight: bold; }
.style18 {
	color: #999999;
	font-size: 14px;
}
.style19 {color: #999999}
.style21 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FF0000; }
.style22 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #9900CC; }
.style26 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #006600;
	font-weight: bold;
}
.style30 {font-size: 28px}
.style31 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #9900CC;
}
.style32 {font-size: 13px}
-->
</style>
</HEAD>
<body bgcolor="#FFFFFF" TEXT="#171717" VLINK="#EA6A13" ALINK="#EA6A13" LINK="#C73100">
<table width="<?php if($t*7<100)
$procenat = 100;
else
$procenat = $t*8;
echo $procenat . "%"; 
?>" align="center">
  <tr>
    <td width="830"><form action="uploaddense.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="89%" align="center">
        <tr>
          <td width="22%" align="left" valign="top"><table width="50" align="right">
            <tr>
              <td align="right"><div align="right"><a href="index.php"><img src="images/logoi2.gif" alt="home page" width="185" height="177" border="0"><br>
              </a></div></td>
            </tr>
            <tr>
              <td><table border="0" align="right">
                <tr>
                  <td width="443" height="20" valign="top" class="style15"><img src="images/liner.gif" alt="" width="200" height="1"></td>
                </tr>
                <tr>
                  <td valign="top" class="style2"><!-- *** MyCSSMenu copyright (c) 2007, MyCSSMenu. All Rights Reserved.

	-MyCSSMenu may be manually customized by editing this document, or open this web page using
	 IE or Firefox to access the visual interface.

-->


<!--%%%%%%%%%%%% MyCSSMenu Styles [Keep in head for full validation!] %%%%%%%%%%%-->
<style type="text/css">


/*!!!!!!!!!!! MyCSSMenu Core CSS [Do Not Modify!] !!!!!!!!!!!!!*/
.qmmc .qmdivider{display:block;font-size:1px;border-width:0px;border-style:solid;position:relative;z-index:1;}.qmmc .qmdividery{float:left;width:0px;}.qmmc .qmtitle{display:block;cursor:default;white-space:nowrap;position:relative;z-index:1;}.qmclear {font-size:1px;height:0px;width:0px;clear:left;line-height:0px;display:block;float:none !important;}.qmmc {position:relative;zoom:1;z-index:10;}.qmmc a, .qmmc li {float:left;display:block;white-space:nowrap;position:relative;z-index:1;}.qmmc div a, .qmmc ul a, .qmmc ul li {float:none;}.qmsh div a {float:left;}.qmmc div{visibility:hidden;position:absolute;}.qmmc li {z-index:auto;}.qmmc ul {left:-10000px;position:absolute;z-index:10;}.qmmc, .qmmc ul {list-style:none;padding:0px;margin:0px;}.qmmc li a {float:none}.qmmc li:hover>ul{left:auto;}#qm0 li {float:none;}#qm0 li:hover>ul{top:0px;left:100%;}


/*!!!!!!!!!!! MyCSSMenu Styles [Please Modify!] !!!!!!!!!!!*/


	/* MyCSSMenu 0 */

	/*"""""""" (MAIN) Container""""""""*/	
	#qm0	
	{	
		width:150px;
		background-color:transparent;
	}


	/*"""""""" (MAIN) Items""""""""*/	
	#qm0 a	
	{	
		padding:5px 5px 5px 8px;
		color:#dd3300;
		font-family:Arial;
		font-size:13px;
		text-decoration:none;
	}


	/*"""""""" (MAIN) Hover State""""""""*/	
	#qm0 a:hover	
	{	
		text-decoration:underline;
	}


	/*"""""""" (MAIN) Active State""""""""*/	
	body #qm0 .qmactive, body #qm0 .qmactive:hover	
	{	
		text-decoration:none;
		font-weight:bold;
	}


	/*"""""""" (SUB) Container""""""""*/	
	#qm0 div, #qm0 ul	
	{	
		padding:5px 0px;
		background-color:#ffffff;
	}


	/*"""""""" (SUB) Items""""""""*/	
	#qm0 div a, #qm0 ul a	
	{	
		padding:2px 0px 2px 15px;
		margin:0px 5px;
		background-image:none;
		color:#3761e3;
	}


	/*"""""""" (SUB) Hover State""""""""*/	
	#qm0 div a:hover, #qm0 ul a:hover	
	{	
		text-decoration:underline;
	}


	/*"""""""" (SUB) Active State""""""""*/	
	body #qm0 div .qmactive, body #qm0 div .qmactive:hover	
	{	
		text-decoration:none;
		font-weight:bold;
	}


</style><!-- Core MyCSSMenu Code -->
<script type="text/javascript">/* <![CDATA[ */var qm_si,qm_li,qm_lo,qm_tt,qm_th,qm_ts,qm_la,qm_ic,qm_ib;var qp="parentNode";var qc="className";var qm_t=navigator.userAgent;var qm_o=qm_t.indexOf("Opera")+1;var qm_s=qm_t.indexOf("afari")+1;var qm_s2=qm_s&&qm_t.indexOf("ersion/2")+1;var qm_s3=qm_s&&qm_t.indexOf("ersion/3")+1;var qm_n=qm_t.indexOf("Netscape")+1;var qm_v=parseFloat(navigator.vendorSub);;function qm_create(sd,v,ts,th,oc,rl,sh,fl,ft,aux,l){var w="onmouseover";var ww=w;var e="onclick";if(oc){if(oc=="all"||(oc=="lev2"&&l>=2)){w=e;ts=0;}if(oc=="all"||oc=="main"){ww=e;th=0;}}if(!l){l=1;qm_th=th;sd=document.getElementById("qm"+sd);if(window.qm_pure)sd=qm_pure(sd);sd[w]=function(e){qm_kille(e)};document[ww]=qm_bo;if(oc=="main"){qm_ib=true;sd[e]=function(event){qm_ic=true;qm_oo(new Object(),qm_la,1);qm_kille(event)};document.onmouseover=function(){qm_la=null;clearTimeout(qm_tt);qm_tt=null;};}sd.style.zoom=1;if(sh)x2("qmsh",sd,1);if(!v)sd.ch=1;}else  if(sh)sd.ch=1;if(oc)sd.oc=oc;if(sh)sd.sh=1;if(fl)sd.fl=1;if(ft)sd.ft=1;if(rl)sd.rl=1;sd.style.zIndex=l+""+1;var lsp;var sp=sd.childNodes;for(var i=0;i<sp.length;i++){var b=sp[i];if(b.tagName=="A"){lsp=b;b[w]=qm_oo;if(w==e)b.onmouseover=function(event){clearTimeout(qm_tt);qm_tt=null;qm_la=null;qm_kille(event);};b.qmts=ts;if(l==1&&v){b.style.styleFloat="none";b.style.cssFloat="none";}}else  if(b.tagName=="DIV"){if(window.showHelp&&!window.XMLHttpRequest)sp[i].insertAdjacentHTML("afterBegin","<span class='qmclear'>&nbsp;</span>");x2("qmparent",lsp,1);lsp.cdiv=b;b.idiv=lsp;if(qm_n&&qm_v<8&&!b.style.width)b.style.width=b.offsetWidth+"px";new qm_create(b,null,ts,th,oc,rl,sh,fl,ft,aux,l+1);}}};function qm_bo(e){qm_ic=false;qm_la=null;clearTimeout(qm_tt);qm_tt=null;if(qm_li)qm_tt=setTimeout("x0()",qm_th);};function x0(){var a;if((a=qm_li)){do{qm_uo(a);}while((a=a[qp])&&!qm_a(a))}qm_li=null;};function qm_a(a){if(a[qc].indexOf("qmmc")+1)return 1;};function qm_uo(a,go){if(!go&&a.qmtree)return;if(window.qmad&&qmad.bhide)eval(qmad.bhide);a.style.visibility="";x2("qmactive",a.idiv);};;function qa(a,b){return String.fromCharCode(a.charCodeAt(0)-(b-(parseInt(b/2)*2)));};function qm_oo(e,o,nt){if(!o)o=this;if(qm_la==o&&!nt)return;if(window.qmv_a&&!nt)qmv_a(o);if(window.qmwait){qm_kille(e);return;}clearTimeout(qm_tt);qm_tt=null;qm_la=o;if(!nt&&o.qmts){qm_si=o;qm_tt=setTimeout("qm_oo(new Object(),qm_si,1)",o.qmts);return;}var a=o;if(a[qp].isrun){qm_kille(e);return;}if(qm_ib&&!qm_ic)return;var go=true;while((a=a[qp])&&!qm_a(a)){if(a==qm_li)go=false;}if(qm_li&&go){a=o;if((!a.cdiv)||(a.cdiv&&a.cdiv!=qm_li))qm_uo(qm_li);a=qm_li;while((a=a[qp])&&!qm_a(a)){if(a!=o[qp]&&a!=o.cdiv)qm_uo(a);else break;}}var b=o;var c=o.cdiv;if(b.cdiv){var aw=b.offsetWidth;var ah=b.offsetHeight;var ax=b.offsetLeft;var ay=b.offsetTop;if(c[qp].ch){aw=0;if(c.fl)ax=0;}else {if(c.ft)ay=0;if(c.rl){ax=ax-c.offsetWidth;aw=0;}ah=0;}if(qm_o){ax-=b[qp].clientLeft;ay-=b[qp].clientTop;}if(qm_s2&&!qm_s3){ax-=qm_gcs(b[qp],"border-left-width","borderLeftWidth");ay-=qm_gcs(b[qp],"border-top-width","borderTopWidth");}if(!c.ismove){c.style.left=(ax+aw)+"px";c.style.top=(ay+ah)+"px";}x2("qmactive",o,1);if(window.qmad&&qmad.bvis)eval(qmad.bvis);c.style.visibility="inherit";qm_li=c;}else  if(!qm_a(b[qp]))qm_li=b[qp];else qm_li=null;qm_kille(e);};function qm_gcs(obj,sname,jname){var v;if(document.defaultView&&document.defaultView.getComputedStyle)v=document.defaultView.getComputedStyle(obj,null).getPropertyValue(sname);else  if(obj.currentStyle)v=obj.currentStyle[jname];if(v&&!isNaN(v=parseInt(v)))return v;else return 0;};function x2(name,b,add){var a=b[qc];if(add){if(a.indexOf(name)==-1)b[qc]+=(a?' ':'')+name;}else {b[qc]=a.replace(" "+name,"");b[qc]=b[qc].replace(name,"");}};function qm_kille(e){if(!e)e=event;e.cancelBubble=true;if(e.stopPropagation&&!(qm_s&&e.type=="click"))e.stopPropagation();};function qm_pure(sd){if(sd.tagName=="UL"){var nd=document.createElement("DIV");nd.qmpure=1;var c;if(c=sd.style.cssText)nd.style.cssText=c;qm_convert(sd,nd);var csp=document.createElement("SPAN");csp.className="qmclear";csp.innerHTML="&nbsp;";nd.appendChild(csp);sd=sd[qp].replaceChild(nd,sd);sd=nd;}return sd;};function qm_convert(a,bm,l){if(!l)bm[qc]=a[qc];bm.id=a.id;var ch=a.childNodes;for(var i=0;i<ch.length;i++){if(ch[i].tagName=="LI"){var sh=ch[i].childNodes;for(var j=0;j<sh.length;j++){if(sh[j]&&(sh[j].tagName=="A"||sh[j].tagName=="SPAN"))bm.appendChild(ch[i].removeChild(sh[j]));if(sh[j]&&sh[j].tagName=="UL"){var na=document.createElement("DIV");var c;if(c=sh[j].style.cssText)na.style.cssText=c;if(c=sh[j].className)na.className=c;na=bm.appendChild(na);new qm_convert(sh[j],na,1)}}}}}/* ]]> */</script>

<!-- Add-On Core Code (Remove when not using any add-on's) -->
<style type="text/css">.qmfv{visibility:visible !important;}.qmfh{visibility:hidden !important;}</style><script type="text/JavaScript">var qmad = new Object();qmad.bvis="";qmad.bhide="";</script>


	<!-- Add-On Settings -->
	<script type="text/JavaScript">

		/*******  Menu 0 Add-On Settings *******/
		var a = qmad.qm0 = new Object();

		// Item Bullets (CSS - Imageless) Add On
		a.ibcss_apply_to = "parent";
		a.ibcss_main_type = "arrow";
		a.ibcss_main_direction = "right";
		a.ibcss_main_size = 5;
		a.ibcss_main_bg_color = "#bbbbbb";
		a.ibcss_main_bg_color_hover = "#bbbbbb";
		a.ibcss_main_bg_color_active = "#bbbbbb";
		a.ibcss_main_border_color_active = "#dd3300";
		a.ibcss_main_position_x = -9;
		a.ibcss_main_position_y = -3;
		a.ibcss_main_align_x = "left";
		a.ibcss_main_align_y = "middle";
		a.ibcss_sub_type = "arrow-v";
		a.ibcss_sub_direction = "right";
		a.ibcss_sub_size = 3;
		a.ibcss_sub_border_color = "#797979";
		a.ibcss_sub_border_color_hover = "#222222";
		a.ibcss_sub_border_color_active = "#000000";
		a.ibcss_sub_position_x = -8;
		a.ibcss_sub_position_y = -1;
		a.ibcss_sub_align_x = "left";
		a.ibcss_sub_align_y = "middle";

		// Tree Menu Add On
		a.tree_enabled = true;
		a.tree_sub_sub_indent = 12;
		a.tree_hide_focus_box = true;
		a.tree_auto_collapse = true;
		a.tree_expand_animation = 2;
		a.tree_expand_step_size = 8;
		a.tree_collapse_animation = 3;
		a.tree_collapse_step_size = 15;

	</script>

<!-- Add-On Code: Tree Menu -->
<script type="text/javascript">/* <![CDATA[ */qmad.br_navigator=navigator.userAgent.indexOf("Netscape")+1;qmad.br_version=parseFloat(navigator.vendorSub);qmad.br_oldnav=qmad.br_navigator&&qmad.br_version<7.1;qmad.tree=new Object();if(qmad.bvis.indexOf("qm_tree_item_click(b.cdiv);")==-1){qmad.bvis+="qm_tree_item_click(b.cdiv);";qm_tree_init_styles();}if(window.attachEvent)window.attachEvent("onload",qm_tree_init);else  if(window.addEventListener)window.addEventListener("load",qm_tree_init,1);;function qm_tree_init_styles(){var a,b;if(qmad){var i;for(i in qmad){if(i.indexOf("qm")!=0||i.indexOf("qmv")+1)continue;var ss=qmad[i];if(ss.tree_width)ss.tree_enabled=true;if(ss&&ss.tree_enabled){var az="";if(window.showHelp)az="zoom:1;";var a2="";if(qm_s2)a2="display:none;position:relative;";var wv='<style type="text/css">.qmistreestyles'+i+'{} #'+i+'{position:relative !important;} #'+i+' a{float:none !important;white-space:normal !important;position:static !important}#'+i+' div{width:auto !important;left:0px !important;top:0px !important;overflow:hidden !important;'+a2+az+'border-top-width:0px !important;border-bottom-width:0px !important;margin-left:0px !important;margin-top:0px !important;}';if(ss.tree_sub_sub_indent)wv+='#'+i+' div div{padding-left:'+ss.tree_sub_sub_indent+'px}';document.write(wv+'</style>');}}}};function qm_tree_init(event,spec){var q=qmad.tree;var a,b;var i;for(i in qmad){if(i.indexOf("qm")!=0||i.indexOf("qmv")+1||i.indexOf("qms")+1||(!isNaN(spec)&&spec!=i))continue;var ss=qmad[i];if(ss&&ss.tree_enabled){q.estep=ss.tree_expand_step_size;if(!q.estep)q.estep=1;q.cstep=ss.tree_collapse_step_size;if(!q.cstep)q.cstep=1;q.acollapse=ss.tree_auto_collapse;q.no_focus=ss.tree_hide_focus_box;q.etype=ss.tree_expand_animation;if(q.etype)q.etype=parseInt(q.etype);if(!q.etype)q.etype=0;q.ctype=ss.tree_collapse_animation;if(q.ctype)q.ctype=parseInt(q.ctype);if(!q.ctype)q.ctype=0;if(qmad.br_oldnav){q.etype=0;q.ctype=0;}qm_tree_init_items(document.getElementById(i));}i++;}};function qm_tree_init_items(a,sub){var w,b;var q=qmad.tree;var aa;aa=a.childNodes;for(var j=0;j<aa.length;j++){if(aa[j].tagName=="A"){if(aa[j].cdiv){aa[j].cdiv.ismove=1;aa[j].cdiv.qmtree=1;}if(!aa[j].onclick){aa[j].onclick=aa[j].onmouseover;aa[j].onmouseover=null;}if(q.no_focus){aa[j].onfocus=function(){this.blur();};}if(aa[j].cdiv)new qm_tree_init_items(aa[j].cdiv,1);if(aa[j].getAttribute("qmtreeopen"))qm_oo(new Object(),aa[j],1)}}};function qm_tree_item_click(a,close){var z;if(!a.qmtree&&!((z=window.qmv)&&z.loaded)){var id=qm_get_menu(a).id;if(window.qmad&&qmad[id]&&qmad[id].tree_enabled)x2("qmfh",a,1);return;}if((z=window.qmv)&&(z=z.addons)&&(z=z.tree_menu)&&!z["on"+qm_index(a)])return;x2("qmfh",a);var q=qmad.tree;if(q.timer)return;qm_la=null;q.co=new Object();var levid="a"+qm_get_level(a);var ex=false;var cx=false;if(q.acollapse){var mobj=qm_get_menu(a);var ds=mobj.getElementsByTagName("DIV");for(var i=0;i<ds.length;i++){if(ds[i].style.position=="relative"&&ds[i]!=a){var go=true;var cp=a[qp];while(!qm_a(cp)){if(ds[i]==cp)go=false;cp=cp[qp];}if(go){cx=true;q.co["a"+i]=ds[i];qm_uo(ds[i],1);}}}}if(a.style.position=="relative"){cx=true;q.co["b"]=a;var d=a.getElementsByTagName("DIV");for(var i=0;i<d.length;i++){if(d[i].style.position=="relative"){q.co["b"+i]=d[i];qm_uo(d[i],1);}}a.qmtreecollapse=1;qm_uo(a,1);if(window.qm_ibullets_hover)qm_ibullets_hover(null,a.idiv);}else {ex=true;if(qm_s2)a.style.display="block";a.style.position="relative";q.eh=a.offsetHeight;a.style.height="0px";x2("qmfv",a,1);x2("qmfh",a);a.qmtreecollapse=0;q.eo=a;}qmwait=true;qm_tree_item_expand(ex,cx,levid);};function qm_tree_item_expand(expand,collapse,levid){var q=qmad.tree;var go=false;var cs=1;if(collapse){for(var i in q.co){if(!q.co[i].style.height&&q.co[i].style.position=="relative"){q.co[i].style.height=(q.co[i].offsetHeight)+"px";q.co[i].qmtreeht=parseInt(q.co[i].style.height);}cs=parseInt((q.co[i].offsetHeight/parseInt(q.co[i].qmtreeht))*q.cstep);if(q.ctype==1)cs=q.cstep-cs+1;else  if(q.ctype==2)cs=cs+1;else  if(q.ctype==3)cs=q.cstep;if(q.ctype&&parseInt(q.co[i].style.height)-cs>0){q.co[i].style.height=parseInt(q.co[i].style.height)-cs+"px";go=true;}else {q.co[i].style.height="";q.co[i].style.position="";if(qm_s2)q.co[i].style.display="";x2("qmfh",q.co[i],1);x2("qmfv",q.co[i]);}}}if(expand){cs=parseInt((q.eo.offsetHeight/q.eh)*q.estep);if(q.etype==2)cs=q.estep-cs;else  if(q.etype==1)cs=cs+1;else  if(q.etype==3)cs=q.estep;if(q.etype&&q.eo.offsetHeight<(q.eh-cs)){q.eo.style.height=parseInt(q.eo.style.height)+cs+"px";go=true;if(window.qmv_position_pointer)qmv_position_pointer();}else {q.eo.qmtreeh=q.eo.style.height;q.eo.style.height="";if(window.qmv_position_pointer)qmv_position_pointer();}}if(go){q.timer=setTimeout("qm_tree_item_expand("+expand+","+collapse+",'"+levid+"')",10);}else {qmwait=false;q.timer=null;}};function qm_get_level(a){lev=0;while(!qm_a(a)&&(a=a[qp]))lev++;return lev;};function qm_get_menu(a){while(!qm_a(a)&&(a=a[qp]))continue;return a;}/* ]]> */</script>

<!-- Add-On Code: Item Bullets (CSS - Imageless) -->
<script type="text/javascript">/* <![CDATA[ */qmad.br_navigator=navigator.userAgent.indexOf("Netscape")+1;qmad.br_version=parseFloat(navigator.vendorSub);qmad.br_oldnav6=qmad.br_navigator&&qmad.br_version<7;qmad.br_strict=(dcm=document.compatMode)&&dcm=="CSS1Compat";qmad.br_ie=window.showHelp;qmad.str=(qmad.br_ie&&!qmad.br_strict);if(!qmad.br_oldnav6){if(!qmad.ibcss)qmad.ibcss=new Object();if(qmad.bvis.indexOf("qm_ibcss_active(o,false);")==-1){qmad.bvis+="qm_ibcss_active(o,false);";qmad.bhide+="qm_ibcss_active(a,1);";if(window.attachEvent)window.attachEvent("onload",qm_ibcss_init);else  if(window.addEventListener)window.addEventListener("load",qm_ibcss_init,1);if(window.attachEvent)document.attachEvent("onmouseover",qm_ibcss_hover_off);else  if(window.addEventListener)document.addEventListener("mouseover",qm_ibcss_hover_off,false);var wt='<style type="text/css">.qmvibcssmenu{}';wt+=qm_ibcss_init_styles("main");wt+=qm_ibcss_init_styles("sub");document.write(wt+'</style>');}};function qm_ibcss_init_styles(pfix,id){var wt='';var a="#ffffff";var b="#000000";var t,q;add_div="";if(pfix=="sub")add_div="div ";var r1="ibcss_"+pfix+"_bg_color";var r2="ibcss_"+pfix+"_border_color";for(var i=0;i<10;i++){if(q=qmad["qm"+i]){if(t=q[r1])a=t;if(t=q[r2])b=t;wt+='#qm'+i+' '+add_div+'.qm-ibcss-static span{background-color:'+a+';border-color:'+b+';}';if(t=q[r1+"_hover"])a=t;if(t=q[r2+"_hover"])b=t;wt+='#qm'+i+'  '+add_div+'.qm-ibcss-hover span{background-color:'+a+';border-color:'+b+';}';if(t=q[r1+"_active"])a=t;if(t=q[r2+"_active"])b=t;wt+='#qm'+i+'  '+add_div+'.qm-ibcss-active span{background-color:'+a+';border-color:'+b+';}';}}return wt;};function qm_ibcss_init(e,spec){var z;if((z=window.qmv)&&(z=z.addons)&&(z=z.ibcss)&&(!z["on"+qmv.id]&&z["on"+qmv.id]!=undefined&&z["on"+qmv.id]!=null))return;qm_ts=1;var q=qmad.ibcss;var a,b,r,sx,sy;z=window.qmv;for(i=0;i<10;i++){if(!(a=document.getElementById("qm"+i))||(!isNaN(spec)&&spec!=i))continue;var ss=qmad[a.id];if(ss&&(ss.ibcss_main_type||ss.ibcss_sub_type)){q.mtype=ss.ibcss_main_type;q.msize=ss.ibcss_main_size;if(!q.msize)q.msize=5;q.md=ss.ibcss_main_direction;if(!q.md)md="right";q.mbg=ss.ibcss_main_bg_color;q.mborder=ss.ibcss_main_border_color;sx=ss.ibcss_main_position_x;sy=ss.ibcss_main_position_y;if(!sx)sx=0;if(!sy)sy=0;q.mpos=eval("new Array('"+sx+"','"+sy+"')");q.malign=eval("new Array('"+ss.ibcss_main_align_x+"','"+ss.ibcss_main_align_y+"')");r=q.malign;if(!r[0])r[0]="right";if(!r[1])r[1]="center";q.stype=ss.ibcss_sub_type;q.ssize=ss.ibcss_sub_size;if(!q.ssize)q.ssize=5;q.sd=ss.ibcss_sub_direction;if(!q.sd)sd="right";q.sbg=ss.ibcss_sub_bg_color;q.sborder=ss.ibcss_sub_border_color;sx=ss.ibcss_sub_position_x;sy=ss.ibcss_sub_position_y;if(!sx)sx=0;if(!sy)sy=0;q.spos=eval("new Array('"+sx+"','"+sy+"')");q.salign=eval("new Array('"+ss.ibcss_sub_align_x+"','"+ss.ibcss_sub_align_y+"')");r=q.salign;if(!r[0])r[0]="right";if(!r[1])r[1]="middle";q.type=ss.ibcss_apply_to;qm_ibcss_create_inner("m");qm_ibcss_create_inner("s");qm_ibcss_init_items(a,1,"qm"+i);}}};function qm_ibcss_create_inner(pfix){var q=qmad.ibcss;var wt="";var s=q[pfix+"size"];var type=q[pfix+"type"];var head;if(type.indexOf("head")+1)head=true;var gap;if(type.indexOf("gap")+1)gap=true;var v;if(type.indexOf("-v")+1)v=true;if(type.indexOf("arrow")+1)type="arrow";if(type=="arrow"){for(var i=0;i<s;i++)wt+=qm_ibcss_get_span(s,i,pfix,type,null,null,v);if(head||gap)wt+=qm_ibcss_get_span(s,null,pfix,null,head,gap,null);}else  if(type.indexOf("square")+1){var inner;if(type.indexOf("-inner")+1)inner=true;var raised;if(type.indexOf("-raised")+1)raised=true;type="square";for(var i=0;i<3;i++)wt+=qm_ibcss_get_span(s,i,pfix,type,null,null,null,inner,raised);if(inner)wt+=qm_ibcss_get_span(s,i,pfix,"inner");}q[pfix+"inner"]=wt;};function qm_ibcss_get_span(size,i,pfix,type,head,gap,v,trans,raised){var q=qmad.ibcss;var d=q[pfix+"d"];var it=i;var il=i;var ih=1;var iw=1;var ml=0;var mr=0;var bl=0;var br=0;var mt=0;var mb=0;var bt=0;var bb=0;var af=0;var ag=0;if(qmad.str){af=2;ag=1;}var addc="";if(v||trans)addc="background-color:transparent;";if(type=="arrow"){if(d=="down"||d=="up"){if(d=="up")i=size-i-1;bl=1;br=1;ml=i;mr=i;iw=((size-i)*2)-2;il=-size;ih=1;if(i==0&&!v){bl=iw+2;br=0;ml=0;mr=0;iw=0;if(qmad.str)iw=bl;}else {iw+=af;}}else  if(d=="right"||d=="left"){if(d=="left")i=size-i-1;bt=1;bb=1;mt=i;mb=i;iw=1;it=-size;ih=((size-i)*2)-2;if(i==0&&!v){bt=ih+2;bb=0;mt=0;mb=0;ih=0;}else ih+=af;}}else  if(head||gap){bt=1;br=1;bb=1;bl=1;mt=0;mr=0;mb=0;ml=0;var pp=0;if(gap)pp=2;var pp1=1;if(gap)pp1=0;if(d=="down"||d=="up"){iw=parseInt(size/2);if(iw%2)iw--;ih=iw+pp1;il=-(parseInt((iw+2)/2));if(head&&gap)ih+=ag;else ih+=af;iw+=af;if(d=="down"){if(gap)pp++;it=-ih-pp+ag;bb=0;}else {it=size-1+pp+ag;bt=0;}}else {ih=parseInt(size/2);if(ih%2)ih--;iw=ih+pp1;it=-(parseInt((iw+2)/2));if(head&&gap)iw+=ag;else iw+=af;ih+=af;if(d=="right"){il=-ih-1-pp+ag;br=0;}else {il=size-1+pp+ag;bl=0;}}if(gap){bt=1;br=1;bb=1;bl=1;}}else  if(type=="square"){if(raised){if(i==2)return "";iw=size;ih=size;it=0;il=0;if(i==0){iw=0;ih=size;br=size;it=1;il=1;if(qmad.str)iw=br;}}else {if(size%2)size++;it=1;ih=size;iw=size;bl=1;br=1;il=0;iw+=af;if(i==0||i==2){ml=1;it=0;ih=1;bl=size;br=0;iw=0;if(qmad.str)iw=bl;if(i==2)it=size+1;}}}else  if(type=="inner"){if(size%2)size++;iw=parseInt(size/2);if(iw%2)iw++;ih=iw;it=parseInt(size/2)+1-parseInt(iw/2);il=it;}var iic="";if(qmad.str)iic="&nbsp;";return '<span style="'+addc+'border-width:'+bt+'px '+br+'px '+bb+'px '+bl+'px;border-style:solid;display:block;position:absolute;overflow:hidden;font-size:1px;line-height:0px;height:'+ih+'px;margin:'+mt+'px '+mr+'px '+mb+'px '+ml+'px;width:'+iw+'px;top:'+it+'px;left:'+il+'px;">'+iic+'</span>';};function qm_ibcss_init_items(a,main){var q=qmad.ibcss;var aa,pf;aa=a.childNodes;for(var j=0;j<aa.length;j++){if(aa[j].tagName=="A"){if(window.attachEvent)aa[j].attachEvent("onmouseover",qm_ibcss_hover);else  if(window.addEventListener)aa[j].addEventListener("mouseover",qm_ibcss_hover,false);var skip=false;if(q.type!="all"){if(q.type=="parent"&&!aa[j].cdiv)skip=true;if(q.type=="non-parent"&&aa[j].cdiv)skip=true;}if(!skip){if(main)pf="m";else pf="s";var ss=document.createElement("SPAN");ss.className="qm-ibcss-static";var s1=ss.style;s1.display="block";s1.position="relative";s1.fontSize="1px";s1.lineHeight="0px";s1.zIndex=1;ss.ibhalign=q[pf+"align"][0];ss.ibvalign=q[pf+"align"][1];ss.ibposx=q[pf+"pos"][0];ss.ibposy=q[pf+"pos"][1];ss.ibsize=q[pf+"size"];qm_ibcss_position(aa[j],ss);ss.innerHTML=q[pf+"inner"];aa[j].qmibulletcss=aa[j].insertBefore(ss,aa[j].firstChild);ss.setAttribute("qmvbefore",1);ss.setAttribute("isibulletcss",1);if(aa[j].className.indexOf("qmactive")+1)qm_ibcss_active(aa[j]);}if(aa[j].cdiv)new qm_ibcss_init_items(aa[j].cdiv,null);}}};function qm_ibcss_position(a,b){if(b.ibhalign=="right")b.style.left=(a.offsetWidth+parseInt(b.ibposx)-b.ibsize)+"px";else  if(b.ibhalign=="center")b.style.left=(parseInt(a.offsetWidth/2)-parseInt(b.ibsize/2)+parseInt(b.ibposx))+"px";else b.style.left=b.ibposx+"px";if(b.ibvalign=="bottom")b.style.top=(a.offsetHeight+parseInt(b.ibposy)-b.ibsize)+"px";else  if(b.ibvalign=="middle")b.style.top=parseInt((a.offsetHeight/2)-parseInt(b.ibsize/2)+parseInt(b.ibposy))+"px";else b.style.top=b.ibposy+"px";};function qm_ibcss_hover(e,targ){e=e||window.event;if(!targ){var targ=e.srcElement||e.target;while(targ.tagName!="A")targ=targ[qp];}var ch=qmad.ibcss.lasth;if(ch&&ch!=targ&&ch.qmibulletcss)qm_ibcss_hover_off(new Object(),ch);if(targ.className.indexOf("qmactive")+1)return;var wo=targ.qmibulletcss;if(wo){x2("qm-ibcss-hover",wo,1);qmad.ibcss.lasth=targ;}if(e)qm_kille(e);};function qm_ibcss_hover_off(e,o){if(!o)o=qmad.ibcss.lasth;if(o&&o.qmibulletcss)x2("qm-ibcss-hover",o.qmibulletcss);};function qm_ibcss_active(a,hide){if(!hide&&a.className.indexOf("qmactive")==-1)return;if(hide&&a.idiv){var o=a.idiv;if(o&&o.qmibulletcss){x2("qm-ibcss-active",o.qmibulletcss);}}else {if(!a.cdiv.offsetWidth)a.cdiv.style.visibility="inherit";qm_ibcss_wait_relative(a);var wo=a.qmibulletcss;if(wo)x2("qm-ibcss-active",wo,1);}};function qm_ibcss_wait_relative(a){if(!a)a=qmad.ibcss.cura;if(a.cdiv){if(a.cdiv.qmtree&&a.cdiv.style.position!="relative"){qmad.ibcss.cura=a;setTimeout("qm_ibcss_wait_relative()",10);return;}var aa=a.cdiv.childNodes;for(var i=0;i<aa.length;i++){if(aa[i].tagName=="A"&&aa[i].qmibulletcss)qm_ibcss_position(aa[i],aa[i].qmibulletcss);}}}/* ]]> */</script>

<!-- Add-On Code: Show Select Containers On Load -->
<script type="text/javascript">/* <![CDATA[ */if(!qmad.sopen){qmad.sopen=new Object();qmad.sopen.log=new Array();if(window.attachEvent)window.attachEvent("onload",qm_sopen_init);else  if(window.addEventListener)window.addEventListener("load",qm_sopen_init,1);};function qm_sopen_init(e,go){if(window.qmv)return;if(!go){setTimeout("qm_sopen_init(null,1)",10);return;}var i;var ql=qmad.sopen.log;for(i=0;i<10;i++){var a;if(a=document.getElementById("qm"+i)){var dd=a.getElementsByTagName("DIV");for(var j=0;j<dd.length;j++){if(dd[j].idiv.className.indexOf("qm-startopen")+1){ql.push(dd[j].idiv);var f=dd[j][qp];if(!qm_a(f)){var b=false;for(var k=0;k<ql.length;k++){if(ql[k]==f.idiv)ql[k]=null;}ql.push(f.idiv);f=f[qp];}}}}}var se=0;var sc=0;if(qmad.tree){se=qmad.tree.etype;sc=qmad.tree.ctype;qmad.tree.etype=0;qmad.tree.ctype=0;}for(i=ql.length-1;i>=0;i--){if(ql[i]){qm_oo(new Object(),ql[i],1);qm_li=null;}}if(qmad.tree){qmad.tree.etype=se;qmad.tree.ctype=sc;}}/* ]]> */</script>

</head>

<body style="margin:40px;background-color:#ffffff;"><noscript>
</noscript>

<!--Open Visual Interface Button
<a style="font-size:13px;color:#444444;font-family:arial;text-decoration:none;display:block;margin-bottom:25px;" id="qmv_open_visual_interface" href="javascript:javascript:if (qm_s3){window.name='qm_launch_visual';window.location = window.location.href;}else{var qmnw = window.open(window.location.href,'qm_launch_visual','scrollbars=no,location=no,status=yes,menu=no,toolbar=no,resizable=yes');if (window.focus) {qmnw.focus()}}"><span style="color:#dd3300;">[+]</span> Open Visual Interface</a>

-->


<!-- MyCSSMenu Structure [Menu 0] -->

<ul id="qm0" class="qmmc">

	<li><a class="qm-startopen qmparent" href="javascript:void(0)">DENSE matrix</a>
        <ul>
          <li><a class="qmparent" href="javascript:void(0)">Matrix manipulation</a>
              <ul>
                <li><a href="dense.php">Browse...</a></li>
                <li><a href="denseel.php">Element by element</a></li>
                <li><a href="densetex.php">Textarea</a></li>
              </ul>
          </li>
          <li><a class="qmparent" href="javascript:void(0)">MP inverse</a>
              <ul>
                <li><a href="densemp.php">Browse...</a></li>
                <li><a href="densempel.php">Element by element</a></li>
                <li><a href="densemptex.php">Textarea</a></li>
              </ul>
          </li>
          <li><a href="javascript:void(0)">Weighted MP inverse</a>
              <ul>
                <li><a href="densew.php">Browse...</a></li>
                <li><a href="javascript:void(0)">Element by element</a></li>
                <li><a href="densewtex.php">Textare</a></li>
              </ul>
          </li>
        </ul>
	  </li>
	<li><a class="qmparent" href="javascript:void(0)">SPARSE matrix</a>
        <ul>
          <li><a class="qmparent" href="javascript:void(0)">Matrix manipulation</a>
              <ul>
                <li><a href="dense.php">Browse...</a></li>
                <li><a href="denseel.php">Element by element</a></li>
                <li><a href="densetex.php">Textarea</a></li>
              </ul>
          </li>
          <li><a class="qmparent" href="javascript:void(0)">MP inverse</a>
              <ul>
                <li><a href="densemp.php">Browse...</a></li>
                <li><a href="densempel.php">Element by element</a></li>
                <li><a href="densemptex.php">Textarea</a></li>
              </ul>
          </li>
          <li><a href="javascript:void(0)">Weighted MP inverse</a>
              <ul>
                <li><a href="densew.php">Browse...</a></li>
                <li><a href="javascript:void(0)">Element by element</a></li>
                <li><a href="densewtex.php">Textare</a></li>
              </ul>
          </li>
        </ul>
	  </li>
	<li><a class="qmparent" href="javascript:void(0)">TEST examples</a>
        <ul>
          <li><a href="examples3.php">Matrix algebra</a></li>
          <li><a href="examplesmp.php">MP inverse</a></li>
          <li><a href="examplesw.php">Weighted MP inverse</a></li>
          </ul>
	  </li>
	</ul>

<!-- Create Menu Settings: (Menu ID, Is Vertical, Show Timer, Hide Timer, On Click ('all' or 'lev2'), Right to Left, Horizontal Subs, Flush Left, Flush Top) -->
<script type="text/javascript">qm_create(0,false,0,500,'all',false,false,false,false);</script>


<!-- This script references optionally loads the MyCSSMenu visual interface, to run the menu stand alone remove the script.-->
<script type="text/javascript">if (window.name=="qm_launch_visual"){document.write('<scr'+'ipt type="text/javascript" src="http://www.mycssmenu.com/qmv6/qm_visual.js"></scr'+'ipt>')}</script><p>&nbsp;</p>
                    <p>&nbsp;</p></td>
                </tr>
                <tr>
                  <td height="21" class="style2">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
          <td width="100%" align="left" valign="top"><table width=100% border=0 align="left">
            <tr>
              <td width=1% height="635" rowspan="3" align=left valign=top><p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><br>
                  <img src="images/fadeup.gif" width="1" height="92"></p>
                <p><img src="images/fadedn_bluethin.gif" width="1" height="200"></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
              <td width=99% height="164" align=left valign=top><h1 align="left" class="style3"><br>
                The Matrix Library<span class="style26"><br>
              </span></h1>
                <h3 align="left" class="style31">Matrix algebra: matrix product, determinants, <br>
                  inverses, pawers of matrices, arithmetic, MP and 
                    <br>
                    Weighted invers</h3>                
                </td>
            </tr>
            <tr>
              <td height="3" align=left valign=top><img src="images/linel.gif" width="200" height="1"></td>
            </tr>
            <tr>
              <td height="367" align=left valign=top><table width="100%" align="left">
                <tr>
                  <td align="left" valign="top"><div align="left">
<?php 
if($idA==null) $idA=0;
if($idB==null) $idB=0;
$db_link = db_connect();
// moze i set_time_limit (500)
ini_set(max_execution_time, "500");
$m=$m1;
$n=$n1;
function arithmetic($idA,$idB,$m,$n,$m2,$n2,$arithmetic,$r,$s){
	echo '<span class="style21">Arithmetic...</span>';
	echo "<br>";
	
	$query = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$arithmetic'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row[1]!=NULL){
	//ima resenje prikazi ga iz baze
		//echo "<br>";
		//echo '<span class="style1">The solution is ...</span>';
		echo "<br>";
		echo "<br>";
		//$resenje = explode(",",$row["ELEMENTS"]);
		$resenje = $row["ELEMENTS"];
		//prikaz_resenja($resenje,$m,$n);	
		prikaz_resenja_textarea($resenje,$m,$n);
	}
	else{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		if($arithmetic=="sum"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m,$n);
			$resenje_prikaz = SumaMatrices($matrixad,$matrixbd);
			$x=$m;$y=$n;
		}
		elseif($arithmetic=="A-B"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m,$n);
			$resenje_prikaz = RestaMatrices($matrixad,$matrixbd);
			$x=$m;$y=$n;
		}
		elseif($arithmetic=="B-A"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m,$n);
			$resenje_prikaz = RestaMatrices($matrixbd,$matrixad);
			$x=$m;$y=$n;
		}
		elseif($arithmetic=="rA"){
			$matrixad= makeDvodim($idA,$m,$n);
			$resenje_prikaz = ScalarMatriz($matrixad,$r);
			$idB=null;$x=$m;$y=$n;
		}
		elseif($arithmetic=="sB"){
			$matrixbd= makeDvodim($idB,$m2,$n2);	
			$resenje_prikaz = ScalarMatriz($matrixbd,$s);
			$idA=null;$x=$m2;$y=$n2;
			//print_r($resenje_prikaz);
		}
		elseif($arithmetic=="rAsumsB"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje_prikaza = ScalarMatriz($matrixad,$r);
			$resenje_prikazb = ScalarMatriz($matrixbd,$s);
			$resenje_prikaz=SumaMatrices($resenje_prikaza,$resenje_prikazb);
			$x=$m;$y=$n;
		}
		// unesi u bazu
		$p=0;
		$q=0;
		unos_matrice2($resenje_prikaz,$x,$y,$idA,$idB,$arithmetic,$r,$s,$p,$q);
		$resenje=makeJeddim($resenje_prikaz,$x,$y);
		//print_r($resenje_prikaz);
		//prikaz
		echo "<br>";
		echo "<br>";
		//echo $resenje;
		prikaz_kad_nema($resenje,$x,$y);

	if($idA!=null and $idB==null)
	{createXML($x,$y,$idA,$resenje_prikaz);$fajl = $idA . ".xml";}
	elseif($idA==null and $idB!=null)
	{createXML($x,$y,$idB,$resenje_prikaz);$fajl = $idB . ".xml";}
	else 
	{$idC= $idA . "." . $idB; createXML($x,$y,$idC,$resenje_prikaz);$fajl = $idA . "." . $idB . ".xml";}

		//print_r($resenje_prikaz);
	} 	
}

function powersa($powersa,$idA,$m,$n,$p,$q,$a_b){

	echo '<span class="style21">Powers of...</span>';
	echo "<br>";
	
	if($a_b==1)
		$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and OPERATION='$powersa'";
	else
		$query3 = "select * from MATRICES_OUT where KLJUCB='$idA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL){
	//ima resenje prikazi ga iz baze
		//echo "<br>";
		//echo '<span class="style1">The solution is ...</span>';
		echo "<br>";
		echo "<br>";
		//$resenje = explode(",",$row3["ELEMENTS"]);
		$resenje = $row3["ELEMENTS"];
		prikaz_resenja($resenje,$m,$n);	
		//print_r($row3["ELEMENTS"]);
	}
	else{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		if($a_b==1){
			if($powersa=="A^4.A"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<5;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A^3.A"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<4;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A^2.A"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<3;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A.A"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz = MultiplicacionMatrices($matrixad, $matrixad);
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="I.A"){
				$matrixad= makeDvodim($idA,$m,$n);
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A^-1.A"){
				$matrixad= makeDvodim($idA,$n,$n);
				$resenjeA = Grevile($matrixad);
				$resenje_prikaz = MultiplicacionMatrices($resenjeA, $matrixad);
				$idB=0;$m=$n;
				$p=0;$q=0;$r=0;$s=0;$z=$n;$w=$n;
				
			}
			elseif($powersa=="A^p.A^q"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<=$p;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$resenje_prikaz2=$matrixad;
				for($i=1;$i<=$q;$i++){
					$resenje_prikaz2 = MultiplicacionMatrices($resenje_prikaz2, $matrixad);
				}
				$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,$resenje_prikaz2);
				$idB=0;
				$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A.A^-1"){
				$matrixad= makeDvodim($idA,$m,$m);
				$resenjeA = Grevile($matrixad);
				$resenje_prikaz = MultiplicacionMatrices($matrixad,$resenjeA);
				$idB=0;$n=$m;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$m;
			}
			elseif($powersa=="I.A^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$matrixbd= makeDvodim($idB,$m2,$n2);
				$resenje_prikaza = ScalarMatriz($matrixad,$r);
				$resenje_prikazb = ScalarMatriz($matrixbd,$s);
				$resenje_prikaz=SumaMatrices($resenje_prikaza,$resenje_prikazb);
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A^-1.A^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenjeA = Grevile($matrixad);
				$resenje_prikaz = MultiplicacionMatrices($resenjeA,$resenjeA);
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$n;$w=$m;
			}
			elseif($powersa=="A^-2.A^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=Grevile($matrixad);
				for($i=1;$i<3;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,Grevile($matrixad));
				}
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A^-3.A^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=Grevile($matrixad);
				for($i=1;$i<4;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,Grevile($matrixad));
				}
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="A^-4.A^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=Grevile($matrixad);
				for($i=1;$i<5;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,Grevile($matrixad));
				}
				$idB=0;
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
		}
		else{
			//$pawersa=$powersb;
			if($powersa=="B^4.B"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<5;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B^3.B"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<4;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B^2.B"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<3;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B.B"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz = MultiplicacionMatrices($matrixad, $matrixad);
				$idA=0;
				$p=0;$q=0;$r=0;$s=0;
			}
			elseif($powersa=="I.B"){
				$matrixad= makeDvodim($idA,$m,$n);
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B^-1.B"){
				$matrixad= makeDvodim($idA,$n,$n);
				$resenjeA = Grevile($matrixad);
				$resenje_prikaz = MultiplicacionMatrices($resenjeA, $matrixad);
				$p=0;$q=0;$r=0;$s=0;$m=$n;$z=$n;$w=$n;
			}
			elseif($powersa=="B^p.B^q"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=$matrixad;
				for($i=1;$i<=$p;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
				}
				$resenje_prikaz2=$matrixad;
				for($i=1;$i<=$q;$i++){
					$resenje_prikaz2 = MultiplicacionMatrices($resenje_prikaz2, $matrixad);
				}
				$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,$resenje_prikaz2);
				$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B.B^-1"){
				$matrixad= makeDvodim($idA,$m,$m);
				$resenjeA = Grevile($matrixad);
				$resenje_prikaz = MultiplicacionMatrices($matrixad,$resenjeA);
				$p=0;$q=0;$r=0;$s=0;$n=$m;$z=$m;$w=$m;
			}
			elseif($powersa=="I.B^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$matrixbd= makeDvodim($idB,$m2,$n2);
				$resenje_prikaza = ScalarMatriz($matrixad,$r);
				$resenje_prikazb = ScalarMatriz($matrixbd,$s);
				$resenje_prikaz=SumaMatrices($resenje_prikaza,$resenje_prikazb);
				$p=0;$q=0;$r=0;$s=0;$z=$n;$w=$m;
			}
			elseif($powersa=="B^-1.B^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenjeA = Grevile($matrixad);
				$resenje_prikaz = MultiplicacionMatrices($resenjeA,$resenjeA);
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B^-2.B^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=Grevile($matrixad);
				for($i=1;$i<3;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,Grevile($matrixad));
				}
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B^-3.B^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=Grevile($matrixad);
				for($i=1;$i<4;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,Grevile($matrixad));
				}
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
			elseif($powersa=="B^-4.B^-1"){
				$matrixad= makeDvodim($idA,$m,$n);
				$resenje_prikaz=Grevile($matrixad);
				for($i=1;$i<5;$i++){
					$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,Grevile($matrixad));
				}
				$p=0;$q=0;$r=0;$s=0;$z=$m;$w=$n;
			}
		}
		// unesi u bazu
		if($a_b!=1){
			$idB=$idA;
			$idA=0;
			//echo $idB;
		}
		$r=0;
		$s=0;
		unos_matrice2($resenje_prikaz,$z,$w,$idA,$idB,$powersa,$r,$s,$p,$q);
		if($idA!=null and $idB==null)
	{createXML($z,$w,$idA,$resenje_prikaz);$fajl = $idA . ".xml";}
	elseif($idA==null and $idB!=null)
	{createXML($z,$w,$idB,$resenje_prikaz);$fajl = $idB . ".xml";}
	else 
	{$idC= $idA . "." . $idB; createXML($z,$w,$idC,$resenje_prikaz);$fajl = $idA . "." . $idB . ".xml";}
		echo "<br>";
		echo "<br>";
		$resenje=makeJeddim($resenje_prikaz,$z,$w);
		//print_r($resenje);
		//print_r($resenje_prikaz);
		//prikaz
		prikaz_kad_nema($resenje,$z,$w);
		//print_r($resenje_prikaz);
	}
}
function products($products,$idA,$idB,$m,$n,$m2,$n2,$p,$q){

	echo '<span class="style21">Matrices product...</span>';
	echo "<br>";
	$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL){
		//echo "<br>";
		//echo '<span class="style1">The solution is ...</span>';
		echo "<br>";
		echo "<br>";
		$dim=$row3["DIMENSION"];
		$dim=explode('x',$dim);
		$m=$dim[0];
		$n=$dim[1];
		$resenje = $row3["ELEMENTS"];
		//$resenje = explode(",",$row3["ELEMENTS"]);
		prikaz_resenja($resenje,$m,$n);
		//echo $m;
	}
	else{
		if($products=="A.B"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenje_prikaz = MultiplicacionMatrices($matrixad,$matrixbd);	
			$p=0;$q=0;$r=0;$s=0;$x=$m;$y=$n2;$z=$m;$w=$n2;
		}
		elseif($products=="B.A"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenje_prikaz = MultiplicacionMatrices($matrixbd,$matrixad);	
			$p=0;$q=0;$r=0;$s=0;$x=$m2;$y=$n;$z=$m2;$w=$n;
		}
		elseif($products=="B^-1.A^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenjeA = Grevile($matrixad);
			$resenjeB = Grevile($matrixbd);
			$resenje_prikaz = MultiplicacionMatrices($resenjeB, $resenjeA);
			$p=0;$q=0;$r=0;$s=0;$x=$n2;$y=$m;$z=$n2;$w=$m;
		}
		elseif($products=="A^-1.B^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenjeA = Grevile($matrixad);
			$resenjeB = Grevile($matrixbd);
			$resenje_prikaz = MultiplicacionMatrices($resenjeA,$resenjeB);
			$p=0;$q=0;$r=0;$s=0;$x=$n;$y=$m2;$z=$n;$w=$m2;
		}
		elseif($products=="A^-1.B"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenjeA = Grevile($matrixad);
			$resenje_prikaz = MultiplicacionMatrices($resenjeA,$matrixbd);
			$p=0;$q=0;$r=0;$s=0;$x=$n;$y=$n2;$m=$n;$n=$n2;$z=$n;$w=$n2;
		}
		elseif($products=="A.B^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenjeB = Grevile($matrixbd);
			$resenje_prikaz = MultiplicacionMatrices($matrixad,$resenjeB);
			$p=0;$q=0;$r=0;$s=0;$x=$m;$y=$m2;$z=$m;$w=$m2;
		}
		elseif($products=="B.A^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenjeA = Grevile($matrixad);
			$resenje_prikaz = MultiplicacionMatrices($matrixbd,$resenjeA);
			$p=0;$q=0;$r=0;$s=0;$x=$m2;$y=$m;$z=$m2;$w=$m;
		}
		elseif($products=="B^-1.A"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenjeB = Grevile($matrixbd);
			$resenje_prikaz = MultiplicacionMatrices($resenjeB,$matrixad);
			//print_r($resenje_prikaz);
			$p=0;$q=0;$r=0;$s=0;$x=$n;$y=$n2;$m=$n;$n=$m;$z=$n2;$w=$n;
		}
		elseif($products=="A^p.B^q"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje_prikaz=$matrixad;
			for($i=1;$i<=$p;$i++){
				$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
			}
			$resenje_prikaz2=$matrixbd;
			for($i=1;$i<=$q;$i++){
				$resenje_prikaz2 = MultiplicacionMatrices($resenje_prikaz2, $matrixbd);
			}
			$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,$resenje_prikaz2);
			$r=0;$s=0;$x=$m;$y=$m2;$z=$m;$w=$n;
		}
		elseif($products=="B^q.A^p"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje_prikaz=$matrixad;
			for($i=1;$i<=$p;$i++){
				$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
			}
			$resenje_prikaz2=$matrixbd;
			for($i=1;$i<=$q;$i++){
				$resenje_prikaz2 = MultiplicacionMatrices($resenje_prikaz2, $matrixbd);
			}
			$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz2,$resenje_prikaz);
			$r=0;$s=0;$x=$m;$y=$m2;$z=$m;$w=$n;
		}
		unos_matrice2($resenje_prikaz,$z,$w,$idA,$idB,$products,$r,$s,$p,$q);
		if($idA!=null and $idB==null)
	{createXML($z,$w,$idA,$resenje_prikaz);$fajl = $idA . ".xml";}
	elseif($idA==null and $idB!=null)
	{createXML($z,$w,$idB,$resenje_prikaz);$fajl = $idB . ".xml";}
	else 
	{$idC= $idA . "." . $idB; createXML($z,$w,$idC,$resenje_prikaz);$fajl = $idA . "." . $idB . ".xml";}
		echo "<br>";
		echo "<br>";
		$resenje=makeJeddim($resenje_prikaz,$x,$y);
		//print_r($resenje);
		//prikaz
		prikaz_kad_nema($resenje,$x,$y);
		//echo $products;
	}
}
function transpose($transpose,$idA,$idB,$m,$n,$m2,$n2){

	echo '<span class="style21">Transpose...</span>';
	echo "<br>";
	
	if($transpose=="A^T"){
		$matrixad= makeDvodim($idA,$m,$n);	
		$resenje=Transpuesta($matrixad);
		$p=0;$q=0;$r=0;$s=0;
	}
	elseif($transpose=="B^T"){
		$matrixbd= makeDvodim($idB,$m,$n);
		$resenje=Transpuesta($matrixbd);
		$p=0;$q=0;$r=0;$s=0;
	}
	elseif($transpose=="(A.B)^T"){
		$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$transpose'";
		$result3 = mysql_query($query3);
		$row3 = mysql_fetch_array($result3);
		if($row3[1]!=NULL){
			//echo "<br>";
			//echo '<span class="style1">The solution is ...</span>';
			echo "<br>";
			echo "<br>";
			$resenje = explode(",",$row3["ELEMENTS"]);
			prikaz_resenja($resenje,$m,$n2);
		}
		else{
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje_prikaz = MultiplicacionMatrices($matrixad,$matrixbd);
			$resenje_prikaz=Transpuesta($resenje_prikaz);
			unos_matrice2($resenje_prikaz,$m,$n2,$idA,$idB,$transpose,$r,$s,$p,$q);
			echo "<br>";
			echo "<br>";
			$p=0;$q=0;$r=0;$s=0;
			$resenje=makeJeddim($resenje_prikaz,$m,$n2);
			//print_r($resenje);
			//prikaz
			$p=0;$q=0;$r=0;$s=0;
			prikaz_kad_nema($resenje,$m,$n2);

		}
	}
	elseif($transpose=="(B.A)^T"){
		$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$transpose'";
		$result3 = mysql_query($query3);
		$row3 = mysql_fetch_array($result3);
		if($row3[1]!=NULL){
			//echo "<br>";
			//echo '<span class="style1">The solution is ...</span>';
			echo "<br>";
			echo "<br>";
			$resenje = explode(",",$row3["ELEMENTS"]);
			$p=0;$q=0;$r=0;$s=0;
			prikaz_resenja($resenje,$m2,$n);
			//print_r($resenje);
		}
		else{
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);		
			$resenje_prikaz = MultiplicacionMatrices($matrixbd,$matrixad);
			$resenje_prikaz=Transpuesta($resenje_prikaz);
			unos_matrice2($resenje_prikaz,$m2,$n,$idA,$idB,$transpose,$r,$s,$p,$q);
			echo "<br>";
			echo "<br>";
			$resenje=makeJeddim($resenje_prikaz,$m2,$n);
			//print_r($resenje);
			//prikaz
			$p=0;$q=0;$r=0;$s=0;
			prikaz_kad_nema($resenje,$m2,$n);

		}
	}
	elseif($transpose=="B^T.A^T"){
		$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$transpose'";
		$result3 = mysql_query($query3);
		$row3 = mysql_fetch_array($result3);
		if($row3[1]!=NULL){
			//echo "<br>";
			//echo '<span class="style1">The solution is ...</span>';
			echo "<br>";
			echo "<br>";
			$resenje = $row3["ELEMENTS"];
			//$resenje = explode(",",$row3["ELEMENTS"]);
			$p=0;$q=0;$r=0;$s=0;
			prikaz_resenja($resenje,$n2,$m);
		}
		else{
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$matrixad=Transpuesta($matrixad);
			$matrixbd=Transpuesta($matrixbd);
			$resenje_prikaz = MultiplicacionMatrices($matrixbd,$matrixad);
			$p=0;$q=0;$r=0;$s=0;
			unos_matrice2($resenje_prikaz,$n2,$m,$idA,$idB,$transpose,$r,$s,$p,$q);
			echo "<br>";
			echo "<br>";
			$resenje=makeJeddim($resenje_prikaz,$n2,$m);
			//print_r($resenje);
			//prikaz
			prikaz_kad_nema($resenje,$n2,$m);

		}
	}
	elseif($transpose=="A^T.B^T"){
		$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$transpose'";
		$result3 = mysql_query($query3);
		$row3 = mysql_fetch_array($result3);
		if($row3[1]!=NULL){
			//echo "<br>";
			//echo '<span class="style1">The solution is ...</span>';
			echo "<br>";
			echo "<br>";
			$resenje = explode(",",$row3["ELEMENTS"]);
			prikaz_resenja($resenje,$n,$m2);
		}
		else{
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$matrixad=Transpuesta($matrixad);
			$matrixbd=Transpuesta($matrixbd);
			$resenje_prikaz = MultiplicacionMatrices($matrixad,$matrixbd);
			$p=0;$q=0;$r=0;$s=0;
			unos_matrice2($resenje_prikaz,$n,$m2,$idA,$idB,$transpose,$r,$s,$p,$q);
			echo "<br>";
			echo "<br>";
			$resenje=makeJeddim($resenje_prikaz,$n,$m2);
			//print_r($resenje);
			//prikaz
			prikaz_kad_nema($resenje,$n,$m2);
		}
	}	
	if($idA!=null and $idB==null)
	{createXML($m,$n,$idA,$resenje_prikaz);$fajl = $idA . ".xml";}
	elseif($idA==null and $idB!=null)
	{createXML($m,$n,$idB,$resenje_prikaz);$fajl = $idB . ".xml";}
	else 
	{$idC= $idA . "." . $idB; createXML($m,$n,$idC,$resenje_prikaz);$fajl = $idA . "." . $idB . ".xml";}
}	
function inverses($inverses,$idA,$idB,$m,$n,$m2,$n2,$p,$q){

	echo '<span class="style21">Inverses...</span>';
	
	echo "<br>";
	$query3 = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL){
		//echo "<br>";
		//echo '<span class="style1">The solution is ...</span>';
		echo "<br>";
		echo "<br>";
		//$resenje = explode(",",$row3["ELEMENTS"]);
		$resenje = $row3["ELEMENTS"];
		prikaz_resenja($resenje,$m,$n);
	}
	else{
		if($inverses=="A^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$resenje_prikaz = Grevile($matrixad);
			//print_r($resenje_prikaz);
			//$m=$n;
			//$n=$m;
			$idB=0;
			$p=0;$q=0;$r=0;$s=0;$x=$n;$y=$m;
		}
		elseif($inverses=="B^-1"){
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje_prikaz = Grevile($matrixbd);
			//$m=$n2;
			//$n=$m2;
			$x=$n2;$y=$m2;
			$idA=0;
		}
		elseif($inverses=="(A.B)^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje = MultiplicacionMatrices($matrixad, $matrixbd);
			$resenje_prikaz = Grevile($resenje);
			//$m=$n2;
			//$n=$m;
			$x=$n2;$y=$m;
		}
		elseif($inverses=="(B.A)^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje = MultiplicacionMatrices($matrixbd, $matrixad);
			$resenje_prikaz = Grevile($resenje);
			$x=$n;
			$y=$m2;
		}
		elseif($inverses=="A^T^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$resenjeT=Transpuesta($matrixad);
			$resenje_prikaz = Grevile($resenjeT);
			$idB=0;
			$x=$m;$y=$n;
		}
		elseif($inverses=="B^T^-1"){
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenjeT=Transpuesta($matrixbd);
			$resenje_prikaz = Grevile($resenjeT);
			$idA=0;$x=$m2;$y=$n2;
		}
		elseif($inverses=="(A^-1)^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixad = Grevile($matrixad);
			$resenje_prikaz = Grevile($matrixad);
			$idB=0;$x=$m;$y=$n;
		}
		elseif($inverses=="A^p^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			//$matrixad = ScalarMatriz($matrixad,$p);
			$resenje_prikaz = Grevile($matrixad);
			$idB=0;$x=$m;$y=$n;
			//print_r($matrixad);
			//echo $x;
		}
		elseif($inverses=="B^q^-1"){
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$matrixbd = ScalarMatriz($matrixbd,$q);
			$resenje_prikaz = Grevile($matrixbd);
			$idB=0;$x=$m2;$y=$n2;
			//print_r("selver");
			//echo "selver";
		}
		elseif($inverses=="(B^-1)^-1"){
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$matrixbd = Grevile($matrixbd);
			$resenje_prikaz = Grevile($matrixbd);
			//$m=$m2;
			//$n=$n2;
			$x=$m2;$y=$n2;
			$idA=0;
		}
		elseif($inverses=="(A^p.B^q)^-1"){
			$matrixad= makeDvodim($idA,$m,$n);
			$matrixbd= makeDvodim($idB,$m2,$n2);
			$resenje_prikaz=$matrixad;
			for($i=1;$i<=$p;$i++){
				$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz, $matrixad);
			}
			$resenje_prikaz2=$matrixbd;
			for($i=1;$i<=$q;$i++){
				$resenje_prikaz2 = MultiplicacionMatrices($resenje_prikaz2, $matrixbd);
			}
			$resenje_prikaz = MultiplicacionMatrices($resenje_prikaz,$resenje_prikaz2);
			$resenje_prikaz = Grevile($resenje_prikaz);
			$r=0;$s=0;$x=$m;$y=$n;
		}		
		//print_r($y);
		unos_matrice2($resenje_prikaz,$x,$y,$idA,$idB,$inverses,$r,$s,$p,$q);
		if($idA!=null and $idB==null)
	{createXML($x,$y,$idA,$resenje_prikaz);$fajl = $idA . ".xml";}
	elseif($idA==null and $idB!=null)
	{createXML($x,$y,$idB,$resenje_prikaz);$fajl = $idB . ".xml";}
	else 
	{$idC= $idA . "." . $idB; createXML($x,$y,$idC,$resenje_prikaz);$fajl = $idA . "." . $idB . ".xml";}
		//echo "<br>";
		echo "<br>";
		$resenje=makeJeddim($resenje_prikaz,$x,$y);
		//print_r($resenje);
		//prikaz
		prikaz_kad_nema($resenje,$x,$y);
	}
}
function determinants($determinants,$idA,$idB,$m,$n,$m2,$n2,$p,$q){

	echo '<span class="style21">Determinants...</span>';
	echo "<br>";
	
	$z=1;
	$j=0;
	if($determinants=="det[A]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$deter=$matrixad;
	}
	elseif($determinants=="det[A^-1]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$deter=Grevile($matrixad);
	}
	elseif($determinants=="det[B]"){
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$deter=$matrixbd;		
	}
	elseif($determinants=="det[B^-1]"){
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$deter=Grevile($matrixbd);
	}
	elseif($determinants=="det[A.B]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$deter=MultiplicacionMatrices($matrixad,$matrixbd);
	}
	elseif($determinants=="det[B.A]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$deter=MultiplicacionMatrices($matrixbd,$matrixad);
	}
	elseif($determinants=="det[A^T]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$matrixad=Transpuesta($matrixad);
		$deter=$matrixad;	
	}
	elseif($determinants=="det[B^T]"){
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$matrixbd=Transpuesta($matrixbd);
		$deter=$matrixbd;	
	}
	elseif($determinants=="det[B^-1.A]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$t=Grevile($matrixbd);
		$deter=MultiplicacionMatrices($t,$matrixad);		
	}
	elseif($determinants=="det[A^-1.B]"){
		$matrixad= makeDvodim($idA,$m,$n);
		$matrixbd= makeDvodim($idB,$m2,$n2);
		$t=Grevile($matrixad);
		$deter=MultiplicacionMatrices($t,$matrixbd);
				
	}
	$resenje=determinanta($deter,$j,$z);
	//print_r($resenje);
	//$resenje=makeJeddim($resenje,$m,$n);
		print_r($resenje);
		//prikaz
	//prikaz_kad_nema($resenje,$m,$n);
}

if($arithmetic!="arithmetic"){
	arithmetic($idA,$idB,$m,$n,$m2,$n2,$arithmetic,$r,$s);
}
if($powersa!="powers of A"){
	$a_b=1;
	powersa($powersa,$idA,$m,$n,$skalarp,$skalarq,$a_b);
}
if($powersb!="powers of B"){
	$a_b=5;
	powersa($powersb,$idB,$m2,$n2,$skalarp,$skalarq,$a_b);
}
if($products!="matrix products"){
	products($products,$idA,$idB,$m,$n,$m2,$n2,$skalarp,$skalarq);
}
if($transpose!="transpose"){
	transpose($transpose,$idA,$idB,$m,$n,$m2,$n2);
}
if($inverses!="inverses"){
	inverses($inverses,$idA,$idB,$m,$n,$m2,$n2,$skalarp,$skalarq);
}
if($determinants!="determinants"){
	echo "<br>";
	echo determinants($determinants,$idA,$idB,$m,$n,$m2,$n2,$skalarp,$skalarq);
}

if($idA==null) $idA=0;
if($idB==null) $idB=0;
create_txt($idA, $idB);
//echo $idA;
//echo $arithmetic;
//$kljucA = $rezaA;
//$kljucB = $rezaB;
//$A=makeDvodim($kljucA,$m1,$n1);
//$B=makeDvodim($kljucB,$m2,$n2);
//print_r($A);

?>
                  </div>                    </td>
                </tr>
              </table>
                <p align="center"><br>
                  </p>
                  <table width="100%">
                    <tr>
                      <td colspan="2">
                        
                          <div align="center"><span class="style21">
                            <?php
	echo "<a href=\"pdf/example.matrix.php?idA=$idA&idB=$idB\">Show matrix (PDF)</a>"; 
?>                      
                          </span></div></td>
                      <td colspan="2"><span class="style21">
<?php 
	//$fajl = $idA . "." . $idB . ".txt";
	
	if($idA!=null and $idB==null)
	{$fajl = $idA . ".xml";}
	elseif($idA==null and $idB!=null)
	{$fajl = $idB . ".xml";}
	else 
	{$idC= $idA . "." . $idB; $fajl = $idA . "." . $idB . ".xml";}
	//echo "<a href=\"xml/$fajl\">Show matrix (XML)</a>"; 
	echo "<a href=\"xml/downloadXML.php?fajl=$fajl\">Show matrix (XML)</a>";
	//echo $resenje_prikaz;
?>
                      </span></td>
                    </tr>
                    <tr>
                      <td width="25%">

<?php
	/*echo "<br>";
	echo "<br>";
	$time_end = microtime_float();
	echo $time_start;
	echo "<br>";
	echo $time_end;
	echo "<br>";
	echo $time_end - $time_start;*/
?>

                      &nbsp;</td>
                      <td width="13%">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="19">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="10%" class="style22">&nbsp;</td>
                      <td width="52%">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="left">
                    <table width=100% border=0 align="center">
                    <tr>
                      <td height="38" align=left valign=top><table width="100" align="left">
                        <tr>
                          <td width="4%" class="style22">&nbsp;</td>
                              <td width="9%" class="style22">&nbsp;</td>
                              <td width="5%" class="style22">&nbsp;</td>
                              <td width="10%" class="style22">&nbsp;</td>
                              <td width="5%" class="style22">&nbsp;</td>
                              <td width="10%" class="style22">&nbsp;</td>
                              <td width="5%" class="style22">&nbsp;</td>
                              <td width="10%" class="style22">&nbsp;</td>
                              <td width="42%" colspan="2" class="style22">&nbsp;</td>
                            </tr>
                        <tr>
                          <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td colspan="2" class="style22">&nbsp;</td>
                            </tr>
                        <tr>
                          <td colspan="10"><table width="100">
                            <tr>
                              <td height="31"><div align="left">
                                  <select name="arithmetic" class="style21" id="arithmetic" disabled>
                                    <option selected>arithmetic</option>
                                    <option value="sum">A + B</option>
                                    <option value="A-B">A - B</option>
                                    <option value="B-A">B - A</option>
                                    <option value="noop"> </option>
                                    <option value="rA"> r A </option>
                                    <option value="sB"> s B </option>
                                    <option value="rAsumsB"> r A + s B </option>
                                  </select>
                              </div></td>
                              <td><div align="left">
                                  <select name="powersa" class="style21" id="powersa" disabled>
                                    <option selected="selected">powers of A</option>
                                    <option value="A^4.A"> A^4 . A </option>
                                    <option value="A^3.A"> A^3 . A </option>
                                    <option value="A^2.A"> A^2 . A </option>
                                    <option value="A.A"> A . A </option>
                                    <option value="I.A"> I . A </option>
                                    <option value="A^-1.A"> A^-1 . A </option>
                                    <option value="noop"> </option>
                                    <option value="A^p.A^q"> A^p . A^q </option>
                                    <option value="noop"> </option>
                                    <option value="A.A^-1"> A . A^-1 </option>
                                    <option value="I.A^-1"> I . A^-1 </option>
                                    <option value="A^-1.A^-1"> A^-1 . A^-1 </option>
                                    <option value="A^-2.A^-1"> A^-2 . A^-1 </option>
                                    <option value="A^-3.A^-1"> A^-3 . A^-1 </option>
                                    <option value="A^-4.A^-1"> A^-4 . A^-1 </option>
                                  </select>
                              </div></td>
                              <td><div align="left">
                                  <div align="left">
                                    <select name="powersb" class="style21" id="powersb" disabled>
                                      <option selected="selected">powers of B</option>
                                      <option value="B^4.B"> B^4 . B </option>
                                      <option value="B^3.B"> B^3 . B </option>
                                      <option value="B^2.B"> B^2 . B </option>
                                      <option value="B.B"> B . B </option>
                                      <option value="I.B"> I . B </option>
                                      <option value="B^-1.B"> B^-1 . B </option>
                                      <option value="noop"> </option>
                                      <option value="B^p.B^q"> B^p . B^q </option>
                                      <option value="noop"> </option>
                                      <option value="B.B^-1"> B . B^-1 </option>
                                      <option value="I.B^-1"> I . B^-1 </option>
                                      <option value="B^-1.B^-1"> B^-1 . B^-1 </option>
                                      <option value="B^-2.B^-1"> B^-2 . B^-1 </option>
                                      <option value="B^-3.B^-1"> B^-3 . B^-1 </option>
                                      <option value="B^-4.B^-1"> B^-4 . B^-1 </option>
                                    </select>
                                  </div>
                              </div></td>
                              <td><div align="left">
                                  <select name="products" class="style21" id="products" disabled>
                                    <option selected="selected">matrix products</option>
                                    <option value="A.B">A . B</option>
                                    <option value="B.A">B . A</option>
                                    <option value="noop"> </option>
                                    <option value="B^-1.A^-1"> B^-1 . A^-1 </option>
                                    <option value="A^-1.B^-1"> A^-1 . B^-1 </option>
                                    <option value="noop"> </option>
                                    <option value="A^-1.B"> A^-1 . B </option>
                                    <option value="A.B^-1"> A . B^-1 </option>
                                    <option value="noop"> </option>
                                    <option value="B.A^-1"> B . A^-1 </option>
                                    <option value="B^-1.A"> B^-1 . A </option>
                                    <option value="noop"> </option>
                                    <option value="A^p.B^q"> A^p . B^q </option>
                                    <option value="B^q.A^p"> B^q . A^p </option>
                                  </select>
                              </div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="5"><div align="left"></div></td>
                                  </tr>
                            <tr>
                              <td><div align="left">
                                <select name="transpose" class="style21" id="transpose" disabled>
                                  <option selected="selected">transpose</option>
                                  <option value=" A^T "> A^T </option>
                                  <option value=" B^T "> B^T </option>
                                  <option value="noop"> </option>
                                  <option value=" (A . B)^T "> (A . B)^T </option>
                                  <option value=" (B . A)^T "> (B . A)^T </option>
                                  <option value="noop"> </option>
                                  <option value=" B^T . A^T "> B^T . A^T </option>
                                  <option value=" A^T . B^T "> A^T . B^T </option>
                                  </select>
                                </div></td>
                                    <td><div align="left">
                                      <select name="determinants" class="style21" id="determinants" disabled>
                                        <option selected="selected">determinants</option>
                                        <option value=" det[A] "> det[A] </option>
                                        <option value=" det[A^-1] "> det[A^-1] </option>
                                        <option value=" det[A^p] "> det[A^p] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[B] "> det[B] </option>
                                        <option value=" det[B^-1] "> det[B^-1] </option>
                                        <option value=" det[B^q] "> det[B^q] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A . B] "> det[A . B] </option>
                                        <option value=" det[B . A] "> det[B . A] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A^p . B^q] "> det[A^p . B^q] </option>
                                        <option value=" det[B^q . A^p] "> det[B^q . A^p] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A^T] "> det[A^T] </option>
                                        <option value=" det[B^T] "> det[B^T] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A^-1 . B . A] "> det[A^-1 . B . A] </option>
                                        <option value=" det[A^-1 . B^q . A] "> det[A^-1 . B^q . A] </option>
                                        </select>
                                      </div></td>
                                    <td><div align="left">
                                      <select name="inverses" class="style21" id="inverses" disabled>
                                        <option selected="selected">inverses</option>
                                        <option value=" A^-1 "> A^-1 </option>
                                        <option value=" B^-1 "> B^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" (A . B)^-1 "> (A . B)^-1 </option>
                                        <option value=" (B . A)^-1 "> (B . A)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" A^T^-1 "> (A^T)^-1 </option>
                                        <option value=" B^T^-1 "> (B^T)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" (A^-1)^-1 "> (A^-1)^-1 </option>
                                        <option value=" (B^-1)^-1 "> (B^-1)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" A^p^-1 "> (A^p)^-1 </option>
                                        <option value=" B^q^-1 "> (B^q)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" (A^p . B^q)^-1 "> (A^p . B^q)^-1 </option>
                                        </select>
                                      </div></td>
                                    <td><div align="left"></div></td>
                                    <td><div align="left"></div></td>
                                  </tr>
                            <tr>
                              <td colspan="5"><div align="left"></div></td>
                                  </tr>
                            <tr>
                              <td colspan="5"><div align="left"></div></td>
                                  </tr>
                            </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table>
                    <br>
                    <table width=581 border=0 align="left">
                      <tr>
                        <td align=left valign=top><div align="center">
                            <p><span class="style2">&nbsp;&nbsp;<span class="style17"><span class="style6">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span></span><span class="style6"><A HREF="#">FAQs</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="#">legal</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="kontakt/mailform.php">email us</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="sparse.php">sparse</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> <span class="style6"><A HREF="dense.php">dense</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>&nbsp;<BR>
                                  <br>
                                  <span class="style18"><span class="style32"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &reg; 2009 Selver H. Pepic  Inc. All rights reserved&nbsp;</span>&nbsp;</span><span class="style19">&nbsp;&nbsp;&nbsp;</span></span></p>
                        </div></td>
                      </tr>
                    </table>
                  </div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
