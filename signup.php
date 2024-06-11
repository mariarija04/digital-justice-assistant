<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="signup">
            <h2>Sign Up</h2>
            <form action="signup.php" method="post">
                <input type="radio" name="userType" value="advocate" required> Advocate
                <input type="radio" name="userType" value="common" required> Common User
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="text" name="email" placeholder="Email" required>
                <div id="advocateFields" style="display: none;">
                    <input type="text" name="registrationNumber" placeholder="Advocate Registration Number">
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        const userTypeRadios = document.querySelectorAll('input[name="userType"]');
        const advocateFields = document.getElementById('advocateFields');

        userTypeRadios.forEach((radio) => {
            radio.addEventListener('change', function() {
                if (this.value === 'advocate') {
                    advocateFields.style.display = 'block';
                } else {
                    advocateFields.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
