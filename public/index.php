<!doctype html>
<html style="overflow: hidden">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="canonical"
      href="https://pdubbssolutions.ca"
      name="Pdubbs Solutions"
    />
    <link
      rel="canonical"
      href="https://pdubbssolutions.com"
      name="Pdubbs Solutions"
    />
    <meta
      name="google-site-verification"
      content="BF8pc_URLQQbba5sQgIi_MVADChvuQJk0Pci3MhcWWc"
    />
    <script>
      if (window.location.hostname === "pdssolutions.web.app") {
        window.location.replace("https://pdubbssolutions.ca");
      }
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>
    <link rel="stylesheet" type="text/css" href="/src/static/styles.css" />
    <title>Pdubbs Solutions | Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
      rel="stylesheet"
    />
    <script defer src="/__/firebase/11.0.1/firebase-app-compat.js"></script>

    <script defer src="/__/firebase/init.js?useEmulator=true"></script>
  </head>
  <header>
    <img
      style="
        z-index: -999;
        position: relative;
        top: 15px;
        max-width: 200px;
        padding: 0;
        display: block;
        margin: 0 auto;
        cursor: pointer;
        max-height: 200px;
      "
      src="/src/static/images/Pdubbs-Logo.jpg"
      alt="logo"
      class="logo"
      onclick="goHome()"
    />
    <div class="dashboard-container">
      <div class="top-icon" style="display: none">
        <div class="small-icon-container">
          <div class="dashboard-icons">
            <div class="icons" onclick="goToPage(cart.html)">
              <script src="https://cdn.lordicon.com/lordicon.js"></script>
              <lord-icon
                src="/src/static/js/Shopping cart_custom_icon.json"
                trigger="hover"
                colors="primary:#aaafb2,secondary:#a8738a"
                style="width: 55px; height: 55px; cursor: pointer"
              ></lord-icon>
              <br />
              <p
                style="
                  position: absolute;
                  top: 5px;
                  text-align: center;
                  right: 0px;
                  white-space: nowrap;
                "
                class="icon-label cart"
                id="icon-label"
                name="cart"
              >
                View Cart
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h1
        class="headingText"
        style="
          text-align: center;
          font-size: 2rem;
          margin-top: -15px;
          padding: 0;
        "
      >
        <span>Welcome to your Dashboard!</span>
      </h1>
    </div>
  </header>
  <body>
    <?php echo "This is PHP code"?>    
    <nav>
      <div class="icon-container">
        <div class="dashboard-icons">
          <div
            class="icons"
            onclick="goToPage('src\static\pages\products.html')"
          >
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
              src="/src\static\pages\js\products_custom_icon.json"
              trigger="hover"
              colors="primary:#a8738a,secondary:#aaafb2"
              style="width: 65px; height: 60px; top: 5px; cursor: pointer"
            >
            </lord-icon>
            <p class="icon-label products" id="icon-label1" name="products">
              Prodcuts
            </p>
          </div>
        </div>
        <div class="dashboard-icons">
          <div
            class="icons"
            onclick="goToPage('src\static\pages\contact.html')"
          >
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/amjaykqd.json"
              trigger="hover"
              colors="primary:#aaafb2,secondary:#a8738a"
              style="width: 60px; height: 60px; top: 4px; cursor: pointer"
            >
            </lord-icon>
            <p class="icon-label contact-us" id="icon-label2" name="contact">
              Contact
            </p>
          </div>
        </div>
        <div class="dashboard-icons">
          <div
            class="icons"
            onclick="goToPage('/src\static\pages\projects.html')"
          >
            <script src="/src\static\pages\js\Folder open_custom_icon.json"></script>
            <lord-icon
              src="/src\static\pages\js\Folder open_custom_icon.json"
              trigger="hover"
              colors="primary:#aaafb2,secondary:#a8738a"
              style="
                width: 60px;
                height: 60px;
                top: 4px;
                margin-bottom: 0;
                cursor: pointer;
              "
            >
            </lord-icon>
            <p class="icon-label projects" id="icon-label3" name="projects">
              Projects
            </p>
          </div>
        </div>
        <div class="dashboard-icons">
          <div
            class="icons"
            onclick="goToPage('$reports.php')"
          >
            <script src="/src\static\pages\js\Bar graph_custom_icon.json"></script>
            <lord-icon
              src="/src\static\pages\js\Bar graph_custom_icon.json"
              trigger="hover"
              colors="primary:#a8738a;"
              style="width: 60px; height: 60px; cursor: pointer"
            >
            </lord-icon>
            <p class="icon-label reports" id="icon-label4" name="reports">
              Reports
            </p>
          </div>
        </div>
        <div class="dashboard-icons">
          <div
            class="icons"
            onclick="goToPage('/src\static\pages\templates.html')"
          >
            <script src="/src\static\pages\js\templates_custom_icon.json"></script>
            <lord-icon
              src="/src\static\pages\js\templates_custom_icon.json"
              trigger="hover"
              colors="primary:#a8738a,secondary:#aaafb2"
              style="width: 60px; height: 60px; cursor: pointer"
            >
            </lord-icon>
            <p
              style="text-align: center; right: 255px"
              class="icon-label templates"
              id="icon-label5"
              name="templates"
            >
              Templates
            </p>
          </div>
        </div>
      </div>
    </nav>
    <br /><br /><br /><br /><br />
    <br />
    <div class="filter-container">
      <div class="filter-item">
        <h2 slass="formHeader" onclick="toggleForm()">
          Submit a Custom Request
          <span style="color: #a8738a" class="arrow">➤</span>
        </h2>
        <section
          id="custom-request"
          class="form-container"
          style="display: none"
        >
          <div id="requestDocument" class="form-container">
            <form
              action="/requestDocument"
              method="POST"
              enctype="multipart/form-data"
            >
              <input
                type="text"
                name="first-name"
                autocomplete="given-name"
                placeholder="First Name"
                required
              /><br />
              <input
                type="text"
                name="last-name"
                autocomplete="family-name"
                placeholder="Last Name"
                required
              /><br />
              <input
                type="number"
                autocomplete="tel"
                name="phoneNumber"
                placeholder="Phone Number"
                required
              /><br />
              <input
                type="email"
                autocomplete="email"
                name="email"
                placeholder="Email Address"
                required
              /><br />
              <textarea
                style="width: 70%"
                id="requestDocument1"
                name="details"
                placeholder="Customization details"
                required
              ></textarea
              ><br />
              <input
                style="cursor: pointer"
                id="choose-file"
                type="file"
                name="document"
                required
              /><br />
              <button id="dashboardSubmit" type="submit">
                Submit Custom Request
              </button>
            </form>
          </div>
        </section>
      </div>
    </div>
    <div class="filter-container">
      <div class="filter-item">
        <h2 class="formHeader1" onclick="toggleForm()">
          Book a 1:1 Zoom Session
          <span style="color: #a8738a" class="arrow">➤</span>
        </h2>
        <section id="book-session" class="form-container" style="display: none">
          <div id="requestSession">
            <form
              action="/requestSession"
              method="POST"
              enctype="multipart/form-data"
            >
              <input
                type="text"
                name="first-name"
                autocomplete="given-name"
                placeholder="First Name"
                required
              /><br />
              <input
                type="text"
                name="last-name"
                autocomplete="family-name"
                placeholder="Last Name"
                required
              /><br />
              <input
                type="email"
                autocomplete="email"
                name="email"
                placeholder="Email Address"
                required
              /><br />
              <input type="date" name="date" required /><br />
              <input type="time" name="time" required /><br />
              <div id="sessionOptions">
                <select class="sessionOptions" name="sessionOptions">
                  <option value="single">Single Session</option>
                  <option value="recurring">Request Recurring Sessions</option>
                </select>
              </div>

              <button id="dashboardSubmit1" type="submit">
                Book 1:1 Zoom Session
              </button>
            </form>
          </div>
        </section>
      </div>
    </div>
    <div class="filter-container">
      <div class="filter-item">
        <h2 class="formHeader2" onclick="togglePartnershipForm()">
          Request a Client &amp; Vendor Partnership
          <span style="color: #a8738a" class="arrow"> ➤ </span>
        </h2>
        <section id="partnership" class="form-container" style="display: none">
          <div id="requestPartnership">
            <form action="/requestPartnership" method="POST">
              <input
                type="text"
                autocomplete="organization"
                name="companyName"
                placeholder="Company Name"
                required
              /><br />
              <input
                type="text"
                autocomplete="street-address"
                name="companyAddress"
                placeholder="Provide your Business Address"
                required
              /><br />
              <input
                type="email"
                autocomplete="email"
                name="email"
                placeholder="Email Address"
                required
              /><br />
              <textarea
                id="recurringTextarea1"
                name="message"
                placeholder="Partnership Details"
                required
              ></textarea
              ><br />
              <button id="dashboardSubmit2" type="submit">
                Submit Partnership Request
              </button>
            </form>
          </div>
        </section>
      </div>
    </div>
    <footer>
      <br />
      <div
        style="display: inline; margin-top: 0px; text-decoration: none"
        class="auth-buttons"
      >
        <a href="/src\static\pages\login.ejs">Login</a> |
        <a href="/src\static\pages\register.ejs">Register</a> |
        <a href="/src\static\pages\contact.php">Contact</a> |
        <a href="/src/static/pages/cart.php">Cart</a>
      </div>
      <br />
      <div class="ref-buttons">
        <a
          style="font-size: 12px; text-decoration: none; color: #aaafb2"
          href="/src\static\pages\termsandconditions"
          >Terms and Conditions</a
        >
        |
        <a
          style="font-size: 12px; text-decoration: none; color: #aaafb2"
          href="/src\static\pages\accessibility"
          >Accessibility</a
        >
        |
        <a
          style="font-size: 12px; text-decoration: none; color: #aaafb2"
          href="/src\static\pages\sources"
          >Sources</a
        >
        |
        <a
          style="font-size: 12px; text-decoration: none; color: #aaafb2"
          href="/src/static/pages/csspolicy"
          >Policies &amp; Procedures</a
        >
      </div>
      <span style="display: inline; margin-top: 20px"
        >Pdubbs Solutions | Administrative &amp; Project Management
        Services</span
      ><br />
      <div
        style="
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
          text-align: center;
        "
      ></div>
      <img
        style="
          justify-content: center;
          max-width: 100px;
          padding: 0;
          max-height: 100px;
          left: 360px;
          margin-top: -20px;
          cursor: pointer;
          z-index: -999;
          vertical-align: middle;
          position: absolute;
        "
        src="/src/static/images/Pdubbs-Logo.jpg"
        alt="logo"
        class="logo"
        id="footer-logo"
        onclick="goHome()"
      />
    </footer>
    <script type="text/javascript" src="/src/index.mjs"></script>
    <script type="text/javascript" src="/src/app.js"></script>
    <script type="text/javascript" src="/src/static/js/express.js"></script>
    <script>
      function toggleTextarea() {
        var bookSession = document.getElementById("recurringTextarea");
        var sessionOptions = document.getElementById("sessionOptions");
        var recurringTextarea = document.getElementById("recurringTextarea");
        var partnership = document.getElementById("recurringTextarea1");
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
          if (arrow) arrow.textContent = "▼";
        } else {
          section.style.display = "none";
          if (arrow) arrow.textContent = "➤";
        }
      }

      document
        .querySelectorAll(".filter-section section")
        .forEach((section) => {
          section.style.display = "none";
        });
      document.querySelectorAll(".filter-item").forEach((item) => {
        item.addEventListener("click", function (event) {
          event.stopPropagation();
          toggleSection(item);
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const loadEl = document.querySelector("#load");

        try {
          let app = firebase.app();
          let features = [
            "auth",
            "database",
            "firestore",
            "functions",
            "messaging",
            "storage",
            "analytics",
            "remoteConfig",
            "performance",
          ].filter((feature) => typeof app[feature] === "function");
          loadEl.textContent = `Firebase SDK loaded with ${features.join(", ")}`;
        } catch (e) {
          console.error(e);
          loadEl.textContent =
            "Error loading the Firebase SDK, check the console.";
        }
      });
    </script>
  </body>
</html>
