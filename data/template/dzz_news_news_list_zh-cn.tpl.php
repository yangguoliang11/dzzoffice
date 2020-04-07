<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:64:"D:\phpstudy_pro\WWW\dzzoffice\/./dzz/news/template/news_list.htm";i:1586240980;s:85:"D:\phpstudy_pro\WWW\dzzoffice\/./core/template/default/common/header_simple_start.htm";i:1586239670;s:83:"D:\phpstudy_pro\WWW\dzzoffice\/./core/template/default/common/header_simple_end.htm";i:1586239670;s:79:"D:\phpstudy_pro\WWW\dzzoffice\/./core/template/default/common/commer_header.htm";i:1586239670;s:66:"D:\phpstudy_pro\WWW\dzzoffice\/./dzz/news/template/header_left.htm";i:1586240980;s:68:"D:\phpstudy_pro\WWW\dzzoffice\/./dzz/news/template/header_search.htm";i:1586240980;s:78:"D:\phpstudy_pro\WWW\dzzoffice\/./core/template/default/common/header_right.htm";i:1586239670;s:67:"D:\phpstudy_pro\WWW\dzzoffice\/./dzz/news/template/setting_left.htm";i:1586240980;s:79:"D:\phpstudy_pro\WWW\dzzoffice\/./core/template/default/common/footer_simple.htm";i:1586239670;}*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } ?><?php echo $_G['setting']['sitename'];?> </title>
<meta name="keywords" content="<?php if(!empty($_G['setting']['metakeywords'])) { echo htmlspecialchars($_G['setting']['metakeywords']); } ?>" />
<meta name="description" content="<?php if(!empty($_G['setting']['metadescription'])) { echo htmlspecialchars($_G['setting']['metadescription']); ?> <?php } ?>" />
<meta name="generator" content="DzzOffice" />
<meta name="author" content="DzzOffice" />
<meta name="copyright" content="2012-<?php echo dgmdate(TIMESTAMP,'Y-m-d');?> www.dzzoffice.com" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta name="renderer" content="webkit">
<base href="<?php echo $_G['siteurl'];?>" />
<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/css/app_manage.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/dzzicon/icon.css?<?php echo VERHASH;?>"/>
<link rel="stylesheet" href="static/popbox/popbox.css">
<script type="text/javascript" src="static/jquery/jquery.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery/jquery.json-2.4.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',MOD_PATH='<?php echo MOD_PATH;?>',APP_URL='<?php echo MOD_URL;?>',MOD_URL='<?php echo MOD_URL;?>';</script>
<script type="text/javascript" src="./data/template/dzz_news_news_list_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/popbox/jquery.popbox.js?<?php echo VERHASH;?>" ></script>
<!--[if lt IE 9]>
  <script src="static/bootstrap/js/html5shiv.min.js" ></script>
  <script src="static/bootstrap/js/respond.min.js" ></script>
<![endif]--><?php Hook::listen('header_tpl') ?> <script type="text/javascript">
 if(!!window.ActiveXObject || "ActiveXObject" in window){
 try{$.ajaxSetup({ cache: false });}catch(e){}
 window.MSIE=1;
 } 
</script>
<link href="static/css/common.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<?php if($perm>1) { ?>
<link href="static/colorPicker/jquery.colorPicker.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="<?php echo MOD_PATH;?>/images/datepicker.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="static/icheck/skins/minimal/blue.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<?php } ?>

<link href="static/select2/select2.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="static/select2/select2-bootstrap.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">

<!-- <link rel="stylesheet" href="static/css/checkbox.css"> -->

<link rel="stylesheet" href="static/css/checkbox.css">


<link href="<?php echo MOD_PATH;?>/images/news.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<style type="text/css">
  .pagination{
      float: none!important;
  }
