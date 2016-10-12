<?php 
        $data = json_decode($_POST['data']);
        $css = '<link rel="stylesheet" type="text/css" href="http://swap.5067.org/css/floatadv.css">';
        $div = '';
        $js = '';
        foreach ((array) $data as $k => $v) {
			if($v->posw > 0){//宽度>0，显示内容
				$div .= '<div class="popContent float floatAdv' . $k . '" style="';
				if ($v->position == '4') {
					$div.='right';
				} else {
					$div.='left';
				}
				$div.=':' . $v->posx . 'px;width:' . $v->posw . 'px;';
				if ($v->position == '3') {
					$div.='bottom';
				} else {
					$div.='top';
				}
				$div.=':' . $v->posy . 'px;">';
				$div.='<a class="popClose" title="关闭" >关闭</a>';
				if (!isset($v->type)||$v->type == "adv") {
					$div.='<a href="' . $v->href . '" target="_blank"><img class="float_adv" src="' . $v->url . '"></a>';
				} else {
					$div .= $v->content;
					$js .= $v->cssjs;
				}
				$div.='</div>';
		    }
		}
        $js .= '<script>';
        $js.='$(".popClose").click(function(){
                $(this).parent(".float").stop();
                $(this).parent(".float").slideUp();
            });';
        $js.='</script>';
        echo $css . $div . $js;