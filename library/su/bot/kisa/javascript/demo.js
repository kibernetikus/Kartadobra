/***********************************************************************************************************
 * su.bot.kisa.javascript.demo
 * Location: http://www.bot.su/library/su/bot/kisa/javascript/demo.js
 * Version Location: http://www.bot.su/library/su/bot/kisa/javascript/demo/20070811/demo.js
 * © Bot.Su (http://www.bot.su/)
***********************************************************************************************************/
var botElementId = "bot";
var botLog;
var botLogElementId = "botLog";
var botManager;
var classLoader;
var debugging = true;
var dom;
var events;
var language = "ru";
var loaded = true;
var monitorElementId = "monitor";
var relevationCalculator = 0.95;
var relevationDateTime = 0.96;
var relevationEmptyQuestionLoadTab = 0.89;
var relevationLoadTab = 0.5;
var relevationMeasuringSystem = 0.95;
var relevationParrot = 0.55;
var relevationSearchLoadTab = 0.95;
var relevationSearchResLoadTab = 0.975;
var relevationSituationLoadTab = 1;
var relevationVariantLoadTab = 0.85;
var saveKisaLog = false;
var tracing = true; 
var urlKisaLog = "/cgi-bin/library/su/bot/kisa/perl/proxy.cgi";
var userElementId = "guest";
var xmlEmptyQuestionLoadTabLocation = "/library/su/bot/kisa/xml/EmptyQuestionLoadTab.xml";
var xmlLoadTabLocation = "/library/su/bot/kisa/xml/LoadTab.xml";
var xmlSearchLoadTabLocation = "/library/su/bot/kisa/xml/SearchLoadTab1.xml";
var xmlSearchResLoadTabLocation = "/library/su/bot/kisa/xml/SearchResLoadTab.xml";
var xmlSituationLoadTabLocation = "/library/su/bot/kisa/xml/SituationLoadTab.xml";
var xmlVariantLoadTabLocation = "/library/su/bot/kisa/xml/VariantLoadTab.xml";

