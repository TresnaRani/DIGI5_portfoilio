@extends('admin.layouts.layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
</h4>
<!-- Bootstrap Table with Header - Light -->
<div class="card">
    <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Banner</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($projects as $project)
                <tr>
                    <td><strong>{{ ++$loop->index }}</strong></td>
                    <td>{{ $project->title }}</td>
                    <td><img src="{{asset('upload/project/'.$project->banner)}}" alt="Banner" class="rounded-circle"
                            height="80"></td>
                    <td>
                        <p>
                            {{ $project->description }}
                        </p>
                    </td>
                    <td><a href="{{ $project->link }}" target="_blank" class="badge bg-label-primary me-1">Live Demo</a>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('projects.edit',$project->id) }}"><i
                                        class="ti ti-pencil me-1"></i>
                                    Edit</a>

                                <a class="dropdown-item" href="javascript:void(0);"
                                    onclick="$('#logout-form').submit();"><i class="ti ti-trash me-1"></i>
                                    Delete</a>
                                <form id="logout-form" action="{{ route('projects.destroy',$project->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </td>
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
<!-- Bootstrap Table with Header - Light -->

@endsection
