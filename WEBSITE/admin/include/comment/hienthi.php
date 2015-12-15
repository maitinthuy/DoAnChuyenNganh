<?php

$b= new B();
?>
<?php
$arr = $b->select("select * from binhluan where duyet=0 ");

?>
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
					
						
						<table>
							
							<thead>
								<tr>
								   <th>ID Bình luận</th>
								   <th>Mã sản phẩm</th>
								   
								   <th>Nội dụng comment</th>
                                    <th>Trạng thái</th>
                                    <th>Duyệt</th>
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
									<td><?php echo $r["idbinhluan"]?></td>
									<td><?php echo $r["Masanpham"];?></td>
									<td><?php echo $r["noidung"];?></td>
                                    <td><?php echo $r["duyet"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=danhmucsanpham&ac=duyetcm&id=<?php echo $r["idbinhluan"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="index.php?mod=danhmucsanpham&ac=delcm&id=<?php echo $r["idbinhluan"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
							<?php
							}
							?>	
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				