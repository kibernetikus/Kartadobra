/***********************************************************************************************************
 * su.bot.javascript.chatbot.chatbots.VariantLoadTab
 * Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/VariantLoadTab.js
 * Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/variantloadtab/builds/20070811/VariantLoadTab.js
 * Index Version Location: http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/variantloadtab/builds/20070811/index.html
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/

if (typeof su == "undefined") {su = {};};
if (typeof su.bot == "undefined") {su.bot = {};};
if (typeof su.bot.javascript == "undefined") {su.bot.javascript = {};};
if (typeof su.bot.javascript.chatbot == "undefined") {su.bot.javascript.chatbot = {};};
if (typeof su.bot.javascript.chatbot.chatbots == "undefined") {su.bot.javascript.chatbot.chatbots = {};};

if (typeof su.bot.javascript.chatbot.chatbots.VariantLoadTab == "undefined") {
 su.bot.javascript.chatbot.chatbots.VariantLoadTab = function() {}; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype = new  su.bot.javascript.chatbot.chatbots.ChatBot();

 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.className = "VariantLoadTab"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classNamespace = "su.bot.javascript.chatbot.chatbots.VariantLoadTab"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classCreated = "20070223"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classCreator = "http://www.bot.su/"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/VariantLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/variantloadtab/index.html"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classVersion = "20070811"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classVersionLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/variantloadtab/builds/20070811/VariantLoadTab.js"; 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.classVersionIndexLocation = "http://www.bot.su/library/su/bot/javascript/chatbot/chatbots/variantloadtab/builds/20070811/"; 
  
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.relevance = 0.98;
  su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.getRelevance = function () {return this.relevance;};
  su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.setRelevance = function (relevance) {this.relevance = relevance;};
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.table = new Array();
  su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.getTable = function () {return this.table;};
  su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.setTable = function (table) {this.table = table;};
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.tableLocation;
  su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.getTableLocation = function () {return this.tableLocation;};
  su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.setTableLocation = function (tableLocation) {this.tableLocation = tableLocation;};
 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.getResponse = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.VariantLoadTab.getResponse is runing...");}; 
  var inputedNormalizedMessage = this.str.normalize(message);
  message = this.str.normalize(message.toLowerCase());
  message = message.replace(/\"/g, ""); 
  if(this.table && this.table[message]) {
   return this.table[message][Math.floor(Math.random()*this.table[message].length)];
  } else {
   var chatBotMessage = new su.bot.javascript.chatbot.messages.ChatBotMessage();
   chatBotMessage.setRelevance(0.1);
   chatBotMessage.setResponder(this.getClassName());
   return chatBotMessage;
  };
 };  
  
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.init = function(message) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.VariantLoadTab.init is runing...");};
  this.loadTable();
  return 1;
 }; 
 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.loadTable = function() { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.VariantLoadTab.loadTable is runing...");};
  var loader = new com.oclib.javascript.util.Loader();
  loader.setDebugging(this.getDebugging()); loader.setLog(this.getLog()); loader.setTracing(this.getTracing());
  var the = this;
  loader.setDoIfSuccess(function() {the.loadParseTable(loader);});
  loader.setDoIfError(function() {});//the.loadTable();
  loader.makeRequest("GET", this.getTableLocation(), "");
 };
 
 su.bot.javascript.chatbot.chatbots.VariantLoadTab.prototype.loadParseTable = function(loader) { 
  if(this.mustTrace()) {this.getLog().println("su.bot.javascript.chatbot.chatbots.VariantLoadTab.loadParseTable is runing...");};
  var responseXML = loader.xml;  
  var i = 0;
  this.table = new Array();
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
   for(var k = 0; k < msArray.length; k++) {if(!this.table[msArray[k]]) {this.table[msArray[k]] = tArray;};};
   i++;
  };
 };
};