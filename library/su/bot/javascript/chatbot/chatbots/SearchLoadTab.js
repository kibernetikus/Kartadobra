/***********************************************************************************************************
 * su.bot.javascript.chatbot.chatbots.SearchLoadTab
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/SearchLoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchloadtab/builds/20070811/SearchLoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchloadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.chatbots == "undefined") {su.bot.javascript.chatbot.chatbots = {};};

if (typeof su.bot.javascript.chatbot.chatbots.SearchLoadTab == "undefined") {
 su.bot.javascript.chatbot.chatbots.SearchLoadTab = function() {}; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype = new  su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.className = "SearchLoadTab"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classNamespace = "su.bot.javascript.chatbot.chatbots.SearchLoadTab"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classCreated = "20070223"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/SearchLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchloadtab/index.html"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchloadtab/builds/20070811/SearchLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchloadtab/builds/20070811/"; 
  
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.table = new Array();
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.getTable = function () {return this.table;};
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.setTable = function (table) {this.table = table;};
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.exclusionTable = new Array();
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.getExclusionTable = function () {return this.exclusionTable;};
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.setExclusionTable = function (exclusionTable) {this.exclusionTable = exclusionTable;};
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.indexTable = new Array();
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.getIndexTable = function () {return this.indexTable;};
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.setIndexTable = function (indexTable) {this.indexTable = indexTable;};
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.tableLocation;
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.getTableLocation = function () {return this.tableLocation;};
  su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.setTableLocation = function (tableLocation) {this.tableLocation = tableLocation;};
 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchLoadTab.getFirtstMessage is runing...");};
  return this.getResponse("");
 }; 
 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchLoadTab.getResponse is runing...");}; 
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, ""); 
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setRelevance(0.1);
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setText("Панда недавно в мире людей, панда не знать");
  if(this.mustDebug()) {this.getLog().println("SearchLoadTab.getResponse this.indexTable.length="+this.indexTable.length);};
  for(var i = 0; i < this.indexTable.length; i++) {
   if(message.indexOf(this.indexTable[i]) > -1) {
    var haveExclusion = false;
	for(var j = 0; j < this.exclusionTable[this.indexTable[i]].length; j++) {
     if(message.indexOf(this.exclusionTable[this.indexTable[i]][j]) > -1) {
      haveExclusion = true;
	  j = this.exclusionTable[this.indexTable[i]].length;
     };
    };
	if(!haveExclusion) {
     var r = Math.floor(Math.random()*(this.table[this.indexTable[i]].length)); 
     var findedMessage = this.table[this.indexTable[i]][r];
     r = Math.random();
     if(r < findedMessage.getRelevance()) {
      findedMessage.setRelevance(this.getRelevance());
      return findedMessage;
     } else {
      return chatBotMessage;
     };
	};
   };
  };
  return chatBotMessage;
 };  
  
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.init = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchLoadTab.init is runing...");};
  this.loadTable();
 }; 
 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.loadTable = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchLoadTab.loadTable is runing...");};
  var loader = new com.oclib.javascript.util.Loader();
  loader.setDebugging(this.getDebugging()); loader.setLog(this.getLog()); loader.setTracing(this.getTracing());
  var the = this;
  loader.setDoIfSuccess(function() {the.loadParseTable(loader);});
  loader.setDoIfError(function() {});
  loader.makeRequest("GET", this.getTableLocation(), "");
 };
 
 su.bot.javascript.chatbot.chatbots.SearchLoadTab.prototype.loadParseTable = function(loader) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchLoadTab.loadParseTable is runing...");};
  var responseXML = loader.xml;  
  var i = 0;
  this.table = new Array();
  this.indexTable = new Array();
  while(responseXML.getElementsByTagName("m").item(i)) {
   var e;
   if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e")
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0)
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0).firstChild) {
    e = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0).firstChild.data;
   };
   var l;
   if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l")
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l").item(0)
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l").item(0).firstChild) {
    l = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l").item(0).firstChild.data;
   };
   var r;
   if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("r")
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("r").item(0)
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("r").item(0).firstChild) {
    r = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("r").item(0).firstChild.data;
   } else {
    r = this.getRelevance();
   };
   var msArray = new Array();
   var j = 0;
   while(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("ms").item(j)) {
    if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("ms").item(j).firstChild) {
     msArray[j] = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("ms").item(j).firstChild.data;
    };
	j++;
   };
   var tArray = new Array();
   j = 0;
   while(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t").item(j)) {
    if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t").item(j).firstChild) {
     var message = new su.bot.javascript.chatbot.messages.ChatBotMessage();
     if(e) {message.setEmotion(e);};
     if(l) {message.setLanguage(l);};
     if(r) {message.setRelevance(r);};
     message.setResponder(this.getClassName());
     message.setText(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t").item(j).firstChild.data);
	 tArray[j] = message;
    };
	j++;
   };
   var exArray = new Array();
   j = 0;
   while(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("ex").item(j)) {
    if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("ex").item(j).firstChild) {
	 exArray[j] = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("ex").item(j).firstChild.data;
    };
	j++;
   };
   for(var k = 0; k < msArray.length; k++) {
    if(!this.table[msArray[k]]) {
     this.table[msArray[k]] = tArray;
     this.exclusionTable[msArray[k]] = exArray;
     this.indexTable[this.indexTable.length] = msArray[k];
	};
   };
   i++;
  };
 };
};