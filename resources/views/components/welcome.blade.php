<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <!-- Display the logo -->
    <img src="/images/logo.png" alt="lrds" class="block h-12 w-auto" />

    <!-- Display the welcome message with the user's name -->
    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome, {{ auth()->user()->name }}!
    </h1>

    <!-- Display a short description -->
    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </p>

    <!-- Add links or buttons for different functionalities -->
    <div class="flex space-x-4 mt-8">
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Chrome</a>
        <a href="#" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md">Word</a>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-md">PowerPoint</a>
        <a href="#" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md">Excel</a>
        <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded-md">Publisher</a>
    </div>
</div>
