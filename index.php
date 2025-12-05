
    <?php include 'inc/header.php'; ?>

        <!-- HEADER -->


        <!-- MAIN -->
        <main class="pt-20 lg:pt-16">

            <!-- HERO -->
            <section class="relative h-[100vh] lg:h-[80vh] w-full overflow-hidden">
                <div id="slides" class="absolute inset-0">
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-100"
                        data-index="0"
                        style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=80');">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0"
                        data-index="1"
                        style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920&q=80');">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0"
                        data-index="2"
                        style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?w=1920&q=80');">
                    </div>
                    <div class="absolute inset-0 gradient-bg-hero"></div>
                </div>

                <svg class="swoosh absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 1920 1080"
                    preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                    <path d="M 1200 100 Q 1400 300 1300 500 Q 1200 700 1400 900" stroke="rgba(59,130,246,0.18)"
                        stroke-width="2" fill="none" opacity="0"></path>
                    <path d="M 1250 50 Q 1500 250 1350 500 Q 1200 750 1450 950" stroke="rgba(255,255,255,0.12)"
                        stroke-width="1.5" fill="none" opacity="0"></path>
                </svg>

                <div class="relative z-10 h-full flex items-center">
                    <div class="container mx-auto px-6 lg:px-16">
                        <div class="max-w-4xl">
                            <div id="slide-content" class="text-white">
                                <h1 id="slide-title"
                                    class="text-5xl md:text-5xl lg:text-5xl font-bold leading-tight tracking-tight">
                                    B2 Cloud Tech Solutions
                                    <span
                                        class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">SAP
                                        BTP & ABAP Experts</span>
                                </h1>
                                <p id="slide-desc" class="mt-8 text-xl md:text-2xl text-gray-300 font-light max-w-2xl">
                                    End-to-end SAP BTP services — implementation, cloud-native apps, integration and managed support.</p>

                                <div class="mt-10 flex flex-wrap gap-4">
                                    <a href="#services"
                                        class="inline-flex items-center gap-2 btn-gradient text-white px-8 py-4 text-lg rounded-full transition-transform hover:-translate-y-0.5">Explore
                                        Services <i class="bi bi-arrow-right text-xl"></i></a>
                                    <a href="about.php"
                                        class="inline-flex items-center gap-2 border border-white/30 text-white px-8 py-4 text-lg rounded-full backdrop-blur-sm">About
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex items-center gap-4">
                    <button id="prev-slide"
                        class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center text-white hover:bg-white/10 transition-all"
                        aria-label="Previous slide">
                        <i class="bi bi-chevron-left text-lg"></i>
                    </button>

                    <div class="flex gap-2" id="indicators">
                        <button class="h-2 rounded-full transition-all duration-500 w-10 bg-blue-500 indicator-active"
                            data-slide="0" aria-label="Go to slide 1"></button>
                        <button class="h-2 rounded-full transition-all duration-500 w-2 bg-white/40 hover:bg-white/60"
                            data-slide="1" aria-label="Go to slide 2"></button>
                        <button class="h-2 rounded-full transition-all duration-500 w-2 bg-white/40 hover:bg-white/60"
                            data-slide="2" aria-label="Go to slide 3"></button>
                    </div>

                    <button id="next-slide"
                        class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center text-white hover:bg-white/10 transition-all"
                        aria-label="Next slide">
                        <i class="bi bi-chevron-right text-lg"></i>
                    </button>
                </div>

                <div class="absolute bottom-10 right-10 z-20 hidden lg:flex flex-col items-center gap-2">
                    <span
                        class="text-white/60 text-sm tracking-widest rotate-90 origin-center translate-x-6">SCROLL</span>
                    <div class="w-px h-16 bg-gradient-to-b from-white/60 to-transparent animate-pulse"></div>
                </div>
            </section>

            <!-- ABOUT -->
            <section id="about" class="py-24 lg:py-32 bg-white relative overflow-hidden">
                <div class="absolute inset-0 opacity-5 pointer-events-none">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5" />
                        </pattern>
                        <rect width="100" height="100" fill="url(#grid)" />
                    </svg>
                </div>

                <div class="container mx-auto px-6 lg:px-16 relative z-10">
                    <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                        <div class="about-left reveal slide-left">
                            <span
                                class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-semibold tracking-wide mb-6">WHO
                                WE ARE</span>

                            <h2 class="text-4xl md:text-4xl lg:text-4xl font-bold text-gray-900 leading-tight">
                                Leaders in <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">SAP BTP</span> & ABAP
                            </h2>

                            <p class="mt-8 text-lg text-gray-600 leading-relaxed">
                                B2 Cloud Tech Solutions Pvt Ltd is a global IT services and consulting organization specializing in delivering end-to-end solutions on <strong>SAP Business Technology Platform (SAP BTP)</strong> and <strong>ABAP</strong> programming. We enable enterprises to accelerate digital transformation using cloud-native SAP technologies.
                            </p>

                            <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                                Our team of SAP architects, developers, and integration experts deliver high-performance solutions that enable modernization, innovation, and seamless process transformation for businesses across the US, Europe, Middle East, and APAC.
                            </p>

                            <div class="mt-10 grid sm:grid-cols-2 gap-4">
                                <div class="flex items-center gap-3 slide-left" style="transition-delay:.05s">
                                    <div
                                        class="w-6 h-6 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                                        <i class="bi bi-check text-white text-sm"></i>
                                    </div>
                                    <span class="text-gray-700 font-medium">SAP BTP & ABAP expertise</span>
                                </div>

                                <div class="flex items-center gap-3 slide-left" style="transition-delay:.12s">
                                    <div
                                        class="w-6 h-6 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                                        <i class="bi bi-check text-white text-sm"></i>
                                    </div>
                                    <span class="text-gray-700 font-medium">Global delivery & local presence</span>
                                </div>

                                <div class="flex items-center gap-3 slide-left" style="transition-delay:.18s">
                                    <div
                                        class="w-6 h-6 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                                        <i class="bi bi-check text-white text-sm"></i>
                                    </div>
                                    <span class="text-gray-700 font-medium">Innovation-driven solutions</span>
                                </div>

                                <div class="flex items-center gap-3 slide-left" style="transition-delay:.24s">
                                    <div
                                        class="w-6 h-6 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                                        <i class="bi bi-check text-white text-sm"></i>
                                    </div>
                                    <span class="text-gray-700 font-medium">Proven across multiple industries</span>
                                </div>
                            </div>

                            <div class="mt-10 slide-right" style="transition-delay:.3s">
                                <a href="contact.php"
                                    class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 text-lg rounded-full group">
                                    Connect with our SAP Team
                                    <i
                                        class="bi bi-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                                </a>
                            </div>
                        </div>

                        <div class="about-right relative reveal slide-right">
                            <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1200&q=80"
                                    alt="Team collaboration" class="w-full h-[500px] object-cover" />
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 to-transparent"></div>
                            </div>

                       

                            <div
                                class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl -z-10">
                            </div>
                            <div
                                class="absolute top-1/2 -right-4 w-8 h-32 bg-gradient-to-b from-blue-200 to-cyan-200 rounded-full -z-10">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          

            <!-- SERVICES -->
            <section id="services" class="py-24 lg:py-32 bg-gray-50 relative overflow-hidden">
              <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
                <div class="absolute top-20 left-10 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-60"></div>
                <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-100 rounded-full blur-3xl opacity-60"></div>
              </div>
            
              <div class="container mx-auto px-6 lg:px-16 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                  <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold tracking-wide mb-6">SERVICES</span>
                  <h2 class="text-4xl md:text-4xl lg:text-4xl font-bold text-gray-900">
                    SAP BTP services to <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Modernize & Scale</span>
                  </h2>
                </div>
            
                <!-- use 3 columns on large screens so 6 cards show nicely -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                  <!-- 1. SAP BTP Implementation & Consulting -->
                  <article id="sap-btp" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 service-card reveal">
                    <div class="absolute inset-0 service-hover-bg">
                      <img src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?w=1200&q=80" alt="SAP BTP" class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-black/60"></div>
                    </div>
                    <div class="relative z-10 p-8 lg:p-6 h-full flex flex-col min-h-[320px]">
                      <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-violet-500 to-purple-600 flex items-center justify-center mb-6">
                        <i class="bi bi-gear-fill text-white text-xl"></i>
                      </div>
                      <h3 class="text-2xl lg:text-2xl font-bold mb-3 transition-colors group-hover:text-white">SAP BTP Implementation & Consulting</h3>
                      <p class="text-lg mb-6 text-gray-600 transition-colors group-hover:text-white/80">
                        Designing & deploying scalable BTP architectures — account setup, security, governance and advisory for cloud adoption.
                      </p>
                      <div class="mt-auto">
                        <div class="text-sm font-semibold uppercase tracking-wider mb-2 text-blue-600 transition-colors group-hover:text-white/80">Typical outcomes</div>
                        <p class="text-sm text-gray-500 transition-colors group-hover:text-white/70">Governed BTP landscapes, faster innovation and secure cloud foundations.</p>
                      </div>
                      <!-- <div class="absolute bottom-8 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 text-gray-600 transition-all group-hover:bg-white group-hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6" /></svg>
                      </div> -->
                    </div>
                  </article>
            
                  <!-- 2. Cloud-Native Application Development -->
                  <article id="cloud-dev" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 service-card reveal" style="transition-delay:.05s">
                    <div class="absolute inset-0 service-hover-bg">
                      <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=1200&q=80" alt="Cloud Native Apps" class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-black/60"></div>
                    </div>
                    <div class="relative z-10 p-8 lg:p-6 h-full flex flex-col min-h-[320px]">
                      <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-600 flex items-center justify-center mb-6">
                        <i class="bi bi-code-slash text-white text-xl"></i>
                      </div>
                      <h3 class="text-2xl lg:text-2xl font-bold mb-3 transition-colors group-hover:text-white">Cloud-Native Application Development</h3>
                      <p class="text-lg mb-6 text-gray-600 transition-colors group-hover:text-white/80">
                        Custom CAP & RAP applications, low-code solutions (SAP Build) and enterprise-grade extensions.
                      </p>
                      <div class="mt-auto">
                        <div class="text-sm font-semibold uppercase tracking-wider mb-2 text-blue-600 transition-colors group-hover:text-white/80">Typical outcomes</div>
                        <p class="text-sm text-gray-500 transition-colors group-hover:text-white/70">Extensible, maintainable apps and faster time-to-market using SAP cloud patterns.</p>
                      </div>
                      <!-- <div class="absolute bottom-8 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 text-gray-600 transition-all group-hover:bg-white group-hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6" /></svg>
                      </div> -->
                    </div>
                  </article>
            
                  <!-- 3. Integration Services -->
                  <article id="integration" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 service-card reveal" style="transition-delay:.1s">
                    <div class="absolute inset-0 service-hover-bg">
                      <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=1200&q=80" alt="Integration" class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-black/60"></div>
                    </div>
                    <div class="relative z-10 p-8 lg:p-6 h-full flex flex-col min-h-[320px]">
                      <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 flex items-center justify-center mb-6">
                        <i class="bi bi-link-45deg text-white text-xl"></i>
                      </div>
                      <h3 class="text-2xl lg:text-2xl font-bold mb-3 transition-colors group-hover:text-white">Integration Services</h3>
                      <p class="text-lg mb-6 text-gray-600 transition-colors group-hover:text-white/80">
                        SAP Integration Suite, API management, event-driven architecture and real-time messaging between SAP and non-SAP systems.
                      </p>
                      <div class="mt-auto">
                        <div class="text-sm font-semibold uppercase tracking-wider mb-2 text-blue-600 transition-colors group-hover:text-white/80">Typical outcomes</div>
                        <p class="text-sm text-gray-500 transition-colors group-hover:text-white/70">Reliable data flows, simplified connectivity and API governance.</p>
                      </div>
                      <!-- <div class="absolute bottom-8 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 text-gray-600 transition-all group-hover:bg-white group-hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6" /></svg>
                      </div> -->
                    </div>
                  </article>
            
                  <!-- 4. Data & Analytics -->
                  <article id="analytics" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 service-card reveal" style="transition-delay:.15s">
                    <div class="absolute inset-0 service-hover-bg">
                      <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=1200&q=80" alt="Data & Analytics" class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-black/60"></div>
                    </div>
                    <div class="relative z-10 p-8 lg:p-6 h-full flex flex-col min-h-[320px]">
                      <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-orange-500 to-red-600 flex items-center justify-center mb-6">
                        <i class="bi bi-bar-chart-line-fill text-white text-xl"></i>
                      </div>
                      <h3 class="text-2xl lg:text-2xl font-bold mb-3 transition-colors group-hover:text-white">Data & Analytics</h3>
                      <p class="text-lg mb-6 text-gray-600 transition-colors group-hover:text-white/80">
                        SAP HANA Cloud modelling, SAP Analytics Cloud, real-time processing and governed data pipelines.
                      </p>
                      <div class="mt-auto">
                        <div class="text-sm font-semibold uppercase tracking-wider mb-2 text-blue-600 transition-colors group-hover:text-white/80">Typical outcomes</div>
                        <p class="text-sm text-gray-500 transition-colors group-hover:text-white/70">Actionable dashboards, data governance and analytics at scale.</p>
                      </div>
                      <!-- <div class="absolute bottom-8 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 text-gray-600 transition-all group-hover:bg-white group-hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6" /></svg>
                      </div> -->
                    </div>
                  </article>
            
                  <!-- 5. Migration & Modernization -->
                  <article id="migration" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 service-card reveal" style="transition-delay:.2s">
                    <div class="absolute inset-0 service-hover-bg">
                      <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=1200&q=80" alt="Migration & Modernization" class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-black/60"></div>
                    </div>
                    <div class="relative z-10 p-8 lg:p-6 h-full flex flex-col min-h-[320px]">
                      <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 flex items-center justify-center mb-6">
                        <i class="bi bi-arrow-repeat text-white text-xl"></i>
                      </div>
                      <h3 class="text-2xl lg:text-2xl font-bold mb-3 transition-colors group-hover:text-white">Migration & Modernization</h3>
                      <p class="text-lg mb-6 text-gray-600 transition-colors group-hover:text-white/80">
                        Legacy-to-BTP migration, S/4HANA extension modernization and ABAP refactoring to a clean-core architecture.
                      </p>
                      <div class="mt-auto">
                        <div class="text-sm font-semibold uppercase tracking-wider mb-2 text-blue-600 transition-colors group-hover:text-white/80">Typical outcomes</div>
                        <p class="text-sm text-gray-500 transition-colors group-hover:text-white/70">Reduced technical debt, cleaner core and faster upgrades.</p>
                      </div>
                      <!-- <div class="absolute bottom-8 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 text-gray-600 transition-all group-hover:bg-white group-hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6" /></svg>
                      </div> -->
                    </div>
                  </article>
            
                  <!-- 6. Managed Services & Support -->
                  <article id="managed" class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 service-card reveal" style="transition-delay:.25s">
                    <div class="absolute inset-0 service-hover-bg">
                      <img src="https://images.unsplash.com/photo-1714079761488-e0c9b9ac4138?w=1200&q=80" alt="Managed Services" class="w-full h-full object-cover" />
                      <div class="absolute inset-0 bg-black/60"></div>
                    </div>
                    <div class="relative z-10 p-8 lg:p-6 h-full flex flex-col min-h-[320px]">
                      <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-rose-500 to-pink-600 flex items-center justify-center mb-6">
                        <i class="bi bi-shield-lock-fill text-white text-xl"></i>
                      </div>
                      <h3 class="text-2xl lg:text-2xl font-bold mb-3 transition-colors group-hover:text-white">Managed Services & Support</h3>
                      <p class="text-lg mb-6 text-gray-600 transition-colors group-hover:text-white/80">
                        24×7 BTP monitoring & administration, DevOps & CI/CD automation, and continuous performance optimization.
                      </p>
                      <div class="mt-auto">
                        <div class="text-sm font-semibold uppercase tracking-wider mb-2 text-blue-600 transition-colors group-hover:text-white/80">Typical outcomes</div>
                        <p class="text-sm text-gray-500 transition-colors group-hover:text-white/70">Reliable operations, faster fixes and continuous improvements.</p>
                      </div>
                      <!-- <div class="absolute bottom-8 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 text-gray-600 transition-all group-hover:bg-white group-hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6" /></svg>
                      </div> -->
                    </div>
                  </article>
            
                </div> <!-- /grid -->
              </div>
            </section>

            <!-- COEs -->
            <section id="coes" class="py-24 lg:py-32 bg-[#0a1628] relative overflow-hidden text-white">
                <div class="absolute inset-0 opacity-20 pointer-events-none">
                    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500 rounded-full blur-[150px]"></div>
                    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-purple-500 rounded-full blur-[150px]"></div>
                </div>

                <div class="container mx-auto px-6 lg:px-16 relative z-10">
                    <div class="mb-12 reveal">
                        <span
                            class="inline-block px-4 py-2 bg-white/10 text-blue-300 rounded-full text-sm font-semibold tracking-wide mb-6 backdrop-blur-sm">CENTERS
                            OF EXCELLENCE</span>
                        <h2 class="text-4xl md:text-4xl lg:text-4xl font-bold text-white max-w-2xl">Deep capabilities to
                            accelerate SAP value.</h2>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                        <div class="group relative rounded-2xl lg:rounded-3xl overflow-hidden cursor-pointer min-h-[190px] reveal slide-left"
                            style="background:linear-gradient(135deg,#2563eb,#1e40af)">
                            <div class="relative h-full p-6 lg:p-8 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold text-white text-lg lg:text-xl">SAP BTP & S/4HANA</h3>
                                    <p class="mt-2 text-white/80 text-xs lg:text-sm max-w-xs">Implementation, extensions and clean-core modernization</p>
                                </div>
                                <div class="flex items-center gap-2 text-white/90 mt-4">
                                    <span class="font-medium">Know more</span>
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M9 18l6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="group relative rounded-2xl overflow-hidden cursor-pointer min-h-[190px] reveal slide-right"
                            style="background:linear-gradient(135deg,#7c3aed,#4c1d95)">
                            <div class="relative h-full p-6 lg:p-8 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold text-white text-lg lg:text-xl">Data Science & AI</h3>
                                    <p class="mt-2 text-white/80 text-xs lg:text-sm">Analytics & AI for enterprise decisioning</p>
                                </div>
                                <div class="flex items-center gap-2 text-white/90 mt-4">
                                    <span class="font-medium text-sm">Know more</span>
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M9 18l6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="group relative rounded-2xl overflow-hidden cursor-pointer min-h-[190px] reveal slide-left"
                            style="background:linear-gradient(135deg,#06b6d4,#0ea5a4)">
                            <div class="relative h-full p-6 lg:p-8 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold text-white text-lg lg:text-xl">Integration & Cloud Platforms</h3>
                                    <p class="mt-2 text-white/80 text-xs lg:text-sm max-w-xs">SAP Integration Suite, AWS & Azure integrations</p>
                                </div>
                                <div class="flex items-center gap-2 text-white/90 mt-4">
                                    <span class="font-medium">Know more</span>
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M9 18l6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="group relative rounded-2xl overflow-hidden cursor-pointer min-h-[190px] reveal slide-right"
                            style="background:linear-gradient(135deg,#10b981,#059669)">
                            <div class="relative h-full p-6 lg:p-8 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold text-white text-lg lg:text-xl">RAP & ABAP Engineering</h3>
                                    <p class="mt-2 text-white/80 text-xs lg:text-sm">RESTful ABAP, CAP, and extension engineering</p>
                                </div>
                                <div class="flex items-center gap-2 text-white/90 mt-4">
                                    <span class="font-medium text-sm">Know more</span>
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M9 18l6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- SOLUTIONS -->
            <section id="solutions" class="py-24 lg:py-32 bg-white relative overflow-hidden">
                <div class="absolute inset-0">
                    <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-50 rounded-full"></div>
                    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-50 rounded-full"></div>
                </div>

                <div class="container mx-auto px-6 lg:px-16 relative z-10">
                    <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                        <span
                            class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold tracking-wide mb-6">SOLUTIONS</span>
                        <h2 class="text-4xl md:text-4xl lg:text-4xl font-bold text-gray-900">Productized & Accelerator <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">Solutions</span>
                        </h2>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                        <article class="group bg-gray-50 rounded-3xl p-6 lg:p-8 hover:bg-white hover:shadow-xl transition-all duration-500 reveal slide-left">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                                <i class="bi bi-speedometer2 text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-bold mb-2">B2 Cloud4HANA</h3>
                            <p class="text-gray-500 text-sm lg:text-base mb-6">SAP S/4HANA transformation accelerator for faster deployment and adoption.</p>
                            <div class="flex items-center text-gray-400">
                                <span class="text-sm font-medium">Learn more</span>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M9 18l6-6-6-6" />
                                </svg>
                            </div>
                        </article>

                        <article class="group bg-gray-50 rounded-3xl p-6 lg:p-8 hover:bg-white hover:shadow-xl transition-all duration-500 reveal slide-right">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                                <i class="bi bi-factory text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-bold mb-2">Factory Process Automation</h3>
                            <p class="text-gray-500 text-sm lg:text-base mb-6">Smart manufacturing and process automation solutions.</p>
                            <div class="flex items-center text-gray-400">
                                <span class="text-sm font-medium">Learn more</span>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M9 18l6-6-6-6" />
                                </svg>
                            </div>
                        </article>

                        <article class="group bg-gray-50 rounded-3xl p-6 lg:p-8 hover:bg-white hover:shadow-xl transition-all duration-500 reveal" style="transition-delay:.05s">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-violet-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                                <i class="bi bi-graph-up text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl lg:text-2xl font-bold mb-2">AMURAA</h3>
                            <p class="text-gray-500 text-sm lg:text-base mb-6">AI-powered analytics platform for business insights.</p>
                            <div class="flex items-center text-gray-400">
                                <span class="text-sm font-medium">Learn more</span>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M9 18l6-6-6-6" />
                                </svg>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- INSIGHTS -->
            <!-- <section id="insights" class="py-24 lg:py-32 bg-gray-50 relative overflow-hidden">
                <div class="container mx-auto px-6 lg:px-16 relative z-10">
                    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-12 reveal">
                        <div>
                            <span
                                class="inline-block px-4 py-2 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold tracking-wide mb-6">BE
                                FUTURE READY</span>
                            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900">Our <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-500">Perspectives.</span>
                            </h2>
                        </div>
                        <a href="#"
                            class="mt-6 lg:mt-0 inline-flex items-center gap-2 border border-gray-300 rounded-full px-6 py-3 hover:bg-gray-100">View
                            all blogs
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M9 18l6-6-6-6" />
                            </svg>
                        </a>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
                        <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 reveal slide-left h-full flex flex-col">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&q=80"
                                    alt="SAP article"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                    June 2025
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">SAP SuccessFactors People Analytics: Turning
                                    Workforce Data into Smart Decisions</h3>
                            </div>
                        </article>

                        <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 reveal slide-right h-full flex flex-col" style="transition-delay:.05s">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800&q=80"
                                    alt="Digital transformation"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                    May 2025
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Digital Transformation: Opportunities and
                                    Challenges</h3>
                            </div>
                        </article>

                        <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 reveal slide-left h-full flex flex-col" style="transition-delay:.1s">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80"
                                    alt="SharePoint"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                    April 2025
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Why Use SharePoint for SOP Management?</h3>
                            </div>
                        </article>

                        <article class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 reveal slide-right h-full flex flex-col" style="transition-delay:.15s">
                            <div class="relative h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=800&q=80"
                                    alt="Green tech"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                    March 2025
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Green Tech Innovations: Empowering a
                                    Sustainable Future</h3>
                            </div>
                        </article>
                    </div>
                </div>
            </section> -->

            <!-- CAREERS -->
            <section id="careers" class="relative py-24 lg:py-32 overflow-hidden">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1920&q=80"
                        alt="Team background" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628]/95 via-[#0a1628]/85 to-[#0a1628]/70">
                    </div>
                </div>

                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute top-20 left-20 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl animate-pulse">
                    </div>
                    <div class="absolute bottom-20 right-20 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl animate-pulse">
                    </div>
                </div>

                <div class="container mx-auto px-6 lg:px-16 relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                        <div class="reveal slide-left">
                            <span class="inline-block px-4 py-2 bg-white/10 text-cyan-300 rounded-full text-sm font-semibold tracking-wide mb-6 backdrop-blur-sm">CAREERS</span>
                            <h2 class="text-4xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">Shape Your Future, <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Join Our Team</span></h2>
                            <p class="mt-6 text-lg text-gray-300 leading-relaxed max-w-lg">We hire SAP, cloud and data experts — join a global team working on enterprise transformation.</p>
                            <div class="mt-10">
                                <a href="#"
                                    class="inline-flex items-center gap-2 bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-10 py-4 text-lg rounded-full shadow-lg">Explore
                                    Opportunities
                                    <svg class="ml-2 w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M9 18l6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- <div class="grid grid-cols-2 gap-4 reveal slide-right">
                            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-colors">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                </div>
                                <p class="text-3xl font-bold text-white">9000+</p>
                                <p class="text-gray-400 text-sm mt-1">Team Members (global)</p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-colors">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                </div>
                                <p class="text-3xl font-bold text-white">43+</p>
                                <p class="text-gray-400 text-sm mt-1">Global Offices</p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-colors">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                </div>
                                <p class="text-3xl font-bold text-white">11</p>
                                <p class="text-gray-400 text-sm mt-1">Years GPTW</p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/15 transition-colors">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-500 flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M3 3h18v18H3z" />
                                    </svg>
                                </div>
                                <p class="text-3xl font-bold text-white">100+</p>
                                <p class="text-gray-400 text-sm mt-1">Benefits & Perks</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>

            <!-- STATS -->
            <!-- <section id="stats" class="relative py-16 bg-gradient-to-r from-[#0a1628] to-[#1a2a4a] overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-cyan-500 rounded-full blur-3xl"></div>
                </div>

                <div class="container mx-auto px-6 lg:px-16 relative z-10">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-4 text-center">
                        <div class="group">
                            <div class="relative inline-block text-white">
                                <span class="text-4xl md:text-5xl lg:text-6xl font-bold tabular-nums"
                                    data-target="100">0+</span>
                                <div
                                    class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-full">
                                </div>
                            </div>
                            <p class="mt-4 text-gray-400 text-sm md:text-base font-medium tracking-wide">Fortune 500
                                Customers</p>
                        </div>

                        <div class="group">
                            <div class="relative inline-block text-white">
                                <span class="text-4xl md:text-5xl lg:text-6xl font-bold tabular-nums"
                                    data-target="9000">0+</span>
                                <div
                                    class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-full">
                                </div>
                            </div>
                            <p class="mt-4 text-gray-400 text-sm md:text-base font-medium tracking-wide">Top Talent
                                Employees</p>
                        </div>

                        <div class="group">
                            <div class="relative inline-block text-white">
                                <span class="text-4xl md:text-5xl lg:text-6xl font-bold tabular-nums"
                                    data-target="43">0+</span>
                                <div
                                    class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-full">
                                </div>
                            </div>
                            <p class="mt-4 text-gray-400 text-sm md:text-base font-medium tracking-wide">Global Campuses
                            </p>
                        </div>

                        <div class="group">
                            <div class="relative inline-block text-white">
                                <span class="text-4xl md:text-5xl lg:text-6xl font-bold tabular-nums"
                                    data-target="29">0+</span>
                                <div
                                    class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 rounded-full">
                                </div>
                            </div>
                            <p class="mt-4 text-gray-400 text-sm md:text-base font-medium tracking-wide">Years of
                                Excellence</p>
                        </div>
                    </div>
                </div>
            </section> -->

    <?php include 'inc/footer.php' ?>
    </div>

    <!-- SCRIPTS: slider, counters, reveal animations, header, mobile -->
    <script>
        (function () {
            // header
            const header = document.getElementById('site-header');
            const mobileToggle = document.getElementById('mobile-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('mobile-open-icon');
            const closeIcon = document.getElementById('mobile-close-icon');
            const primaryNav = document.querySelector('nav[aria-label="Primary"]');
            const navGroups = Array.from(document.querySelectorAll('nav[aria-label="Primary"] .group[data-has-dropdown="true"]'));
            navGroups.forEach(group => {
                const btn = group.querySelector('button');
                btn && btn.addEventListener('click', (e) => {
                    e.preventDefault(); e.stopPropagation();
                    const isOpen = group.classList.toggle('open');
                    navGroups.forEach(g => { if (g !== group) g.classList.remove('open'); });
                });
            });
            document.addEventListener('click', (e) => {
                if (primaryNav && !primaryNav.contains(e.target)) {
                    navGroups.forEach(g => g.classList.remove('open'));
                }
            });
            const setHeaderScrolled = () => {
                if (window.scrollY > 50) {
                    header.classList.add('bg-glass', 'bg-[#0a1628]/95', 'shadow-lg', 'shadow-black/10');
                    header.classList.remove('bg-transparent');
                } else {
                    header.classList.remove('bg-glass', 'bg-[#0a1628]/95', 'shadow-lg', 'shadow-black/10');
                    header.classList.add('bg-transparent');
                }
            };
            setHeaderScrolled();
            window.addEventListener('scroll', setHeaderScrolled);

            mobileToggle.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.toggle('open');
                mobileToggle.setAttribute('aria-expanded', isOpen);
                if (isOpen) {
                    openIcon.classList.add('hidden'); closeIcon.classList.remove('hidden');
                } else {
                    openIcon.classList.remove('hidden'); closeIcon.classList.add('hidden');
                }
            });

            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !mobileToggle.contains(e.target) && mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    mobileToggle.setAttribute('aria-expanded', false);
                    openIcon.classList.remove('hidden'); closeIcon.classList.add('hidden');
                }
            });

            // slider
            const slides = Array.from(document.querySelectorAll('#slides > div[data-index]'));
            const indicators = Array.from(document.querySelectorAll('#indicators > button'));
            const nextBtn = document.getElementById('next-slide');
            const prevBtn = document.getElementById('prev-slide');
            const slideTitle = document.getElementById('slide-title');
            const slideDesc = document.getElementById('slide-desc');
            const slideData = [
                { title: "B2 Cloud Tech Solutions", subtitle: "SAP BTP & ABAP Experts", description: "End-to-end SAP BTP services — implementation, cloud-native apps, integration and managed support." },
                { title: "Accelerate Your Cloud Journey", subtitle: "Cloud-Native Applications", description: "Custom CAP & RAP applications, low-code automation and SAP Build solutions." },
                { title: "Enable Real-time Insights", subtitle: "Data & Analytics", description: "SAP HANA Cloud modelling, analytics and governed data pipelines." }
            ];
            let current = 0;
            let autoplay = !window.prefersReducedMotion;
            let timerId = null;
            let isPaused = false;
            function showSlide(index) {
                if (index < 0) index = slides.length - 1;
                if (index >= slides.length) index = 0;
                slides.forEach(s => s.style.opacity = '0');
                slides[index].style.opacity = '1';
                slideTitle.innerHTML = slideData[index].title + '<span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">' + slideData[index].subtitle + '</span>';
                slideDesc.textContent = slideData[index].description;
                indicators.forEach(btn => { btn.classList.remove('indicator-active'); btn.style.width = btn.dataset.slide == index ? '40px' : ''; });
                indicators[index].classList.add('indicator-active');
                current = index;
            }
            function nextSlide() { showSlide(current + 1); }
            function prevSlideFn() { showSlide(current - 1); }
            nextBtn.addEventListener('click', () => { nextSlide(); resetTimer(); });
            prevBtn.addEventListener('click', () => { prevSlideFn(); resetTimer(); });
            indicators.forEach(btn => btn.addEventListener('click', () => { showSlide(Number(btn.dataset.slide)); resetTimer(); }));
            const hero = document.querySelector('section.relative.h-screen');
            if (hero) {
                ['mouseenter', 'focusin'].forEach(ev => hero.addEventListener(ev, () => { isPaused = true; resetTimer(); }));
                ['mouseleave', 'focusout'].forEach(ev => hero.addEventListener(ev, () => { isPaused = false; resetTimer(); }));
            }
            function startTimer() { if (!autoplay || window.prefersReducedMotion) return; timerId = setInterval(() => { if (!isPaused) nextSlide(); }, 6000); }
            function resetTimer() { if (timerId) clearInterval(timerId); startTimer(); }
            showSlide(0); startTimer();

            // stats counters
            const counters = Array.from(document.querySelectorAll('.tabular-nums[data-target], .tabular-nums'));
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const end = Number(el.getAttribute('data-target') || el.textContent.replace(/\D/g, '') || 0);
                        animateCount(el, end);
                        counterObserver.unobserve(el);
                    }
                });
            }, { threshold: 0.4 });
            counters.forEach(c => counterObserver.observe(c));
            function animateCount(el, end) {
                if (window.prefersReducedMotion) { el.textContent = end.toLocaleString() + '+'; return; }
                let start = null;
                const duration = 2000;
                function step(ts) {
                    if (!start) start = ts;
                    const progress = Math.min((ts - start) / duration, 1);
                    const easeOut = 1 - Math.pow(1 - progress, 4);
                    const value = Math.floor(easeOut * end);
                    el.textContent = value.toLocaleString() + '+';
                    if (progress < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            }

            // reveal animations for sections
            const rev = Array.from(document.querySelectorAll('.reveal, .slide-left, .slide-right, .floating-card'));
            if (rev.length) {
                const ro = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('in-view');
                            ro.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.18 });
                rev.forEach(e => ro.observe(e));
            }

            // back to top
            const backBtn = document.getElementById('back-to-top');
            backBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

            // footer year
            document.getElementById('year').textContent = new Date().getFullYear();

            // escape key closes mobile
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    if (mobileMenu.classList.contains('open')) {
                        mobileMenu.classList.remove('open');
                        mobileToggle.setAttribute('aria-expanded', false);
                        openIcon.classList.remove('hidden'); closeIcon.classList.add('hidden');
                    }
                    navGroups.forEach(g => g.classList.remove('open'));
                }
            });

            // respect reduced motion: clear timers if needed
            if (window.prefersReducedMotion) {
                if (timerId) clearInterval(timerId);
            }
        })();
    </script>
</body>

</html>
