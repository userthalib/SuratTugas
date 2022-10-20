<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Collapse Title in Layout - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/themes/icon.css">
    <script type="text/javascript" src="<?php echo base_url();?>public/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/jquery.easyui.min.js"></script>

</head>
<body>
<div id="container">
    <div class="easyui-layout" style="width:1600x;height:672px;">
        <div data-options="region:'north'" style="height:50px"></div>
		<div data-options="region:'west',split:true" title="West" style="width:200px;">
		<div style="margin:20px 0;"></div>
		<div class="easyui-panel" style="padding:5px">
		<ul class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true"></ul>
			<li>
                <span>My Documents</span>
                <ul>
                    <li data-options="state:'closed'">
                        <span>Sub Folder 1</span>
                        <ul>
                            <li data-options="attributes:{'url':''}">
								<span><a href="#">File 11</a></span>
                            </li>
                            <li data-options="attributes:{'url':''}">
								<span><a href="#">File 12</a></span>
                            </li>
                            <li data-options="attributes:{'url':''}">
								<span><a href="#">File 13</a></span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Program Files</span>
                        <ul>
                            <li data-options="attributes:{'url':''}">
								<span><a href="#">Intel</a></span>
                            </li>
							<li data-options="attributes:{'url':''}">
								<span><a href="#">Java</a></span>
                            </li>
							<li data-options="attributes:{'url':''}">
								<span><a href="#">MS Office</a></span>
                            </li>
							<li data-options="attributes:{'url':''}">
								<span><a href="#">Games</a></span>
                            </li>
                        </ul>
                    </li>
                    <li>index.html</li>
                    <li>about.html</li>
                    <li>welcome.html</li>
                </ul>
            </li>
    </div>
		</div>
		<div data-options="region:'center',title:'Main Title',iconCls:'icon-ok'">
    </div>
        </div>
</div>

</body>
</html>
