<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<?php foreach($main_menus as $mkey => $mvals){ ?>
									<li aria-haspopup="true"><a href="#" class="sub-icon"> <?php echo $mvals['menu_name']; ?> <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<?php foreach($sub_menus as $skey => $svals){ 
												if($mvals['id'] == $svals['parent_id']){
												?>
													<li aria-haspopup="true"><a href="<?php echo site_url($svals['menu_url']); ?>" class="slide-item"><?php echo $svals['menu_name']; ?></a></li>
											<?php } } ?>
										</ul>
									</li>
								<?php } ?>
							</ul>
						</nav>
						<!--Nav end -->
					</div>
				</div>