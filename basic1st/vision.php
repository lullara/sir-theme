<?php

include_once('./_common.php');


	$co_id = "vision";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "비전";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>

$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora aperiam illum ex optio temporibus eum distinctio impedit tenetur facilis maiores vero quisquam sequi, ducimus earum sapiente expedita quidem soluta dolore quod! Iste perferendis quam, molestias veniam accusamus hic, vitae quas fuga repudiandae quisquam! Cupiditate aliquam necessitatibus qui est voluptate ea aliquid repudiandae harum voluptatibus cum modi, quam distinctio, fugit laboriosam doloribus unde, voluptas consectetur quaerat neque laudantium numquam, at doloremque veniam! Illum consequatur, provident corporis doloremque voluptatibus quaerat accusantium, sit odit mollitia ducimus laborum ut et. Cum aperiam aliquid impedit consequatur doloremque nisi, quisquam a quaerat, esse omnis similique magnam!</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>