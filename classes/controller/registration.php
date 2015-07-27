<?php

class registration_controller extends controller
{
	
	public function index()
	{
		$category = "";
		
		$p = array(
			'link' => '/registration/next',
			'category' => $category,
		);
		$content = $this->getView(DOCVIEW.'registration/index.php', $p);
		$this->addView('content', $content);
		$this->js->add('/public/js/tambah.js');
		$this->render(array());
	}
	
	public function next()
	{
		$category = '';
		$type_product = '';
		$serialname = '';
		$datepurchase = '';
		
		if(!empty($_POST))
		{
			if(isset($_POST['category']))
				$category = $_POST['category'];
			if(isset($_POST['type_product']))
				$type_product = $_POST['type_product'];
			if(isset($_POST['serialname']))
				$serialname = $_POST['serialname'];
			if(isset($_POST['datepurchase']))
				$datepurchase = $_POST['datepurchase'];
			
			
			$validator = new Validator();
			$validator->addRule('category', array('require', 'minlength' => 5));
			$validator->addRule('type_product', array('require', 'minlength' => 5));
			$validator->addRule('serialname', array('require', 'minlength' => 5));
			$validator->addRule('datepurchase', array('require', 'minlength' => 5));
			$validator->setData(
	                array(
						'category' => $category,
						'type_product' => $type_product,
						'serialname' => $serialname,
						'datepurchase' => $datepurchase,
	            	)
			);
	                    			
	        if ($validator->isValid())
			{
				
				$_SESSION['category_register'] = $category;
				$_SESSION['type_product_register'] = $type_product;
				$_SESSION['serialname_register'] = $serialname;
				$_SESSION['datepurchase_register'] = $datepurchase;
				
				$p = array(
					'link' => '/registration/next2',
					'category' => $category,
					'type_product' => $type_product,
					'serialname' => $serialname,
					'datepurchase' => $datepurchase,
				);
				$content = $this->getView(DOCVIEW.'registration/index2.php', $p);
				$this->addView('content', $content);
				$this->render(array());
			}
		}
	}

	public function next2()
	{
		$db = Db::init();
		$stt = $db->registrations;
		$data = $stt->find();
		
		$name = '';
		$alamat = '';
		$phone = '';
		$email = '';
		$postcode = '';
		$city = '';
		
		if(!empty($_POST))
		{
			if(isset($_POST['name']))
				$name = $_POST['name'];
			if(isset($_POST['alamat']))
				$alamat = $_POST['alamat'];
			if(isset($_POST['phone']))
				$phone = $_POST['phone'];
			if(isset($_POST['email']))
				$email = $_POST['email'];
			if(isset($_POST['postcode']))
				$postcode = $_POST['postcode'];
			if(isset($_POST['city']))
				$city = $_POST['city'];
			
			$validator = new Validator();
			$validator->addRule('name', array('require', 'minlength' => 5));
			$validator->addRule('alamat', array('require', 'minlength' => 5));
			$validator->addRule('phone', array('require', 'minlength' => 5));
			$validator->addRule('email', array('require', 'minlength' => 5));
			$validator->setData(
	                array(
						'name' => $name,
						'alamat' => $alamat,
						'phone' => $phone,
						'email' => $email,
	            	)
			);
			if ($validator->isValid())
			{
				$data = array(
					
					'category' => new MongoId($_SESSION['category_register']),
					'type_product' => new MongoId($_SESSION['type_product_register']),
					'serialname' => $_SESSION['serialname_register'],
					'datepurchase' => $_SESSION['datepurchase_register'],
					'name' => $name,
					'alamat' => $alamat,
					'phone' => $phone,
					'email' => $email,
					'postcode' => $postcode,
					'city' => $city,
					'contributor_id' => CLIENT_ID,
					'time' => time(),
				);
				$stt->insert($data);
				
				$p = array(
					'link' => '/registration/next3',
					'name' => $name,
					'alamat' => $alamat,
					'phone' => $phone,
					'email' => $email,
					'postcode' => $postcode,
					'city' => $city,
					'data' => $data
				);
				$content = $this->getView(DOCVIEW.'registration/index3.php', $p);
				$this->addView('content', $content);
				$this->render(array());
			}
			
		}
		
	}

   public function next3()
   {
	   	$content = $this->getView(DOCVIEW.'registration/index3.php', array());
		$this->addView('content', $content);
		$this->render(array());
   }
	
	public function pilihcategory()
	{
		$id = $_GET['id'];
		//echo $id.' dari php';
		
		$hasil = '<div id="isi_typeproduct" class="form-group">';
        $hasil .= '<label>Type Product : &nbsp;&nbsp;</label>';
        $hasil .= '<select name="type_product" class="form-control">';

		$db = Db::init();
		$typeprod = $db->type_product;
		$query = array(
			'contributor_id' => CLIENT_ID,
			'type' => new MongoId($id)
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
	}
}