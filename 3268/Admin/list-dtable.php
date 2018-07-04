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


</head>
<body>
<!--main_top-->
<table id="table"></table><div id="toolbar" class="btn-group">
<!--
    <button id="add" class="btn btn-default" title="添加" data-toggle="modal"  data-target="#addbox">
        <i class="glyphicon glyphicon-plus"></i> 添加
    </button>
-->
    <button id="del" class="btn btn-default" title="删除">
        <i class="glyphicon glyphicon-minus"></i> 删除
    </button>
	 <button id="edit" class="btn btn-default" title="编辑">
        <i class="glyphicon glyphicon-pencil"></i> 编辑
    </button>
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
            idField: "did",
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
			
            url: "select-dtable.php", //加载数据
			//url:"listjson.json",

			columns: [{
                checkbox: true
            },{field:"did",
			   title:"订单号",
			   align:'center',
				
			},{field:"db",
			   title:"购票人",
				align:'center',
			},		
			{
                field: "mname",
                title: "电影名",
				align:'center',
                formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"mname\" data-type=\"text\" data-disabled=\false\ data-pk=\""+row.Id+"\" data-title=\"电影名\">" + value + "</a>";
                },
				validate: function (value) {  
                    if ($.trim(value) == '') {  
                        return '不能为空!';  
                    }}
            }, {field: "ddate",
                title: "日期",
			align:'center',
				formatter: function (value, row, index) {
		     return "<a href=\"#\"  data-type=\"date\"  data-format=\"YYYY-MM-DD\" data-viewformat=\"YY/MM/DD\" data-template=\"D / MMM / YYYY\"  data-disabled=\false\  data-title=\"选择日期\">"+value+"</a>";}
								
			},{
                field: "dtime",
                title: "时间",
			 align:'center',
				formatter: function (value, row, index) {
		     return "<a href=\"#\"  data-type=\"time\"  data-format=\"hh:ii\" data-viewformat=\"hh:ii\" data-template=\"hh:ii\" data-disabled=\false\  data-title=\"选择时间\">"+value+"</a>";}
				
            },
            {
                field: "dprice",
                title: "金额",align:'center',
				formatter: function (value, row, index) {
                    return "<a href=\"#\"  name=\"dprice\" data-type=\"text\" data-disabled=\false\  data-title=\"金额\">" +value+ "</a>";
               },validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '不能为空!';  
                   }}
				}, {
                field: "dseat",
                title: "座位",align:'center',
				
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"dseat\"  data-type=\'text\' data-disabled=\false\  data-title=\'选择座位\' >" + value +"</a>";
				 },
					
					
				},{
			    field: "zt",
                title: "状态",align:'center',
					
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"zt\"  data-type=\'text\' data-disabled=\false\  data-title=\'更新状态\' >" + value +"</a>";
				 },}

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
						var did = curRow['did'];
						var name = curRow['mname'];
						var date = curRow['ddate'];
						var time = curRow['dtime'];
						var seat = curRow['dseat'];
						var zt = curRow['zt'];
						var price = curRow['dprice'];
						
                        $.ajax({
                            type: 'POST',
                            url: "datable-update.php",
                            data: {did,name,date,time,seat,zt,price},
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
                return row.did;
				
            });
				//console.log(ids);ids[]
			 						 
			$.post("dtable-delete.php",{ids},function(data){console.log(data);alert(data)});						 
									 
			
            $("#table").bootstrapTable('remove', {
                field: 'did',
                values: ids
            });
        });
    });
	</script>	
	
	
	

</body>
</html>
