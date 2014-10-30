<div class="footer">
	<p>Head Office and Distribution: Calder House, Savile Road, Castleford, West Yorkshire, WF10 1BJ | Tel: 01977 669688</p>
</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {
    var myLatlng = new google.maps.LatLng(53.72685,-1.36023);
    var myOptions = {
      zoom: 15,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
    var marker = new google.maps.Marker({
        position: myLatlng, 
        map: map,
        title:"Dirt Cheap Beds Warehouse"
    });
  }
</script>
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/js/lightbox.js"></script>
</body>
</html>