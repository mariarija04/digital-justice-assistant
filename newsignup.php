<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="tealbg.jpg">
    <div class="container">
        <div class="signup">
            <h2>Sign Up</h2>
            <form method="post" action="server.php" id="signupForm">
                <div class="user-type">
                    <input type="radio" name="userType" value="advocate" id="advocateRadio" class="user-type-radio" required>
                    <label for="advocateRadio">Advocate</label>
                    <input type="radio" name="userType" value="general" id="generalRadio" class="user-type-radio" required>
                    <label for="generalRadio">General User</label>
                </div>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
                <div id="advocateFields" class="advocate-fields" style="display: none;">
                    <input type="text" name="registrationNumber" placeholder="Advocate Registration Number" required>
                </div>
                <button type="submit" id="signupButton" name="reg_user">Sign Up</button>
                <button type="button" onclick="goToMainPage()">Skip for now</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        const advocateRadio = document.getElementById("advocateRadio");
        const generalRadio = document.getElementById("generalRadio");
        const advocateFields = document.getElementById("advocateFields");
        const signupButton = document.getElementById("signupButton");

        advocateRadio.addEventListener("change", function () {
            if (advocateRadio.checked) {
                advocateFields.style.display = "block";
            } else {
                advocateFields.style.display = "none";
            }
        });

        generalRadio.addEventListener("change", function () {
            if (generalRadio.checked) {
                advocateFields.style.display = "none";
            }
        });

        function goToMainPage() {
            window.location.href = 'main-page.html';
        }

        signupButton.addEventListener("click", function (e) {
            e.preventDefault(); 
            alert("Sign up is completed");
            window.location.href = 'main-page.html';
        });
    </script>
</body>
</html>
