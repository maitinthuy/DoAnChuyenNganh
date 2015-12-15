<?php
$t=$_GET["idLT"];
$lt = $b->select("select * from loaitin where idLoaiTin='$t'");
foreach($lt as $r)
{ ?>
	<?php
	$tin = $b->select("select * from tintuc where idLoaiTin='$r[idLoaiTin]' order by idTin desc limit 0,1");
	foreach($tin as $s)
	{
		?>
    <div id="cont" style="width:100%; background-color:#CCC;">
    
    	<div id="tin">
        	<div id="tintucchinh">
            
						<?php
                $tin = $b->select("select * from tintuc where idLoaiTin='$r[idLoaiTin]' order by idTin desc limit 0,3");
                foreach($tin as $s)
                {
                    ?>
                 <div style=" width:100%; height:170px;">
                    <div id="ima">
                    <img src="<?php echo $s["anhDaiDien"];?>" height="150px" width="100%"/>
                    </div>
                    <div id="nd">
                    
                        <div><a class="a" href="index.php?mod=noidung&idTin=<?php echo $s["idTin"];?> "><?php echo $s["tieuDe"];?></a></div>
                        <div style="text-indent:10px;"><?php echo $s["tomTatnd"];?></div>
                        
                    </div>
                </div>
                
				<?php 
                }
                ?>
            </div>
            <div id="tinlq">
            	<ul >
                    <?php
                    $arr = $b->select("select * from tintuc where idLoaiTin='$r[idLoaiTin]' limit 3,5 ");
                    foreach($arr as $v)
                    { 
                    ?>
                        <li id="li"><a href="index.php?mod=noidung&idTin=<?php echo $s["idTin"];?>" class="a"><?php echo $v["tieuDe"];?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        
        <div id="qc"></div>
    <?php 
	}
	?>
    
    
    
    </div>
<?php
}
?>
<style>
#tin{width:70%; height:100%; float:left;}
#tintucchinh{width:68%; height:100%; float:left; }
#tinlq{width:30%; height:100%; float:right; }
#qc{width:29%; height:400px;; float:right; background-color:#903;}
.a{ text-height:text-size:24px; color:#F00;
</style>

