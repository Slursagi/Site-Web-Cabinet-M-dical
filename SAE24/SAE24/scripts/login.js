function login() {
    const user = document.getElementById('user').value;
    const pass = document.getElementById('pass').value;
    if (user === "admin" && pass === "admin") {
        window.location.href = "private.html";
        return false;
    } else {
        document.getElementById('error').textContent = "Identifiants incorrects.";
        return false;
    }
}
