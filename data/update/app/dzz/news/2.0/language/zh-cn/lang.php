<?php
if(!defined('IN_DZZ')) {
	exit('Access Denied');
}
$lang = array
(
 //发表评论，通知信息发布者
	'news_moderator_2_title'	=>'信息被审核退回了',
	'news_moderator_2'			=>'{author}审核意见:<span class="danger">{modreason}</span>  <a href="{url}" >现在去看看</a>',
	'news_moderator_2_wx'	=>'{author}审核意见:<span class="danger">{modreason}</span>',
	'news_moderator_2_redirecturl'	=>'{url}',
	
	//发表评论，通知信息发布者
	'news_moderator_1_title'	=>'信息审核通过了',
	'news_moderator_1'			=>'{author}审核意见：<span class="success">{modreason}</span>  <a href="{url}">现在去看看</a>',
	'news_moderator_1_wx'	=>'{author}审核意见:<span class="success">{modreason}</span>',
	'news_moderator_1_redirecturl'	=>'{url}',
	
	//发表评论，通知信息发布者
	'news_moderate_title'	=>'有需要审核的信息',
	'news_moderate'			=>'{author}提醒您有新信息需要审核 <a href="{url}">现在去看看</a>',
	'news_moderate_wx'	=>'{author}提醒您有新信息需要审核',
	'news_moderate_redirecturl'	=>'{url}',
	
	//通知用户查看信息
	'news_publish_title'	=>'有新发布的信息',
	'news_publish'			=>'{author}发布了新闻 <a href="{url}" >{subject}</a>',
	'news_publish_wx'			=>'{author}您查看新信息', 
	'news_publish_redirecturl'=> '{url}',
	'appname'=>'新闻',
	'manage_setting'=>'管理设置',
	'base_setting'=>'基本设置',
	'wx_setting'=>'微信设置',
	'model_setting'=>'板块设置',
	'manager_setting'=>'管理员设置',
	'add_manager'=>'添加管理成员',
	
	
	'message_setting'=>'信息发布权限',
	'all_user'=>'全站用户',
	'only_user'=>'指定用户',
	'add_user'=>'添加成员',
	'message_audit'=>'信息审核',
	'none_audit'=>'不需要审核',
	'need_audit'=>'需要审核（管理员例外）',
	'click_can_editorupdate'=>'点击可以编辑或删除',
	'model_name'=>'版块名称',
	'add_new_model'=>'添加新板块',
	'do_success' => '操作成功',


	// 2.2添加
	'return'=>'返回',
	'news_title'=>'新闻标题',
	'news_type'=>'信息分类',
	'choose_news_type'=>'请选择分类',
	'news_content_type'=>'信息内容类型',
	'text_content'=>'文本内容',
	'img_content'=>'图片内容',
	'ahref_address'=>'超链接地址',
	'href_address'=>'链接地址',
	'comment_switch'=>'评论开关',
	'vote_switch'=>'投票开关',
	'information_title'=>'信息标题',
	'can_also_type_in'=>'还可以输入',
	'character'=>'个字符',
	'issue_range'=>'发布范围',
	'no_choose_click_add_issue_range'=>'不选择发布范围，全部可见；点击左侧的发布范围可以添加删除发布范围',
	'from_desktop_selection'=>'从桌面选择',
	'can_drag_img_this_place'=>'也可以把图片拖放到该区域',
	'save_as_draft'=>'保存为草稿',
	'no_save_leave_sure'=>'当前内容没有保存，确定要离开吗？',
	'input_link_address'=>'请输入链接地址',
	// 结束
	
	
	// 2.4修改
	'all_news'=>'全部信息',
	'controller_options'=>'操作选项',
	'have_published'=>'已发布',
	'unread'=>'未读',
	'read'=>'已读',
	'check_pending'=>'待审核',
	'draft'=>'草稿',
	'highlight_deadline'=>'高亮截止日期',
	'top_off_date'=>'置顶截止日期',
	'back_in'=>'退回于',
	'reasons_for_returning'=>'退回原因',
	'last_modified'=>'最后修改',
	'promulgator'=>'发布者',
	'comments'=>'评论次数',
	'human_count'=>'查看人数',
	'people'=>'人',
	'information_transmission'=>'信息发送中...',
	'remind_the_administrator_to_review'=>'提醒管理员审核',
	'compile'=>'编辑',
	'successfully_add_desktop_shortcuts'=>'成功添加桌面快捷方式',
	'no_any_pictures'=>'还没有图片！',
	'too_little_information'=>'信息内容太少！',
	'the_poll_title_cannot_be_empty'=>'投票标题不能为空',
	'vote_for_at_least_two_items'=>'投票项目至少为2项！',
	'move'=>'移动',
	'top_off'=>'置顶',
	'highlight'=>'高亮',
	'check'=>'审核',
	'move_to_scan'=>'移动至',
	'term_set_top'=>'置顶期限',
	'select_the_top_closing_date_and_leave_the_top_blank'=>'选择置顶截止日期，留空取消置顶',
	'highlight_set'=>'高亮设置',
	'select_the_highlight_deadline_and_leave_the_highlight_blank'=>'选择高亮截止日期，留空取消高亮',
	'click_choose_color'=>'点击选择颜色',
	'bold'=>'粗体',
	'italic'=>'斜体',
	'underline'=>'下划线',
	'are_you_sure_you_want_to_delete_the_selected_information'=>'确定要删除所选择的信息吗（此操作不可恢复）？',
	'audit_opinion'=>'审核意见',
	'review_comments_to_inform_the_user_of_the_failure_of_the_cause'=>'审核意见，借此通知用户未通过原因',
	'Review the return'=>'审核退回',
	'pass_the_audit'=>'审核通过',
	'add'=>'添加',
	'move_up'=>'上移',
	'shift_down'=>'下移',
	'add_type'=>'添加分类',
	'category_parent'=>'上级分类',
	'category_delete'=>'分类删除',
	'determine_to_delete_the_taxonomy'=>'确定要删除分类',
	'classification_of_all_subordinates'=>'及其所有下属分类（此操作不可恢复）？',


	// 2.5修改
	'informations'=>'信息',
	'publications'=>'发布于',
	'changes'=>'修改于',
	'review_on'=>'审核于',
	'range'=>'范围',
	'consult_the_situation'=>'查阅情况',
	'login_system'=>'登录系统',
	'boardtype'=>'版块名称',
	'enter_user_name_search'=>'输入用户名搜索',
	'no_unloading'=>'不卸载',
	'determine_uninstall_application'=>'确定卸载应用',
	'this_operation_deletes_the_application'=>'此操作将删除应用',
	'all_data_be_careful'=>'内所有数据，请慎重',
	'confirm_deletions'=>'如果确实需要删除，请在下面输入 DELETE 字样确认删除',
	// 结束
	

	// 3.2添加
	'there_is_no_news_in_the_current_version'=>'目前版本内暂无相关新闻',
	'allowed_to_publish_information'=>'允许发布信息的用户',
	'have_no_right'=>'没有权限',
	'alert_messages_to_be_sent_successfully'=>'提醒信息发送成功',
	'delete_failure'=>'删除失败',
	'message_header_cannot_be_empty'=>'信息标题不能为空',
	'tape_release_failure'=>'发布失败',
	'non_agency_personnel'=>'无机构人员',
	'name_cannot_be_empty'=>'名称不能为空',
	'the_name_cannot_be_repeated'=>'名称不能重复',
	'modify_successfully'=>'修改成功',
	'new_success'=>'新增成功',
	'successfully_delete'=>'删除成功',
	'printf'=>'排序成功',
	'shanghai_leyun_net'=>'上海乐云网络协作平台',
	'press_center'=>'新闻中心',
	'search'=>'搜索',
	'my_released'=>'我发布的',
	'drafts'=>'草稿箱',
	'headline'=>'标题',
	'content'=>'内容',
	'content_type'=>'内容类型',
	'0_article'=>'0为文章',
	'1_images'=>'1为图片',
	'2_link'=>'2为链接',
	'author'=>'作者',
	'approver'=>'审批人',
	'add_time'=>'添加时间',
	'review_status'=>'评论状态',
	'1_start_0_close'=>'1为开启0为关闭',
	'vote_state'=>'投票状态',
	'popular_in_these_categories'=>'所属分类',
	'state_of_the_news'=>'新闻状态',
	'1_open_2_audit_3_draft'=>'1为公开2为审核3为草稿',
	'reading_range'=>'阅读范围',
	'department'=>'部门',
	'personnel'=>'人员',
	'top_order'=>'置顶顺序',
	'sticky_time'=>'置顶时间',
	'expiration_date_of_purchase'=>'置顶过期时间',
	'is_highlight'=>'是否高亮',
	'highlighting_the_style'=>'高亮样式',
	'highlight_expiration_time'=>'高亮过期时间',
	'number_of_reviews'=>'评论数量',
	'the_parent_category'=>'父分类',
	'name_of_news_classification'=>'新闻分类名称',
	'sequence'=>'排序号',
	'1_normal'=>'1正常',
	'1_delete'=>'1删除',
	'reader'=>'读者',
	'reader_UID'=>'阅读者UID',
	'reading_time'=>'阅读时间',
	'times_of_view'=>'阅读次数',
	'announcement'=>'公告',
	'company_news'=>'公司新闻',
	'staff_presence'=>'员工风采',
	'financial_report'=>'财经新闻',
	'political_news'=>'时政新闻',
	'company_activity'=>'公司活动',

	'type_add_failure'=>'分类添加失败',
	'new_news'=>'最新信息',
	'information_center'=>'信息中心',
	'wechat_apply_settings'=>'微信信息应用设置',
	'enterprise_news_information_application'=>'企业新闻和信息应用，通过它可以让员工随时了解企业的最新资讯和新闻。',
	'check_pending_is'=>'待审核的',
	'my_draft'=>'我的草稿',
	'my_unread'=>'我未读的',
	'setup_menu'=>'设置菜单KEY值',
	'setup_menu_href'=>'设置菜单跳转链接',
	'tape_release_failure_agentid'=>'发布失败，应用还没有创建微信agentid',
	'my_news'=>'我的信息',
	'unread_messages'=>'未读信息',
	'this_news_has_been_moved'=>'信息不存在或已删除',
	'have_no_right_contact_your_administrator'=>'您没有查看此信息的权限，请联系管理员',
	'no_relevant_content'=>'还没有相关内容',
	'send_to_here'=>'平台的消息和通知会及时的发送到此处',
);
?>  