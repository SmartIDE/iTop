<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Menu:RequestManagement' => 'ヘルプデスク',
	'Menu:RequestManagement+' => '',
	'Menu:RequestManagementProvider' => 'ヘルプデスクプロバイダー',
	'Menu:RequestManagementProvider+' => '',
	'Menu:UserRequest:Provider' => 'プロバイダーへ送られた要求をオープン',
	'Menu:UserRequest:Provider+' => '',
	'Menu:UserRequest:Overview' => '概要',
	'Menu:UserRequest:Overview+' => '',
	'Menu:NewUserRequest' => '新規ユーザ要求',
	'Menu:NewUserRequest+' => '',
	'Menu:SearchUserRequests' => 'ユーザ要求検索',
	'Menu:SearchUserRequests+' => '',
	'Menu:UserRequest:Shortcuts' => 'ショートカット',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => '私に割り当てられた要求',
	'Menu:UserRequest:MyRequests+' => '',
	'Menu:UserRequest:MySupportRequests' => '私のサポートコール',
	'Menu:UserRequest:MySupportRequests+' => '',
	'Menu:UserRequest:EscalatedRequests' => 'エスカレートされた要求',
	'Menu:UserRequest:EscalatedRequests+' => '',
	'Menu:UserRequest:OpenRequests' => '全てのオープンな要求',
	'Menu:UserRequest:OpenRequests+' => '',
	'UI:WelcomeMenu:MyAssignedCalls' => '私に割り当てられた要求',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => '最近14日の要求(タイプ別)',
	'UI-RequestManagementOverview-Last-14-days' => '最近14日の要求(日別)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'ステータス別のオープンな要求',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'エージェント別のオープンな要求',
	'UI-RequestManagementOverview-OpenRequestByType' => 'タイプ別のオープンな要求',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => '組織別のオープンな要求',
	'Class:UserRequest:KnownErrorList' => '既知のエラー',
	'Menu:UserRequest:MyWorkOrders' => '私に割り当てられた作業指示',
	'Menu:UserRequest:MyWorkOrders+' => '',
	'Class:Problem:KnownProblemList' => '既知の問題',
	'Tickets:Related:OpenIncidents' => 'Open incidents~~',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Class:UserRequest' => 'ユーザ要求',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => '状態',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => '新規',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'エスカレーションTTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => '割り当て済み',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'エスカレーションTTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => '承認待ち',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => '承認済み',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => '却下済み',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => '保留',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => '解決済み',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'クローズ',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => '要求タイプ',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'インシデント',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'サービス要求',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '',
	'Class:UserRequest/Attribute:impact' => 'インパクト',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => '部門',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'サービス',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => '人',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => '優先度',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => '最優先',
	'Class:UserRequest/Attribute:priority/Value:1+' => '',
	'Class:UserRequest/Attribute:priority/Value:2' => '高',
	'Class:UserRequest/Attribute:priority/Value:2+' => '',
	'Class:UserRequest/Attribute:priority/Value:3' => '中',
	'Class:UserRequest/Attribute:priority/Value:3+' => '',
	'Class:UserRequest/Attribute:priority/Value:4' => '低',
	'Class:UserRequest/Attribute:priority/Value:4+' => '',
	'Class:UserRequest/Attribute:urgency' => '緊急度',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => '至急',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '',
	'Class:UserRequest/Attribute:urgency/Value:2' => '高',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '',
	'Class:UserRequest/Attribute:urgency/Value:3' => '中',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '',
	'Class:UserRequest/Attribute:urgency/Value:4' => '低',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '',
	'Class:UserRequest/Attribute:origin' => '起源',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'メール',
	'Class:UserRequest/Attribute:origin/Value:mail+' => '',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'モニタリング',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => '',
	'Class:UserRequest/Attribute:origin/Value:phone' => '電話',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'ポータル',
	'Class:UserRequest/Attribute:origin/Value:portal+' => '',
	'Class:UserRequest/Attribute:approver_id' => '承認者',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => '承認者電子メール',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'サービス',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'サービス名',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'サービスサブカテゴリ',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'サービスサブカテゴリ',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'エスカレーションフラグ',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'いいえ',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'はい',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '',
	'Class:UserRequest/Attribute:escalation_reason' => 'エスカレーション理由',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => '割り当て日',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => '解決日',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => '最終保留日',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => '累積保留',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO期限',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto 合格',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto オーバー',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR期限',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr 合格',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr オーバー',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => '解決遅れ',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => '解決コード',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => '補助',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'バグ修正',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'ハードウエア修理',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'その他',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'ソフトウエアパッチ',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'システム更新',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => '研修',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '',
	'Class:UserRequest/Attribute:solution' => '解決',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => '保留理由',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => '親要求',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => '参照要求',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => '親問題',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => '参照問題',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => '親変更',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => '参照変更',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => '子要求',
	'Class:UserRequest/Attribute:related_request_list+' => '',
	'Class:UserRequest/Attribute:public_log' => '公開ログ',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'ユーザ満足度',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => '非常に満足',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => '十分満足',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => '多少不満',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => '非常に不満',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '',
	'Class:UserRequest/Attribute:user_comment' => 'ユーザコメント',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => '親要求idフレンドリー名',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => '割り当て',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => '再割り当て',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => '承認',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => '却下',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => '保留',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'タイムアウト',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => '自動解決',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => '自動クローズ',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => '解決とマーク',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'このリクエストをクローズ',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => '再オープン',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '承認待ち',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself~~',
));


Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Portal:TitleDetailsFor_Request' => '要求の詳細',
	'Portal:ButtonUpdate' => '更新',
	'Portal:ButtonClose' => 'クローズ',
	'Portal:ButtonReopen' => '再オープン',
	'Portal:ShowServices' => 'サービスカタログ',
	'Portal:SelectRequestType' => '要求のタイプを選択',
	'Portal:SelectServiceElementFrom_Service' => '%1$s のサービス要素を選択',
	'Portal:ListServices' => 'サービスのリスト',
	'Portal:TitleDetailsFor_Service' => 'サービスの詳細',
	'Portal:Button:CreateRequestFromService' => 'このサービスへの要求を作成',
	'Portal:ListOpenRequests' => 'オープンな要求のリスト',
	'Portal:UserRequest:MoreInfo' => '追加情報',
	'Portal:Details-Service-Element' => 'サービス要素',
	'Portal:NoClosedTicket' => 'クローズされた要求はありません',
	'Portal:NoService' => 'サービスはありません',
	'Portal:ListOpenProblems' => '進行中の問題',
	'Portal:ShowProblem' => '問題',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:NoOpenProblem' => 'オープンな問題はありません',
	'Portal:SelectLanguage' => '言語変更',
	'Portal:LanguageChangedTo_Lang' => '言語を変更',
	'Portal:ChooseYourFavoriteLanguage' => 'お好みの言語を選択ください',

	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info~~',
));


Dict::Add('JA JP', 'Japanese', '日本語', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization~~',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization~~',
	'Organization:Overview:Tickets' => 'Tickets for this organization~~',
));
