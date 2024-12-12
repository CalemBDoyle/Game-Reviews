@props(['name', 'bio', 'image']) 

 

<!-- Game Details Component --> 

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto"> <!-- Limit the overall container width to make the component more compact --> 

    <!-- Developer Name --> 

       <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name }}</h1><!-- Heading with larger text and color --> 

 

    <!-- Developer Cover Image --> 

    <div class="overflow-hidden rounded-lg mb-4 flex justify-center"> 

        <!-- Image is further restricted to a smaller size --> 

        <img src="{{ asset('images/' . $image) }}" alt="{{ $name }}" class="w-full max-w-xs h-auto object-cover"> <!-- Restrict image to max-w-xs (20rem) and ensure responsiveness --> 

    </div> 

 

    <!-- Developer Bio --> 

    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Bio</h3> <!-- Subheading for bio --> 

    <p class="text-gray-700 leading-relaxed">{{ $bio }}</p> <!-- Text is spaced out for readability --> 

</div> 