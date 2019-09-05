@extends('layouts.main')

@section('content')
    <form method="post" action="{{route('employers.update', ['employer' => $employer->id])}}">
        {{csrf_field()}}
        @method('PUT')
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="first_name">First name</label>
                <input class="form-control @if($errors->has('first_name')) is-invalid @endif" type="text" name="first_name" value="{{$employer->first_name}}" placeholder="First name" id="first_name">
                @if($errors->has('first_name'))
                    <div class="invalid-feedback"> {{$errors->first('first_name')}} </div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="last_name">Last name</label>
                <input class="form-control @if($errors->has('last_name')) is-invalid @endif" type="text" name="last_name" value="{{$employer->last_name}}" placeholder="Last name" id="last_name">
                @if($errors->has('last_name'))
                    <div class="invalid-feedback"> {{$errors->first('last_name')}}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <input class="form-control @if($errors->has('email')) is-invalid @endif" type="email" name="email" value="{{$employer->email}}" placeholder="Email" id="email">
                @if($errors->has('email'))
                    <div class="invalid-feedback"> {{$errors->first('email')}}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="website">Phone</label>
                <input  class="form-control @if($errors->has('phone')) is-invalid @endif" type="text" name="phone" value="{{$employer->phone}}" placeholder="phone" id="phone">
                @if($errors->has('phone'))
                    <div class="invalid-feedback"> {{$errors->first('phone')}}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="website">company name</label>
                <select class="custom-select custom-select-lg mb-3 @if($errors->has('company_id')) is-invalid @endif" name="company_id">
                    <option value=""> Select company </option>
                    @foreach($companies as $company)
                        <option value="{{$company->id}}" @if($employer->company_id == $company->id) selected @endif> {{$company->name}} </option>
                    @endforeach
                </select>
                @if($errors->has('company_id'))
                    <div class="invalid-feedback"> {{$errors->first('company_id')}}</div>
                @endif
            </div>
        </div>

        <button class="btn btn-primary" type="submit"> Create </button>
    </form>

@endsection


