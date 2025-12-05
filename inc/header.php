<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>B2 Cloud Tech Solutions Pvt Ltd</title>

    <!-- Tailwind CDN (for rapid prototyping) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom Tailwind CSS with @apply classes -->
    <link rel="stylesheet" href="assets/css/app.css">

    <script>
        window.prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    </script>

    <style>
        /* Small custom styles */
        .gradient-bg-hero {
            background: linear-gradient(90deg, rgba(10, 22, 40, 0.95) 0%, rgba(10, 22, 40, 0.7) 50%, rgba(10, 22, 40, 0.4) 100%);
        }

        .swoosh path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 2s ease forwards;
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0;
                opacity: 1;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .swoosh path {
                animation: none;
                stroke-dashoffset: 0;
            }
        }

        .focus-ring:focus {
            outline: 3px solid rgba(59, 130, 246, 0.3);
            outline-offset: 3px;
        }

        header.bg-glass {
            backdrop-filter: blur(8px);
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height .28s ease, opacity .28s ease;
            opacity: 0;
        }

        .mobile-menu.open {
            max-height: 800px;
            opacity: 1;
        }

        .indicator-active {
            width: 40px !important;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #2563eb, #06b6d4);
            box-shadow: 0 8px 18px rgba(37, 99, 235, 0.18);
        }

        /* Section animation util */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: all .7s cubic-bezier(.2, .9, .2, 1);
        }

        .reveal.in-view {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: all .7s cubic-bezier(.2, .9, .2, 1);
        }

        .slide-left.in-view {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-right {
            opacity: 0;
            transform: translateX(30px);
            transition: all .7s cubic-bezier(.2, .9, .2, 1);
        }

        .slide-right.in-view {
            opacity: 1;
            transform: translateX(0);
        }

        .floating-card {
            opacity: 0;
            transform: scale(.95);
            transition: all .6s ease;
        }

        .floating-card.in-view {
            opacity: 1;
            transform: scale(1);
        }

        .service-hover-bg {
            transition: opacity .6s ease;
            opacity: 0;
        }

        .service-card:hover .service-hover-bg {
            opacity: 1;
        }

        .service-hover-bg {
            z-index: 0;
        }

    .service-card>.relative {
        z-index: 1;
    }

    /* Stable dropdown menu on hover */
    nav[aria-label="Primary"] .group:hover > div[class*="absolute"] {
        opacity: 1 !important;
        pointer-events: auto !important;
        visibility: visible !important;
    }

    nav[aria-label="Primary"] .group > div[class*="absolute"] {
        visibility: hidden;
    }

    nav[aria-label="Primary"] .group:hover > div[class*="absolute"] {
        visibility: visible;
    }

        /* small responsive adjustments */
        @media (max-width: 1024px) {
            .indicator-active {
                width: 30px !important;
            }
        }
        .text-sm {
    font-size: 0.975rem !important;
}
    </style>
</head>


<body class="antialiased text-sm bg-white text-gray-900">

    <div id="app" class="min-h-screen">

        <header id="site-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
            style="background-color: rgba(10,22,40,0.95);">
            <div class="container mx-auto px-6 lg:px-16">
                <div class="flex items-center justify-between h-20 lg:h-16">

                    <a href="/b2-cloud/" class="flex items-center gap-2">
                        <div class="text-2xl lg:text-3xl font-bold select-none leading-none">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">B2
                                Cloud</span>
                            <span class="text-white ml-1 font-light">Tech</span>
                        </div>
                    </a>

                    <!-- NAV (updated per PPT) -->
                    <nav class="hidden lg:flex items-center gap-1" aria-label="Primary">
                        <!-- Services -->
                        <div class="relative group">
                            <a href="#services" class="flex items-center gap-1 px-4 py-2 text-white/90 hover:text-white transition-colors text-sm font-medium">
                                Services
                                <i class="bi bi-chevron-down inline-block transition-transform group-hover:rotate-180"></i>
                            </a>
                            <div class="absolute top-full left-0 mt-2 w-72 bg-white rounded-2xl shadow-xl opacity-0 transition-all duration-200 group-hover:opacity-100">
                                <div class="p-2">
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/services/sap-btp.php">SAP BTP Implementation</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/services/cloud-dev.php">Cloud-Native App Development</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/services/integration.php">Integration Services</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/services/analytics.php">Data & Analytics</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/services/migration.php">Migration & Modernization</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/services/managed.php">Managed Services & Support</a>
                                </div>
                            </div>
                        </div>

                        <!-- CoEs -->
                        <div class="relative group">
                            <a href="#coes" class="flex items-center gap-1 px-4 py-2 text-white/90 hover:text-white transition-colors text-sm font-medium">
                                SAP Expertise
                                <i class="bi bi-chevron-down inline-block transition-transform group-hover:rotate-180"></i>
                            </a>
                            <div class="absolute top-full left-0 mt-2 w-64 bg-white rounded-2xl shadow-xl overflow-hidden opacity-0 transition-all duration-200 group-hover:opacity-100">
                                <div class="p-2">
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/#coes">SAP BTP</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/#coes">SAP CAP</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/#coes">SAP RAP</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/#coes">SAP Build & BPA</a>
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/#s4hana">S/4HANA Extensions</a>
                                </div>
                            </div>
                        </div>

                        <!-- Solutions -->
                        <div class="relative group">
                            <a href="#solutions" class="flex items-center gap-1 px-4 py-2 text-white/90 hover:text-white transition-colors text-sm font-medium">
                                Solutions
                                <i class="bi bi-chevron-down inline-block transition-transform group-hover:rotate-180"></i>
                            </a>
                            <div class="absolute top-full left-0 mt-2 w-64 bg-white rounded-2xl shadow-xl overflow-hidden opacity-0 transition-all duration-200 group-hover:opacity-100">
                                <div class="p-2">
                                    <a class="flex justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-xl" href="/b2-cloud/#btp-solutions">BTP Solutions</a>
                                    
                                </div>
                            </div>
                        </div>

                        <a href="/b2-cloud/#industries" class="px-4 py-2 text-white/90 hover:text-white text-sm font-medium">Industries</a>
                        <a href="/b2-cloud/about.php" class="px-4 py-2 text-white/90 hover:text-white text-sm font-medium">About Us</a>
                        <a href="/b2-cloud/careers.php" class="px-4 py-2 text-white/90 hover:text-white text-sm font-medium">Careers</a>
                    </nav>

                    <div class="flex items-center gap-4">
                        <button id="search-btn"
                            class="hidden lg:flex w-10 h-10 items-center justify-center text-white/80 hover:text-white transition-colors"
                            aria-label="Open search">
                            <i class="bi bi-search text-xl"></i>
                        </button>

                        <a href="/b2-cloud/contact.php"
                            class="hidden lg:inline-flex items-center gap-2 btn-gradient text-white rounded-full px-6 py-2 text-sm focus-ring"
                            role="button">
                            Contact Us
                            <i class="bi bi-arrow-right text-base"></i>
                        </a>

                        <button id="mobile-toggle"
                            class="lg:hidden w-10 h-10 flex items-center justify-center text-white focus-ring"
                            aria-expanded="false" aria-label="Toggle menu">
                            <i id="mobile-open-icon" class="bi bi-list text-2xl"></i>
                            <i id="mobile-close-icon" class="hidden bi bi-x text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div id="mobile-menu" class="lg:hidden mobile-menu bg-[#0a1628] border-t border-white/10">
                <div class="container mx-auto px-6 py-6">
                    <nav class="space-y-2">
                        <a class="block px-4 py-3 text-white hover:bg-white/10 rounded-xl transition-colors" href="/b2-cloud/#services">Services</a>
                        <a class="block px-4 py-3 text-white hover:bg-white/10 rounded-xl transition-colors" href="/b2-cloud/#coes">CoEs</a>
                        <a class="block px-4 py-3 text-white hover:bg-white/10 rounded-xl transition-colors" href="/b2-cloud/#solutions">Solutions</a>
                        <a class="block px-4 py-3 text-white hover:bg-white/10 rounded-xl transition-colors" href="/b2-cloud/#industries">Industries</a>
                        <a class="block px-4 py-3 text-white hover:bg-white/10 rounded-xl transition-colors" href="/b2-cloud/about.php">About Us</a>
                        <a class="block px-4 py-3 text-white hover:bg-white/10 rounded-xl transition-colors" href="/b2-cloud/careers.php">Careers</a>
                    </nav>

                    <div class="mt-6 pt-6 border-t border-white/10">
                        <a class="w-full inline-flex justify-center items-center gap-2 btn-gradient text-white rounded-full py-4"
                            href="/b2-cloud/contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </header>