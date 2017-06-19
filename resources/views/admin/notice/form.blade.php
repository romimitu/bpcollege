<div class="form-body">
    <div class="form-group">
        {!! Form::label('title','Title',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::text('title',isset($notice->title) ? $notice->title : null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::textarea('description',isset($notice->description) ? $notice->description : null,['class'=> 'form-control details']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('download_link', 'Attachment', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-md-10">
            {!! Form::file('download_link') !!}
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::submit('Submit ', ['class'=> 'btn green']) !!}
        </div>
    </div>
</div>