<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/p_no_cablecar.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "No Cable Car";
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<!-- 메인화면 최신글 시작 -->
<div style="text-align:center">
    <img src="<?php echo G5_IMG_URL ?>/p_no_cablecar.jpg" style="max-width:100%; height:auto;"><br>
    <br>
    <br>
    <font size=4><b><font color="#8AC007">설악산 케이블카 반대</font></b></font><br>
    <br>
    <font size=2><b>출처 : 녹색연합</b></font><br>
</div>
<!-- 메인화면 최신글 끝 -->

<?php
include_once('./_tail.php');
?>
