#!/usr/bin/perl 
use strict;
use warnings; 
use utf8;
my $string_utf = "Нормализатор utf ©";

use CGI; 
my $cgi = new CGI();
use Encode qw(from_to);
use LWP::UserAgent;
use URI::Escape qw(uri_escape_utf8 uri_escape uri_unescape);
use URI::Heuristic; 
#action=saveMessage&uid=u20072916713465582&message=951&response=951.
#$cgi->param("action","saveMessage");
#$cgi->param("uid","u20072916713465582");
#$cgi->param("message","951");
#$cgi->param("response","951");


print "Content-Type:text/xml\n\n"; 
print "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
print "<root>\n";

my $action = $cgi->param("action");
if(defined($action) && $action eq "saveMessage") {
 my $uid = $cgi->param("uid");
 my $message = $cgi->param("message");
 my $response = $cgi->param("response");
 if(defined($uid) && defined($message) && defined($response)
    && $uid ne "" && $message ne "" && $response ne "") {
  my $url = "http://www.bot.su/cgi-bin/library/su/bot/kisa/perl/chatBotLogProxy.cgi";
  #$uid = uri_escape_utf8($uid);
  $message = uri_escape_utf8($message);
  $message =~ s/_/%/g;#
  $response = uri_escape_utf8($response);
  $response =~ s/_/%/g;#
  #print "$action...$uid...$message...$response\n";
  my $ua = LWP::UserAgent->new();
  $ua->agent("GoogleBot");
  $ua->timeout(10);
  $ua->env_proxy;	
  my $serverResponse = $ua->post($url, {"action" => $action,
                                        "uid" => $uid,
                                        "message" => $message,
                                        "response" => $response
                                       });
  #print   $serverResponse->content."\n";                                    
  if($serverResponse->is_success) {
   print " <status>success</status>\n";
   print "</root>\n";
   exit;
  };
 };
}; 
print " <status>error</status>\n";
print "</root>\n";