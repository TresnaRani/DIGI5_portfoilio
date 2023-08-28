@extends('admin.layouts.layoutMaster')

@section('title', 'User Profile - Profile')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
@endsection

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-profile.css')}}" />
@endsection


@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-profile.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
</h4>



<!-- Header -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header-banner">
                <img src="{{ asset('assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                    <img src="{{ asset('upload/abater/'.auth()->user()->abater) }}" alt="user image"
                        class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div
                        class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>{{ auth()->user()->name }}</h4>
                            <ul
                                class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item">
                                    <i class='ti ti-color-swatch'></i> UX Designer
                                </li>
                                <li class="list-inline-item">
                                    <i class='ti ti-map-pin'></i> Vatican City
                                </li>
                                {{-- <li class="list-inline-item">
                                    <i class='ti ti-calendar'></i> Joined April 2021
                                </li> --}}
                            </ul>
                        </div>
                        <a href="{{ route('profile.view') }}" class="btn btn-primary">
                            <i class='ti ti-pencil-minus me-1'></i>View Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4">
            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                        class='ti-xs ti ti-user-check me-1'></i> Profile Edit</a></li>
        </ul>
    </div>
</div>
<!--/ Navbar pills -->

<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">
                <form action="{{ route('social-media.store') }}" method="POST" class="row g-3 needs-validation"
                    novalidate>
                    @csrf
                    <div class="col-md-6">
                        <x-input :value="old('twitter', $socialMedial->twitter  ?? '')" label='Twitter' name="twitter">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('instagram', $socialMedial->instagram  ?? '')" label='Instagram'
                            name="instagram">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('facebook', $socialMedial->facebook  ?? '')" label='Facebook'
                            name="facebook">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('whatsapp', $socialMedial->whatsapp  ?? '')" label='Whatsapp'
                            name="whatsapp">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('linkedin', $socialMedial->linkedin  ?? '')" label='Linkedin'
                            name="linkedin">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('dribble', $socialMedial->dribble  ?? '')" label='Dribble' name="dribble">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('youtube', $socialMedial->youtube  ?? '')" label='Youtube' name="youtube">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('tumble', $socialMedial->tumble  ?? '')" label='Tumble' name="tumble">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('kik', $socialMedial->kik  ?? '')" label='Kik' name="kik">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('vine', $socialMedial->vine  ?? '')" label='Vine' name="vine">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('telegram', $socialMedial->telegram  ?? '')" label='Telegram'
                            name="telegram">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('behance', $socialMedial->behance  ?? '')" label='Behance' name="behance">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('reddit', $socialMedial->reddit  ?? '')" label='Reddit' name="reddit">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('vimeo', $socialMedial->vimeo  ?? '')" label='Vimeo' name="vimeo">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('snapchat', $socialMedial->snapchat  ?? '')" label='Snapchat'
                            name="snapchat">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('steam', $socialMedial->steam  ?? '')" label='Steam' name="steam">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('pinterest', $socialMedial->pinterest  ?? '')" label='Pinterest'
                            name="pinterest">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('imo', $socialMedial->imo  ?? '')" label='Imo' name="imo">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('skype', $socialMedial->skype  ?? '')" label='Skype' name="skype">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('askme', $socialMedial->askme  ?? '')" label='Askme' name="askme">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('blogger', $socialMedial->blogger  ?? '')" label='Blogger' name="blogger">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('tiktok', $socialMedial->tiktok  ?? '')" label='TikTok' name="tiktok">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('spotify', $socialMedial->spotify  ?? '')" label='Spotify' name="spotify">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('quora', $socialMedial->quora  ?? '')" label='Quora' name="quora">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('wechat', $socialMedial->wechat  ?? '')" label='WeChat' name="wechat">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value="old('stackoverflow', $socialMedial->stackoverflow  ?? '')"
                            label='StackOverFlow' name="stackoverflow">
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