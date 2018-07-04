<?php require_once('../Connections/movie.php'); ?>

<?php

?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
	<link href="js/table/bootstrap.min.css" rel="stylesheet">
	<link href="js/table/bootstrap-table.min.css" rel="stylesheet">
	<link href="js/table/bootstrap-editable.css" rel="stylesheet">
	<script src="js/table/jquery-3.3.1.min.js"></script>
	<script src="js/table/bootstrap.min.js"></script>
	<script src="js/table/bootstrap-table.min.js"></script>
	<script src="js/table/bootstrap-editable.js"></script>
    <script src="js/table/bootstrap-table-zh-CN.js"></script>

<style>
	#addbox{position:absolute;left: 0;top: 0;bottom: 0;right: 0;margin: auto;border: solid;width: 800px;height:600px;background-color: whitesmoke;padding: 10px 10px}
	#user{position:relative;width: 100%;margin-top:80px;}
</style>
</head>
<body>
<!--main_top-->
<table id="table"></table><div id="toolbar" class="btn-group">
    <button id="add" class="btn btn-default" title="添加" data-toggle="modal"  data-target="#addbox">
        <i class="glyphicon glyphicon-plus"></i> 添加
    </button>
    <button id="del" class="btn btn-default" title="删除">
        <i class="glyphicon glyphicon-minus"></i> 删除
    </button>
	 <button id="edit" class="btn btn-default" title="编辑">
        <i class="glyphicon glyphicon-pencil"></i> 编辑
    </button>
