<!DOCTYPE html>
<html style="overflow: hidden;">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE-edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="canonical" href="https://pdubbssolutions.ca" name="Pdubbs Solutions">
      <link rel="canonical" href="https://pdubbssolutions.com" name="Pdubbs Solutions">
      <meta name="google-site-verification" content="BF8pc_URLQQbba5sQgIi_MVADChvuQJk0Pci3MhcWWc" />
      <script>
         if (window.location.hostname === "pdssolutions.web.app") {
           window.location.replace("https://pdubbssolutions.ca");
         }
      </script>
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <script defer src="/__/firebase/init.js?useEmulator=true"></script>
      <link rel="stylesheet"  type="text/css" href="/src/static/styles.css" />
      <title>Pdubbs Solutions | Accessibility</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
      <div style="margin-left: 655px;" class="navbar"><a href="/public\index.php">Home</a></div>
      <div style="margin-top: -25px;" class="back" onclick="goBackOrDashboard()">Back</div>
    </head>
<body>
  <?php echo "This is php code" ;?>
   <header>

       <img style="z-index: -999; position: relative; top: 15px; max-width: 200px; padding: 0; display: block; margin: 0 auto; cursor: pointer; max-height: 200px;" src="/src/static/images/Pdubbs-Logo.jpg" alt="logo" class="logo" onclick="goHome()" />
   </header>
   <div class="accessibility-container" style="scroll-behavior: smooth; scrollbar-color: inherit; display:inline; flex-direction: column; text-align: center;max-width:550px;">
      <h1 class="headingText"><span> Accessibilty Statement</span></h1><hr>
    <div class="accesibility" style="display:inline; flex-direction: column; text-align: center;max-width:550px;">
        <p class="content-paragraph"><br>
          <span class="bold">PDubbs Solutions </span> is commited to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relvant accessibility standards.
        </p><br>
        <h2 class="accessibilityHeading" id="accessibilityHeading">Efforts to Support Accessibility</h2>
        <p class="content-paragraph">PDubbs Solutions takes the following measures to ensure accessiblity:</p>
        <ul class="custom-list">
          <li>Continuous training for our team to improve accessibility.</li>
          <li>Conducting regular reviews and audits of our website content.</li>
          <li>Incorporating assistive technologies, like screen readers and keyboard navigation.</li>
        </ul><br>
        <h2 class="accessibilityHeading" id="accessibilityHeading1" >Feedback</h2>
        <p class="content-paragraph">We welcome your feedback on the accessibility of PDubbs Solutions. If you encounter any accessibility barriers, please contact us via <a href="/contact.html">this form</a> or at pdubbssolutions@gmail.com. </p><br>
        <h2 class="accessibilityHeading" id="accessibilityHeading2">Conformance Status</h2>
        <p class="content-paragraph">Our website aims too comply with WCAG 2.1 Level AA standards. We are continously working to meet these guidelines and imporve the accessibility of all our digital properties.</p>
      </div>
    </div>
    <footer>
      <br><hr>
      <div style="display: inline; margin-top: 0px; text-decoration: none;"  class="auth-buttons"><a href="/src\static\pages\login.ejs">Login</a> | <a href="/src\static\pages\register.ejs">Register</a> | <a href="/src\static\pages\contact.php">Contact</a> | <a href="/src\static\pages\cart.php">Cart</a></div>
      <br>
      <div class="ref-buttons">
         <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="/src\static\pages\termsandconditions.php">Terms and Conditions</a> |
         <a style="font-size: 12px; text-decoration: none; color:olivedrab;" href="/src\static\pages\accessibility.php">Accessibility</a> |
         <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="/src\static\pages\sources.php">Sources</a> | <a style="font-size:12px; text-decoration:none; color:#aaafb2;" href="/src/static/pages/csspolicy.php">Policies &amp; Procedures</a>
      </div>
      <span style="display:inline; margin-top: 20px;" >Pdubbs Solutions |  Administrative &amp; Project Management Services</span><br>
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;"></div>
      <img style=" justify-content:center; max-width: 100px; padding: 0; max-height: 100px; left: 360px;margin-top: -20px; cursor: pointer;  z-index: -999; vertical-align: middle;  position:absolute;" src="/src/static/images/Pdubbs-Logo.jpg" alt="logo" class="logo" id="footer-logo" onclick="goHome()" />
   </footer>
<script type="text/javascript" src="/src/index.mjs"></script>
<script type="text/javascript" src="/src/app.js"></script>
<script type="text/javascript" src="/src/static/js/express.js"></script>
<script>
   function toggleTextarea() {
       var sessionOptions = document.getElementById("sessionOptions");
       var recurringTextarea = document.getElementById("recurringTextarea");
       if (sessionOptions.value === "recurring") {
           recurringTextarea.style.display = "block";
       } else {
           recurringTextarea.style.display = "none";
       }
   }
   
   function toggleSection(element) {
       const section = element.querySelector("section");
       const arrow = element.querySelector(".arrow");
       if (section.style.display === "none" || section.style.display === " ") {
           section.style.display = "block";
           if (arrow) arrow.textContent= "▼";
       } else {
           section.style.display = "none";
           if (arrow) arrow.textContent = "➤";
       }
   }
   
   document.querySelectorAll(".filter-section section").forEach(section => { 
       section.style.display = "none";
   });
   document.querySelectorAll(".filter-item").forEach(item => {
       item.addEventListener("click", function(event){
           event.stopPropagation();
           toggleSection(item);
       });
   });
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
     const loadEl = document.querySelector('#load');
    
     try {
       let app = firebase.app();
       let features = [
         'auth', 
         'database', 
         'firestore',
         'functions',
         'messaging', 
         'storage', 
         'analytics', 
         'remoteConfig',
         'performance',
       ].filter(feature => typeof app[feature] === 'function');
       loadEl.textContent = `Firebase SDK loaded with ${features.join(', ')}`;
     } catch (e) {
       console.error(e);
       loadEl.textContent = 'Error loading the Firebase SDK, check the console.';
     }
   });
</script>
</body>
</html>     