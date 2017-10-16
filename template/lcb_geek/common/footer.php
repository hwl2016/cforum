<?php echo '量产吧版权所有 http://bbs.liangchanba.com/';exit;?>
</div>
<!--{if empty($topic) || ($topic[usefooter])}-->
<!--{eval $focusid = getfocus_rand($_G[basescript]);}-->
<!--{if $focusid !== null}-->
<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
<!--{eval $focusnum = count($_G['setting']['focus'][$_G[basescript]]);}-->

<div class="focus" id="sitefocus">
  <div class="bm">
    <div class="bm_h cl"><a href="javascript:;" onClick="setcookie('nofocus_$_G[basescript]', 1, $_G['cache']['focus']['cookie']*3600);$('sitefocus').style.display='none'" class="y" title="{lang close}">{lang close}</a>
      <h2>
        <!--{if $_G['cache']['focus']['title']}-->
        {$_G['cache']['focus']['title']}
        <!--{else}-->
        {lang focus_hottopics}
        <!--{/if}-->
        <span id="focus_ctrl" class="fctrl"><img src="{IMGDIR}/pic_nv_prev.gif" alt="{lang footer_previous}" title="{lang footer_previous}" id="focusprev" class="cur1" onClick="showfocus('prev');" /><em><span id="focuscur"></span>/$focusnum</em><img src="{IMGDIR}/pic_nv_next.gif" alt="{lang footer_next}" title="{lang footer_next}" id="focusnext" class="cur1" onClick="showfocus('next')" /></span></h2>
    </div>
    <div class="bm_c" id="focus_con"></div>
  </div>
</div>
<!--{eval $focusi = 0;}-->
<!--{loop $_G['setting']['focus'][$_G[basescript]] $id}-->
<div class="bm_c" style="display: none" id="focus_$focusi">
  <dl class="xld cl bbda">
    <dt><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2" target="_blank">$_G['cache']['focus']['data'][$id]['subject']</a></dt>
    <!--{if $_G['cache']['focus']['data'][$id][image]}-->
    <dd class="m"><a href="{$_G['cache']['focus']['data'][$id]['url']}" target="_blank"><img src="{$_G['cache']['focus']['data'][$id]['image']}" alt="$_G['cache']['focus']['data'][$id]['subject']" /></a></dd>
    <!--{/if}-->
    <dd>$_G['cache']['focus']['data'][$id]['summary']</dd>
  </dl>
  <p class="ptn cl"><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2 y" target="_blank">{lang focus_show} &raquo;</a></p>
</div>
<!--{eval $focusi ++;}-->
<!--{/loop}-->
<script type="text/javascript">
			var focusnum = $focusnum;
			if(focusnum < 2) {
				$('focus_ctrl').style.display = 'none';
			}
			if(!$('focuscur').innerHTML) {
				var randomnum = parseInt(Math.round(Math.random() * focusnum));
				$('focuscur').innerHTML = Math.max(1, randomnum);
			}
			showfocus();
			var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
		</script>
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
<div class="focus patch" id="patch_notice"></div>
<!--{/if}-->
<!--{ad/footerbanner/wp a_f/1}-->
<!--{ad/footerbanner/wp a_f/2}-->
<!--{ad/footerbanner/wp a_f/3}-->
<!--{ad/float/a_fl/1}-->
<!--{ad/float/a_fr/2}-->
<!--{ad/couplebanner/a_fl a_cb/1}-->
<!--{ad/couplebanner/a_fr a_cb/2}-->
<!--{ad/cornerbanner/a_cn}-->
<!--{hook/global_footer}-->

