@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('URL List') }}</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($links as $link)
                        <li class="list-group-item"><a href="{{ route('links.show', $link->id) }}">
                                {{ route('links.show', $link->id) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection