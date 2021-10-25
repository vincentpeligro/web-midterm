<!-- Song Field -->
<div class="col-sm-12">
    {!! Form::label('song', 'Song:') !!}
    <p>{{ $album->song }}</p>
</div>

<!-- Singer Field -->
<div class="col-sm-12">
    {!! Form::label('singer', 'Singer:') !!}
    <p>{{ $album->singer }}</p>
</div>

<!-- Date Release Field -->
<div class="col-sm-12">
    {!! Form::label('date_release', 'Date Release:') !!}
    <p>{{ $album->date_release }}</p>
</div>

