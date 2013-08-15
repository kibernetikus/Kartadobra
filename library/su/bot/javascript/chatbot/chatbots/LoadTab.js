/***********************************************************************************************************
 * su.bot.javascript.chatbot.chatbots.LoadTab
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/LoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/loadtab/builds/20070811/LoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/loadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.chatbots == "undefined") {su.bot.javascript.chatbot.chatbots = {};};

if (typeof su.bot.javascript.chatbot.chatbots.LoadTab == "undefined") {
 su.bot.javascript.chatbot.chatbots.LoadTab = function() {}; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype = new  su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.className = "LoadTab"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classNamespace = "su.bot.javascript.chatbot.chatbots.LoadTab"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classCreated = "20070223"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/LoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/loadtab/index.html"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/loadtab/builds/20070811/LoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/loadtab/builds/20070811/"; 
  
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.relevance = 0.5;
  su.bot.javascript.chatbot.chatbots.LoadTab.prototype.getRelevance = function () {return this.relevance;};
  su.bot.javascript.chatbot.chatbots.LoadTab.prototype.setRelevance = function (relevance) {this.relevance = relevance;};
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.table = new Array();
  su.bot.javascript.chatbot.chatbots.LoadTab.prototype.getTable = function () {return this.table;};
  su.bot.javascript.chatbot.chatbots.LoadTab.prototype.setTable = function (table) {this.table = table;};
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.tableLocation;
  su.bot.javascript.chatbot.chatbots.LoadTab.prototype.getTableLocation = function () {return this.tableLocation;};
  su.bot.javascript.chatbot.chatbots.LoadTab.prototype.setTableLocation = function (tableLocation) {this.tableLocation = tableLocation;};
 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.getFirstMessage = function(language) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.LoadTab.getFirtstMessage is runing...");};
  return this.getResponse("");
 }; 
 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.LoadTab.getResponse is runing...");};  
  var l = this.getBotManager().getCurrentLanguage();
  if(this.table && this.table[l] && this.table[l][0]) { 
   if(this.mustDebug()) {this.getLog().println("LoadTab.getResponse table has length="+this.table[l].length);};
   var r = Math.floor(Math.random()*this.table[l].length)
   return this.table[l][r];
  } else {
   var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
   chatBotMessage.setLanguage(l);
   chatBotMessage.setRelevance(this.getRelevance());
   chatBotMessage.setResponder(this.getClassName());
   chatBotMessage.setText("");
   return chatBotMessage;
  };
 };  
  
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.init = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.LoadTab.init is runing...");};
  this.loadTable();
 }; 
 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.loadTable = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.LoadTab.loadTable is runing...");};
  var loader = new com.oclib.javascript.util.Loader();
  loader.setDebugging(this.getDebugging()); loader.setLog(this.getLog()); loader.setTracing(this.getTracing());
  var the = this;
  loader.setDoIfSuccess(function() {the.loadParseTable(loader);});
  loader.setDoIfError(function() {});
  loader.makeRequest("GET", this.getTableLocation(), "");
 };
 
 su.bot.javascript.chatbot.chatbots.LoadTab.prototype.loadParseTable = function(loader) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.LoadTab.loadParseTable is runing...");};
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
     table[l] = new Array();
	};
    var message = new su.bot.javascript.chatbot.messages.ChatBotMessage();
	message.setLanguage(l);
    if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e")
       && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0)
       && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0).firstChild) {
     message.setEmotion(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("e").item(0).firstChild.data);
    };
    if(responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t")
       && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t").item(0)
       && responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t").item(0).firstChild) {
     var currentText = responseXML.getElementsByTagName("m").item(i).getElementsByTagName("t").item(0).firstChild.data;
     message.setText(currentText);
    };
    message.setRelevance(this.getRelevance());
    message.setResponder(this.getClassName());
    table[l][table[l].length] = message;
    i++;
   };
  };
  this.table = table;
 };
};