@extends('marketing::layouts.app')

@section('title', __("Templates"))

@section('heading')

@stop

@section('content')

    <div class="card">
        <div class="card-header">
            {{ __('Edit Template') }}
        </div>
        <div class="card-body">
            <form action="{{ route('marketing.templates.update', $template->id) }}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                @include('marketing::templates.partials.form')
            </form>
        </div>
    </div>



@stop
