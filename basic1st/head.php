<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/groupmenu.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo.jpg" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
    
     
   
<!--         <script>
            $(function(){
                $("ul.snb2dul").hide();
                $(".gnb_wrap ul#gnb_1dul li").hover(function(){
                    var index = $(this).index();
                    $("ul.snb2dul").eq(index).stop().slideDown(100,"linear");
                 },function(){
                    $("ul.snb2dul").hide();
                });
            });


        </script> -->
        

        <nav id="gnb">
            <? echo groupmenu('adffix', 24); ?>
        
            <div class="gnb_wrap">
                <ul id="gnb_1dul" class="clearfix">
                 
                    <?php
                    $sql = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '2'
                                order by me_order, me_id ";
                    $result = sql_query($sql, false);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $menu_datas = array();

                    for ($i=0; $row=sql_fetch_array($result); $i++) {
                        $menu_datas[$i] = $row;

                        $sql2 = " select *
                                    from {$g5['menu_table']}
                                    where me_use = '1'
                                      and length(me_code) = '4'
                                      and substring(me_code, 1, 2) = '{$row['me_code']}'
                                    order by me_order, me_id ";
                        $result2 = sql_query($sql2);
                        for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                            $menu_datas[$i]['sub'][$k] = $row2;
                        }

                    }

                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>
                    <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                       
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                
        </nav>
        
    </div>
</div>
<!-- } 상단 끝 -->

   
<hr>
<? if(defined("_INDEX_") ) {?>

<script>
$(document).ready(function(){
    var slide = $(".slider").bxSlider({
        // auto:true,
        controls:false,
        ouchEnabled:false,
        pagerCustom:'.bx-pager'
     });
    $(".btnP").click(function(){
        slide.goToPrevSlide();
        return false;
    });
    $(".btnN").click(function(){
        slide.goToNextSlide();
        return false;
    });


});
</script>
<div class="wrap">
    <ul class="slider">
        <li>
            <img src="<? echo G5_THEME_IMG_URL ?>/bg001.jpg" alt="" style="width:100%;">
            <div class="body">
                <p>시작도 끝과 같이, <span class="b_w">끝도 시작과 같이</span></p>
                <h2>REBARWORKS</h2>
            </div>
        </li>
        <li>
            <img src="<? echo G5_THEME_IMG_URL ?>/bg002.jpg" alt="" style="width:100%;">
             <div class="body">
                <p>시작도 끝과 같이, <span class="b_w">끝도 시작과 같이</span></p>
                <h2>REBARWORKS</h2>
            </div>
        </li>
        <li>
            <img src="<? echo G5_THEME_IMG_URL ?>/bg003.jpg" alt="" style="width:100%;">
             <div class="body">
                <p>시작도 끝과 같이, <span class="b_w">끝도 시작과 같이</span></p>
                <h2>REBARWORKS</h2>
            </div>
        </li>  
        <li>
            <img src="<? echo G5_THEME_IMG_URL ?>/bg004.jpg" alt="" style="width:100%;">
             <div class="body">
                <p>시작도 끝과 같이, <span class="b_w">끝도 시작과 같이</span></p>
                <h2>REBARWORKS</h2>
            </div>
        </li> 
    </ul>
    <div class="btnP"><img src="<? echo G5_THEME_IMG_URL ?>/btn_prev_s.png" alt="" style="width:100%;"></div>
    <div class="btnN"><img src="<? echo G5_THEME_IMG_URL ?>/btn_next_s.png" alt="" style="width:100%;"></div>

        
   
</div>
<div id="main_content">
    <div class="section01 clearfix">
        <div class="left">
            <img src="<? echo G5_THEME_IMG_URL ?>/main1_left.jpg" alt="" style="width:100%;height: 100%;">
            <div class="body">
                <h2>COMPANY</h2>
                <p>라바워크스를 소개합니다.</p>
                <div class="more"><a href="#">회사소개 바로가기</a></div>
            </div>
        </div>
        <div class="right">
            <img src="<? echo G5_THEME_IMG_URL ?>/main1_right.jpg" alt="" style="width:100%; height: 100%;">
            <div class="body">
                <h2>PORTFOLIO</h2>
                <p>리바워크스의 주요실적입니다.</p>
                <div class="more">
                    <a href="#">주요실적 바로가기</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section02">
        <p>최고의 <span class="b_b">철근배근 시공상세도</span>작성 파트너와 함께하세요</p>
        <div class="table">
            <ul class="clearfix">
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img001.jpg" alt="img001"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img002.jpg" alt="img002"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img003.jpg" alt="img003"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img004.jpg" alt="img004"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img005.jpg" alt="img005"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img006.jpg" alt="img006"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img007.jpg" alt="img007"></li>
                <li><img src="<? echo G5_THEME_IMG_URL ?>/img008.jpg" alt="img008"></li>
            </ul>  
        </div>
    </div>
    <div class="section03">
        <div class="table">
            <ul class="clearfix">
                <li>
                   <a href="#">
                        <div>
                           <img src="<? echo G5_THEME_IMG_URL ?>/img009.jpg" alt="img009">
                           <p class="title">고객상담센터</p>
                           <p class="txt">TEL.031-667-6359</p>
                       </div>
                       <div class="box"></div>
                   </a>
                </li> 
                    <li>
                       <a href="#"><div>
                               <img src="<? echo G5_THEME_IMG_URL ?>/img010.jpg" alt="img010">
                               <p class="title">WORK FLOW</p>
                               <p class="txt">철근배근 시공상세도 개요</p>
                           </div>
                            <div class="box"></div></a>
                    </li>
                
                  
                    <li>
                       <a href="#"><div>
                               <img src="<? echo G5_THEME_IMG_URL ?>/img011.jpg" alt="img011">
                               <p class="title">CONTACT</p>
                               <p class="txt">견적신청하기</p>
                           </div></a>
                       <div class="box"></div>
                    </li>
                
                   
                    <li>
                       <a href="#"><div>
                                <img src="<? echo G5_THEME_IMG_URL ?>/img012.jpg" alt="img012">
                               <p class="title">LOCATION</p>
                               <p class="txt">찾아오시는 길</p>
                           </div>
                           <div class="box"></div></a>
                    </li>
                     
            </ul>


        </div>
           
            
    </div>
</div>








<?}else{?>

<style>
#subBg{height: 400px;}
#subBg .sbtImg{height: 400px; text-align: center;position: relative;}
#subBg .sbtImg .title{width: 400px; _background-color: #fff;
        left: 50%; top: 50%; transform:translate(-50%,-50%);position: absolute;}
