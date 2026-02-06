<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Create Category</h4>
            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">
                go back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="post">
                @csrf
                <div class="my-3">
                    <label for="title">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title" class="form-control"
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="meta_keywords">Meta Keywords</label>
                    <textarea name="meta_keywords" id="meta_keywords" class="form-control">{{ old('meta_keywords') }}</textarea>
                    @error('meta_keywords')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
                    @error('meta_description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Save Record</button>
            </form>
        </div>
    </div>

    {{--
        primary->blue
        secondary->gray
        success->green
        danger->red
        warning->yellow
        info->sky blue
    --}}
</x-app-layout>
