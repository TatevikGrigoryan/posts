@extends('layouts.un_auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post details') }}</div>

                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <label class="col-md-4 col-form-label text-md-end text-secondary">{{ __('TITLE') }}</label>

                            <div class="col-md-6"> {{ $data['title'] }}</div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-4 col-form-label text-md-end text-secondary">{{ __('DESCRIPTION') }}</label>

                            <div class="col-md-6"> {{ $data['description'] }}</div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-4 col-form-label text-md-end text-secondary">{{ __('CREATED DATE') }}</label>

                            <div class="col-md-6"> {{ $data['created_at'] }}</div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <label class="col-md-4 col-form-label text-md-end text-secondary">{{ __('AUTHOR') }}</label>

                            <div class="col-md-6"> {{ $data['user']['name'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
