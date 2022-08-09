<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="features-metrics-2 wf-section">
    <div class="container">
      <div class="features-wrapper-2">
        
        <div class="features-block">
          <div class="text-block-1"><strong><?php if ($individual_cnt == -1) echo ''; else echo $individual_cnt;?><br>‍</strong>Your Searches
          </div>
        </div>
        <div class="features-block">
          <div class="text-block-1"><strong><?php if ($individual_cnt == -1) echo ''; else echo floor($individual_cnt/5);?><br>‍</strong>Meals Provided</div>
        </div>
        
      </div>
    </div>
  </section>
  <div class="section-3 search wf-section">
    <div class="container-2 w-container">
      <div class="div-block divblocksearch" style="margin-top: 5% !important;">
        <div class="html-embed-2 embed3 w-embed w-script">
          <div class="hero">
            <form id="myForm" method="get" name="bing" oninput="return bingAutosuggest(this.p.value,)">
              <div id="searchBox">
                <img src="<?php echo base_url().'assets/';?>images/logo2-3.png" id="Logo">
                <input type="text" name="p" id="textarea" placeholder="Your Searches Fight Hunger..." value="" onkeyup="showButton()" autocomplete="off">
                <img src="<?php echo base_url().'assets/';?>images/x-1.svg" class="x-icon" id="x" onclick="resetForm()" style="display: none;">
                <img src="<?php echo base_url().'assets/';?>images/mic-fill-1.svg" class="mic-icon" id="mic">
                <input type="image" src="https://uploads-ssl.webflow.com/6299ab0efe185171423aaf3e/629e2223f84006ce6fbc44d8_search-1.svg" class="search-icon" id="Search">
              </div>
              <div class="selector">
                <ul id="list"></ul>
              </div>
            </form>
          </div>
          <div id="results" style="text-align: center;"><br>
            <?php echo $total_cnt;?> Searches Made to Change the World<br><br>
            <?php echo floor($total_cnt/5);?> Meals Provided 
            <script>

            document.getElementById("list").addEventListener("click", function(event) {
              console.log(0);
              processForm(event);
            });
        //Form Clearing /////////////////////////////////////////
        //Hide and Unhide X
        window.onload = function () {
            document.getElementById("x").style.display = "none";
        };
        function showButton() {
            document.getElementById("x").style.display = "block";
        }
        //Resets form
        function resetForm() {
            document.getElementById("myForm").reset();
            document.getElementById("x").style.display = "none";
            textarea.placeholder = "Your Searches Fight Hunger...";
            document.getElementById("list").innerHTML = "";
        }
        //Searchbox Expandnig /////////////////////////////////////
        //Searchbox and Logo expanding / contract
        var searchBox = document.getElementById("searchBox");
        var Logo = document.getElementById("Logo");
        searchBox.classList.toggle("active");
        Logo.onclick = function () {
            searchBox.classList.toggle("active");
        };

        function processForm(e) {
            // if (e.preventDefault) e.preventDefault();
            var url_search_cnt = "<?php echo base_url().'home/search_cnt';?>";
            $.ajax({
                    type: "POST",
                    url: url_search_cnt,
                    data: null,
                    success: function(res) {
                        console.log(res);
                    }
            });
            return false;
        }

        var form = document.getElementById('myForm');
        if (form.attachEvent) {
            form.attachEvent("submit", processForm);
        } else {
            form.addEventListener("submit", processForm);
        }

        //Do the search to Bing
        // setting action on window onload event
        document.getElementById("myForm").action = "https://search.yahoo.com/search";
        //Speech to text using browser functionality /////////////////////////
        //Get Microphone Permission
        function getLocalStream() {
            navigator.mediaDevices
                .getUserMedia({ video: false, audio: true })
                .then((stream) => {
                    window.localStream = stream;
                    window.localAudio.srcObject = stream;
                    window.localAudio.autoplay = true;
                })
                .catch((err) => {
                    console.log("u got an error:" + err);
                });
        }
        //Speech Recognition WITHOUT AZURE
        var speak = document.getElementById("mic");
        var textarea = document.getElementById("textarea");
        var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        var recognition = new SpeechRecognition();
        speak.addEventListener("click", function () {
            getLocalStream();
            recognition.start();
            //textarea.innerHTML = '...Speak Now';
            document.getElementById("myForm").reset();
            textarea.placeholder = "...Speak Now";
            document.getElementById("list").innerHTML = "";
        });
        recognition.onresult = function (e) {
            var transcript = e.results[0][0].transcript;
            //textarea.innerHTML = transcript;
            textarea.value = transcript;
            document.getElementById("x").style.display = "block";
        };
        // Bing's Autosuggest ///////////////////////////////////////////////////
        //Autosuggest info script
        function pre(text) {
            return "<pre>" + text.replace(/&/g, "&amp;").replace(/</g, "&lt;") + "</pre>";
        }
        //Processes JSON Results, getting just the info I want
        function renderSearchResults(results) {
            //    document.getElementById("results").innerHTML = pre(JSON.stringify(results, null, 2));
            var sGroups = results.suggestionGroups;
            var sS = sGroups[0].searchSuggestions;
            console.log(sS);
            var out = "";
            var output = "";
            var i;
            //Vars for Dropdown
            for (i = 0; i < sS.length; i++) {
                //Fill the Dropdown list
                output += "<li class='options'><p><a href='https://search.yahoo.com/search?p=" + sS[i].displayText + "'>" + sS[i].displayText + "</a></p></li>";
                ////////////////////////////////////////////
                out += sS[i].displayText + "<br>"; // + "; ";  //Create in string
                console.log(sS[i].displayText); //This displays each individually
                //document.getElementById("results").innerHTML = out;
            }
            document.getElementById("list").innerHTML = output;
        }
        //Print Code errors
        function renderErrorMessage(message, code) {
            //   if (code)
            //       document.getElementById("results").innerHTML = "<pre>Status " + code + ": " + message + "</pre>";
            //   else
            //       document.getElementById("results").innerHTML = "<pre>" + message + "</pre>";
        }
        //Start the Request
        function bingAutosuggest(p) {
            var endpoint = "https://api.bing.microsoft.com/v7.0/Suggestions";
            //Starts the status of the call
            var request = new XMLHttpRequest();
            //Do not request information until # characters are typed.
            if (encodeURIComponent(p).length >= 4) {
                try {
                    request.open("GET", endpoint + "?q=" + encodeURIComponent(p));
                } catch (e) {
                    renderErrorMessage("Bad request");
                    return false;
                }
                request.setRequestHeader("Ocp-Apim-Subscription-Key", "b154418a0797481a927020c1a8459892");
                //If Successful
                request.addEventListener("load", function () {
                    if (this.status === 200) {
                        //          renderSearchResults(JSON.parse(this.responseText));
                        //NEW CODE
                        var myJSON = JSON.parse(this.responseText);
                        //          console.log(myJSON);
                        renderSearchResults(myJSON);
                        //END NEW CODE
                    }
                    //Lots of Error CHecking
                    else {
                        if (this.status === 401) getSubscriptionKey(true);
                        renderErrorMessage(this.statusText, this.status);
                    }
                });
                request.addEventListener("error", function () {
                    renderErrorMessage("Network error");
                });
                request.addEventListener("abort", function () {
                    renderErrorMessage("Request aborted");
                });
                request.send();
                return false;
            }
            //Clear Autosuggest if less than the #
            else {
                //document.getElementById("results").innerHTML="";
                document.getElementById("list").innerHTML = "";
            }
        }
        ////////////////////////////////////////////////////////
        // Autosuggest Dropdown population /////////////////////
    </script>
          </div>
        </div>
        <div class="w-form">
          <form id="317261" name="email-form" data-name="Email Form" action="https://sendfox.com/form/1ggpd2/3l726l" method="get" class="form-3"><input type="text" class="w-input" maxlength="256" name="name" data-name="Name" placeholder="First Name" id="first_name" required=""><input type="email" class="w-input" maxlength="256" name="email" data-name="Email" placeholder="Email Address" id="email" required=""><input type="submit" value="Join Today!" data-wait="Please wait..." class="submit-button-2 w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
        <p></p>
      </div>
    </div>
  </div>
  <div class="section-9 wf-section">
    <div class="w-container">
      <div class="columns-4 w-row">
        <div class="w-col w-col-6">
          <p class="copyright">© 2022 Who Gives a Cup LLC / Ripple Search. All rights reserved.</p>
        </div>
        <div class="w-col w-col-6">
          <ul role="list" class="list-2">
            <li>
              <a href="https://twitter.com/WhoGivesACup" target="_blank" class="w-inline-block"><img src="<?php echo base_url().'assets/';?>images/icon-twit.png" loading="lazy" alt="" class="image-5"></a>
            </li>
            <li>
              <a href="https://www.instagram.com/whogivesacupapps" target="_blank" class="w-inline-block"><img src="<?php echo base_url().'assets/';?>images/icon-insta.png" loading="lazy" alt="" class="image-6"></a>
            </li>
            <li>
              <a href="https://www.facebook.com/WhoGivesACup" target="_blank" class="w-inline-block"><img src="<?php echo base_url().'assets/';?>images/icon-email.png" loading="lazy" alt="" class="image-7"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

