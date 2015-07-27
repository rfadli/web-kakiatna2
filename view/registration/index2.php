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

							<label>Name</label>
		                      <input id="name" class="input-name" type="text" name="name" placeholder="Your Name *" required />
		                      <br /><br />
							
							<label>Address</label>
		                      <input id="alamat" class="input-name" type="text" name="alamat" placeholder="Your Address *" required />
							<br /><br />
							
							<label>City</label>
		                      <input id="city" class="input-name" type="text" name="city" placeholder="Your City *" required />
							<br /><br />
							
		                      <label>Postcode</label>
		                      <input id="postcode" class="input-name" type="text" name="postcode" placeholder="Your Postcode *" required />
		                    <br /><br />
		                    
		                      <label>E-mail</label>
		                      <input id="email" class="input-name" type="text" name="email" placeholder="Your E-mail" required />
							<br /><br />
							
							<label>Phone</label>
		                      <input id="phone" class="input-name" type="text" name="phone" placeholder="Your Phone Number" required />
							<br /><br />
		                    
		                    <input class="subscribe-button" type="submit" value="FINISH"/>
                        </form>
                   </div>
                </div>
                <!--End-->
                
            </section>