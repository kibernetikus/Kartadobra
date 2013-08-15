/***********************************************************************************************************
 * com.oclib.javascript.util.profiler.20070512.Profiler
 * Location: http://www.oclib.com/library/com/oclib/javascript/util/Profiler.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/util/profiler/builds/20070512/index.html
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/util/profiler/builds/20070512/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.util == "undefined") {com.oclib.javascript.util = {};};

if (typeof com.oclib.javascript.util.Profiler == "undefined") {
 com.oclib.javascript.util.Profiler = function() {};
 com.oclib.javascript.util.Profiler.prototype = new com.oclib.javascript.lang.Root();

 com.oclib.javascript.util.Profiler.prototype.classCreated = "20070512"; 
 com.oclib.javascript.util.Profiler.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.util.Profiler.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/profiler/"; 
 com.oclib.javascript.util.Profiler.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/util/Profiler.js"; 
 com.oclib.javascript.util.Profiler.prototype.className = "Profiler"; 
 com.oclib.javascript.util.Profiler.prototype.classNamespace = "com.oclib.javascript.util.Profiler"; 
 com.oclib.javascript.util.Profiler.prototype.classVersion = "20070512"; 
 com.oclib.javascript.util.Profiler.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/profiler/builds/20070512/"; 
 com.oclib.javascript.util.Profiler.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/util/profiler/builds/20070512/Profiler.js";  

 /**
  * *Array typeof Array of Array of records for * type.
  * Record (record = *Array[i]) format:
  * record["name"] = (string) name of record (className || className + "." + methodName || className + "." + methodName + "." pointName)
  * record["className"] = (string) name of class for record 
  * record["methodName"] = (string) name of method for record 
  * record["pointName"] = (string) name of point for record 
  * record["call"] = (integer) count of start call the record
  * record["callStack"] = (integer) count of start call the record
  * record["startTime"] = (private property) for current time for start
  * record["fullTime"] = for sum time from start to stop
  */
 com.oclib.javascript.util.Profiler.prototype.classArray = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getClassArray = function () {return this.classArray;};
  com.oclib.javascript.util.Profiler.prototype.setClassArray = function (classArray) {this.classArray = classArray;};
 /**
  * classArrayIndex is an index for classArray classArray[name] = index of record of classArray
  */
 com.oclib.javascript.util.Profiler.prototype.classArrayNameIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getClassArrayNameIndex = function () {return this.classArrayNameIndex;};
  com.oclib.javascript.util.Profiler.prototype.setClassArrayNameIndex = function (classArrayNameIndex) {this.classArrayNameIndex = classArrayNameIndex;};
 /**
  * classArrayCallIndex is an index for classArray classArrayCallIndex[number] = index of record of classArray sorded by call desc
  */
 com.oclib.javascript.util.Profiler.prototype.classArrayCallIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getClassArrayCallIndex = function () {return this.classArrayCallIndex;};
  com.oclib.javascript.util.Profiler.prototype.setClassArrayCallIndex = function (classArrayCallIndex) {this.classArrayCallIndex = classArrayCallIndex;};
 com.oclib.javascript.util.Profiler.prototype.classArrayCallTimeIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getClassArrayCallTimeIndex = function () {return this.classArrayCallTimeIndex;};
  com.oclib.javascript.util.Profiler.prototype.setClassArrayCallTimeIndex = function (classArrayCallTimeIndex) {this.classArrayCallTimeIndex = classArrayCallTimeIndex;};
 com.oclib.javascript.util.Profiler.prototype.classArrayFullTimeIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getClassArrayFullTimeIndex = function () {return this.classArrayFullTimeIndex;};
  com.oclib.javascript.util.Profiler.prototype.setClassArrayFullTimeIndex = function (classArrayFullTimeIndex) {this.classArrayFullTimeIndex = classArrayFullTimeIndex;};
 //
 com.oclib.javascript.util.Profiler.prototype.methodArray = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getMethodArray = function () {return this.methodArray;};
  com.oclib.javascript.util.Profiler.prototype.setMethodArray = function (methodArray) {this.methodArray = methodArray;};
 com.oclib.javascript.util.Profiler.prototype.methodArrayNameIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getMethodArrayNameIndex = function () {return this.methodArrayNameIndex;};
  com.oclib.javascript.util.Profiler.prototype.setMethodArrayNameIndex = function (methodArrayNameIndex) {this.methodArrayNameIndex = methodArrayNameIndex;};
 com.oclib.javascript.util.Profiler.prototype.methodArrayCallIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getMethodArrayCallIndex = function () {return this.methodArrayCallIndex;};
  com.oclib.javascript.util.Profiler.prototype.setMethodArrayCallIndex = function (methodArrayCallIndex) {this.methodArrayCallIndex = methodArrayCallIndex;};
 com.oclib.javascript.util.Profiler.prototype.methodArrayCallTimeIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getMethodArrayCallTimeIndex = function () {return this.methodArrayCallTimeIndex;};
  com.oclib.javascript.util.Profiler.prototype.setMethodArrayCallTimeIndex = function (methodArrayCallTimeIndex) {this.methodArrayCallTimeIndex = methodArrayCallTimeIndex;};
 com.oclib.javascript.util.Profiler.prototype.methodArrayFullTimeIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getMethodArrayFullTimeIndex = function () {return this.methodArrayFullTimeIndex;};
  com.oclib.javascript.util.Profiler.prototype.setMethodArrayFullTimeIndex = function (methodArrayFullTimeIndex) {this.methodArrayFullTimeIndex = methodArrayFullTimeIndex;};
 //
 com.oclib.javascript.util.Profiler.prototype.pointArray = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getPointArray = function () {return this.pointArray;};
  com.oclib.javascript.util.Profiler.prototype.setPointArray = function (pointArray) {this.pointArray = pointArray;};
 com.oclib.javascript.util.Profiler.prototype.pointArrayNameIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getPointArrayNameIndex = function () {return this.pointArrayNameIndex;};
  com.oclib.javascript.util.Profiler.prototype.setPointArrayNameIndex = function (pointArrayNameIndex) {this.pointArrayNameIndex = pointArrayNameIndex;};
 com.oclib.javascript.util.Profiler.prototype.pointArrayCallIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getPointArrayCallIndex = function () {return this.pointArrayCallIndex;};
  com.oclib.javascript.util.Profiler.prototype.setPointArrayCallIndex = function (pointArrayCallIndex) {this.pointArrayCallIndex = pointArrayCallIndex;};
 com.oclib.javascript.util.Profiler.prototype.pointArrayCallTimeIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getPointArrayCallTimeIndex = function () {return this.pointArrayCallTimeIndex;};
  com.oclib.javascript.util.Profiler.prototype.setPointArrayCallTimeIndex = function (pointArrayCallTimeIndex) {this.pointArrayCallTimeIndex = pointArrayCallTimeIndex;};
 com.oclib.javascript.util.Profiler.prototype.pointArrayFullTimeIndex = new Array(); 
  com.oclib.javascript.util.Profiler.prototype.getPointArrayFullTimeIndex = function () {return this.pointArrayFullTimeIndex;};
  com.oclib.javascript.util.Profiler.prototype.setPointArrayFullTimeIndex = function (pointArrayFullTimeIndex) {this.pointArrayFullTimeIndex = pointArrayFullTimeIndex;};

 com.oclib.javascript.util.Profiler.prototype.createReport = function() {
  if(this.mustTrace()) {this.getLog().println("Profiler.createReport is running...");};
  this.setClassArrayCallIndex(new Array()); this.setClassArrayCallTimeIndex(new Array()); this.setClassArrayFullTimeIndex(new Array());
  for(var i = 0; i < this.getClassArray().length; i++) {this.getClassArrayCallIndex()[i] = i; this.getClassArrayCallTimeIndex()[i] = i; this.getClassArrayFullTimeIndex()[i] = i;};
  for(var i = 0; i < this.getClassArray().length; i++) {  
   for(var j = i+1; j < this.getClassArray().length; j++) {
    if(this.getClassArray()[this.getClassArrayCallIndex()[i]]["call"] < this.getClassArray()[this.getClassArrayCallIndex()[j]]["call"]) {
     var n = this.getClassArrayCallIndex()[i];
     this.getClassArrayCallIndex()[i] = this.getClassArrayCallIndex()[j];
     this.getClassArrayCallIndex()[j] = n;
	};
	var ci = this.getClassArrayCallTimeIndex()[i]
	var cti = this.getClassArray()[ci]["fullTime"]/this.getClassArray()[ci]["call"];
	var cj = this.getClassArrayCallTimeIndex()[j]
	var ctj = this.getClassArray()[cj]["fullTime"]/this.getClassArray()[cj]["call"];
    if(cti < ctj) {
     this.getClassArrayCallTimeIndex()[i] = cj;
     this.getClassArrayCallTimeIndex()[j] = ci;
	};
    if(this.getClassArray()[this.getClassArrayFullTimeIndex()[i]]["fullTime"] < this.getClassArray()[this.getClassArrayFullTimeIndex()[j]]["fullTime"]) {
     var n = this.getClassArrayFullTimeIndex()[i];
     this.getClassArrayFullTimeIndex()[i] = this.getClassArrayFullTimeIndex()[j];
     this.getClassArrayFullTimeIndex()[j] = n;
	};
   };
  };
  this.setMethodArrayCallIndex(new Array()); this.setMethodArrayCallTimeIndex(new Array()); this.setMethodArrayFullTimeIndex(new Array());
  for(var i = 0; i < this.getMethodArray().length; i++) {this.getMethodArrayCallIndex()[i] = i; this.getMethodArrayCallTimeIndex()[i] = i; this.getMethodArrayFullTimeIndex()[i] = i;};
  for(var i = 0; i < this.getMethodArray().length; i++) {  
   for(var j = i+1; j < this.getMethodArray().length; j++) {
    if(this.getMethodArray()[this.getMethodArrayCallIndex()[i]]["call"] < this.getMethodArray()[this.getMethodArrayCallIndex()[j]]["call"]) {
     var n = this.getMethodArrayCallIndex()[i];
     this.getMethodArrayCallIndex()[i] = this.getMethodArrayCallIndex()[j];
     this.getMethodArrayCallIndex()[j] = n;
	};
	var ci = this.getMethodArrayCallTimeIndex()[i]
	var cti = this.getMethodArray()[ci]["fullTime"]/this.getMethodArray()[ci]["call"];
	var cj = this.getMethodArrayCallTimeIndex()[j]
	var ctj = this.getMethodArray()[cj]["fullTime"]/this.getMethodArray()[cj]["call"];
    if(cti < ctj) {
     this.getMethodArrayCallTimeIndex()[i] = cj;
     this.getMethodArrayCallTimeIndex()[j] = ci;
	};
    if(this.getMethodArray()[this.getMethodArrayFullTimeIndex()[i]]["fullTime"] < this.getMethodArray()[this.getMethodArrayFullTimeIndex()[j]]["fullTime"]) {
     var n = this.getMethodArrayFullTimeIndex()[i];
     this.getMethodArrayFullTimeIndex()[i] = this.getMethodArrayFullTimeIndex()[j];
     this.getMethodArrayFullTimeIndex()[j] = n;
	};
   };
  };
  this.setPointArrayCallIndex(new Array()); this.setPointArrayCallTimeIndex(new Array()); this.setPointArrayFullTimeIndex(new Array());
  for(var i = 0; i < this.getPointArray().length; i++) {this.getPointArrayCallIndex()[i] = i; this.getPointArrayCallTimeIndex()[i] = i; this.getPointArrayFullTimeIndex()[i] = i;};
  for(var i = 0; i < this.getPointArray().length; i++) {  
   for(var j = i+1; j < this.getPointArray().length; j++) {
    if(this.getPointArray()[this.getPointArrayCallIndex()[i]]["call"] < this.getPointArray()[this.getPointArrayCallIndex()[j]]["call"]) {
     var n = this.getPointArrayCallIndex()[i];
     this.getPointArrayCallIndex()[i] = this.getPointArrayCallIndex()[j];
     this.getPointArrayCallIndex()[j] = n;
	};
	var ci = this.getPointArrayCallTimeIndex()[i]
	var cti = this.getPointArray()[ci]["fullTime"]/this.getPointArray()[ci]["call"];
	var cj = this.getPointArrayCallTimeIndex()[j]
	var ctj = this.getPointArray()[cj]["fullTime"]/this.getPointArray()[cj]["call"];
    if(cti < ctj) {
     this.getPointArrayCallTimeIndex()[i] = cj;
     this.getPointArrayCallTimeIndex()[j] = ci;
	};
    if(this.getPointArray()[this.getPointArrayFullTimeIndex()[i]]["fullTime"] < this.getPointArray()[this.getPointArrayFullTimeIndex()[j]]["fullTime"]) {
     var n = this.getPointArrayFullTimeIndex()[i];
     this.getPointArrayFullTimeIndex()[i] = this.getPointArrayFullTimeIndex()[j];
     this.getPointArrayFullTimeIndex()[j] = n;
	};
   };
  };
 };

 com.oclib.javascript.util.Profiler.prototype.end = function(className, methodName, pointName) {
  if(this.mustTrace()) {this.getLog().println("Profiler.end is running for className="+className+"; methodName="+methodName+"; pointName="+pointName);};
  className = (typeof className == "undefined") ? "" : className;
  methodName = (typeof methodName == "undefined") ? "" : methodName;
  pointName = (typeof pointName == "undefined") ? "" : pointName;
  var ci = this.getClassArrayNameIndex()[className];
  var m = className + "." + methodName;
  var mi = this.getMethodArrayNameIndex()[m]; 
  var p = m + "." + pointName;
  var pi = this.getPointArrayNameIndex()[p];
  if(((className != "") && (typeof ci == "undefined" || this.getClassArray()[ci]["startTime"] == 0))
     || ((methodName != "") && (typeof mi == "undefined"  || this.getMethodArray()[mi]["startTime"] == 0))
	 || ((pointName != "") && (typeof pi == "undefined" || this.getPointArray()[pi]["startTime"] == 0))) {
   this.start(className, methodName, pointName);
   ci = this.getClassArrayNameIndex()[className];
   mi = this.getMethodArrayNameIndex()[m]; 
   pi = this.getPointArrayNameIndex()[p];
  };
  if(className != "") {
   var n = this.getClassArray()[ci]["callStack"].pop();
   //if(n != p) {this.getClassArray()[ci]["callStack"].push(n);};
   if(this.getClassArray()[ci]["callStack"].length == 0) {
    this.getClassArray()[ci]["fullTime"] += (new Date()).getTime() - this.getClassArray()[ci]["startTime"]; 
    this.getClassArray()[ci]["startTime"] = 0;
   };
  };
  if(methodName != "") {
   var n = this.getMethodArray()[mi]["callStack"].pop();
   //if(n != p) {this.getMethodArray()[mi]["callStack"].push(n);};
   if(this.getMethodArray()[mi]["callStack"].length == 0) {
    this.getMethodArray()[mi]["fullTime"] += (new Date()).getTime() - this.getMethodArray()[mi]["startTime"];
    this.getMethodArray()[mi]["startTime"] = 0;
   };
  };
  if(pointName != "") {
   var n = this.getPointArray()[pi]["callStack"].pop();
   //if(n == p) {this.getPointArray()[pi]["callStack"].push(n);};
   if(this.getPointArray()[pi]["callStack"].length == 0) {
    this.getPointArray()[pi]["fullTime"] += (new Date()).getTime() - this.getPointArray()[pi]["startTime"];
    this.getPointArray()[pi]["startTime"] = 0;
   };
  };
 };

 com.oclib.javascript.util.Profiler.prototype.getReportAsHtml = function(a) {
  if(this.mustTrace()) {this.getLog().println("Profiler.getReportAsHthml is running...");};
  var r = "<br />Call:<br />";
  r += "____________________________________<br />";
  for(var i = 0; i < this.getClassArrayCallIndex().length; i++) {
   r += this.getClassArray()[this.getClassArrayCallIndex()[i]]["name"] + " - " + this.getClassArray()[this.getClassArrayCallIndex()[i]]["call"] + "<br />";
  };
  r += "<br />";
  for(var i = 0; i < this.getMethodArrayCallIndex().length; i++) {
   r += this.getMethodArray()[this.getMethodArrayCallIndex()[i]]["name"] + " - " + this.getMethodArray()[this.getMethodArrayCallIndex()[i]]["call"] + "<br />";
  };
  r += "<br />";
  for(var i = 0; i < this.getPointArrayCallIndex().length; i++) {
   r += this.getPointArray()[this.getPointArrayCallIndex()[i]]["name"] + " - " + this.getPointArray()[this.getPointArrayCallIndex()[i]]["call"] + "<br />";
  };
  r += "____________________________________<br />";
  r += "<br />";
  r += "<br />Full time:<br />";
  r += "____________________________________<br />";
  for(var i = 0; i < this.getClassArrayFullTimeIndex().length; i++) {
   r += this.getClassArray()[this.getClassArrayFullTimeIndex()[i]]["name"] + " - " + this.getClassArray()[this.getClassArrayFullTimeIndex()[i]]["fullTime"] + "ms<br />";
  };
  r += "<br />";
  for(var i = 0; i < this.getMethodArrayFullTimeIndex().length; i++) {
   r += this.getMethodArray()[this.getMethodArrayFullTimeIndex()[i]]["name"] + " - " + this.getMethodArray()[this.getMethodArrayFullTimeIndex()[i]]["fullTime"] + "ms<br />";
  };
  r += "<br />";
  for(var i = 0; i < this.getPointArrayFullTimeIndex().length; i++) {
   r += this.getPointArray()[this.getPointArrayFullTimeIndex()[i]]["name"] + " - " + this.getPointArray()[this.getPointArrayFullTimeIndex()[i]]["fullTime"] + "ms<br />";
  };
  r += "<br />";
  r += "____________________________________<br />";
  r += "<br />";
  r += "<br />Call time:<br />";
  r += "____________________________________<br />";
  for(var i = 0; i < this.getClassArrayCallTimeIndex().length; i++) {
   r += this.getClassArray()[this.getClassArrayCallTimeIndex()[i]]["name"] + " - " + this.getClassArray()[this.getClassArrayCallTimeIndex()[i]]["fullTime"]/this.getClassArray()[this.getClassArrayCallTimeIndex()[i]]["call"] + "ms<br />";
  };
  r += "<br />";
  for(var i = 0; i < this.getMethodArrayCallTimeIndex().length; i++) {
   r += this.getMethodArray()[this.getMethodArrayCallTimeIndex()[i]]["name"] + " - " + this.getMethodArray()[this.getMethodArrayCallTimeIndex()[i]]["fullTime"]/this.getMethodArray()[this.getMethodArrayCallTimeIndex()[i]]["call"] + "ms<br />";
  };
  r += "<br />";
  for(var i = 0; i < this.getPointArrayCallTimeIndex().length; i++) {
   r += this.getPointArray()[this.getPointArrayCallTimeIndex()[i]]["name"] + " - " + this.getPointArray()[this.getPointArrayCallTimeIndex()[i]]["fullTime"]/this.getPointArray()[this.getPointArrayCallTimeIndex()[i]]["call"] + "ms<br />";
  };
  r += "____________________________________<br />";
  r += "<br />";
  return r;
 };

 com.oclib.javascript.util.Profiler.prototype.init = function() {
  if(this.mustTrace()) {this.getLog().println("Profiler.init is running...");};
  this.classArray = new Array(); 
  this.classArrayNameIndex = new Array(); 
  this.classArrayCallIndex = new Array(); 
  this.classArrayFullTimeIndex = new Array(); 
  this.methodArray = new Array(); 
  this.methodArrayNameIndex = new Array(); 
  this.methodArrayCallIndex = new Array(); 
  this.methodArrayFullTimeIndex = new Array(); 
  this.pointArray = new Array(); 
  this.pointArrayNameIndex = new Array(); 
  this.pointArrayCallIndex = new Array(); 
  this.pointArrayFullTimeIndex = new Array(); 
 };

 com.oclib.javascript.util.Profiler.prototype.register = function(className, methodName, pointName) {
  if(this.mustTrace()) {this.getLog().println("Profiler.end is register for className="+className+"; methodName="+methodName+"; pointName="+pointName);};
  this.start(className, methodName, pointName);
  this.end(className, methodName, pointName);
 };

 com.oclib.javascript.util.Profiler.prototype.start = function(className, methodName, pointName) {
  if(this.mustTrace()) {this.getLog().println("Profiler.start is running for className="+className+"; methodName="+methodName+"; pointName="+pointName);}; 
  className = (typeof className == "undefined") ? "" : className;
  methodName = (typeof methodName == "undefined") ? "" : methodName;
  pointName = (typeof pointName == "undefined") ? "" : pointName;
  var m = className + "." + methodName;
  var p = m + "." + pointName; 
  if(className != "") {
   if(typeof this.getClassArrayNameIndex()[className] == "undefined") {
    var l = this.getClassArray().length; 
    this.getClassArrayNameIndex()[className] = l;
    var r = new Array();
    r["name"] = className;
    r["className"] = className;
    r["methodName"] = "";
    r["pointName"] = "";
    r["call"] = 1;
    r["callStack"] = new Array(); r["callStack"].push(p);
    r["startTime"] = (new Date()).getTime();
    r["fullTime"] = 0;
    this.getClassArray()[l] = r; 
   } else {
    var l = this.getClassArrayNameIndex()[className]; 
	this.getClassArray()[l]["callStack"].push(p);
    if(this.getClassArray()[l]["startTime"] == 0) { 
     this.getClassArray()[l]["call"] = this.getClassArray()[l]["call"] + 1; 
	 this.getClassArray()[l]["startTime"] = (new Date()).getTime();
	};
	/*
 	var n = this.getClassArray()[l]["callStack"].pop();
	if(n != p) {
	 this.getClassArray()[l]["callStack"].push(n); 
	 this.getClassArray()[l]["callStack"].push(p);
	} else {
	 this.getClassArray()[l]["callStack"].push(n); 
	};*/
   };
  };
  if(methodName != "") {
   if(typeof this.getMethodArrayNameIndex()[m] == "undefined") {
    var l = this.getMethodArray().length; 
    this.getMethodArrayNameIndex()[m] = l;
    var r = new Array();
    r["name"] = m;
    r["className"] = className;
    r["methodName"] = methodName;
    r["pointName"] = "";
    r["call"] = 1;
    r["callStack"] = new Array(); r["callStack"].push(p);
    r["startTime"] = (new Date()).getTime();
    r["fullTime"] = 0;
    this.getMethodArray()[l] = r; 
   } else {
    var l = this.getMethodArrayNameIndex()[m]; 
	this.getMethodArray()[l]["callStack"].push(p);
	if(this.getMethodArray()[l]["startTime"] == 0) {
     this.getMethodArray()[l]["call"] = this.getMethodArray()[l]["call"]+ 1; 
     this.getMethodArray()[l]["startTime"] = (new Date()).getTime();
	};
	/*
	var n = this.getMethodArray()[l]["callStack"].pop();
	if(n != p) {
     this.getMethodArray()[l]["callStack"].push(n);
	 this.getMethodArray()[l]["callStack"].push(p);
	} else {
     this.getMethodArray()[l]["callStack"].push(n);
	};*/
   };
  }; 
  if(pointName != "") {
   if(typeof this.getPointArrayNameIndex()[p] == "undefined") {
    var l = this.getPointArray().length; 
    this.getPointArrayNameIndex()[p] = l;
    var r = new Array();
    r["name"] = p;
    r["className"] = className;
    r["methodName"] = methodName;
    r["pointName"] = pointName;
    r["call"] = 1;
    r["callStack"] = new Array(); r["callStack"].push(p);
    r["startTime"] = (new Date()).getTime();
    r["fullTime"] = 0;
    this.getPointArray()[l] = r; 
   } else {
    var l = this.getPointArrayNameIndex()[p];
    this.getPointArray()[l]["callStack"].push(p); 
	if(this.getPointArray()[l]["startTime"] == 0) {
     this.getPointArray()[l]["call"] = this.getPointArray()[l]["call"]+1;  
     this.getPointArray()[l]["startTime"] = (new Date()).getTime();
	};
	/*
    var n = this.getPointArray()[l]["callStack"].pop();
    if(n != p) {
     this.getPointArray()[l]["callStack"].push(n);
     this.getPointArray()[l]["callStack"].push(p); 
    } else { 
     this.getPointArray()[l]["callStack"].push(n);
    };*/
   };
  };
 };
};




