<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="section-3 wf-section">
    <div class="container-2 w-container">
      <div class="div-block">
        <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo youtube"><iframe src="https://www.youtube.com/embed/6SG97Ud7OVo?rel=0&amp;controls=1&amp;autoplay=1&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen="" title="Fighting Hunger One Search at a Time, RippleSearch.com"></iframe></div>
        <h4 class="heading-15">Help Us Reach 50,000 Meals!<br>Just by joining our email community we will provide 7 meals.</h4>
        <div class="w-form" <?php if (isset($_SESSION[SITE])) {?> style="display: none;" <?php } ?> >
          <form id="form_join" name="email-form" data-name="Email Form" method="post" >
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="w-input" maxlength="256" name="firstname" data-name="Name" placeholder="First Name" id="first_name" required="">
              </div>              
              <div class="col-md-6">
                <input type="text" class="w-input" maxlength="256" name="lastname" data-name="Name" placeholder="Last Name" id="last_name" required="">
              </div>              
            </div>
            <input type="email" class="w-input" maxlength="256" name="email" data-name="Email" placeholder="Email Address" id="email" required="">
            <input type="text" class="w-input" maxlength="256" name="ref_code" hidden value="<?php echo $ref_code;?>" >
            <div class="row">
              <div class="col-md-6">
                <input type="password" class="w-input" maxlength="256" name="password" data-name="Password" placeholder="Password" id="password" required="">
              </div>              
              <div class="col-md-6">
                <input type="password" class="w-input" maxlength="256" name="password_conf" data-name="Password" placeholder="Confirm Password" id="password_conf" required="">
              </div>              
            </div>
            <input id="btn_join" type="submit" value="Join Today and Start Making Ripples!" data-wait="Please wait..." class="submit-button-2 w-button">
          </form><br>
            <p id="join_msg" style="color: red; text-align: center; display: none;"></p>
        </div>
      </div>
    </div>
  </div>
  <div id="howitworks" class="how-it-works wf-section">
    <div class="w-container">
      <h2 class="heading-2-center">It&#x27;s Easy to Make Ripples<br></h2>
      <div class="div-block-2"></div>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="column w-col w-col-4"><img src="<?php echo base_url().'assets/';?>images/icon-1-300x300.png" loading="lazy" alt="" class="image">
          <p class="paragraph-3">Start your web searches using Ripple Search.</p>
        </div>
        <div class="column-6 w-col w-col-4"><img src="<?php echo base_url().'assets/';?>images/icon-2-300x300.png" loading="lazy" alt="" class="image">
          <p class="paragraph-3">We refer you to Yahoo&#x27;s search feed where ads generate revenue.</p>
        </div>
        <div class="w-col w-col-4"><img src="<?php echo base_url().'assets/';?>images/icon-3-1-300x300.png" loading="lazy" alt="" class="image">
          <p class="paragraph-3">After operating costs, this funds food &amp; water sustainability projects around the world.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-5 wf-section">
    <div class="w-container">
      <h2 class="heading-3">Just 5 searches generate enough revenue for us to provide 1 meal through <a href="https://www.feedingamerica.org/">Feeding American</a> or a week&#x27;s worth of clean water for someone.</h2>
    </div>
  </div>
  <div id="impact" class="section-6 wf-section">
    <div class="container-5 w-container">
      <div class="columns w-row">
        <div class="w-col w-col-6"><img src="<?php echo base_url().'assets/';?>images/map2.png" loading="lazy" srcset="<?php echo base_url().'assets/';?>images/map2-p-500.png 500w, <?php echo base_url().'assets/';?>images/map2-p-800.png 800w, <?php echo base_url().'assets/';?>images/map2-p-1080.png 1080w, <?php echo base_url().'assets/';?>images/map2.png 1574w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 339px, 445px" alt=""></div>
        <div class="column-2 w-col w-col-6">
          <h2 class="heading-2">We Are Making Ripples World Wide<br></h2>
          <div class="div-block-2-copy-copy"></div>
          <p class="paragraph-2">Our community has already helped to fund over <a href="https://www.kiva.org/lender/whogivesacup" class="link-8">150 projects around the world.</a> Fighting hunger one family at a time by funding personal and community agricultural, food, and small business microloan projects.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-6-copy wf-section">
    <div class="w-container">
      <div class="columns-2 w-row">
        <div class="column-3 w-col w-col-6">
          <h2 class="heading-2">Marivic’s Story - We are More than a Search Platform<br></h2>
          <div class="div-block-2-copy-copy"></div>
          <p class="paragraph-2">Marivic, a mother of three and rice farmer of 17 years. She lives in a low income community in the Philippines but is focused on providing more for both her family and surrounding community. Through her desire, we were able to help fund her farm&#x27;s growth through one of our field partners.  This project not only benefited Marivic’s family but also her community.<br><br>We are creating ripples positively impacting lives: one person, one family, one village, one search at a time.</p>
        </div>
        <div class="w-col w-col-6"><img src="<?php echo base_url().'assets/';?>images/img3-min.png" loading="lazy" srcset="<?php echo base_url().'assets/';?>images/img3-min-p-500.png 500w, <?php echo base_url().'assets/';?>images/img3-min.png 777w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 339px, 445px" alt="" class="image-2"></div>
      </div>
    </div>
  </div>
  <div class="section-6 wf-section">
    <div class="w-container">
      <div class="columns w-row">
        <div class="w-col w-col-6 w-col-medium-6"><img src="<?php echo base_url().'assets/';?>images/img4-min.png" loading="lazy" srcset="<?php echo base_url().'assets/';?>images/img4-min-p-500.png 500w, <?php echo base_url().'assets/';?>images/img4-min.png 792w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 339px, 445px" alt="" class="image-3"></div>
        <div class="column-2 w-col w-col-6 w-col-medium-6">
          <h2 class="heading-2">Why Use Ripple Search?<br></h2>
          <div class="div-block-2-copy-copy"></div>
          <p class="paragraph-2">Each search does so many more good things.</p>
          <ul role="list" class="list">
            <li>
              <h4 class="heading-4">Hunger and Poverty<br></h4>
              <p class="paragraph-2">We are fighting hunger by empowering those most in need to thrive.</p>
            </li>
            <li>
              <h4 class="heading-4">Water and Education<br></h4>
              <p class="paragraph-2">By providing clean water we are enhancing a family&#x27;s health with less sickness and opportunity for school.</p>
            </li>
            <li>
              <h4 class="heading-4">Community and Employment<br></h4>
              <p class="paragraph-2">Our land revitalization projects are run by the local villagers, providing both jobs and communal ownership.</p>
            </li>
            <li>
              <h4 class="heading-4">Environment<br></h4>
              <p class="paragraph-2">Many of our sustainability projects revitalize soil, reforest with fruit trees, and cleans waterways.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-6-copy wf-section">
    <div class="w-container">
      <div class="columns-2 w-row">
        <div class="column-3 w-col w-col-6">
          <h2 class="heading-2">A 6 Year Old&#x27;s Dream<br></h2>
          <div class="div-block-2-copy-copy"></div>
          <p class="paragraph-2">Spending her Thursday afternoons serving at the largest food pantry in Delaware, Eleanor grew a passion for helping others. At the age of six she asked her father if she could make an app. When he asked what the app would do she excitedly replied &quot;feed hungry children!&quot; <br><br>After 5 years of visioning, brainstorming, developing, and sharing the idea with others, Eleanor and her father decided to partner with some amazing companies to make this dream a reality. And Ripple Search was born, the app that takes your everyday web usage and turns it into part of the solution for fighting global hunger.</p>
        </div>
        <div class="w-col w-col-6"><img src="<?php echo base_url().'assets/';?>images/eleanor-min-min.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 339px, 445px" srcset="<?php echo base_url().'assets/';?>images/eleanor-min-min-p-500.png 500w, <?php echo base_url().'assets/';?>images/eleanor-min-min.png 777w" alt="" class="image4"></div>
      </div>
    </div>
  </div>
  <div class="section-8 wf-section">
    <div class="container-4 w-container">
      <h2 class="heading-2-center-white">It&#x27;s Easy to Make Ripples<br></h2>
      <div class="divider"></div>
      <p class="paragraph-4">No need to visit RippleSearch.com to make an impact.<br>Download the browser extension and search through your browser’s address bar or by opening a new page.</p>
      <a href="#" class="button-2 w-button"><strong>Install Ripple Search Now</strong></a>
    </div>
  </div>
  <div class="section-5-copy wf-section">
    <div class="w-container">
      <h2 class="heading-3">No matter how small the action may seem, the power of your searches made through Ripple Search creates lasting ripples in the lives of so many around the world.</h2>
    </div>
    <div class="html-embed-2 w-embed w-script">
      <center>
        <script async="" src="https://eomail6.com/form/a9a1b262-0d78-11ed-9258-0241b9615763.js" data-form="a9a1b262-0d78-11ed-9258-0241b9615763"></script>
      </center>
    </div>
  </div>
  <div id="FAQ" class="wf-section">
    <div class="container-6 w-container">
      <h2 class="heading-faq">Why Use Ripple Search?<br></h2>
      <div class="faq-container">
        <div data-delay="0" data-hover="false" data-w-id="395c7bab-eca0-6ae0-fc66-e726d77cb943" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="text-block">Where do the funds go, and what do they benefit?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="395c7bab-eca0-6ae0-fc66-e726d77cb948" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">At the end of each month, we donate and fund projects with multiple nonprofits. Here are the three we focus on: <br><br>1. <a href="https://www.feedingamerica.org/" class="link-8">Feeding America</a> — Acquiring and distributing food to over 200 food banks and 60,000 food pantries to feed those in need in the United States.<br>2. <a href="https://cleanwaterforhaiti.org/" class="link-8">Clean Water for Haiti</a> — Creating both water filtration systems and jobs to maintain them in Haiti.<br>3. <a href="https://www.kiva.org" class="link-8">Kiva</a> — Funding life-changing projects worldwide through microloans that impact one family and community at a time.</p>
            </div>
          </nav>
        </div>
        <div data-delay="0" data-hover="false" data-w-id="e10e3738-9673-a67c-f19c-81e2f7f23257" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="text-block faq-title">How does Ripple Search get its funds?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="e10e3738-9673-a67c-f19c-81e2f7f2325c" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">Like other search platforms, revenue is generated through ads displayed alongside the search feed. <br><br>Through our search feed partnership with Yahoo, they give the majority of the revenue generated back to us. We use this revenue to fund both immediate needs like providing meals as well as fund both food and water sustainability projects all over the world through our 3rd party non-profits.</p>
            </div>
          </nav>
        </div>
        <div data-delay="0" data-hover="false" data-w-id="252ce417-3d2a-9777-ec81-3d599b8eb1fb" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="text-block faq-title">What portion of the revenue goes to fighting hunger?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="252ce417-3d2a-9777-ec81-3d599b8eb200" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">Right now 100% + matching donations from others with the same desire to fight hunger. Through partnerships with <a href="https://www.microsoft.com/en-us/startups?rtc=1" class="link-8">Microsoft&#x27;s Founders Hub</a> and a few individuals, our operating costs are covered til estimated Jan 2023.<br><br>After this timeframe all revenue after operating costs will go to fight hunger, our target is for it to be between 75% - 60% of all incoming revenue.<br></p>
            </div>
          </nav>
        </div>
        <div data-delay="0" data-hover="false" data-w-id="e10e3738-9673-a67c-f19c-81e2f7f23261" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="faq-title text-block">Why does it go to Yahoo instead of staying on Ripple Search?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="e10e3738-9673-a67c-f19c-81e2f7f23266" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">This was a hard decision, but our goal is to raise funds help end hunger. Creating our own search feed and ad partnerships would greatly reduce the funds we could generate to do this<br><br>Partnering with Yahoo allows you get the benefit of an already established and amazing search engine and we get the benefit of their ad network and partners, drastically increasing the amount of funds we can raise.</p>
            </div>
          </nav>
        </div>
        <div data-delay="0" data-hover="false" data-w-id="e10e3738-9673-a67c-f19c-81e2f7f2326c" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="text-block">Where did the idea of Ripple Search come from?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="e10e3738-9673-a67c-f19c-81e2f7f23271" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">In January 2016, my then six-year-old daughter informed me she wanted to create an app that would feed hungry children. At first I thought that was just her being sweet, but over time she kept asking when we were going to make it. We started dreaming more of what it would look like, and 5 years later in partnership with , Ripple Search was born.</p>
            </div>
          </nav>
        </div>
        <div data-delay="0" data-hover="false" data-w-id="51040f1f-16bd-6909-bf1e-0a65d435c54a" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="text-block">Who is behind Ripple Search?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="51040f1f-16bd-6909-bf1e-0a65d435c54f" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">
                <a href="https://www.whogivesacup.com" class="link-8">Who Gives A Cup LLC</a> oversees the development and promotion of Ripple Search. Who Gives A Cup is a social enterprise focused on developing products in the quickly growing app industry to generate revenue for good. After deducting operating costs, all funds generated by Who Gives A Cup are used for both providing meals and funding sustainability projects.
              </p>
            </div>
          </nav>
        </div>
        <div data-delay="0" data-hover="false" data-w-id="75594518-0314-8471-10b5-070b12423841" style="height:80PX" class="faq-p w-dropdown">
          <div class="faq w-dropdown-toggle">
            <div class="faq-img w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 363 363" style="enable-background:new 0 0 363 363;" xml:space="preserve" width="100%" height="100%">
                <g>
                  <path d="M277.73,94.123c0,10.997-8.006,17.685-13.852,22.593c-2.214,1.859-6.335,5.251-6.324,6.518  c0.04,4.97-3.956,8.939-8.927,8.939c-0.025,0-0.05,0-0.075,0c-4.936,0-8.958-3.847-8.998-8.792  c-0.079-9.747,7.034-15.584,12.75-20.383c4.485-3.766,7.426-6.416,7.426-8.841c0-4.909-3.994-8.903-8.903-8.903  c-4.911,0-8.906,3.994-8.906,8.903c0,4.971-4.029,9-9,9s-9-4.029-9-9c0-14.834,12.069-26.903,26.904-26.903  C265.661,67.253,277.73,79.288,277.73,94.123z M248.801,140.481c-4.971,0-8.801,4.029-8.801,9v0.069  c0,4.971,3.831,8.966,8.801,8.966s9-4.064,9-9.035S253.772,140.481,248.801,140.481z M67.392,203.174c-4.971,0-9,4.029-9,9  s4.029,9,9,9h0.75c4.971,0,9-4.029,9-9s-4.029-9-9-9H67.392z M98.671,203.174c-4.971,0-9,4.029-9,9s4.029,9,9,9h0.749  c4.971,0,9-4.029,9-9s-4.029-9-9-9H98.671z M363,59.425v101.301c0,23.985-19.232,43.448-43.217,43.448H203.066  c-2.282,0-4.161-0.013-5.733-0.046c-1.647-0.034-3.501-0.047-4.224,0.033c-0.753,0.5-2.599,2.191-4.378,3.83  c-0.705,0.649-1.503,1.363-2.364,2.149l-33.022,30.098c-2.634,2.403-6.531,3.025-9.793,1.587c-3.262-1.439-5.552-4.669-5.552-8.234  v-95.417H43.72c-14.062,0-25.72,11.523-25.72,25.583v101.301c0,14.061,11.659,25.116,25.72,25.116h130.374  c2.245,0,4.345,1.031,6.003,2.545L207,317.523v-85.539c0-4.971,4.029-9,9-9s9,4.029,9,9v105.938c0,3.565-2.04,6.747-5.303,8.186  c-1.167,0.515-2.339,0.718-3.566,0.718c-2.204,0-4.378-0.905-6.069-2.449l-39.457-36.204H43.72c-23.986,0-43.72-19.13-43.72-43.116  V163.757c0-23.985,19.734-43.583,43.72-43.583H138V59.425c0-23.986,19.885-43.251,43.871-43.251h137.913  C343.768,16.174,363,35.439,363,59.425z M345,59.425c0-14.061-11.157-25.251-25.217-25.251H181.871  C167.81,34.174,156,45.364,156,59.425v69.833v83.934l18.095-16.353c0.838-0.765,1.777-1.465,2.462-2.097  c8.263-7.614,10.377-8.831,21.155-8.609c1.47,0.031,3.221,0.042,5.354,0.042h116.717c14.06,0,25.217-11.388,25.217-25.448V59.425z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#ffffff"></path>
                </g>
              </svg></div>
            <div class="text-block">How can I support Ripple Search?</div>
            <div data-is-ix2-target="1" class="faq-icon" data-w-id="75594518-0314-8471-10b5-070b12423846" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/62a0cc546c90eaab393145c9/62a0cc556c90ea609a31461d_plus-to-x-white.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0"></div>
          </div>
          <nav class="faq-body w-dropdown-list">
            <div class="faq-body-cont">
              <p class="faq-answer paragraph-2">You can support us through your web searches or by purchasing items from our online app store (coming soon). You can also become a sponsor of Ripple Search and get a sponsored email or series sent to our list. <a href="contact.html" class="link-8">Contact us</a> to learn more.</p>
            </div>
          </nav>
        </div>
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
  
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script type="text/javascript">
        $(document).ready(function() {
          var url_signup = "<?php echo base_url().'home/do_signup';?>";
            $('#form_join').submit(function(e) {
                e.preventDefault();
                var pass = $('#password').val();
                var pass_conf = $('#password_conf').val();
                if (pass != pass_conf) {
                  $('#join_msg').html("Password doesn't match!");
                  $('#join_msg').css('color', 'red');
                  $('#join_msg').css('display', 'block');
                  return;
                }
              $('#btn_join').attr("disabled", true);
              $('#join_msg').css('display', 'none');
                $.ajax({
                    type: "POST",
                    url: url_signup,
                    data: $(this).serialize(),
                    success: function(res) {
                      console.log(res);
                      $('#btn_join').attr('disabled', false);
                        if (res == 200) {
                          $('#join_msg').html('Successfully joined!');
                          $('#join_msg').css('color', 'green');
                          setTimeout(function() {
                              window.location.replace("<?php echo base_url().'home/thankyou';?>");
                          }, 1000);
                        }
                        else {
                          $('#join_msg').html('Email already exists!');
                          $('#join_msg').css('color', 'red');
                        }
                        $('#join_msg').css('display', 'block');
                    }
                });
            });

        });
    </script>
