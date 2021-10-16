@extends('layouts.app')

@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>{{ __('URL List') }}</h2>
    </div>
    <div class="col-md-6">
        <a href="{{ route('links.create') }}" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">{{ __('Add New URL') }}</a>
    </div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>{{ __('Link') }}</th>
                        <th>{{ __('Tools') }}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>{{ __('Link') }}</th>
                        <th>{{ __('Tools') }}</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($links as $link)
                    <tr>
                        <td>
                            @csrf
                            <a href="{{ route('links.show', $link->id) }}">
                                {{ route('links.show', $link->id) }}
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('links.destroy', $link->id) }}">
                                @method('DELETE')
                                @csrf

                                <a class="btn btn-primary" onclick="$(this).closest('form').submit();">{{ __('Delete') }}</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
</div>





@endsection