@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Patient search results</h2>
                    <hr>
                    <?php if( empty($searchResults) )  : ?>
                      <p>no results found, sorry</p>
                    <?php else : ?>

                      @foreach ($searchResults as $result)
                        <a href="{{ url('patient/'. $result->id) }}">
                          {{ $result->name }}
                        </a> <br>
                        {{ $result->address }}
                        <hr>
                      @endforeach
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
