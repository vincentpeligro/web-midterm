<!-- Song Field -->
<div class="form-group col-sm-6">
    {!! Form::label('song', 'Song:') !!}
    {!! Form::text('song', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Singer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('singer', 'Singer:') !!}
    {!! Form::text('singer', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Release Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_release', 'Date Release:') !!}
    {!! Form::text('date_release', null, ['class' => 'form-control','id'=>'date_release']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_release').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush