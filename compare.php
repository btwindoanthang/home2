<?php session_start(); ?>			
                        <div class="row" id="check">
                           
                            <?php 
                            if (!isset($_SESSION['cart']) || (count($_SESSION['cart']) == 0)) {}
                            else {
                                
                            
                            foreach ($_SESSION['cart'] as $ite){ ?>
                            
                                <div class="col-md-4 col-sm-4 col-xs-4 house-check">
					<img class="img-check" src="img/product/<?php echo $ite['img'] ?>">
                                        <input type="checkbox" class="chk" value="<?php echo $ite['id'] ?>">
					</img>
				</div>
                            <?php }}?>
				
				
				
				
			</div>
