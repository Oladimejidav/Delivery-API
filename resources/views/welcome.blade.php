<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashex | connecting the globe.</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 2000px;
            font-family: sans-serif;
        }

        .header {
            position: relative;
            height: 100vh;
            background: url("{{ asset('img/background.jpg') }}") no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            overflow: hidden;
            overflow-y: revert;
            perspective: 10px;
        }

        header::-webkit-scrollbar {
            display: none;
        }

        header .logo-header {
            position: absolute;
            top: 4%;
            left: 0;
            right: 0;
            display: block;
        }

        header .cta {
            position: absolute;
            top: 4%;
            right: 2%;
            display: block;

        }

        header .fore-bird {
            position: absolute;
            top: 40%;
            right: 37%;
            width: 40%;
            height: 100%;
            background-image: url("{{ asset('img/white-mode.png') }}");
            background-repeat: no-repeat;
            background-position: right bottom;
            z-index: 1;
        }

        .content {
            max-width: 1140px;
            margin: 0 auto;
            font-size: 20px;
        }

        .centered {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 3.3em;
            font-weight: bold;
            font-family: "Lucida Console";
        }

        .wrapper {
            height: 100vh;
            display: grid;
            place-items: center;
        }

        .typing-demo {
            width: 35ch;
            animation: typing 2s steps(12), blink .5s step-end infinite alternate;
            white-space: wrap;
            overflow: hidden;
            border-right: 3px solid;
            font-family: monospace;
            font-size: 4rem;
            font-weight: 700;
            color: beige;
            text-shadow: 2px 4px 4px rgba(0, 0, 0, 0.6);
            margin-top: 5rem;
            background-color: rgba(128, 128, 128, 0.5);
            /* 50% opacity gray color */
            padding: 1rem;
            border-radius: 0.5rem;
        }

        @keyframes typing {
            from {
                width: 0;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }
        @media only screen and (max-device-width: 480px) {
            header .fore-bird {
                position: absolute;
                top: 25%;
                right: 17%;
                width: 100%;
                height: 100%;
                background-image: url("{{ asset('img/white-mode.png') }}");
                background-repeat: no-repeat;
                background-position: right bottom;
                background-size: 250px 500px;
                z-index: 1;
            }
            .typing-demo {
                width: 19ch;
                animation: typing 2s steps(12), blink .5s step-end infinite alternate;
                white-space: wrap;
                overflow: hidden;
                border-right: 3px solid;
                font-family: monospace;
                font-size: 2rem;
                font-weight: 700;
                color: beige;
                text-shadow: 2px 4px 4px rgba(0, 0, 0, 0.6);
                margin-top: 5rem;
                background-color: rgba(128, 128, 128, 0.5);
                /* 50% opacity gray color */
                padding: 1rem;
                border-radius: 0.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-300">
    {{-- david will do the hero section and the testimonial --}}
    {{-- hero section --}}
    <header class="header">
        <div class="back-bird"></div>
        <div class="w-full flex items-center justify-between">
            <a href="tel:+2347060443739"
                class="bg-yellow-600 rounded-sm cursor-pointer p-2 px-4 m-4 text-gray-50 font-semibold font-serif hover:text-gray-300"><span>CALL</span></a>
 <img src="{{ asset('logo.png') }}" class="cta" alt="logo"
                style="height: 10%; padding-left:3%; width: auto;">
        </div>
        <div class="centered">
            <div class="wrapper">
                <h1 class="typing-demo">
                    We Are Local In the state of Lagos
                </h1>
            </div>
        </div>
        <div class="fore-bird"></div>
    </header>
    <section class="bg-white">
        <div class="container mx-auto md:px-6 bg-white rounded p-4 md:p-12">
            <!-- Section: Design Block -->
            <section>
                <div class="flex flex-wrap items-center">
                    <div class="mb-10 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-4/6 md:px-3 lg:px-6">
                        <h2 class="mb-12 text-4xl font-extrabold text-gray-900">Welcome to DashEx!</h2>
                        <p class="mt-12 text-neutral-600">
                            We are a dynamic and innovative logistics company dedicated
                            to providing top-notch services to our clients. With over one decade of industry
                            experience, our team excels in delivering efficient and reliable solutions for
                            all your supply chain needs. From handling intricate international shipments to
                            streamlining local deliveries, we pride ourselves on our commitment to customer
                            satisfaction. Our state-of-the-art technologies, coupled with our expert staff,
                            enable us to navigate the complexities of the logistics landscape with ease.
                            Whether you are a small business or a large corporation, DashEx Logistics is your
                            trusted partner for seamless logistics solutions tailored to your specific
                            requirements. Trust us to handle your logistics while you focus on what matters
                            most – growing your business.
                        </p>
                    </div>
                    {{-- form --}}
                    <div class="w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-2/6 md:px-3 lg:px-6">
                        <img src="{{ asset('img/black-mode.png') }}" alt="dark mode" />
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
    </section>
    <section>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <h1 class="text-3xl title-font text-gray-900 mb-12 text-center font-extrabold">What Our Satisfied
                    Customers Says!</h1>
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/2 w-full">
                        <div class="h-full bg-gray-100 p-8 rounded-md hover:bg-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="block w-5 h-5 text-gray-900 mb-4" viewBox="0 0 975.036 975.036"></svg>
                            <p class="leading-relaxed mb-6 text-2xl">Flawless Delivery Service!</p>
                            <p class="leading-relaxed mb-6">I'm thrilled with the exceptional service provided by Dashex
                                Logistics. From start to finish, everything was smooth and efficient. My package arrived
                                ahead of schedule, and the handling was impeccable. Highly recommend!</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/106x106"
                                    class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-gray-900">Saidi Ugoma</span>
                                    <span class="text-gray-500 text-sm">Online Vendor</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2 w-full">
                        <div class="h-full bg-gray-100 p-8 rounded-md hover:bg-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="block w-5 h-5 text-gray-900 mb-4" viewBox="0 0 975.036 975.036"></svg>
                            <p class="leading-relaxed mb-6 text-2xl">Reliable and Fast Delivery!</p>
                            <p class="leading-relaxed mb-6">I'm incredibly impressed with Dashex Logistics. They
                                delivered my package on time, and their attention to detail ensured it arrived in
                                perfect condition. I'll be using their services again without a doubt!</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/107x107"
                                    class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-gray-900">Alper Ventures</span>
                                    <span class="text-gray-500 text-sm">Fashion Designer</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- yemi will do the contact us and download --}}
    {{-- contact section --}}
    <section class="py-5 bg-gray-400 rounded">
        <!-- Container for contact form -->
        <div class="container my-10 mx-auto md:px-6 p-4 md:p-12">
            <h1 class="text-3xl md:text-5xl title-font text-gray-900 mb-12 text-center font-bold">
                Contact Us Now For Your Next Service.
            </h1>
            <!-- Section: Design Block -->
            <section class="mb-12">
                <div class="flex flex-wrap">
                    <div class="mb-4 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
                        <h2 class="mb-6 text-4xl font-bold text-gray-500 underline">We <span
                                class="text-yellow-600">Deliver!</span></h2>
                        <p class="mb-6 text-neutral-800 font-mono font-bold">
                            Welcome to DashEx™ - Your Trusted Delivery Partner!
                            <br><br>
                            Reliable, efficient, and tailored to your needs – that's our promise at DashEx™. For your deliveries, we've got you covered. Our experienced team ensures each
                            delivery is handled with care and professionalism.
                            <br><br>
                            Need assistance or have questions? Our friendly support team is just a click away! Fill out
                            the form, and we'll respond swiftly to address any queries.
                            <br><br>
                            Customer satisfaction is our top priority. Trust us for timely and intact deliveries, backed
                            by a community of happy customers.
                            <br><br>
                            Choose DashEx™ for a hassle-free delivery experience. Let's embark on this journey together!
                            Welcome aboard!
                        </p>
                        <p class="my-2 text-neutral-800">
                            Lagos State, 103227, Nigeria
                        </p>
                        <p class="mb-2 text-neutral-800">
                            +234-7060443739
                        </p>
                        <p class="mb-2 text-neutral-800">
                            sales@dashex.com.ng
                        </p>
                    </div>
                    {{-- form --}}
                    <div class="mb-4 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
                        <form action="#" class="space-y-4">
                            <div>
                                <label for="name" class="block text-base font-bold text-gray-900">Your
                                    name</label>
                                <input type="text" id="name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                    placeholder="Oludare Walliams" required>
                            </div>
                            <div>
                                <label for="email" class="block text-base font-bold text-gray-900">Your
                                    email</label>
                                <input type="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                    placeholder="name@dashex.com" required>
                            </div>
                            <div>
                                <label for="number" class="block text-base font-bold text-gray-900">Phone
                                    number</label>
                                <input type="number" id="number"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                    placeholder="08034567890" required>
                            </div>
                            <div>
                                <label for="subject" class="block text-base font-bold text-gray-900 ">Subject</label>
                                <input type="text" id="subject"
                                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500"
                                    placeholder="Let us know how we can help you" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block text-base font-bold text-gray-900 ">Your
                                    message</label>
                                <textarea id="message" rows="6"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded shadow-sm border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500"
                                    placeholder="Leave a comment..."></textarea>
                            </div>
                            <button type="submit"
                                class="py-3 px-5 text-sm font-medium text-center text-gray-50 rounded bg-yellow-700 sm:w-fit hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300">Send
                                message</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
        <!-- Container for contact form -->
        <!-- Container for contact us -->
        <div class="container py-5 mx-auto md:px-6">
            <!-- Section: Design Block -->
            <section>
                <div
                    class="block rounded-lg bg-gray-50 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="flex flex-wrap items-center">
                        <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                            <div class="h-[500px] w-full">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253682.46310705255!2d3.1191421092523086!3d6.548369372208267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos!5e0!3m2!1sen!2sng!4v1690274857100!5m2!1sen!2sng"
                                    class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12 bg-gray-50">
                            <div class="flex flex-wrap px-3 pt-12 pb-12 md:pb-0 lg:pt-0">
                                <div
                                    class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-yellow-100 p-4 text-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold text-gray-900 ">
                                                Online support
                                            </p>
                                            <p class="text-neutral-800 ">
                                                +234-7060443739
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-yellow-100 p-4 text-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold text-gray-900 ">
                                                Sales questions
                                            </p>
                                            <p class="text-neutral-800 ">
                                                +234-7060443739
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:mb-0 xl:w-6/12 xl:px-12">
                                    <div class="align-start flex">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-yellow-100 p-4 text-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold text-gray-900 ">Coverage</p>
                                            <p class="text-neutral-800 ">
                                                +234-7060443739
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                    <div class="align-start flex">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-yellow-100 p-4 text-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold text-gray-900 ">Report a flaw</p>
                                            <p class="text-neutral-800 ">
                                                +234-7060443739
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
        <!-- Container for contact us -->
    </section>

    {{-- CTA section --}}
    <section>
        <section class="bg-gray-300">
            <div
                class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full rounded-md"
                    src="https://www.investsmall.co/wp-content/uploads/2021/06/logistics-company-in-nigeria-1.jpg"
                    alt="download image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Connecting People around the
                        globe!</h2>
                    <p class="mb-6 font-light text-gray-700 md:text-lg">Dashex is your most trusted and reliable
                        delivery platform, connecting your needs to your audience, making sure your businesses are
                        transpoted with ease, Dashex is the best logistics for all and beyong.</p>
                    <a href="#"
                        class="inline-flex items-center text-gray-50 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm py-2.5 text-center">
                        <img src="{{ asset('icon-google.png') }}" alt="logo"
                            style="height:80px; width: auto; cursor:pointer; z-index:999">
                    </a>
                </div>
            </div>
        </section>
    </section>

    {{-- mohammed to build the faq and footer. faq accordion.  --}}
    <section></section>
    <footer class="p-4 md:p-8 lg:p-10 bg-gray-400">
        <div class="mx-auto max-w-screen-xl text-center text-lg font-semibold">
            <p class="my-6">DashEx Logistics : Block 233 Low Cost H/Estate Isolo-Lagos</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Phone Number:(+234)7060443739</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Email: sales@dashex.com.ng</a>
                </li>
            </ul>
            <span class="font-medium">© 2023-<span id="year"></span> <a href="#"
                    class="hover:underline">DashEx™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    var logo = document.querySelector('.logo-header'),
        blurredBird = document.querySelector('.back-bird'),
        forebird = document.querySelector('.fore-bird');

    window.addEventListener('scroll', function() {
        var scrolled = window.scrolly;
        logo.style.transform = "translate(0px," + scrolled / 2 + "%)";
        fore - bird.style.transform = "translate(0px,-" + scrolled / 40 + "%)";
    })
</script>
<script>
    // Create a new Date object
    const currentDate = new Date();

    // Get the current year
    const currentYear = currentDate.getFullYear();

    // Update the 'year' element's content with the current year
    document.getElementById('year').innerHTML = currentYear;
</script>


</html>
