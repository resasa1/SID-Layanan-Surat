@extends('layouts.app')
@section("title") Login @endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card bg-white border">
                 
<div class="card-body">
 <form method="POST" action="{{ route('loginaksi') }}" >
 @csrf
 <div class="form-group row">
    <div class="col-md-12">
    <label for="nik" class="col-sm-12 colform-label pl-0">{{ __('NIK') }}</label>
 <br>
<input id="nik" type="nik" class="form-control" name="nik" required="">

    </div>
 </div>
<div class="form-group row">
     <div class="col-md-12">
<label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
    <input id="password" type="password" class="form-control" name="password" required="">
        
     </div>
     </div>

    <br>
    <div class="form-group row mb-0">
        <div class="col-md-12">
         <button type="submit" class="btn-block btn btn-primary"> {{ __('Login') }} </button>
</div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('styles')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endpush
@push('script')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refresh_captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });
</script>
@endpush


