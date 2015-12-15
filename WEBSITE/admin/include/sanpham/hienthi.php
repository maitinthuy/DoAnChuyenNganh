<?php

$b= new B();
?>
<?php 
$sqldem ="select Count(*) as dem from sanpham ";
$kq = $b->select($sqldem);
//print_r($kq);
$n = $kq[0]["dem"]; // echo "ban dang co $n tin ";
$pageSize = 20;
$sotrang = ceil($n/$pageSize);
$page = isset($_GET["page"])?$_GET["page"]:1;
$vt = ($page-1) *$pageSize;

$kq = $b->select("select * from sanpham limit $vt, $pageSize");
//print_r($kq);

	?>			<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
					
						
						<table>
							
							<thead>
								<tr>
								   <th>Mã Sản Phẩm</th>
								   <th>Tên Sản Phẩm</th>
                                   <th>Đơn Giá</th>
                                   <th>Giá Khuyến Mãi</th>
                                   
                                   <th>Mã Loại</th>
                                   <th>Mã Nhà Cung Cấp</th>
                                   
								   
                                    <th>Thao Tác</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="4">
										
										
										
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                            <?php 
							foreach($kq as $r)
							{
								?>
								<tr>
									<td><?php echo $r["Masanpham"]?></td>
									<td><?php echo $r["Tensanpham"];?></td>
									<td><?php echo number_format($r["Dongia"],3);?> đồng</td>
                                    <td><?php echo number_format($r["GiaKhuyenMai"],3);?> đồng</td>
                                    
                                    <td><?php echo $r["MaLoai"];?></td>
                                    <td><?php echo $r["MaNCC"];?></td>
                                    
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=danhmucsanpham&ac=editsp&msp=<?php echo $r["Masanpham"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="index.php?mod=danhmucsanpham&ac=delsp&msp=<?php echo $r["Masanpham"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
							<?php
							}
							?>	
							</tbody>
							
						</table>
                        <div style="color:#F00; clear:both; text-align:center;">
	<?php
		for($i=1; $i<= $sotrang; $i++)
		{
			?>
			<a class="a" href="index.php?mod=hienthi&page=<?php echo $i;?>"><?php echo $i;?></a>&nbsp;
			<?php	
		}
	?>
</div>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				