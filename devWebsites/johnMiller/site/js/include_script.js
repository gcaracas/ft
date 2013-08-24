include('request_url.js');
//----jquery-plagins----
include('jquery-1.8.3.min.js');
include('jquery.ba-resize.min.js');
//----bootstrap----
//----All-Scripts----
include('scroll_to_top.js');
include('ajax.js.switch.js');
//----------------------------
include('MathUtils.js');
include('tms-0.4.1.js');
//----------------------------
include('jquery.easing.1.3.js');
include('jquery.animate-colors-min.js');
include('hoverSprite.js');
include('spin.js');
include('script.js');
include('forms.js');
//----Include-Function----
function include(url){ 
  document.write('<script type="text/javascript" src="js/'+ url + '"></script>'); 
  return false ;
}