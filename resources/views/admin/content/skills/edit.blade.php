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
                <form action="{{ route('skills.update',$skill->id) }}" method="POST"
                    class="row g-3 needs-validation" novalidate >
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <x-input :value='$skill->name' label='Name' :required=true placeholder='Write Your Skill Name' name="name">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value='$skill->percentage' label='Skill Percentage (%)' type=number :required=true
                            placeholder='Write Your Skill Percentage' name="percentage">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value='$skill->color' label='Color' type=color placeholder='color' name="color">
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
