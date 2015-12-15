<?php

$b= new B();
?>
<?php
$arr = $b->select("select * from loaisanpham");

?>
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
					
						
						<table>
							
							<thead>
								<tr>
								   <th>Mã Loại</th>
								   <th>Tên Loại</th>
								   
								   <th>ID Tên Danh Mục</th>
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
									<td><?php echo $r["MaLoai"]?></td>
									<td><?php echo $r["TenLoai"];?></td>
									<td><?php echo $r["idTen"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=danhmucsanpham&ac=editml&ml=<?php echo $r["MaLoai"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="index.php?mod=danhmucsanpham&ac=delml&ml=<?php echo $r["MaLoai"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
							<?php
							}
							?>	
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				