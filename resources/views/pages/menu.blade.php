@extends('layouts/app')

@section('content')
    <!--<h1><?php echo $title; ?></h1>-->
    

<div class="container pb-4 pt-4">
    <div class="row">
        <div class="col-md-4"><a href="/appetizer" ><img src="{{URL('/images/logo.jpg')}}"  alt = "Appetizers" class="img-fluid img-thumbnail" ></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Appetizers</figcaption>
        </div>
        <div class="col-md-4"><a href="/salads" ><img src="{{URL('/images/logo.jpg')}}" alt = "Salads" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Salads</figcaption>
        </div>
        <div class="col-md-4"><a href="/specialties" ><img src="{{URL('/images/official_img/fusion_nachos.jpeg')}}" alt = "Specialties" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Specialties</figcaption>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-4"><a href="/wings" ><img src="{{URL('/images/official_img/lemon_pepper.jpeg')}}" alt = "Wings" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Signature Wings</figcaption>
        </div>
        <div class="col-md-4"><a href="/combo" ><img src="{{URL('/images/official_img/combo.jpeg')}}" alt = "Wing City Combo" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Wing City Combo</figcaption>
        </div>
        <div class="col-md-4"><a href="/wingsPack" ><img src="{{URL('/images/official_img/pack.jpeg')}}" alt = "Wings Pack" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Wings Pack</figcaption>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-4"><a href="/sides" ><img src="{{URL('/images/logo.jpg')}}" alt = "Sides" class="img-fluid img-thumbnail"></a> 
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Sides</figcaption>
        </div>
        <div class="col-md-4"><a href="/dips" ><img src="{{URL('/images/logo.jpg')}}" alt = "Dips" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Dips</figcaption>
        </div>
        <div class="col-md-4"><a href="/kids" ><img src="{{URL('/images/logo.jpg')}}" alt = "Kids Smiley Meals" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Kids Smiley Meals</figcaption>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-4"><a href="/specialtyDrinks" ><img src="{{URL('/images/logo.jpg')}}" alt = "Specialty Drinks" class="img-fluid img-thumbnail"></a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Specialty Drinks</figcaption>
        </div>
        <div class="col-md-4"><a href="/beverages" ><img src="{{URL('/images/logo.jpg')}}" alt = "Beverages" class="img-fluid img-thumbnail"> </a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Beverages</figcaption>
        </div>
        <div class="col-md-4"><a href="/beer" ><img src="{{URL('/images/logo.jpg')}}" alt = "Beer" class="img-fluid img-thumbnail"> </a>
            <figcaption class="figure-caption bg-dark text-center fig-thumbnail">Beer</figcaption>
        </div>
    </div>
</div>



@endsection