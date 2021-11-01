<!DOCTYPE html>
<html>    
    <head>
        <title>Voluntold</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body id="body" onload="document.getElementById('defaultOpen').click();">
        <div id="header">
            VOLUNTOLD
        </div>
        <!-- Tab links source: https://www.w3schools.com/howto/howto_js_tabs.asp -->
        <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
        <button class="tablinks" onclick="openCity(event, 'SignIn')">Sign In</button>
        <button class="tablinks" onclick="openCity(event, 'SignUp')">Sign Up</button>
        </div>

        <!-- Tab content -->
        <div id="Home" class="tabcontent">
            <!-- Search bar -->
            <input id="searchBar" placeholder="Search for opportunities...">
            <button id="search"> Search </button>
        </div>

        <div id="advSearch">
            <input type="radio" id="advSearch" name="advSearch" value="advSearch" onclick="openAdvSearch()">
            <label for="advSearch">Advanced Search</label><br>
        </div>

        <div id="advSearchElements" class="row" style="display: none;">
            <div id="interests" class="column">
                <p>Interests:</p>
                <div id="checkboxes">
                    <input type="checkbox" id="animals" name="animals" value="animals">
                    <label for="animals"> Animals</label><br>
                    <input type="checkbox" id="healthcare" name="healthcare" value="healthcare">
                    <label for="healthcare"> Healthcare</label><br>
                    <input type="checkbox" id="religion" name="religion" value="religion">
                    <label for="religion"> Religion</label><br>
                    <input type="checkbox" id="nature" name="nature" value="nature">
                    <label for="nature"> Nature</label><br>
                </div>
            </div>
            <div id="maxDistance" class="column">
                <p>Max Distance:</p>
                <div id="checkboxes">
                    <input type="checkbox" id="fiveMiles" name="fiveMiles" value="fiveMiles">
                    <label for="fiveMiles"> 5 Miles</label><br>
                    <input type="checkbox" id="fifteenMiles" name="fifteenMiles" value="fifteenMiles">
                    <label for="fifteenMiles"> 15 Miles</label><br>
                    <input type="checkbox" id="twentyfiveMiles" name="twentyfiveMiles" value="twentyfiveMiles">
                    <label for="twentyfiveMiles"> 25 Miles</label><br>
                    <input type="checkbox" id="fiftyMiles" name="fiftyMiles" value="fiftyMiles">
                    <label for="fiftyMiles"> 50 Miles</label><br>
                </div>
            </div>
            <div id="location" class="column">
                <p>Location:</p>
                <div id="checkboxes">
                    <input type="checkbox" id="inside" name="inside" value="inside">
                    <label for="inside"> Inside</label><br>
                    <input type="checkbox" id="outside" name="outside" value="outside">
                    <label for="outside"> Outside</label><br>
                </div>
            </div>
        </div>

        <div id="homeButtonsDiv">
            <button id="homeButton">Sign In</button>
            <button id="homeButton">Sign Up</button>
        </div>

        <div id="aboutUs">
            <h1>
                About Us
            </h1>
            <h2>
                We are awesome. That's all you need to know. (filler text)
            </h2>
        </div>

        <div id="SignIn" class="tabcontent">
        <h3>Sign in to be implemented as popup</h3>
        </div>

        <div id="SignUp" class="tabcontent">
        <h3>Sign up to be implemented as popup</h3>
        </div>


    </body>

    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
    }
        function openAdvSearch() {
            var x = document.getElementById("advSearchElements");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
        }
    </script>

</html>