@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <h3>Subscribe Email</h3>
                <form action="mailist" method="post">
                {{ csrf_field() }}
                    <input type="checkbox" name="mailist" @if($subscribe) checked @endif value="subscribe"> Subscribe Mailist<br>
                    <input type="submit"  value="submit">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
