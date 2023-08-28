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
                    <img src="{{ asset('upload/abater/'.$user->abater) }}" alt="user image"
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
                        <a href="{{ route('social-media.create') }}" class="btn btn-primary">
                            <i class='ti ti-pencil-minus me-1'></i>Edit Social Media
                        </a>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                            <i class='ti ti-pencil-minus me-1'></i>Edit Profile
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
                        class='ti-xs ti ti-user-check me-1'></i> Profile</a></li>
        </ul>
    </div>
</div>
<!--/ Navbar pills -->

<!-- User Profile Content -->
<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-5">
        <!-- About User -->
        <div class="card mb-4">
            <div class="card-body">
                <small class="card-text text-uppercase">About</small>
                <ul class="list-unstyled mb-4 mt-3">
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-user"></i><span class="fw-bold mx-2">Full
                            Name:</span> <span>{{ auth()->user()->name }}</span></li>
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span
                            class="fw-bold mx-2">Status:</span> <span>Active</span></li>
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-crown"></i><span class="fw-bold mx-2">CV
                            Link:</span> <span><a href="{{ auth()->user()->cv_link }}" target="_blank"
                                rel="noopener noreferrer">Link</a></span></li>
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-arrow-bar-to-down"></i><span
                            class="fw-bold mx-2">CV
                            Download:</span> <span><a href="{{ asset('upload/cv/'.auth()->user()->cv ) }}"
                                target="_blank" rel="noopener noreferrer">Link</a></span></li>
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-flag"></i><span
                            class="fw-bold mx-2">Country:</span> <span>USA</span></li>
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description"></i><span
                            class="fw-bold mx-2">Languages:</span> <span>English</span></li>
                </ul>
                <small class="card-text text-uppercase">Contacts</small>
                <ul class="list-unstyled mb-4 mt-3">
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span
                            class="fw-bold mx-2">Contact:</span> <span>{{ auth()->user()->phone }}</span></li>
                    {{-- <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-skype"></i><span
                            class="fw-bold mx-2">Skype:</span> <span>john.doe</span></li> --}}
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-mail"></i><span
                            class="fw-bold mx-2">Email:</span> <span>{{ auth()->user()->email }}</span></li>
                </ul>
                {{-- <small class="card-text text-uppercase">Teams</small>
                <ul class="list-unstyled mb-0 mt-3">
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-angular text-danger me-2"></i>
                        <div class="d-flex flex-wrap"><span class="fw-bold me-2">Backend Developer</span><span>(126
                                Members)</span></div>
                    </li>
                    <li class="d-flex align-items-center"><i class="ti ti-brand-react-native text-info me-2"></i>
                        <div class="d-flex flex-wrap"><span class="fw-bold me-2">React Developer</span><span>(98
                                Members)</span></div>
                    </li>
                </ul> --}}
            </div>
        </div>
        <!--/ About User -->
        <!-- Profile Overview -->
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text text-uppercase">Overview</p>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span
                            class="fw-bold mx-2">Total Projects:</span> <span>{{ $projects->count() }}</span></li>
                    <li class="d-flex align-items-center mb-3"><i class="ti ti-layout-grid"></i><span
                            class="fw-bold mx-2">Total Certificates:</span> <span>{{ $certificates->count() }}</span>
                    </li>
                    <li class="d-flex align-items-center"><i class="ti ti-users"></i><span class="fw-bold mx-2">Total
                            Skill:</span> <span>{{ $skills->count() }}</span></li>
                </ul>
            </div>
        </div>
        <!--/ Profile Overview -->
        <!-- Profile Overview -->
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text text-uppercase">Social Media Links</p>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->twitter ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-twitter"></i>
                            <span class="fw-bold mx-2">Twitter</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->instagram ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-instagram"></i>
                            <span class="fw-bold mx-2">Instagram</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->facebook ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-facebook"></i>
                            <span class="fw-bold mx-2">Facebook</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->whatsapp ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-whatsapp"></i>
                            <span class="fw-bold mx-2">Whatsapp</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->linkedin ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-linkedin"></i>
                            <span class="fw-bold mx-2">LinkedIn</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->dribble ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">Dribble</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->youtube ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-youtube"></i>
                            <span class="fw-bold mx-2">Youtube</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->tumble ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">Tumble</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->kik ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">Kik</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->vine ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">Vine</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->telegram ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-telegram"></i>
                            <span class="fw-bold mx-2">Telegram</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->behance ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-behance"></i>
                            <span class="fw-bold mx-2">Behance</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->reddit ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-reddit"></i>
                            <span class="fw-bold mx-2">Reddit</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->vimeo ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-vimeo"></i>
                            <span class="fw-bold mx-2">Vimeo</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->snapchat ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-snapchat"></i>
                            <span class="fw-bold mx-2">Snapchat</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->steam ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-steam"></i>
                            <span class="fw-bold mx-2">Steam</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->pinterest ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-pinterest"></i>
                            <span class="fw-bold mx-2">Pinterest</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->imo ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">Imo</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->skype ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-skype"></i>
                            <span class="fw-bold mx-2">skype</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->askme ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">AskMe</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->blogger ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-blogger"></i>
                            <span class="fw-bold mx-2">Blogger</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->tiktok ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-tiktok"></i>
                            <span class="fw-bold mx-2">TikTok</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->spotify ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-spotify"></i>
                            <span class="fw-bold mx-2">Spotify</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->quora ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-broadcast"></i>
                            <span class="fw-bold mx-2">Quora</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->wechat ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-wechat"></i>
                            <span class="fw-bold mx-2">WeChat</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <a href="{{ $socialMedia->stackoverflow ?? '#' }}" target="_blank" rel="noopener noreferrer">
                            <i class="ti ti-brand-stackoverflow"></i>
                            <span class="fw-bold mx-2">StackOverFlow</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/ Profile Overview -->
    </div>
    <div class="col-xl-8 col-lg-7 col-md-7">
        <!-- Activity Timeline -->
        <div class="card card-action mb-4">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Experiences</h5>
            </div>
            <div class="card-body pb-0">
                <ul class="timeline ms-1 mb-0">
                    @foreach ($experiences as $experience)
                    <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-primary"></span>
                        <div class="timeline-event">
                            <div class="timeline-header">
                                <h6 class="mb-0">{{ $experience->title }}</h6>
                            </div>
                            <p class="mb-2">{{ $experience->position }}</p>
                            <div class="d-flex flex-wrap">
                                <div class="ms-1">
                                    <h6 class="mb-0">From - To</h6>
                                    <span>({{ $experience->from }}) - ({{ $experience->to }})</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/ Activity Timeline -->
        <!-- Activity Timeline -->
        <div class="card card-action mb-4">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Education</h5>
            </div>
            <div class="card-body pb-0">
                <ul class="timeline ms-1 mb-0">
                    @foreach ($educations as $education)
                    <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-primary"></span>
                        <div class="timeline-event">
                            <div class="timeline-header">
                                <h6 class="mb-0">{{ $education->institution_name }} ({{ $education->education_label }})
                                </h6>
                            </div>
                            <p class="mb-2">{{ $education->course_name }}</p>
                            <div class="d-flex flex-wrap">
                                <div class="ms-1">
                                    <h6 class="mb-0">From - To</h6>
                                    <span>({{ $education->from }}) - ({{ $education->to }})</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/ Activity Timeline -->
        {{-- <div class="row">
            <!-- Connections -->
            <div class="col-lg-12 col-xl-6">
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Connections</h5>
                        <div class="card-action-element">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="ti ti-dots-vertical text-muted"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Cecilia Payne</h6>
                                            <small class="text-muted">45 Connections</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-label-primary btn-icon btn-sm"><i
                                                class="ti ti-user-check ti-xs"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Curtis Fletcher</h6>
                                            <small class="text-muted">1.32k Connections</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-primary btn-icon btn-sm"><i
                                                class="ti ti-user-x ti-xs"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/avatars/10.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Alice Stone</h6>
                                            <small class="text-muted">125 Connections</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-primary btn-icon btn-sm"><i
                                                class="ti ti-user-x ti-xs"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Darrell Barnes</h6>
                                            <small class="text-muted">456 Connections</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-label-primary btn-icon btn-sm"><i
                                                class="ti ti-user-check ti-xs"></i></button>
                                    </div>
                                </div>
                            <li class="mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Eugenia Moore</h6>
                                            <small class="text-muted">1.2k Connections</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-label-primary btn-icon btn-sm"><i
                                                class="ti ti-user-check ti-xs"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center">
                                <a href="javascript:;">View all connections</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Connections -->
            <!-- Teams -->
            <div class="col-lg-12 col-xl-6">
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Teams</h5>
                        <div class="card-action-element">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="ti ti-dots-vertical text-muted"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/icons/brands/react-label.png') }}"
                                                alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">React Developers</h6>
                                            <small class="text-muted">72 Members</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/icons/brands/support-label.png') }}"
                                                alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Support Team</h6>
                                            <small class="text-muted">122 Members</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:;"><span class="badge bg-label-primary">Support</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/icons/brands/figma-label.png') }}"
                                                alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">UI Designers</h6>
                                            <small class="text-muted">7 Members</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:;"><span class="badge bg-label-info">Designer</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/icons/brands/vue-label.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Vue.js Developers</h6>
                                            <small class="text-muted">289 Members</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar me-2">
                                            <img src="{{ asset('assets/img/icons/brands/twitter-label.png') }}"
                                                alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="me-2 ms-1">
                                            <h6 class="mb-0">Digital Marketing</h6>
                                            <small class="text-muted">24 Members</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:;"><span
                                                class="badge bg-label-secondary">Marketing</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center">
                                <a href="javascript:;">View all teams</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Teams -->
        </div>
        <!-- Projects table -->
        <div class="card mb-4">
            <div class="card-datatable table-responsive">
                <table class="datatables-projects table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Leader</th>
                            <th>Team</th>
                            <th class="w-px-200">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--/ Projects table --> --}}
    </div>
</div>
<!--/ User Profile Content -->
@endsection