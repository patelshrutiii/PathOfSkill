
<?php
require_once "connection.php";
?>
<?php
require_once "index.js";
?>

<style>
.fontpassword { 
            position: relative; 
        } 
          
        .fontpassword i{ 
            position: absolute; 
            left: 15px; 
            top: 40px; 
            color: gray; 
        } 
html,
body {
    width: 100%;
    height: 100%;
    overflow: hidden;
}


body {
    background: #f63;

}

.flake {
    position: absolute;
    width: 100px;
    height: 100px;
    background-size: cover;
}

.flake1 {
    background-image: url("https://assets.codepen.io/32887/flake1.svg")
}

.flake2 {
    background-image: url("https://assets.codepen.io/32887/flake2.svg");
}

.flake3 {
    background-image: url("https://assets.codepen.io/32887/flake3.svg");
}

.flake4 {
    background-image: url("https://assets.codepen.io/32887/flake4.svg");
}


body {
    background: #ED213A;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #93291E, #ED213A);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #93291E, #ED213A);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background: #f6f5f7;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: -20px 0 50px;
    margin-top: 20px;
}

h1 {
    font-weight: bold;
    margin: 0;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: .5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

.container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, .2), 0 10px 10px rgba(0, 0, 0, .2);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container form {
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #ddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

.form-container input {
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}

button {
    border-radius: 20px;
    border: 1px solid #ff4b2b;
    background: #ff445c;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(.95);
}

button:focus {
    outline: none;
}

button.ghost {
    background: transparent;
    border-color: #fff;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all .6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.sign-up-container {
    left: 0;
    width: 50%;
    z-index: 1;
    opacity: 0;
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform .6s ease-in-out;
    z-index: 100;
}

.overlay {
    background: #ff416c;
    background: linear-gradient(to right, #ff4b2b, #ff416c) no-repeat 0 0 / cover;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateY(0);
    transition: transform .6s ease-in-out;
}

.overlay-panel {
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateY(0);
    transition: transform .6s ease-in-out;
}

.overlay-right {
    right: 0;
    transform: translateY(0);
}

.overlay-left {
    transform: translateY(-20%);
}

/* Move signin to right */
.container.right-panel-active .sign-in-container {
    transform: translateY(100%);
}

/* Move overlay to left */
.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

/* Bring signup over signin */
.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}

/* Move overlay back to right */
.container.right-panel-active .overlay {
    transform: translateX(50%);
}

/* Bring back the text to center */
.container.right-panel-active .overlay-left {
    transform: translateY(0);
}

/* Same effect for right */
.container.right-panel-active .overlay-right {
    transform: translateY(20%);
}

.footer {
    margin-top: 25px;
    text-align: center;
}


.icons {
    display: flex;
    width: 30px;
    height: 30px;
    letter-spacing: 15px;
    align-items: center;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <!-- <input type="password" placeholder="confirm Password" /><i class="fa fa-eye "></i> -->
            <div class="fontpassword">   
            <input type="password"
                    placeholder="Enter Password"
                    name="psw" required>  
            <i id="eyee" class="fa fa-eye"></i> 
        </div>    
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="#">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<!-- <div class="footer">
<b>	Follow me on </b>
	<div class="icons">
		<a href="https://github.com/kvaibhav01" target="_blank" class="social"><i class="fab fa-github"></i></a>
		<a href="https://www.instagram.com/vaibhavkhulbe143/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
		<a href="https://medium.com/@vaibhavkhulbe" target="_blank" class="social"><i class="fab fa-medium"></i></a>
		<a href="https://twitter.com/vaibhav_khulbe" target="_blank" class="social"><i class="fab fa-twitter-square"></i></a>
		<a href="https://linkedin.com/in/vaibhav-khulbe/" target="_blank" class="social"><i class="fab fa-linkedin"></i></a>
		</div>
	</div> -->

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));

let numFlakes = 50
let width = window.innerWidth
let height = window.innerHeight

function createFlake() {
    let flake = document.createElement("div")
    let flakeClass = "flake flake" + gsap.utils.random(1, 4, 1)
    flake.setAttribute("class", flakeClass)
    document.body.appendChild(flake)
    return flake
}

function animateFlake(flake) {

    let scaleFactor = Power3.easeIn(Math.random()) //change to easeOut for more larger flakes
    let scale = gsap.utils.interpolate(0.3, 2, scaleFactor)
    let duration = gsap.utils.interpolate(2, 4, 1 - scaleFactor)
    let opacity = gsap.utils.interpolate(0.5, 1, scaleFactor)
    gsap.set(flake, {
        y: -200,
        x: gsap.utils.random(0, width),
        scale: scale,
        opacity: opacity
    })
    gsap.to(flake, {
        y: height + 200,
        x: "+=200",
        duration: duration,
        delay: "random(0,4)",
        ease: "none",
        rotation: "random(-60, 200)",
        onComplete: animateFlake,
        onCompleteParams: [flake]
    })
}

for (let i = 0; i < numFlakes; i++) {
    let flake = createFlake()
    animateFlake(flake)
}

document.addEventListener("click", () => gsap.globalTimeline.paused(!gsap.globalTimeline.paused()))
</script>