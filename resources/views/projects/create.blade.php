@extends('layout')

@section('title')
@lang('Projects')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form  class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('projects.store')}}">
                @csrf
                <h2> @lang('Create Project') </h2>
                <hr>
                @include('partials.errors')
                @include('projects._forms')
                <input class="btn-primary btn-lg btn-block" type="submit" value="@lang('Save Project')">
            </form>
        </div>
    </div>
</div>
@endsection