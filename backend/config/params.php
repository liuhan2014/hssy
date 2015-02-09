<?php
// piwik auth token
$token = "b455650c9e488198cf4fbfe0aea5bf2b";

return [
    'adminEmail' => 'admin@example.com',

    /** 
     * 此配置文件用于配置 类型 状态信息
     * 
     * @date  2014-12-11
     * 
     * @author liuh
     */
    

    //  customer config
    'customer_status' =>[
		1 => '新纪录',
		2 => '跟进中',
		3 => '提交门市',
		4 => '失败',
		5 => '生成订单',
		6 => '退单'
	], 
	
    
    'customer_type' => [
		1 => '婚纱照',
		2 => '艺术写真',
		3 => '孕妇照',
		4 => '儿童照',
		100  => '其它',
	],


	
    // visit config
    'visit_result' => [
		1 => '无法接通',
		2 => '无意向',
		3 => '待追踪',
		4 => '确定进店',
		5 => '失败',
	],


    // failure config
    'failure_type' => [
		1 => '价格偏高',
		2 => '套系内容',
		3 => '路程太远',
		4 => '服装不满意',
		5 => '化妆不满意',
		6 => '风格不满意',
		100  => '其它',
	],

    // order config
    'order_status' => [
		1 => '预约',
		2 => '全款',
		3 => '拍摄完成',
		4 => '取件完成',
	],



    /**
     * Piwik API
    */
    'param_explain' => sprintf('http://123.57.10.186/piwik/index.php?module=API&method=API.getDefaultMetricTranslations&format=json&token_auth=%s',$token),
    'getKeywords' => sprintf('http://123.57.10.186/piwik/index.php?module=API&method=Referrers.getKeywords&token_auth=%s',$token),
    'getUrl' => sprintf("http://123.57.10.186/piwik/index.php?module=API&method=Actions.getPageUrl&token_auth=%s",$token),

    'piwik_params' => [
          'nb_visits' => '访问次数',
          'nb_uniq_visitors' => '访客数',
          'nb_actions' => '活动次数',
          'nb_users' => 'Users',
          'nb_actions_per_visit' => '平均活动次数',
          'avg_time_on_site' => '平均停留时间',
          'bounce_rate' => '跳出率',
          'conversion_rate' => '转化率',
          'label' => '标签',
          'date' => '日期',
          'avg_time_on_page' => '平均停留时间',
          'sum_time_spent' => '网站停留时间 (秒)',
          'sum_visit_length' => '网站停留时间 (秒)',
          'bounce_count' => '跳出次数',
          'bounce_count_returning' => '老访客的跳出次数',
          'max_actions' => '单次访问的最大活动量',
          'max_actions_returning' => '老访客的最大活动次数',
          'nb_visits_converted_returning' => '老访客的转化次数',
          'sum_visit_length_returning' => '老访客总的停留时间 (秒)',
          'nb_visits_converted' => '访问转化',
          'nb_conversions' => '目标转化',
          'revenue' => '收益',
          'nb_hits' => '浏览次数',
          'entry_nb_visits' => '进入次数',
          'entry_nb_uniq_visitors' => '唯一入口页面',
          'exit_nb_visits' => '退出页',
          'exit_nb_uniq_visitors' => '唯一退出页',
          'entry_bounce_count' => '跳出次数',
          'exit_bounce_count' => '跳出次数',
          'exit_rate' => '退出率',
          'sum_daily_nb_uniq_visitors' => '访客数 (日汇总)',
          'sum_daily_nb_users' => 'Users (日汇总)',
          'sum_daily_entry_nb_uniq_visitors' => '唯一入口页面 (日汇总)',
          'sum_daily_exit_nb_uniq_visitors' => '唯一退出页 (日汇总)',
          'entry_nb_actions' => '活动次数 进入这里之后',
          'entry_sum_visit_length' => '网站停留时间 (秒) 进入这里之后',
          'nb_pageviews' => '浏览次数',
          'nb_uniq_pageviews' => '唯一页面浏览量',
          'nb_downloads' => '下载次数',
          'nb_uniq_downloads' => '唯一下载次数',
          'nb_outlinks' => '离站链接数量',
          'nb_uniq_outlinks' => '唯一离站链接数量',
          'nb_searches' => '搜索次数',
          'nb_keywords' => '关键词数量',
          'avg_time_generation' => '平均生成时间',
          'nb_pages_per_search' => '搜索结果页',
          'nb_hits_following_search' => '结果点击次数',
          'visits_evolution' => '访问次数 趋势',
          'actions_evolution' => '活动次数 趋势',
          'pageviews_evolution' => '浏览次数 趋势',
          'revenue_evolution' => '收益 趋势',
          'nb_conversions_evolution' => '目标转化 趋势',
          'orders_evolution' => '订单 趋势',
          'ecommerce_revenue_evolution' => '产品收入 趋势',
          'nb_visits_percentage' => '百分比',
          'orders' => '订单',
          'ecommerce_revenue' => '产品收入',
          'revenue_per_visit' => '每次访问价值',
          'quantity' => '数量',
          'avg_price' => '平均价格',
          'avg_quantity' => '平均数量',
          'revenue_subtotal' => '小计',
          'revenue_tax' => '税收',
          'revenue_shipping' => '运费',
          'revenue_discount' => '折扣',
          'avg_order_revenue' => '平均订单额',
          'nb_events' => 'Total events',
          'sum_event_value' => 'Total value',
          'min_event_value' => 'Minimum value',
          'max_event_value' => 'Maximum value',
          'avg_event_value' => 'Average value',
          'nb_events_with_value' => 'Events with a value',
          'nb_visits_returning' => '老访客的访问次数',
          'nb_actions_returning' => '老访客的活动次数',
          'avg_time_on_site_returning' => '老访客的平均停留时间(秒)',
          'bounce_rate_returning' => '老访客的跳出率',
          'nb_actions_per_visit_returning' => '老访客的平均活动次数',
          'nb_uniq_visitors_returning' => '独立重访客数',
          'nb_users_returning' => 'Returning Users',
          'nb_impressions' => 'Impressions',
          'nb_interactions' => 'Interactions',
          'interaction_rate' => 'Interaction Rate',
       ],

];
