$(document).ready(function() {
    // 全屏滑动
    $('.wp-inner').fullpage({});



     // ÒôÀÖ
    var ETYPE = 'ontouchend' in window ? 'touchend' : 'click';
    var audioHandle = document.getElementById('BGMPlayer');
    var audioBtn = document.getElementById('BGMbtn');

    var isPlayingMusic = false;   
    var playMusic =  function (e) {
         audioHandle.play();
         isPlayingMusic = true;
         $(audioBtn).addClass('on');
    }

    $(audioBtn).on(ETYPE, function (e) {
         if(isPlayingMusic){
             audioHandle.pause();
             $(audioBtn).removeClass('on');
         }else{
             audioHandle.play();
              $(audioBtn).addClass('on');
         }
         isPlayingMusic = !isPlayingMusic;
    });
    $(document).one(ETYPE,function(){
      playMusic();
    });

    // 图片滑动
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,

    });

    //表单验证      
    var aInput = document.getElementsByTagName('input');
    var company = aInput[0];
    var tel = aInput[1];
    var name = aInput[2];
    var aI = document.getElementsByTagName('i');
    var company_i = aI[0];
    var tel_i = aI[1];
    var name_i = aI[2];

    company.onblur = function(){  
        event.preventDefault();
        var re = /[^\w\u4e00-\u9fa5]/g;

        var test = document.getElementById('test');

        //不能含非法字符，或者为空
        if(re.test($.trim(this.value)) || (!this.value)){ 
            company_i.style.backgroundImage = "url('img/error.png')";
        }else{
            company_i.style.backgroundImage = "url('img/ok.png')";
        }
    }

    tel.onblur = function(){
        var re = /^(0|86|17951)?(13[0-9]|15[012356789]|18[0-9]|14[57]|17[0-9])[0-9]{8}$/;
        //号码格式不正确，或者为空
        if(!re.test($.trim(this.value)) || (!this.value)){ 
            tel_i.style.backgroundImage = "url('img/error.png')";
        }else{
            tel_i.style.backgroundImage = "url('img/ok.png')";
        }
    }

    name.onblur = function(){  
        event.preventDefault();
        var re = /[^\w\u4e00-\u9fa5]/g;
        //不能含非法字符，或者为空
        if(re.test($.trim(this.value)) || (!this.value)){ 
            name_i.style.backgroundImage = "url('img/error.png')";
        }else{
            name_i.style.backgroundImage = "url('img/ok.png')";
        }
    }


    // 表单提交
    $("form").submit(function() {
        var infos = $('#infos').serialize();
        $.getJSON("http://baidu.12t.cn/api.php?callback=?", infos, 
        function(json) {
            if (json.error == 0) {
                $(".message").html("提交成功！");
                alert("提交成功！");

            } else {
                $(".message").html(json.msg);
            };

        });
        return false;
    });

    // 图片双击放大
    $(".swiper-wrapper img").on('click', function(event) { 
            event.preventDefault();
      
            if ($(".imgbox")) {
                $(".imgbox").remove();
            }
            var picnum = $(this).attr('picdata');
            var src = "img/example"+picnum+".png";
            var div = $("<div />",{class:"imgbox"});
            div.append('<a href="#"><img src="'+src+'"/></a>');       

            $(".page3").append(div);

             $(".imgbox img").on('touchend', function(event) {
                 event.preventDefault();
                 $(".imgbox").remove();
             });
     

    });


})