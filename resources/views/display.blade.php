


<html>
  <head>

<style>






#container_2{
box-shadow: 0 15px 30px 1px grey;
background: rgba(255, 255, 255, 0.90);
text-align: center;
border-radius: 5px;
overflow: hidden;
margin: 5em auto;
height: 350px;
width: 700px;


}



.product-details_2 {
position: relative;
text-align: left;
overflow: hidden;
padding: 30px;
height: 100%;
float: left;
width: 40%;

}

#container_2 .product-details_2 h1{
font-family: 'Bebas Neue', cursive;
display: inline-block;
position: relative;
font-size: 30px;
color: #344055;
margin: 0;

}

#container_2 .product-details_2 h1:before{
position: absolute;
content: '';
right: 0%; 
top: 0%;
transform: translate(25px, -15px);
font-family: 'Bree Serif', serif;
display: inline-block;
background: #ffe6e6;
border-radius: 5px;
font-size: 14px;
padding: 5px;
color: white;
margin: 0;
animation: chan-sh 6s ease infinite;

}






.hint-star {
display: inline-block;
margin-left: 0.5em;
color: gold;
width: 50%;
}


#container_2 .product-details_2 > p {
font-family: 'EB Garamond', serif;
text-align: center;
font-size: 18px;
color: #7d7d7d;

}
.control{
position: absolute;
bottom: 20%;
left: 22.8%;

}
.btn {

transform: translateY(0px);
transition: 0.3s linear;
background:  #809fff;
border-radius: 5px;
position: relative;
overflow: hidden;
cursor: pointer;
outline: none;
border: none;
color: #eee;
padding: 0;
margin: 0;

}