.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover{
background-color: #e11d2a;
border-color: #e11d2a;
}
</style><script type="text/javascript" src="./data/template/dzz_news_news_list_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left" style="min-width:168px">
    <?php if($_GET['op']=='view' || $_GET['op']=='edit') { ?>
    <li>
        <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-return navbar-nav-left-appname" style="padding:8px;">
        <div class="gb_fc" style="padding:7px;"><i class="dzz dzz-chevron-left" style="width:34px;height:34px;display:block;"></i></div>
        </a>
    </li>
    <li>
        <a href="javascript:;" onclick="window.history.go(-1);" class="navbar-nav-left-return navbar-nav-left-appname">返回</a>
    </li>
    <?php } elseif($_GET['op']=='setting') { ?>
    <li>
        <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-return navbar-nav-left-appname" style="padding:8px;">
        <!-- <i class="dzz dzz-chevron-left"></i> -->
            <div class="gb_fc" style="padding:7px;"><i class="dzz dzz-chevron-left" style="width:34px;height:34px;display:block;"></i></div>
        </a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-return navbar-nav-left-appname">管理设置</a>
    </li>
    <?php } else { ?>
    <li>
        <a href="javascript:;" class="leftTopmenu" onclick="_header.leftTopmenu(this)" style="padding:8px;">
            <div class="gb_fc"><span class="dzz dzz-menu" style="width:24px;height:24px;display:block;"></span></div>
        </a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>">新闻</a>
    </li>
    <?php } ?> 
</ul>    </div>
    <div class="resNav-item resNav-center"><?php if($_GET['op']!='view' && $_GET['op']!='edit' && $_GET['op']!='setting') { ?>
<div class="input-search">
 <form name="search" action="<?php echo BASESCRIPT;?>" method="get" class="search_top">
    <input type="hidden" name="mod" value="<?php echo MOD_NAME;?>" />
    <input type="hidden" name="op" value="<?php echo OP_NAME;?>" />
    <input type="hidden" name="do" value="" />

    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.form.submit()"></i>
    
    <input id="searchval" class="form-control search form-search" name="keyword" placeholder="新闻标题" type="text" value="<?php echo $keyword;?>" placeholder=""/>
    <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton">×</span>

 </form>
</div>
<script type="text/javascript">

jQuery('#searchval').focus(function (e) {//头部搜索框变颜色
    jQuery(this).closest('.input-search').addClass('focus');
if(this.value!='') jQuery('#emptysearchcondition').show();
});
jQuery('#searchval').blur(function (e) {//失去焦点时
 jQuery(this).closest('.input-search').removeClass('focus');
 if(this.value=='') jQuery('#emptysearchcondition').hide();
});
jQuery('#searchval').keyup(function (e) {//失去焦点时
if(this.value!='') jQuery('#emptysearchcondition').show();
});
jQuery('#emptysearchcondition').on('click',function(){
jQuery('#searchval').val('');
jQuery('#searchval').closest('form').submit();
jQuery('#emptysearchcondition').hide();
return false;
});
</script>
<?php } ?>    </div>
     <div class="resNav-item resNav-right">
     <ul class="nav navbar-nav">
<li>
<a href="javascript:;">
<span class="navbar-borderleft"></span>
</a>
</li>
<li class="app_popup-parent">

<a href="javascript:;" id="desktop_app" data-href="index.php?mod=system&amp;op=app_ajax&amp;operation=app" class="app_popup_icon js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><span class="dzz dzz-apps basil"></span></a>
</li>
<li>
<a href="javascript:;" id="dzz_notification" data-href="index.php?mod=system&amp;op=notification&amp;filter=new" class="navbar-notice js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover">
<span class="dzz dzz-notifications"></span>
<span class="badge hide">&nbsp;</span>
</a>
</li>
<li>
<a href="javascript:;" class="imgHeight js-popbox" data-href="user.php?mod=space&amp;op=navmenu&amp;modname=<?php echo MOD_NAME;?>" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><?php echo avatar_block($_G[uid]);?></a>
</li>
</ul></div>
</nav>


