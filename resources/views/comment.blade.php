<!DOCTYPE html>
<html lang="en">
<head>
    <style>

html {
  font-family: sans-serif;
  box-sizing: border-box;
  background-color: #d99058;
background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);
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

.body{
    background-color: #d99058;
background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);
}

.box-container {
    background-color: #d99058;
background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  /* padding: 35px 15px; */
  /* width: 1400px; */
 
}

@media screen and (min-width:1380px) {
  .box-container {
    flex-direction: row
  }
}

.box-item {
  position: relative;
  -webkit-backface-visibility: hidden;
  /* width: 915px; */
  
  margin-bottom: 35px;
  max-width: 100%;
}
/* .box-item:hover {
  
  width: 715px;
  
} */

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
  min-height: 715px;
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
.ok{
    /* height: 560px; */
    width: 915px;
}
.ok_2{
    border-radius: 3px;
    margin-left: 150px;
    background-color: #ffffff43;
height: 500px;
width: 500px;
	 overflow: hidden;
	 overflow-y: scroll;
}
.input-form{
    margin-top: 10px;
    background-color: #ffffff25;
    height: 90px;
    width:300px;
}

    </style>
    
</head>

<body>



    
    <div class="box-container">
        <div class="ok">
          <div class="box-item">
          <div class="flip-box">
         
            <div class="flip-box-front text-center">
                
                <h3 class="flip-box-header">Comments</h3>
               
                <div class="ok_2">
                @foreach($comment as $st)
                <p><b>{{$st->u_n}}:</b>{{$st->comment}}</p>
                @endforeach
            </div>
            
                <!-- <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img"> -->
               
                <form action="{{url('add_comment')}}" method="post" enctype="multipart/form-data">
   @csrf
                <!-- <input class="input-form">
                <input class="input-form"> -->

    <input type="hidden" name="p_id" placeholder="enter username" class="input-form" readonly value='{{$pro->id}}' required>
      <input type="hidden" name="u_n" placeholder="enter name" class="input-form" readonly value='{{$Std->name}}' required>
                    <input name="comment" placeholder="Write comment" class="input-form" required>
                    <button>Submit</button>
                </form>
            <a href="{{url('display')}}">
                <p>Main Menu</p></a>
            </div>
           
            </div>
          </div>
          </div>
        </div>
      </div>
   
</body>
</html>