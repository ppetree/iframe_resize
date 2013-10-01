// JavaScript Document
// this code will create the iframe just above where this file is embedded on your domain_b page
// (see domain_b_index.php)

var getVars = {};
(function(){
    var scripts, currentScript, queryString;

    scripts = document.getElementsByTagName('script');
    currentScript = scripts[ scripts.length - 1 ];
    queryString = currentScript.getAttribute('src').replace(/[^\?]*/,'').split('&');
    for(var i=0;i<queryString.length;i++){
        var keyVal = queryString[i].split('=');
        getVars[ keyVal[0] ] = keyVal[1];
    }

}());

if(typeof (PP_resize_listener) !== 'function') 
{
  function PP_resize_listener(event)
  {
    if ( event.origin !== "http://www.domain_a.com" )
    {
      return;
    }
    else
    {
      var window_height = JSON.parse(event.data);
      document.getElementById(window_height.frame).height = window_height.height; 
    }
  }  
}

var domain_a_me = document.getElementById('domain_a_script');
var domain_a_iframe = document.createElement('iframe');

domain_a_iframe.src = 'http://www.domain_a.com/domain_a.php?kitid='+getVars['?kitid'];
domain_a_iframe.id = 'domain_a_iframe_'+getVars['?kitid'];
domain_a_iframe.width = "500";
domain_a_iframe.height = "210";
domain_a_iframe.style.cssText = 'border: 0px; padding: 10px;';
domain_a_me.parentNode.insertBefore(domain_a_iframe, domain_a_me);

if (window.addEventListener)
{
  addEventListener("message", PP_resize_listener, false);
}
else if (window.attachEvent)
{
  attachEvent("onmessage", PP_resize_listener);
}
else
{
  alert("You have an older browser and some things may not display correctly.");
}
