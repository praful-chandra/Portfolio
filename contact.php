<?php 

if($_REQUEST["name"] && $_REQUEST["email"]) {
   $name = $_REQUEST["name"];
   $email = $_REQUEST["email"];
   $PhoneNumber = $_REQUEST["phonenumber"];
   $message = $_REQUEST["message"];
    
//    echo($name);
//    echo($email);
//    echo($PhoneNumber);
//    echo($message);



// $connection = new MongoClient( "mongodb://praful:superseven7@ds051577.mlab.com:51577/portfolio" ); // connect to a remote host (default port: 27017)


echo phpinfo();

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hire a web developer">
    <title>Contact Praful</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
<nav  id="Home">
      <div class="center">
    <span>   <a href="/"> Praful Chandra</a></span>
        <span class="nav-des">Web Developer</span>
      </div>
    </nav>
    <div class="contact-wrapper center">
        <div class="contact-heading titleheading">
            <h1>Contact Me</h1>
        </div>
        <div class="contact-left">
        <form action = "<?php $_PHP_SELF ?>" method = "POST">
                <div class="contact-field">
                <label for="name">Name <span>*</span> </label>
                <input type="text" name="name" id="name" required>
                </div>
                <div class="contact-field">
                <label for="name">email <span>*</span></label>
                <input type="email" name="email" id="email" required>
                </div>
                <div class="contact-field">
                <label for="phone number">Phone Number</label>
                <input type="tel" name="phonenumber" id="phone number">
                </div>
                <div class="contact-field">
                <label for="message">Message</label>
                <textarea name="message" id="mesasage" cols="30" rows="10"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="contact-right">
        <svg id="undraw_reminders_697p" xmlns="http://www.w3.org/2000/svg" width="1045.968" height="746.323" viewBox="0 0 1045.968 746.323">
  <path id="Path_357" data-name="Path 357" d="M633.357,107.772,346.473,263.164A72.98,72.98,0,1,1,218.188,332.65l-97.819,52.984,253.382,467.79L886.738,575.562Z" transform="translate(-120.369 -107.772)" fill="#f2f2f2"/>
  <path id="Path_358" data-name="Path 358" d="M138.536,333.711l206.752,32.91-16.8,105.53L166.966,446.44l-6.513,40.92L147.212,443.3l-25.473-4.055Z" transform="translate(11.004 30.163)" fill="#ffb900"/>
  <path id="Path_359" data-name="Path 359" d="M138.536,333.711l206.752,32.91-16.8,105.53L166.966,446.44l-6.513,40.92L147.212,443.3l-25.473-4.055Z" transform="translate(11.004 30.163)" opacity="0.2"/>
  <rect id="Rectangle_158" data-name="Rectangle 158" width="126.485" height="10.904" transform="matrix(-0.988, -0.157, 0.157, -0.988, 309.546, 426.881)" fill="#f2f2f2"/>
  <rect id="Rectangle_159" data-name="Rectangle 159" width="126.485" height="10.904" transform="matrix(-0.988, -0.157, 0.157, -0.988, 306.118, 448.417)" fill="#f2f2f2"/>
  <rect id="Rectangle_160" data-name="Rectangle 160" width="126.485" height="10.904" transform="matrix(-0.988, -0.157, 0.157, -0.988, 302.69, 469.954)" fill="#f2f2f2"/>
  <path id="Path_360" data-name="Path 360" d="M124.156,479.541l192.154-83.1,42.418,98.078L208.608,559.44l16.447,38.029L190.249,567.38l-23.675,10.239Z" transform="translate(11.222 35.833)" fill="#ffb900"/>
  <rect id="Rectangle_161" data-name="Rectangle 161" width="126.485" height="10.904" transform="matrix(-0.918, 0.397, -0.397, -0.918, 304.215, 482.743)" fill="#f2f2f2"/>
  <rect id="Rectangle_162" data-name="Rectangle 162" width="126.485" height="10.904" transform="matrix(-0.918, 0.397, -0.397, -0.918, 312.872, 502.759)" fill="#f2f2f2"/>
  <rect id="Rectangle_163" data-name="Rectangle 163" width="126.485" height="10.904" transform="matrix(-0.918, 0.397, -0.397, -0.918, 321.528, 522.775)" fill="#f2f2f2"/>
  <path id="Path_361" data-name="Path 361" d="M151.156,303.541,343.31,220.436l42.418,98.078L235.608,383.44l16.447,38.029L217.249,391.38l-23.675,10.239Z" transform="translate(13.663 19.925)" fill="#ffb900"/>
  <rect id="Rectangle_164" data-name="Rectangle 164" width="126.485" height="10.904" transform="matrix(-0.918, 0.397, -0.397, -0.918, 333.656, 290.836)" fill="#f2f2f2"/>
  <rect id="Rectangle_165" data-name="Rectangle 165" width="126.485" height="10.904" transform="matrix(-0.918, 0.397, -0.397, -0.918, 342.313, 310.851)" fill="#f2f2f2"/>
  <rect id="Rectangle_166" data-name="Rectangle 166" width="126.485" height="10.904" transform="matrix(-0.918, 0.397, -0.397, -0.918, 350.969, 330.867)" fill="#f2f2f2"/>
  <path id="Path_362" data-name="Path 362" d="M284.961,186.728l768.626,32.847s120.44,383.218,30.657,547.454L356.13,846.958S509.417,562.282,284.961,186.728Z" transform="translate(-105.492 -100.635)" fill="#3f3d56"/>
  <line id="Line_8" data-name="Line 8" y1="10.949" x2="648.186" transform="translate(296.624 253.615)" fill="none" stroke="#2f2e41" stroke-miterlimit="10" stroke-width="2"/>
  <line id="Line_9" data-name="Line 9" y1="13.139" x2="654.755" transform="translate(314.143 301.79)" fill="none" stroke="#2f2e41" stroke-miterlimit="10" stroke-width="2"/>
  <line id="Line_10" data-name="Line 10" x2="759.219" y2="26.697" transform="translate(195.033 113.067)" fill="none" stroke="#2f2e41" stroke-miterlimit="10" stroke-width="2"/>
  <path id="Path_363" data-name="Path 363" d="M839.182,584.57c0,1.625-.011,3.249-.054,4.852v.011c-.065,3.969-.218,7.873-.469,11.754q-.392,6.248-1.069,12.332c-4.416,39.657-17.741,74.212-36.441,97.83-10.6,13.4-22.931,23.291-36.354,28.612a63.725,63.725,0,0,1-12.7,3.587,60.1,60.1,0,0,1-10.217.872c-16.061,0-31.218-6.39-44.564-17.73-25.788-21.862-44.87-62.119-50.79-110.216v-.011c-1-8.134-1.636-16.476-1.843-25q-.1-3.418-.1-6.891c0-88.289,43.561-159.862,97.3-159.862,12.725,0,24.883,4.013,36.026,11.318.327.207.654.425.97.654A94.846,94.846,0,0,1,795.61,451.27a122.759,122.759,0,0,1,8.985,11.067,146.36,146.36,0,0,1,9.726,15.505c2.443,4.471,4.743,9.181,6.859,14.1v.011q3.3,7.589,6.052,15.811v.011a233.375,233.375,0,0,1,10.751,51.7C838.779,567.647,839.182,576.032,839.182,584.57Z" transform="translate(-72.987 -79.124)" opacity="0.2"/>
  <path id="Path_364" data-name="Path 364" d="M340.282,198.581c.834,3.127-.167,6.755-2.231,8.1s-4.4-.1-5.23-3.212.16-6.735,2.216-8.09S339.448,195.454,340.282,198.581Z" transform="translate(-101.193 -99.899)" fill="#ffb900"/>
  <path id="Path_365" data-name="Path 365" d="M356.324,198.33c.834,3.127-.167,6.755-2.231,8.1s-4.4-.1-5.23-3.212.16-6.735,2.216-8.09S355.49,195.2,356.324,198.33Z" transform="translate(-99.743 -99.922)" fill="#ffb900"/>
  <path id="Path_366" data-name="Path 366" d="M324.239,198.832c.834,3.127-.167,6.755-2.231,8.1s-4.4-.1-5.23-3.212.16-6.735,2.216-8.09S323.405,195.7,324.239,198.832Z" transform="translate(-102.643 -99.877)" fill="#ffb900"/>
  <path id="Path_367" data-name="Path 367" d="M830.077,493.146l5.66,16.841,6.127.473-5.509-41.983c2.047-26.516-9.022-49.91-35.539-51.956h0A33.624,33.624,0,0,0,764.7,447.457l-3.127,40.516a16.242,16.242,0,0,0,14.944,17.444l47.541,3.669Z" transform="translate(-62.416 -79.874)" fill="#2f2e41"/>
  <path id="Path_368" data-name="Path 368" d="M831.485,574.754s5.033,13.661,13.661,15.818,72.616,17.255,72.616,17.255,56.08,1.438,38.825,13.661-45.3,0-45.3,0-81.963-10.066-88.434-20.85a145.337,145.337,0,0,1-10.785-23.007Z" transform="translate(-57.848 -65.562)" fill="#fbbebe"/>
  <path id="Path_369" data-name="Path 369" d="M806.488,519.366s40.982,66.865,35.949,68.3-51.766,16.536-53.923,10.785-2.157-32.354-2.157-32.354Z" transform="translate(-60.172 -70.569)" fill="#ff6584"/>
  <path id="Path_370" data-name="Path 370" d="M806.488,519.366s40.982,66.865,35.949,68.3-51.766,16.536-53.923,10.785-2.157-32.354-2.157-32.354Z" transform="translate(-60.172 -70.569)" opacity="0.15"/>
  <path id="Path_371" data-name="Path 371" d="M708.981,499.069l-60.829,84.579s-40.449,36.127-25.289,40.466,39.222-30.648,39.222-30.648L732.2,504.929Z" transform="translate(-75.257 -72.403)" fill="#fbbebe"/>
  <path id="Path_372" data-name="Path 372" d="M818.949,471.727s-17.974,27.321-16.536,33.792c0,0-1.438,4.314.719,7.19s1.438,20.131,1.438,20.131l-7.19,10.066-9.347-30.916-4.314-33.073s9.706-13.3,8.268-19.772S818.949,471.727,818.949,471.727Z" transform="translate(-60.41 -76.133)" fill="#fbbebe"/>
  <path id="Path_373" data-name="Path 373" d="M792.237,694.331c-10.6,13.4-22.931,23.291-36.354,28.612a63.734,63.734,0,0,1-12.7,3.587c2.3-51.041,4.95-96.565,6.815-100.588C754.314,616.6,765.817,613,765.817,613s1.134,3.042,3.031,8.331C773.766,635.112,783.82,664.159,792.237,694.331Z" transform="translate(-64.075 -62.105)" fill="#ff6584"/>
  <path id="Path_374" data-name="Path 374" d="M792.237,694.331c-10.6,13.4-22.931,23.291-36.354,28.612a63.734,63.734,0,0,1-12.7,3.587c2.3-51.041,4.95-96.565,6.815-100.588C754.314,616.6,765.817,613,765.817,613s1.134,3.042,3.031,8.331C773.766,635.112,783.82,664.159,792.237,694.331Z" transform="translate(-64.075 -62.105)" opacity="0.15"/>
  <circle id="Ellipse_332" data-name="Ellipse 332" cx="26.602" cy="26.602" r="26.602" transform="translate(722.59 346.703)" fill="#fbbebe"/>
  <path id="Path_375" data-name="Path 375" d="M806.457,571.351c-4.972,4.732-8.625,8.222-11.307,10.882-5.452,5.387-6.913,7.317-7.393,9.246-.72,2.879-4.307,2.879-4.307,2.879l-9.912,39.963-10.948,44.15s-.709,24.534-2.017,57.464a63.735,63.735,0,0,1-12.7,3.587,60.116,60.116,0,0,1-10.217.872c-16.061,0-31.218-6.39-44.564-17.73.185-42.111-.24-85.17-.24-85.17s-11.5-18.689,28.045-55.359c0,0,6.237-18.188,12.692-36.452C740.075,527.278,746.78,508.8,747.5,508.8c.48,0,3.914-4.394,8.276-10.25,3.827-5.125,8.374-11.384,12.256-16.8,5-6.935,8.941-12.485,8.941-12.485s11.809,0,16.868,6.03a9.275,9.275,0,0,1,1.832,3.315c1.221,3.98,4.013,13.7,6.815,23.552,3.762,13.27,7.557,26.769,7.557,26.769l1.93-16.225s5.986,8.32,5.986,14.786c0,.349.011.741.022,1.189C818.3,536.426,820.731,557.743,806.457,571.351Z" transform="translate(-68.765 -75.098)" fill="#ff6584"/>
  <path id="Path_376" data-name="Path 376" d="M785.3,475.005l-8.628-5.752s-35.949,21.569-61.113,23.007-24.445,15.817-14.379,25.883,49.609,44.576,51.047,35.949S785.3,475.005,785.3,475.005Z" transform="translate(-68.462 -75.098)" fill="#ff6584"/>
  <path id="Path_377" data-name="Path 377" d="M827.922,419.952c-5.783-1.95-19.771-2.988-21.817-3.146a37.653,37.653,0,0,0-40.439,34.643l-18.2,51.6,27.51,2.123L781.591,486l5.737,20.128,13.849,1.069,2.1-11.667,3.779,12.121,15.425,1.191c-9.535-27.031-13.841-51.332,2.472-64.867,10.141,2.187,19,.109,20.835-5.339C847.9,432.358,839.9,423.993,827.922,419.952Z" transform="translate(-63.687 -79.849)" fill="#2f2e41"/>
  <path id="Path_378" data-name="Path 378" d="M767.262,367.957H976.616V474.815H813.058V516.25l-20-41.435H767.262Z" transform="translate(69.351 33.259)" fill="#ffb900"/>
  <rect id="Rectangle_167" data-name="Rectangle 167" width="126.485" height="10.904" transform="translate(1004.532 438.289) rotate(180)" fill="#f2f2f2"/>
  <rect id="Rectangle_168" data-name="Rectangle 168" width="126.485" height="10.904" transform="translate(1004.532 460.097) rotate(180)" fill="#f2f2f2"/>
  <rect id="Rectangle_169" data-name="Rectangle 169" width="126.485" height="10.904" transform="translate(1004.532 481.904) rotate(180)" fill="#f2f2f2"/>
  <rect id="Rectangle_170" data-name="Rectangle 170" width="54.519" height="54.519" transform="translate(610.854 155.791) rotate(14.957)" fill="#ffb900" opacity="0.2"/>
  <circle id="Ellipse_333" data-name="Ellipse 333" cx="16.089" cy="16.089" r="16.089" transform="translate(628.37 195.301)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/>
</svg>

        </div>
    </div>
</body>
</html>