<div style="width:100%;height:210px;background:#EDEDED;min-width:1200px;">
<div id="ft" class="wp cl" style="padding:20px 0; overflow:hidden; border:none;">
<div style="width:650px;float:left; ">
<ul style="float:left;width:90px; padding:0 16px 0 20px;  height:160px;">
<li style="margin:5px 0px;font-size:19px;color:#333;">企业</li>
<div style="width:90px; padding-right:15px;height:110px; border-right:1px solid #ddd;">
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">关于我们</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">业务范围</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">联系我们</a></li>
</div>
</ul>				
<ul style="float:left;width:90px; padding:0 16px 0 40px;height:160px;">
<li style="margin:5px 0px;font-size:19px;color:#333;">官方</li>
<div style="width:90px; padding-right:15px;height:110px; border-right:1px solid #ddd;">
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">快速了解</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">总则</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">封号公示</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">账号申诉</a></li>
</div>
</ul>
<ul style="float:left;width:90px; padding:0 16px 0 40px; height:160px;">
<li style="margin:5px 0px;font-size:18px;color:#333;">下载</li>
<div style="width:90px; padding-right:15px;height:110px; border-right:1px solid #ddd;">
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">万能驱动</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">启明星</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">EasySysprep</a></li>
</div>
</ul>
<ul style="float:left;width:90px; padding:0 16px 0 40px; height:160px;">
<li style="margin:5px 0px;font-size:18px;color:#333;">合作</li>
<div style="width:90px; padding-right:15px;height:110px;">
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">友情链接</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">意见建议</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">商户合作</a></li>
<li style="margin:0px 0px 5px 0px;"><a href="#" target="_blank" style="color:#666;font-size:13px;">业务合作</a></li>
</div>	
</ul>
</div>
<div style="float:right;margin:10px 20px ;">
<ul style="text-align:right; margin-top:7px;">
<li style="font-size:13px; margin:0 0 5px 0;">
<a style="color:#666;" href="$_G['setting']['siteurl']" target="_blank">$_G['setting']['sitename']</a> - Designed by<a style="color:#666;" href="#" target="_blank"> LCB</a>
</li>
<li style="font-size:13px; margin:0 0 5px 0;">
&copy; 2018 
<span style="color:#ccc;"> | </span>
Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em>$_G['setting']['version']</em><!--{if !empty($_G['setting']['boardlicensed'])}--> <a href="http://license.comsenz.com/?pid=1&host=$_SERVER[HTTP_HOST]" target="_blank">Licensed</a><!--{/if}-->
</li>
<li style="font-size:13px; margin:0 0 5px 0;">
勿发违法内容，会员观点无关本站
</li>					
<li style="font-size:13px; margin:0 0 5px 0;">
<!--{if $_G['setting']['icp']}--><a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#666;">$_G['setting']['icp']</a><!--{/if}-->
<!--{hook/global_footerlink}-->
<span style="color:#ccc;"> | </span>
<a href="#" target="_blank" style="color:#666;">鲁公网安备1号</a>
</li>
<li style="font-size:13px; margin:0 0 5px 0;">
  <p class="xs0">{lang time_now}<span id="debuginfo">
      <!--{if debuginfo()}-->
      <!--, Processed in $_G[debuginfo][time] second(s), $_G[debuginfo][queries] queries-->
      <!--{if $_G['gzipcompress']}-->
      , Gzip On
      <!--{/if}-->
      <!--{if C::memory()->
      type}-->,
      <!--{echo ucwords(C::memory()->
      type)}--> On
      <!--{/if}-->
      .
      <!--{/if}-->
      </span></p>
</li>					
</ul>
</div></div>
</div>
<div style="width:100%;height:90px;background:#E2E2E2;min-width:1200px;text-align:center;">
<div style="margin:0 auto;">
<span style=" margin:20px 20px; display:inline-block;">
<img id="frameMini368577965" style="border: 0px; margin: 0px; padding: 0px; cursor: pointer;" border="0" oncontextmenu="return false;" src="template/lcb_geek/images/OV_tp1_cn.png">
</span>
<span style=" margin:20px 20px; display:inline-block;">
<img src="template/lcb_geek/images/hy_124x47.png" alt="安全联盟认证" width="124" height="47" style="border: none;">
</a>
</span>		
<span style=" margin:20px 20px; display:inline-block;">
<img src="template/lcb_geek/images/cnnic.png" style="border:none;" oncontextmenu="return false;" alt="可信网站"></a>
</span>				
<span style=" margin:20px 20px; display:inline-block;">
<img src="template/lcb_geek/images/footer_trustutn.png"></a>
</span>	
<span style=" margin:20px 20px; display:inline-block;">
<img src="template/lcb_geek/images/footer_cert.png" border="0">
</a>
</span>				
</div>
</div>

