<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

</div>
   <? if(!defined("_INDEX_")){ ?>
    <!-- 메인화면이 아니면 표출x 
      head.php p317~321 --> 
    <?}?>
        <!-- </div> container_wr -->
    </div><!--  wrapper -->
   
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
   <div class="ft_wrap clearfix">
       <div class="left">
            <div class="menu">
               <ul class="clearfix">
                   <li><a href="#">회사소개</a></li>
                   <li><a href="#">시공상세도</a></li>
                   <li><a href="#">주요실적</a></li>
                   <li><a href="#">게시판</a></li>
               </ul>
           </div>
           <address>
               ADDRESS:경기도 평택시 송탄로 196,2층(서정동) TEL : 031-667-6359 FAX : 031-666-5359
           </address>
           <div id="ft_copy">Copyright &copy; <b>REBARWORKS</b> All rights reserved.</div>
       </div>
       <div class="right">
           <div class="logo">
               <img src="<? echo G5_THEME_IMG_URL ?>/f-logo.png" alt="" style="width:200px;height:44px;">>
           </div>
   </div>
   </div>


    
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        
    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<!-- <?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
 -->
<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>