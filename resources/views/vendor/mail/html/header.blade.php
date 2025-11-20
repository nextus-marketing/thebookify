@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://the-bookify.com/frontend/my-img/logo.png" class="logo" alt="Laravel Logo"
                    style="height: auto" width="200px;">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
