@extends('layouts/app') <!--uses the layouts > app.blade.php -->

@section('content')
<div class="pt-4">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center"> 
            <div class="menuTitleBorderA">
                <h1 style="color: black">Flavors</h1>
            </div>
        </div>
        <div class="col-md-4 text-center noPadding1">
            <div class="flavorBorder1">
                <div class="flavors">
                    <br>
                    <p><span style="color: red">Classic</span></p>
                    <p>BBQ</p>
                    <p>Mango Habanero</p>
                    <p>Original Buffalo</p>
                    <p>Chipotle Honey Mustard*</p>
                    <p>Thai Style*</p>
                    <p>Peanut Butter n Jelly</p>
                    <p>Sweet & Sour</p>
                    <p>Lemon Pepper</p>
                    <p>Salt & Pepper*</p>
                    <p>Garlic Jalapeno</p>
                    <p>Garlic Parmesan</p>
                    <p>Original Fried (Breaded)</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center noPadding3">
            <div class="flavorBorder2">
                <div class="flavors">
                    <br>
                    <p><span style="color: red">Dry Rub</span></p>
                    <p>7 Spice*</p>
                    <p>Ranch Ghost Pepper*</p>
                    <p>Salt & Vinegar</p>
                    <p>BBQ Rub</p>
                    <p>Cajun Rub</p>
                    <p>Spicy Cajun*</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center noPadding2">
            <div class="flavorBorder3">
                <div class="flavors">
                    <br>
                    <p><span style="color: red">Fusion</span></p>
                    <p>Sky Parkway</p>
                    <p>Saigon*</p>
                    <p>Cal Fire*</p>
                    <p>Cheesy Money</p>
                    <p>K-Town*</p>
                    <p>Honey Sriracha*</p>
                    <p>Orange Chicken<p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <br>
  <p><span style="float: right; padding-right: 85px">*Denotes Spicy</span></p>
</div>
@endsection