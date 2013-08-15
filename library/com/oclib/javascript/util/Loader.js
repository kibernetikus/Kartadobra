/***********************************************************************************************************
 * com.oclib.javascript.util.loader.20070120. Loader
 * Location: http://www.oclib.com/library/com/oclib/javascript/util/Loader.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/util/loader/20070120/.js
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/util/loader/20070120/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.util == "undefined") {com.oclib.javascript.util = {};};

if (typeof com.oclib.javascript.util.Loader == "undefined") {
 com.oclib.javascript.util.Loader = function() {
  this.httpRequest;
 
  if (window.XMLHttpRequest) {
   this.httpRequest = new XMLHttpRequest();
   if (this.httpRequest.overrideMimeType) {
    this.httpRequest.overrideMimeType('text/xml');
   }
  } else if (window.ActiveXObject) { // IE
   try {
    this.httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
   } catch (e) {
    try {
     this.httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e) {}
   }
  } else if (window.createRequest) {
    try {
     this.httpRequest = window.createRequest();
    } catch (e) {}
  }
 } 

 com.oclib.javascript.util.Loader.prototype = new com.oclib.javascript.lang.Root();

 com.oclib.javascript.util.Loader.prototype.className = "Loader"; 
 com.oclib.javascript.util.Loader.prototype.classNamespace = "com.oclib.javascript.util.Loader"; 
 com.oclib.javascript.util.Loader.prototype.classCreated = "20061018"; 
 com.oclib.javascript.util.Loader.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.util.Loader.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/util/Loader.js"; 
 com.oclib.javascript.util.Loader.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/loader/"; 
 com.oclib.javascript.util.Loader.prototype.classVersion = "20070120"; 
 com.oclib.javascript.util.Loader.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/util/loader/20070120/Loader.js"; 
 com.oclib.javascript.util.Loader.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/loader/20070120/"; 

 com.oclib.javascript.util.Loader.prototype.asynchronous = true; 
  com.oclib.javascript.util.Loader.prototype.getAsynchronous = function () {return this.asynchronous;};
  com.oclib.javascript.util.Loader.prototype.setAsynchronous = function (asynchronous) {this.asynchronous = asynchronous; return 1;};
 com.oclib.javascript.util.Loader.prototype.content = ""; 
  com.oclib.javascript.util.Loader.prototype.getContent = function () {return this.content;};
  com.oclib.javascript.util.Loader.prototype.setContent = function (content) {this.content = content; return 1;};
 com.oclib.javascript.util.Loader.prototype.completionStatus; 
  com.oclib.javascript.util.Loader.prototype.getCompletionStatus = function () {return this.completionStatus;};
  com.oclib.javascript.util.Loader.prototype.setCompletionStatus = function (completionStatus) {this.completionStatus = completionStatus; return 1;};
 com.oclib.javascript.util.Loader.prototype.data = ""; 
  com.oclib.javascript.util.Loader.prototype.getData = function () {return this.data;};
  com.oclib.javascript.util.Loader.prototype.setData = function (data) {this.data = data; return 1;};
 com.oclib.javascript.util.Loader.prototype.doIfError = null; 
  com.oclib.javascript.util.Loader.prototype.getDoIfError = function () {return this.doIfError;};
  com.oclib.javascript.util.Loader.prototype.setDoIfError = function (doIfError) {this.doIfError = doIfError; return 1;};
 com.oclib.javascript.util.Loader.prototype.handler = null; 
  com.oclib.javascript.util.Loader.prototype.getDoIfSuccess = function () {return this.handler;};
  com.oclib.javascript.util.Loader.prototype.setDoIfSuccess = function (doIfSuccess) {this.handler = doIfSuccess; return 1;};
  com.oclib.javascript.util.Loader.prototype.getHandler = function () {return this.handler;};
  com.oclib.javascript.util.Loader.prototype.setHandler = function (handler) {this.handler = handler; return 1;};
 com.oclib.javascript.util.Loader.prototype.httpRequest; 
  com.oclib.javascript.util.Loader.prototype.getHttpRequest = function () {return this.httpRequest;};
  com.oclib.javascript.util.Loader.prototype.setHttpRequest = function (httpRequest) {this.httpRequest = httpRequest; return 1;};
 com.oclib.javascript.util.Loader.prototype.method = "GET"; 
  com.oclib.javascript.util.Loader.prototype.getMethod = function () {return this.method;};
  com.oclib.javascript.util.Loader.prototype.setMethod = function (method) {this.method = method; return 1;};
 com.oclib.javascript.util.Loader.prototype.overrideMimeType = "text/xml"; 
  com.oclib.javascript.util.Loader.prototype.getOverrideMimeType = function () {return this.overrideMimeType;};
  com.oclib.javascript.util.Loader.prototype.setOverrideMimeType = function (overrideMimeType) {this.overrideMimeType = overrideMimeType; return 1;};
 com.oclib.javascript.util.Loader.prototype.url = ""; 
  com.oclib.javascript.util.Loader.prototype.getUrl = function () {return this.url;};
  com.oclib.javascript.util.Loader.prototype.setUrl = function (url) {this.url = url; return 1;};
 com.oclib.javascript.util.Loader.prototype.xml = ""; 
  com.oclib.javascript.util.Loader.prototype.getXml = function () {return this.xml;};
  com.oclib.javascript.util.Loader.prototype.setXml = function (xml) {this.xml = xml; return 1;};

 com.oclib.javascript.util.Loader.prototype.ERROR_CANNOT_CREATE_XMLHTT_INSTANCE = ( com.oclib.javascript.util.Loader.ERROR_CANNOT_CREATE_XMLHTT_INSTANCE = -10);
 com.oclib.javascript.util.Loader.prototype.ERROR_CANNOT_CREATE_XMLHTT_INSTANCE_MESSAGE = ( com.oclib.javascript.util.Loader.ERROR_CANNOT_CREATE_XMLHTT_INSTANCE_MESSAGE = "Giving up :( Cannot create an XMLHTTP instance...");

 com.oclib.javascript.util.Loader.prototype.load = function() {
  if(this.mustTrace()) {this.getLog().println("Loader.load is running...");};
  if(this.mustDebug()) {this.getLog().println("Loader.load: "+"method="+this.getMethod()+"; url="+this.getUrl()+"; data="+this.getData()+";");}; 
  var the = this;
  if(this.asynchronous) {
   this.makeRequest(this.getMethod(), this.getUrl(), this.getData());
   return 1;
  } else {
   return this.makeRequest(this.getMethod(), this.getUrl(), this.getData());
  }; 
 }

 com.oclib.javascript.util.Loader.prototype.makeRequest = function(method, url, data) {
  if(this.mustTrace()) {this.getLog().println("Loader.makeRequest is running...");};
  method = method || this.getMethod() || "GET";
  url = url || this.getUrl() || ""; 
  data = data || this.getData() || ""; 
  if(this.mustDebug()) {this.getLog().println("Loader.makeRequest: "+"method="+method+"; url="+url+"; data="+data+";");};  
 
  if (!this.httpRequest) {
   this.completionStatus = this.ERROR_CANNOT_CREATE_XMLHTT_INSTANCE;
   if(this.mustDebug()) {this.getLog().println(this.ERROR_CANNOT_CREATE_XMLHTT_INSTANCE_MESSAGE);};
   return this.completionStatus;
  }
 
  var httpRequest = this.httpRequest;
  if(this.httpRequest.overrideMimeType) {
   this.httpRequest.overrideMimeType(this.getOverrideMimeType());
  };
  if(this.asynchronous) {
   var the = this;
   this.httpRequest.onreadystatechange = function () {
    if(the.mustDebug()) {the.getLog().println("Loader.makeRequest.onreadystatechange is running...");}; 
    the.response();
   };
  } else {
   if(this.mustTrace()) {this.getLog().println("Loader.makeRequest this.asynchronous is false...");};
  };
  if(method == "GET" || method == "get") {
   if(this.mustTrace()) {this.getLog().println("Loader.makeRequest method is GET...");};
   this.httpRequest.open(method, url, this.asynchronous);
   this.httpRequest.send(null);
  } else {
   this.httpRequest.open('POST', url, this.asynchronous);
   this.httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"); 
   this.httpRequest.send(data);
  };
  if(!this.asynchronous) {
   if(this.mustDebug()) {this.getLog().println("Loader.makeRequest: "+"this.httpRequest.responseText="+this.httpRequest.responseText+";");}; 
   return this.content = this.httpRequest.responseText;
  };
 }

 com.oclib.javascript.util.Loader.prototype.response = function() {
  if(this.mustTrace()) {this.getLog().println("Loader.response is running...");};
  if(this.mustDebug()) {this.getLog().println("Loader.response: "+"this.httpRequest.readyState="+this.httpRequest.readyState);};
  if (this.httpRequest.readyState == 4) {
   if (this.httpRequest.status && this.httpRequest.status == 200) {
    if(this.mustDebug()) {this.getLog().println("Loader.response: "+"this.httpRequest.status="+this.httpRequest.status);};
    if(this.mustDebug()) {this.getLog().println("Loader.response: "+"this.httpRequest.responseXML: ok");};  
   
    try {
     if(this.httpRequest.getAllResponseHeaders && this.httpRequest.getAllResponseHeaders()) {this.headers = this.httpRequest.getAllResponseHeaders();};     
    } catch (e) {
     if(this.mustDebug()) {this.getLog().println("Loader.response: "+"Postmaster.response this.httpRequest.getAllResponseHeaders() exception...");};
     this.doIfError();
     this.completionStatus = -20;
    }
    this.content = this.httpRequest.responseText;
    if(this.mustDebug()) {this.getLog().println("Loader.response: this.content="+this.content);};
    this.xml = this.httpRequest.responseXML; 
    if(this.mustDebug()) {this.getLog().println("Loader.response: this.xml="+this.xml);};
    if(this.mustDebug()) {this.getLog().println("Loader.response: this.handler="+this.handler);}; 
    this.handler(); 
   } else {
    if(this.mustDebug()) {this.getLog().println("Loader.response: "+"There was a problem with the request.");};
    this.doIfError();    
    this.completionStatus = -10;
   }
  } else {
   if(this.mustDebug()) {this.getLog().println("Loader.response: "+"Not yet...");};
  };
 };
};