var initAll = function(e) {
 if((debugging || tracing) && com.oclib.javascript.util.Log) {
  botLog = new com.oclib.javascript.util.Log("botLog", com.oclib.javascript.util.Log.SYMPLE_TEXT_LOG_TYPE, com.oclib.javascript.util.Log.INTRO_ELEMENT_LOG_PLACE);
  if(debugging && botLog) {botLog.println("demo.js:initAll: "+"Log is loaded...");};
  if(debugging && tracing && botLog && com.oclib.javascript.util.Dom) {
   botLog.println("demo.js:initAll: "+"com.oclib.javascript.util.Dom is loaded...");
  } else {
   botLog.println("demo.js:initAll: "+"com.oclib.javascript.util.Dom is NOT loaded...");
  };
 };
 events.setTracing(tracing); events.setDebugging(debugging); events.setLog(botLog); 
 if (com.oclib.javascript.util.Dom) {
  dom = new com.oclib.javascript.util.Dom();
  dom.setTracing(tracing);
  dom.setDebugging(debugging);
  dom.setLog(botLog);
 } else {
  loaded = false;
  return -1; 
 };
 dom.changeTextContent("loadMessage", dom.getTextContent("clickMessage"));
 
 language = document.getElementById("defaultLanguage").value;
 if(debugging) {botLog.println("demo.js:initAll: "+"language="+language);};
 
 var monitor;
 monitor = new su.bot.javascript.chatbot.console.Monitor();
 monitor.setTracing(tracing); monitor.setDebugging(debugging); monitor.setLog(botLog);
 monitor.setBotElementId(botElementId);
 monitor.setMonitorElementId(monitorElementId);
 monitor.setUserElementId(userElementId);
 monitor.setCurrentLanguage(language);
 monitor.main();
 
 var userConsole;
 userConsole = new su.bot.javascript.chatbot.console.UserConsole();
 userConsole.setTracing(tracing); userConsole.setDebugging(debugging); userConsole.setLog(botLog);
 userConsole.setEvent(events);
 userConsole.setMonitor(monitor);
 userConsole.main();
   
 botManager = new su.bot.javascript.chatbot.botsmanager.BotsManager();
 botManager.setTracing(tracing); botManager.setDebugging(debugging); botManager.setLog(botLog);
 botManager.setMonitor(monitor); 
 botManager.setCurrentLanguage(language);
 var d = new Date();
 botManager.setUid("u"+d.getFullYear()+d.getMonth()+d.getDate()+d.getHours()+d.getMinutes()+d.getSeconds()+d.getMilliseconds()+Math.floor(Math.random()*1000));
 botManager.setSaveUrl(urlKisaLog);
 botManager.setSave(saveKisaLog);
  
 var kisaLoadTab;
 kisaLoadTab = new su.bot.kisa.javascript.chatbots.LoadTab();
 kisaLoadTab.setTracing(tracing); kisaLoadTab.setDebugging(debugging); kisaLoadTab.setLog(botLog); 
 kisaLoadTab.setRelevance(relevationLoadTab);
 kisaLoadTab.setTableLocation(xmlLoadTabLocation);
 botManager.addBot(kisaLoadTab);

 botManager.main();

 runBot(); 
 
 kisaLoadTab.init(); 
 
 classLoader = new com.oclib.javascript.lang.ClassLoader();
// classLoader.setTracing(tracing); classLoader.setDebugging(debugging); classLoader.setLog(botLog);

 classLoader.require("su.bot.javascript.chatbots.VariantLoadTab", "/library/su/bot/javascript/chatbot/chatbots/SituationLoadTab.js");
 classLoader.require("su.bot.kisa.javascript.chatbots.SituationLoadTab", "/library/su/bot/kisa/javascript/chatbots/SituationLoadTab.js");
 var kisaSituationLoadTab;
 kisaSituationLoadTab= new su.bot.kisa.javascript.chatbots.SituationLoadTab();
 kisaSituationLoadTab.setTracing(tracing); kisaSituationLoadTab.setDebugging(debugging); kisaSituationLoadTab.setLog(botLog);
 kisaSituationLoadTab.setRelevance(relevationSituationLoadTab);
 kisaSituationLoadTab.setTableLocation(xmlSituationLoadTabLocation);
 kisaSituationLoadTab.init();
 botManager.addBot(kisaSituationLoadTab);
  
 classLoader.require("su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab", "/library/su/bot/kisa/javascript/chatbots/EmptyQuestionLoadTab.js");
 var kisaEmptyQuestionLoadTab;
 kisaEmptyQuestionLoadTab= new su.bot.kisa.javascript.chatbots.EmptyQuestionLoadTab();
 kisaEmptyQuestionLoadTab.setTracing(tracing); kisaEmptyQuestionLoadTab.setDebugging(debugging); kisaEmptyQuestionLoadTab.setLog(botLog);
 kisaEmptyQuestionLoadTab.setRelevance(relevationEmptyQuestionLoadTab);
 kisaEmptyQuestionLoadTab.setTableLocation(xmlEmptyQuestionLoadTabLocation);
 kisaEmptyQuestionLoadTab.init();
 botManager.addBot(kisaEmptyQuestionLoadTab);
  
 classLoader.require("su.bot.javascript.chatbots.VariantLoadTab", "/library/su/bot/javascript/chatbot/chatbots/VariantLoadTab.js");
 classLoader.require("su.bot.kisa.javascript.chatbots.VariantLoadTab", "/library/su/bot/kisa/javascript/chatbots/VariantLoadTab.js");
 var kisaVariantLoadTab;
 kisaVariantLoadTab = new su.bot.kisa.javascript.chatbots.VariantLoadTab();
 kisaVariantLoadTab.setTracing(tracing); kisaVariantLoadTab.setDebugging(debugging); kisaVariantLoadTab.setLog(botLog);
 kisaVariantLoadTab.setRelevance(relevationVariantLoadTab);
 kisaVariantLoadTab.setTableLocation(xmlVariantLoadTabLocation);
 kisaVariantLoadTab.init();
 botManager.addBot(kisaVariantLoadTab);  
 
 classLoader.require("su.bot.javascript.chatbots.SearchLoadTab", "/library/su/bot/javascript/chatbot/chatbots/SearchLoadTab.js");
 classLoader.require("su.bot.kisa.javascript.chatbots.SearchLoadTab", "/library/su/bot/kisa/javascript/chatbots/SearchLoadTab.js");
 var kisaSearchLoadTab;
 kisaSearchLoadTab = new su.bot.kisa.javascript.chatbots.SearchLoadTab();
 kisaSearchLoadTab.setTracing(tracing); kisaSearchLoadTab.setDebugging(debugging); kisaSearchLoadTab.setLog(botLog);
 kisaSearchLoadTab.setRelevance(relevationSearchLoadTab);
 kisaSearchLoadTab.setTableLocation(xmlSearchLoadTabLocation);
 kisaSearchLoadTab.init();
 botManager.addBot(kisaSearchLoadTab);
 
 classLoader.require("su.bot.javascript.chatbots.SearchResLoadTab", "/library/su/bot/javascript/chatbot/chatbots/SearchResLoadTab.js");
 classLoader.require("su.bot.kisa.javascript.chatbots.SearchResLoadTab", "/library/su/bot/kisa/javascript/chatbots/SearchResLoadTab.js");
 var kisaSearchResLoadTab;
 kisaSearchResLoadTab = new su.bot.kisa.javascript.chatbots.SearchResLoadTab();
 kisaSearchResLoadTab.setTracing(tracing); kisaSearchResLoadTab.setDebugging(debugging); kisaSearchResLoadTab.setLog(botLog);
 kisaSearchResLoadTab.setRelevance(relevationSearchResLoadTab);
 kisaSearchResLoadTab.setTableLocation(xmlSearchResLoadTabLocation);
 kisaSearchResLoadTab.init();
 botManager.addBot(kisaSearchResLoadTab); 
 
 classLoader.require("su.bot.kisa.javascript.chatbots.Calculator", "/library/su/bot/kisa/javascript/chatbots/Calculator.js");
 var kisaCalculator;
 kisaCalculator = new su.bot.kisa.javascript.chatbots.Calculator();
 kisaCalculator.setTracing(tracing); kisaCalculator.setDebugging(debugging); kisaCalculator.setLog(botLog);
 kisaCalculator.setRelevance(relevationCalculator);
 botManager.addBot(kisaCalculator);
 kisaCalculator.init(); 
 
 classLoader.require("su.bot.kisa.javascript.chatbots.DateTime", "/library/su/bot/kisa/javascript/chatbots/DateTime.js");
 var kisaDateTime;
 kisaDateTime = new su.bot.kisa.javascript.chatbots.DateTime();
 kisaDateTime.setTracing(tracing); kisaDateTime.setDebugging(debugging); kisaDateTime.setLog(botLog);
 kisaDateTime.setRelevance(relevationDateTime);
 kisaDateTime.init();
 botManager.addBot(kisaDateTime);

 classLoader.require("su.bot.kisa.javascript.chatbots.MeasuringSystem", "/library/su/bot/kisa/javascript/chatbots/MeasuringSystem.js");
 var kisaMeasuringSystem;
 kisaMeasuringSystem = new su.bot.kisa.javascript.chatbots.MeasuringSystem();
 kisaMeasuringSystem.setTracing(tracing); kisaMeasuringSystem.setDebugging(debugging); kisaMeasuringSystem.setLog(botLog);
 kisaMeasuringSystem.setRelevance(relevationMeasuringSystem);
 kisaMeasuringSystem.init();
 botManager.addBot(kisaMeasuringSystem); 
  
 
 classLoader.require("su.bot.kisa.javascript.chatbots.Parrot", "/library/su/bot/kisa/javascript/chatbots/Parrot.js");
 var kisaParrot;
 kisaParrot = new su.bot.kisa.javascript.chatbots.Parrot();
 kisaParrot.setTracing(tracing); kisaParrot.setDebugging(debugging); kisaParrot.setLog(botLog);
 kisaParrot.setRelevance(relevationParrot);
 kisaParrot.init();
 botManager.addBot(kisaParrot); 
};

var runBot = function(e) {
 if(!((debugging || tracing) && botLog)) {
  dom.doHidden("botLog");
  var monitorElement = document.getElementById("monitor");
  monitorElement.style.height = "90%";  
 };
 dom.doHidden("hello");
 dom.doVisible("console");
 document.getElementById("userConsoleText").focus();
 if(debugging && botLog) {botLog.println("demo.js:runBot: "+"Kisa is runing...");};
};

var wrongExit = function(className) {
 if(debugging && botLog) {botLog.println("demo.js:wrongExit from demo.js:initAll: "+"ERROR: "+className+" is not loaded...");}; 
 loaded = false;
 return -1; 
};

if(com.oclib.javascript.lang.Root && com.oclib.javascript.util.Events) {
 events = new com.oclib.javascript.util.Events();
 events.addEventListener(window, "load", initAll, false);
};