</div>
	<div id="addbox"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<button type="button" class="close" data-dismiss="modal" 
						aria-hidden="true">×
				</button>
    <h4 align="center">增加新电影</h4><hr>
		
    <table id="user" class="table table-bordered ">
        <tbody> 
            <tr> <td width="10%" align="center">电影编号</td>
                <td width="40%"><a href="#" class="myeditable" id="new_username0" data-type="text" data-name="addid" data-original-title="电影名"></a></td>        
                <td width="20%" align="center">电影名</td>
                <td width="40%"><a href="#" class="myeditable" id="new_username" data-type="text" data-name="addname" data-original-title="电影名"></a></td>
				 
            </tr>
             
            <tr> <td align="center" width="20%">导演</td>
                <td width="40%"><a href="#" class="myeditable"  data-type="text" data-name="adddirector" data-original-title="导演"></a></td>        
                <td align="center">主演</td>
                <td ><a href="#" id="new_username2" class="myeditable" data-type="text" data-name="addperformer"  data-original-title="主演"></a></td>
            </tr>     
            <tr>         
                <td align="center">制片厂</td>
                <td><a href="#" id="new_username3" class="myeditable"  data-type="text" data-name="addstudio" data-original-title="制片厂"></a></td>
				<td align="center">时长</td>
                <td><a href="#" id="new_username4" class="myeditable" data-type="text" data-name="addlong" data-original-title="电影时长"></a></td>
            </tr> 
			<tr>         
                <td align="center">上映时间</td>
                <td><a href="#" id="new_username5" class="myeditable" data-type="date" data-name="addplaytime" data-format:'yyyy-mm-dd' data-viewformat:'yyyy/mm/dd' data-original-title="上映时间"></a></td>
				<td align="center">类型</td>
                <td><a href="#" id="new_username6" class="myeditable" data-type="text" data-name="addchar" data-original-title="电影类型"></a></td>
            </tr>  
            <tr>         
                
				
				<td align="center">价格</td>
                <td><a href="#" id="new_username7" class="myeditable" data-type="text" data-name="addprice" data-original-title="定价"></a></td>
				<td align="center">语种</td>
                <td><a href="#"  id="new_username8" class="myeditable" data-type="text" data-name="addlanguage" data-original-title="语言种类"></a></td></tr>
				<tr><td align="center">海报图</td>
                <td><a href="#" class="myeditable" data-type="text" data-name="addmp" data-original-title="海报图图片地址" data-value='images/xx.jpg'></a></td></tr>
			<tr>	<td align="center">小图</td>
                <td><a href="#" class="myeditable" data-type="text" data-name="addsp" data-original-title="小图图片地址" data-value='images/xx.jpg'></a></td>
            </tr> 
			<tr><td align="center">剧情简介</td><td><a href="#" class="myeditable" data-type="textarea" data-name="addmstory" data-original-title="剧情简介" ></a></td></tr>
        </tbody>
    </table>
   
    <button id="save-btn" class="btn btn-primary">保存</button>
    <button id="reset-btn" class="btn pull-right">重置</button>
    </div>
 	
	<script type="text/javascript">
    var curRow = {};
    $(function () {
						   
				  
		
		//开启编辑模式
			$("#edit").click(function(){
			$("#table a").editable('toggleDisabled');
	
		})
		
			
		//table初始化
		$("#table").bootstrapTable("resetView"),
        $("#table").bootstrapTable({
			
            height:500,
			pageList: [1,2,5,10],
			cache:false,
			toolbar: "#toolbar",
            idField: "mid",
			pagination: true,
            showRefresh: true,
            search: true,
            clickToSelect: true,
			striped:true,      //隔行变色
            showColumns:true,
			editable:true,
			sortOrder:'asc',
            queryParams: function (param) {
                return {};
            },
			
            url: "select-movie.php", //加载数据
			//url:"list.json",
            columns: [{
                checkbox: true
            },{field:"mid",
			   title:"编号",align:'center',
			   width:'10',
				
			},
			{   align:'center',
			    width:'100',
                field: "mname",
                title: "电影名",
				edit:false,
                formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"mname\" data-type=\"text\" data-disabled=\false\ data-pk=\""+row.Id+"\" data-title=\"电影名\">" + value + "</a>";
                },
				validate: function (value) {  
                    if ($.trim(value) == '') {  
                        return '不能为空!';  
                    }}
            }, {field: "mdirector",align:'center',width:'100',
                title: "导演",
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mdirector\" data-type=\'text\' data-disabled=\false\  data-title=\'导演\' >" + value +"</a>";
				 }
								
			},{
                field: "mperformer",
                title: "主演",
			     formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"mperformer\" data-type=\"text\" data-disabled=\false\ data-pk=\""+row.Id+"\" data-title=\"主演\">" + value + "</a>";
                },
				validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '不能为空!';  
                   }}
				
            },
            {
                field: "mstudio",align:'center',
                title: "制片厂",
				formatter: function (value, row, index) {
                    return "<a href=\"#\"  name=\"mstudio\" data-type=\"text\" data-disabled=\false\  data-title=\"制片厂\">" +value+ "</a>";
               },validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '不能为空!';  
                   }}
				}, {
                field: "mpalytime",align:'center',width:'100',
                title: "上映时间",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mpalytime\"  data-type=\'date\' data-disabled=\false\  data-title=\'选择日期\'data-mode=\'inline\' data-format:\'yyyy-mm-dd\' data-viewformat:\'yyyy/mm/dd\' >" + value +"</a>";
				 }

            },
					 {
                field: "mlong",align:'center',
                title: "时长",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mlong\"  data-type=\'text\' data-disabled=\false\  data-title=\'时长\'>" + value +"</a>";
				 }

            },{
                field: "mchar",align:'center',
                title: "类型",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mchar\"  data-type=\'text\' data-disabled=\false\  data-title=\'类型\' >" + value +"</a>";
				 }

            }, {
                field: "mprice",align:'center',
                title: "价格",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mprice\"  data-type=\'text\' data-disabled=\false\ data-value=\'\' data-title=\'价格\' >" + value +"</a>";
				 }

            }	  ,{
                field: "mlanguage",align:'center',width:'70',
                title: "语种",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mlanguage\"  data-type=\'text\' data-disabled=\false\ data-value=\'\' data-title=\'语种\' >" + value +"</a>";
				 }

            }, {
                field: "mpicture",
                title: "海报图",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mpicture\"  data-type=\'text\' data-disabled=\false\ data-value=\'\' data-title=\'海报图\' >" + value +"</a>";
				 }

            },{
                field: "spicture",
                title: "小图",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"spicture\"  data-type=\'text\' data-disabled=\false\ data-value=\'\' data-title=\'小图\' >" + value +"</a>";
				 }

            },{
                field: "mstory",
                title: "剧情简介",
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"mstory\"  data-type=\'textarea\' data-disabled=\false\ data-value=\'\' data-title=\'剧情简介\' >" + value +"</a>";
				 }

            },
					 
					 ],
            onClickRow: function (row, $element) {
                curRow = row;
            },
            onLoadSuccess: function (aa, bb, cc) {
				
                $("#table a").editable({
                    url: function (params) {
                        var sName = $(this).attr("name");
                        curRow[sName] = params.value;
						console.log(curRow);
						var mid = curRow['mid'];
						var mname = curRow['mname'];
						var mdirector = curRow['mdirector'];
						var mperformer = curRow['mperformer'];
						var mstudio = curRow['mstudio'];
						var mplaytime = curRow['mpalytime'];
						var mlong = curRow['mlong'];
						var mchar = curRow['mchar'];
						var mp = curRow['spicture'];
						var sp = curRow['spicture'];
						var mprice = curRow['mprice'];
						var mlanguage = curRow['mlanguage'];
						var mstory = curRow['mstory'];
						
						console.log(mid,mname,mdirector,mperformer,mstudio,mplaytime,mlong,mchar,mp,sp,mprice,mlanguage,mstory)
                        $.ajax({
                            type: 'POST',
                            url: "movie-update.php",
                            data: {mid,mname,mdirector,mperformer,mstudio,mplaytime,mlong,mchar,mp,sp,mprice,mlanguage,mstory},
                            success: function (data) {
                                alert(data);
								//console.log(data);
                            },
                            error: function (errors) { console.log(errors);}
                        });
                    },
                    type: 'json'
                });
            },
			
        });
		
  
		
	});
		
