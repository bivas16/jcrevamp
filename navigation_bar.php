<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
     <style type="text/css">
         
         .w_menu .nav-item:hover .nav-link{
            color: black;

            /*#051441*/ 
         }

         .w_menu .nav-item .nav-link{
            color: black;
         } 

     </style>
 </head>
 <body>
 
 </body>
 </html>

<nav class="navbar navbar-expand-lg menu_one menu_four">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="../index.php">
                    <img src="https://cdn.justcall.io/images/logo-desktop.png" srcset="https://cdn.justcall.io/images/logo-desktop.png" alt="logo">
                    <img src="https://cdn.justcall.io/images/logo-desktop.png" srcset="https://cdn.justcall.io/images/logo-desktop.png" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu w_menu pl_100">
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/justcall/index" aria-haspopup="true" aria-expanded="false">
                            Home
                            </a>
                            
                        </li>

                        <li class="nav-item dropdown submenu mega_menu">
                            <a class="nav-link dropdown-toggle" href="/justcall/features.php" aria-haspopup="true" aria-expanded="false">
                             Features
                            </a>
              <ul class="dropdown-menu">
                                <li class="nav-item">
                                    
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="/justcall/features/international-numbers" class="nav-link">Get Phone Numbers</a></li>
                                        <li class="nav-item"><a href="/justcall/features/makeandreceivecalls" class="nav-link">Make and Receive Calls</a></li>
                                        <li class="nav-item"><a href="/justcall/features/calltracking" class="nav-link">Call Tracking</a></li>
                                        <li class="nav-item"><a href="/justcall/features/record-calls" class="nav-link">Call Recording</a></li>
                                        <li class="nav-item"><a href="/justcall/features/calldistribution" class="nav-link">Call Distribution</a></li>
                                        <li class="nav-item"><a href="/justcall/features/call-monitoring" class="nav-link">Call Monitoring</a></li>
                                        <li class="nav-item"><a href="/justcall/features/dynamic-number-insertion" class="nav-link">Dynamic Number Insertion</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="portfolio-fullwidth-3columns.html" class="nav-link">Call Barging & Whispering</a></li>
                                        <li class="nav-item"><a href="/justcall/features/send-and-receive-fax" class="nav-link">Send and Receive Fax</a></li>
                                        <li class="nav-item"><a href="/justcall/features/call-notes" class="nav-link">Call Notes</a></li>
                                        <li class="nav-item"><a href="/justcall/features/round-robin" class="nav-link">Round Robin</a></li>
                                        <li class="nav-item"><a href="portfolio-grid-fullwidth2.html" class="nav-link">Virtual Receptionist</a></li>
                                        <li class="nav-item"><a href="/justcall/features/custom-audio-devices" class="nav-link">Custom Audio Devices</a></li>
                                        <li class="nav-item"><a href="/justcall/features/sms-bot.php" class="nav-link">SMS-bot</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="portfolio-mas-2col.html" class="nav-link">Call Disposition Notes</a></li>
                                        <li class="nav-item"><a href="/justcall/features/3-way-calling" class="nav-link">3-way calling</a></li>
                                        <li class="nav-item"><a href="portfolio-mas-4col.html" class="nav-link">Call Merge</a></li>
                                        <li class="nav-item"><a href="/justcall/features/autodialer" class="nav-link">Auto Dialer</a></li>
                                        <li class="nav-item"><a href="/justcall/features/post-call-survey" class="nav-link">Post Call Survey</a></li>
                                        <li class="nav-item"><a href="portfolio-mas-col-2.html" class="nav-link">Call Scheduler</a></li>
                                        <li class="nav-item"><a href="/justcall/features/text-puff" class="nav-link">Text-Puff</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="/justcall/features/click-to-call" class="nav-link">Click to Call</a></li>
                                        <li class="nav-item"><a href="/justcall/features/justcall-sms" class="nav-link">Send and Receive SMS</a></li>
                                        <li class="nav-item"><a href="/justcall/features/voicemail" class="nav-link">Voicemail by Email</a></li>
                                        <li class="nav-item"><a href="portfolio-details-3.html" class="nav-link">Conference Calling</a></li>
                                        <li class="nav-item"><a href="/justcall/features/appointmentscheduler" class="nav-link">Appointment Scehduler</a></li>
                                        <li class="nav-item"><a href="/justcall/features/crmhelpdeskintegration" class="nav-link">CRM & Helpdesk Integrations</a></li>
                                        <li class="nav-item"><a href="/justcall/features/ivr" class="nav-link">Interactive Voice Response System</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu mega_menu">
                            <a class="nav-link dropdown-toggle" href="/justcall/integrations.php">
                            Integrations
                            </a>
                            <ul class="dropdown-menu">

                               <li class="nav-item">
                                  
                                  <ul class="dropdown-menu">
                                      
                                <li class="nav-item"><a href="/justcall/integrations/salesforce.php" class="nav-link">Salesforce</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/zendesk.php" class="nav-link">Zendesk</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/slack.php" class="nav-link">Slack</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/desk.com.php" class="nav-link">Desk.com</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/infusionsoft.php" class="nav-link">Infusionsoft</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/pipedrive.php" class="nav-link">Pipedrive</a></li>

                                  </ul>
                                   
                               </li>
                                
                                <li class="nav-item">
                                    
                                    <ul class="dropdown-menu">
                                
                                <li class="nav-item"><a href="/justcall/integrations/kustomer.php" class="nav-link">Kustomer</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/freshdesk.php" class="nav-link">Freshdesk</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/freshsales.php" class="nav-link">Freshsales</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/zoho.php" class="nav-link">Zoho</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/hubspot.php" class="nav-link">Hubspot</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/front.php" class="nav-link">Front</a></li>

                                    </ul>

                                </li>

                               <li class="nav-item">
                                   
                                   <ul class="dropdown-menu">

                                
                                
                                <li class="nav-item"><a href="/justcall/integrations/zapier.php" class="nav-link">Zapier</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/groove.php" class="nav-link">Groove</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/intercom.php" class="nav-link">Intercom</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/help Scout.php" class="nav-link">Help Scout</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/agile CRM.php" class="nav-link">Agile CRM</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/nimble.php" class="nav-link">Nimble</a></li>
                                
                                   </ul>
                               </li>
                                
                                <li class="nav-item">

                                    <ul class="dropdown-menu">

                                
                                <li class="nav-item"><a href="/justcall/integrations/prosperworks.php" class="nav-link">Prosperworks</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/copper.php" class="nav-link">Copper</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/synchroteam.php" class="nav-link">Synchroteam</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/google Contacts.php" class="nav-link">Google Contacts</a></li>
                                <li class="nav-item"><a href="/justcall/integrations/google Calendar.php" class="nav-link">Google Calendar</a></li>
                                        
                                    </ul>
                                    
                                </li>
                                  
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pricing
                            </a>
                              
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="home-mail.html" class="nav-link">Call-rates</a></li>
                                <li class="nav-item"><a href="home-mail.html" class="nav-link">SMS-rates</a></li>
                              
                            </ul>   

                        </li>
                        
                        <li class="nav-item dropdown submenu">
                           
                            <a class="nav-link dropdown-toggle" href="https://justcall.io/blog/">
                            Blog
                            </a>
                            
                        </li>
                        
                    </ul>
                </div>
                <a class="btn_get btn_hover hidden-sm " style="background: orange; color: white; border: none;" href="https://justcall.io/signup">Get Started</a>
            </div>
        </nav>