<!--{/if}-->
<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']}-->
<!--{if $_G[uid] && !isset($_G['cookie']['checkpm'])}-->
<script type="text/javascript" src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]"></script>
<!--{/if}-->
<!--{if $_G[uid] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])}-->
<script type="text/javascript" src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=$_G[timestamp]"></script>
<!--{/if}-->
<!--{if !isset($_G['cookie']['sendmail'])}-->
<script type="text/javascript" src="home.php?mod=misc&ac=sendmail&rand=$_G[timestamp]"></script>
<!--{/if}-->
<!--{if $_G[uid] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])}-->
<script type="text/javascript" src="misc.php?mod=patch&action=checkpatch&rand=$_G[timestamp]"></script>
<!--{/if}-->
<!--{/if}-->
<!--{if $_GET['diy'] == 'yes'}-->
<!--{if check_diy_perm($topic) && (empty($do) || $do != 'index')}-->
<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script>
<script type="text/javascript" src="{$_G[setting][jspath]}portal_diy{if !check_diy_perm($topic, 'layout')}_data{/if}.js?{VERHASH}"></script>
<!--{/if}-->
<!--{if $space['self'] && CURMODULE == 'space' && $do == 'index'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script>
<script type="text/javascript" src="{$_G[setting][jspath]}space_diy.js?{VERHASH}"></script>
<!--{/if}-->
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
<script type="text/javascript">patchNotice();</script>
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])}-->
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<!--{/if}-->
<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])}-->
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<!--{/if}-->
<!--{if $_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G[uid]]) || $_G['cookie']['promptstate_'.$_G[uid]] != $_G['member']['newprompt']) && $_GET['do'] != 'notice'}-->
<script type="text/javascript">noticeTitle();</script>
<!--{/if}-->
<!--{if ($_G[member][newpm] || $_G[member][newprompt]) && empty($_G['cookie']['ignore_notice'])}-->
<script type="text/javascript" src="{$_G[setting][jspath]}html5notification.js?{VERHASH}"></script>
<script type="text/javascript">
	var h5n = new Html5notification();
	if(h5n.issupport()) {
		<!--{if $_G[member][newpm] && $_GET[do] != 'pm'}-->
		h5n.shownotification('pm', '$_G[siteurl]home.php?mod=space&do=pm', '<!--{avatar($_G[uid],small,true)}-->', '{lang newpm_subject}', '{lang newpm_notice_info}');
		<!--{/if}-->
		<!--{if $_G[member][newprompt] && $_GET[do] != 'notice'}-->
				<!--{loop $_G['member']['category_num'] $key $val}-->
					<!--{eval $noticetitle = lang('template', 'notice_'.$key);}-->
					h5n.shownotification('notice_$key', '$_G[siteurl]home.php?mod=space&do=notice&view=$key', '<!--{avatar($_G[uid],small,true)}-->', '$noticetitle ($val)', '{lang newnotice_notice_info}');
				<!--{/loop}-->
		<!--{/if}-->
	}
	</script>
<!--{/if}-->
<!--{eval userappprompt();}-->
<!--{if $_G['basescript'] != 'userapp'}-->
<div id="scrolltop">
  <!--{if $_G[fid] && $_G['mod'] == 'viewthread'}-->
  <span><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&page=$page{if $_GET[from]}&from=$_GET[from]{/if}" onClick="showWindow('reply', this.href)" class="replyfast" title="{lang fastreply}"><b>{lang fastreply}</b></a></span>
  <!--{/if}-->
  <span hidefocus="true"><a title="{lang scrolltop}" onClick="window.scrollTo('0','0')" class="scrolltopa" ><b>{lang scrolltop}</b></a></span>
  <!--{if $_G[fid]}-->
  <span>
  <!--{if $_G['mod'] == 'viewthread'}-->
  <a href="forum.php?mod=forumdisplay&fid=$_G[fid]" hidefocus="true" class="returnlist" title="{lang return_list}"><b>{lang return_list}</b></a>
  <!--{else}-->
  <a href="forum.php" hidefocus="true" class="returnboard" title="{lang return_forum}"><b>{lang return_forum}</b></a>
  <!--{/if}-->
  </span>
  <!--{/if}-->
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<!--{/if}-->
<!--{if isset($_G['makehtml'])}-->
<script type="text/javascript" src="{$_G[setting][jspath]}html2dynamic.js?{VERHASH}"></script>
<script type="text/javascript">
		var html_lostmodify = {TIMESTAMP};
		htmlGetUserStatus();
		<!--{if isset($_G['htmlcheckupdate'])}-->
		htmlCheckUpdate();
		<!--{/if}-->
	</script>
<!--{/if}-->
<!--{eval output();}-->
</body></html>