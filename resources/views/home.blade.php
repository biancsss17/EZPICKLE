<!DOCTYPE html><html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>EZPICKLE — Austin's Premier Pickleball Courts</title>
<!-- Tailwind CSS CDN with plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              pink: '#db2777',
              rose: '#f43f5e',
              emerald: '#10b981',
              lime: '#22c55e',
              dark: '#0a0d14',
              surface: '#111827',
              cardLight: '#f8fafc'
            }
          },
          fontFamily: {
            serif: ['Playfair Display', 'Georgia', 'serif'],
            sans: ['Plus Jakarta Sans', 'Inter', 'system-ui', 'sans-serif']
          },
          backgroundImage: {
            'dink-gradient': 'linear-gradient(135deg, #d946ef 0%, #ec4899 40%, #10b981 100%)',
            'dink-btn': 'linear-gradient(90deg, #ec4899 0%, #10b981 100%)',
            'purple-hero': 'radial-gradient(ellipse at top, #1e1b4b 0%, #090d16 80%)'
          }
        }
      }
    }
  </script>
<!-- Fonts: Plus Jakarta Sans & Playfair Display -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<!-- Core Component & Utility Styles -->
<style data-purpose="typography">
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #fafbfc;
      color: #0f172a;
    }
    .font-display {
      font-family: 'Playfair Display', Georgia, serif;
    }
    .text-gradient-dink {
      background: linear-gradient(120deg, #f43f5e 0%, #d946ef 45%, #10b981 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .text-gradient-green {
      background: linear-gradient(120deg, #10b981 0%, #22c55e 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
<style data-purpose="decorations">
    .glow-sphere {
      background: radial-gradient(circle, rgba(236,72,153,0.18) 0%, rgba(16,185,129,0.12) 60%, transparent 80%);
    }
    .hero-glow-right {
      background: radial-gradient(circle at 80% 40%, rgba(16,185,129,0.18) 0%, transparent 60%);
    }
    .hero-glow-left {
      background: radial-gradient(circle at 20% 60%, rgba(217,70,239,0.18) 0%, transparent 60%);
    }
    .card-shadow {
      box-shadow: 0 10px 30px -10px rgba(0,0,0,0.06), 0 4px 12px -4px rgba(0,0,0,0.04);
    }
  </style>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased overflow-x-hidden">
<!-- BEGIN: MainHeader -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 transition duration-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
<!-- Brand Logo -->
<a class="flex items-center gap-3 group" data-purpose="site-brand" href="#">
<div class="w-10 h-10 rounded-full bg-gradient-to-tr from-pink-500 via-rose-400 to-emerald-400 p-[2px] flex items-center justify-center shadow-md">
<div class="w-full h-full bg-stone-900 rounded-full flex items-center justify-center relative overflow-hidden">
<!-- Pickleball paddle & ball icon representation -->
<span class="w-3.5 h-4.5 rounded-t-full rounded-b-sm bg-pink-500 transform -rotate-12 inline-block"></span>
<span class="w-2 h-2 rounded-full bg-emerald-400 absolute top-2 right-2"></span>
</div>
</div>
<span class="text-2xl tracking-tight text-slate-900"><span class="font-normal text-slate-700">EZ</span><span class="font-extrabold text-slate-900">PICKLE</span></span>
</a>
<!-- Desktop Navigation Menu -->
<nav class="hidden md:flex items-center gap-9 text-[15px] font-semibold text-slate-600">
<a class="hover:text-pink-600 transition-colors" href="#book">Book</a>
<a class="hover:text-pink-600 transition-colors" href="#courts">Courts</a>
<a class="hover:text-pink-600 transition-colors" href="#pricing">Pricing</a>
<a class="hover:text-pink-600 transition-colors" href="#how-it-works">How it Works</a>
<a class="hover:text-pink-600 transition-colors" href="#faq">FAQ</a>
</nav>
<!-- Primary Action -->
<div class="flex items-center">
<a class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-white font-semibold text-sm bg-gradient-to-r from-pink-600 via-rose-500 to-emerald-500 shadow-md shadow-pink-500/20 hover:shadow-lg hover:shadow-pink-500/30 hover:scale-[1.02] active:scale-95 transition duration-200" href="#book">
          Reserve a Court
        </a>
</div>
</div>
</header>
<!-- END: MainHeader -->
<main>
<!-- BEGIN: HeroSection -->
<section class="relative bg-[#0b0f19] text-white pt-24 pb-32 overflow-hidden" data-purpose="hero-section" style="background: linear-gradient(145deg, rgb(6, 16, 20) 0%, rgb(13, 19, 34) 40%, rgb(26, 15, 36) 80%, rgb(21, 9, 26) 100%);">
<!-- Background Ambient Overlays -->
<div class="absolute inset-0 bg-cover bg-center opacity-25 mix-blend-luminosity scale-105 filter blur-[1px]" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBPdcZq4ByVqolmDWBiOvW6yOA_Nv0wAUoJpnqCPVcsm22t_tlV6bFPY8-LbWW50w8FHc3Yl4HoJjPNpLmTWQHyJkglL9bjzMEXRG3Snt4Z30-dq9we9dqoAu35HhUMC0tUD7fizb5Ddq8bdBkaGkX_tUktjmP1wZkkzketkJR6a8-el0rKxFWIA1Og2qUpbLQuoSfWuEIzaS2ctC_9kcfgo1l3L1bBH7OzxJ2FhE37rFC2y1WdAIon');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-[#0b0f19] via-[#0b0f19]/70 to-transparent"></div>
<div class="absolute top-0 right-0 w-[600px] h-[600px] hero-glow-right pointer-events-none"></div>
<div class="absolute bottom-10 left-0 w-[600px] h-[600px] hero-glow-left pointer-events-none"></div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="max-w-3xl">
<!-- Austin Pill Badge -->
<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-pink-500/30 bg-pink-950/30 text-pink-300 text-xs font-semibold tracking-wide uppercase mb-8 backdrop-blur-sm">
<span class="w-1.5 h-1.5 rounded-full bg-pink-400 animate-pulse"></span>
            Austin's Premier Pickleball Courts
          </div>
<!-- Hero Main Title -->
<h1 class="text-5xl sm:text-7xl lg:text-8xl font-display font-medium tracking-tight text-white leading-[1.08] mb-6">
            Serve Up <br>
<span class="text-gradient-dink italic font-normal">Something</span> <br>
            Different.
          </h1>
<!-- Hero Subtitle -->
<p class="text-lg sm:text-xl text-slate-300 font-normal leading-relaxed mb-10 max-w-2xl">
            Book premium indoor and outdoor pickleball courts instantly. No phone tag, no waiting — just pick a slot and play.
          </p>
<!-- Hero Button Actions -->
<div class="flex flex-wrap items-center gap-4">
<a class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-base bg-gradient-to-r from-pink-600 via-rose-500 to-emerald-500 shadow-xl shadow-pink-500/25 hover:shadow-emerald-500/25 hover:scale-[1.02] active:scale-95 transition duration-200" href="#book">
<span class="">Book a Court Now</span>
<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
<path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</a>
<a class="inline-flex items-center justify-center px-8 py-3.5 rounded-full text-white font-semibold text-base bg-white/10 hover:bg-white/15 border border-white/15 backdrop-blur-md transition duration-200" href="#courts">
              View Courts
            </a>
</div>
<!-- Hero Social Proof Indicators -->
<div class="grid grid-cols-3 gap-6 pt-16 mt-16 border-t border-white/10 max-w-lg">
<div>
<div class="text-2xl sm:text-3xl font-bold text-white flex items-center gap-1">
                4.9 <span class="text-amber-400 text-lg">★</span>
</div>
<p class="text-xs text-slate-400 mt-1">Average Rating</p>
</div>
<div>
<div class="text-2xl sm:text-3xl font-bold text-white">2,400+</div>
<p class="text-xs text-slate-400 mt-1">Players Monthly</p>
</div>
<div>
<div class="text-2xl sm:text-3xl font-bold text-emerald-400">60s</div>
<p class="text-xs text-slate-400 mt-1">Booking Speed</p>
</div>
</div>
</div>
</div>
</section>
<!-- END: HeroSection -->
<!-- BEGIN: BookingFlowSection -->
<section class="py-24 bg-gradient-to-b from-[#fafbfc] to-slate-50 relative" data-purpose="booking-section" id="book">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Section Header -->
<div class="mb-12">
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-600 block mb-2">Reserve Instantly</span>
<h2 class="text-4xl sm:text-5xl font-display font-medium text-slate-900 leading-tight">
            Pick your court, <br>
<span class="text-gradient-dink font-bold">pick your time.</span>
</h2>
</div>
<!-- 2-Column Booking Widget -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Left Column: Court Selector & Calendar & Payments -->
<div class="lg:col-span-5 space-y-6">
<!-- Court Selector Card -->
<div class="bg-white rounded-3xl p-6 card-shadow border border-slate-100">
<h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Select Court</h3>
<div class="space-y-3" id="court-selector-group">
<!-- Court Alpha (Active Selected State) -->
<button class="w-full text-left flex items-center justify-between p-4 rounded-2xl bg-gradient-to-r from-pink-600 via-rose-500 to-emerald-500 text-white shadow-lg shadow-pink-500/20 transition group" type="button">
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
<svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
</div>
<div>
<div class="font-bold text-base leading-snug">Court Alpha</div>
<div class="text-xs text-white/80 font-medium">Outdoor • Hardcourt</div>
</div>
</div>
<span class="w-5 h-5 rounded-full bg-white text-pink-600 flex items-center justify-center text-xs font-bold">✓</span>
</button>
<!-- Court Beta -->
<button class="w-full text-left flex items-center justify-between p-4 rounded-2xl bg-slate-50/80 hover:bg-slate-100/80 border border-slate-100 transition group" type="button">
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-xl bg-pink-100/60 flex items-center justify-center group-hover:bg-pink-100">
<svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
</div>
<div>
<div class="font-bold text-slate-800 text-base leading-snug">Court Beta</div>
<div class="text-xs text-slate-400 font-medium">Indoor • Maple</div>
</div>
</div>
<span class="text-xs font-semibold text-slate-400">₱250/hr</span>
</button>
<!-- Court Gamma -->
<button class="w-full text-left flex items-center justify-between p-4 rounded-2xl bg-slate-50/80 hover:bg-slate-100/80 border border-slate-100 transition group" type="button">
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-xl bg-pink-100/60 flex items-center justify-center group-hover:bg-pink-100">
<svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
</div>
<div>
<div class="font-bold text-slate-800 text-base leading-snug">Court Gamma</div>
<div class="text-xs text-slate-400 font-medium">Outdoor • Hardcourt</div>
</div>
</div>
<span class="text-xs font-semibold text-slate-400">₱200/hr</span>
</button>
<!-- Court Delta -->
<button class="w-full text-left flex items-center justify-between p-4 rounded-2xl bg-slate-50/80 hover:bg-slate-100/80 border border-slate-100 transition group" type="button">
<div class="flex items-center gap-3.5">
<div class="w-10 h-10 rounded-xl bg-pink-100/60 flex items-center justify-center group-hover:bg-pink-100">
<svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
</div>
<div>
<div class="font-bold text-slate-800 text-base leading-snug">Court Delta</div>
<div class="text-xs text-slate-400 font-medium">Indoor • Maple</div>
</div>
</div>
<span class="text-xs font-semibold text-slate-400">₱250/hr</span>
</button>
</div>
</div>
<!-- Calendar Widget Card -->
<div class="bg-white rounded-3xl p-6 card-shadow border border-slate-100">
<div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Select Date</div>
<div class="flex items-center justify-between mb-4">
<div class="text-xl font-display font-bold text-slate-900" id="calendar-month">September 2026</div>
<div class="flex gap-2">
<button aria-label="Previous month" class="w-7 h-7 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-slate-100 text-xs" id="calendar-previous" type="button">‹</button>
<button aria-label="Next month" class="w-7 h-7 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-slate-100 text-xs" id="calendar-next" type="button">›</button>
</div>
</div>
<!-- Calendar Weekdays -->
<div class="grid grid-cols-7 text-center text-xs font-bold text-slate-400 mb-3">
<span class="">Mo</span><span class="">Tu</span><span class="">We</span><span class="">Th</span><span class="">Fr</span><span class="">Sa</span><span class="">Su</span>
</div>
<!-- Calendar Month Days -->
<div class="grid grid-cols-7 text-center gap-y-2 text-sm font-medium text-slate-700" id="calendar-days">
<span class="text-slate-300"></span><span class="py-1">1</span><span class="py-1">2</span><span class="py-1">3</span><span class="py-1">4</span><span class="py-1">5</span><span class="py-1">6</span>
<span class="py-1">7</span><span class="py-1">8</span><span class="py-1">9</span><span class="py-1">10</span><span class="py-1">11</span><span class="py-1">12</span><span class="py-1">13</span>
<span class="py-1">14</span><span class="py-1">15</span><span class="py-1">16</span><span class="py-1">17</span><span class="py-1">18</span><span class="py-1">19</span><span class="py-1">20</span>
<span class="py-1">21</span>
<!-- Active Day 22 -->
<span class="py-1 flex items-center justify-center">
<span class="w-8 h-8 rounded-full border-2 border-pink-500 text-pink-600 font-bold flex items-center justify-center bg-pink-50">22</span>
</span>
<span class="py-1">23</span><span class="py-1">24</span><span class="py-1">25</span><span class="py-1">26</span><span class="py-1">27</span>
<span class="py-1">28</span><span class="py-1">29</span><span class="py-1">30</span>
</div>
</div>
<!-- Accepted Payments Card -->
<div class="bg-white rounded-3xl p-6 card-shadow border border-slate-100">
<h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Accepted Payments</h4>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1.5 rounded-full text-xs font-bold bg-[#007dfe] text-white">GCash</span>
</div>
</div>
</div>
<!-- Right Column: Interactive Available Slots Board -->
<div id="available-slots-panel" class="lg:col-span-7 bg-white rounded-3xl p-8 card-shadow border border-slate-100 min-h-[580px] flex flex-col justify-between">
<div>
<!-- Slots Header & Legend -->
<div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-100">
<div>
<h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider">Available Slots</h3>
<p class="text-sm font-semibold text-slate-700 mt-1 flex items-center gap-1.5" id="selected-date-label">
<span class="text-slate-400">←</span> Tuesday, September 22, 2026
                  </p>
</div>
<!-- Slot Legend Indicators -->
<div class="flex items-center gap-4 text-xs font-semibold text-slate-600">
<span class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span> Open
                  </span>
<span class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> Few left
                  </span>
<span class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span> Full
                  </span>
</div>
</div>
<!-- Available Time Slots Grid -->
<div id="static-slots" class="mt-6">
<div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Day Sessions (₱200/hr)</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">6:00 AM – 7:00 AM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">7:00 AM – 8:00 AM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
<button class="p-3.5 rounded-2xl border border-amber-200 bg-amber-50/50 hover:bg-amber-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">8:00 AM – 9:00 AM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full">1 Slot Left</span>
</button>
<button class="p-3.5 rounded-2xl border border-slate-200 bg-slate-100/70 text-left opacity-60 cursor-not-allowed" type="button">
<div class="text-sm font-bold text-slate-500">9:00 AM – 10:00 AM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-slate-500 bg-slate-200 px-2 py-0.5 rounded-full">Full</span>
</button>
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">10:00 AM – 11:00 AM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">11:00 AM – 12:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
</div>
</div>
<!-- Evening Time Slots -->
<div id="static-evening-slots" class="mt-8">
<div class="text-xs font-bold text-pink-600 uppercase tracking-wider mb-3">Evening Sessions (₱250/hr • Lights Included)</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
<!-- Selected Time Slot -->
<button class="p-3.5 rounded-2xl bg-gradient-to-r from-pink-600 to-rose-500 text-white shadow-md shadow-pink-500/20 text-left transition" type="button">
<div class="text-sm font-bold">5:00 PM – 6:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-white bg-white/25 px-2 py-0.5 rounded-full">Selected</span>
</button>
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">6:00 PM – 7:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
<button class="p-3.5 rounded-2xl border border-amber-200 bg-amber-50/50 hover:bg-amber-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">7:00 PM – 8:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-amber-700 bg-amber-100 px-2 py-0.5 rounded-full">1 Slot Left</span>
</button>
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">8:00 PM – 9:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
<button class="p-3.5 rounded-2xl border border-emerald-200 bg-emerald-50/50 hover:bg-emerald-100/70 text-left transition" type="button">
<div class="text-sm font-bold text-slate-800">9:00 PM – 10:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>
</button>
<button class="p-3.5 rounded-2xl border border-slate-200 bg-slate-100/70 text-left opacity-60 cursor-not-allowed" type="button">
<div class="text-sm font-bold text-slate-500">10:00 PM – 11:00 PM</div>
<span class="inline-block mt-1 text-[11px] font-semibold text-slate-500 bg-slate-200 px-2 py-0.5 rounded-full">Full</span>
</button>
</div>
</div>
</div>
<!-- Booking Summary Checkout Bar -->
<div class="mt-8 pt-6 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
<div>
<span class="text-xs text-slate-400 font-medium block">Total for 1 Hour</span>
<span class="text-2xl font-bold text-slate-900">₱250 <span class="text-xs text-slate-400 font-normal">inc. lights</span></span>
</div>
<button class="px-8 py-3 rounded-full text-white font-bold text-sm bg-gradient-to-r from-pink-600 via-rose-500 to-emerald-500 hover:shadow-lg hover:shadow-pink-500/25 transition duration-200" id="continue-booking" type="button">
                Continue Booking &amp; Pay →
              </button>
</div>
</div>
</div>
</div>
</section>
<!-- END: BookingFlowSection -->
<!-- BEGIN: CourtsSection -->
<section class="py-24 bg-white" data-purpose="courts-grid-section" id="courts">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Section Header with Right CTA -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
<div>
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-600 block mb-2">Our Facilities</span>
<h2 class="text-4xl sm:text-5xl font-display font-medium text-slate-900">
              Four courts, <br>
<span class="text-gradient-dink font-bold">zero compromises.</span>
</h2>
</div>
<a class="inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-slate-800 hover:bg-slate-900 text-white font-semibold text-sm transition" href="#book">
            Book Now
          </a>
</div>
<!-- 4 Courts Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Court 1: Court Alpha -->
<div class="bg-white rounded-3xl overflow-hidden border border-slate-100 card-shadow flex flex-col justify-between transition hover:-translate-y-1 duration-200" data-purpose="court-card">
<div>
<div class="relative h-48 bg-slate-900 overflow-hidden">
<img alt="Court Alpha" class="w-full h-full object-cover opacity-80" src="{{ asset('images/court-alpha.png') }}">
<div class="absolute top-3 left-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-pink-600 text-white shadow">Most Popular</span>
</div>
<div class="absolute top-3 right-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-500 text-white shadow">Outdoor</span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-black/60 backdrop-blur-sm text-white text-xs font-bold flex items-center gap-1">
<span class="text-amber-400">★</span> 4.9
                </div>
</div>
<div class="p-5">
<h3 class="text-xl font-display font-bold text-slate-900">Court Alpha</h3>
<p class="text-xs text-slate-400 mt-0.5">Hardcourt • 183 reviews</p>
<!-- Amenities Tags -->
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">☼ Lights</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Parking</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Water Station</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Seating</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="block w-full text-center py-2.5 rounded-xl bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white font-bold text-sm shadow-md shadow-pink-500/20 transition" href="#book">
                Reserve Court Alpha
              </a>
</div>
</div>
<!-- Court 2: Court Beta -->
<div class="bg-white rounded-3xl overflow-hidden border border-slate-100 card-shadow flex flex-col justify-between transition hover:-translate-y-1 duration-200" data-purpose="court-card">
<div>
<div class="relative h-48 bg-slate-800 overflow-hidden">
<img alt="Court Beta" class="w-full h-full object-cover opacity-80" src="{{ asset('images/court-beta.png') }}">
<div class="absolute top-3 left-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-600 text-white shadow">Climate Controlled</span>
</div>
<div class="absolute top-3 right-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-blue-600 text-white shadow">Indoor</span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-black/60 backdrop-blur-sm text-white text-xs font-bold flex items-center gap-1">
<span class="text-amber-400">★</span> 4.8
                </div>
</div>
<div class="p-5">
<h3 class="text-xl font-display font-bold text-slate-900">Court Beta</h3>
<p class="text-xs text-slate-400 mt-0.5">Maple Hardwood • 97 reviews</p>
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">♨ A/C</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Showers</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Locker Room</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Pro Shop</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="block w-full text-center py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md shadow-emerald-600/20 transition" href="#book">
                Reserve Court Beta
              </a>
</div>
</div>
<!-- Court 3: Court Gamma -->
<div class="bg-white rounded-3xl overflow-hidden border border-slate-100 card-shadow flex flex-col justify-between transition hover:-translate-y-1 duration-200" data-purpose="court-card">
<div>
<div class="relative h-48 bg-slate-900 overflow-hidden">
<img alt="Court Gamma" class="w-full h-full object-cover opacity-80" src="{{ asset('images/court-gamma.png') }}">
<div class="absolute top-3 left-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-purple-600 text-white shadow">Budget Pick</span>
</div>
<div class="absolute top-3 right-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-500 text-white shadow">Outdoor</span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-black/60 backdrop-blur-sm text-white text-xs font-bold flex items-center gap-1">
<span class="text-amber-400">★</span> 4.7
                </div>
</div>
<div class="p-5">
<h3 class="text-xl font-display font-bold text-slate-900">Court Gamma</h3>
<p class="text-xs text-slate-400 mt-0.5">Hardcourt • 64 reviews</p>
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">☼ Lights</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Parking</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Restrooms</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="block w-full text-center py-2.5 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold text-sm shadow-md shadow-purple-600/20 transition" href="#book">
                Reserve Court Gamma
              </a>
</div>
</div>
<!-- Court 4: Court Delta -->
<div class="bg-white rounded-3xl overflow-hidden border border-slate-100 card-shadow flex flex-col justify-between transition hover:-translate-y-1 duration-200" data-purpose="court-card">
<div>
<div class="relative h-48 bg-lime-950 overflow-hidden">
<img alt="Court Delta" class="w-full h-full object-cover opacity-80" src="{{ asset('images/court-delta.png') }}">
<div class="absolute top-3 left-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-teal-600 text-white shadow">Quiet &amp; Private</span>
</div>
<div class="absolute top-3 right-3">
<span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-blue-600 text-white shadow">Indoor</span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-black/60 backdrop-blur-sm text-white text-xs font-bold flex items-center gap-1">
<span class="text-amber-400">★</span> 4.6
                </div>
</div>
<div class="p-5">
<h3 class="text-xl font-display font-bold text-slate-900">Court Delta</h3>
<p class="text-xs text-slate-400 mt-0.5">Maple Hardwood • 42 reviews</p>
<div class="flex flex-wrap gap-1.5 mt-4">
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">♨ A/C</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Parking</span>
<span class="px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-semibold text-slate-600">Water Station</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="block w-full text-center py-2.5 rounded-xl bg-lime-600 hover:bg-lime-700 text-white font-bold text-sm shadow-md shadow-lime-600/20 transition" href="#book">
                Reserve Court Delta
              </a>
</div>
</div>
</div>
</div>
</section>
<!-- END: CourtsSection -->
<!-- BEGIN: PricingSection -->
<section class="py-24 bg-gradient-to-b from-slate-50 via-white to-pink-50/20 relative" data-purpose="pricing-section" id="pricing">
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Section Header -->
<div class="text-center max-w-2xl mx-auto mb-16">
<h2 class="text-5xl sm:text-6xl font-display font-medium text-slate-900 mb-3">
            No hidden fees. <br>
<span class="text-gradient-dink font-bold">Ever.</span>
</h2>
<p class="text-slate-500 text-base sm:text-lg">
            Pay by the hour for exactly what you need. Lights are always included in the evening rate.
          </p>
</div>
<!-- 2 Tier Pricing Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
<!-- Day Session Card -->
<div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 card-shadow flex flex-col justify-between relative">
<div>
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-600 block mb-1">Day Session</span>
<span class="text-sm font-semibold text-slate-400 block mb-6">6:00 AM – 4:00 PM</span>
<div class="flex items-baseline gap-2 mb-8">
<span class="text-5xl sm:text-6xl font-display font-bold text-purple-700">₱200</span>
<span class="text-slate-400 font-semibold text-sm">per hour</span>
</div>
<ul class="space-y-4 text-sm text-slate-600 font-medium">
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-xs font-bold">✓</span>
                  All outdoor courts available
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-xs font-bold">✓</span>
                  Indoor courts subject to availability
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-xs font-bold">✓</span>
                  Max 4-hour booking
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-xs font-bold">✓</span>
                  Free 15-min grace period
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-xs font-bold">✓</span>
                  Instant confirmation
                </li>
</ul>
</div>
<div class="mt-10">
<a class="block w-full text-center py-3.5 rounded-2xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-sm transition" href="#book">
                Book Day Session
              </a>
</div>
</div>
<!-- Evening Session (Featured Gradient Card) -->
<div class="bg-gradient-to-br from-[#c026d3] via-[#9333ea] to-[#0d9488] rounded-3xl p-8 sm:p-10 text-white card-shadow shadow-2xl shadow-purple-500/20 flex flex-col justify-between relative overflow-hidden">
<!-- Background aesthetic wave/glow -->
<div class="absolute -right-16 -top-16 w-56 h-56 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
<div>
<div class="flex items-center justify-between mb-1">
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-200">Evening Session</span>
<span class="px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur-md text-white">⚡ Most Popular</span>
</div>
<span class="text-sm font-semibold text-white/70 block mb-6">4:00 PM – 11:00 PM</span>
<div class="flex items-baseline gap-2 mb-8">
<span class="text-5xl sm:text-6xl font-display font-bold text-white">₱250</span>
<span class="text-white/80 font-semibold text-sm">per hour</span>
</div>
<ul class="space-y-4 text-sm text-white/95 font-medium">
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-xs font-bold">✓</span>
                  Court lights included
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-xs font-bold">✓</span>
                  All 4 courts available
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-xs font-bold">✓</span>
                  Max 4-hour booking
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-xs font-bold">✓</span>
                  Free 15-min grace period
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-xs font-bold">✓</span>
                  Instant confirmation
                </li>
<li class="flex items-center gap-3">
<span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-xs font-bold">✓</span>
                  Priority support
                </li>
</ul>
</div>
<div class="mt-10">
<a class="block w-full text-center py-3.5 rounded-2xl bg-white hover:bg-slate-50 text-purple-900 font-bold text-sm shadow-lg transition" href="#book">
                Book Evening Session
              </a>
</div>
</div>
</div>
<!-- Footnote text -->
<p class="text-center text-xs font-semibold text-slate-400 mt-8">
          Group discounts available for 10+ hours/month. <a class="text-pink-600 hover:underline" href="#faq">Learn more →</a>
</p>
</div>
</section>
<!-- END: PricingSection -->
<!-- BEGIN: HowItWorksSection -->
<section class="py-24 bg-white relative overflow-hidden" data-purpose="how-it-works-section" id="how-it-works">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Section Header -->
<div class="text-center max-w-2xl mx-auto mb-20">
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-600 block mb-2">The Process</span>
<h2 class="text-4xl sm:text-5xl font-display font-medium text-slate-900 leading-tight">
            From zero to playing <br>
<span class="text-gradient-dink font-bold">in 60 seconds.</span>
</h2>
</div>
<!-- 4 Step Flow Grid with Interconnecting dashes -->
<div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Step 01 -->
<div class="bg-slate-50 rounded-3xl p-6 border-t-4 border-pink-500 border-x border-b border-slate-100 card-shadow flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-6">
<div class="w-12 h-12 rounded-2xl bg-pink-500 text-white flex items-center justify-center shadow-md shadow-pink-500/20">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" fill-rule="evenodd"></path>
</svg>
</div>
<span class="text-3xl font-display font-bold text-slate-200">01</span>
</div>
<h3 class="text-xl font-bold text-slate-900 mb-2">Pick a date</h3>
<p class="text-sm text-slate-500 leading-relaxed">
                Browse the live availability calendar. Slots update in real-time so you always see what's open.
              </p>
</div>
</div>
<!-- Step 02 -->
<div class="bg-slate-50 rounded-3xl p-6 border-t-4 border-purple-500 border-x border-b border-slate-100 card-shadow flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-6">
<div class="w-12 h-12 rounded-2xl bg-purple-600 text-white flex items-center justify-center shadow-md shadow-purple-500/20">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" fill-rule="evenodd"></path>
</svg>
</div>
<span class="text-3xl font-display font-bold text-slate-200">02</span>
</div>
<h3 class="text-xl font-bold text-slate-900 mb-2">Choose your slot</h3>
<p class="text-sm text-slate-500 leading-relaxed">
                Tap any green slot. Choose day rate (6AM–4PM) or evening rate (4PM–11PM) with lights.
              </p>
</div>
</div>
<!-- Step 03 -->
<div class="bg-slate-50 rounded-3xl p-6 border-t-4 border-teal-500 border-x border-b border-slate-100 card-shadow flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-6">
<div class="w-12 h-12 rounded-2xl bg-teal-500 text-white flex items-center justify-center shadow-md shadow-teal-500/20">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
<path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
<path clip-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" fill-rule="evenodd"></path>
</svg>
</div>
<span class="text-3xl font-display font-bold text-slate-200">03</span>
</div>
<h3 class="text-xl font-bold text-slate-900 mb-2">Pay via GCash</h3>
<p class="text-sm text-slate-500 leading-relaxed">
                Complete payment and send your receipt. We verify in under 5 minutes, guaranteed.
              </p>
</div>
</div>
<!-- Step 04 -->
<div class="bg-slate-50 rounded-3xl p-6 border-t-4 border-emerald-500 border-x border-b border-slate-100 card-shadow flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-6">
<div class="w-12 h-12 rounded-2xl bg-emerald-500 text-white flex items-center justify-center shadow-md shadow-emerald-500/20">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
<path clip-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill-rule="evenodd"></path>
</svg>
</div>
<span class="text-3xl font-display font-bold text-slate-200">04</span>
</div>
<h3 class="text-xl font-bold text-slate-900 mb-2">Play ball!</h3>
<p class="text-sm text-slate-500 leading-relaxed">
                Your court is locked the moment payment is verified. Show up, warm up, and dominate.
              </p>
</div>
</div>
</div>
<!-- Banner Callout Strip -->
<div class="mt-16 rounded-3xl bg-gradient-to-r from-[#0f172a] via-[#1e1b4b] to-[#042f2e] p-8 sm:p-12 text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl" style="background: linear-gradient(135deg, rgb(9, 26, 26) 0%, rgb(18, 28, 45) 42%, rgb(42, 17, 47) 82%, rgb(30, 11, 36) 100%); border: 1px solid rgba(244, 63, 94, 0.25); box-shadow: rgba(217, 70, 239, 0.15) 0px 20px 40px -15px, rgba(16, 185, 129, 0.15) 0px 10px 25px -10px;">
<div>
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-400 block mb-2">No more "Available ba?"</span>
<h3 class="text-2xl sm:text-4xl font-display font-medium">Book in seconds, not DMs.</h3>
</div>
<a class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-white font-bold text-sm bg-gradient-to-r from-pink-500 to-emerald-500 hover:opacity-95 transition" href="#book">
<span class="">Reserve Now</span>
<span class="">→</span>
</a>
</div>
</div>
</section>
<!-- END: HowItWorksSection -->
<!-- BEGIN: FAQSection -->
<section class="py-24 bg-slate-50" data-purpose="faq-accordion-section" id="faq">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Section Header -->
<div class="text-center mb-16">
<span class="text-xs uppercase font-extrabold tracking-widest text-pink-600 block mb-2">FAQ</span>
<h2 class="text-4xl sm:text-5xl font-display font-medium text-slate-900 mb-3">
            Good <span class="text-gradient-dink font-bold">questions.</span>
</h2>
<p class="text-slate-500 text-base">
            Everything you need to know before your first booking.
          </p>
</div>
<!-- Accordions List -->
<div class="space-y-4">
<!-- Accordion 01 (Open) -->
<div class="bg-white rounded-2xl p-6 border border-slate-100 card-shadow">
<div class="flex items-center justify-between cursor-pointer">
<div class="flex items-center gap-4">
<span class="text-base font-display font-bold text-pink-600">01</span>
<h3 class="text-base font-bold text-slate-900">How do I confirm my booking?</h3>
</div>
<span class="w-7 h-7 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">⌃</span>
</div>
<div class="mt-4 pl-8 text-sm text-slate-500 leading-relaxed border-t border-slate-100 pt-4">
              After reserving a slot on the site, complete payment via GCash (0916-832-5627). Send a screenshot of your receipt in our Facebook Messenger. Your slot is locked the moment we verify — usually within 5 minutes.
            </div>
</div>
<!-- Accordion 02 -->
<div class="bg-white rounded-2xl p-6 border border-slate-100 card-shadow flex items-center justify-between cursor-pointer hover:bg-slate-50 transition">
<div class="flex items-center gap-4">
<span class="text-base font-display font-bold text-slate-300">02</span>
<h3 class="text-base font-bold text-slate-800">Can I book multiple hours in one session?</h3>
</div>
<span class="w-7 h-7 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center text-xs font-bold">⌄</span>
</div>
<!-- Accordion 03 -->
<div class="bg-white rounded-2xl p-6 border border-slate-100 card-shadow flex items-center justify-between cursor-pointer hover:bg-slate-50 transition">
<div class="flex items-center gap-4">
<span class="text-base font-display font-bold text-slate-300">03</span>
<h3 class="text-base font-bold text-slate-800">What happens if I need to cancel?</h3>
</div>
<span class="w-7 h-7 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center text-xs font-bold">⌄</span>
</div>
<!-- Accordion 04 -->
<div class="bg-white rounded-2xl p-6 border border-slate-100 card-shadow flex items-center justify-between cursor-pointer hover:bg-slate-50 transition">
<div class="flex items-center gap-4">
<span class="text-base font-display font-bold text-slate-300">04</span>
<h3 class="text-base font-bold text-slate-800">Are court lights included?</h3>
</div>
<span class="w-7 h-7 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center text-xs font-bold">⌄</span>
</div>
<!-- Accordion 05 -->
<div class="bg-white rounded-2xl p-6 border border-slate-100 card-shadow flex items-center justify-between cursor-pointer hover:bg-slate-50 transition">
<div class="flex items-center gap-4">
<span class="text-base font-display font-bold text-slate-300">05</span>
<h3 class="text-base font-bold text-slate-800">Do you provide paddles and balls?</h3>
</div>
<span class="w-7 h-7 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center text-xs font-bold">⌄</span>
</div>
<!-- Accordion 06 -->
<div class="bg-white rounded-2xl p-6 border border-slate-100 card-shadow flex items-center justify-between cursor-pointer hover:bg-slate-50 transition">
<div class="flex items-center gap-4">
<span class="text-base font-display font-bold text-slate-300">06</span>
<h3 class="text-base font-bold text-slate-800">Is the facility open on holidays?</h3>
</div>
<span class="w-7 h-7 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center text-xs font-bold">⌄</span>
</div>
</div>
<!-- Still have questions CTA Button -->
<div class="text-center mt-12">
<p class="text-xs font-semibold text-slate-500 mb-3">Still have questions?</p>
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl bg-[#0084ff] hover:bg-[#0073e6] text-white font-bold text-sm shadow-md transition" href="https://facebook.com" rel="noopener noreferrer" target="_blank">
<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
</svg>
            Message us on Facebook
          </a>
</div>
</div>
</section>
<!-- END: FAQSection -->
</main>
<!-- BEGIN: MainFooter -->
<footer class="bg-[#0a0f16] text-white pt-20 pb-12 relative overflow-hidden border-t border-slate-800" data-purpose="site-footer" style="background: linear-gradient(rgb(13, 18, 28) 0%, rgb(11, 20, 24) 35%, rgb(21, 15, 29) 75%, rgb(8, 9, 15) 100%);">
<!-- Ambient ambient glow effect -->
<div class="absolute -left-32 bottom-0 w-96 h-96 bg-purple-900/20 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute -right-32 bottom-0 w-96 h-96 bg-emerald-900/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
<div class="grid grid-cols-1 md:grid-cols-12 gap-12 pb-16 border-b border-slate-800">
<!-- Brand Column -->
<div class="md:col-span-6 space-y-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-gradient-to-tr from-pink-500 to-emerald-400 p-[2px] flex items-center justify-center">
<div class="w-full h-full bg-stone-900 rounded-full flex items-center justify-center">
<span class="w-2.5 h-3 bg-pink-500 rounded-t-sm inline-block"></span>
</div>
</div>
<span class="text-xl font-normal text-slate-300">EZ<span class="font-extrabold text-white">PICKLE</span></span>
</div>
<p class="text-sm text-slate-400 max-w-sm leading-relaxed">
            Austin's best pickleball courts. Book online in seconds — no DMs, no phone tag, no double-booking.
          </p>
<div class="flex items-center gap-3 pt-2">
<a class="w-9 h-9 rounded-full bg-blue-900/40 hover:bg-blue-800/60 text-blue-300 flex items-center justify-center text-sm font-bold transition" href="#">f</a>
<a class="w-9 h-9 rounded-full bg-pink-900/40 hover:bg-pink-800/60 text-pink-300 flex items-center justify-center text-xs font-bold transition" href="#">ig</a>
</div>
</div>
<!-- Navigation Column -->
<div class="md:col-span-3 space-y-3">
<h4 class="text-xs uppercase font-extrabold tracking-wider text-pink-500">Navigate</h4>
<ul class="space-y-2.5 text-sm text-slate-300">
<li class=""><a class="hover:text-white transition" href="#book">Book a Court</a></li>
<li class=""><a class="hover:text-white transition" href="#courts">Our Courts</a></li>
<li class=""><a class="hover:text-white transition" href="#pricing">Pricing</a></li>
<li class=""><a class="hover:text-white transition" href="#how-it-works">How It Works</a></li>
<li class=""><a class="hover:text-white transition" href="#faq">FAQ</a></li>
</ul>
</div>
<!-- Contact Column -->
<div class="md:col-span-3 space-y-3">
<h4 class="text-xs uppercase font-extrabold tracking-wider text-emerald-400">Contact</h4>
<div class="space-y-3 text-sm text-slate-300">
<div class="">
<span class="text-xs text-slate-500 block">Address</span>
              400 Riverside Dr, Austin TX
            </div>
<div class="">
<span class="text-xs text-slate-500 block">GCash</span>
              0916-832-5627
            </div>
<div class="">
<span class="text-xs text-slate-500 block">Hours</span>
              Open daily 6:00 AM – 11:00 PM
            </div>
</div>
</div>
</div>
<!-- Footer Bottom Row -->
<div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
<div class="">© 2026 EZPICKLE. All rights reserved.</div>
<div class="flex items-center gap-6">
<a class="hover:text-slate-400 transition" href="#">Privacy Policy</a>
<a class="hover:text-slate-400 transition" href="#">Terms of Service</a>
<a class="hover:text-slate-400 transition" href="#">Admin</a>
</div>
</div>
</div>
</footer>
<!-- END: MainFooter -->

@if (session('booking_success'))
<div data-booking-notice class="fixed inset-x-4 top-6 z-[70] mx-auto max-w-xl rounded-2xl bg-emerald-600 px-6 py-4 text-center text-sm font-semibold text-white shadow-2xl">
  {{ session('booking_success') }}
</div>
@endif

@if ($errors->has('booking'))
<div data-booking-notice class="fixed inset-x-4 top-6 z-[70] mx-auto max-w-xl rounded-2xl bg-rose-600 px-6 py-4 text-center text-sm font-semibold text-white shadow-2xl">
  {{ $errors->first('booking') }}
</div>
@endif

<div id="booking-modal" class="fixed inset-0 z-[65] hidden items-center justify-center bg-slate-950/60 p-4 backdrop-blur-sm">
  <div class="max-h-[90vh] w-full max-w-lg overflow-y-auto rounded-3xl bg-white p-6 shadow-2xl md:p-8">
    <div class="flex items-start justify-between gap-4">
      <div>
        <p class="text-xs font-bold uppercase tracking-wider text-pink-600">Confirm your booking</p>
        <h2 class="mt-2 text-2xl font-bold text-slate-900">Complete your details</h2>
        <p id="booking-modal-summary" class="mt-2 text-sm text-slate-500"></p>
      </div>
      <button type="button" data-close-booking-modal class="rounded-full bg-slate-100 px-3 py-2 text-xl leading-none text-slate-500">×</button>
    </div>
    <form action="{{ route('reservations.store') }}" method="POST" class="mt-6 space-y-4">
      @csrf
      <input type="hidden" name="court" id="reservation-court">
      <input type="hidden" name="booking_date" id="reservation-date">
      <input type="hidden" name="start_time" id="reservation-start-time">
      <input type="hidden" name="duration_hours" id="reservation-duration" value="1">
      <input type="hidden" name="amount" id="reservation-amount">
      <label class="block text-sm font-semibold text-slate-700">Full name<input required name="customer_name" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-pink-500" autocomplete="name"></label>
      <label class="block text-sm font-semibold text-slate-700">Phone number<input required name="customer_phone" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-pink-500" autocomplete="tel"></label>
      <label class="block text-sm font-semibold text-slate-700">Email <span class="font-normal text-slate-400">(optional)</span><input type="email" name="customer_email" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-pink-500" autocomplete="email"></label>
      <label class="block text-sm font-semibold text-slate-700">GCash reference <span class="font-normal text-slate-400">(optional until payment)</span><input name="gcash_reference" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:border-pink-500" placeholder="Reference number"></label>
      <button type="button" data-show-gcash-qr class="w-full rounded-xl border border-blue-200 bg-blue-50 px-4 py-3 text-sm font-bold text-blue-700">Show Demo GCash QR</button>
      <div data-gcash-qr-panel class="hidden rounded-2xl border border-blue-100 bg-blue-50/50 p-4 text-center">
        <p class="text-sm font-bold text-slate-800">Demo QR only</p>
        <img class="mx-auto mt-3 h-48 w-48 rounded-xl bg-white p-2" src="https://api.qrserver.com/v1/create-qr-code/?size=240x240&amp;margin=12&amp;data=EZPICKLE%20DEMO%20GCASH%20PAYMENT%20-%200916-832-5627" alt="Demo GCash QR code">
        <p class="mt-2 text-xs text-slate-500">This QR is for demonstration and does not process real payments.</p>
      </div>
      <div class="rounded-2xl bg-slate-50 p-4 text-sm text-slate-600">After submitting, send your GCash receipt to <strong class="text-slate-900">0916-832-5627</strong>. Your reservation will remain pending until payment is verified.</div>
      <button class="w-full rounded-full bg-gradient-to-r from-pink-600 via-rose-500 to-emerald-500 px-6 py-3 font-bold text-white" type="submit">Submit Reservation</button>
    </form>
  </div>
</div>



<script src="{{ asset('js/app.js') }}" defer></script>
</body></html>
