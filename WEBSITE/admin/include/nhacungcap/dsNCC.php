<?php

$b= new B();
?>
<?php
$arr = $b->select("select * from nhacungcap");

?>
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
					
						
						<table>
							
							<thead>
								<tr>
								   <th>Nhà Cung Cấp</th>
								   <th>Tên Nhà Cung Cấp</th>
                                   <th>Liên Hệ</th>
								   
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
							foreach($arr as $r)
							{
								?>
								<tr>
									<td><?php echo $r["MaNCC"]?></td>
									<td><?php echo $r["TenNCC"];?></td>
									<td><?php echo $r["LienHe"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=danhmucsanpham&ac=editncc&mncc=<?php echo $r["MaNCC"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="index.php?mod=danhmucsanpham&ac=delncc&mncc=<?php echo $r["MaNCC"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
							<?php
							}
							?>	
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				