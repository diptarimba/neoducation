<div class="mb-3">
	@if($type !== 'hidden')
		@isset($name)
	<label class="form-label" for="{{$field}}">{{$name}}</label>
		@endisset
	@endif
	<input type="{{$type}}"
	@isset($readonly)
		readonly
	@endisset
	
	@isset($required)
		required
	@endisset
	
	@isset($placeholder)
		placeholder="{{$placeholder}}"
	@endisset
	
	@isset($value)
		value="{{$value}}"
	@endisset
	class="form-control" aria-label="{{$field}}" name="{{$field}}" id="{{$field}}">
</div>