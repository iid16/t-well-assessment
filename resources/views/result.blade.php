<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your T-Well Result</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 antialiased">

    <!-- Navbar -->
    <nav class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">

            <a href="{{ route('home') }}" class="flex flex-col">
                <span class="text-2xl font-bold tracking-tight text-teal-600">
                    T-Well
                </span>

                <span class="text-[10px] font-medium tracking-wider text-slate-500">
                    TIKTOK DIGITAL WELLBEING ASSESSMENT
                </span>
            </a>

            <div class="hidden items-center gap-8 text-sm font-medium md:flex">

                <a href="{{ route('home') }}"
                   class="text-slate-600 transition hover:text-teal-600">
                    Home
                </a>

                <a href="#"
                   class="text-teal-600">
                    My Result
                </a>

                <a href="#recommendations"
                   class="text-slate-600 transition hover:text-teal-600">
                    Recommendations
                </a>

                <a href="#education"
                   class="text-slate-600 transition hover:text-teal-600">
                    Education
                </a>

            </div>

        </div>
    </nav>


    <!-- Main -->
    <main>

        <!-- Header -->
        <section class="mx-auto max-w-7xl px-6 pb-10 pt-14 lg:px-8">

            <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">

                <div>

                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                        Assessment Result
                    </p>

                    <h1 class="mt-3 text-4xl font-bold tracking-tight text-slate-900">
                        Your T-Well Profile
                    </h1>

                    <p class="mt-3 max-w-2xl leading-7 text-slate-600">
                        Here's an overview of your TikTok usage,
                        AI personalization perception, and digital wellbeing.
                    </p>

                </div>


                <!-- Assessment Code -->
                <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-sm">

                    <p class="text-xs font-medium text-slate-500">
                        Assessment Code
                    </p>

                    <p class="mt-1 text-sm font-bold tracking-wider text-slate-800">
                        {{ $assessment->assessment_code }}
                    </p>

                </div>

            </div>

        </section>


        <!-- Score Cards -->
        <section class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid gap-5 md:grid-cols-3">

                <!-- Screen Time -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-teal-50 text-lg text-teal-600">
                            ◷
                        </div>

                        <span class="text-xs font-medium text-slate-400">
                            Y1
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-slate-500">
                        Screen Time
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ intdiv($assessment->screen_time, 60) }}h
                        {{ $assessment->screen_time % 60 }}m
                    </p>

                    <p class="mt-2 text-sm text-slate-500">
                        Average daily TikTok usage
                    </p>

                </div>


                <!-- AI Personalization -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-teal-50 text-sm font-bold text-teal-600">
                            AI
                        </div>

                        <span class="text-xs font-medium text-slate-400">
                            X
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-slate-500">
                        AI Personalization
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ number_format($assessment->x_score, 2) }}
                    </p>

                    <p class="mt-2 text-sm text-slate-500">
                        Perceived personalization score
                    </p>

                </div>


                <!-- Digital Wellbeing -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-teal-50 text-lg text-teal-600">
                            ✓
                        </div>

                        <span class="text-xs font-medium text-slate-400">
                            Y2
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-slate-500">
                        Digital Wellbeing
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        {{ number_format($assessment->y2_score, 2) }}
                    </p>

                    <p class="mt-2 text-sm text-slate-500">
                        Digital wellbeing score
                    </p>

                </div>

            </div>

        </section>


        <!-- Digital Wellbeing Overview -->
        <section class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

            <div class="grid gap-6 lg:grid-cols-3">

                <!-- Main Score -->
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm lg:col-span-1">

                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                        Digital Wellbeing
                    </p>

                    <div class="mt-8 text-center">

                        <div class="mx-auto flex h-44 w-44 items-center justify-center rounded-full border-[12px] border-teal-100">

                            <div>

                                <p class="text-5xl font-bold tracking-tight text-teal-600">
                                    {{ number_format($assessment->y2_score, 2) }}
                                </p>

                                <p class="mt-1 text-sm font-semibold text-slate-500">
                                    Score
                                </p>

                            </div>

                        </div>


                        <p class="mt-6 text-lg font-bold text-slate-900">
                            {{ $assessment->y2_category }}
                        </p>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Your assessment indicates a digital wellbeing
                            condition based on the indicators used in T-Well.
                        </p>

                    </div>

                </div>


                <!-- Interpretation -->
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm lg:col-span-2">

                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                        Interpretation
                    </p>

                    <h2 class="mt-3 text-2xl font-bold text-slate-900">
                        Understanding Your Result
                    </h2>

                    <div class="mt-6 text-sm leading-7 text-slate-600">

                        <p>
                            {{ $assessment->interpretation }}
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- AI Personalization Overview -->
        <section class="mx-auto max-w-7xl px-6 pb-10 lg:px-8">

            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">

                <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">

                    <div>

                        <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                            AI Personalization
                        </p>

                        <h2 class="mt-3 text-2xl font-bold text-slate-900">
                            Your Perception of AI Personalization
                        </h2>

                        <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-600">
                            This score represents your perceived personalization
                            of TikTok content based on the research indicators.
                        </p>

                    </div>


                    <div class="text-left md:text-right">

                        <p class="text-4xl font-bold text-teal-600">
                            {{ number_format($assessment->x_score, 2) }}
                        </p>

                        <p class="mt-1 text-sm font-semibold text-slate-500">
                            {{ $assessment->x_category }}
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- Recommendations -->
        <section id="recommendations"
                 class="border-y border-slate-200 bg-white py-20">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="max-w-2xl">

                    <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                        Personalized Insights
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        Recommendations for You
                    </h2>

                    <p class="mt-4 leading-7 text-slate-600">
                        Suggestions to help you develop healthier digital habits.
                    </p>

                </div>


                <div class="mt-10 grid gap-6 md:grid-cols-3">

                    <!-- Recommendation 1 -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-teal-600">
                            01
                        </span>

                        <h3 class="mt-4 text-lg font-bold text-slate-900">
                            Be Aware of Your Usage
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Regularly reflect on how much time you spend
                            consuming short-form content.
                        </p>

                    </div>


                    <!-- Recommendation 2 -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-teal-600">
                            02
                        </span>

                        <h3 class="mt-4 text-lg font-bold text-slate-900">
                            Review Your Feed
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Pay attention to how personalized content
                            influences the content you continue watching.
                        </p>

                    </div>


                    <!-- Recommendation 3 -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-teal-600">
                            03
                        </span>

                        <h3 class="mt-4 text-lg font-bold text-slate-900">
                            Take Intentional Breaks
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Consider taking intentional breaks from
                            continuous scrolling when appropriate.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- Education -->
        <section id="education" class="py-20">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

                    <div class="max-w-2xl">

                        <p class="text-sm font-semibold uppercase tracking-wider text-teal-600">
                            Learn More
                        </p>

                        <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                            Digital Wellbeing Education
                        </h2>

                        <p class="mt-4 leading-7 text-slate-600">
                            Learn more about TikTok usage, personalized
                            content, and maintaining a balanced digital experience.
                        </p>

                    </div>

                </div>


                <div class="mt-10 grid gap-6 md:grid-cols-3">

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-xs font-semibold uppercase tracking-wider text-teal-600">
                            Digital Habits
                        </p>

                        <h3 class="mt-3 text-lg font-bold text-slate-900">
                            Understanding Screen Time
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Learn how awareness of digital usage can support
                            more intentional technology habits.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-xs font-semibold uppercase tracking-wider text-teal-600">
                            AI & Content
                        </p>

                        <h3 class="mt-3 text-lg font-bold text-slate-900">
                            How Personalized Feeds Work
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Understand the role of personalized content in
                            shaping your digital experience.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-xs font-semibold uppercase tracking-wider text-teal-600">
                            Wellbeing
                        </p>

                        <h3 class="mt-3 text-lg font-bold text-slate-900">
                            Building Healthier Digital Habits
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-600">
                            Explore practical ways to maintain a balanced
                            relationship with digital media.
                        </p>

                    </article>

                </div>

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