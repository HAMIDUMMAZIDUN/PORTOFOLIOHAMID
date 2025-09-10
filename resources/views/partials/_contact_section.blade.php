<section id="contact" class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-8 md:px-12">
        <div class="text-center">
            <p class="text-primary-400 mb-2">— Contact Me</p>
            <h2 class="text-4xl font-bold">Let’s Talk for <span class="text-primary-500">Your Next Projects</span></h2>
        </div>

        <div class="grid lg:grid-cols-5 gap-12 mt-12">
            <form action="{{ route('contact.send') }}" method="POST" class="lg:col-span-3 space-y-6">
                @csrf
                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-300">Your Name *</label>
                        <input type="text" id="name" name="name" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="John Doe" required>
                        @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email *</label>
                        <input type="email" id="email" name="email" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="name@example.com" required>
                         @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                 <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-300">Phone</label>
                        <input type="text" id="phone" name="phone" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Enter Phone Number">
                         @error('phone')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="service" class="block mb-2 text-sm font-medium text-gray-300">I'm Interested in *</label>
                        <select id="service" name="service" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                           <option value="" disabled selected>Select Service</option>
                           <option value="Graphic Design">Graphic Design</option>
                           <option value="Web Development">Web Development</option>
                           <option value="Video Editing">Video Editing</option>
                           <option value="Other">Other</option>
                        </select>
                         @error('service')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-300">Your Message *</label>
                    <textarea id="message" name="message" rows="6" class="bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Enter here..."></textarea>
                     @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition">Send Message</button>
            </form>

            <div class="lg:col-span-2 space-y-6">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <p class="font-semibold text-primary-400 mb-1">Address</p>
                    <p class="text-gray-300">Bandung, Indonesian</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <p class="font-semibold text-primary-400 mb-1">Contact</p>
                    <p class="text-gray-300">Email: hamidabdulaziz36@gmail.com</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <p class="font-semibold text-primary-400 mb-1">Time</p>
                    <p class="text-gray-300">Monday - Friday : 07:00 - 20:00</p>
                    <p class="text-gray-300">Saturday - Sunday : 09:00 - 18:00</p>
                </div>
                 <div class="bg-gray-800 p-6 rounded-lg">
                    <p class="font-semibold text-primary-400 mb-1">Stay Connected</p>
                    <div class="flex gap-4 text-2xl mt-2">
                         <a href="https://www.instagram.com/hamidabdulaziz_/" class="hover:text-primary-400"><i class="fab fa-instagram"></i></a>
                         <a href="https://www.pinterest.com/hamidabdulaziz_/" class="hover:text-primary-400"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Message Sent!',
            text: '{{ session('success') }}',
            background: '#1f2937', // dark background
            color: '#ffffff' // white text
        });
    @endif
    @if($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `<ul class="text-left">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>`,
            background: '#1f2937', // dark background
            color: '#ffffff' // white text
        });
    @endif
</script>