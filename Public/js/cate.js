$(window).load(function(){
    waterfall('list','goods_box');
});
function waterfall(parent,clsName){
    var $parent = $('#'+parent);//父元素
    var $boxs = $parent.find('.'+clsName);//所有box元素
    var iPinW = $boxs.eq( 0 ).width()+5;// 一个块框box的宽
    var cols = Math.floor( 1110 / iPinW );//列数
    $parent.width(iPinW * cols).css({'margin': '0 auto'});
    var pinHArr=[];//用于存储 每列中的所有块框相加的高度。
    $boxs.each( function( index, dom){
        if( index < cols ){
            pinHArr[ index ] = $(dom).height(); //所有列的高度
            $(dom).css({
                'width':'270px',
                'position': 'absolute',
                'top': 0,
                'left': (270+10)*index
            });
        }else{
            var minH = Math.min.apply( null, pinHArr );//数组pinHArr中的最小值minH
            var minHIndex = $.inArray( minH, pinHArr );
            $(dom).css({
                'width':'270px',
                'position': 'absolute',
                'top': minH + 15,
                'left': $boxs.eq( minHIndex ).position().left
            });
            //添加元素后修改pinHArr
            pinHArr[ minHIndex ] += $(dom).height() + 15;//更新添加了块框后的列高
        }
        var maxH=Math.max.apply( null, pinHArr )+15;
         $('.list_box').css({'height':maxH+'px'});
    });
}