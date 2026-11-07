<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Dashboard</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-warning-subtle">

    <!-- Header -->
    <header class="bg-warning border-bottom border-dark shadow-sm py-3 px-4">
        @include('partials.header')
    </header>

    <!-- Sidebar + Content -->
    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 bg-dark text-warning p-4">

                <h5 class="fw-bold text-warning mb-4">
                    ☀️ Navigation
                </h5>

                @include('partials.sidebar')

            </aside>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 p-4 p-lg-5">

                <div class="bg-white border border-warning-subtle rounded-4 shadow-sm p-4">

                    @yield('content')

                </div>

            </main>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-warning border-top border-dark text-center py-3">
        @include('partials.footer')
    </footer>

</body>
</html>
