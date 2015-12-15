<?php

$b= new B();
?>
<?php 
$sqldem ="select Count(*) as dem from tintuc ";
$kq = $b->select($sqldem);
//print_r($kq);
$n = $kq[0]["dem"]; // echo "ban dang co $n tin ";
$pageSize = 10;
$sotrang = ceil($n/$pageSize);
$page = isset($_GET["page"])?$_GET["page"]:1;
$vt = ($page-1) *$pageSize;

$kq = $b->select("select * from tintuc limit $vt, $pageSize");
//print_r($kq);

	?>			<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
					
						
						<table>
							
							<thead>
								<tr>
								   <th>ID Tin</th>
								   <th>Tiêu đề</th>
                                   
                                   <th>Tóm Tắt Nội Dung</th>
                                   
                                   
								   
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
									<td><?php echo $r["idTin"]?></td>
									<td><?php echo $r["tieuDe"];?></td>
									<td><?php echo $r["tomTatnd"];?></td>
                                    
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=danhmucsanpham&ac=edittin&idtin=<?php echo $r["idTin"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="index.php?mod=danhmucsanpham&ac=deltin&idtin=<?php echo $r["idTin"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
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
			<a class="a" href="index.php?mod=dstintuc&page=<?php echo $i;?>"><?php echo $i;?></a>&nbsp;
			<?php	
		}
	?>
</div>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				