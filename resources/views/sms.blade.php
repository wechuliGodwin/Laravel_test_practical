<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Appointment at Kijabe Hospital</title>
    <meta name="description"
        content="Schedule your appointment with Kijabe Hospital easily using our online booking form. Book your consultation with our specialists today.">
    <meta name="keywords"
        content="Kijabe Hospital, book appointment, online booking, doctor appointment, healthcare, Kenya, medical services, schedule consultation">
    <link rel="canonical" href="https://www.kijabehospital.org/booking">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Slider Styles */
        .slider {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .slider img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slider img.active {
            opacity: 1;
        }

        /* Button Hover Effect */
        .booking-button {
            display: inline-block;
            background-color: #159ed5;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .booking-button:hover {
            background-color: #117ea8;
            transform: translateY(-2px);
        }

        /* Loader Styles */
        .spinner {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 0.5rem;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Honeypot Field Styles */
        .honeypot {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">


    <!-- Booking Form Section -->
    <!-- Booking Form Section -->
    <div class="container mx-auto my-10 px-6">
        <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">

            <!-- Image Slider Section -->
            <div class="md:w-1/2 relative h-64 md:h-auto">
                <div class="slider">
                    <img src="images/derma.jpg" alt="Dermatology Services" class="active">
                    <img src="images/tele.jpg" alt="Telemedicine Services">
                    <img src="images/newsletter.jpg" alt="Hospital Newsletter">
                </div>
            </div>

            <!-- Booking Form Section -->
            <div class="md:w-1/2 p-8">
                <h2 class="text-3xl font-bold text-center text-[#159ed5] mb-4">Send SMS</h2>

                <!-- Success & Error Messages -->
                @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
                @elseif(session('error'))
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('sms.send') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="phone" class="block font-medium mb-1">Phone number</label>
                        <input type="text" id="phone" name="phone"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="+254712345678" required>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block font-medium mb-1">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="booking-button">
                            <span id="buttonText">Send SMS</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>