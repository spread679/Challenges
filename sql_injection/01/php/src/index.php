<!DOCTYPE html>
<html>
    <head>
        <title>SQL Injection</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="background-container">
            <div class="container">
                <h1 id="title">Log in SQL injecter</h1>

                <div id="buttons-container">
                    <button id="login-button" onclick="changeForm(this)">Log In</button>
                    <button id="new-account-button" onclick="changeForm(this)">Create a new account</button>
                </div>

                <h2 id="secondary-title">Log In</h2>

                <div id="dynamic-div" data-type="0">
                    <div>
                        <label for="username">Username:</label>
                        <input id="username" name="username" type="text" placeholder="Username" />
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input id="password" name="password" type="password" />
                    </div>

                    <input id="send-button" type="submit"/>
                    <p id="my-form-status"></p>
                </div>
            </div>
        </div>
        

        <form>

        </form>

        <script src="js/script.js"></script>
    </body>
    
</html>