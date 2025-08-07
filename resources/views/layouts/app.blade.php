@props(['title' => null])

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Pemerintahan Desa Wanakarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .sidebar-item {
            transition: all 0.3s ease;
        }

        .sidebar-item:hover {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        .active-sidebar {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            border-left: 4px solid #fbbf24;
        }
    </style>

    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body class="bg-gray-50">
    <div class="flex h-screen">

        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">

            @include('layouts.header')

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">

                {{-- Breadcrumb --}}
                <nav class="flex text-sm text-gray-500" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-gray-500 hover:text-blue-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2L2 8h3v8h4V12h2v4h4V8h3L10 2z" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7.05 4.05a1 1 0 011.414 0L15 10.586l-6.536 6.536a1 1 0 01-1.414-1.414L12.172 11H4a1 1 0 010-2h8.172L7.05 5.464a1 1 0 010-1.414z" />
                                </svg>
                                <a href="#" class="ml-1 text-gray-500 hover:text-blue-600">{{ $title }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>


                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        // Simple interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Sidebar navigation
                const sidebarItems = document.querySelectorAll('.sidebar-item');
                sidebarItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        e.preventDefault(); // This prevents the link from navigating
                        // Remove active class from all items
                        sidebarItems.forEach(i => i.classList.remove('active-sidebar'));
                        // Add active class to clicked item
                        this.classList.add('active-sidebar');
                    });
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ entri",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                },
                "responsive": true,
                "pageLength": 10,
                "order": [
                    [0, 'asc']
                ]
            });
        });
    </script>

</body>

</html>
