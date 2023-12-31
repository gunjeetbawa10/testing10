@php
$setting = App\Models\Utility::settings();
@endphp
{{ Form::open(array('url' => 'plans', 'enctype' => "multipart/form-data")) }}
<div class="modal-body">
    <div class="row">
        <div>
            <a href="#" data-size="md" data-ajax-popup-over="true" data-url="{{ route('generate', ['plan']) }}"
                data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('Generate') }}"
                data-title="{{ __('Generate content with AI') }}" class="btn btn-primary btn-sm float-end">
                <i class="fas fa-robot"></i>
                {{__('Generate with AI')}}
            </a>
        </div>
        <div class="form-group col-md-12">
            {{Form::label('name',__('Name'),['class'=>'form-label'])}}
            {{Form::text('name',null,array('class'=>'form-control font-style','placeholder'=>__('Enter Plan Name'),'required'=>'required'))}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('price',__('Price'),['class'=>'form-label'])}}
            {{Form::number('price',null,array('class'=>'form-control','placeholder'=>__('Enter Plan Price'),'required'=>'required','min'=>'0'))}}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('duration', __('Duration'),['class'=>'form-label']) }}
            {!! Form::select('duration', $arrDuration, null,array('class' => 'form-control select','required'=>'required')) !!}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('max_users',__('Maximum Users'),['class'=>'form-label'])}}
            {{Form::number('max_users',null,array('class'=>'form-control','required'=>'required','min'=>'0'))}}
            <span class="small">{{__('Note: "-1" for Unlimited')}}</span>
        </div>
        <div class="form-group col-md-6">
            {{Form::label('max_customers',__('Maximum Customers'),['class'=>'form-label'])}}
            {{Form::number('max_customers',null,array('class'=>'form-control','required'=>'required','min'=>'0'))}}
            <span class="small">{{__('Note: "-1" for Unlimited')}}</span>
        </div>
        <div class="form-group col-md-6">
            {{Form::label('max_venders',__('Maximum Vendors'),['class'=>'form-label'])}}
            {{Form::number('max_venders',null,array('class'=>'form-control','required'=>'required','min'=>'0'))}}
            <span class="small">{{__('Note: "-1" for Unlimited')}}</span>
        </div>
        <div class="form-group col-md-6">
            {{Form::label('storage_limit',__('Storage Limit'),['class'=>'form-label'])}}
            <div class="input-group search-form">
                <input type="number" name="storage_limit" value=""
                    class="form-control" min="0" required>
                <span class="input-group-text bg-transparent">{{ __('MB')}}</span>
                <span class="small">{{__('Note: upload size ( In MB)')}}</span>
            </div>
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('description', __('Description'),['class'=>'form-label']) }}
            {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']) !!}
        </div>
        <div class="col-6">
            <div class="custom-control form-switch pt-2">
                <input type="checkbox" class="form-check-input" name="enable_chatgpt" id="enable_chatgpt">
            <label class="custom-control-label form-check-label"
                for="enable_chatgpt">{{ __('Chat GPT') }}</label>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{__('Cancel')}}" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{__('Create')}}" class="btn  btn-primary">
</div>
{{ Form::close() }}
