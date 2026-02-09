<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Advertises</h4>
            <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary">
                add new
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">
                                SN
                            </th>
                            <th>Company Name</th>
                            <th>Image</th>
                            <th>Contact</th>
                            <th>Ad Position</th>
                            <th>Expire Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($advertises as $i => $advertise)
                            <tr>
                                <td>
                                    {{ ++$i }}
                                </td>
                                <td>{{ $advertise->company_name }}</td>
                                <td>
                                    <img src="{{asset($advertise->image)}}" width="80" alt="">
                                </td>
                                <td>{{ $advertise->contact }}</td>
                                <td>{{ $advertise->ad_position }}</td>
                                <td>{{ $advertise->expire_date->format('M-d, Y') }}</td>
                                <td>
                                    <form action="{{ route('admin.advertise.destroy', $advertise->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.advertise.edit', $advertise->id) }}"
                                            class="btn btn-primary btn-sm">edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
