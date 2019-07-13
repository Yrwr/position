<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>前端定位-仅支持国内</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">


</head>
<body onload="geolocation.getLocation(showPosition,options)">
<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js "></script>
<script type="text/JavaScript">
 var geolocation = new qq.maps.Geolocation("定位KEY", "myapp"); //定位KEY到https://lbs.qq.com申请,格式为XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX
  var options = {timeout:0};
        function showPosition(position) {
         var jg_position=JSON.stringify(position);
         var js_jg = JSON.parse(jg_position);//转换为json对象 nation province city addr
		 var dwdz=js_jg.nation+js_jg.province+js_jg.city+js_jg.addr;
         document.getElementById("dwdz").innerHTML = dwdz;
        };
 </script><iframe id="_geoIframe_7430851" src="https://apis.map.qq.com/tools/geolocation?key=RKXBZ-OKFWF-KDUJ6-N654L-4J453-AAFER&referer=myapp" style="display: none; width: 100%; height: 30%"></iframe>
 
<font id="dwdz"></font> 
    
</body>
</html>