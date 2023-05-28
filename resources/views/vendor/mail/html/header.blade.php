@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://i.ibb.co/xM3yvqC/logo-img.png" class="logo" alt="YOeS Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
