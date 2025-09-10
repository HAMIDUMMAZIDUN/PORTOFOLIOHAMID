<section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-8 md:px-12">
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div class="flex justify-center">
                <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/HAMID.jpg') }}" alt="Foto Profil" class="w-full h-full object-cover">
                </div>
            </div>
            <div>
                <p class="text-primary-600 mb-2 font-semibold">— About Me</p>
                <h2 class="text-4xl font-bold mb-4">Who is <span class="text-primary-600">HAMID?</span></h2>
                <p class="text-gray-600 mb-6 leading-relaxed">I am a product designer and Web developer with years of experience in creating innovative and user-centric digital solutions.</p>
                <div class="flex gap-8">
                    <div class="text-center">
                        <p class="text-4xl font-bold text-primary-600">750+</p>
                        <p class="text-gray-500">Project Completed</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl font-bold text-primary-600">16+</p>
                        <p class="text-gray-500">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <p class="text-primary-600 mb-2 font-semibold">— My Favorite Tools</p>
            <h2 class="text-4xl font-bold mb-12"><span class="text-primary-600">Tools</span> That Power My Work</h2>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
                @php
                    $tools = [
                        ['name' => 'CorelDRAW', 'img' => 'https://images.seeklogo.com/logo-png/48/1/coreldraw-logo-png_seeklogo-485082.png'],
                        ['name' => 'Photoshop', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg'],
                        ['name' => 'Lightroom', 'img' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Adobe_Photoshop_Lightroom_Classic_CC_icon.svg'],
                        ['name' => 'Premiere Pro', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/premierepro/premierepro-plain.svg'],
                        ['name' => 'CapCut', 'img' => 'https://cdn.goku.co.id/wp-content/uploads/2024/12/patungan-capcut-pro-goku-co-id-300x300.webp'],
                        ['name' => 'Figma', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg'],
                        ['name' => 'HTML5', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'],
                        ['name' => 'CSS3', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg'],
                        ['name' => 'JavaScript', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'],
                        ['name' => 'Laravel', 'img' => 'https://cdn.worldvectorlogo.com/logos/laravel-2.svg'],
                        ['name' => 'VS Code', 'img' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg'],
                    ];
                @endphp
                @foreach ($tools as $tool)
                <div class="text-center group">
                    <img src="{{ $tool['img'] }}" alt="{{ $tool['name'] }}" class="h-16 w-16 mx-auto mb-2 grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition duration-300">
                    <span class="font-medium text-gray-700">{{ $tool['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>