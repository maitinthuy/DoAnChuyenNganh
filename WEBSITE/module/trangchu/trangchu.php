<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../style/style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$arr = $b->select("select * from loaisanpham order by MaLoai asc");
foreach($arr as $r)
{
?>
          
       <?php
			 	$arr1 = $b->select("select * from sanpham  where MaLoai='$r[MaLoai]' order by MaLoai desc limit 0,1");
				foreach($arr1 as $r1)
				{
				?>
               
       <div id="hinhanh">
       <div id="noidungngan"><a href="index.php?mod=chitiet&Masanpham=<?php echo $r1["Masanpham"] ?>">Xem Chi Tiet</a></br><?php echo $r1["chitiet"] ?></div>
       <img src="<?php echo $r1["Hinhanh"]?> " height="200px"; width="240px"; /><?php echo $r1["Tensanpham"]; ?> <br /></div>
                
           
                <?php 
				}
				?>
     <?php 
				}
				?>
 
  



    <div id="tintuctinkhuyenmai" >
        
        <div id="tintuc">
        <div style="padding-top:5px;"><b><h3>TIN TỨC SPACE</h3></b></div>
        	<?php
			$arr2 = $b->select("select * from tintuc where idLoaiTin='Space' order by idTin desc  ");
			foreach($arr2 as $r2)
			{
			?>
            <div id="tinchinh">
                <div id="anhdaidien">
                <img src="<?php echo $r2["anhDaiDien"];?>" height="100px" width="100%"/>
                </div>
                
                <div id="tieude"><a href="index.php?mod=noidung&idTin=<?php echo $r2["idTin"];?> "><?php echo $r2["tieuDe"];?></a>
                </div>
                
                <div id="tomtatnd" style="text-indent:10px;"><?php echo $r2["tomTatnd"];?>
                </div>
                
            </div>
            <div id="tinlienquan">
                <ul >
                    <?php
                    $arr6 = $b->select("select * from tintuc where idLoaiTin='Space' limit 0,5 ");
                    foreach($arr6 as $s6)
                    { 
                    ?>
                        <li id="li"><a href="index.php?mod=noidung&idTin=<?php echo $s6["idTin"];?> "><?php echo $s6["tieuDe"];?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <?php
			}
			?>
            
        </div>
        
        <div id="tinthitruongkhuyenmai">
        	
        	
            <div id="tinthitruong">
            <div style="padding-top:5px;"><b><h3>TIN TỨC THỊ TRƯỜNG</h3></b></div>
            <?php
			$arr3 = $b->select("select * from tintuc where idLoaiTin='TT' limit 0,1 ");
			foreach($arr3 as $s)
			{
			?>
            <div id="tinchinh"> 
                <div id="ima">
                    <img src="<?php echo $s["anhDaiDien"];?>" height="150px" width="100%"/>
                </div>
                <div id="nd">
                    
                    <div><a href="index.php?mod=noidung&idTin=<?php echo $s["idTin"];?> "><?php echo $s["tieuDe"];?></a></div>
  
                    <div style="text-indent:10px;"><?php echo $s["tomTatnd"];?> </div>
                   
                </div>
            </div>
            <div id="tinlienquan">
                <ul >
                    <?php
                    $arr4 = $b->select("select * from tintuc where idLoaiTin='TT' limit 0,5 ");
                    foreach($arr4 as $s4)
                    { 
                    ?>
                        <li id="li"><a href="index.php?mod=noidung&idTin=<?php echo $s4["idTin"];?> "><?php echo $s4["tieuDe"];?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <?php
			}
			?>
            </div>
            
            
            <div id="khuyenmai">
            <div style="padding-top:5px;"><b><h3>TIN TỨC KHUYẾN MÃI</h3></b></div>
        	<?php
			$arr5 = $b->select("select * from tintuc where idLoaiTin='KM' limit 0,1 ");
			foreach($arr5 as $r5)
			{
			?>
            <div id="tinchinh">
            	<div id="imaKM">
                <img src="<?php echo $r5["anhDaiDien"];?>" height="150px" width="100%"/>
                </div>
                <div id="ndKM">
                
                    <div><a href="index.php?mod=noidung&idTin=<?php echo $r5["idTin"];?> "><?php echo $r5["tieuDe"];?></a></div>
                    <div style="text-indent:10px;"><?php echo $r5["tomTatnd"];?></div>
                    
                </div>
             </div>
             <div id="tinlienquan">
             	<ul >
				<?php
				$arr7 = $b->select("select * from tintuc where idLoaiTin='KM' limit 0,5 ");
                foreach($arr7 as $s7)

                { 
                ?>
                    <li id="li"><a href="index.php?mod=noidung&idTin=<?php echo $s7["idTin"];?> "><?php echo $s7["tieuDe"];?></a></li>
                <?php
                }
                ?>
            </ul>
            </div>
             <?php
			}
			?>
            </div>
            
        </div>
        
        
    </div>
    


</body>
</html>