$(function(){

    //首页轮播图
    var i=0;
    var timer;

    $(document).ready(function(){
        $(".ig").eq(0).show().siblings(".ig").hide();
        showtime();
    });
    $('.tab').hover(function () {
        i=$(this).index();
        show();
        clearInterval(timer);
    },function () {
        showtime();
    });

    function showtime(){
        timer=setInterval(function(){
            show();
            i++;
            if(i==5) {
                i=0;
            }
        },2000);
    }

    function show(){
        $('.ig').eq(i).fadeIn(300).siblings('.ig').fadeOut(300);
        $('.tab').eq(i).addClass('tabbg').siblings('.tab').removeClass('tabbg');
    }


    //首页行业导航控制
    $(".box1_bottom").mouseover(function(){
        var box=$(".alls");
        var shanjx=$(".shanjx");
        box.css({'display':'block',});
        shanjx.css({'display':'block',});

    });
    $(".alls").mouseleave(function(){

        var box=$(".alls");
        var shanjx=$(".shanjx");
        box.css({'display':'none',});
        shanjx.css({'display':'none',});

    });

    document.addEventListener("click",function(){
        var box=$(".alls");
        var shanjx=$(".shanjx");
        box.css({'display':'none',});
        shanjx.css({'display':'none',});
    });

//主导航，鼠标移动选择项
    var first=$(".on");
    $(".nLi").hover(function(){
        first.removeClass('on');
        $(this).addClass('on').siblings('.nli').removeClass('on');
        },function () {
            $(this).removeClass('on');
            /*first.addClass('on');*/
        });
    $(".nav_bg").mouseleave(function () {
            first.addClass('on');
    });

    //注册页，input表单focus 变型效果 及客户端验证

    //这里是邮箱客户端验证
    $("#email").focus(function(){
        $("#email_title").addClass('item_title_float').removeClass('item_title');
        $(this).addClass('form_input_float');
        $(this).next(".error").css("display","none").text("不能为空");
        $(this).next().next(".right_igon").css("display","none");
        $(this).blur(function(){
            var isEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            var email = $.trim($('#email').val());
            if(email!==""){
                if(isEmail.test(email)){
                    $(this).next().next(".right_igon").css("display","inline-block");
                }else{
                    $(this).next(".error").css("display","inline-block").text("邮箱格式不正确");
                    $(this).next().next(".right_igon").css("display","none");
                    return false;
                }
            }else {
                $("#email_title").addClass('item_title').removeClass('item_title_float');
                $(this).removeClass('form_input_float');
                $(this).next(".error").css("display","inline-block");
                return false;
            }

        });
    });
    //这里是用户名验证
    $("#username").focus(function(){
        $("#username_title").addClass('item_title_float').removeClass('item_title');
        $(this).addClass('form_input_float');
        $(this).next(".error").css("display","none").text("不能为空");
        $(this).next().next(".right_igon").css("display","none");
        $(this).next().next().next(".grey").css("display","inline-block");

        $(this).blur(function(){
            $(this).next().next().next(".grey").css("display","none");
            var username="";
                username = $.trim($('#username').val());
            if(username!==""){
                $(this).next().next(".right_igon").css("display","inline-block");
            }else{
                $(this).next(".error").css("display","inline-block").text("不能为空");
                $("#username_title").addClass('item_title').removeClass('item_title_float');
                $(this).removeClass('form_input_float');
                return false;
            }
        });
    });
    //这里是密码验证
    $("#password").focus(function(){
        $("#password_title").addClass('item_title_float').removeClass('item_title');
        $(this).addClass('form_input_float');
        $(this).next(".error").css("display","none").text("不能为空");
        $(this).next().next(".right_igon").css("display","none");
        $(this).next().next().next(".grey").css("display","inline-block");
        $(this).blur(function(){
            $(this).next().next().next(".grey").css("display","none");
            var password="";
            password = $.trim($('#password').val());
            if(password!==""){
                if(password.length>=6){
                    if(password.length<=20){
                        $(this).next().next(".right_igon").css("display","inline-block");
                    }else{
                        $(this).next(".error").css("display","inline-block").text("长度最大20位");
                        return false;
                    }


                }else {
                    $(this).next(".error").css("display","inline-block").text("长度最少6位");
                    return false;
                }
            }else{
                $(this).next(".error").css("display","inline-block").text("不能为空");
                $("#password_title").addClass('item_title').removeClass('item_title_float');
                $(this).removeClass('form_input_float');
                return false;
            }
        });
    });
    //这是是确认密码验证
    $("#password2").focus(function(){
        $("#password2_title").addClass('item_title_float').removeClass('item_title');
        $(this).addClass('form_input_float');
        $(this).next(".error").css("display","none").text("不能为空");
        $(this).next().next(".right_igon").css("display","none");

        $(this).blur(function(){
             var password2 = $.trim($("#password2").val());
             var password = $.trim($("#password").val());
            if(password2!=="") {
                if (password2.length >= 6){
                    if(password2.length <= 20){
                        if(password==password2){
                            $("#password2").next().next(".right_igon").css("display", "inline-block");
                        }else{
                            $("#password2").next(".error").css("display", "inline-block").text("两次输入的密码不一致");
                        }

                    }else{
                        $("#password2").next(".error").css("display", "inline-block").text("长度最大20位");
                        return false;
                    }

                }else{
                    $("#password2").next(".error").css("display", "inline-block").text("长度最少6位");
                    return false;
                }

            }else {
                $(this).next(".error").css("display", "inline-block").text("不能为空");
                $("#password2_title").addClass('item_title').removeClass('item_title_float');
                $(this).removeClass('form_input_float');
                return false;

            }
        });
    });
    //这里是验证码验证
    $("#verify").focus(function(){
        $("#verify_title").addClass('item_title_float').removeClass('item_title');
        $(this).addClass('form_input_float');
        $(this).next(".error").css("display","none").text("不能为空");
        $(this).next().next(".right_igon").css("display","none");
        $(this).blur(function(){
            var verify = $.trim($('#verify').val());
            var errorWidth=$(".error").width();
            var right_igon_width=$(".right_igon").width();
            if(verify!==""){
                if(verify.length<4){
                    $(this).next(".error").css("display","inline-block").text("验证码为4位");
                    return false;
                }else{
                    $(this).next().next(".right_igon").css("display","inline-block");
                }

            }else{
                $(".verify_img").css("margin-left",errorWidth/2-15);
                $(this).next(".error").css("display","inline-block").text("不能为空");
                $("#verify_title").addClass('item_title').removeClass('item_title_float');
                $(this).removeClass('form_input_float');
                return false;
            }
        });
    });

    //注册提交按钮
    $(".formbottom").click(function(){
        var email=$.trim($("#email").val());
        var username=$.trim($("#username").val());
        var password=$.trim($("#password").val());
        var password2=$.trim($("#password2").val());
        var verify=$.trim($("#verify").val());
        if(email=="" && username=="" && password=="" && password2=="" && verify=="" ){
            $(".error").css("display","inline-block");
            return false;
        }
        if(email==""){
            $("#email error").css("display","inline-block");
            return false;
            }else{
                var isEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                if(isEmail.test(email)){
                    $("#email").next().next(".right_igon").css("display","inline-block");
                }else{
                    $("#email error").css("display","inline-block");
                    return false;
                }
        }
        if(username==""){
            $("#username error").css("display","inline-block");
            return false;
            }else{
                $("#username").next().next(".right_igon").css("display","inline-block");
        }
        if(password==""){
            $("#password error").css("display","inline-block");
            return false;
            }else{
                if(password.length>=6){
                    if(password.length<=20){
                        $("#password").next().next(".right_igon").css("display","inline-block");
                    }else{
                        $("#password").next(".error").css("display","inline-block").text("长度最大20位");
                        return false;
                    }
                }else {
                    $("#password").next(".error").css("display","inline-block").text("长度最少6位");
                    return false;
                }
        }
        if(password2==""){
            $("#password2 error").css("display","inline-block");
            return false;
        }else{
            if(password2==password){
                if(password.length>=6){
                    if(password.length<=20){
                        $("#password2").next().next(".right_igon").css("display","inline-block");
                    }else{
                        $("#password2").next(".error").css("display","inline-block").text("长度最大20位");
                        return false;
                    }
                }else {
                    $("#password2").next(".error").css("display","inline-block").text("长度最少6位");
                    return false;
                }
            }else{
                $("#password2").next(".error").css("display","inline-block").text("两次输入的密码不一致");
                return false;
            }
        }
        if(verify==""){
            $("#verify").next(".error").css("display","inline-block");
            return false;
        }else{
            if(verify.length<4){
                $("#verify").next(".error").css("display","inline-block").text("长度为4位");
                return false;
            }else{
                $("#verify").next().next(".right_igon").css("display","inline-block");
            }
        }
        $.ajax({
            type:'post',
            url:Thinkphp['regist'],
            data:{
                email: email,
                username: username,
                password: password,
                password2: password2,
                verify: verify,
            },
            dataType:'json',
            success:function(data){
                $(data).each(function(k,v){
                    if(v.num==1){
                            window.location.href=v.link;
                    }
                    if(v.num==2){
                        alert(v.error);
                    }
                    if(v.num==3){
                        alert(v.error);
                    }
                    if(v.num==4){
                        alert(v.error);
                    }
                });
            }
        });
    });

    //登陆js效果
        $("#login").click(function(){
            var email=$("#email").val();
            var password=$("#password").val();
            var verify=$("#verify").val();
            if(email=="" && password=="" &&  verify==""){
                $(".error").css("display","inline-block");
                return false;
            }
            if(email==""){
                $("#email error").css("display","inline-block");
                return false;
            }else{
                var isEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                if(isEmail.test(email)){
                    $("#email").next().next(".right_igon").css("display","inline-block");
                }else{
                    $("#email error").css("display","inline-block");
                    return false;
                }
            }
            if(password==""){
                $("#password error").css("display","inline-block");
                return false;
            }else{
                if(password.length>=6){
                    if(password.length<=20){
                        $("#password").next().next(".right_igon").css("display","inline-block");
                    }else{
                        $("#password").next(".error").css("display","inline-block").text("长度最大20位");
                        return false;
                    }
                }else {
                    $("#password").next(".error").css("display","inline-block").text("长度最少6位");
                    return false;
                }
            }
            if(verify==""){
                $("#verify").next(".error").css("display","inline-block");
                return false;
            }else{
                if(verify.length<4){
                    $("#verify").next(".error").css("display","inline-block").text("长度为4位");
                    return false;
                }else{
                    $("#verify").next().next(".right_igon").css("display","inline-block");
                }
            }
            $.ajax({
                type:'post',
                url:Thinkphp['login'],
                data:{
                    email:email,
                    password:password,
                    verify:verify,
                },
                dataType:'json',
                success:function (data) {
                    $(data).each(function(k,v){
                        if(v.num==1){
                            window.location.href=v.url;
                        }
                        if(v.num==2){
                            alert(v.error);
                        }
                        if(v.num==3){
                            alert(v.error);
                        }
                        if(v.num==4){
                            alert(v.error);
                        }
                        if(v.num==5){
                            alert(v.error);
                        }
                    });
                }
                
            });
        });

    //打赏功能JS开始
        $('.platform-radio-box').click(function(){
            var platform_checked=$('.platform-checked');
            platform_checked.removeClass('platform-checked');
            $(this).addClass('platform-checked').siblings('.platform-radio-box').removeClass('platform-checked');
            var data_id=platform_checked.attr('data-id');
            if(data_id=='weichat'){
                $('.cy-reward-code img').each(function(){
                    var node_type=$(this).attr('node-type');
                    if(node_type=='alipay-code'){
                        $(this).css('display','block').siblings('.cy-reward-code img').css('display','none');
                    }
                });
            }
            if(data_id=='alipay'){
                $('.cy-reward-code img').each(function(){
                    var node_type=$(this).attr('node-type');
                    if(node_type=='weichat-code'){
                        $(this).css('display','block').siblings('.cy-reward-code img').css('display','none');
                    }
                });
            }
        });
        $('.dashang_top').click(function(){
            $('#cy-reward-pop').show();
        });
        $('.cy-close-btn').click(function(){
            $('#cy-reward-pop').hide();
        });
        //打赏功能JS结束






});
