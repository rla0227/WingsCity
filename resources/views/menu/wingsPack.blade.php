@extends('layouts/app') <!--uses the layouts > app.blade.php -->

@section('content')
<div class="pt-4">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center"> 
            <div class="menuTitleBorderA">
                <h1 style="color: black">Wings Pack</h1>
            </div>
        </div>
        <div class="col-md-6 text-center noPadding1">
            <div class="wingsPackBorder1">
                <div class="wingsPack">
                    <br>
                    <p>8 Signature Wings w/ 2 sides<span style="float:right">$17.98</span></p>
                    <p>8 Signature Wings w/ 4 sides<span style="float:right">$22.98</span></p>
                    <p>16 Signature Wings w/ 2 sides<span style="float:right">$27.98</span></p>
                    <p>16 Signature Wings w/ 4 sides<span style="float:right">$32.98</span></p>
                    <p>32 Signature Wings w/ 2 sides<span style="float:right">$47.98</span></p>
                    <p>32 Signature Wings w/ 4 sides<span style="float:right">$52.98</span></p>
                    <p>All Wings Pack orders are served with 4 veggie sticks</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center noPadding2">
            <div class="wingsPackBorder2">
                <div class="wingsPack">
                    <br>
                    <p><span style="color: red">Flavors</p>
                    <p><span style="color: rgb(110 48 168)">Classic:</span>
                    BBQ, Mango Habanero, Original Buffalo, Chipotle Honey Mustard*, Thai Style,
                    Peanut Butter & Jelly, Sweet & Sour, Lemon Pepper, Salt & Pepper*, Garlic Jalapeno,
                    Garlic Parmesan, Original Fried (Breaded) </p>
                    <p><span style="color: rgb(110 48 168)">Dry Rub:</span>
                    7 Spice*, Ranch Ghost Pepper*, Salt & Vinegar, BBQ Rub, Cajun Rub, Spicy Cajun*</p>
                    <p><span style="color: rgb(110 48 168)">Fusion:</span>
                    Sky Parkway, Saigon*, Cal Fire*, Cheesy Money, K-Town*, Honey Sriacha*, Orange Chicken</p>
                    <br>
                    <p><span style="color: red">Dips</p>
                    <p>Ranch, Buffalo, Dill, Blue Cheese </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection