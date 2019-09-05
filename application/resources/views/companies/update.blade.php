@extends('layouts.main')

@section('content')
    <form method="post" action="{{route('companies.update', ['company' => $company->id])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Name</label>
                <input class="form-control @if($errors->has('name')) is-invalid @endif" type="text" name="name" value="{{$company->name}}" placeholder="name" id="name">
                @if($errors->has('name'))
                    <div class="invalid-feedback"> {{$errors->first('name')}} </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <input class="form-control @if($errors->has('email')) is-invalid @endif" type="text" name="email" value="{{$company->email}}" placeholder="email" id="email">
                @if($errors->has('email'))
                    <div class="invalid-feedback"> {{$errors->first('email')}}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="logo">Logo</label>
                <input class="form-control @if($errors->has('logo')) is-invalid @endif" type="file" name="logo" id="logo">
                @if($errors->has('logo'))
                    <div class="invalid-feedback"> {{$errors->first('logo')}}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="website">First name</label>
                <input  class="form-control @if($errors->has('website')) is-invalid @endif" type="text" name="website" value="{{$company->website}}" placeholder="website" id="website">
                @if($errors->has('website'))
                    <div class="invalid-feedback"> {{$errors->first('website')}}</div>
                @endif
            </div>
        </div>

        <button class="btn btn-primary" type="submit"> Create </button>
    </form>

@endsection


