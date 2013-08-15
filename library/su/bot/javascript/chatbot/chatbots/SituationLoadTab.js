/***********************************************************************************************************
 * su.bot.javascript.chatbot.chatbots.SituationtLoadTab
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/SituationtLoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/situationloadtab/builds/20070811/SituationtLoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/situationloadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.chatbots == "undefined") {su.bot.javascript.chatbot.chatbots = {};};

if (typeof su.bot.javascript.chatbot.chatbots.SituationtLoadTab == "undefined") {
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab = function() {}; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype = new  su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.className = "SituationtLoadTab"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classNamespace = "su.bot.javascript.chatbot.chatbots.SituationtLoadTab"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classCreated = "20070810"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/SituationtLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/situationloadtab/index.html"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/situationloadtab/builds/20070811/SituationtLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/situationloadtab/builds/20070811/"; 
  
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.relevance = 0.98;
  su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.getRelevance = function () {return this.relevance;};
  su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.setRelevance = function (relevance) {this.relevance = relevance;};
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.table = new Array();
  su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.getTable = function () {return this.table;};
  su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.setTable = function (table) {this.table = table;};
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.tableLocation;
  su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.getTableLocation = function () {return this.tableLocation;};
  su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.setTableLocation = function (tableLocation) {this.tableLocation = tableLocation;};
 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SituationtLoadTab.getFirtstMessage is runing...");};
  return this.getResponse("");
 }; 
 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SituationtLoadTab.getResponse is runing...");}; 
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, ""); 
  var l = this.getBotManager().getCurrentLanguage();
  if(this.table && this.table[l] && this.table[l][message]) {
   return this.table[l][message][Math.floor(Math.random()*this.table[l][message].length)];
  } else {
   var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
   chatBotMessage.setRelevance(0.1);
   chatBotMessage.setResponder(this.getClassName());
   return chatBotMessage;
  };
 };  
  
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.init = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SituationtLoadTab.init is runing...");};
  this.loadTable();
 }; 
 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.loadTable = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SituationtLoadTab.loadTable is runing...");};
  var loader = new com.oclib.javascript.util.Loader();
  loader.setDebugging(this.getDebugging()); loader.setLog(this.getLog()); loader.setTracing(this.getTracing());
  var the = this;
  loader.setDoIfSuccess(function() {the.loadParseTable(loader);});
  loader.setDoIfError(function() {});
  loader.makeRequest("GET", this.getTableLocation(), "");
 };
 
 su.bot.javascript.chatbot.chatbots.SituationtLoadTab.prototype.loadParseTable = function(loader) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.SituationtLoadTab.loadParseTable is runing...");};
  var responseXML = loader.xml;  
  var i = 0;
  var table = new Array();
  while(responseXML.getElementsByTagName("m").item(i)) {
   var l = "";
   if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l")
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l").item(0)
      && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l").item(0).firstChild) {
    l = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("l").item(0).firstChild.data;
    if(!table[l]) {
     if(this.mustDebug()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.LoadTab.loadParseTable new language - "+l);};
     table[l] = new Array();
	};
    var e;
    if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e")
       && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0)
       && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0).firstChild) {
     e = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0).firstChild.data;
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
    for(var k = 0; k < msArray.length; k++) {if(!table[l][msArray[k]]) {table[l][msArray[k]] = tArray;};};
    i++;
   };
  };
  this.table = table;
 };
};