@extends('layouts/app') <!--uses the layouts > app.blade.php -->

@section('content')
<div class="pt-4">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center"> 
            <div class="menuTitleBorderA">
                <h1 style="color: black">Signature Wings</h1>
            </div>
        </div>
        <div class="col-md-6 text-center noPadding1">
            <div class="wingsBorder1">
                <div class="wings">
                    <br>
                    <p><span style="color: red">Step 1.</span> Bone-in or Boneless </p>
                    <p><span style="color: red">Step 2.</span> Regular or Breaded</p>
                    <p><span style="color: red">Step 3.</span> Number of Wings</p>
                    <p>(Number of Flavors and Dips included per 8 count of wings ordered)</p>
                    <p><li>8 count<span style="float:right">$11.99</span></li> </p>
                    <p><li>16 count<span style="float:right">$21.99</span></li> </p>
                    <p><li>32 count<span style="float:right">$41.99</span></li> </p>
                    <p><span style="color: red">Step 4.</span> Sides (optional)</p>
                    <p>(Cole Slaw, Veggie Sticks, Hawaiian Role, Steamed Rice)</p>
                    <p><li>2 Sides<span style="float:right">+$5.99</span></li> </p>
                    <p><li>4 Sides<span style="float:right">+$10.99</span></li> </p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center noPadding2">
            <div class="wingsBorder2">
                <div class="wings">
                    <br>
                    <p><span style="color: red"><u>Flavors</u></p>
                    <p><span style="color: rgb(110 48 168)">Classic:</span>
                    BBQ, Mango Habanero, Original Buffalo, Chipotle Honey Mustard*, Thai Style,
                    Peanut Butter & Jelly, Sweet & Sour, Lemon Pepper, Salt & Pepper*, Garlic Jalapeno,
                    Garlic Parmesan, Original Fried (Breaded) </p>
                    <p><span style="color: rgb(110 48 168)">Dry Rub:</span>
                    7 Spice*, Ranch Ghost Pepper*, Salt & Vinegar, BBQ Rub, Cajun Rub, Spicy Cajun*</p>
                    <p><span style="color: rgb(110 48 168)">Fusion:</span>
                    Sky Parkway, Saigon*, Cal Fire*, Cheesy Money, K-Town*, Honey Sriacha*, Orange Chicken</p>
                    <br>
                    <p><span style="color: red"><u>Dips</u></p>
                    <p>Ranch, Buffalo, Dill, Blue Cheese </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection