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
                    <li data-options="att:{'url':'asdf'}">File  Word</a></span></li>
                    <li><span><a data-id="2">File Excel</a></span></li>
                    <li><span><a data-id="3">File Power Point</a></span></li>
                </ul>
            </li>
            <li>
                <span><a href="#enginer">Engineering</a></span>
                <ul>
                    <li><span><a href="fileimage">File Image</a></span></li>
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
		</div>
		<div data-options="region:'center',title:'Main Title',iconCls:'icon-ok'">
            <!-- <h1>Pegawai</h1>
            <h2 id="hr">HR</h2> -->
            <h3 id="fileimage">File Image</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hac habitasse platea dictumst quisque sagittis. Imperdiet massa tincidunt nunc pulvinar sapien. Integer malesuada nunc vel risus commodo viverra maecenas accumsan. Mauris sit amet massa vitae tortor. Libero volutpat sed cras ornare arcu dui vivamus arcu felis. Pretium viverra suspendisse potenti nullam ac tortor vitae purus faucibus.</p>
                <!-- <h3>Sonya Sausage</h3>
                <p>Massa sed elementum tempus egestas. Netus et malesuada fames ac. Faucibus et molestie ac feugiat sed lectus vestibulum. Velit laoreet id donec ultrices tincidunt arcu non. Ultricies lacus sed turpis tincidunt id. Nec ultrices dui sapien eget mi proin. Mus mauris vitae ultricies leo integer. Vel facilisis volutpat est velit. Risus quis varius quam quisque id diam vel.
        Donec ac odio tempor orci dapibus ultrices in iaculis. Ut eu sem integer vitae justo. Feugiat vivamus at augue eget arcu dictum. Mauris a diam maecenas sed enim ut sem viverra. Eleifend mi in nulla posuere sollicitudin. Massa enim nec dui nunc. Diam quam nulla porttitor massa id neque. Duis convallis convallis tellus id. Molestie nunc non blandit massa. Purus non enim praesent elementum facilisis. Posuere sollicitudin aliquam ultrices sagittis.
        <h3>Bennie Clover</h3>
        <p>Ullamcorper morbi tincidunt ornare massa. Leo in vitae turpis massa sed elementum. Enim nulla aliquet porttitor lacus luctus accumsan. Diam phasellus vestibulum lorem sed risus. Cum sociis natoque penatibus et magnis dis parturient. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Pellentesque diam volutpat commodo sed egestas. Duis at tellus at urna. Ultrices gravida dictum fusce ut. Pulvinar etiam non quam lacus. Egestas dui id ornare arcu. 
        Blandit turpis cursus in hac habitasse. At in tellus integer feugiat scelerisque varius morbi.</p>
        <br>
        <h2 id="enginer">Enginering</h2>
        <h3>Alfonso Cohee</h3>
        <p>Massa tincidunt dui ut ornare lectus sit. Amet nisl suscipit adipiscing bibendum est ultricies integer. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed. Mauris sit amet massa vitae tortor condimentum lacinia quis. Sit amet mauris commodo quis imperdiet massa tincidunt nunc. Odio morbi quis commodo odio aenean sed. Erat velit scelerisque in dictum non consectetur a. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. 
        Eu non diam phasellus vestibulum lorem sed risus ultricies. Ultrices neque ornare aenean euismod elementum nisi. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Pellentesque nec nam aliquam sem et tortor consequat id porta. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque.
        <h3>Mitchel Ruggles</h3>
        Accumsan sit amet nulla facilisi morbi. Non nisi est sit amet facilisis magna etiam tempor orci. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Magnis dis parturient montes nascetur ridiculus mus mauris vitae. Et netus et malesuada fames ac turpis egestas. Pretium quam vulputate dignissim suspendisse in est ante in. 
        Mattis rhoncus urna neque viverra. Quis enim lobortis scelerisque fermentum dui faucibus in. Lobortis mattis aliquam faucibus purus in massa. Risus nec feugiat in fermentum posuere urna. Eu lobortis elementum nibh tellus. Volutpat odio facilisis mauris sit amet. Vitae congue eu consequat ac felis donec et odio. Lacinia at quis risus sed vulputate. Urna cursus eget nunc scelerisque viverra. Et netus et malesuada fames ac. Mi sit amet mauris commodo quis imperdiet.
        <h3>Anamaria Taranto</h3>
        Convallis posuere morbi leo urna molestie at elementum eu facilisis. Odio pellentesque diam volutpat commodo. Semper auctor neque vitae tempus. Nec feugiat nisl pretium fusce. Sed vulputate odio ut enim blandit volutpat. Gravida rutrum quisque non tellus orci. Vitae tortor condimentum lacinia quis vel eros donec. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet. Rutrum quisque non tellus orci ac.</p>

        <h2 id="surattugas">Surat Tugas</h2>
        <h3>Surat Dinas</h3>
        <p>Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Cras tincidunt lobortis feugiat vivamus at augue eget arcu. Sit amet volutpat consequat mauris nunc congue nisi vitae. Eleifend mi in nulla posuere. Sed id semper risus in hendrerit gravida rutrum quisque. Odio tempor orci dapibus ultrices in iaculis nunc sed. Non odio euismod lacinia at quis risus sed vulputate odio. Scelerisque viverra mauris in aliquam sem. Turpis tincidunt id aliquet risus. Ullamcorper malesuada proin libero nunc consequat interdum varius. 
        Id volutpat lacus laoreet non. Venenatis cras sed felis eget velit aliquet. Nunc id cursus metus aliquam eleifend mi in. Vulputate odio ut enim blandit.
        <h3>Pelatihan</h3>
        Mus mauris vitae ultricies leo. Arcu ac tortor dignissim convallis aenean et tortor. Pharetra magna ac placerat vestibulum lectus. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Adipiscing elit pellentesque habitant morbi tristique senectus. Sit amet tellus cras adipiscing. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl nunc mi ipsum faucibus vitae. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. 
        Netus et malesuada fames ac turpis. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Eu lobortis elementum nibh tellus molestie. Massa id neque aliquam vestibulum. Praesent tristique magna sit amet. Neque sodales ut etiam sit amet nisl purus in. Et malesuada fames ac turpis egestas integer eget aliquet nibh. Donec et odio pellentesque diam volutpat commodo sed egestas egestas. Duis at consectetur lorem donec massa sapien. Fermentum dui faucibus in ornare quam viverra orci.
        Turpis nunc eget lorem dolor sed viverra ipsum. Et tortor at risus viverra. Diam quis enim lobortis scelerisque fermentum dui. Fringilla urna porttitor rhoncus dolor purus. Fermentum iaculis eu non diam phasellus vestibulum lorem. Amet est placerat in egestas. Condimentum id venenatis a condimentum vitae. Fermentum et sollicitudin ac orci phasellus egestas. Ultrices dui sapien eget mi. Venenatis cras sed felis eget velit aliquet sagittis. Elit eget gravida cum sociis natoque penatibus et magnis dis. 
        Varius vel pharetra vel turpis nunc eget lorem dolor sed. Enim sed faucibus turpis in. Lacinia quis vel eros donec ac. Cursus vitae congue mauris rhoncus. Ut sem viverra aliquet eget sit amet tellus cras.
        <h3>Surat Ijin</h3>
        Amet massa vitae tortor condimentum lacinia. Dis parturient montes nascetur ridiculus mus mauris. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Lacus sed turpis tincidunt id aliquet risus feugiat. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Lectus nulla at volutpat diam ut venenatis tellus in. Molestie a iaculis at erat pellentesque adipiscing commodo. Ac auctor augue mauris augue neque gravida in fermentum. Ornare aenean euismod elementum nisi. 
        Massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin. Pellentesque habitant morbi tristique senectus et netus et. Duis convallis convallis tellus id. Elit at imperdiet dui accumsan sit. Urna molestie at elementum eu facilisis sed odio. Gravida dictum fusce ut placerat orci.</p> -->
    </div>
        </div>
</div>

</body>
</html>