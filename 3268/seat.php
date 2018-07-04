<?php require_once('Connections/movie.php'); ?>
<?php
mysql_select_db($database_movie, $movie);
$query_right = "SELECT movie.mprice, playlist.pmname, playlist.ptime FROM movie, playlist WHERE playlist.spid='".$_GET['id']."' AND playlist.pmname = movie.mname";
$right = mysql_query($query_right, $movie) or die(mysql_error());
$row_right = mysql_fetch_assoc($right);
$totalRows_right = mysql_num_rows($right);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>在线选座(影院版)</title>
        <meta name="keywords" content="jQuery在线选座,jQuery选座系统" />
        <meta name="description" content="jquery.seat-charts是一款适合电影票、高铁票的在线选座插件。" />
        <link rel="stylesheet" type="text/css" href="css/jq22.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<?php
@session_start();
?>
        <style type="text/css">
            .front{width: 300px;margin: 5px 32px 45px 32px;background-color: #f0f0f0;	color: #666;text-align: center;padding: 3px;border-radius: 5px;}
            .booking_area {float: right;position: relative;width:200px;height: 450px; }
            .booking_area h3 {margin: 5px 5px 0 0;font-size: 16px;}
            .booking_area p{line-height:26px; font-size:16px; color:#999}
            .booking_area p span{color:#666}
            div.seatCharts-cell {color: #182C4E;height: 25px;width: 25px;line-height: 25px;margin: 3px;float: left;text-align: center;outline: none;font-size: 13px;}
            div.seatCharts-seat {color: #fff;cursor: pointer;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
            div.seatCharts-row {height: 35px;}
            div.seatCharts-seat.available {background-color: #B9DEA0;}
            div.seatCharts-seat.focused {background-color: #76B474;border: none;}
            div.seatCharts-seat.selected {background-color: #E6CAC4;}
            div.seatCharts-seat.unavailable {background-color: #472B34;cursor: not-allowed;}
            div.seatCharts-container {border-right: 1px dotted #adadad;width: 400px;padding: 20px;float: left;}
            div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 16px;}
            ul.seatCharts-legendList {padding-left: 0px;}
            .seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;}
            span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;}
            .checkout-button {display: block;width:80px; height:24px; line-height:20px;margin: 10px auto;border:1px solid #999;font-size: 14px; cursor:pointer}
            #seats_chose {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;}
            #seats_chose li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center}
        </style>
    </head>
    <body>
        <div class="container">
          <h2 class="title">在线选座<img src="images/lc.png" width="950" /></h2>
		  
            <div class="demo clearfix">
                <!---左边座位列表----->
                <div id="seat_area">
                    <div class="front">屏幕</div>					
                </div>
                <!---右边选座信息----->
                <div class="booking_area">
                    <p>电影：<span><?php echo $row_right['pmname']; ?></span></p>
                    <p>时间：<span><?php echo $_GET['time']."<br/>".$row_right['ptime']; ?></span></p>
                    <p>座位：</p>
                    <ul id="seats_chose" class="seat"></ul>
                    <p>票数：<span id="tickects_num">0</span></p>
                    <p>总价：<b>￥<span id="total_price">0</span></b></p>
                    <input name="提交" type="submit" class="btn" value="确定购买"  />
                    <div id="legend"></div>
                </div>
            </div>
        </div>
        <script  src="js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.seat-charts.min.js"></script>
        <script type="text/javascript">
            var price =<?php echo $row_right['mprice']; ?>; //电影票价
            $(document).ready(function() {
                var $cart = $('#seats_chose'), //座位区
                        $tickects_num = $('#tickects_num'), //票数
                        $total_price = $('#total_price'); //票价总额
                var sc = $('#seat_area').seatCharts({
                    map: [//座位结构图 a 代表座位; 下划线 "_" 代表过道
                        'cccccccccc',
                        'cccccccccc',
                        '__________',
                        'cccccccc__',
                        'cccccccccc',
                        'cccccccccc',
                        'cccccccccc',
                        'cccccccccc',
                        'cccccccccc',
                        'cc__cc__cc'
                    ],
                    naming: {//设置行列等信息
                        top: false, //不显示顶部横坐标（行） 
                        getLabel: function(character, row, column) { //返回座位信息 
                            return column;
                        }
                    },
                    legend: {//定义图例
                        node: $('#legend'),
                        items: [
                            ['c', 'available', '可选座'],
                            ['c', 'unavailable', '已售出']
                        ]
                    },
                    click: function() {
						//判断票数
						if(sc.find('selected').length>=5){alert("最多购买5张票！！！")}
						else{
                        if (this.status() == 'available') { //若为可选座状态，添加座位
                            //$('<li>' +"'"+ (this.settings.row + 1) + '_' + this.settings.label + "'"+'</li>')
							$('<li>' + (this.settings.row + 1) + '_' + this.settings.label +'</li>')
                                    .attr('id', 'cart-item-' + this.settings.id)
                                    .data('seatId', this.settings.id)
                                    .appendTo($cart);
                            $tickects_num.text(sc.find('selected').length + 1); //统计选票数量
                            $total_price.text(getTotalPrice(sc) + price);//计算票价总金额
                            return 'selected';
                        } else if (this.status() == 'selected') { //若为选中状态
                            $tickects_num.text(sc.find('selected').length - 1);//更新票数量
                            $total_price.text(getTotalPrice(sc) - price);//更新票价总金额
                            $('#cart-item-' + this.settings.id).remove();//删除已预订座位
                            return 'available';
                        } else if (this.status() == 'unavailable') { //若为已售出状态
                            return 'unavailable';
                        } else {
                            return this.style();
                        }
                    }}
                });
                //设置已售出的座位
			   //var s=['1_2', '1_4', '4_4', '4_5', '4_6', '4_7', '4_8'];
				
                //sc.get(s).status('unavailable');
				
				
				var iname ="<?php echo $row_right['pmname']; ?>";
				var itime ="<?php echo $row_right['ptime']; ?>";
				$.post("seatread.php",{iname:iname,itime:itime},function(data){
					
					console.log(data);
					var sid = data.split(",");
					for(var i =0;i<sid.length;i++)
						{
							//console.log(sid[i])
							sc.get([sid[i]]).status('unavailable');
						}
				});
				
				
				
				//座位加载传送信息
				$(".btn").click(function(){
					
					var dprice =$("#total_price").text();
					if(dprice==0){alert("请选择座位！")}
					else{
			var josnArry=[];
		
			
			var list = $(".seat li");
			
	for(var i=0;i<list.length;i++){
			//var seatobj ="{'sid':"+$(list).eq(i).text()+"}";
				var seatobj =$(list).eq(i).text();
				console.log(seatobj);
			josnArry.push(seatobj);
				
			}
			//console.log(josnArry);
					
	
			
			//alert(josnArry);
			//alert($(list).eq(i).text());
			//锁定座位
					
					
			var s2=josnArry;
           sc.get(s2).status('unavailable');
					
					
			var userid ="<?php echo $_SESSION['MM_Username']; ?>";
			var dname ="<?php echo $row_right['pmname']; ?>";
			var ddate ="<?php echo $_GET['time'];?>";
	        var dtime ="<?php echo $row_right['ptime']; ?>";
			var ararry = josnArry.join(',');
			//var dprice = dprice*0.98;
					//alert(ararry);
					//console.log(ararry);
			
			alert("\t\n电影名："+dname+"\t\n时间："+ddate+dtime+"\t\n座位："+ararry+"\t\n金额："+dprice);
					
					$(".two").fadeIn();
					$("#bok").click(function(){
						$.post("seatinsert.php",{"dname":dname,"dtime":dtime,"dseat":ararry,"dprice":dprice,"name":userid,"ddate":ddate},function(data){alert(data);window.location.href="index.php";});
					})
					$("#bclose").click(function(){
						alert("取消成功！");
						window.location.href="index.php";
					})
	
			
		}})

				
				
            });
            function getTotalPrice(sc) { //计算票价总额
                var total = 0;
                sc.find('selected').each(function() {
                    total += price;
                });
                return total;
            }
			
			
        </script>
		
    
		<div class="two">
			<div class="timer"></div>
			<div class="twopic"></di>
			<div class="btns"><button class="btn btn-success" id="bok">支付完成</button><button class="btn btn-warning" id="bclose">取消订单</button></div>
		</div>	
    </body>
</html>
<?php


mysql_free_result($right);
?>
