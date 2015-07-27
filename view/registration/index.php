<section class="container details">
            	
                <!--Title Start-->
                <div class="content-header">
                	<h1>PRODUCT REGISTRATION</h1>
                    <nav>
                    	<ul>
                        	<li><a href="/">Home</a></li>
                            <li><a href="/registration/index">Registration</a></li>
                        </ul>
                    </nav>
                </div>
                <!--End-->
                
                <!--Details Start-->
                <div class="content-body">
                	<div class="subscribe-box">
                        <form method="post" action="<?php echo $link; ?>">

							<label>Category Product : &nbsp;&nbsp;</label>
		                      <select name="category" id="pilih_category" class="input-name">
		                      	<?php
		                      	$db = Db::init();
								$catprod = $db->category_product;
								$quer = array(
									'contributor_id' => CLIENT_ID
								);
								$mcatprod = $catprod->find($quer);
								$catpilih = "";
								$adapilih = false;
								foreach ($mcatprod as $dat)
								{
									if (trim($dat['_id']) == $category) 
									{
										echo "<option value='".trim($dat['_id'])."' selected>".$dat['name']."</option>";
										$catpilih = trim($dat['_id']);
										$adapilih = true;
									}
									else 
									{
										echo "<option value='".trim($dat['_id'])."'>".$dat['name']."</option>";
										if(!$adapilih)
											$catpilih = trim($dat['_id']);
									}
								}
		                      	?>                     
		                      </select>
		                      <br /><br />

		                      <?php
								$hasil = '<div id="isi_typeproduct">';
						        $hasil .= '<label>Type Product : &nbsp;&nbsp;</label>';
						        $hasil .= '<select name="type_product" class="form-control">';
						
								$db = Db::init();
								$typeprod = $db->type_product;
								$query = array(
									'contributor_id' => CLIENT_ID,
									'type' => new MongoId($catpilih)
								);
								$mtypeprod = $typeprod->find($query);
												
								foreach ($mtypeprod as $dat)
								{
									$hasil .= "<option value='".trim($dat['_id'])."'>".$dat['name']."</option>";
								}
						        $hasil .= "</select>";
								$hasil .= '<br /><br />';
						        $hasil .= "</div>";
								
								echo $hasil;
		                      ?>
		                    
		                      <label>Serial Number : &nbsp;&nbsp;</label>
		                      <input id="serialname" class="input-name" type="text" name="serialname" placeholder="Your Serial number *" required />
							<br /><br />
		                    
		                      <label>Tanggal Pembelian : &nbsp;&nbsp;</label>
		                      <input id="datepurchase" class="input-name" type="text" name="datepurchase" placeholder="Tanggal Pembelian" required />
							<br /><br />
		                    
		                    <input class="subscribe-button" type="submit" value="NEXT"/>
                        </form>
                   </div>
                </div>
                <!--End-->
                
            </section>