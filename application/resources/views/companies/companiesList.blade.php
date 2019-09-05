@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row" style="margin: 20px -15px">
            <div class="control col">
                <a class="btn btn-primary" role="button" href="{{route('companies.create')}}"> add new company</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <tr>
                        <td> name </td>
                        <td> email </td>
                        <td> logo </td>
                        <td> website </td>
                        <td> action </td>
                    </tr>

                @foreach($companies as $company)
                        <tr>
                            <td> {{$company->name}} </td>
                            <td> {{$company->email}} </td>
                            <td> <img src="{{asset($company->logo)}}" alt="logo" style="max-width: 200px; max-height: 45px; height:auto"> </td>
                            <td> <a href="{{$company->website}}"> {{$company->website}} </a></td>
                            <td>
                                <a href="{{route('companies.edit',      ['company' => $company->id])}}"> Update </a> |
                                {{--<a href="{{route('companies.destroy',   ['company' => $company->id])}}"> Delete </a>--}}
                                <form style="display:inline" method="post" action="{{route('companies.destroy',   ['company' => $company->id])}}">
                                    @method('delete')
                                    {{csrf_field()}}
                                    <a href="#" onclick="this.parentElement.submit()"> Delete </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{$companies->links()}}
            </div>
        </div>
    </div>
@endsection
