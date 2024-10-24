<x-layout>
     <!-- Contact Section -->
     <section id="contact" class="relative py-16 bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1508302730834-a3786a6c951d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        
        <!-- Contact Form Container -->
        <div class="relative max-w-3xl mx-auto px-4 py-10 bg-grey-200 bg-opacity-90 backdrop-blur-md rounded-lg shadow-lg animate-fade-in-up">
            <h2 class="text-4xl font-bold text-center text-white mb-6">Get in Touch</h2>
            <p class="text-white text-center mb-10">We’d love to hear from you! Fill out the form below and we’ll get back to you as soon as possible.</p>
            
            <!-- Contact Form -->
            <form action="#" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-white font-medium mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Your Name" required>
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-white font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Your Email" required>
                    </div>
                </div>
                
                <!-- Message -->
                <div>
                    <label for="message" class="block text-white font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Your Message" required></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="px-6 py-3 bg-green-600 text-white rounded-lg shadow-lg hover:bg-green-700 transition duration-300 ease-in-out">Send Message</button>
                </div>
            </form>
        </div>
    </section>

</x-layout>