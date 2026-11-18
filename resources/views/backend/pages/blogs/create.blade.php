@extends('backend.layouts.master')

@section('content')
    <!-- TinyMCE CDN -->
  <script src="https://cdn.tiny.cloud/1/j4au9421tc3jz0oknn84wmqz1e2ib12qdghfn3qu615p4ahr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <div class="dashboard-main-body">
        <div class="breadcrumb d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <div>
                <h1 class="fw-semibold mb-4 h6 text-primary-light">Write New Blog</h1>
                <div>
                    <a href="{{ route('dashboard') }}"
                        class="text-secondary-light hover-text-primary hover-underline">Dashboard</a>
                    <span class="text-secondary-light">/ <a href="{{ route('blogs.index') }}">Blogs</a> / Create</span>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const errorList = @json($errors->all()).map(err => `<li>${err}</li>`).join('');
                    Swal.fire({ icon: 'error', title: 'Validation Error', html: `<ul class="text-start mb-0">${errorList}</ul>`, confirmButtonText: 'Got it', confirmButtonColor: '#dc3545' });
                });
            </script>
        @endif

        <div class="mt-24">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-4">
                            <!-- Left Column: Image & Meta -->
                            <div class="col-lg-4">
                                <div class="card border p-3 bg-light h-100">
                                    <h6 class="fw-bold mb-3">Featured Image</h6>
                                    <div class="text-center p-3 border rounded bg-white mb-3">
                                        <img id="imagePreview" class="img-fluid rounded d-none"
                                            style="height: 180px; width: 100%; object-fit: cover;">
                                        <div id="imagePlaceholder"
                                            class="d-flex align-items-center justify-content-center text-muted"
                                            style="height: 180px;">
                                            <i class="ri-image-line fs-1"></i>
                                        </div>
                                    </div>
                                    <input type="file" name="image" class="form-control form-control-sm" accept="image/*"
                                        required onchange="previewImage(this)">
                                    <small class="text-muted d-block mt-2">Recommended: 800x450px</small>

                                    <hr class="my-4">

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Status</label>
                                        <select name="status" class="form-select" required>
                                            <option value="1" {{ old('status') === '1' || old('status') === null ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label fw-semibold">Publish Date</label>
                                        <input type="date" name="published_at" class="form-control"
                                            value="{{ old('published_at', date('Y-m-d')) }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Content -->
                            <div class="col-lg-8">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label fw-semibold">Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="title" id="blogTitle" class="form-control"
                                            value="{{ old('title') }}" required oninput="generateSlug(this.value)">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-semibold">URL Slug <small
                                                class="text-muted">(Auto)</small></label>
                                        <input type="text" id="slugPreview" name="slug" class="form-control bg-light"
                                            readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Author</label>
                                        <input type="text" name="author" class="form-control"
                                            value="{{ old('author', 'Admin') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Category</label>
                                        <input type="text" name="category" class="form-control"
                                            value="{{ old('category') }}" placeholder="e.g., Technology, News">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Short Description (Excerpt)</label>
                                        <textarea name="short_description" class="form-control" rows="2"
                                            placeholder="Brief summary for blog cards...">{{ old('short_description') }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Blog Content <span
                                                class="text-danger">*</span></label>
                                        <!-- TinyMCE TextArea -->
                                        <textarea id="content" name="content"
                                            class="form-control">{{ old('content') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                            <a href="{{ route('blogs.index') }}" class="btn btn-white border">Cancel</a>
                            <button type="submit" class="btn btn-primary px-4"><i class="ri-save-line me-1"></i> Publish
                                Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Minimalistic custom styling for TinyMCE to match your UI */
        .tox-tinymce {
            border: 1px solid #e2e8f0 !important;
            border-radius: 0.375rem !important;
        }

        .tox-tinymce:focus-within {
            border-color: #25A194 !important;
            box-shadow: 0 0 0 3px rgba(37, 161, 148, 0.1) !important;
        }
    </style>
@endsection

@push('scripts')
    <script>
        // 1. Image Preview Logic
        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('imagePreview').src = e.target.result;
                    document.getElementById('imagePreview').classList.remove('d-none');
                    document.getElementById('imagePlaceholder').classList.add('d-none');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // 2. Auto Slug Generation
        function generateSlug(text) {
            const slug = text.toLowerCase().replace(/[^a-z0-9\s-]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
            document.getElementById('slugPreview').value = slug;
        }

        // 3. TinyMCE Initialization
        document.addEventListener('DOMContentLoaded', function () {
            tinymce.init({
                selector: '#content',
                height: 350,
                menubar: false,
                // Plugins: lists, links, tables, aur 'code' (HTML source view ke liye)
                plugins: 'lists link image table code help wordcount',
                // Toolbar: Headings (blocks), Alignment, Bold/Italic, Lists, Code View
                toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code | help',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 14px; }',
                branding: false, // TinyMCE ka watermark hatane ke liye
                promotion: false
            });
        });
    </script>
@endpush