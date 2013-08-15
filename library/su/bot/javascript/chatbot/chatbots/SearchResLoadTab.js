/***********************************************************************************************************
 * su.bot.javascript.chatbot.chatbots.SearchResLoadTab
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/SearchResLoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchresloadtab/builds/20070811/SearchResLoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchresloadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.chatbots == "undefined") {su.bot.javascript.chatbot.chatbots = {};};

if (typeof su.bot.javascript.chatbot.chatbots.SearchResLoadTab == "undefined") {
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab = function() {}; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype = new  su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.className = "SearchResLoadTab"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classNamespace = "su.bot.javascript.chatbot.chatbots.SearchResLoadTab"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classCreated = "20070223"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/SearchResLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchresloadtab/index.html"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchresloadtab/builds/20070811/SearchResLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/searchresloadtab/builds/20070811/"; 
  
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.table = new Array();
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.getTable = function () {return this.table;};
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.setTable = function (table) {this.table = table;};
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.exclusionTable = new Array();
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.getExclusionTable = function () {return this.exclusionTable;};
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.setExclusionTable = function (exclusionTable) {this.exclusionTable = exclusionTable;};
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.indexTable = new Array();
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.getIndexTable = function () {return this.indexTable;};
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.setIndexTable = function (indexTable) {this.indexTable = indexTable;};
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.tableLocation;
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.getTableLocation = function () {return this.tableLocation;};
  su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.setTableLocation = function (tableLocation) {this.tableLocation = tableLocation;};
 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchResLoadTab.getFirtstMessage is runing...");};
  return this.getResponse("");
 }; 
 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchResLoadTab.getResponse is runing...");}; 
  if(!this.getBotManager().getLastBotMessage()) {return new su.bot.javascript.chatbot.messages.ChatBotMessage();};
  message = this.getBotManager().getLastBotMessage().getText();
  if(this.mustDebug()) {this.getLog().println("SearchResLoadTab.getResponse message="+message);}; 
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, ""); 
  var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
  chatBotMessage.setRelevance(0.1);
  chatBotMessage.setResponder(this.getClassName());
  chatBotMessage.setText("Не знаю.");
  for(var i = 0; i < this.indexTable.length; i++) { 
   if(message.indexOf(this.indexTable[i]) > -1) {
    for(var j = 0; j < this.exclusionTable[this.indexTable[i]].length; j++) {
     if(message.indexOf(this.exclusionTable[this.indexTable[i]][j]) > -1) {
      return chatBotMessage;
     };
    };
    var r = Math.floor(Math.random()*(this.table[this.indexTable[i]].length));
    if(this.mustDebug()) {this.getLog().println("SearchResLoadTab.getResponse r = "+r);}; 
    return this.table[this.indexTable[i]][r];
   };
  };
  return chatBotMessage;
 };  
  
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.init = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchResLoadTab.init is runing...");};
  this.loadTable();
 }; 
 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.loadTable = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchResLoadTab.loadTable is runing...");};
  var loader = new com.oclib.javascript.util.Loader();
  loader.setDebugging(this.getDebugging()); loader.setLog(this.getLog()); loader.setTracing(this.getTracing());
  var the = this;
  loader.setDoIfSuccess(function() {the.loadParseTable(loader);});
  loader.setDoIfError(function() {});//the.loadTable();
  loader.makeRequest("GET", this.getTableLocation(), "");
 };
 
 su.bot.javascript.chatbot.chatbots.SearchResLoadTab.prototype.loadParseTable = function(loader) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SearchResLoadTab.loadParseTable is runing...");};
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
     message.setEmotion(e);
     message.setLanguage(l);
     message.setRelevance(this.getRelevance());
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
	} else {
     for(var n=0; n < tArray.length; n++) {
      this.table[msArray[k]][this.table[msArray[k]].length] = tArray[n];
	 };
	};
   };
   i++;
  };
 };
};