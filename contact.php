<?php include 'inc/header.php'; ?>
<section class="relative py-24 lg:py-32 overflow-hidden">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1920&q=80" alt="Contact" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628]/95 via-[#0a1628]/85 to-[#0a1628]/70"></div>
  </div>
  <div class="container mx-auto px-6 lg:px-16 relative z-10">
    <div class="max-w-3xl">
      <span class="inline-block px-4 py-2 bg-white/10 text-cyan-300 rounded-full text-sm font-semibold tracking-wide mb-6 backdrop-blur-sm">Contact</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white">Contact Us</h1>
      <p class="mt-6 text-lg text-white/90">Reach out for implementation, development, integration or support needs.</p>
    </div>
  </div>
</section>
<section class="py-16">
  <div class="container mx-auto px-6 lg:px-16">
    <div class="grid lg:grid-cols-2 gap-12 items-start">
      <form class="space-y-4 bg-white p-6 rounded-2xl shadow border border-gray-200">
        <div><label class="block text-sm font-medium mb-1">Name</label><input type="text" class="w-full border border-gray-300 rounded-xl h-12 px-4" placeholder="Your name"></div>
        <div><label class="block text-sm font-medium mb-1">Email</label><input type="email" class="w-full border border-gray-300 rounded-xl h-12 px-4" placeholder="you@example.com"></div>
        <div><label class="block text-sm font-medium mb-1">Phone</label><input type="tel" class="w-full border border-gray-300 rounded-xl h-12 px-4" placeholder="+91 XXXX XXX XXX"></div>
        <div><label class="block text-sm font-medium mb-1">Message</label><textarea class="w-full border border-gray-300 rounded-xl h-28 px-4 py-3" placeholder="Tell us about your needs"></textarea></div>
        <button type="submit" class="inline-flex items-center gap-2 btn-gradient text-white rounded-full px-6 py-3">Send<i class="bi bi-send"></i></button>
      </form>
      <div class="space-y-4">
        <div class="p-6 rounded-2xl bg-white shadow border border-gray-200">
          <div class="flex items-center gap-3"><i class="bi bi-envelope"></i><a href="mailto:info@b2cloudtech.com" class="hover:underline">info@b2cloudtech.com</a></div>
        </div>
        <div class="p-6 rounded-2xl bg-white shadow border border-gray-200">
          <div class="flex items-center gap-3"><i class="bi bi-telephone"></i><a href="tel:+918001234567" class="hover:underline">+91 XXXX XXX XXX</a></div>
        </div>
        <div class="p-6 rounded-2xl bg-white shadow border border-gray-200">
          <div class="flex items-start gap-3"><i class="bi bi-geo-alt"></i><span>Global Delivery Centers<br>India</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'inc/footer.php'; ?>
