/***********************************************************************************************************
 * com.oclib.javascript.util.log.20070110.Log
 * Location: http://www.oclib.com/library/com/oclib/javascript/util/Log.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/util/log/20070110/Loader.js
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/util/log/20070110/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.util == "undefined") {com.oclib.javascript.util = {};};

if (typeof com.oclib.javascript.lang.Log == "undefined") {
 com.oclib.javascript.util.Log = function (logElementId, logType, logPlace) { 
  this.completionStatus = 0;
  
  this.logType = logType;
  if(!this.logType) {this.logType = this.SYMPLE_TEXT_LOG_TYPE;}; 
  
  this.logPlace = logPlace;
  if(!this.logPlace) {this.logPlace = this.INTRO_ELEMENT_LOG_PLACE;}; 
  
  if(!logElementId || logElementId == "") {return -1;}
  this.logElementId = logElementId;
  this.createLogElement(); 
 };
 
 com.oclib.javascript.util.Log.prototype = new com.oclib.javascript.lang.Root(); 
 
 com.oclib.javascript.util.Log.prototype.classCreated = "20060101"; 
 com.oclib.javascript.util.Log.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.util.Log.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/log/"; 
 com.oclib.javascript.util.Log.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/util/Log.js"; 
 com.oclib.javascript.util.Log.prototype.className = "Log"; 
 com.oclib.javascript.util.Log.prototype.classNamespace = "com.oclib.javascript.util.Log"; 
 com.oclib.javascript.util.Log.prototype.classVersion = "20070110"; 
 com.oclib.javascript.util.Log.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/log/20070110/";  
 com.oclib.javascript.util.Log.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/util/log/20070110/Log.js";  

 com.oclib.javascript.util.Log.prototype.SYMPLE_TEXT_LOG_TYPE = (com.oclib.javascript.util.Log.SYMPLE_TEXT_LOG_TYPE = 100);
 
 com.oclib.javascript.util.Log.prototype.BOTTOM_DOCUMENT_LOG_PLACE = (com.oclib.javascript.util.Log.BOTTOM_DOCUMENT_LOG_PLACE  = 3);
 com.oclib.javascript.util.Log.prototype.HIDDEN_LOG_PLACE = (com.oclib.javascript.util.Log.HIDDEN_LOG_PLACE = 0);
 com.oclib.javascript.util.Log.prototype.INTRO_ELEMENT_LOG_PLACE = (com.oclib.javascript.util.Log.INTRO_ELEMENT_LOG_PLACE = 1);
 com.oclib.javascript.util.Log.prototype.TOP_DOCUMENT_LOG_PLACE = (com.oclib.javascript.util.Log.TOP_DOCUMENT_LOG_PLACE = 2); 
 
 com.oclib.javascript.util.Log.prototype.logElemen;
  com.oclib.javascript.util.Log.prototype.getLogElemen = function () {return this.logElemen;};
  com.oclib.javascript.util.Log.prototype.setLogElemen = function (logElemen) {this.logElemen = logElemen; return 1;};
 com.oclib.javascript.util.Log.prototype.logElemenId;
  com.oclib.javascript.util.Log.prototype.getLogElemenId = function () {return this.logElemenId;};
  com.oclib.javascript.util.Log.prototype.setLogElemenId = function (logElemenId) {this.logElemenId = logElemenId; return 1;}; 
 
 com.oclib.javascript.util.Log.prototype.println = function(text) {	
  if(!text) {return -1;};
  if(!this.logElement) {return -1;};
  if(!this.logElement.appendChild) {return -1;}; 
  var textNode = document.createTextNode(text);
  var divElement = document.createElement("div");
  divElement.appendChild(textNode);
  this.logElement.appendChild(divElement); 
  return 1;
 };
 
 com.oclib.javascript.util.Log.prototype.createLogElement = function() {
  if (this.logPlace == this.TOP_DOCUMENT_LOG_PLACE) {
   this.completionStatus =  this.createLogElementTop();
  } else if (this.logPlace == this.BOTTOM_DOCUMENT_LOG_PLACE) {
   this.completionStatus = this.createLogElementBottom();
  } else if (this.logPlace == this.INTRO_ELEMENT_LOG_PLACE) {
   this.completionStatus = this.createLogElementIntro();
  } else {
   return -1;
  };  
  this.logElement = document.getElementById(this.logElementId); 
  return 1; 
 } ;
 
 com.oclib.javascript.util.Log.prototype.createLogElementBottom = function() {
  var divElement = document.createElement("div");
  divElement.id = this.logElementId;
  divElement.style.textAlign = "left"
  var bodyElement = document.body;
  if(!bodyElement) {return -1;};
  bodyElement.appendChild(divElement);
  return 1;
 };
 
 com.oclib.javascript.util.Log.prototype.createLogElementIntro = function() {return 1;} 
 
 com.oclib.javascript.util.Log.prototype.createLogElementTop = function() {
  var divElement = document.createElement("div");
  divElement.id = this.logElementId;
  var bodyElement = document.body;
  if(!bodyElement) {return -1;};
  var bodyFirstChild = bodyElement.firstChild;
  if(!bodyFirstChild) {
   bodyElement.appendChild(divElement);
  } else {
   bodyElement.insertBefore (divElement, bodyFirstChild);
  };
  return 1;
 };
};