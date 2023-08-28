@extends('admin.layouts.layoutMaster')

@section('title', 'User Profile - Profile')

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
                <form action="{{ route('css.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <x-input label='CSS Link' :require='true' name="link">
                        </x-input>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Link</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($css as $item)
                        <tr>
                            <td><strong>{{ ++$loop->index }}</strong></td>
                            <td><a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer">{{ $item->link
                                    }}</a></td>
                            <td>
                                <a class="dropdown-item" href="javascript:void(0);"
                                    onclick="$('#css-form').submit();"><i class="ti ti-trash me-1"></i>
                                    Delete</a>
                                <form id="css-form" action="{{ route('css.destroy',$item->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                        </tr>
                        @empty
                        <tr>
                            <td>No Data</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection