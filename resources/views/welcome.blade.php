<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/img/CCLogo.png') }}" type="image/x-icon">


    <title>CampaignCast</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 flex flex-col min-h-screen">
<!-- Header -->
<header class="w-full bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex  items-center">
        <!--h1 class="text-gray-800">
            <img src="{{ asset('assets/img/CCHorizontal.png') }}" alt="CampaignCast Logo" class="h-auto w-20">
        </h1-->


        <!-- Navigation Links -->
        <div class="ml-auto space-x-4 flex">
            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 font-medium">Login</a>
            <a href="{{ route('register') }}" class="text-green-600 hover:text-green-800 font-medium">Register</a>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow py-16 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <section class="wrapper image-wrapper bg-auto no-overlay bg-image !text-center py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24" style="background-image: url('{{ asset('assets/img/map.png') }}');">
            <div class="container py-0 xl:!py-[8rem] lg:!py-[8rem] md:!py-[8rem]">
                <div class="row">
                    <div class="lg:w-6/12 flex-[0_0_auto] !px-[15px] max-w-full xl:w-5/12 !mx-auto">
                        <div class="flex justify-center mt-8 space-x-4">
                            <img src="{{ asset('assets/img/CCLogo.png') }}" alt="CampaignCast Logo" class="h-20 w-20">
                        </div>

                        <h2 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-3 !text-center">Welcome to CampaignCast</h2>
                        <p class="lead !mb-5 md:!px-24 lg:!px-3">Boost your business effortlessly by creating and managing campaigns with ease. Start today and reach your audience like never before!</p>
                        <div class="flex justify-center mt-8 space-x-4">
                            <a href="{{ route('register') }}"
                               class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                Get Started
                            </a>
                            <a href="{{ route('login') }}"
                               class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                                Login
                            </a>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>

    <section class="mt-12">
        <div class="max-w-7xl mx-auto text-center">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
        <h2 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-3">How to start ?</h2>
        <p class="lead !mb-8 !text-[1.05rem] !leading-[1.6]">Simply register and follow the next steps to create and launch your first campaign effortlessly.</p>
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] !mt-[-30px] process-wrapper line">
            <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[35px] lg:!px-[20px] !mt-[30px] max-w-full !relative after:w-full after:absolute after:content-[''] after:h-px after:z-[1] after:border-t-[rgba(164,174,198,0.2)] after:border-t after:border-solid after:left-[3rem] after:top-6 after:bg-inherit max-lg:after:!hidden"> <span class="icon btn btn-circle btn-lg btn-primary !text-white !bg-[#15803d] border-[#15803d] hover:text-white hover:bg-[#15803d] hover:!border-[#15803d]   active:text-white active:bg-[#15803d] active:border-[#15803d] disabled:text-white disabled:bg-[#15803d] disabled:border-[#15803d] pointer-events-none !mb-4 !relative z-[2] xl:!text-[1.3rem] w-12 h-12 !text-[calc(1.255rem_+_0.06vw)] inline-flex items-center justify-center leading-none !p-0 !rounded-[100%]"><span class="number table-cell text-center align-middle text-[1.1rem] font-bold mx-auto my-0 !leading-none">1</span></span>
                <h4 class="!mb-1 text-lg font-semibold text-gray-800">Add your customers</h4>
                <p class="!mb-0">Register customers via API or import a list using a CSV file. Provide customer details such as email, mobile phone number, or push-token to send targeted campaigns effortlessly..</p>
            </div>
            <!--/column -->
            <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[35px] lg:!px-[20px] !mt-[30px] max-w-full !relative after:w-full after:absolute after:content-[''] after:h-px after:z-[1] after:border-t-[rgba(164,174,198,0.2)] after:border-t after:border-solid after:left-[3rem] after:top-6 after:bg-inherit max-lg:after:!hidden"> <span class="icon btn btn-circle btn-lg btn-primary !text-white !bg-[#15803d] border-[#15803d] hover:text-white hover:bg-[#15803d] hover:!border-[#15803d]   active:text-white active:bg-[#15803d] active:border-[#15803d] disabled:text-white disabled:bg-[#15803d] disabled:border-[#15803d] pointer-events-none !mb-4 !relative z-[2] xl:!text-[1.3rem] w-12 h-12 !text-[calc(1.255rem_+_0.06vw)] inline-flex items-center justify-center leading-none !p-0 !rounded-[100%]"><span class="number table-cell text-center align-middle text-[1.1rem] font-bold mx-auto my-0 !leading-none">2</span></span>
                <h4 class="!mb-1 text-lg font-semibold text-gray-800">Create Your Campaign</h4>
                <p class="!mb-0">Design custom campaigns by crafting email templates, messages, and web push notifications to engage your audience effectively..</p>
            </div>
            <!--/column -->
            <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[35px] lg:!px-[20px] !mt-[30px] max-w-full !relative after:w-full after:absolute after:content-[''] after:h-px after:z-[1] after:border-t-[rgba(164,174,198,0.2)] after:border-t after:border-solid after:left-[3rem] after:top-6 after:bg-inherit max-lg:after:!hidden"> <span class="icon btn btn-circle btn-lg btn-primary !text-white !bg-[#15803d] border-[#15803d] hover:text-white hover:bg-[#15803d] hover:!border-[#15803d]   active:text-white active:bg-[#15803d] active:border-[#15803d] disabled:text-white disabled:bg-[#15803d] disabled:border-[#15803d] pointer-events-none !mb-4 !relative z-[2] xl:!text-[1.3rem] w-12 h-12 !text-[calc(1.255rem_+_0.06vw)] inline-flex items-center justify-center leading-none !p-0 !rounded-[100%]"><span class="number table-cell text-center align-middle text-[1.1rem] font-bold mx-auto my-0 !leading-none">3</span></span>
                <h4 class="!mb-1 text-lg font-semibold text-gray-800">Select Your Audience</h4>
                <p class="!mb-0">Choose which customers to include in your campaign—target all customers or filter specific groups based on tags and custom criteria..</p>
            </div>
            <!--/column -->
            <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[35px] lg:!px-[20px] !mt-[30px] max-w-full !relative after:w-full after:absolute after:content-[''] after:h-px after:z-[1] after:border-t-[rgba(164,174,198,0.2)] after:border-t after:border-solid after:left-[3rem] after:top-6 after:bg-inherit max-lg:after:!hidden"> <span class="icon btn btn-circle btn-lg btn-primary !text-white !bg-[#15803d] border-[#15803d] hover:text-white hover:bg-[#15803d] hover:!border-[#15803d]   active:text-white active:bg-[#15803d] active:border-[#15803d] disabled:text-white disabled:bg-[#15803d] disabled:border-[#15803d] pointer-events-none !mb-4 !relative z-[2] xl:!text-[1.3rem] w-12 h-12 !text-[calc(1.255rem_+_0.06vw)] inline-flex items-center justify-center leading-none !p-0 !rounded-[100%]"><span class="number table-cell text-center align-middle text-[1.1rem] font-bold mx-auto my-0 !leading-none">4</span></span>
                <h4 class="!mb-1 text-lg font-semibold text-gray-800">Schedule & Track Your Campaigns</h4>
                <p class="!mb-0">Set the perfect time for your campaign to go live and monitor real-time statistics to measure performance and engagement..</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="w-full bg-green-800 py-6">
    <div class="max-w-7xl mx-auto text-center text-gray-400">
        <p class="text-sm">© 2025 CampaignCast. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
