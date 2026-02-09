<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Create Advertise</h4>
            <a href="{{ route('admin.advertise.index') }}" class="btn btn-primary">
                go back
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.advertise.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="my-3 col-6">
                        <label for="company_name">Company Name<span class="text-danger">*</span></label>
                        <input type="text" name="company_name" id="company_name" class="form-control"
                            value="{{ old('company_name') }}">
                        @error('company_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label for="contact">Contact<span class="text-danger">*</span></label>
                        <input type="text" name="contact" id="contact" class="form-control"
                            value="{{ old('contact') }}">
                        @error('contact')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label for="ad_position">Ad Position<span class="text-danger">*</span></label>
                        <select name="ad_position" id="ad_position" class="form-control">
                            <option value="header" {{ old('ad_position') == 'header' ? 'selected' : '' }}>
                                Header(1000w x 100h)
                            </option>
                            <option value="home_page" {{ old('ad_position') == 'home_page' ? 'selected' : '' }}>Home
                                Page(1000w x 100h)
                            </option>
                            <option value="other_page" {{ old('ad_position') == 'other_page' ? 'selected' : '' }}>Other
                                Page(400w x 400h)
                            </option>
                        </select>
                        @error('ad_position')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label for="redirect_url">Redirect Link<span class="text-danger">*</span></label>
                        <input type="text" name="redirect_url" id="redirect_url" class="form-control"
                            value="{{ old('redirect_url') }}">
                        @error('redirect_url')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-3 col-6">
                        <label for="expire_date">Expire Date<span class="text-danger">*</span></label>
                        <input type="date" name="expire_date" id="expire_date" class="form-control"
                            value="{{ old('expire_date') }}">
                        @error('expire_date')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="my-3">
                    <label for="image">Upload Image<span class="text-danger">*</span></label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
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