<script type="text/javascript">
jQuery(document).ready(function(e) {
    _header.init('<?php echo FORMHASH;?>');//初始化头部效果
    //_header.Topcolor();
//_notice.init();
jQuery(".resNav .js-popbox").each(function(){
jQuery(this).popbox();
});
_notice.getNotificationCount();
});
_notice={};
_notice.flashStep=1;
_notice.checkurl='index.php?mod=system&op=notification&filter=checknew';
_notice.normalTitle= document.title;
_notice.getNotificationCount=function(){
jQuery.getJSON(_notice.checkurl,function(json){
var sum=parseInt(json.sum);
_notice.showTips(sum);
if(json.timeout>0) window.setTimeout(_notice.getNotificationCount,json.timeout);
});
}
_notice.showTips=function(sum){
if(sum>0){
jQuery('#dzz_notification>span.badge').html(sum).removeClass('hide');
jQuery('#dzz_notification>span.dzz').hide();
//_notice.flashTitle();
}else{
jQuery('#dzz_notification>span.badge').addClass('hide');
jQuery('#dzz_notification>span.dzz').show();
//_notice.flashTitle(1);
}
}
_notice.flashTitle=function(flag){
//仅窗口不在焦点时闪烁title，回到焦点时停止闪烁并将title恢复正常
if(flag ||　CurrentActive){//当前处于焦点
document.title=_notice.normalTitle;
_notice.flashTitleRun = false;
return;//退出循环
}
_notice.flashTitleRun = true;
_notice.flashStep++;
if (_notice.flashStep==3) {_notice.flashStep=1;}
if (_notice.flashStep==1) {document.title="【您有新的通知】";}
if (_notice.flashStep==2) {document.title="【　　　　　　】";}
setTimeout(function(){_notice.flashTitle();},500);  //循环
}
</script><div class="bs-container clearfix">
    <!-- 左边部分 -->
    <div class="bs-left-container affix-top clearfix">
        <div class="leconMenu"> 