</script>      

<!--删除数据-->
<script>
$(function () {
        $("#del").click(function () {//alert("2");
            var ids = $.map($("#table").bootstrapTable('getSelections'), function (row) {
                return row.mid;
				
            });
				console.log(ids);//ids[]
			 						 
			$.post("movie-delete.php",{ids},function(data){console.log(data);alert(data)});						 
									 
			
            $("#table").bootstrapTable('remove', {
                field: 'mid',
                values: ids
            });
        });
    });
	</script>	
	
	
<!--插入数据-->
<script>
						
$('.myeditable').editable({
	

    //url: '/post' //this url will not be used for creating new user, it is only for update
});
 

//make username required
//验证
$('#new_username0').editable('option', 'validate', function(v) {
    if(!v) alert('电影id不能为空');
});	
$('#new_username').editable('option', 'validate', function(v) {
    if(!v) alert('电影名不能为空');
});
$('#new_username1').editable('option', 'validate', function(v) {
    if(!v) alert('导演不能为空');
});
$('#new_username2').editable('option', 'validate', function(v) {
    if(!v) alert('主演不能为空');
});
$('#new_username3').editable('option', 'validate', function(v) {
    if(!v) alert('制片厂不能为空');
});
$('#new_username4').editable('option', 'validate', function(v) {
    if(!v) alert('上映时间不能为空');
});
$('#new_username5').editable('option', 'validate', function(v) {
    if(!v) alert('时长不能为空');
});
	$('#new_username6').editable('option', 'validate', function(v) {
    if(!v) alert('类型不能为空');
});
	$('#new_username7').editable('option', 'validate', function(v) {
    if(!v) alert('价格不能为空');
});
	$('#new_username8').editable('option', 'validate', function(v) {
    if(!v) alert('语种不能为空');
});
//automatically show next editable
//$('.myeditable').on('save.newuser', function(){
//    var that = this;
//    setTimeout(function() {
//        $(that).closest('td').next().find('.myeditable').editable('show');
//    }, 200);
//});
$('#save-btn').click(function() {
   $('.myeditable').editable('submit', { 
       url: 'movie-insert.php', 
       ajaxOptions: {
          // dataType: 'json' //assuming json response
       },           
       success: function(data) {
                            
           //console.log(config);
		   alert(data)
		   //console.log(data.responseText)
		   //console.log(data)
       },
       error: function(errors) {
          //console.log(errors)
		  alert(errors)
       }}
	   
	   //$.post("movie-insert.php",function(data){alert(data),"json"})
   );
	
});
$('#reset-btn').click(function() {
    $('.myeditable').editable('setValue', null)  //clear values
        .editable('option', 'pk', null)          //clear pk
        .removeClass('editable-unsaved');        //remove bold css
                   
    $('#save-btn').show();
            
});
</script>	

</body>
</html>