.btn:hover{transform: translateY(-6px);
background: #1a66ff;}

.btn span {
font-family: 'Farsan', cursive;
transition: transform 0.3s;
display: inline-block;
padding: 10px 20px;
font-size: 1.2em;
margin:0;

}
.btn .price, .shopping-cart{
background: #333;
border: 0;
margin: 0;
}

.btn .price {
transform: translateX(-10%); padding-right: 15px;
}

.btn .shopping-cart {
transform: translateX(-100%);
position: absolute;
background: #333;
z-index: 1;
left: 0;
top: 0;
}

.btn .buy {z-index: 3; font-weight: bolder;}

.btn:hover .price {transform: translateX(-110%);}

.btn:hover .shopping-cart {transform: translateX(0%);}



.product-image {
transition: all 0.3s ease-out;
display: inline-block;
position: relative;
overflow: hidden;
height: 100%;
float: right;
width: 45%;
display: inline-block;
}

#container_2 img {width: 100%;height: 100%;}

.info {
  background: rgba(27, 26, 26, 0.9);
  font-family: 'Bree Serif', serif;
  transition: all 0.3s ease-out;
  transform: translateX(-100%);
  position: absolute;
  line-height: 1.8;
  text-align: left;
  font-size: 105%;
  cursor: no-drop;
  color: #FFF;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.info h2 {text-align: center}
.product-image:hover .info{transform: translateX(0);}

.info ul li{transition: 0.3s ease;}
.info ul li:hover{transform: translateX(50px) scale(1.3);}

.product-image:hover img {transition: all 0.3s ease-out;}
.product-image:hover img {transform: scale(1.2, 1.2);}

/* --------------------------------- */

html {
font-family: sans-serif;
box-sizing: border-box;
}



*, *:before, *:after {
box-sizing: inherit;
}

.text-center {
text-align: center;
}

.color-white {
color: #fff;
}

.box-container {
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-around;
padding: 35px 15px;
width: 100%;
}

@media screen and (min-width:1380px) {
.box-container {
  flex-direction: row
}
}

.box-item {
position: relative;
-webkit-backface-visibility: hidden;
width: 415px;
margin-bottom: 35px;
max-width: 100%;
}
.box-item:hover {

width: 715px;

}

.flip-box {
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
-webkit-transform-style: preserve-3d;
perspective: 1000px;
-webkit-perspective: 1000px;
}

.flip-box-front,
.flip-box-back {
background-size: cover;
background-position: center;
border-radius: 8px;
min-height: 475px;
-ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
-webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}

.flip-box-front {
-ms-transform: rotateY(0deg);
-webkit-transform: rotateY(0deg);
transform: rotateY(0deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box:hover .flip-box-front {
-ms-transform: rotateY(-180deg);
-webkit-transform: rotateY(-180deg);
transform: rotateY(-180deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box-back {
position: absolute;
top: 0;
left: 0;
width: 100%;

-ms-transform: rotateY(180deg);
-webkit-transform: rotateY(180deg);
transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box:hover .flip-box-back {
-ms-transform: rotateY(0deg);
-webkit-transform: rotateY(0deg);
transform: rotateY(0deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box .inner {
position: absolute;
left: 0;
width: 100%;
padding: 60px;
outline: 1px solid transparent;
-webkit-perspective: inherit;
perspective: inherit;
z-index: 2;

transform: translateY(-50%) translateZ(60px) scale(.94);
-webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
-ms-transform: translateY(-50%) translateZ(60px) scale(.94);
top: 50%;
}

.flip-box-header {
font-size: 34px;
}

.flip-box p {
font-size: 20px;
line-height: 1.5em;
}

.flip-box-img {
margin-top: 25px;
}

.flip-box-button {
background-color: transparent;
border: 2px solid #fff;
border-radius: 2px;
color: #fff;
cursor: pointer;
font-size: 20px;
font-weight: bold;
margin-top: 25px;
padding: 15px 20px;
text-transform: uppercase;
}

@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1000px;
  overflow: hidden;
  position: relative;
  background: #212121;
  font-family: 'dosis';
}


.conatiner {
width: 100%;
height: 500px;
}
.wrap {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
    flex-wrap: wrap;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
-webkit-box-orient: horizontal;
-webkit-box-direction: normal;
    -ms-flex-direction: row;
        flex-direction: row;
}



.box {
margin: 10px;
width: 300px;
height: 490px;
text-align: center;
border-radius: 3px;
-webkit-transition: 200ms ease-in-out;
-o-transition: 200ms ease-in-out;
transition: 200ms ease-in-out;
-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
        box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
.box:hover {
margin-bottom: -10px;
-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.7);
        box-shadow: 0 0 5px rgba(0,0,0,0.7);
}

.box h1 {
color: #fff;
padding: 30px;
margin-top: 100px;
text-align: center;
font-weight: 100;
font-size: 25px;
/* background: rgba(0,0,0,0.8); */
/* -webkit-box-shadow: 0 0 30px rgba(0,0,0,0.7);
        box-shadow: 0 0 30px rgba(0,0,0,0.8); */
}

.date h4 {
color: #fff;
font-weight: 300;
text-align: center;
letter-spacing: 3px;
text-shadow: 0 0 3px rgba(0,0,0,0.9);
}
.poster {
width: 130px;
height:130px;
margin: 120px auto;
position: relative;
border-radius: 100px;
}
.poster h4 {
top: 16px;
color: #fff;
position: relative;
font-size: 80px;
text-align: center;
font-weight: 100;
}
.one {
background: url('https://source.unsplash.com/900x920');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.two {
background: url('https://source.unsplash.com/820x900');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.three {
background: url('https://source.unsplash.com/500x500');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.five {
background: url('https://source.unsplash.com/550x520');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.six {
background: url('https://source.unsplash.com/660x630');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.seven {
background: url('https://source.unsplash.com/700x770');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.eight {
background: url('https://source.unsplash.com/880x820');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.nine {
background: url('https://source.unsplash.com/898x820');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.ten {
background: url('https://source.unsplash.com/8998x920');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.eleven {
background: url('https://source.unsplash.com/898x960');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.tlv {
background: url('https://source.unsplash.com/999x888');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.thirteen {
background: url('https://source.unsplash.com/1000x777');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.ftn {
background: url('https://source.unsplash.com/2000x777');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.fith {
background: url('https://source.unsplash.com/2000x1000');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
.sith {
background: url('https://source.unsplash.com/3000x1000');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.sevth {
background: url('https://source.unsplash.com/9000x9000');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

/* POSTER*/
.p1 {
background: #2b5876;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4e4376, #2b5876);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#4e4376), to(#2b5876));
background: -webkit-linear-gradient(left, #4e4376, #2b5876);
background: -o-linear-gradient(left, #4e4376, #2b5876);
background: linear-gradient(to right, #4e4376, #2b5876); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px darkblue;
        box-shadow: 0 0 20px darkblue;
}

.p2 {
background: #f857a6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff5858, #f857a6);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#ff5858), to(#f857a6));
background: -webkit-linear-gradient(left, #ff5858, #f857a6);
background: -o-linear-gradient(left, #ff5858, #f857a6);
background: linear-gradient(to right, #ff5858, #f857a6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px #fa3380;
        box-shadow: 0 0 20px #fa3380;
}

.p3 {
background: #4776E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#8E54E9), to(#4776E6));
background: -webkit-linear-gradient(left, #8E54E9, #4776E6);
background: -o-linear-gradient(left, #8E54E9, #4776E6);
background: linear-gradient(to right, #8E54E9, #4776E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px lightblue;
        box-shadow: 0 0 20px lightblue;
}

.p4 {
background: #1FA2FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#A6FFCB), color-stop(#12D8FA), to(#1FA2FF));
background: -webkit-linear-gradient(left, #A6FFCB, #12D8FA, #1FA2FF);
background: -o-linear-gradient(left, #A6FFCB, #12D8FA, #1FA2FF);
background: linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px skyblue;
        box-shadow: 0 0 20px skyblue;
}


.p5 {
background: #AA076B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#61045F), to(#AA076B));
background: -webkit-linear-gradient(left, #61045F, #AA076B);
background: -o-linear-gradient(left, #61045F, #AA076B);
background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px purple;
        box-shadow: 0 0 20px purple;
}

.p6 {
background: #DA22FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #9733EE, #DA22FF);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#9733EE), to(#DA22FF));
background: -webkit-linear-gradient(left, #9733EE, #DA22FF);
background: -o-linear-gradient(left, #9733EE, #DA22FF);
background: linear-gradient(to right, #9733EE, #DA22FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px violet;
        box-shadow: 0 0 20px violet;
}

.p7 {
background: #02AAB0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #00CDAC, #02AAB0);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#00CDAC), to(#02AAB0));
background: -webkit-linear-gradient(left, #00CDAC, #02AAB0);
background: -o-linear-gradient(left, #00CDAC, #02AAB0);
background: linear-gradient(to right, #00CDAC, #02AAB0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px lightgreen;
        box-shadow: 0 0 20px lightgreen;
}
.p8 {
background: #5433FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#A5FECB), color-stop(#20BDFF), to(#5433FF));
background: -webkit-linear-gradient(left, #A5FECB, #20BDFF, #5433FF);
background: -o-linear-gradient(left, #A5FECB, #20BDFF, #5433FF);
background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px lightblue;
        box-shadow: 0 0 20px lightblue;
}
.p9 {
background: #2b5876;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #fa3, #fa3380);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#fa3), to(#fa3380));
background: -webkit-linear-gradient(left, #fa3, #fa3380);
background: -o-linear-gradient(left, #fa3, #fa3380);
background: linear-gradient(to right, #fa3, #fa3380); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px #fa3380;
        box-shadow: 0 0 20px #fa3380;
}

.p10 {
background: #2b5876;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, deepskyblue, lightblue);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(deepskyblue), to(lightblue));
background: -webkit-linear-gradient(left, deepskyblue, lightblue);
background: -o-linear-gradient(left, deepskyblue, lightblue);
background: linear-gradient(to right, deepskyblue, lightblue); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px darkblue;
        box-shadow: 0 0 20px darkblue;
}

.p11 {
background: #F2994A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F2C94C, #F2994A);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#F2C94C), to(#F2994A));
background: -webkit-linear-gradient(left, #F2C94C, #F2994A);
background: -o-linear-gradient(left, #F2C94C, #F2994A);
background: linear-gradient(to right, #F2C94C, #F2994A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px lightyellow;
        box-shadow: 0 0 20px lightyellow;
}

.p12 {
background: #A770EF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#FDB99B), color-stop(#CF8BF3), to(#A770EF));
background: -webkit-linear-gradient(left, #FDB99B, #CF8BF3, #A770EF);
background: -o-linear-gradient(left, #FDB99B, #CF8BF3, #A770EF);
background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px purple;
        box-shadow: 0 0 20px purple;
}

.p13 {
background: #f4c4f3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #fc67fa, #f4c4f3);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#fc67fa), to(#f4c4f3));
background: -webkit-linear-gradient(left, #fc67fa, #f4c4f3);
background: -o-linear-gradient(left, #fc67fa, #f4c4f3);
background: linear-gradient(to right, #fc67fa, #f4c4f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px pink;
        box-shadow: 0 0 20px pink;
}
.p14 {
background: #00c3ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffff1c, #00c3ff);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#ffff1c), to(#00c3ff));
background: -webkit-linear-gradient(left, #ffff1c, #00c3ff);
background: -o-linear-gradient(left, #ffff1c, #00c3ff);
background: linear-gradient(to right, #ffff1c, #00c3ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px olive;
        box-shadow: 0 0 20px olive;
}
.p15 {
background: #5614B0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #DBD65C, #5614B0);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#DBD65C), to(#5614B0));
background: -webkit-linear-gradient(left, #DBD65C, #5614B0);
background: -o-linear-gradient(left, #DBD65C, #5614B0);
background: linear-gradient(to right, #DBD65C, #5614B0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px olive;
        box-shadow: 0 0 20px olive;
}

.p16 {
background: #fc00ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);  /* Chrome 10-25, Safari 5.1-6 */
background: -webkit-gradient(linear, left top, right top, from(#00dbde), to(#fc00ff));
background: -webkit-linear-gradient(left, #00dbde, #fc00ff);
background: -o-linear-gradient(left, #00dbde, #fc00ff);
background: linear-gradient(to right, #00dbde, #fc00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
-webkit-box-shadow: 0 0 20px olive;
        box-shadow: 0 0 20px olive;
}


/*  FOLLOW*/
.Follow {	  background:url("https://pbs.twimg.com/profile_images/959092900708544512/v4Db9QRv_bigger.jpg")no-repeat center / contain;
width: 50px;
height: 50px;
bottom: 9px;
right: 20px;
display:block;
position:fixed;
border-radius:50%;
z-index:999;
animation:  rotation 10s infinite linear;
}

@-webkit-keyframes rotation {
  from {
      -webkit-transform: rotate(0deg);
  }
  to {
      -webkit-transform: rotate(359deg);
  }
}

.navbar{
  width: 100%;
  height: 60px;
  position: fixed;
  top: 0;
  left: 0;
  padding: 0 10vw;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 9;
}

.brand{
  font-weight: 500;
  color: #FFF;
  text-transform: capitalize;
  font-size: 25px;
  letter-spacing: 2px;
}

.toggle-btn{
  position: relative;
  width: 50px;
  height: 50px;
  cursor: pointer;
}

.toggle-btn span{
  position: absolute;
  top: 25%;
  left: 0;
  transform: translateY(-50%);
  width: 100%;
  height: 3px;
  background: #FFF;
  transition: 1s;
}

.toggle-btn span:nth-child(2){
  top: 50%;
  width: 70%;
}

.toggle-btn span:nth-child(3){
  top: 75%;
  width: 40%;
}

.toggle-btn.active span:nth-child(2){
  display: none;
}

.toggle-btn.active span:nth-child(1){
  transform: rotate(45deg);
  top: 50%
}

.toggle-btn.active span:nth-child(3){
  transform: rotate(-45deg);
  top: 50%;
  width: 100%;
}

.page-container{
  position: relative;
  width: 100%;
  height: 100%;
  -webkit-box-reflect: below 20px linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
  transition: 1s;
  left: 0;
}

.overlay{
  position: fixed;
  bottom: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: #212121;
  z-index: 3;
}

.page{
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1;
  pointer-events: none;
  opacity: 0;
}

.page.active{
  opacity: 1;
  pointer-events: all;
}

.page.home{
  /* background-image: url(https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F28%2F2017%2F02%2Feiffel-tower-paris-france-EIFFEL0217.jpg&q=60); */
  /* background: #2a364f; */

  background-color: #d99058;
background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);

  /* background-image: url("https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"); */
  background-size: cover;
}

.page.project{
  /* background-image: url(https://i.ytimg.com/vi/HrBFLlGrKPQ/maxresdefault.jpg); */
  /* background: #2a364f; */

  background-color: #d99058;
background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);

  /* background-image: url("https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"); */
  background-size: cover;
}
.lines{position:absolute;top:0;left:0;right:0;height:100%;margin:auto;width:100vw;z-index:-1}.lines .line{position:absolute;width:1px;height:100%;top:0;left:50%;background:rgba(255,255,255,.06);overflow:hidden}.lines .line::after{content:"";display:block;position:absolute;height:15vh;width:100%;top:-50%;left:0;background:-webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0)),color-stop(75%,#fff),to(#fff));background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,#fff 75%,#fff 100%);-webkit-animation:run 7s 0s infinite;animation:run 7s 0s infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-timing-function:cubic-bezier(.4,.26,0,.97);animation-timing-function:cubic-bezier(.4,.26,0,.97)}.lines .line:nth-child(1){margin-left:-45%}.lines .line:nth-child(1)::after{-webkit-animation-delay:.5s;animation-delay:.5s}.lines .line:nth-child(3){margin-left:45%}.lines .line:nth-child(3)::after{-webkit-animation-delay:1s;animation-delay:1s}.lines .line:nth-child(4){margin-left:40%}.lines .line:nth-child(4)::after{-webkit-animation-delay:1.5s;animation-delay:1.5s}.lines .line:nth-child(5){margin-left:-40%}.lines .line:nth-child(5)::after{-webkit-animation-delay:2s;animation-delay:2s}.lines .line:nth-child(6){margin-left:35%}.lines .line:nth-child(6)::after{-webkit-animation-delay:2.5s;animation-delay:2.5s}.lines .line:nth-child(7){margin-left:-35%}.lines .line:nth-child(7)::after{-webkit-animation-delay:3s;animation-delay:3s}.lines .line:nth-child(8){margin-left:30%}.lines .line:nth-child(8)::after{-webkit-animation-delay:3.5s;animation-delay:3.5s}.lines .line:nth-child(9){margin-left:-30%}.lines .line:nth-child(9)::after{-webkit-animation-delay:4s;animation-delay:4s}.lines .line:nth-child(10){margin-left:25%}.lines .line:nth-child(10)::after{-webkit-animation-delay:4.5s;animation-delay:4.5s}.lines .line:nth-child(11){margin-left:-25%}.lines .line:nth-child(11)::after{-webkit-animation-delay:5s;animation-delay:5s}.lines .line:nth-child(12){margin-left:20%}.lines .line:nth-child(12)::after{-webkit-animation-delay:5.5s;animation-delay:5.5s}.lines .line:nth-child(13){margin-left:-20%}.lines .line:nth-child(13)::after{-webkit-animation-delay:6s;animation-delay:6s}.lines .line:nth-child(14){margin-left:15%}.lines .line:nth-child(14)::after{-webkit-animation-delay:6.5s;animation-delay:6.5s}.lines .line:nth-child(15){margin-left:-15%}.lines .line:nth-child(15)::after{-webkit-animation-delay:7s;animation-delay:7s}.lines .line:nth-child(16){margin-left:10%}.lines .line:nth-child(16)::after{-webkit-animation-delay:7.5s;animation-delay:7.5s}.lines .line:nth-child(17){margin-left:-10%}.lines .line:nth-child(17)::after{-webkit-animation-delay:8s;animation-delay:8s}.lines .line:nth-child(18){margin-left:5%}.lines .line:nth-child(18)::after{-webkit-animation-delay:8.5s;animation-delay:8.5s}.lines .line:nth-child(19){margin-left:-5%}.lines .line:nth-child(19)::after{-webkit-animation-delay:9s;animation-delay:9s}@-webkit-keyframes run{0%{top:-50%}100%{top:110%}}@keyframes run{0%{top:-50%}100%{top:110%}}.section-title-bg{color:#f0f0f0;font-size:85px;line-height:0;position:absolute;top:50%;left:0;z-index:-1;opacity:.8;font-family:Monoton,cursive;text-transform:uppercase;right:0;transform:translateY(-50%)}
  
.page.about{
  /* background-image: url(https://corp.changegroup.com/sites/default/cache/file/A3934901-67AD-4F4F-A0F533D877BBC2BF.jpg); */
  /* background: #2a364f; */

  background-color: #d99058;
background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);



  /* background-image: url("https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"); */
  background-size: cover;
}

.page .title{
  font-size: 100px;
  color: #FFF;
  text-transform: uppercase;
  -webkit-text-stroke: 2px #000;
  font-weight: 700;
}

.page-container.active{
  left: -10%;
  transform: rotateY(45deg) scale(0.5);
}

.nav-list{
  position: absolute;
  top: 50%;
  right: 10vw;
  transform: translateY(-50%);
  transition: 1s;
  opacity: 0;
}

.link{
  position: relative;
  color: #fff;
  text-transform: capitalize;
  font-size: 20px;
  padding: 10px;
  transition: .5s;
  letter-spacing: 2px;
  list-style: none;
  cursor: pointer;
  font-weight: 700;
}

.link:hover{
  opacity: 0.8;
  color: rgb(255, 98, 98);
  transform: translateX(-20px);
}

.nav-list.show{
  opacity: 1;
}


.ok_check{
height: 500px;
width: 1400px;
 overflow: hidden;
 overflow-y: scroll;
}

.ok_check_nt{
  border-radius: 3px;
    margin-left: 150px;
    background-color: #ffffff43;
height: 500px;
width: 1000px;
	 overflow: hidden;
	 overflow-y: scroll;
}

.des{
height: 170px;
width: 100px;
 overflow: hidden;
 overflow-y: scroll;
}
.inf_2{
height: 170px;
/* width: 100px; */
 overflow: hidden;
 overflow-y: scroll;
}
.pb{
height: 47px;
width: 80px;
background-color: rgba(23, 110, 136, 0.541);
border-radius: 3px;

}


.pb_2{
  margin-top: 3px;
height: 47px;
width: 80px;
background-color: rgba(188, 223, 191, 0.541);
border-radius: 3px;

}

.input-form{
  padding: 10px;
    background-color: #ffffff25;
    height: 60px;
    width: 300px;
}
.comment-sc{
height: 100px;
 overflow: hidden;
 overflow-y: scroll;
}


@keyframes slide{
  100%{
      left: 100%;
  }
}

@media (max-width: 996px){
body::after{
  content: 'See in 0.5x scale';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: 99999;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
}
}


</style>
  </head>
  <body>
      <nav class="navbar">
          <p class="brand">Fragranciaga</p>
          <div class="toggle-btn">
              <span></span>
              <span></span>
              <span></span>
              
      

          </div>
      </nav>
  
      <ul class="nav-list">
          <li class="link">All Products</li>
          <li class="link">Male</li>
    <li class="link">Female</li>
          <li class="link">About</li>
    <li class="link">Your Products</li>
    <li class="link">Cart</li>
    <li class="link">Notifications</li>
    
      </ul>
  
      <header class="page-container">
          <span class="overlay"></span>
          
          <section class="page home active">
                
<!-- <p>Science<br>Busisness<br>Arts</p> -->

<!-- <div class="ok_check"> -->




      
                
              
           
            
            



<div class="ok_check">
    
  @foreach($pro as $st)
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="container_2">	

<div class="product-details_2">
  
<h1>{{$st->name}}<br><small>Price:{{$st->price}}</small></h1>

  <div class="des">
    <p class="information">{{$st->des}}</p>

    
    
              </div>
             

                <a href="{{url('pay/'.$st->id)}}">          
    <button class="pb">Buy</button></a>
    <a href="{{url('cart/'.$st->id)}}"> <button class="pb">Add to Cart</button></a>
    
    
  
  
<!-- <div class="control">

<button class="btn">
 <span class="price">$250</span>
 <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
 <!-- <span class="buy">Get now</span> -->
<!-- </button> -->

<!-- </div> --> 
    
</div>

<div class="product-image">

<img src="product/{{$st->image}}" alt="">
<!-- <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt=""> -->


<div class="info">
  <a href="{{url('comment/'.$st->id)}}"> <h2> Comments</h2></a>
<div class="inf_2">
  <form action="{{url('add_comment')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="p_id" placeholder="enter username" class="input-form" readonly value='{{$st->id}}' required>
      <input type="hidden" name="u_n" placeholder="enter name" class="input-form" readonly value='{{$data->name}}' required>
    <input class="input-form" placeholder="Write Comments" name="comment" required>
   
    <button class="pb_2">Submit</button>
</form>
              </div>	
              

</div>
</div>

</div>

@endforeach
</div>

<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>          

          </section>
           
          <section class="page project">
              
   

      
                
              
           
            
           



          <div class="ok_check">
            @foreach($male as $st)
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div id="container_2">	
      
      <div class="product-details_2">
        
      <h1>{{$st->name}}<br><small>Price:{{$st->price}}</small></h1>
      
        <div class="des">
          
          <p class="information">{{$st->des}}</p>
    
          
          
                    </div>
    
                    <a href="{{url('pay/'.$st->id)}}"> 
    <button class="pb">Buy</button></a>
    <a href="{{url('cart/'.$st->id)}}"><button class="pb">Add to Cart</button></a>
        
        
    <!-- <div class="control">
      
      <button class="btn">
       <span class="price">$250</span>
       <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
       <!-- <span class="buy">Get now</span> -->
     <!-- </button> -->
      
    <!-- </div> --> 
          
    </div>
      
    <div class="product-image">
    
      <img src="product/{{$st->image}}" alt="">
      <!-- <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt=""> -->
      
    
    <div class="info">
      <a href="{{url('comment/'.$st->id)}}">  <h2> Comments</h2></a>
      <div class="inf_2">
      
        <form action="{{url('add_comment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="p_id" placeholder="enter username" class="input-form" readonly value='{{$st->id}}' required>
            <input type="hidden" name="u_n" placeholder="enter name" class="input-form" readonly value='{{$data->name}}' required>
          <input class="input-form" placeholder="Write Comments" name="comment" required>
         
          <button class="pb_2">Submit</button>
      </form>
                    </div>	
                    
      
    </div>
    </div>
    
    </div>
    
    @endforeach
  
    
    </div>
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>          
    


          </section>

          <section class="page project">
              
    
            
            



          <div class="ok_check">
    
            @foreach($female as $st)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div id="container_2">	
      
      <div class="product-details_2">
        
      <h1>{{$st->name}}<br><small>Price:{{$st->price}}</small></h1>
      
        <div class="des">
          <p class="information">{{$st->des}}</p>
    
         
          
                    </div>
    
                    <a href="{{url('pay/'.$st->id)}}"> 
    <button class="pb">Buy</button></a>
    <a href="{{url('cart/'.$st->id)}}">
      <button class="pb">Add to Cart</button></a>
        
        
    <!-- <div class="control">
      
      <button class="btn">
       <span class="price">$250</span>
       <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
       <!-- <span class="buy">Get now</span> -->
     <!-- </button> -->
      
    <!-- </div> --> 
          
    </div>
      
    <div class="product-image">
    
      <img src="product/{{$st->image}}" alt="">
      <!-- <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt=""> -->
      
    
    <div class="info">
      <a href="{{url('comment/'.$st->id)}}"> <h2> Comments</h2></a>
      <div class="inf_2">
    
        <form action="{{url('add_comment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="p_id" placeholder="enter username" class="input-form" readonly value='{{$st->id}}' required>
            <input type="hidden" name="u_n" placeholder="enter name" class="input-form" readonly value='{{$data->name}}' required>
          <input class="input-form" placeholder="Write Comments" name="comment" required>
         
          <button class="pb_2">Submit</button>
      </form>
           
                    </div>	
                    
      
    </div>
    </div>
    
    </div>
    
    @endforeach
    
    </div>
    

        
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>          
    
        
                    </section>

          <section class="page about">
              
              
                <div class="box-item">
                  <div class="flip-box">
                    <div class="flip-box-front text-center" style="background-image: url('student/{{$data->image}}');">
                    <div class="inner color-white">
                    
                      <h3 class="flip-box-header">{{$data->name}}<br>Email:{{$data->email}}</h3>
                      
        
        
        
        
        
            
          
        
        
        
        
        </h5>
                     
                      <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
                    </div>
                    </div>
                    <div class="flip-box-back text-center" style="background-image: url('student/{{$data->image}}');">
                    <div class="inner color-white">
                      <!-- <h3 class="flip-box-header">Never Sleeps</h3>
                      <p>A short sentence describing this callout is.</p> -->
                      <a href="{{url('ok_3/'.$data->id)}}">   <button class="flip-box-button">Edit Info</button></a>
                      <a href="{{url('log_out')}}">  <button class="flip-box-button">Log Out</button></a>
                      <a href="{{url('c_p/'.$data->id)}}"> 
                      <button class="flip-box-button">Change Password</button></a>
                     
                    </div>
                    </div>
                  </div>
                  </div>
        
                
            </div>
          
            <div class="lines">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>          
            
          
                </section>
        
  

<section class="page project">


  <h1 style="text-align: center; margin-left: 100px;">Total Purchased Amount:{{$sum}}</h1>



<div class="ok_check">
    
@foreach($delivery as $st)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="container_2">	

<div class="product-details_2">
  
<h1>{{$st->p_n}}<br><small>Price:{{$st->price}}</small></h1>

  <div class="des">
    <p class="information">{{$st->des}}</p>

   
    
              </div>
        
    
  
  
<!-- <div class="control">

<button class="btn">
 <span class="price">$250</span>
 <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
 <!-- <span class="buy">Get now</span> -->
<!-- </button> -->

<!-- </div> --> 
    
</div>

<div class="product-image">

  <img src="product/{{$st->image}}" alt="">
<!-- <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt=""> -->


<div class="info">
<h2> Details</h2>
<div class="inf_2">

              <p><b>Product ID: </b>{{$st->p_id}}</p>
              <p><b>Amount:</b>{{$st->amount}}</p>
              <p><b>Purchase Date:</b>{{$st->created_at}}</p>
              <p><a href="{{url('comment/'.$st->p_id)}}">Click here to see comments</a></p>
             
  
              </div>	
              

</div>
</div>

</div>



@endforeach
    </div>
    
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>          
    
        
    </section>



<section class="page project">


 

<!-- <h1 style="margin-left: 30px;">Total Amount :</h1> -->

<div class="ok_check">
    
  @foreach($cart as $st)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div id="container_2">	
      
      <div class="product-details_2">
        
      <h1>{{$st->name}}</h1>
      
        <div class="des">
          <a href="{{url('b_f_c/'.$st->p_id)}}"> 
          <small class="information">Click here for More Information</small>
    
         
          
                    </div>
                    <a href="{{url('pay/'.$st->p_id)}}"> 
                    <button class="pb">Buy</button> </a>

                    <a href="{{url('cart_delete/'.$st->id)}}"> 
                     <button class="pb">Delete</button> </a>
        
        
    <!-- <div class="control">
      
      <button class="btn">
       <span class="price">$250</span>
       <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->
       <!-- <span class="buy">Get now</span> -->
     <!-- </button> -->
      
    <!-- </div> --> 
          
    </div>
      
    <div class="product-image">
    
      <img src="product/{{$st->image}}" alt="">
      <!-- <img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt=""> -->
      
    
    <div class="info">
      <a href="{{url('comment/'.$st->p_id)}}"> <h2> Comments</h2></a>
      <div class="inf_2">
     
        <form action="{{url('add_comment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="p_id" placeholder="enter username" class="input-form" readonly value='{{$st->p_id}}' required>
            <input type="hidden" name="u_n" placeholder="enter name" class="input-form" readonly value='{{$data->name}}' required>
          <input class="input-form" placeholder="Write Comments" name="comment" required>
         
          <button class="pb_2">Submit</button>
      </form>
                    </div>	
                    
      
    </div>
    </div>
    
    </div>
    
    
    @endforeach
    
    
    </div>
    
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>          
    
        
    </section>
    




    <section class="page project">


  

      <!-- <h1 style="margin-left: 30px;">Total Amount :</h1> -->
      <h1 style="text-align: center;">Notifications</h1>
      <div class="ok_check_nt">
       
          @foreach($delivery as $St)
        <ul>
          <li style="background-color: #55535133; margin-top: 10px; border-radius: 3px;"><h3 style="margin-left: 3px;">{{$St->p_n}} has succesfully delivered to you</h3></li>
          
         
        </ul>
        
          @endforeach
          </div>
          
          <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>          
          
              
          </section>






      </header>
    <script>
        const container = document.querySelector('.page-container');
const pages = [...document.querySelectorAll('.page')];
const toggleBtn = document.querySelector('.toggle-btn');
const ul = document.querySelector('.nav-list');
const overlay = document.querySelector('.overlay');
const links = [...document.querySelectorAll('.link')];

let currentPageIndex = 0;

toggleBtn.addEventListener('click', () => {
  toggleBtn.classList.toggle('active');
  container.classList.toggle('active');
  ul.classList.toggle('show');
})

const changePage = (i) => {
  overlay.style.animation = `slide 1s linear 1`;
  setTimeout(() => {
      pages[currentPageIndex].classList.remove('active');
      pages[i].classList.add('active');
      currentPageIndex = i;
  }, 500);
  setTimeout(() => {
      overlay.style.animation = null;
  }, 1000);
}

links.forEach((item, i) => {
  item.addEventListener('click', () => {
      changePage(i);
  })
})
    </script>
  </body>
</html>
  
