/***********************************************************************************************************
 * com.oclib.javascript.util.events.20070110. Str
 * Location: http://www.oclib.com/library/com/oclib/javascript/util/Str.js
 * Version Location: http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/.js
 * Index Version Location: http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/index.html
 * © Open Class Library (http://www.oclib.com/)
***********************************************************************************************************/
if (typeof com == "undefined") {com = {};};
if (typeof com.oclib == "undefined") {com.oclib = {};};
if (typeof com.oclib.javascript == "undefined") {com.oclib.javascript = {};};
if (typeof com.oclib.javascript.util == "undefined") {com.oclib.javascript.util = {};};

if (typeof com.oclib.javascript.util.Str == "undefined") {
 com.oclib.javascript.util.Str = function() {} 
 com.oclib.javascript.util.Str.prototype = new  com.oclib.javascript.lang.Root();

 com.oclib.javascript.util.Str.prototype.className = "Str"; 
 com.oclib.javascript.util.Str.prototype.classNamespace = "com.oclib.javascript.util.Str"; 
 com.oclib.javascript.util.Str.prototype.classCreated = "20061018"; 
 com.oclib.javascript.util.Str.prototype.classCreator = "http://www.oclib.com/"; 
 com.oclib.javascript.util.Str.prototype.classLocation = "http://www.oclib.com/library/com/oclib/javascript/util/Str.js"; 
 com.oclib.javascript.util.Str.prototype.classIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/events/"; 
 com.oclib.javascript.util.Str.prototype.classVersion = "20070110"; 
 com.oclib.javascript.util.Str.prototype.classVersionLocation = "http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/Str.js"; 
 com.oclib.javascript.util.Str.prototype.classVersionIndexLocation = "http://www.oclib.com/library/com/oclib/javascript/util/events/20070110/"; 

 // Alias of  com.oclib.javascript.util.Str.prototype.trim
 com.oclib.javascript.util.Str.prototype.allTrim = function(string) {return this.trim(string);};

 com.oclib.javascript.util.Str.prototype.leftTrim = function(string) { 
  if(this.mustTrace()) {this.getLog().println("Str.leftTrim is runing...");};
  var i = 0;
  while(string.charAt(i) == " " || string.charAt(i) == "\t" || string.charAt(i) == "\n") {i++;};
  return string.substr(i, string.length); 
 };

 com.oclib.javascript.util.Str.prototype.normalize = function(string) { 
  if(this.mustTrace()) {this.getLog().println("Str.normalize is runing...");};
  var s = this.trim(string);
  var sr = "";
  var j = 0;
  sr = s.charAt(0);
  for(i = 1; i < s.length; i++) {if(!(s.charAt(i) == " " && sr.charAt(j) == " ")) {sr += s.charAt(i); j++;};};
  return sr;
 };

 // Function to pad a string.. head, tail & punctuation
 com.oclib.javascript.util.Str.prototype.padString = function(string) {
  if(this.mustTrace()) {this.getLog().println("Str.padString is runing...");};
  var result = " " + string + " ";
  for(var i = 0; i < this.punctuation.length; i++) {
   result = this.replaceStr(result, this.punctuation[i], " " + this.punctuation[i] + " ", 0);
  }
  return result;
 };

 // Funtion to replaces all occurances of substring substr1 with substr2 within strng
 // if type == 0 straight string replacement
 // if type == 1 assumes padded strings and replaces whole words only
 // if type == 2 non case sensitive assumes padded strings to compare whole word only
 // if type == 3 non case sensitive straight string replacement
 com.oclib.javascript.util.Str.prototype.replaceStr = function(string, subString1, subString2, type) {
  var RPstrg = "";
  var pntr = -1; 
  var result = string;
  if(type == 0) { 
   if(string.indexOf(substr1) >= 0) {pntr = string.indexOf(subString1);};
  } else if(type == 1) {
   if(string.indexOf(" "+ subString1 +" ") >= 0) {pntr = string.indexOf(" " + subString1 + " ") + 1;};	
  } else if(type == 2) {
   bstrng = string.toUpperCase();
   bsubstr1 = subString1.toUpperCase();
   if(bstrng.indexOf(" "+ bsubstr1 +" ")>= 0) {pntr = bstrng.indexOf(" " + bsubstr1 + " ") + 1;};	
  } else {
   bstrng = string.toUpperCase();
   bsubstr1 = subString1.toUpperCase();
   if(bstrng.indexOf(bsubstr1) >= 0) {pntr = bstrng.indexOf(bsubstr1);};	
  };
  if(pntr >= 0) {
   RPstrg += string.substring(0, pntr) + subString2;
   result = string.substring(pntr + subString1.length, string.length);
   if(result.length > 0) {this.replaceStr(result, subString1, subString2, type);};
  };
  result =  RPstrg + result;
  RPstrg = "";
  return result;
 };

 com.oclib.javascript.util.Str.prototype.rightTrim = function(string) { 
  if(this.mustTrace()) {this.getLog().println("Str.rightTrim is runing...");};
  var i = string.length;
  while(string.charAt(i) == " " || string.charAt(i) == "\t" || string.charAt(i) == "\n") {i--;};
  return string.substr(0, i); 
 };

 com.oclib.javascript.util.Str.prototype.trim = function(string) { 
  if(this.mustTrace()) {this.getLog().println("Str.trim is runing...");};
  return this.leftTrim(this.rightTrim(string));
 };

 // Alias of  com.oclib.javascript.util.Str.prototype.trim
 com.oclib.javascript.util.Str.prototype.trimAll = function(string) {return this.trim(string);};

 // Function to strip padding 
 function unpadString(string) {
  var result = string;
  result = this.normalize(result); 		// compress spaces 
  for(var i = 0; i < this.punctuation.length; i++) {
   result = this.replaceStr(aString, " " + this.punctuation[i], this.punctuation[i], 0); 
  };
  return result;
 };
};
