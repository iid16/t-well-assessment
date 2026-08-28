<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard — T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="min-h-screen bg-[#05030a] text-white antialiased">

    <div class="tw-background">

        <div class="tw-glow tw-glow-1"></div>

        <div class="tw-glow tw-glow-2"></div>

        <div class="tw-glow tw-glow-3"></div>

    </div>


    <main class="relative min-h-screen px-6 py-12">

        <div class="mx-auto max-w-5xl">

            <!-- HEADER -->

            <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                <div>

                    <p
                        class="text-xs font-semibold uppercase tracking-[0.2em] text-violet-300"
                    >
                        Dashboard
                    </p>

                    <h1 class="mt-2 text-3xl font-bold">

                        Halo, {{ auth()->user()->name }}

                    </h1>

                    <p class="mt-2 text-gray-400">

                        Selamat datang di T-Well Assessment.

                    </p>

                </div>


                <!-- LOGOUT -->

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                >

                    @csrf

                    <button
                        type="submit"
                        class="rounded-xl border border-white/10 px-5 py-3 text-sm font-medium text-gray-300 transition hover:border-red-400/30 hover:bg-red-500/10 hover:text-red-300"
                    >
                        Logout
                    </button>

                </form>

            </div>


            <!-- CONTENT -->

            <div class="mt-10 grid gap-6 md:grid-cols-2">

                <div class="tw-card rounded-3xl p-7">

                    <p class="text-sm text-violet-300">
                        Assessment
                    </p>

                    <h2 class="mt-3 text-2xl font-bold">
                        Mulai Self-Assessment
                    </h2>

                    <p class="mt-3 leading-7 text-gray-400">
                        Isi seluruh pertanyaan Self-Assessment sesuai
                        pengalaman penggunaan TikTok Anda.
                    </p>

                    <a
                        href="{{ route('self-assessment.create') }}"
                        class="mt-6 rounded-xl bg-violet-700 px-5 py-3 text-sm font-semibold transition hover:bg-violet-600"
                    >
                        Mulai Self-Assessment
                    </a>

                </div>


                <div class="tw-card rounded-3xl p-7">

                    <p class="text-sm text-violet-300">
                        Profil
                    </p>

                    <h2 class="mt-3 text-2xl font-bold">
                        {{ auth()->user()->name }}
                    </h2>

                    <p class="mt-3 text-gray-400">
                        {{ auth()->user()->email }}
                    </p>

                    <div class="mt-5">

                        <span
                            class="rounded-full border border-violet-400/20 bg-violet-500/10 px-3 py-1 text-xs text-violet-300"
                        >
                            {{ ucfirst(auth()->user()->role) }}
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </main>

</body>

</html>
