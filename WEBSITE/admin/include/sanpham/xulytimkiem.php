

<?php
$timkiem =$_POST["tk"];
$b = new B();

$sql ="select * from sanpham where Tensanpham like '%$timkiem%' ";
$arr = array($timkiem);
$kq = $b->select($sql, $arr);
//print_r($kq);
if (Count($kq)==0)
{
	echo "sai";
	
}
else 
{
	
echo "có ".Count($kq)." sản phẩm tìm được";
?>

                <div class="content-box-content">
					
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
	
</div>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				
				
<?php
}
?>