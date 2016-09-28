@extends('templates.public')

@section('content')

    <div class="container">
        <div class="content">
            <div class="title">
                <h2><strong>{{ trans('messages.contactBook') }}</strong></h2>
            </div>
            <div class="content">
                <p>{{ trans('messages.contactBookDescription') }}</p>
                <ul>
                    <li>{{ trans('messages.name') }}</li>
                    <li>{{ trans('messages.surname') }}</li>
                    <li>{{ trans('messages.email') }}</li>
                    <li>{{ trans('messages.phone') }}</li>
                    <li>{{ trans('messages.otherDetails') }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