#subBg .sbtImg .title h2{font-size:2em;}
.subTopBg_01{background:url(<? echo G5_THEME_IMG_URL ?>/subTopimg001.jpg);}
.subTopBg_02{background:url(<? echo G5_THEME_IMG_URL ?>/subTopimg001.jpg);}
.subTopBg_03{background:url(<? echo G5_THEME_IMG_URL ?>/subTopimg001.jpg);}
.subTopBg_04{background:url(<? echo G5_THEME_IMG_URL ?>/subTopimg001.jpg);}
.subTopBg_05{background:url(<? echo G5_THEME_IMG_URL ?>/subTopimg001.jpg); }

               
</style>

<div id="subBg">
    <div id="page_title" class="sbtImg">
        <div class="title">
            <span class="loc1D"><!-- 1차메뉴 --></span>
            <div class="text">  </div>
        </div>
    </div>
</div>
<script>
    // window.onload = function(){};
    window.onload = function(){
         var menuDep = $("#subBg .loc1D").html();
         console.log("현재위치 : " + menuDep);
         if(menuDep == "회사소개"){
            $("#subBg .text").text("리바워크스를 소개합니다.");
         }else if(menuDep == "사업소개"){
            $("#subBg .text").
            text("리바워커스의 사업을 소개합니다.");

         }else if(menuDep == "주요실적"){
            $("#subBg .text").
            text("리바워커스의 주요실적을 소개합니다.");

         }else if(menuDep == "게시판"){
            $("#subBg .text").
            text("리바워커스는 소통합니다.");

         }else if(menuDep == "로그인"){
           

         }
    };
   
</script>
<?}?>
  <? if(!defined("_INDEX_")){ ?>
    <div id="aside">
        <?include_once(G5_THEME_PATH.'/skin/nav/mysubmenu.php'); ?> 
    </div>
    <?}?>


<!-- 콘텐츠 시작 { -->
<div id="wrapper">
   <!--  <div id="container_wr"> -->
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?>
           
           <div id="page_title" class="sbtImg">
          

            

            <span class="locationBar" title="현재위치"><span> <em class="fa fa-home" aria-hidden="true"></em> 
            HOME 
            <i class="fa fa-angle-right" aria-hidden="true"></i> 
            </span> <span class="loc1D"><!-- 1차메뉴 --></span> 
            <span class="loc2D"><!-- 2차메뉴 --></span></span>
            </div>
             <h2 id="container_title" style="text-align:center; font-size:2.5em;">


                <span title="<?php echo get_text($g5['title']); ?>">
                <?php echo get_head_title($g5['title']); ?><br>
                </h2>
                <div class="subTitle">
                <? 
                    $subTitle = get_head_title($g5['title']); //타이틀변수
                   
                    if( $subTitle == "회사소개"){
                    ?>
                       <!-- 라바워크스입니다. -->
                       <!--  <img src="<? echo G5_THEME_IMG_URL ?>/img001.jpg" alt="img001"> -->
           

                    <?
                  }
                    // else if($subTitle == "오시는길"){
                    //     echo "ㅇ러ㅏㅓ아러아ㅣㅓㅣㄱ";
                    //     echo "<img src='";
                    //     echo G5_THEME_IMG_URL;
                    //     echo "/img001.jpg'>";
                    // }


                 ?>
                </span>
                </div>
          
            
        <?php } ?>

