@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Shorten a new link') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                        <label for="url">{{ __('ENTER LONG URL') }}</label>
                            <input type="text" name="url" id="url" class="form-control" placeholder="https://...">

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">{{ __('Create') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection