
	<div class="no_paging_box">
		<?
			if ($listCurPage > 1) {
				$prevpage = $listCurPage - 1;
		?>
			<div class="no_sub02_next">
				<a href="javascript:void(0);"  title="이전" onClick="goListMove(<?=$prevpage?>, '<?=$PHP_SELF?>');">
					<span></span>
				</a>
			</div>
		<? } else { ?>
			<div class="no_sub02_next">
				<a href="javascript:void(0);"  title="이전">
					<span></span>
				</a>
			</div>
		<? } ?>

			
		<ul>
		<?
			for ($x = ($listCurPage - $pageBlock); $x < (($listCurPage + $pageBlock) + 1); $x++) {

			   if (($x > 0) && ($x <= $Page)) {
				   if ($x == $listCurPage) {
		?>
			
				<li class="no_num_active">
					<a href="javascript:void(0);" class="page_num no_sub_pagination_pos_focus" title="<?=$x?>페이지"><?=$x?></a>
				</li>
		<? 
					}else{
		?>
			<li class="no_num">
				<a href="javascript:void(0);" class="page_num" title="<?=$x?>페이지" onClick="goListMove(<?=$x?>, '<?=$PHP_SELF?>');"><?=$x?></a>
			</li>
		<?
					} //end else
				} //end if 
			} //end for
		?>
		</ul>



		<?
			if ($listCurPage != $Page) {
				 $nextpage = $listCurPage + 1;
		?>
			<div class="no_sub02_next">
				<a href="javascript:void(0);"  title="다음" onClick="goListMove(<?=$nextpage?>, '<?=$PHP_SELF?>');">
					<span></span>
				</a>
			</div>
		<?
			}else{
		?>
			<div class="no_sub02_next">
				<a href="javascript:void(0);" title="다음">
					<span></span>
				</a>
			</div>
		<?
			}
		?>
	</div>



<script>
function goListMove(start, url){
	$("#frm").append("<input type='hidden' name='page' value='"+start+"'>");
	$("#frm").attr("action", url);
	$("#frm").submit();
}
</script>