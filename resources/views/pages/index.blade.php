@extends('layouts/app') <!--uses the layouts > app.blade.php -->

@section('content')

    <!--<h1>{{$title}}</h1>-->
<div class="pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center" >
        <a href="/wings" style="text-decoration: none">
          <div class="foreground">
            <div class="title">
              <h1>Signature Wings</h1>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 text-center" >
        <a href="/specialties" style="text-decoration: none">
          <div class="foreground">
            <div class="title">
              <h1>Specialties</h1>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="row py-4">
      <div class="col-md-12 text-center" >
        <a href="/flavors" style="text-decoration: none">
          <div class="foreground1">
            <div class="title">
              <h1>Flavors</h1>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center" >
        <a href="" style="text-decoration: none">
          <div class="foreground1">
            <div class="title">
              <h1 >Wings Pack</h1>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


@endsection

<!-- Add noPadding inside <div class="col-md-6 text-center"> here if you want no space -->