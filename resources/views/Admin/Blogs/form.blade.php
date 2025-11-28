@extends('layouts.admin')
@section('title')
    Blog Management
@endsection

@section('content')

    <!-- Editor.js Core + Tools -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/raw@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

    <form method="POST"
        action="{{ Route::is('admin.blogs.create') ? route('admin.blogs.store') : route('admin.blogs.update', ['blog' => $blog->id ?? null]) }}"
        enctype="multipart/form-data" autocomplete="off" id="blogs-form">
        @csrf
        {{ Route::is('admin.blogs.create') ? '' : method_field('PUT') }}

        <!-- BASIC BLOG FIELDS -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5>{{ Route::is('admin.blogs.create') ? 'Create' : 'Edit' }} Blog</h5>
                    </div>

                    <div class="card-body border-top">
                        <div class="row mt-4">

                            <!-- Title -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Title <sup>*</sup></label>
                                <input type="text" class="form-control"
                                    placeholder="Write Title Name here..."
                                    name="title" id="title"
                                    value="{{ $blog->title ?? '' }}" />
                                <div id="title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Slug -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Slug <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="Write Slug..."
                                    name="slug" id="slug"
                                    value="{{ $blog->slug ?? '' }}" />
                                <div id="slug-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Publish Date -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Publish Date <sup>*</sup></label>
                                <input type="date" class="form-control"
                                    name="publish_date"
                                    value="{{ $blog->publish_date ?? '' }}" />
                                <div id="publish_date-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Author -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Author Name <sup>*</sup></label>
                                <input type="text" class="form-control"
                                    placeholder="Write Author Name..."
                                    name="author"
                                    value="{{ $blog->author ?? '' }}" />
                                <div id="author-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Sub Title -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Sub Title <sup>*</sup></label>
                                <input type="text" class="form-control"
                                    placeholder="Write Sub Title..."
                                    name="sub_title" id="sub_title"
                                    value="{{ $blog->sub_title ?? '' }}" />
                                <div id="sub_title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Image -->
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label class="control-label col-form-label">Image</label>
                                <input type="file" name="photo" class="form-control" id="blog-photo">
                                <div id="photo-error" class="text-danger"></div>

                                @if (isset($blog))
                                    <img src="{{ $blog->photo_link }}" width="100" height="100"
                                        class="img-thumbnail mt-2">
                                @endif
                            </div>

                            <!-- Meta Title -->
                            <div class="col-sm-12 mb-3">
                                <label class="control-label col-form-label">Meta Title</label>
                                <input type="text" class="form-control"
                                    name="meta_title"
                                    value="{{ $blog->meta_title ?? '' }}" />
                                <div id="meta_title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Meta Description -->
                            <div class="col-sm-12 mb-3">
                                <label class="control-label col-form-label">Meta Description</label>
                                <input type="text" class="form-control"
                                    name="meta_description"
                                    value="{{ $blog->meta_description ?? '' }}" />
                                <div id="meta_description-error" class="text-danger mt-1"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BLOG DESCRIPTION EDITOR -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card w-100">
                    <div class="card-header"><h5>Blog Description</h5></div>
                    <div class="card-body border-top">
                        <!-- Give editor a min-height so it is visible -->
                        <div id="editorjs" style="min-height:220px; border:1px solid #e6e6e6; padding:12px; border-radius:6px;"></div>
                        <div id="description-error" class="text-danger mt-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BUTTONS -->
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card w-100">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <script>
        // -------------------------
        // Spacer block with toolbox (shows in + menu)
        // -------------------------
        class Spacer {
            static get toolbox() {
                return {
                    title: 'Blank Space',
                    icon: `
                        <svg width="20" height="20" viewBox="0 0 20 20">
                            <rect x="3" y="9" width="14" height="2" fill="currentColor"/>
                        </svg>`
                };
            }

            render() {
                const div = document.createElement('div');
                // visible dashed border so user sees the spacer in editor
                div.style.height = '30px';
                div.style.border = '1px dashed #ccc';
                div.style.margin = '8px 0';
                div.style.background = 'transparent';
                return div;
            }

            save() {
                return { height: 30 };
            }
        }

        // -------------------------
        // Initialize EditorJS
        // -------------------------
        const editor = new EditorJS({
            holder: 'editorjs',
            tools: {
                header: { class: Header },
                list: { class: EditorjsList, inlineToolbar: true },
                quote: Quote,
                delimiter: Delimiter,
                raw: RawTool,
                table: { class: Table },
                linkTool: { class: LinkTool, config: { endpoint: '/link-preview' } },

                image: {
                    class: ImageTool,
                    config: {
                        uploader: {
                            uploadByFile: (file) => {
                                return new Promise((resolve, reject) => {
                                    if (file.size > 5 * 1024 * 1024) {
                                        reject("File too large (max 5MB)");
                                        return;
                                    }
                                    const reader = new FileReader();
                                    reader.readAsDataURL(file);
                                    reader.onloadend = () => resolve({
                                        success: 1,
                                        file: { url: reader.result }
                                    });
                                    reader.onerror = () => reject("Image read error");
                                });
                            }
                        }
                    }
                },

                spacer: Spacer, // <-- registered, will appear in + menu
            },

            // load existing content if any
            data: {!! isset($blog) && $blog->description ? $blog->description : '{}' !!},

            onReady: () => {
                // optional: focus editor so user sees cursor
                try { editor.focus(); } catch (err) {}
            },

            onChange: async () => {
                // optional: save to localStorage to prevent accidental loss
                try {
                    const savedData = await editor.save();
                    localStorage.setItem('editorContent', JSON.stringify(savedData));
                } catch (err) {
                    // ignore save errors
                }
            }
        });

        // -------------------------
        // Submit form (AJAX)
        // -------------------------
        $('#blogs-form').submit(async function(e) {
            e.preventDefault();

            let savedData;
            try {
                savedData = await editor.save();
            } catch (err) {
                // If saving editor fails, show error and do not submit
                toastr.error('Editor content could not be saved. Check blocks for errors.');
                return;
            }

            let formData = new FormData(this);
            formData.append('description', JSON.stringify(savedData));

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status === 'success') {
                        toastr.success(data.message, '', { timeOut: 1500, closeButton: true });
                        setTimeout(() => window.location.href = "{{ route('admin.blogs.index') }}", 100);
                    } else {
                        toastr.error("There is some error!!");
                    }
                },
                error: function(xhr) {
                    toastr.error("Fix form errors!");
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('#' + key + '-error').html(value);
                        });
                    }
                }
            });
        });

        // -------------------------
        // Auto-slug
        // -------------------------
        $('#title').keyup(function () {
            $('#slug').val($(this).val().toLowerCase().replace(/ /g, '-'));
        });

    </script>

@endsection
