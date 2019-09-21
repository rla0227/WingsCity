@extends('layouts/app')

@section('content')

<div class="container pb-4 pt-4">
    <div class="row">
        <div class="col-md-4">
            <!--Nested row-->
              <div class="row">
                <div class="col-md-12">
                    <div class="sideBarContent">
                      <span style="color:red">Contact Us</span>
                      <br>
                      <span> (916)-594-7659 </span>
                      <br>
                        <a href="https://www.google.com/maps/place/Wings+City/@38.5017873,-121.4377062,17z/data=!3m1!4b1!4m5!3m4!1s0x809ac56ff913accb:0x94582a7f1cebc3e1!8m2!3d38.5017873!4d-121.4355175" target="blank" style="text-decoration:none; color: black" >5555 Sky Parkway #243
                        <br>
                        Sacramento, CA 95823 </a>
                      </p>
                    </div>
                </div>
              </div>
            <!--Nested rows-->
            <div class="row">
                <div class="col-md-12">
                    <div class="sideBarContent">
                      <span style="color:red">Hours of Operation</span>
                      <p>
                        Open 7 days a week!
                        <br>
                        Sunday-Saturday:
                        <br>
                        11:00am-10:00pm
                      </p>
                    </div>
                  </div>
              </div>
            </div>
        <div class="col-md-8 text-right">
            <a href="https://www.google.com/maps/place/Wings+City/@38.5017873,-121.4377062,17z/data=!3m1!4b1!4m5!3m4!1s0x809ac56ff913accb:0x94582a7f1cebc3e1!8m2!3d38.5017873!4d-121.4355175" target="blank"> <img src="{{URL('/images/location.png')}}" class= "img-fluid" style = "width:680px; border: 2px solid rgb(110 48 168)"></a>
        </div>
      </div>
    </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="logoFooter">
            <h3>Follow us on Instagram and FaceBook @wingscity916 </h3>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection