<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-100 via-white to-purple-100 p-6">
    <main class="mx-auto max-w-6xl">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">List Laptop</h1>
            <p class="mt-2 text-sm text-gray-500">Daftar laptop yang tersimpan</p>
        </div>

        <div class="overflow-hidden rounded-2xl bg-white shadow-xl">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Brand</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Model</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Processor</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                RAM</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse ($laptops as $laptop)
                            <tr class="transition hover:bg-indigo-50">
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                    {{ $laptop->brand }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-700">{{ $laptop->model }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $laptop->processor }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-700">{{ $laptop->ram }} GB</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3 whitespace-nowrap">
                                        <a href="{{ route('edit-laptop', $laptop) }}"
                                            class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('delete-laptop', $laptop) }}">
                                            @csrf
                                            @method('POST')
                                            <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                                type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-sm text-gray-500">
                                    Belum ada data laptop.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>