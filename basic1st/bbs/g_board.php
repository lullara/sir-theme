<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/g_board.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "회사소개";
$gr_id ='board';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<!-- 메인화면 최신글 시작 -->

<!-- 메인화면 최신글 끝 -->

<?php
include_once('./_tail.php');
?>
