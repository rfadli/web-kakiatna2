<?php



class wheretobuy_controller extends controller
{
	private static function cmp($a, $b)
	{
	    if ($a['distance'] == $b['distance']) {
	        return 0;
	    }
	    return ($a['distance'] < $b['distance']) ? -1 : 1;
	}

	public function index()
	{	
		$db = Db::init();
		$del = $db->dealer;
		$q = array(
			'contributor_id' => CLIENT_ID,
		);
		$mcontent = $del->find($q);
		
		$ip = helper::getIp();
		require_once DOCROOT.'lib/geoip2.phar';
		$reader = new GeoIp2\Database\Reader(DOCROOT.'lib/GeoIP2-City.mmdb');
		$record = $reader->city($ip);
		
		$dta = array();
		foreach($mcontent as $m)
		{
			$unit = 'K';
			$lat1 = $record->location->latitude;
			$long1 = $record->location->longitude;
			$jarak = helper::distance(floatval($lat1), floatval($long1), floatval($m['latitude']), floatval($m['longitude']), $unit);
			
			$kota = '';
			if(isset($m['kota']))
				$kota = $m['kota'];
			$p = array(
				'lat' => $m['latitude'],
				'long' => $m['longitude'],
				'name' => $m['name'],
				'kota' => $kota,
				'address' => $m['address'],
				'distance' => floatval($jarak)
			);
			$dta[] = $p;
		}
		usort($dta, array('wheretobuy_controller','cmp'));
		
		$var = array(
			'data' => $dta
		);
		$content = $this->getView(DOCVIEW.'wheretobuy/index.php', $var);
		$this->addView('content', $content);
		$this->tambah($dta);
		$this->render(array());
	}
	
	protected function tambah($data)
	{
		$x = 0;
		$lat = 0;
		$long = 0;
		foreach($data as $dt)
		{
			if($x == 0)
			{
				$lat = $dt['lat'];
				$long = $dt['long'];
				break;
			}
			$x++;
		}
		
		$phold = '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>'."\n";
		$phold .= '<script>'."\n";
		$phold .= 'function initialize() {'."\n";
		$phold .= '"use strict";'."\n";

  		$phold .= 'var mapOptions = {'."\n";
   	 	$phold .= 'zoom: 15,'."\n";
    	$phold .= 'center: new google.maps.LatLng('.$lat.', '.$long.'),'."\n";
    	$phold .= 'mapTypeId: google.maps.MapTypeId.ROADMAP'."\n";
  		$phold .= '};'."\n";

  		$phold .= 'var map = new google.maps.Map(document.getElementById("map-canvas"),'."\n";
      	$phold .= 'mapOptions);'."\n";

		$x = 0;
		foreach($data as $dt)
		{
			$phold .= 'var infowindow'.$x.' = new google.maps.InfoWindow({'."\n";
      		$phold .= 'content: "<b>'.$dt['name'].'</b><br />"+'."\n";
			$phold .= '"'.$dt['address'].'<br />"+'."\n";
			$phold .= '"'.$dt['kota'].'"'."\n";
  			$phold .= '});'."\n";
			$phold .= 'var marker'.$x.' = new google.maps.Marker({'."\n";
	    	$phold .= 'position: new google.maps.LatLng('.$dt['lat'].', '.$dt['long'].'),'."\n";
	    	$phold .= 'map: map,'."\n";
	    	$phold .= 'title: "'.$dt['name'].'"'."\n";
	  		$phold .= '});'."\n";
	
	  		$phold .= 'google.maps.event.addListener(marker'.$x.', "click", function() {'."\n";
	  		$phold .= 'infowindow'.$x.'.open(map, marker'.$x.');'."\n";
	    	//$phold .= 'map.setZoom(8);'."\n";
	    	//$phold .= 'map.setCenter(marker'.$x.'.getPosition());'."\n";
	  		$phold .= '});'."\n";
			$x++;
		}
  		
  		
		$phold .= '}'."\n";

		$phold .= 'google.maps.event.addDomListener(window, "load", initialize);'."\n";

		$phold .= '</script>';
		$this->tambahan->add($phold);
		
	}
}
