/***********************************************************************************************************
 * com.oclib.javascript.util.loader.20070110.ClassLoader
 * Location: http://www.oclib.com/library/com/oclib/javascript/lang/Loader.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/lang/classLoader/20070110/ClassLoader.js
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/lang/classLoader/20070110/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.lang == "undefined") {com.oclib.javascript.lang = {};};

if (typeof com.oclib.javascript.lang.ClassLoader == "undefined") {
 com.oclib.javascript.lang.ClassLoader = function() {};

 com.oclib.javascript.lang.ClassLoader.prototype = new com.oclib.javascript.util.Loader();

 com.oclib.javascript.lang.ClassLoader.prototype.className = "ClassLoader"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classNamespace = "com.oclib.javascript.lang.ClassLoader"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classCreated = "20070110"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/lang/ClassLoader.js"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/lang/classLoader/"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classVersion = "20070110"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/lang/classLoader/20070110/ClassLoader.js"; 
 com.oclib.javascript.lang.ClassLoader.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/lang/classLoader/20070110/"; 

 com.oclib.javascript.lang.ClassLoader.prototype.base = "/library/"; 
  com.oclib.javascript.lang.ClassLoader.prototype.getBase = function () {return this.base;};
  com.oclib.javascript.lang.ClassLoader.prototype.setBase = function (base) {this.base = base; return 1;};
 
 com.oclib.javascript.lang.ClassLoader.prototype.require = function(className, location) {
  if(this.mustTrace()) {this.getLog().println("ClassLoader.require is running...");};
  if(this.mustDebug()) {this.getLog().println("ClassLoader.require: "+"className="+className+";");};
  var base;
  var classPath;
  if(location) {
   classPath = location;
  } else {
   var r = eval("typeof "+className+" != \"undefined\"")
   if(r) {
    if(this.mustDebug()) {this.getLog().println("ClassLoader.require: "+"r="+r+";");};
    return 0.1;
   };
   base = base || this.base;
   classPath = base+className.replace(/\./g, "/")+".js";
  };
  if(this.mustDebug()) {this.getLog().println("ClassLoader.require: "+"classPath="+classPath+";");};
  this.setAsynchronous(false);
  this.setUrl(classPath);
  this.setOverrideMimeType("text/javascript");
  var c = this.load();
  // if(this.mustDebug()) {this.getLog().println("ClassLoader.require: "+"c="+c+";");};
  if (window.execScript) {
   window.execScript(c, 'javascript');
  } else {
   window.eval(c);
  };
  return 1;
 };
}