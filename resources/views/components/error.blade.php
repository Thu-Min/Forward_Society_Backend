@props(['name'])
@error($name)
<div class="text-red-600 text-xs">{{ $message }}</div>
@enderror