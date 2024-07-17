<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex flex-col items-center py-20 min-h-screen font-sans antialiased gap-10 text-black bg-gradient-to-r from-blue-600 to-purple-600">
    <h1 class="text-4xl text-white">You should be curious about this</h1>
    <div class="overflow-auto rounded-lg h-[600px]">
        <table class="bg-white">
            <thead class="bg-gray-300 sticky top-0">
                <tr>
                    <x-table-header-link field="symbol" :sortField="$sortField"
                        :sortOrder="$sortOrder">Symbol</x-table-header-link>
                    <x-table-header-link field="name" :sortField="$sortField"
                        :sortOrder="$sortOrder">Name</x-table-header-link>
                    <x-table-header-link field="market_cap" :sortField="$sortField"
                        :sortOrder="$sortOrder">Market Cap</x-table-header-link>
                    <x-table-header-link field="sector" :sortField="$sortField"
                        :sortOrder="$sortOrder">Sector</x-table-header-link>
                    <x-table-header-link field="industry" :sortField="$sortField"
                        :sortOrder="$sortOrder">Industry</x-table-header-link>
                </tr>
            </thead>
            <tbody class="overflow-auto h-96">
                @foreach ($stocks as $stock)
                    <tr class="even:bg-gray-200" data-row-id="{{ $stock->id }}">
                        <td class="px-2">{{ $stock->symbol }}</th>
                        <td class="px-2">{{ $stock->name }}</td>
                        <td class="px-2">{{ $stock->market_cap }}</td>
                        <td class="px-2">{{ $stock->sector }}</td>
                        <td class="px-2">{{ $stock->industry }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
