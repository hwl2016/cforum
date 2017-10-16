<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
</div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
  <div class="bm">
    <div class="bm_h cl"><a href="javascript:;" onClick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
      <h2>
        <?php if($_G['cache']['focus']['title']) { ?>
        <?php echo $_G['cache']['focus']['title'];?>
        <?php } else { ?>
        站长推荐
        <?php } ?>
        <span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onClick="showfocus('prev');" /><em><span id="focuscur"></span>/<?php echo $focusnum;?></em><img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onClick="showfocus('next')" /></span></h2>
    </div>
    <div class="bm_c" id="focus_con"></div>
  </div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
  <dl class="xld cl bbda">
    <dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
    <?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
    <dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
    <?php } ?>
    <dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
  </dl>
  <p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
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
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>

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
<a style="color:#666;" href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a> - Designed by<a style="color:#666;" href="#" target="_blank"> LCB</a>
</li>
<li style="font-size:13px; margin:0 0 5px 0;">
&copy; 2018 
<span style="color:#ccc;"> | </span>
Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?>
</li>
<li style="font-size:13px; margin:0 0 5px 0;">
勿发违法内容，会员观点无关本站
</li>					
<li style="font-size:13px; margin:0 0 5px 0;">
<?php if($_G['setting']['icp']) { ?><a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#666;"><?php echo $_G['setting']['icp'];?></a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<span style="color:#ccc;"> | </span>
<a href="#" target="_blank" style="color:#666;">鲁公网安备1号</a>
</li>
<li style="font-size:13px; margin:0 0 5px 0;">
  <p class="xs0">GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?><span id="debuginfo">
      <?php if(debuginfo()) { ?>
      <!--, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries-->
      <?php if($_G['gzipcompress']) { ?>
      , Gzip On
      <?php } ?>
      <?php if(C::memory()->
      type) { ?>,
      <?php echo ucwords(C::memory()->
      type); ?> On
      <?php } ?>
      .
      <?php } ?>
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

<?php } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
  <?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
  <span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onClick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span>
  <?php } ?>
  <span hidefocus="true"><a title="返回顶部" onClick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span>
  <?php if($_G['fid']) { ?>
  <span>
  <?php if($_G['mod'] == 'viewthread') { ?>
  <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
  <?php } else { ?>
  <a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
  <?php } ?>
  </span>
  <?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body></html>