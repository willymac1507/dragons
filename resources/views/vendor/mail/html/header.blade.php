@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://dragons:8888/storage/images/dussindale-rovers-logo.png" class="logo" alt="Dussy Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
