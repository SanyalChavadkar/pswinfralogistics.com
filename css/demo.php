@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden;
  font-family: 'Poppins', sans-serif;
}
.f-light{
  font-family: 'Poppins', sans-serif;
  font-weight: 300;
}
.f-regular{
  font-family: 'Poppins', sans-serif;
  font-weight: 400;
}
.f-medium{
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
}
.f-semibold{
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
}
.f-bold{
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
}
body a:hover{
  text-decoration: none;
  color: #fff;
}
body li{
  list-style: none;
}
.f-light{
  font-weight:300;
}
.f-regular{
  font-weight:400;
}
.f-medium{
  font-weight:500;
}
.f-semibold{
  font-weight:600;
}
.f-bold{
  font-weight:700;
}
.f-Extrabold{
  font-weight:800;
}
.f-black{
  font-weight:900;
} 
p{
  font-weight:600;
}
a {
  text-decoration: none;
}
button:focus {
  outline: 0;
  box-shadow: none;
}
header {
  position: fixed;
  top: 0;
  width: 100%;
  left: 0;
  right: 0;
  z-index: 5;
  height: 66px;
  padding: 0px 0 0px;;
  transition: all 0.3s ease-in-out;
  background: #342A64;
}
header.shrink{
animation: 0.3s 0.3s fadeInDown both;
/*background: #fff;*/
box-shadow: 0px 2px 10px #00000059;
}
.heads-up {
  transform: translateY(-6rem);
  transform: translate3d(0,-6rem,0);
}
header.shrink .navbar-expand-md .navbar-nav .nav-item:nth-child(11) .nav-link{
  color: #fff;
}
header .container {
  position: relative;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 100%;
}
header .header {
  display: block;
  left: 0;
  right: 0;
  margin: 0 auto;
  transition: all 0.3s ease-in-out;
  opacity: 1;
  z-index: 1;
  position: relative;
}
header .header-white {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
header .mobile-navbar {
  position: relative;
  right: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: auto;
}
header .navbar-expand-md .navbar-nav .nav-link.active, header .navbar-expand-md .navbar-nav .nav-link:hover {
  color: #fff;
}
.navbar-brand {
  position: absolute;
  top: 7px;
  left: 0;
  padding: 0;
}
.navbar-brand img {
  width: 86%;
}
.navbar-expand-md {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 0px 0 8px;
}
.navbar-expand-md .navbar-nav .nav-link {
  font-size: 15px;
  color: #fff;
  padding: 0;
  transition: all 0.3s ease-in-out;
  position: relative;
  font-weight: 500;
  margin: 0px 0px;
  margin-top: 20px;
  position: relative;
  padding: 0px 10px;
}
.navbar-expand-md .navbar-nav .nav-link::before
{
  background:#fff;
  height: 3px;
  width: 0%;
  position: absolute;
  content: "";
  bottom: -18px;
  left: 6px;
  transition: all 0.4s;
}
.navbar-expand-md .navbar-nav .nav-link.active:before,
.navbar-expand-md .navbar-nav .nav-link:hover:before {
  width: 100%;
}
.navbar-expand-md .navbar-nav .nav-item:last-child .nav-link:before,
.navbar-expand-md .navbar-nav .nav-item:nth-child(8) .nav-link:before{
  display: none;
}
footer{
  position: relative;
}
.main-footer {
  background:#17253E;
  position: relative;
  background-size: cover;
  background-position: center;
  padding: 50px 0px;
}
.main-footer:before {
    position: absolute;
    content: "";
    top: -3px;
    left: 0;
    right: 0;
    height: 3px;
    width: 75%;
    margin: 0 auto;
    background: #ecae29;
    transform: skewX(-10deg);
    z-index: 1;
}
.foot-top .common-btn{
  background: #000;
  color: #fff;
  z-index: 1;
}
.footer-logo {
  background: #fff;
  padding: 10px 20px;
  box-shadow: 0px 0px 93px #00000029;
  border-radius: 6px;
  margin-top: -26%;
}
.footerlogo {
  width: 55%;
}
.footer-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #ffffff21;
  padding-bottom: 30px;
}
.contact-box {
  display: flex;
  align-items: flex-start;
}
.contact-box i {
  font-size: 40px;
  color: #ECAE29;
  display: flex;
}
.footer-top .box {
  padding: 0px 10px;
}
.footer-top .box a {
  font-size: 18px;
  color: #fff;
}
.contact-box h3 {
  font-size: 17px;
  color: #ffffff;
  margin-bottom: 0;
}
.sky {
  color: #ffffff;
}
footer span.span1 {
  color: #ECAE29;
}
.social-box {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin-top: 21px;
}
.social-box .twitter, .social-box .insta, .social-box .facebook, .social-box .linkedin {
  color: #fff;
  font-size: 29px;
  margin-right: 23px;
}
.main-footer .footer-wrapp {
  display: flex;
  width: 100%;
  position: relative;
  z-index: 1;
  margin-top: 36px;
}
.column h4 {
  color: #fff;
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 14px;
}
.column a {
  display: block;
  padding-bottom: 7px;
  line-height: 20px;
  color: #90A0AA;
  font-size: 14px;
  font-weight: 100;
}
.Contact-wrapper a img{
  margin-right: 10px;
}
.Contact-wrapper a{
  display: flex;
  align-items: center;
  color: #90A0AA;
}
.column p {
  color: #FFFFFF;
  width: 100%;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  margin-bottom: 20px;
}
footer a,
footer p{
  color: #a8a4a4;
  font-size: 16px;
}
footer p{
  margin-bottom: 0;
}
.footer-contact a {
  padding-bottom: 0px !important;
}
.footer-contact span {
  padding-right: 5px;
  color: #5EC434;
}
.column:nth-child(1) {
  width: 25%;
  margin-right: 0;
}
.column:nth-child(1) p {
  color: #fff;
  margin-top: 20px;
  font-size: 15px;
  line-height: 22px;
  width: 89%;
  font-weight: 100;
  margin-bottom: 0;
}
.column:nth-child(2) {
  width: 25%;
  position: relative;
}
.column:nth-child(3) {
  width: 25%;
}
.column:nth-child(4) {
  width: 25%;
}
.btm-strip {
  background: #17253E;
}
.btm-strip p {
  color: #FFFFFF;
  font-size: 15px;
  font-weight: 400;
}
.btm-strip .container {
  padding: 16px 15px 16px 15px;
  position: relative;
}
.btm-strip a {
  font-size: 14px;
  color: #fff;
}
.btm-strip {
  color:#fff;
}
a.top-arrow {
  background: #5A6162;
  position: absolute;
  right: -55px;
  width: 56px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
  top: 0;
  transform: rotate(270deg);
} 
.common-btn {
  width: 152px;
  height: 46px;
  background: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 15px;
  transition: all 0.3s ease-in-out;
  position: relative;
  transform: perspective(1px) translateZ(0);
  transition-duration: 0.3s;
  overflow: hidden;
  outline: none;
  border-radius: 15px;
  cursor: pointer;
  border:1px solid #ECAE29;
}
.common-btn:before {
  content: "";
  position: absolute;
  z-index: -1;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background:#d59d31;
  transform: scaleX(0);
  transform-origin: 0 50%;
  transition: all 0.3s ease-in-out;
  color: #fff;
}
.common-btn:hover{
  color: #fff !important;
  border:0px !important;
}
.common-btn:hover span{
  color: #fff !important;
}
.common-btn:hover:before{
  transform:scaleX(1);
}
.common-btn span {
    font-size: 10px;
    align-items: center;
    justify-content: center;
    color: #ecae29;
    transform: rotate(0deg);
    position: relative;
    left: 5px;
    top: 1px;
}
.home-slider h2 {
  font-size:60px;
  color:#fff;
}
.caption-left {
  position: absolute;
  top: 32%;
  width: 40%;
  left: 16.5%;
}
.caption-left p {
  color: #fff;
  position: relative;
  padding-left:60px;
}
.caption-left p:before{
  position:absolute;
  content: "";
  width:50px;
  height:2px;
  left:0px;
  top:10px;
  background-color:#ECAE29;
}
.slider-section .owl-dots {
  position: absolute;
  right: 4%;
  top: 50%;
  margin-bottom:10px;
}
.slider-section .owl-theme .owl-dots .owl-dot{
  display: block;
}
.slider-section .owl-theme .owl-dots .owl-dot span {
  width: 8px;
  height: 10px;
  margin: 5px 7px;
  border: 1px solid #ffffff75;
  border-radius: 5px;
  background-color:transparent;
}
.slider-section .owl-theme .owl-dots .owl-dot.active span, .slider-section .owl-theme .owl-dots .owl-dot:hover span {
  background: #ECAE29 !important;
  height:14px;
  margin-bottom:10px;
}
.heading {
    font-size: 45px;
    font-weight: 700;
    color: #342A63;
}
.subheading {
    color: #706C7C;
    position: relative;
    padding-left: 60px;
}
.subheading:before {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    left: 0px;
    top: 10px;
    background-color: #ECAE29;
}
.yellow {
    color: #ecae29;
}
.home-start-business {
  background: #F2F5F8;
    padding: 80px 0px;
}
.home-industries{
  padding: 80px 0px;
  background: url("../images/industries-bg.jpg") no-repeat;
}
.home-industries .home-industries-slider {
    position: relative;
}
.home-industries .home-industries-slider .icon-box img {
    width: 25%;
    margin-bottom: 20px;
    margin: 0 auto;
    padding-bottom: 20px;
}
.home-industries .home-industries-slider .text-content {
    position: absolute;
    bottom: 0px;
    padding: 10px 30px;
    height: 65%;
    color: #fff;
    transition: all 0.5s ease-in-out;
    width: 100%;
    border-radius: 20px;
    overflow: hidden;
    text-align: center;
}

