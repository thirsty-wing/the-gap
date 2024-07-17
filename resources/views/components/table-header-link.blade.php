@props(['field', 'sortField', 'sortOrder'])

<th class="text-left px-2" scope="col">
    <a href="{{ Request::url() . '?sortField=' . $field . '&sortOrder=' . ($sortField == $field && $sortOrder == 'asc' ? 'desc' : 'asc') }}">
        {{ $slot }}
        @if ($sortField == $field && $sortOrder == 'asc')
            ↑
        @elseif ($sortField == $field && $sortOrder == 'desc')
            ↓
        @endif
    </a>
</th>
