<?php

/*
*  Copyright (c) 2019-2021 Barchampas Gerasimos <makindosxx@gmail.com>.
*  Tenebris is an encryption and decryption program to reach secure conversations.
*
*  Tenebris program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  Tenebris  is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*   
*  You should have received a copy of the GNU Affero General Public License, version 3,
*  along with this program.  If not, see <http://www.gnu.org/licenses/>
*
*/


?>


<!DOCTYPE html>
<html>
<head>


  <meta charset="UTF-8">

  <title> Tenebris </title>


  <link rel="SHORTCUT ICON" href="images/icons/icon.png" />


  <link href='css/family.css' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" href="css/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

body
{
background-image: url(), url() ,url();
background-position: left center, right center;
background-repeat: no-repeat, no-repeat;
background-size: 30%,  30%, cover;
background-color:;    
}

</style>


  
</head>

<body>



<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/32.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

 
   <!--
   <div align="center"> 
   <img src="/photos/3.gif" height="100" width="120"> 
   </div> 
    -->
       <br>

     <div align="center"> 
       <font size="4" color="grey"> 
         <b> <i>
            Welcome to Tenebris <br>
          The conversations here are anonymous
           </i> </b>
         </font>

         <br>

<a href="lang.php"> SELECT LANGUAGE </a>

        </div>

  <div class="form" style="background-color:transparent;">
      
      <ul class="tab-group">
        <li class="tab "><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      


      <div class="tab-content">

        <div id="login">   

          <div align="center"> 
             <img src="images/enc_dec2.png" height="35" width="70">
         </div>
             
              <br>
          
          <form action="login.php" method="post">
   
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="user" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" required autocomplete="off"/>
          </div>
          
          
          <button class="button button-block" name="submit_log"/>
             LOG IN <i class="fa fa-sign-in"></i>
         </button>

          </form>

        </div>




        <div id="signup">   

          <div align="center"> <img src="images/enc_dec2.png" height="35" width="70"> </div> <br>
          
          <form action="signup.php" method="post">
          
          <div class="field-wrap">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="user" required autocomplete="off" />
            </div>
        
          </div>


           <div class="field-wrap">
            <label>
              <span class="req"> <font size="4"> Advanced Encryption Standard (Aes 256 CBC) </font> </span>
            </label>
            <input type="text" name="_key" autocomplete="off" disabled/>
          </div>

          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required autocomplete="off"/>
          </div>
          
          <button type="submit"  name="submit_reg" class="button button-block"/> 
            <i class="fa fa-user-plus"></i> REGISTER 
          </button>
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->




  <script src='js/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
