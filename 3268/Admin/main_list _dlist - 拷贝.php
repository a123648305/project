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
	
</style>
</head>
<body>
<!--main_top-->
<table id="table"></table><div id="toolbar" class="btn-group">
    <button id="add" class="btn btn-default" title="添加">
        <i class="glyphicon glyphicon-plus"></i> 添加
    </button>
    <button id="del" class="btn btn-default" title="删除">
        <i class="glyphicon glyphicon-minus"></i> 删除
    </button>
</div>
	<a href="#" id="status" data-type="select" data-pk="1" data-url="/post" data-title="Select status"></a>
	
	<script type="text/javascript">
    var curRow = {};
    $(function () {
		$("#del").click(function(){
		
	$('#table').bootstrapTable('selectPage', 1); //Jump to the first page  
        var data = {eid: 'k', ename: '1',esex:'', ephone: ''}; //define a new row data，certainly it's empty  
  
        $('#table').bootstrapTable('prepend', data); //the method of prepend must defined all fields，but append needn't  
        //$('#dataTable').bootstrapTable('append',data);  
    
    }),							   
								  
								  
								  
						
		$("#table").bootstrapTable("resetView"),
        $("#table").bootstrapTable({
            height:500,
			pageList: [1,2,5,10],
			cache:false,
			toolbar: "#toolbar",
            idField: "Id",
			pagination: true,
            showRefresh: true,
            search: true,
            clickToSelect: true,
			striped:true,      //隔行变色
            
			
            queryParams: function (param) {
                return {};
            },
            //url: "employee.php", //加载数据
			url:"list.json",
            columns: [{
                checkbox: true
            },{field:"eid",
			   title:"编号",
				
			},
			{
                field: "ename",
                title: "姓名",
                formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"UserName\" data-type=\"text\" data-pk=\""+row.Id+"\" data-title=\"用户名\">" + value + "</a>";
                }
            }, {field: "esex",
                title: "性别",
				 formatter: function (value, row, index) {
					 return "<a id=\"sex\" data-type=\"checklist\" >"+value+"</a>";
				 },
                 
                 
                
				
			},{
                field: "ephone",
                title: "电话",
				formatter: function (value, row, index) {
                    return "<a href=\"#\" data-type=\"select\"  data-title=\"电话\">" +value+ "</a>";
                },
				editable: {
					prepend:'true',
					value:2,
                    type: 'select',
                    title: '性别',
                    source:[{value:"1",text:"研发部"},{value:"2",text:"销售部"},{value:"3",text:"行政部"}]
                }
				
                //formatter: function (value, row, index) {
                   // var date = eval('new ' + eval(value).source)
                   // return date.format("yyyy年MM月dd日");
               // }
				
            },
            {
                field: "eaddress",
                title: "地址",
				formatter: function (value, row, index) {
                    return "<a href=\"#\" data-type=\"text\"  data-title=\"地址\">" +value+ "</a>";
                },
            }, {
                field: "ezhiwei",
                title: "职位",
				editable:true,
            }],
            onClickRow: function (row, $element) {
                curRow = row;
            },
            onLoadSuccess: function (aa, bb, cc) {
				
                $("#table a").editable({
                    url: function (params) {
                        var sName = $(this).attr("name");
                        curRow[sName] = params.value;
						//console.log(curRow[1]);
						var dlist;
                        $.ajax({
                            type: 'POST',
                            url: "test.php",
                            data: {dlist:curRow},
                            dataType: 'JSON',
                            success: function (data) {
                                alert('保存成功！');
                            },
                            error: function () { alert("error");}
                        });
                    },
                    type: 'json'
                });
            },
			
        });
		 $('#sex').editable({
        value: 2,    
        source: [
              {value: 1, text: 'Active'},
              {value: 2, text: 'Blocked'},
              {value: 3, text: 'Deleted'}
           ]
    });
    });
</script>      

	
<!--
	<script>
	$(function () {
        $('#username').editable({
            type: "text",              //编辑框的类型。支持text|textarea|select|date|checklist等
            //source: [{ value: 1, text: "开发部" }, { value: 2, text: "销售部" }, {value:3,text:"行政部"}],
            title: "选择部门",           //编辑框的标题
            disabled: false,           //是否禁用编辑
            emptytext: "空文本",       //空值的默认文本
            mode: "inline",            //编辑框的模式：支持popup和inline两种模式，默认是popup
            validate: function (value) { //字段验证
                if (!$.trim(value)) {
                    return '不能为空';
                }
            }
        });

    });
	</script>
-->
</body>
</html>
