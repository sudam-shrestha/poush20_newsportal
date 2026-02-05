<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Categories</h4>
            <a href="" class="btn btn-primary">
                add new
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Position
                            </th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Static</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Demo title</td>
                            <td>Demo title</td>
                            <td>Demo title</td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