.home-industries .subheading {
    color: #ffffff;
    position: relative;
    padding-left: 60px;
}
.home-industries .heading {
    font-size: 45px;
    font-weight: 700;
    color: #ffffff;
}
.home-industries .home-industries-slider  {
    margin-top: 30px;
}
.global {
    padding: 80px 0px;
    background: url("../images/global-bg.jpg") no-repeat;
}
.global .subheading {
    color: #ffffff;
    position: relative;
    padding-left: 60px;
}
.global .heading {
    font-size: 45px;
    font-weight: 700;
    color: #ffffff;
}
.global p.f-light {
    color: #fff;
}
.global-wrapper {
    display: flex;
    margin-top: 15%;
}
.global-single {
    width: 35%;
}
.global .counter-list h4 {
    color: #fff;
    font-size: 30px;
    position: relative;
}
.global .counter-list h4:before {
    position: absolute;
    content: "";
    width: 6px;
    height: 26px;
    left: -28px;
    top: 4px;
    background-color: #ECAE29;
}
.global .counter-list p {
    color: #fff;
}
.home-client {
    padding: 80px 0px;
}
.client-wrapper {
    display: flex;
    flex-wrap: wrap;
}
.home-client .item {
    width: 17%;
    background: #fff;
    box-shadow: 0px 0px 10px 0px #ccc;
    margin: 20px 19px;
    border-radius: 30px;
}
.home-client .header-title {
    display: flex;
    justify-content: space-between;
}
.home-client .common-btn {
    color: #ecae29;
    margin-top: 35px;
}
.home-reality {
    padding: 80px 0px;
}
.home-reality .reality-wrapper.counter {
    display: flex;
    flex-wrap: wrap;
    margin-top: 30px;
}
.home-reality .reality-single {
    background: #fff;
    box-shadow: 0px 0px 10px 0px #ccc;
    border-radius: 20px;
    width: 40%;
    margin: 10px 10px;
    padding: 20px 30px;
}
.home-reality .reality-single:hover {
    background: #342A63;
}
.home-reality .reality-single:hover h4{
    color: #fff;
}
.home-reality .reality-single:hover p{
    color: #fff;
}
.home-reality .reality-single h4 {
    text-align: start;
    font-size: 35px;
    color: #342A63;
}
.home-reality .reality-single span {
    font-size: 35px;
    margin-left: -7px;
}
.home-reality .reality-single p {
    text-align: start;
    margin-bottom: 0px;
}
.home-reality .reality-single .counter-list img {
    width: 35%;
    margin-right: 15px;
}
.home-reality .common-btn {
    color: #ecae29;
}
.get-response {
    padding: 80px 0px;
    /* background: url(../images/connect-team-bg.jpg) no-repeat; */
    background-size: cover;
    background-position: center;
    background: #f1f3f4;
}
.get-response .common-btn {
    color: #ecae29;
}
.get-response .contact-form .common-btn {
    color: #ecae29;
    width: 100%;
}
.get-response .contact {
    background: #ffff;
    border-radius: 40px;
    padding: 50px 50px;
    width: 70%;
    box-shadow: 0px 0px 10px 0px #a99f9f;
    margin-top: -20%;
}
.get-response .contactform {
    position: relative;
}
.get-response .form-group {
    position: relative;
    width: 100%;
    margin-bottom: 20px;
}
.get-response .form-control {
    padding: 15px 20px;
    border-radius: 15px;
    background: #C5D3E041;
    font-size: 15px;
    font-weight: 500;
    border: 0px solid #C5D3E041;
}
.get-response .form-control:focus{
  border: 2px solid #ecae29;
  box-shadow: none;
}
.get-response .form-group i {
    font-size: 26px;
    color: #ecae29;
    position: absolute;
    top: 24%;
    right: 9px;
}
.get-response .intl-tel-input {
    position: relative;
    display: inline-block;
    width: 100%;
}
.email-error {
    font-weight: 400;
    color: red;
    font-style: normal;
    font-size: 12px;
    margin: -15px 0px 13px 18px;
    display: none;
}
.get-response .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 .selected-flag {
    width: 78px;
    border-radius: 9px 0px 0px 9px;
}
.get-response .intl-tel-input.separate-dial-code .selected-flag {
    background-color: transparent;
    display: table;
}
.get-response .intl-tel-input.allow-dropdown .flag-container:hover .selected-flag {
    background-color: transparent;
}
