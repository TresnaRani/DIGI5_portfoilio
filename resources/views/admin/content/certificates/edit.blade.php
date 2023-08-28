@extends('admin.layouts.layoutMaster')

@section('title', 'Validation - Forms')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
</h4>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">
                <form action="{{ route('certificates.update',$certificate->id) }}" method="POST"
                    class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <x-input :value='$certificate->title' label='Title' :required=true
                            placeholder='Write Your Cartification Name' name="title">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value='$certificate->institute_name' label='Institute Name' :required=true
                            placeholder='Write Your Institute Name' name="institute_name">
                        </x-input>
                    </div>
                    <div class="col-md-12">
                        <x-input :value='$certificate->link' label='Link' placeholder='Link' name="link">
                        </x-input>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection
