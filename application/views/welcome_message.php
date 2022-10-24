<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Sistem Informasi Surat Tugas</title>
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
        <ul id="tt" class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true">
    <li>
        <span>Pegawai</span>
        <ul>
            <li data-options="state:'closed'">
                <span>HR</span>
                <ul>
                    <li><a href="fileword">File Word</a></span></li>
                    <li><span><a data-id="2">File Excel</a></span></li>
                    <li><span><a data-id="3">File Power Point</a></span></li>
                </ul>
            </li>
            <li>
                <span><a href="#enginer">Engineering</a></span>
                <ul>
                    <li><span><a href=<?php echo base_url('MenuController/fileimage')?>>File Image</a></span></li>
                    <li><span><a data-id="5">File Video</a></span></li>
                    <li><span><a data-id="6">File Audio</a></span></li>
                </ul>
            </li>
            <li>
            <span><a href="#surattugas">Surat Tugas</a></span>
                <ul>
                    <li><span><a data-id="7">Surat Dinas</a></span></li>
                    <li><span><a data-id="8">Pelatihan</a></span></li>
                    <li><span><a data-id="9">Surat Ijin</a></span></li>
                </ul>
            </li>
        </ul>

    </li>
</ul>
<script>
    // $('#tt').tree({
    //     onClick: function(node){
    //         var el = $(node.text);
    //         alert(el.text());
    //     }
    // });
            $dir = "images";
        if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
        echo "$file<br>";
        }
        }
        closedir($handle);
        }
</script>
		<!-- </div>
		<div data-options="region:'center',title:'Main Title',iconCls:'icon-ok'">
            <h1>File Word</h1>
            <h2 id="hr"></h2>
            <h3 id="fileword">File word</h3>
                <p>Ini adalah file word</p>
                </div>
        </div>
</div> -->

</body>
</html>
