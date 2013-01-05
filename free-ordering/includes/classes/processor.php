<?php
 
/**************** Settings begin **************/
 
$username            = 'wxu-test';  // Insert your InterFAX username here
$password            = 'wxuadmin';  // Insert your InterFAX password here
$filetype            = 'HTML'; // File format; supported types are listed at 
                      // http://www.interfax.net/en/help/supported_file_types 
$postponetime        = '2001-12-31T00:00:00-00:00';  // don't postpone
$retries             = '3';
$csid                = 'AA CSID';
$pageheader          = 'To: {To} From: {From} Pages: {TotalPages}';
$subject             = 'New Order !!!!!TEST!!!!!';
$replyemail          = '';
$page_size           = 'A4';
$page_orientation    = 'Portrait';
$high_resolution     = FALSE;
$fine_rendering      = TRUE;
 
/**************** Settings end ****************/
 
$errcount = 0;
 
// import form information 
$faxnumber    = '8123339795';
 
/*
Simple form validation
check to see if recipient name, fax number and message were entered
*/

// if the form is valid 
if(!$errcount){
 
    // read data from template file into $template
    $template = $message;
 
    //fax the form contents
 
    //echo $template;  // uncomment to debug template
 
    $client = new SoapClient("http://ws.interfax.net/dfs.asmx?WSDL");
 
    // load all Web Service parameters
 
    $params->Username          =  $username;
    $params->Password          =  $password;
    $params->FaxNumbers        =  $faxnumber;
    $params->Contacts          =  $name;
    $params->FilesData         =  $template;
    $params->FileTypes         =  $filetype;
    $params->FileSizes         =  strlen($template) ;
    $params->Postpone          =  $postponetime;
    $params->RetriesToPerform  =  $retries;
    $params->CSID              =  $csid;
    $params->PageHeader        =  $pageheader;
    $params->JobID             =  '';
    $params->Subject           =  $subject;
    $params->ReplyAddress      =  $replyemail;
    $params->PageSize          =  $page_size;
    $params->PageOrientation   =  $page_orientation;
    $params->IsHighResolution  =  $high_resolution; 
    $params->IsFineRendering   =  $fine_rendering;
 
 
    // submit document for faxing
    $result = $client->SendfaxEx_2($params);
 
    // capture return value
    $ret = $result->SendfaxEx_2Result;
 
    if($ret > 0){
        // fax submission succeeded
        echo 'Fax submitted successfully. Transaction ID: ' . $ret;
    } else {
        // fax submission failed
        echo 'Fax submission failed. Error message: <a href = "http://www.interfax.net/en/dev/webservice/reference/web-service-return-codes">' . $ret . '</a>';
    }
 
} // end valid form handling
 
?>