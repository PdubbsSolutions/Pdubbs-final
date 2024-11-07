<!DOCTYPE html>
<!DOCTYPE html>
<html style="overflow: hidden;">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE-edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="canonical" href="https://pdubbssolutions.ca" name="Pdubbs Solutions">
   <link rel="canonical" href="https://pdubbssolutions.com" name="Pdubbs Solutions">
   <meta name="google-site-verification" content="BF8pc_URLQQbba5sQgIi_MVADChvuQJk0Pci3MhcWWc" />
   <script>
      if (window.location.hostname === "pdssolutions.web.app") {
         window.location.replace("https://pdubbssolutions.ca");
      }
   </script>
   <script src="https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
   <script defer src="/__/firebase/init.js?useEmulator=true"></script>
   <link rel="stylesheet" type="text/css" href="/src/static/styles.css" />
   <title>Pdubbs Solutions | Policies</title>
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000& display=swap"
      rel="stylesheet" />
   </head>
   <body>
   <?php echo "This is php code"; ?>
      <header>
         <img
            style="z-index: -999; position: relative; top: 15px; max-width: 200px; padding: 0; display: block; margin: 0 auto; cursor: pointer; max-height: 200px;"
            src="/src/static/images/Pdubbs-Logo.jpg" alt="logo" class="logo" onclick="goHome()" />
      </header>
      <div class="container">
         <div class="box box-1">
             <h2 class="heading  heading-container active" id="heading-1">Accessing Downloadable Content</h2>
               <p class="content  content-paragraph " id="content-1">
                  <span style="font-size: 14px; color: olivedrab;" class="bold">1. Grant of License for Downloadable Content </span><br>Upon purchase or authorized access, the company grants a limited, non-transferable, non-exclusive license to download and use the content solely for personal, non-commercial use. Reproduction, distribution, or public display of the content without prior written consent is prohibited.<br><br>
                  <span style="font-size: 14px; color: olivedrab;" class="bold">2. Access and Availability</span><br>Access to downloadable content is provided via source links. The company reserves the right to restrict or revoke access to content in cases of suspected unauthorized sharing, resale, or violation of this policy.<br><br>
                  <span style="font-size: 14px; color: olivedrab;" class="bold">3. Intellectual Property</span><br>All downloadable content remains the intellectual property of the company. Unauthorized use, sharing, or modification of the content is strictly prohibited and may result in legal action.<br><br>
                  <span style="font-size: 14px; color: olivedrab;" class="bold">4. Technical Support</span><br>The company provides limited technical support for access issues related to downloadable content. Support inquireies can be directed to the company's customer service representative.<br>
               </p>
         </div>
             <h2 class="heading" id="heading-2">Account Registration &amp; Login</h2>
             <p class="content content-paragraph" id="content-2">Account Registration &amp; Login</p>
           
             <h2 class="heading" id="heading-3">Checkout &amp; Purchases</h2>
             <p class=" content content-paragraph" id="content-3">Checkout &amp; Purchases</p>

            <h2 class="heading" id="heading-4">Company Service Standards</h2>
            <p class="content content-paragraph" id="content-4">Company Service Standards</p>

            <h2 class="heading" id="heading-5">Customer Service Standards</h2>
            <p class="content content-paragraph" id="content-5">Customer Service Standards</p>

            <h2 class="heading" id="heading-6">Digital Products</h2>
            <p class="content content-paragraph" id="content-6">Digital Products</p>

            <h2 class="heading" id="heading-7">Our Standards ~ Pdubbs Solutions</h2>
            <p class="content content-paragraph" id="content-7">Our Standards</p>

            <h2 class="heading" id="heading-8">Payment Information Storage</h2>
            <p class="content content-paragraph" id="content-8">Payment Information Storage</p>

            <h2 class="heading" id="heading-9">Products &amp; Pricing</h2>
            <p class="content content-paragraph" id="content-9">Products &amp; Pricing</p>

            <h2 class="heading" id="heading-10">Refunds, Returns &amp; Cancellations</h2>
            <p class="content content-paragraph" id="content-10">Refunds, Returns, &amp; Cancellations</p>

            <h2 class="heading" id="heading-11">Zoom 1:1, Group Session, &amp; In-Person/Virtual</h2>
            <p class="content content-paragraph" id="content-11">Zoom 1:1, Group Sessions, &amp; In-Person/Virtual</p>
         </div>
     
   <script>
      const headings = document.querySelectorAll(".heading");

      document.addEventListener("click", function(event) {
      if (event.target.classList.contains('heading')) {
         const id = event.target.id.match(/\d+/)[0];
         const content = document.querySelector(`#content-${id}`);
         
         const isActive = event.target.classList.toggle('active');
         content.classList.toggle('active', isActive);
         const headings = document.querySelectorAll('.heading-container p');
         
         headings.forEach(heading => {
            const otherId = heading.id.match(/\d+/)[0];
            if (otherId !== id) {
            heading.classList.remove('active');
            document.querySelector(`#content-${otherId}`).classList.remove('active');
            heading.addEventListener('click', () => {
               heading.parentElement.classList.toggle('active');
            })
            }
         });
      }
      });   
</script>
      <footer>
         <br>
         <div style="display: inline; margin-top: 0px; text-decoration: none;"  class="auth-buttons"><a href="/src\static\pages\login.ejs">Login</a> | <a href="/src\static\pages\register.ejs">Register</a> | <a href="/src\static\pages\contact.php">Contact</a> | <a href="/src\static\pages\cart.php">Cart</a></div>
         <br>
         <div class="ref-buttons">
            <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="/src\static\pages\termsandconditions.php">Terms and Conditions</a> |
            <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="/src\static\pages\accessibility.php">Accessibility</a> |
            <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="/src\static\pages\sources.php">Sources</a> | <a style="font-size:12px; text-decoration:none; color:olivedrab;" href="/src/static/pages/csspolicy.php">Policies</a> | <a style="font-size:12px; text-decoration:none; color:#aaafb2;" href="/src/static/pages/cssprocedure.php"> Procedures</a>
         </div>
         <span style="display:inline; margin-top: 20px;" >Pdubbs Solutions |  Administrative &amp; Project Management Services</span><br>
         <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;"></div>
         <img style=" justify-content:center; max-width: 100px; padding: 0; max-height: 100px; left: 360px;margin-top: -20px; cursor: pointer;  z-index: -999; vertical-align: middle;  position:absolute;" src="/src/static/images/Pdubbs-Logo.jpg" alt="logo" class="logo" id="footer-logo" onclick="goHome()" />
      </footer>
   <script type="text/javascript" src="/src/index.mjs"></script>
   <script type="text/javascript" src="/src/app.js"></script>
   <script type="text/javascript" src="/src/static/js/express.js"></script>
   </body>
</html>