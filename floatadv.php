<?php 
$data=json_decode($_POST['data']);
?>
<link rel="stylesheet" type="text/css" href="http://swap.5067.org/css/floatadv.css">
<?php foreach((array)$data as $k=>$v){?>
<div class="float popContent <?php echo 'floatAdv'.$k; ?>" style="<?php echo $v->position=='4'?'right':'left'; ?>:<?php echo $v->posx; ?>px;width:<?php echo $v->posw; ?>px;<?php echo $v->position=='3'?'bottom:'.$v->posy.'px;':'top:'.$v->posy.'px;'; ?>">
	<a class="popClose" title="关闭" >关闭</a>
	<a href="<?php echo $v->href; ?>" target="_blank"><img class="float_adv" src="<?php echo $v->url; ?>"></a>
</div>
<?php } ?>
<script>
 $(".popClose").click(function(){
        $(this).parent(".float").stop();
        $(this).parent(".float").slideUp();
  });
</script>