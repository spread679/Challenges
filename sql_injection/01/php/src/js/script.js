function changeForm(btn) {
    var id = btn.id;
    var h2 = document.getElementById("secondary-title");
    var dynamicDiv = document.getElementById("dynamic-div");
    var usernameInput = document.getElementById("username");
    var passwordInput = document.getElementById("password");
    var statusOutput = document.getElementById("my-form-status");

    usernameInput.value = "";
    passwordInput.value = "";
    statusOutput.innerHTML = "";

    if (id == "login-button") {
        h2.innerHTML = "Log In";
        dynamicDiv.setAttribute("data-type", 0);
    } else if (id == "new-account-button") {
        h2.innerHTML = "New account";
        dynamicDiv.setAttribute("data-type", 1);
    } else {
        console.log("What are you tring to do?");
    }
};

window.addEventListener("load", (event) => {
    const sendInputButton = document.getElementById("send-button");
    const dynamicDiv = document.getElementById("dynamic-div");

    async function handleSubmit() {
        const xmlHttp = new XMLHttpRequest();
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var data = JSON.parse('{ "username": "' + username + '", "password": "' + password + '"}');
        
        xmlHttp.onreadystatechange = function() {
            const statusOutput = document.getElementById("my-form-status");
            var response = JSON.parse(this.responseText);

            if (response["code"] == 0) {
                statusOutput.innerHTML = response["msg"];
            } else {
                statusOutput.innerHTML = response["msg"];
            }
        }

        if (dynamicDiv.getAttribute("data-type") == 0) {
            xmlHttp.open("POST", "login.php");
        } else {
            xmlHttp.open("POST", "new_account.php");
        }
        xmlHttp.setRequestHeader("Content-Type", "application/json");
        console.log(data);
        xmlHttp.send(JSON.stringify({"username":username, "password":password}));
    }

    sendInputButton.addEventListener("click", handleSubmit);
});