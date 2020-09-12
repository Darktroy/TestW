
<div class="form-group {{ $errors->has('length') ? 'has-error' : '' }}">
    <label for="length" class="col-md-2 control-label">Length</label>
    <div class="col-md-10">
        <input class="form-control" name="length" type="text" id="length" value="{{ old('length', optional($testingCase)->length) }}" minlength="1" min="-9" max="9" required="true" placeholder="Enter length here...">
        {!! $errors->first('length', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('width') ? 'has-error' : '' }}">
    <label for="width" class="col-md-2 control-label">Width</label>
    <div class="col-md-10">
        <input class="form-control" name="width" type="text" id="width" value="{{ old('width', optional($testingCase)->width) }}" minlength="1" min="-9" max="9" required="true" placeholder="Enter width here...">
        {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('average_of_values') ? 'has-error' : '' }}">
    <label for="average_of_values" class="col-md-2 control-label">Average Of Values</label>
    <div class="col-md-10">
        <input class="form-control" name="average_of_values" type="number" id="average_of_values" value="{{ old('average_of_values', optional($testingCase)->average_of_values) }}" min="-9" max="9" placeholder="Enter average of values here...">
        {!! $errors->first('average_of_values', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
    <label for="area" class="col-md-2 control-label">Area</label>
    <div class="col-md-10">
        <input class="form-control" name="area" type="text" id="area" value="{{ old('area', optional($testingCase)->area) }}" minlength="1" min="-9" max="9" placeholder="Enter area here...">
        {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('area_square') ? 'has-error' : '' }}">
    <label for="area_square" class="col-md-2 control-label">Area Square</label>
    <div class="col-md-10">
        <input class="form-control" name="area_square" type="text" id="area_square" value="{{ old('area_square', optional($testingCase)->area_square) }}" minlength="1" min="-9" max="9" placeholder="Enter area square here...">
        {!! $errors->first('area_square', '<p class="help-block">:message</p>') !!}
    </div>
</div>

