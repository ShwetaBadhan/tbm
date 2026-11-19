@extends('backend.layouts.master')

@section('content')
<div class="dashboard-main-body">
    <!-- Breadcrumb -->
    <div class="breadcrumb d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <div>
            <h1 class="fw-semibold mb-4 h6 text-primary-light">Contact Queries</h1>
            <div>
                <a href="{{ route('dashboard') }}" class="text-secondary-light hover-text-primary hover-underline">Dashboard</a>
                <span class="text-secondary-light">/ Contact Queries</span>
            </div>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="mt-24">
        <div class="card h-100">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table bordered-table mb-0 align-middle">
                        <thead class="thead-light">
                            <tr>
                                <th class="ps-4" style="width: 50px;">ID</th>
                                <th>Name & Contact</th>
                                <th>Message Preview</th>
                                <th>Date</th>
                                <th class="text-end pe-4" style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($queries as $query)
                                <tr>
                                    <td class="ps-4 fw-medium text-secondary-light">{{ $loop->iteration }}</td>
                                    <td>
                                        
                                            <!-- Clickable Name to open Modal -->
                                            <a href="javascript:void(0)" 
                                               data-bs-toggle="modal" 
                                               data-bs-target="#viewModal{{ $query->id }}" 
                                               class="fw-semibold text-dark text-decoration-none hover-text-primary mb-1">
                                                {{ $query->name ?? 'N/A' }}
                                           <br>
                                            <small class="text-muted"><i class="ri-mail-line me-1"></i>{{ $query->email ?? 'N/A' }}</small>
                                            <br>
                                            @if(!empty($query->phone))
                                                <small class="text-muted"><i class="ri-phone-line me-1"></i>{{ $query->phone }}</small>
                                            @endif
                                        
                                    </td>
                                    <td>
                                        <p class="mb-0 text-muted text-truncate" style="max-width: 250px;" title="Click to view full message">
                                            {{ Str::limit($query->message, 60) }}
                                        </p>
                                    </td>
                                    <td class="text-secondary-light">
                                        {{ $query->created_at->format('d M, Y') }}<br>
                                        <small class="text-muted">{{ $query->created_at->format('h:i A') }}</small>
                                    </td>
                                    <td class="text-end pe-4">
                                        <!-- View Button -->
                                        <button type="button" class="btn btn-sm btn-primary rounded-pill px-3" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#viewModal{{ $query->id }}">
                                            View
                                        </button>
                                    </td>
                                </tr>

                                <!-- ========================================== -->
                                <!-- MODAL FOR FULL MESSAGE (Unique per row)  -->
                                <!-- ========================================== -->
                                <div class="modal fade" id="viewModal{{ $query->id }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $query->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content border-0 shadow">
                                            <div class="modal-header bg-light">
                                                <h5 class="modal-title fw-semibold" id="viewModalLabel{{ $query->id }}">
                                                    <i class="ri-message-3-line text-primary me-2"></i>Query Details
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="row g-3 mb-4">
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block mb-1">Full Name</small>
                                                        <span class="fw-semibold text-dark">{{ $query->name }}</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block mb-1">Email Address</small>
                                                        <span class="fw-semibold text-dark">{{ $query->email }}</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block mb-1">Phone Number</small>
                                                        <span class="fw-semibold text-dark">{{ $query->phone ?? 'Not Provided' }}</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block mb-1">Submitted On</small>
                                                        <span class="fw-semibold text-dark">{{ $query->created_at->format('d M, Y \a\t h:i A') }}</span>
                                                    </div>
                                                    @if(!empty($query->subject))
                                                    <div class="col-12">
                                                        <small class="text-muted d-block mb-1">Subject</small>
                                                        <span class="fw-semibold text-dark bg-light px-2 py-1 rounded">{{ $query->subject }}</span>
                                                    </div>
                                                    @endif
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <small class="text-muted d-block mb-2 fw-semibold">Full Message:</small>
                                                    <div class="p-3 bg-light border rounded-3 text-dark" style="white-space: pre-wrap; line-height: 1.6;">
                                                        {{ $query->message }}
                                                    </div>
                                                </div>

                                                @if(!empty($query->ip_address))
                                                <div class="mt-3 pt-3 border-top">
                                                    <small class="text-muted"><i class="ri-global-line me-1"></i> IP Address: <span class="text-dark">{{ $query->ip_address }}</span></small>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                
                                                <!-- Optional: Add Delete Button Here if needed -->
                                                
                                                {{-- <form action="{{ route('admin.contact-queries.destroy', $query->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this query?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="ri-delete-bin-line me-1"></i> Delete
                                                    </button>
                                                </form>  --}}
                                               
                                            </div an>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                            @empty
                                <!-- Empty State Handling -->
                                <tr>
                                    <!-- Updated colspan to 5 to match new columns -->
                                    <td colspan="5" class="text-center py-5">
                                        <div class="d-flex flex-column align-items-center text-muted">
                                            <i class="ri-inbox-line display-4 mb-3 opacity-50"></i>
                                            <h6 class="fw-semibold mb-1">No Contact Queries Found</h6>
                                            <p class="small mb-0">There are currently no queries in the database.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection