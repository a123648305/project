<?php require_once('../Connections/movie.php'); ?>

<?php

?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
	<link href="js/table/bootstrap.min.css"  rel="stylesheet">
	<link href="js/table/bootstrap-table.min.css" rel="stylesheet">
	<link href="js/table/bootstrap-editable.css" rel="stylesheet">
	<script src="js/table/jquery-3.3.1.min.js"></script>
	<script src="js/table/bootstrap.min.js"></script>
	<script src="js/table/bootstrap-table.min.js"></script>
	<script src="js/table/bootstrap-editable.js"></script>
    <script src="js/table/bootstrap-table-zh-CN.js"></script>

<style>
	#addbox{position:absolute;left: 0;top: 0;bottom: 0;right: 0;margin: auto;border: solid;width: 500px;height: 600px;background-color: whitesmoke;padding: 10px 10px}	
	#addbox #user{margin-top:140px }
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
    <h4 align="center">增加新纪录</h4><hr>
		
    <table id="user" class="table table-bordered ">
        <tbody> 
            <tr>         
                <td width="40%" align="center">放映厅号</td>
                <td><a href="#" class="myeditable" id="new_username" data-type="text" data-name="pid" data-original-title="输入放映厅号"></a></td>
            </tr>
             
            <tr>         
                <td align="center">电影名</td>
                <td><a href="#" class="myeditable" data-type="select" data-name="pmname" data-source="select-movie-list.php" data-original-title="选择电影"></a></td>
            </tr>     
            <tr>         
                <td align="center">放映日期</td>
                <td><a href='#' class="myeditable" data-name="date"  data-type="date" data-title="选择日期" data-format:"yyyy-mm-dd" data-viewformat:"yyyy/mm/dd"></a></td>
            </tr> 
			<tr>         
                <td align="center">放映时间</td>
                <td><a href="#" class="myeditable"  data-type="time" data-name="time"  data-format="hh:ii" data-viewformat="hh:ii" data-template="hh:ii" data-title="选择时间"></a></td>
            </tr>  
             
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
            idField: "eid",
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
			
            url: "select-playlist.php", //加载数据
			//url:"list.json",
            columns: [{
                checkbox: true
            },{field:"spid",align:"center",
			   title:"编号",width:"60",
				
			},
			{
                field: "pid",
                title: "放映厅号",align:"center",width:"60",
				edit:false,
                formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"pid\" data-type=\"text\" data-disabled=\false\ data-pk=\""+row.Id+"\" data-title=\"放映厅号\">" + value + "</a>";
                },
				validate: function (value) {  
                    if ($.trim(value) == '') {  
                        return '不能为空!';  
                    }}
            }, {field: "pmname",align:"center",
                title: "电影名",
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"pmname\" data-type=\'select\' data-disabled=\false\ data-value=\'\' data-title=\'选择电影\' data-source=\'select-movie-list.php\'>" + value +"</a>";
				 }
								
			},{
                field: "pdata",
                title: "放映日期",align:"center",
			     formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"pdata\" data-type=\"date\" data-disabled=\false\ data-format=\"yyyy/mm/dd\" data-viewformat=\"yyyy/mm/dd\" data-template=\"yyyy/mm/dd\" data-title=\"选择日期\">" + value + "</a>";
                },
				validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '不能为空!';  
                   }}
				
            },
            {
                field: "ptime",
                title: "放映时间",align:"center",
				formatter: function (value, row, index) {
                    return "<a href=\"#\"  name=\"ptime\" data-type=\"time\" data-format=\"hh:ii\" data-viewformat=\"hh:ii\" data-template=\"hh:ii\" data-disabled=\false\  data-title=\"选择时间\">" +value+ "</a>";
               },validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '不能为空!';  
                   }}
				}, ],
            onClickRow: function (row, $element) {
                curRow = row;
            },
            onLoadSuccess: function (aa, bb, cc) {
				
                $("#table a").editable({
                    url: function (params) {
                        var sName = $(this).attr("name");
                        curRow[sName] = params.value;
						console.log(curRow);
						var spid = curRow['spid'];
						var pmname = curRow['pmname'];
						var pid = curRow['pid'];
						var pdata = curRow['pdata'];
						var ptime = curRow['ptime'];
					
						console.log(pmname)
                        $.ajax({
                            type: 'POST',
                            url: "playlist-update.php",
                            data: {spid,pmname,pid,pdata,ptime},
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
                return row.spid;
				
            });
				//console.log(ids);ids[]
			 						 
			$.post("playlist-delete.php",{ids},function(data){console.log(data);alert(data)});						 
									 
			
            $("#table").bootstrapTable('remove', {
                field: 'spid',
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
$('#new_username').editable('option', 'validate', function(v) {
    if(!v) return '不能为空';
});
 
//automatically show next editable
$('.myeditable').on('save.newuser', function(){
    var that = this;
    setTimeout(function() {
        $(that).closest('tr').next().find('.myeditable').editable('show');
    }, 200);
});
$('#save-btn').click(function() {
   $('.myeditable').editable('submit', { 
       url: 'playlist-insert.php', 
       ajaxOptions: {
          // dataType: 'json' //assuming json response
       },           
       success: function(data,textStatus,jqXHR) {
                            
          // console.log(config)
		  alert(data)
       },
       error: function(error) {
         //	 console.log(data)
		   alert(error)
       }
   });

	
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
