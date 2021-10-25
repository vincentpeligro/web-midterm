<div class="table-responsive">
    <table class="table" id="albums-table">
        <thead>
            <tr>
                <th>Song</th>
        <th>Singer</th>
        <th>Date Release</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{ $album->song }}</td>
            <td>{{ $album->singer }}</td>
            <td>{{ $album->date_release }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['albums.destroy', $album->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('albums.show', [$album->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('albums.edit', [$album->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
