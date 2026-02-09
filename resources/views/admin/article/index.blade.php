<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Articles</h4>
            <a href="{{ route('admin.article.create') }}" class="btn btn-primary">
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
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $i => $article)
                            <tr>
                                <td>
                                    {{ ++$i }}
                                </td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    <img src="{{asset($article->image)}}" width="80" alt="">
                                </td>
                                <td>
                                    @if ($article->status == true)
                                        <span class="badge bg-success text-white">visible</span>
                                    @else
                                        <span class="badge bg-danger text-white">hidden</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.article.destroy', $article->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.article.edit', $article->id) }}"
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
