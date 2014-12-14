// ==UserScript==
// @name        login go2
// @namespace   go2
// @version     1
// @grant       none
// ==/UserScript==
setTimeout(c,3000);//再间隔5秒钟执行b循环
function c(){
	//document.getElementById("fast_login").getElementsByTagName("div").getElementsByTagName("a").getElementsByTagName("div").click();
	//alert('11111111');
	var d=document.getElementsByTagName("div");
	for(i=0;i<d.length;i++){
		if(d[i].className=="xplong"){
			a=d[i].click();
		}
	}
}

