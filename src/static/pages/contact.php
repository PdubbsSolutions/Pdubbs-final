<!DOCTYPE html>
<htm style="overflow: hidden;">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE-edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="refresh" content="url=https://pdssolutions.web.app" name="Pdubbs Solutions">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link rel="stylesheet"  type="text/css" href="/src\static\styles.css" />
      <title>Pdubbs Solutions | Contact</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
      <div class="navbar"><a href="/public/app/index.php" >Home</a></div>
      <div class="back" onclick="goBackOrDashboard()">Back</div>
    </head>
    <body> 
      <?php echo "This is php code"; ?>
   <header>
      <img style="z-index: -999; position: relative; top: 15px; max-width: 200px; padding: 0; display: block; margin: 0 auto; cursor: pointer; max-height: 200px;" src="/src/static/images/Pdubbs-Logo.jpg" alt="logo" class="logo" onclick="goHome()" />
  </header>
   <div class="contact-container">
      <h1 class="headingText"><span> Contact Us</span></h1>
         <form id="contactForm">
            <label for="first-name"></label>
            <input type="text" id="first-name" name="first-name" autocomplete="given-name" placeholder="First Name" required/>
            <label for="last-name"></label>
            <input type="text" id="last-name" name="last-name" autocomplete="family-name" placeholder="Last Name" required/>
            <label for="businessSize"></label>
            <select onmouseover="highlightOptions()" onmouseout="removeHighlight()" id="businessSize" name="businessSize" onchange="toggleTextBox()" required>
               <option value=" " disabled selected hidden>Choose the option that best reflects the size of your Business </option>
               <option value="small">Small Enterprises | 1 - 100 employees</option>
               <option vlaue="medium">Medium-sized Enterprises | 101 - 499 employees</option>
               <option value="large">Large Enterprises | 500+ employees </option>
               <option value="other">I am completing this form to contact PDubbs Solutions</option>
               <option value="other-size">Other (Please Specify)</option>
            </select>
            <input type="text" id="otherDetailsInput" style="display:none; margin-top:10px;" placeholder="Please specify the size of your Business.">
            <label for="priority"></label>
            <select onmouseover="highlightOptions()" onmouseout="removeHighlight()" id="priority" name="priority" onchange="toggleTextBox()" required>
               <option value="" disabled selected hidden>Choose Priority for Project Completion &amp; Service Requests</option>
               <option value="low">Low Priority | 20 - 30 Business Days</option>
               <option value="medium">Medium Priority | 10 - 19 Business Days</option>
               <option value="high">High Priority | 7 Business Days or Less</option>
               <option value="other">I am completing this form to contact PDubbs Solutions</option>
               <option value="details">Other (Please Specify)</option>
           </select>
           <input type="text" id="otherDetailsInput1" style="display:none; margin-top:10px;" placeholder="Please specify the urgency of your contact request">
           <lablel for="message"></lablel>
           <textarea type="message" id="message" name="message" placeholder="Enter  Message for Pdubbs Solutions here:" rows="1.3rem" required></textarea>
           <label>
            <input  style="display:flex;  cursor: pointer; position:absolute; align-items: left;" type="checkbox" id="agreement" required><p style="font-size: 14px;  text-align: left; display:flex; position:relative; cursor: pointer;"> I,  <span id="userName"> </span>agree to be contacted by PDubbs Solutions</p></label>
            <button style="display: block; margin-top: 30px;" type="submit">Submit</button>
            </form>
            <div id="confirmationMessage" style="display:none;">
               <p class="content-paragraph">thank you, <span id="submittedName"></span>! PDubbs Solutions will respond to your request within 0-2 business days.</p>
            </div>    
         </div>
   <script type="text/javascript" src="/src/index.mjs"></script>
   <script type="text/javascript" src="/src/app.js"></script>
   <script type="text/javascript" src="/src/static/js/express.js"></script><br>
   <footer> 
   <div class="ref-buttons">
      <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="termsandconditions.php">Terms and Conditions</a> |
      <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="accessibility.php">Accessibility</a> |
      <a style="font-size: 12px; text-decoration: none; color:#aaafb2;" href="sources.php">Sources</a>
      | <a style="font-size:12px; text-decoration:none; color:#aaafb2;" href="/src/static/pages/csspolicy.php">Policies</a> | <a style="font-size:12px; text-decoration:none; color:#aaafb2;" href="/src/static/pages/cssprocedure.php"> Procedures</a>
   </div>
   <span style="display:inline; margin-top: 20px;" >Pdubbs Solutions |  Administrative &amp; Project Management Services</span><br>
   <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;"></div>
   <img style=" justify-content:center; max-width: 100px; padding: 0; max-height: 100px; left: 380px;margin-top: -20px; cursor: pointer;  z-index: -999; vertical-align: middle;  position:absolute;" src="/src/static/images/Pdubbs-Logo.jpg" alt="logo" class="logo" id="footer-logo" onclick="goHome()" />
   </footer>
</body>
</htm>