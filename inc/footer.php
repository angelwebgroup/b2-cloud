        </main>
        <footer id="main-footer" class="bg-[#050d18] text-white relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[150px]"></div>
                <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-purple-600/10 rounded-full blur-[150px]"></div>
            </div>
            <div class="container mx-auto px-6 lg:px-16 relative z-10">
                <div class="py-16 border-b border-white/10">
                    <div class="grid lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h3 class="text-3xl md:text-4xl font-bold mb-4">Stay Updated with Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Insights</span></h3>
                            <p class="text-gray-400 max-w-lg">Subscribe to our newsletter for the latest SAP and cloud-native insights, updates, and thought leadership.</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="email" placeholder="Enter your email" class="bg-white/10 border-white/20 text-white placeholder:text-gray-400 h-14 rounded-full px-6" />
                            <button class="bg-gradient-to-r from-blue-600 to-cyan-500 h-14 px-8 rounded-full">Subscribe <i class="bi bi-arrow-right ml-2"></i></button>
                        </div>
                    </div>
                </div>
                <div class="py-16 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 lg:gap-12">
                    <div class="col-span-2 md:col-span-3 lg:col-span-1">
                        <div class="text-3xl font-bold mb-6"><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">B2 Cloud Tech</span></div>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">Global SAP BTP specialists delivering cloud-native solutions, integration and managed services.</p>
                        <div class="space-y-3">
                            <a href="mailto:info@b2cloudtech.com" class="flex items-center gap-3 text-gray-400 hover:text-white transition-colors text-sm"><i class="bi bi-envelope"></i> info@b2cloudtech.com</a>
                            <a href="tel:+918001234567" class="flex items-center gap-3 text-gray-400 hover:text-white transition-colors text-sm"><i class="bi bi-telephone"></i> +91 XXXX XXX XXX</a>
                            <div class="flex items-start gap-3 text-gray-400 text-sm"><i class="bi bi-geo-alt mt-0.5"></i><span>Global Delivery Centers<br />India</span></div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-6">Services</h4>
                        <ul class="space-y-3 text-gray-400 text-sm">
                            <li><a href="/b2-cloud/services/sap-btp/" class="hover:text-white">SAP BTP Implementation</a></li>
                            <li><a href="/b2-cloud/services/cloud-dev/" class="hover:text-white">Application Development</a></li>
                            <li><a href="/b2-cloud/services/integration/" class="hover:text-white">Integration & Analytics</a></li>
                            <li><a href="/b2-cloud/services/managed/" class="hover:text-white">Managed Services</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-6">CoEs</h4>
                        <ul class="space-y-3 text-gray-400 text-sm">
                            <li><a href="/b2-cloud/#coes" class="hover:text-white">SAP</a></li>
                            <li><a href="/b2-cloud/#coes" class="hover:text-white">Data Science & AI</a></li>
                            <li><a href="/b2-cloud/#coes" class="hover:text-white">Cloud Platforms</a></li>
                            <li><a href="/b2-cloud/#coes" class="hover:text-white">RPA & Automation</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-6">Company</h4>
                        <ul class="space-y-3 text-gray-400 text-sm">
                            <li><a href="/b2-cloud/about/" class="hover:text-white">About Us</a></li>
                            <li><a href="/b2-cloud/careers/" class="hover:text-white">Careers</a></li>
                            <li><a href="/b2-cloud/#insights" class="hover:text-white">Insights</a></li>
                            <li><a href="/b2-cloud/contact/" class="hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-6">Industries</h4>
                        <ul class="space-y-3 text-gray-400 text-sm">
                            <li><a href="#" class="hover:text-white">Manufacturing</a></li>
                            <li><a href="#" class="hover:text-white">Lifesciences</a></li>
                            <li><a href="#" class="hover:text-white">BFSI</a></li>
                            <li><a href="#" class="hover:text-white">Healthcare</a></li>
                        </ul>
                    </div>
                </div>
                <div class="py-8 border-t border-white/10 flex flex-col lg:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors"><i class="bi bi-facebook"></i></a>
                    </div>
                    <p class="text-gray-400 text-sm">© <span id="year"></span> B2 Cloud Tech. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <script>
        (function(){
            const header=document.getElementById('site-header');
            const mobileToggle=document.getElementById('mobile-toggle');
            const mobileMenu=document.getElementById('mobile-menu');
            const openIcon=document.getElementById('mobile-open-icon');
            const closeIcon=document.getElementById('mobile-close-icon');
            const primaryNav=document.querySelector('nav[aria-label="Primary"]');
            const setHeaderScrolled=()=>{if(window.scrollY>50){header.classList.add('bg-glass','bg-[#0a1628]/95','shadow-lg','shadow-black/10');header.classList.remove('bg-transparent');}else{header.classList.remove('bg-glass','bg-[#0a1628]/95','shadow-lg','shadow-black/10');header.classList.add('bg-transparent');}};
            setHeaderScrolled();
            window.addEventListener('scroll',setHeaderScrolled);
            mobileToggle&&mobileToggle.addEventListener('click',()=>{const isOpen=mobileMenu.classList.toggle('open');mobileToggle.setAttribute('aria-expanded',isOpen);if(isOpen){openIcon.classList.add('hidden');closeIcon.classList.remove('hidden');}else{openIcon.classList.remove('hidden');closeIcon.classList.add('hidden');}});
            document.addEventListener('click',(e)=>{if(mobileMenu&&!mobileMenu.contains(e.target)&&!mobileToggle.contains(e.target)&&mobileMenu.classList.contains('open')){mobileMenu.classList.remove('open');mobileToggle.setAttribute('aria-expanded',false);openIcon.classList.remove('hidden');closeIcon.classList.add('hidden');}});
            const indicators=Array.from(document.querySelectorAll('#indicators > button'));
            const slideTitle=document.getElementById('slide-title');
            const slideDesc=document.getElementById('slide-desc');
            const slides=Array.from(document.querySelectorAll('#slides > div[data-index]'));
            const nextBtn=document.getElementById('next-slide');
            const prevBtn=document.getElementById('prev-slide');
            const slideData=[{title:"B2 Cloud Tech Solutions",subtitle:"SAP BTP & ABAP Experts",description:"End-to-end SAP BTP services — implementation, cloud-native apps, integration and managed support."},{title:"Accelerate Your Cloud Journey",subtitle:"Cloud-Native Applications",description:"Custom CAP & RAP applications, low-code automation and SAP Build solutions."},{title:"Enable Real-time Insights",subtitle:"Data & Analytics",description:"SAP HANA Cloud modelling, analytics and governed data pipelines."}];
            let current=0;let autoplay=!window.prefersReducedMotion;let timerId=null;let isPaused=false;
            function showSlide(index){if(!slides.length)return; if(index<0)index=slides.length-1; if(index>=slides.length)index=0; slides.forEach(s=>s.style.opacity='0'); slides[index].style.opacity='1'; if(slideTitle) slideTitle.innerHTML=slideData[index].title+'<span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">'+slideData[index].subtitle+'</span>'; if(slideDesc) slideDesc.textContent=slideData[index].description; indicators.forEach(btn=>{btn.classList.remove('indicator-active'); btn.style.width=btn.dataset.slide==index?'40px':''}); if(indicators[index]) indicators[index].classList.add('indicator-active'); current=index;}
            function nextSlide(){showSlide(current+1);} function prevSlideFn(){showSlide(current-1);} 
            nextBtn&&nextBtn.addEventListener('click',()=>{nextSlide();resetTimer();});
            prevBtn&&prevBtn.addEventListener('click',()=>{prevSlideFn();resetTimer();});
            indicators.forEach(btn=>btn.addEventListener('click',()=>{showSlide(Number(btn.dataset.slide));resetTimer();}));
            const hero=document.querySelector('section.relative.h-screen');
            if(hero){['mouseenter','focusin'].forEach(ev=>hero.addEventListener(ev,()=>{isPaused=true;resetTimer();})); ['mouseleave','focusout'].forEach(ev=>hero.addEventListener(ev,()=>{isPaused=false;resetTimer();}));}
            function startTimer(){if(!autoplay||window.prefersReducedMotion)return; timerId=setInterval(()=>{if(!isPaused)nextSlide();},6000);} function resetTimer(){if(timerId)clearInterval(timerId);startTimer();}
            showSlide(0); startTimer();
            const counters=Array.from(document.querySelectorAll('.tabular-nums[data-target], .tabular-nums'));
            const counterObserver=new IntersectionObserver((entries)=>{entries.forEach(entry=>{if(entry.isIntersecting){const el=entry.target;const end=Number(el.getAttribute('data-target')||el.textContent.replace(/\D/g,'')||0);animateCount(el,end);counterObserver.unobserve(el);}});},{threshold:.4});
            counters.forEach(c=>counterObserver.observe(c));
            function animateCount(el,end){if(window.prefersReducedMotion){el.textContent=end.toLocaleString()+'+';return;} let start=null; const duration=2000; function step(ts){if(!start)start=ts; const progress=Math.min((ts-start)/duration,1); const easeOut=1-Math.pow(1-progress,4); const value=Math.floor(easeOut*end); el.textContent=value.toLocaleString()+'+'; if(progress<1)requestAnimationFrame(step);} requestAnimationFrame(step);} 
            const rev=Array.from(document.querySelectorAll('.reveal, .slide-left, .slide-right, .floating-card'));
            if(rev.length){const ro=new IntersectionObserver((entries)=>{entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('in-view');ro.unobserve(entry.target);}});},{threshold:.18}); rev.forEach(e=>ro.observe(e));}
            const backBtn=document.getElementById('back-to-top');
            backBtn&&backBtn.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));
            const yearEl=document.getElementById('year'); if(yearEl) yearEl.textContent=new Date().getFullYear();
            document.addEventListener('keydown',(e)=>{
                if(e.key==='Escape'){
                    if(mobileMenu&&mobileMenu.classList.contains('open')){
                        mobileMenu.classList.remove('open');
                        mobileToggle.setAttribute('aria-expanded',false);
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                }
            });

        })();
    </script>
</body>
</html>
