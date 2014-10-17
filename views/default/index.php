<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-10">

            <div class="panel panel-default">
                <div class="panel-body">
					<div id="map" style="width: 100%; height: 600px; padding: 0; margin: 0;"></div>

                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <strong>Показывать</strong>
                </div>

                <div class="panel-body">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="filter" class="filterCheckbox" value="aaa" checked="checked">
                            Активности
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="filter" class="filterCheckbox" value="aaa" checked="checked">
                            Зоны интереса
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="filter" class="filterCheckbox" value="aaa" >
                            ccc checkbox
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="filter" class="filterCheckbox" value="aaa" >
                            ddd checkbox
                        </label>
                    </div>
                    <br />

                </div>
            </div>

            <div class="panel panel-default">

                <div class="panel-heading">
					222
                </div>

                <div class="panel-body">

                    <div class="checkbox">
                        <label>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                        </label>
                    </div>                    
                    <br />
                    <div class="checkbox">
                        <label>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                        </label>
                    </div>                    
                </div>
            </div>
        </div>        

    </div>
</div>

<script type="text/javascript" src="http://api-maps.yandex.ru/2.1/?lang=ru_RU"></script> 
<script>
var g_map;

ymaps.ready( init );
function init() 
{
    g_map = new ymaps.Map( "map", 
	{
        center: [ 55.73, 37.75 ],
        zoom: 10
    } );
}


ymaps.ready( drawObjects );
function drawObjects()
{
	var data;
	jQuery( function()
	{
		var data;

		// zones
		data = '[{"feature":{"geometry":{"type":"Polygon","fillRule":"nonZero","coordinates":[[[55.585,37.799],[55.974,37.772],[55.825,37.602],[55.939,37.541]]]},"properties":{"balloonContent":"\u041c\u043d\u043e\u0433\u043e\u0443\u0433\u043e\u043b\u044c\u043d\u0438\u043a"}},"options":{"fillColor":"#00FF00","strokeColor":"#0000FF","opacity":0.3,"strokeWidth":2,"strokeStyle":"longdash"}}]';
//		parse( data );
		data = '[{"feature":{"geometry":{"type":"Polygon","fillRule":"nonZero","coordinates":[[[55.966,38.133],[55.818,37.845],[55.942,37.598],[55.693,37.652]]]},"properties":{"balloonContent":"\u041c\u043d\u043e\u0433\u043e\u0443\u0433\u043e\u043b\u044c\u043d\u0438\u043a"}},"options":{"fillColor":"#00FF00","strokeColor":"#0000FF","opacity":0.3,"strokeWidth":2,"strokeStyle":"longdash"}}]';
//		parse( data );
		data = '[{"feature":{"geometry":{"type":"Polygon","fillRule":"nonZero","coordinates":[[[55.674,38.044],[55.81,37.8],[55.71,37.622],[55.603,38.017]]]},"properties":{"balloonContent":"\u041c\u043d\u043e\u0433\u043e\u0443\u0433\u043e\u043b\u044c\u043d\u0438\u043a"}},"options":{"fillColor":"#00FF00","strokeColor":"#0000FF","opacity":0.3,"strokeWidth":2,"strokeStyle":"longdash"}}]';
		parse( data );
		data = '[{"feature":{"geometry":{"type":"Polygon","fillRule":"nonZero","coordinates":[[[55.966,37.694],[55.542,37.999],[55.878,37.594],[55.515,37.779]]]},"properties":{"balloonContent":"\u041c\u043d\u043e\u0433\u043e\u0443\u0433\u043e\u043b\u044c\u043d\u0438\u043a"}},"options":{"fillColor":"#00FF00","strokeColor":"#0000FF","opacity":0.3,"strokeWidth":2,"strokeStyle":"longdash"}}]';
//		parse( data );
		
		// points
		data = '[{"feature":{"geometry":{"type":"Point","coordinates":[55.827,37.964]},"properties":{"balloonContent":"\u0422\u043e\u0447\u043a\u0430"}},"options":{"iconColor":"#0000FF","preset":"islands#dotIcon"}}]';
		parse( data );
		data = '[{"feature":{"geometry":{"type":"Point","coordinates":[55.593,37.81]},"properties":{"balloonContent":"\u0422\u043e\u0447\u043a\u0430"}},"options":{"iconColor":"#0000FF","preset":"islands#dotIcon"}}]';
		parse( data );
		data = '[{"feature":{"geometry":{"type":"Point","coordinates":[55.995,37.72]},"properties":{"balloonContent":"\u0422\u043e\u0447\u043a\u0430"}},"options":{"iconColor":"#0000FF","preset":"islands#dotIcon"}}]';
		parse( data );
		data = '[{"feature":{"geometry":{"type":"Point","coordinates":[55.541,37.86]},"properties":{"balloonContent":"\u0422\u043e\u0447\u043a\u0430"}},"options":{"iconColor":"#0000FF","preset":"islands#dotIcon"}}]';
		parse( data );
		data = '[{"feature":{"geometry":{"type":"Point","coordinates":[55.801,37.904]},"properties":{"balloonContent":"\u0422\u043e\u0447\u043a\u0430"}},"options":{"iconColor":"#0000FF","preset":"islands#dotIcon"}}]';
		parse( data );
		
		// polylines
		data = '[{"feature":{"geometry":{"type":"LineString","coordinates":[[55.512,37.833],[55.666,37.796],[55.617,37.534],[55.712,37.628],[55.857,38.123],[55.815,37.952],[55.665,37.805],[55.508,37.697],[55.606,37.763],[55.666,37.925],[55.933,37.557],[55.678,38.19],[55.611,38.066],[55.794,37.543]]},"properties":{"balloonContent":"\u041b\u0438\u043d\u0438\u044f"}},"options":{"strokeColor":"#0000FF","opacity":0.8,"strokeWidth":3,"strokeStyle":"dash"}}]';
//		parse( data );
		data = '[{"feature":{"geometry":{"type":"LineString","coordinates":[[55.787,38.045],[55.857,37.593],[55.841,37.802],[55.65,37.624],[55.714,37.634],[55.746,37.702],[55.829,38.011],[55.699,37.814],[55.539,38.052],[55.616,37.558],[55.701,37.552],[55.563,37.57],[55.771,37.569],[55.576,37.547]]},"properties":{"balloonContent":"\u041b\u0438\u043d\u0438\u044f"}},"options":{"strokeColor":"#0000FF","opacity":0.8,"strokeWidth":3,"strokeStyle":"dash"}}]';
//		parse( data );
		data = '[{"feature":{"geometry":{"type":"LineString","coordinates":[[55.611,37.807],[55.752,38.058],[55.608,37.652],[55.965,38.13],[55.825,37.661],[55.538,37.554],[55.71,37.898],[55.683,37.555],[55.649,38.036],[55.764,37.763],[55.777,38.032],[55.73,38.17],[55.918,37.911],[55.528,37.763]]},"properties":{"balloonContent":"\u041b\u0438\u043d\u0438\u044f"}},"options":{"strokeColor":"#0000FF","opacity":0.8,"strokeWidth":3,"strokeStyle":"dash"}}]';
//		parse( data );

		function parse( d )
		{
			data = JSON.parse( d );
			var myGeoObject;
			$.each( data, function( key, value ) 
			{
				myGeoObject = new ymaps.GeoObject( value.feature, value.options );
				g_map.geoObjects.add( myGeoObject );
			} );
		}
	} );
}
</script>    