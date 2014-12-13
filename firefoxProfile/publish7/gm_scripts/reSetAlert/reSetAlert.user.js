// ==UserScript==
// @name        new alert
// @namespace   new alert
// @description new alert
// @version     1
// @grant       none
// @run-at document-start
// ==/UserScript==

var oldAlert = window.alert;
window.alert = function(msg){
  //oldAlert('it is ok!');
  return true;
}
alert('111');