//j(".channel-filter").slide({ mainCell:"ul", effect:"leftLoop", vis:4, scroll:2,  autoPage:true});
j(".box .content").slide({ titCell:".title dd",mainCell:".bd",delayTime:10 });
j(".box .shot").slide({ titCell:"dd",mainCell:".bd",delayTime:10 });
j(".box .scate").slide({ titCell:"dd",mainCell:"ul",delayTime:10 });
//刷新换一批
j(".trailers").slide({ mainCell:"ul", effect:"leftLoop", vis:7, scroll:7,  autoPage:true});

//封面

/*鼠标移过，左右按钮显示*/
j(".channel").hover(function(){ j(this).find(".prev,.next").stop(true,true).fadeTo("show",1) },function(){ j(this).find(".prev,.next").fadeOut() });
j(".channel").slide({ titCell:".title dd",mainCell:"ul", effect:"left", delayTime:800,vis:6,scroll:6,pnLoop:false,trigger:"click",easing:"easeOutCubic" });