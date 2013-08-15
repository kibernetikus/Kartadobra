/***********************************************************************************************************
 * com.oclib.javascript.util.dom.20070110. Dom
 * Location: http://www.oclib.com/library/com/oclib/javascript/util/Dom.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/util/dom/20070110/.js
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/util/dom/20070110/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.util == "undefined") {com.oclib.javascript.util = {};};

if (typeof com.oclib.javascript.util.Dom == "undefined") {
 com.oclib.javascript.util.Dom = function() {};
 
 com.oclib.javascript.util.Dom.prototype = new com.oclib.javascript.lang.Root(); 

 com.oclib.javascript.util.Dom.prototype.className = "Dom"; 
 com.oclib.javascript.util.Dom.prototype.classNamespace = "com.oclib.javascript.util.Dom"; 
 com.oclib.javascript.util.Dom.prototype.classCreated = "20060101"; 
 com.oclib.javascript.util.Dom.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.util.Dom.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/util/Dom.js"; 
 com.oclib.javascript.util.Dom.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/dom/"; 
 com.oclib.javascript.util.Dom.prototype.classVersion = "20070110"; 
 com.oclib.javascript.util.Dom.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/util/dom/20070110/Dom.js"; 
 com.oclib.javascript.util.Dom.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/dom/20070110/"; 

 com.oclib.javascript.util.Dom.prototype.appendTextContent = function(element, content) {
  if(this.mustTrace()) {this.getLog().println("Dom.appendTextContent is running...");}; 
  if(typeof element == "string") {element = document.getElementById(element)};
  
  element.appendChild(document.createTextNode(content));
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.changeChilds = function(element, newChildsRootElement) {
  if(this.mustTrace()) {this.getLog().println("Dom.changeChilds is running...");}; 
  if(typeof element == "string") {element = document.getElementById(element)};
  if(typeof newChildsRootElement == "string") {newChildsRootElement = document.getElementById(newChildsRootElement)};
  
  this.removeChilds(element);
  
  element.appendChild(newChildsRootElement);
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.changeTextContent = function(element, content) {
  if(this.mustTrace()) {this.getLog().println("Dom..changeTextContent is running...");}; 
  if(typeof element == "string") {element = document.getElementById(element)};
  if(element) {
   this.removeChilds(element); 
   element.appendChild(document.createTextNode(content));
   return 1;
  } else {
   return 0;
  };
 };

 com.oclib.javascript.util.Dom.prototype.clearTextContent = function(element) {
  if(this.mustTrace()) {this.getLog().println("Dom.changeTextContent is running...");}; 
  if(typeof element == "string") {element = document.getElementById(element)};
  if(element) {
   this.removeChilds(element); 
   return 1;
  } else {
   return 0;
  };
 };

 com.oclib.javascript.util.Dom.prototype.copyContent = function(fromElement, toElement, removeToStatus) {
  if(this.mustTrace()) {this.getLog().println("Dom.copyContent is running...");};
  if(typeof fromElement == "string") {fromElement = document.getElementById(fromElement)};
  if(typeof toElement == "string") {toElement = document.getElementById(toElement)};
  
  if(!fromElement) {return -1;} 
  if(!toElement) {return -2;} 
  
  if(removeToStatus) {this.removeChilds(element);}
 
  var copyElement = fromElement.firstChild; 
  while(copyElement) {
   toElement.appendChild(copyElement.cloneNode(true));
   copyElement = copyElement.nextSibling;
  };
 
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.createCookie = function(name, value, days) {
  if(this.mustTrace()) {this.getLog().println("Dom.createCookie is running...");};
  var expires;
  if (days) {
   var date = new Date();
   date.setDate(date.getDate()+days);
    expires = "; expires="+date.toGMTString();
  } else {
   expires = "";
  };
  document.cookie = name+"="+value+expires+"; path=/";
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.createLinkElement = function(id, href, text) {
  if(this.mustTrace()) {this.getLog().println("Dom.createLinkElement is running...");};
  var linkElement = document.createElement("a");
  linkElement.id = id;
  linkElement.setAttribute("href", href);
  linkElement.appendChild(document.createTextNode(text)); 
  return linkElement;
 };
 
 com.oclib.javascript.util.Dom.prototype.doHidden = function(element) {
  if(this.mustTrace()) {this.getLog().println("Dom.doHidden is running...");};
  if(typeof element == "string") {element = document.getElementById(element)};
  if(!element) {return -1;};
  element.style.visibility = "hidden";
  element.style.position = "absolute";
  element.style.left = "-1000em";
  element.style.top = "-1000em";
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.doVisible = function(element) {
  if(this.mustTrace()) {this.getLog().println("Dom.doVisible is running...");};
  if(typeof element == "string") {element = document.getElementById(element)};
  if(!element) {return -1;} 
  if(!element.style) {return -2;} 
  element.style.position = "static";
  element.style.left = "auto";
  element.style.top = "auto";  
  element.style.visibility = "visible";
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.eraseCookie = function(name) {
  if(this.mustTrace()) {this.getLog().println("Dom.eraseCookie is running...");};
  this.createCookie(name,"",-1);
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.getTextContent = function(element) {
  if(this.mustTrace()) {this.getLog().println("Dom.getTextContent is running...");};
  if(typeof element == "string") {element = document.getElementById(element)};
  if(!element) {return -1;} 
  if(!element.firstChild) {return -2;} 
  var childNode = element.firstChild;
  if(!childNode) {return -3;}
  if(childNode.nodeType != 3) {return -4;}
  var text = childNode.nodeValue;
  return text;
 };

 com.oclib.javascript.util.Dom.prototype.invertVisibility = function(element) {
  if(this.mustTrace()) {this.getLog().println("Dom.invertVisibility is running...");};
  if(typeof element == "string") {element = document.getElementById(element)};
  if(element.style.visibility == "visible" || element.style.visibility == "") {doHidden(element)} else {doVisible(element)}
  return 1;
 };

 com.oclib.javascript.util.Dom.prototype.readCookie = function(name) {
  if(this.mustTrace()) {this.getLog().println("Dom.readCookie is running...");};
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for(var i=0; i < ca.length; i++) {
   var c = ca[i];
   while (c.charAt(0)==" ") c = c.substring(1,c.length);
   if (c.indexOf(nameEQ) == 0) {
    return c.substring(nameEQ.length,c.length);
   };
  }
  return null;
 };

 com.oclib.javascript.util.Dom.prototype.removeChilds = function(element) { 
  if(this.mustTrace()) {this.getLog().println(" com.oclib.javascript.util.Dom.prototype.removeChilds is running...");};
  if(typeof element == "string") {element = document.getElementById(element)}; 
  if(element) {
   while(element.hasChildNodes() && element.firstChild) {element.removeChild(element.firstChild);};
   return 1;
  } else {
   return 0;
  };
 };

 com.oclib.javascript.util.Dom.prototype.setTextContent = function(element, content) {
  if(this.mustTrace()) {this.getLog().println(" com.oclib.javascript.util.Dom.prototype.setTextContent is running...");};
  return this.changeTextContent(element, content);
 };
};