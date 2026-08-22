<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <!-- Navbar -->
    <nav class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex flex-col">
                <span class="text-2xl font-bold tracking-tight text-teal-600">
                    T-Well
                </span>

                <span class="text-[10px] font-medium tracking-wider text-slate-500">
                    TIKTOK DIGITAL WELLBEING ASSESSMENT
                </span>
            </a>

            <!-- Navigation -->
            <div class="hidden items-center gap-8 text-sm font-medium md:flex">
                <a href="{{ route('home') }}" class="text-teal-600">
                    Home
                </a>

                <a href="#about" class="text-slate-600 transition hover:text-teal-600">
                    About
                </a>

                <a href="#education" class="text-slate-600 transition hover:text-teal-600">
                    Education
                </a>

                <a href="#result" class="text-slate-600 transition hover:text-teal-600">
                    My Result
                </a>
            </div>

        </div>
    </nav>


    <!-- Hero Section -->
    <main>

        <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">

            <div class="grid items-center gap-14 lg:grid-cols-2">

                <!-- Hero Content -->
                <div>

                    <div class="mb-6 inline-flex items-center rounded-full border border-teal-100 bg-teal-50 px-4 py-2 text-sm font-medium text-teal-700">
                        TikTok Digital Wellbeing Assessment
                    </div>

                    <h1 class="max-w-2xl text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                        Understand Your
                        <span class="text-teal-600">
                            TikTok Digital Wellbeing
                        </span>
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-8 text-slate-600">
                        Explore your TikTok usage, perception of AI personalization,
                        and digital wellbeing through your T-Well assessment.
                    </p>


                    <!-- Assessment Code -->
                    <div id="result" class="mt-10 max-w-xl">

                        <label
                            for="assessment_code"
                            class="mb-2 block text-sm font-semibold text-slate-800"
                        >
                            Assessment Code
                        </label>

                        <!-- Assessment Form -->
                        <form
                            action="{{ route('assessment.show') }}"
                            method="POST"
                        >
                            @csrf

                            <div class="flex flex-col gap-3 sm:flex-row">

                                <input
                                    id="assessment_code"
                                    name="assessment_code"
                                    type="text"
                                    value="{{ old('assessment_code') }}"
                                    placeholder="e.g. TW-7K4P-92XM"
                                    maxlength="20"
                                    autocomplete="off"
                                    required
                                    class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 text-sm font-medium uppercase tracking-wider text-slate-900 outline-none transition placeholder:normal-case placeholder:tracking-normal focus:border-teal-500 focus:ring-4 focus:ring-teal-100"
                                >

                                <button
                                    type="submit"
                                    class="h-12 whitespace-nowrap rounded-xl bg-teal-600 px-6 text-sm font-semibold text-white shadow-sm transition hover:bg-teal-700 focus:outline-none focus:ring-4 focus:ring-teal-100"
                                >
                                    View My Assessment
                                </button>

                            </div>

                            <!-- Validation Error -->
                            @if ($errors->has('assessment_code'))
                                <p class="mt-3 text-sm font-medium text-red-600">
                                    {{ $errors->first('assessment_code') }}
                                </p>
                            @endif

                        </form>

                        <p class="mt-3 text-sm leading-6 text-slate-500">
                            Already completed the research questionnaire?
                            Enter the assessment code you received to view your result.
                        </p>

                    </div>

                </div>


                <!-- Result Preview -->
                <div class="relative">

                    <!-- Decorative background -->
                    <div class="absolute -inset-4 rounded-[2rem] bg-teal-100/60 blur-2xl"></div>

                    <!-- Preview Card -->
                    <div class="relative rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/60 sm:p-8">

                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-sm font-medium text-slate-500">
                                    T-Well Profile
                                </p>

                                <h2 class="mt-1 text-xl font-bold text-slate-900">
                                    Your Assessment
                                </h2>
                            </div>

                            <div class="rounded-full bg-teal-50 px-3 py-1 text-xs font-semibold text-teal-700">
                                Preview
                            </div>

                        </div>


                        <!-- Main Score -->
                        <div class="mt-8 rounded-2xl bg-slate-50 p-6 text-center">

                            <p class="text-sm font-medium text-slate-500">
                                Digital Wellbeing
                            </p>

                            <p class="mt-2 text-5xl font-bold tracking-tight text-teal-600">
                                76
                            </p>

                            <p class="mt-2 text-sm font-medium text-slate-600">
                                Assessment Score
                            </p>

                        </div>


                        <!-- Score Details -->
                        <div class="mt-5 grid gap-4 sm:grid-cols-2">

                            <div class="rounded-2xl border border-slate-200 p-4">
                                <p class="text-xs font-medium text-slate-500">
                                    Screen Time
                                </p>

                                <p class="mt-2 text-xl font-bold text-slate-900">
                                    1h 25m
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Daily usage
                                </p>
                            </div>


                            <div class="rounded-2xl border border-slate-200 p-4">
                                <p class="text-xs font-medium text-slate-500">
                                    AI Personalization
                                </p>

                                <p class="mt-2 text-xl font-bold text-slate-900">
                                    78
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Perception score
                                </p>
                            </div>

                        </div>


                        <!-- Bottom -->
                        <div class="mt-5 flex items-center justify-between rounded-2xl bg-teal-50 px-4 py-4">

                            <div>
                                <p class="text-xs font-medium text-teal-700">
                                    Your T-Well Profile
                                </p>

                                <p class="mt-1 text-sm font-semibold text-slate-800">
                                    Understand your digital wellbeing
                                </p>
                            </div>

                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white text-teal-600 shadow-sm">
                                →
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- How T-Well Works -->
        <section class="border-y border-slate-200 bg-white py-20">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                        Simple Process
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        How T-Well Works
                    </h2>

                    <p class="mt-4 text-slate-600">
                        Access your assessment result through three simple steps.
                    </p>

                </div>


                <div class="mt-12 grid gap-8 md:grid-cols-3">

                    <!-- Step 1 -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-7">

                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-600 text-sm font-bold text-white">
                            01
                        </div>

                        <h3 class="mt-6 text-lg font-bold text-slate-900">
                            Complete
                        </h3>

                        <p class="mt-2 leading-7 text-slate-600">
                            Complete the research questionnaire and provide your responses.
                        </p>

                    </div>


                    <!-- Step 2 -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-7">

                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-600 text-sm font-bold text-white">
                            02
                        </div>

                        <h3 class="mt-6 text-lg font-bold text-slate-900">
                            Receive Your Code
                        </h3>

                        <p class="mt-2 leading-7 text-slate-600">
                            Receive your unique T-Well assessment code after completing the questionnaire.
                        </p>

                    </div>


                    <!-- Step 3 -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-7">

                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-600 text-sm font-bold text-white">
                            03
                        </div>

                        <h3 class="mt-6 text-lg font-bold text-slate-900">
                            Explore Your Profile
                        </h3>

                        <p class="mt-2 leading-7 text-slate-600">
                            Enter your code and explore your T-Well assessment result.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- What You'll Discover -->
        <section id="education" class="py-20">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="max-w-2xl">

                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                        Your Assessment
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        What You'll Discover
                    </h2>

                    <p class="mt-4 leading-7 text-slate-600">
                        T-Well presents several aspects of your TikTok-related
                        assessment in one clear profile.
                    </p>

                </div>


                <div class="mt-12 grid gap-6 md:grid-cols-3">

                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-50 text-xl">
                            ◷
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Screen Time
                        </h3>

                        <p class="mt-3 leading-7 text-slate-600">
                            Understand your reported daily TikTok usage
                            based on your assessment data.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-50 text-xl">
                            AI
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            AI Personalization
                        </h3>

                        <p class="mt-3 leading-7 text-slate-600">
                            Explore your perception of how TikTok
                            personalizes the content you see.
                        </p>

                    </div>


                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-50">
                            ✓
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Digital Wellbeing
                        </h3>

                        <p class="mt-3 leading-7 text-slate-600">
                            Understand your digital wellbeing
                            based on your assessment result.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- About -->
        <section id="about" class="bg-slate-900 py-20 text-white">

            <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">

                <p class="text-sm font-semibold uppercase tracking-wider text-teal-400">
                    About T-Well
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight">
                    A Research-Based Digital Wellbeing Assessment
                </h2>

                <p class="mt-6 leading-8 text-slate-300">
                    T-Well Assessment is a web-based system designed to present
                    and interpret assessment results related to TikTok usage,
                    perceived AI personalization, and digital wellbeing.
                </p>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="border-t border-slate-200 bg-white">

        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between lg:px-8">

            <div>
                <p class="font-semibold text-slate-800">
                    T-Well Assessment
                </p>

                <p class="mt-1">
                    TikTok Digital Wellbeing Assessment
                </p>
            </div>

            <p>
                © 2026 T-Well Assessment
            </p>

        </div>

    </footer>

</body>
</html>