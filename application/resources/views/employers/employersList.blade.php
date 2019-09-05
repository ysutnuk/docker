@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row" style="margin: 20px -15px">
            <div class="control col">
                <a class="btn btn-primary" role="button" href="{{route('employers.create')}}"> add new employer</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <tr>
                        <td> First name </td>
                        <td> Last name </td>
                        <td> Email </td>
                        <td> Phone </td>
                        <td> Company name </td>
                        <td> Actions </td>
                    </tr>

                    @foreach($employers as $employer)
                        <tr>
                            <td> {{ $employer->first_name }} </td>
                            <td> {{ $employer->last_name }} </td>
                            <td> {{ $employer->email }} </td>
                            <td> {{ $employer->phone }} </td>
                            <td> {{ $employer->company->name ?? 'workless' }} </td>
                            <td>
                                <a href="{{route('employers.edit',      ['employer' => $employer->id])}}"> Update </a> |
                                {{--<a href="{{route('companies.destroy',   ['company' => $company->id])}}"> Delete </a>--}}
                                <form style="display:inline" method="post" action="{{route('employers.destroy',   ['employer' => $employer->id])}}">
                                    @method('delete')
                                    {{csrf_field()}}
                                    <a href="#" onclick="this.parentElement.submit()"> Delete </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{$employers->links()}}
    </div>
@endsection