<!-- <ul class="nav-stacked"> -->
<?php echo $catlist;?>
<?php if($perm>1) { ?>
<ul class="nav-stacked" style="border-top:1px solid #e1e1e1;margin-top:10px;padding-top:10px;" >
    <li<?php if($do=='basic') { ?> class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=news&op=setting&do=basic"><i class="dzz dzz-settings" style="padding-right: 14px;font-size: 22px;vertical-align: -4px;"></i>管理设置</a></li>    
</ul>
<?php } ?> 
<!-- </ul> -->
</div>
      </div>
    <!-- 左边拖动部分 -->
    <div class="left-drager">
<div class="left-drager-op">
<div class="left-drager-sub"></div>
</div>
</div>	
    <!-- 结束 -->
    <!-- 右边部分 -->
    <div class="bs-main-container clearfix" style="overflow:auto;">  
    <!-- 添加信息-->
    <?php if($perm>0) { ?><a href="<?php echo MOD_URL;?>&op=edit&catid=<?php echo $catid;?>" class="news_add">+</a><?php } ?>
    <!-- 结束 -->

        <div class="main-content" id="middleconMenu" style="min-width:722px;overflow:auto">
<div class="main-title clearfix">
<span class="news_all pull-left">
                <?php if($perm>1) { ?>
                    <div class="checkbox-custom checkbox-primary checkbox-custom1" style="margin-right:15px;">
                        <input type="checkbox" name="chkall" id="chkall">
                        <label>全部信息</label>
                    </div>
                <?php } ?>	
            </span>
            <?php if($perm>1) { ?> 
            <button class="btn btn-simple js-popbox" style="display:none;margin-top:12px;" id="news_op_menu" data-href="<?php echo MOD_URL;?>&op=menu&do=newsmenu&status=<?php echo $status;?>" data-placement="bottom" data-auto-adapt="true">操作选项 <i class="caret"></i></button>
            <?php } ?> 
<ul class="group-tabul" >
   		<li <?php if($status==1 || $status==0) { ?>class="active"<?php } ?>><a href="<?php echo MOD_URL;?>&catid=<?php echo $catid;?>&status=1">已发布</a></li>
        <li <?php if($status==4) { ?>class="active"<?php } ?>><a href="<?php echo MOD_URL;?>&catid=<?php echo $catid;?>&status=4">未读</a></li>
        <li <?php if($status==5) { ?>class="active"<?php } ?>><a href="<?php echo MOD_URL;?>&catid=<?php echo $catid;?>&status=5">已读</a></li>
        <?php if($perm>0) { ?> 
        <li <?php if($status==2) { ?>class="active"<?php } ?>><a href="<?php echo MOD_URL;?>&catid=<?php echo $catid;?>&status=2">待审核</a></li>
        <li <?php if($status==3) { ?>class="active"<?php } ?>><a href="<?php echo MOD_URL;?>&catid=<?php echo $catid;?>&status=3">草稿</a></li>
        <?php } ?>
    </ul> 
</div>
          <?php if($data) { ?> 
            <table class="table table-hover" style="table-layout: fixed">
                <?php if(is_array($data)) foreach($data as $value) { ?>                <tr>
                    <?php if($perm>1) { ?>
                    <td width="40px" style="padding-right:0px;">
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" name="chk" id="<?php echo $value['newid'];?>" value="<?php echo $value['newid'];?>">
                            <label></label>
                        </div>
                    </td>
                    <?php } else { ?>
                    <td width="10px" style="padding-right:0px;"></td>
                    <?php } ?>
                    <td <?php if($ismobile) { if($value['type']==2) { ?> onclick="news_click('<?php echo $value['newid'];?>');"<?php } else { ?>onclick="location.href='<?php echo MOD_URL;?>&op=view&newid=<?php echo $value['newid'];?>&refer=<?php echo $refer;?>'"<?php } } ?>   style="padding-left:0px;">
                        <div class="list-title"> 
                            <?php if($value['type']==2) { ?> 
                            <a class="title" id="news_title_<?php echo $value['newid'];?>" data-topendtime="<?php echo $value['real_set_topendtime'];?>" data-endtime="<?php echo $value['real_set_endtime'];?>" href="<?php echo $value['url'];?>" onclick="news_click('<?php echo $value['newid'];?>');" target="_blank" style="<?php if($value['ishighlight']) { ?><?php echo $value['highlightstyle'];?><?php } ?>" title="<?php if($value['ishighlight']) { ?>高亮截止日期：<?php echo dgmdate($value[highlightendtime],'Y-m-d');?><?php } ?>"><?php echo $value['subject'];?>
                            <?php if($value['istop']) { ?>&nbsp;<img src="<?php echo MOD_PATH;?>/images/pin_<?php echo $value['istop'];?>.gif" title="置顶截止日期：<?php echo dgmdate($value[topendtime],'Y-m-d');?>"><?php } ?>
                            </a> 
                            <?php } else { ?> 
                            <a class="title" id="news_title_<?php echo $value['newid'];?>" data-topendtime="<?php echo $value['real_set_topendtime'];?>" data-endtime="<?php echo $value['real_set_endtime'];?>" data-val="<?php echo $value['subject'];?>" href="<?php echo MOD_URL;?>&op=view&newid=<?php echo $value['newid'];?>&refer=<?php echo $refer;?>" style="<?php if($value['ishighlight']) { ?><?php echo $value['highlightstyle'];?><?php } ?>" title="<?php if($value['ishighlight']) { ?>高亮截止日期：<?php echo dgmdate($value[highlightendtime],'Y-m-d');?><?php } ?>">
                            <?php if(strlen($value['subject'])>69) { ?>
                            <?php echo mb_substr($value[subject],0,23,"UTF8")."..."?>                            <?php } else { ?>
                            <?php echo $value[subject]?>                            <?php } ?> </a> 
                            <?php if($value['istop']) { ?>&nbsp;<!-- <img src="<?php echo MOD_PATH;?>/images/pin_<?php echo $value['istop'];?>.gif" title="置顶截止日期：<?php echo dgmdate($value[topendtime],'Y-m-d');?>"> -->
                            <span class="onready_top">已置顶</span>
                            <?php } ?>
                            
                            <?php } ?> 
                        </div>
                        <?php if($value['status']==2 && $value['moduid']>0) { ?>
            
                        <div class="alert alert-warning mod_back_reason" style="margin:10px 0 10px 30px;">
                            <p class="mb10"><a href="user.php?uid=<?php echo $value['moduid'];?>"><?php echo $value['modusername'];?></a> 退回于  <?php echo dgmdate($value[modtime],'u');?></p>
                            <p><b>退回原因：</b><?php echo $value['modreason'];?></p>
                        </div>
                        <?php } ?>                       
                    </td>
                    <td class="list-td" width="220">
                    	<?php if(!$ismobile) { ?>
                        <div class="list-info"> 
                            <?php if($value['opuid']) { ?> 
                            <span title="最后修改"  class="poster"><?php echo $value['opauthor'];?>&nbsp;&nbsp;<?php echo dgmdate($value[updatetime],'u');?></span> 
                            <?php } else { ?>
                            <span title="发布者"  class="poster"><?php echo $value['author'];?>&nbsp;&nbsp;<?php echo dgmdate($value[dateline],'u');?></span> 
                            <?php } ?> 
                        </div>
                    </td>
                    <td class="list-td" width="100">
                        <div class="list-info">
                            <?php if($value['comments']) { ?><a href="javascript:;" title="评论次数" class="views"><div class="dzz dzz-sms"></div>&nbsp;<?php echo $value['comments'];?>人</a>
                            <?php } else { ?>
                            <a href="javascript:;" title="评论次数" class="views"><div class="dzz dzz-sms"></div>&nbsp;0人</a>
                            <?php } ?> 
                        </div>
                    </td>
                    <td class="list-td"  width="120">
                        <div class="list-info">
                            <?php if($value['views']) { ?><span title="查看人数" class="views"><div class="dzz dzz-visibility"></div>&nbsp;<?php echo $value['views'];?>人</span>
                            <?php } else { ?>
                            <span title="查看人数" class="views"><div class="dzz dzz-visibility"></div>&nbsp;0人</span>
                            <?php } ?> 
                            
                            <?php if($value['status']==2 && $perm<2) { ?>
                            <button class="btn btn-link btn-sm" style="padding:0 5px;" data-loading-text="信息发送中..." onclick="sendModMessage(this,'<?php echo $value['newid'];?>')" title=""><i class="glyphicon glyphicon-bell"></i> 提醒管理员审核</button>
                            <?php } ?> 
                        </div>
                        <?php } ?> 
                    </td>
                     <?php if($perm>1 || $value['authorid']==$_G['uid']) { ?> 
                    <td class="list-td" width="100">
                        <div class="list-icon"> 
                            <a class="edit" href="<?php echo DZZSCRIPT;?>?mod=<?php echo MOD_NAME;?>&op=edit&newid=<?php echo $value['newid'];?>" title="编辑"><span class="dzz dzz-create"></span></a>&nbsp;
                            <a class="delete btn-Dialog" href="javascript:;" title="删除" newid="<?php echo $value['newid'];?>" onclick="news_dl(this)"><span class="dzz dzz-delete"></span></a>
                        </div>
                         </div>

                       
                    </td>
                  <?php } ?> 
                </tr>
                <?php } ?>
                 
                <!-- <tr style="background:none;">

                    <td colspan="6" style="border:none;text-align:center;">
                        
                    </td>
                </tr> -->
                
            </table>
                <?php if($multi) { ?>
                <div style="text-align:center;"><?php echo $multi;?> </div>
                <?php } ?> 
            <?php } else { ?>
            <div style="text-align: center;position: absolute;top: 35%;left: 50%;">
                <img src="<?php echo MOD_PATH;?>/images/no_list.png" /><br/>
                <span style="font-size: 18px;color: #AAA;">目前版本内暂无相关新闻</span>
            </div>
             <?php } ?> 
    </div>
</div>
<!--<div class="popbox clearfix" style="display: none;">
    <div class="loadding"></div>
</div>-->
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout(null,{'cookieid':'news_index'});
jQuery(document).ready(function(e) {
   
  //更新浏览数
  jQuery(document).on('click','.share_to_desktop',function(){
  jQuery.getJSON(DZZSCRIPT+'?mod=system&op=dzzcp&do=linktodesktop&link='+encodeURIComponent(this.href),function(json){
  if(json.error){
  alert(json.error);
  }else{
  try{
  parent._ico.createIco(json);
 parent.showmessage('成功添加桌面快捷方式','success',3000,1);
  }catch(e){
  alert('成功添加桌面快捷方式');
  }
  }
  });
  return false;
  });
  <?php if($perm>1) { ?>
  
  	jQuery('.js-popbox').each(function(){
jQuery(this).popbox();
});
   /*jQuery('input').iCheck({
 	  checkboxClass: 'icheckbox_minimal-blue',
 	  radioClass: 'iradio_minimal-blue',
 	});
 jQuery('#chkall').on('ifChecked',function(){
 	jQuery('input[name=chk]').iCheck('check');
 });
 jQuery('#chkall').on('ifUnchecked',function(){
 	jQuery('input[name=chk]').iCheck('uncheck');
 });
 jQuery('input[name=chk]').on('ifChecked',function(){
 	jQuery('#news_op_menu').show().trigger('click');
 });
 jQuery('input[name=chk]').on('ifUnchecked',function(){
 	var opened=0;
 	jQuery('input[name=chk]').each(function(){
 		if( jQuery(this).prop('checked')){
 			 opened=1;
 			 return ;
 		}
 	});
 	if(!opened){
 		jQuery('#news_op_menu').hide();
 		jQuery('.popbox .close').trigger('click');;
 	}
 });*/
    //全选
    var newcheids = [];
    jQuery(document).off('click.chechallnew').on('click.chechallnew','#chkall',function(){
        var ckeck = jQuery(this).prop('checked');
        if(ckeck){
            jQuery('input[name=chk]').each(function(){
                jQuery(this).prop('checked',ckeck);
                jQuery(this).closest('tr').addClass('tr_checked');
                var newid = jQuery(this).val();
                if(jQuery.inArray(newid,newcheids) == -1){
                    newcheids.push(newid);
                }
            })
        }else{
            jQuery('input[name=chk]').each(function(){
                jQuery(this).closest('tr').removeClass('tr_checked');
                jQuery(this).prop('checked',ckeck);
                var newid = jQuery(this).val();
                var index = jQuery.inArray(newid,newcheids);
                if(index > -1){
                    newcheids.splice(index,1);
                }
            })
        }
        check_select();
    })
    // 选中
    jQuery('input[name=chk]').click(function(){
        if(this.checked){
            jQuery(this).closest('tr').addClass('tr_checked');
            var newid = jQuery(this).val();
            if(jQuery.inArray(newid,newcheids) == -1){
                newcheids.push(newid);
            }
        }else{
            jQuery(this).closest('tr').removeClass('tr_checked');
            var newid = jQuery(this).val();
            var index = jQuery.inArray(newid,newcheids);
            if(index > -1){
                newcheids.splice(index,1);
            }
        }
        check_select();
    })

    function check_select(){
        var num = newcheids.length;
        if(num > 0){
            jQuery('#news_op_menu').show();
            jQuery('#chkall').prop('checked',true);
        }else{
            jQuery('#news_op_menu').hide();
            jQuery('#chkall').prop('checked',false);
        }
    }
    // 结束
jQuery('.table-news-list tr').mouseenter(function(){
jQuery(this).find('.list-op').show().end().find('.list-views').hide();;

});
jQuery('.table-news-list tr').mouseleave(function(){
jQuery(this).find('.list-op').hide().end().find('.list-views').show();;

});
<?php } ?>


});
function news_dl(obj){
    var msg = '确定要删除所选择的信息吗（此操作不可恢复）？';
    var mode = 'confirm';
    var title = '';
    var cover = '1';
    var leftmsg = '';
    var confirmtxt = '确定';
    var canceltxt = '取消';
    showDialog(msg,mode,title,function(){news_delete(jQuery(obj))},1);
};

</script>

<?php if($perm>1) { ?> 
<!--弹出菜单-->
<!--icheck--> 
<script type="text/javascript" src="static/icheck/icheck.min.js?<?php echo VERHASH;?>" ></script>
<!--datepicker--> 
<script  type="text/javascript" src="static/js/jquery.ui.core.js?<?php echo VERHASH;?>" ></script>
<script  type="text/javascript" src="static/js/datepicker/jquery.ui.datepicker.js?<?php echo VERHASH;?>" ></script> 
<script  type="text/javascript" src="static/js/datepicker/jquery.datepicker-zh-CN.js?<?php echo VERHASH;?>" ></script>
<!--colorPicker--> 
<script  type="text/javascript" src="static/colorPicker/jquery.colorPicker.js?<?php echo VERHASH;?>" ></script>
<?php } ?> 
<script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/news.js?<?php echo VERHASH;?>" ></script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script>
<!--codestrings--> <?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
<script type="text/javascript">
try{
if(console && console.log){
console.log('Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries <?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.');
}
}catch(e){}
</script>
<?php } ?>	
<?php if(!$_G['setting']['bbclosed']) { if(!isset($_G['cookie']['sendmail'])) { ?>
<script type="text/javascript" src="misc.php?mod=sendmail&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } ?>
     <script type="text/javascript" src="misc.php?mod=sendwx&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } if($_G['uid'] && $_G['adminid'] == 1) { if(!isset($_G['cookie']['checkupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['checkappupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkappupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['upgradenotice'])) { ?>
<script type="text/javascript">
jQuery(document).ready(function(){
try{jQuery('#systemNotice').load('misc.php?mod=upgrade&action=upgradenotice');}catch(e){};	
});
</script>
<div id="systemNotice" class="systemNotice" style="position: fixed;right:10px;bottom:10px;max-width:50%;box-shadow:0px 5px 10px RGBA(0,0,0,0.3);z-index:999999"></div>
<?php } } if($_G['setting']['statcode']) { ?>
<?php echo $_G['setting']['statcode'];?>
<?php } ?> 
</body>
</html>