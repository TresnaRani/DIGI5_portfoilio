@extends('admin.layouts.layoutMaster')

@section('title', 'Validation - Forms')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold mb-4">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{ route('projects.index') }}" class="btn btn-primary align-items-center waves-effect waves-light">
        Project List
    </a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">
                <form action="{{ route('projects.store') }}" method="POST" class="row g-3 needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!-- Account Details -->
                    <div class="col-md-6">
                        <x-input label='Title' :required=true placeholder='Write Your Project Title' name="title">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input label='Banner' :required=true type=file name="banner">
                        </x-input>
                    </div>
                    <div class="col-md-12">
                        <x-input label='Project Link' placeholder="Project Link" name="link">
                        </x-input>
                    </div>
                    <div class="col-md-12">
                        <x-textarea label='Description' placeholder="Description" name="description"></x-textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection
