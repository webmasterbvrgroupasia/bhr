<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! seo($seoData) !!}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="flex items-center justify-center w-full h-screen"
        style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),url('https://images.unsplash.com/photo-1620104493388-8747c90fcc2d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size:cover; background-position:center;">
        <div class="w-full px-4 md:px-4 lg:px-0">
            <div class="max-w-3xl mx-auto p-4 md:p-16 bg-white rounded space-y-4 h-[90vh] overflow-y-scroll">
                <img src="{{ asset('images/bhr-logo.png') }}" class="w-60" alt="">
                <div class="space-y-2">
                    <h1 class="font-black text-2xl text-left leading-relaxed">
                        Thank you for choosing <span class="text-[#ff5700]">BVR Bali Holiday Rentals</span>
                    </h1>
                    <p class="font-light text-left leading-loose">
                        Your insight matters to us. We appreciate your perspectives and feedback during your stay. Your input is invaluable for our continuous improvement. Kindly fill out the feedback form below to support us. 
                    </p>
                </div>
                <hr />
                <div>
                    <form action="{{ route('guest.feedback.submit') }}" method="POST" x-data="{ selectedOption: '' }">
                        @csrf
                        <x-honeypot />
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="first_name" class="font-normal text-sm text-neutral-600">
                                    First Name <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="first_name" id="first_name"
                                    class="w-full border border-neutral-200" placeholder="e.g John" required
                                    value="{{ old('first_name') }}">
                            </div>
                            <div class="space-y-2">
                                <label for="last_name" class="font-normal text-sm text-neutral-600">
                                    Last Name
                                </label>
                                <input type="text" name="last_name" id="last_name"
                                    class="w-full border border-neutral-200" placeholder="e.g Doe"
                                    value="{{ old('last_name') }}">
                            </div>
                            <div class="space-y-2">
                                <label for="email_address" class="font-normal text-sm text-neutral-600">
                                    Email Address <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="email_address" id="email_address"
                                    class="w-full border border-neutral-200" placeholder="e.g john.doe@mail.com"
                                    required value="{{ old('email_address') }}">
                            </div>
                            <div class="space-y-2">
                                <label for="phone_number" class="font-normal text-sm text-neutral-600">
                                    Phone Number <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="phone_number" id="phone_number"
                                    class="w-full border border-neutral-200" placeholder="e.g 081234567890" required
                                    value="{{ old('phone_number') }}">
                            </div>
                            <div class="space-y-2">
                                <label for="nationality" class="font-normal text-sm text-neutral-600">
                                    Nationality <span class="text-red-600">*</span>
                                </label>
                                <select required name="nationality" id="nationality" class="w-full border-neutral-200">
                                    <option @if(old('nationality') == 'Indonesia') selected @endif value="Indonesia">Indonesia</option>
                                    <option @if(old('nationality') == 'Germany') selected @endif value="Germany">Germany</option>
                                    <option @if(old('nationality') == 'France') selected @endif value="France">France</option>
                                    <option @if(old('nationality') == 'Australia') selected @endif value="Australia">Australia</option>
                                    <option @if(old('nationality') == 'Netherland') selected @endif value="Netherland">Netherland</option>
                                    <option @if(old('nationality') == 'United Kingdom') selected @endif value="United Kingdom">United Kingdom</option>
                                    <option @if(old('nationality') == 'Russia') selected @endif value="Russia">Russia</option>
                                    <option @if(old('nationality') == 'China') selected @endif value="China">China</option>
                                    <option @if(old('nationality') == 'Other') selected @endif value="Other">Other</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label for="unit" class="font-normal text-sm text-neutral-600">
                                    Where do you stay? <span class="text-red-600">*</span>
                                </label>
                                <select required name="unit" id="unit" class="w-full border-neutral-200"
                                    x-model="selectedOption">
                                    <option disabled value="">Select Unit</option>
                                    <option @if(old('unit') == 'CH') selected @endif value="CH">The Chillhouse Canggu</option>
                                    <option @if(old('unit') == 'CC') selected @endif value="CC">Chillcorner</option>
                                    <option @if(old('unit') == 'BTS') selected @endif value="BTS">BTS Villa</option>
                                </select>
                            </div>
                            <div x-show="selectedOption === 'CC'" class="space-y-2">
                                <label for="room" class="font-normal text-sm text-neutral-600">
                                    Which room did you stay in? <span class="text-red-600">*</span>
                                </label>
                                <select required name="room" id="room border-neutral-200" class="w-full">
                                    <option disabled>Select Room</option>
                                    <option @if(old('room') == 'Nusa Dua') selected @endif value="Nusa Dua">Nusa Dua</option>
                                    <option @if(old('room') == 'Pecatu') selected @endif value="Pecatu">Pecatu</option>
                                </select>
                            </div>
                            <div x-show="selectedOption === 'CH'" class="space-y-2">
                                <label for="room" class="font-normal text-sm text-neutral-600">
                                    Which room did you stay in? <span class="text-red-600">*</span>
                                </label>
                                <select required name="room" id="room" class="w-full border-neutral-200">
                                    <option disabled>Select Room</option>
                                    <option @if(old('room') == 'Nusa Dua') selected @endif value="Nusa Dua">Uluwatu</option>
                                    <option @if(old('room') == 'Tanah Lot') selected @endif value="Tanah Lot">Tanah Lot</option>
                                    <option @if(old('room') == 'Ubud') selected @endif value="Ubud">Ubud</option>
                                    <option @if(old('room') == 'Sanur') selected @endif value="Sanur">Sanur</option>
                                    <option @if(old('room') == 'Sukawati') selected @endif value="Sukawati">Sukawati</option>
                                    <option @if(old('room') == 'Tianyar') selected @endif value="Tianyar">Tianyar</option>
                                    <option @if(old('room') == 'Amed') selected @endif value="Amed">Amed</option>
                                    <option @if(old('room') == 'Tenganan') selected @endif value="Tenganan">Tenganan</option>
                                    <option @if(old('room') == 'Jatiluwih') selected @endif value="Jatiluwih">Jatiluwih</option>
                                    <option @if(old('room') == 'Nusa Penida') selected @endif value="Nusa Penida">Nusa Penida</option>
                                    <option @if(old('room') == 'Nusa Lembongan') selected @endif value="Nusa Lembongan">Nusa Lembongan</option>
                                    <option @if(old('room') == 'Kintamani') selected @endif value="Kintamani">Kintamani</option>
                                    <option @if(old('room') == 'Lovina') selected @endif value="Lovina">Lovina</option>
                                    <option @if(old('room') == 'Kamasan') selected @endif value="Kamasan">Kamasan</option>
                                    <option @if(old('room') == 'Canggu') selected @endif value="Canggu">Canggu</option>
                                    <option @if(old('room') == 'Lempuyang') selected @endif value="Lempuyang">Lempuyang</option>
                                    <option @if(old('room') == 'Penglipuran') selected @endif value="Penglipuran">Penglipuran</option>
                                </select>
                            </div>
                            <div class="space-y-2 md:col-span-2 ">
                                <label for="room" class="font-normal text-sm text-neutral-600">
                                    Is this your first time staying with us? <span class="text-red-600">*</span>
                                </label>
                                <div class="md:col-span-2 grid md:grid-cols-2 gap-4">
                                    <div class="flex items-center space-x-2 border border-neutral-200 p-2 w-full">
                                        <div class="flex items-center h-5">
                                            <input required  @if(old('first_time') == 'yes') checked @endif id="helper-radio-yes" aria-describedby="helper-radio-text"
                                                type="radio" name="first_time" value="yes"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ms-2 text-sm">
                                            <label for="helper-radio-yes"
                                                class="font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                            <p id="helper-radio-text"
                                                class="text-xs font-normal text-gray-500 dark:text-gray-300">This is my
                                                first
                                                time staying.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 border border-neutral-200 p-2 w-full">
                                        <div class="flex items-center h-5">
                                            <input @if(old('first_time') == 'no') checked @endif id="helper-radio-no" aria-describedby="helper-radio-text"
                                                type="radio" name="first_time" value="no"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ms-2 text-sm">
                                            <label for="helper-radio-no"
                                                class="font-medium text-gray-900 dark:text-gray-300">No</label>
                                            <p id="helper-radio-text"
                                                class="text-xs font-normal text-gray-500 dark:text-gray-300">This is
                                                not my
                                                first time staying.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <label for="reference" class="font-normal text-sm text-neutral-600">
                                    Where did you find out about BVR Bali Holiday Rentals? <span
                                        class="text-red-600">*</span>
                                </label>
                                <select required name="reference" id="reference" class="w-full border-neutral-200">
                                    <option disabled>Select Room</option>
                                    <option @if(old('reference') == 'Website') selected @endif value="Website">Website</option>
                                    <option @if(old('reference') == 'Online Travel Agent') selected @endif value="Online Travel Agent">Online Travel Agent</option>
                                    <option @if(old('reference') == 'Friend') selected @endif value="Friend">Friend</option>
                                    <option @if(old('reference') == 'Social Media') selected @endif value="Social Media">Social Media</option>
                                    <option @if(old('reference') == 'Google') selected @endif value="Google">Google</option>
                                    <option @if(old('reference') == 'Others') selected @endif value="Others">Others</option>
                                </select>
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <label for="reservation_rating" class="font-normal text-sm text-neutral-600">
                                    How was your reservation handled? <span class="text-red-600">*</span>
                                </label>
                                <select required name="reservation_rating" id="reservation_rating"
                                    class="w-full border-neutral-200">
                                    <option disabled>Select Room</option>
                                    <option @if(old('reservation_rating')=='Excellent') selected @endif value="Excellent">Excellent</option>
                                    <option @if(old('reservation_rating')=='Good') selected @endif value="Good">Good</option>
                                    <option @if(old('reservation_rating')=='Fair') selected @endif value="Fair">Fair</option>
                                    <option @if(old('reservation_rating')=='Poor') selected @endif value="Poor">Poor</option>
                                </select>
                            </div>
                            <div x-show="selectedOption === 'CH'" class="space-y-2 md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    The Chillhouse Canggu Characteristics <span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-8">
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Cleanliness and Hygiene
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_excellent"
                                            value="excellent">
                                        <label for="cleanliness_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_good"
                                            value="good">
                                        <label for="cleanliness_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_fair"
                                            value="fair">
                                        <label for="cleanliness_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_poor"
                                            value="poor">
                                        <label for="cleanliness_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Housekeeping service
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_excellent"
                                            value="excellent">
                                        <label for="housekeeping_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_good"
                                            value="good">
                                        <label for="housekeeping_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_fair"
                                            value="fair">
                                        <label for="housekeeping_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeepings_poor"
                                            value="poor">
                                        <label for="housekeepings_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Staff Friendliness
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness"
                                            id="staff_friendliness_excellent" value="excellent">
                                        <label for="staff_friendliness_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="staff_friendliness_good"
                                            value="good">
                                        <label for="staff_friendliness_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="staff_friendliness_fair"
                                            value="fair">
                                        <label for="staff_friendliness_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="hstaff_friendliness_poor"
                                            value="poor">
                                        <label for="hstaff_friendliness_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Staff Competence
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staf_competence_excellent"
                                            value="excellent">
                                        <label for="staf_competence_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_good"
                                            value="good">
                                        <label for="staff_competence_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_fair"
                                            value="fair">
                                        <label for="staff_competence_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_poor"
                                            value="poor">
                                        <label for="staff_competence_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Service Quality
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id=service_quality_excellent"
                                            value="excellent">
                                        <label for="service_quality_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_good"
                                            value="good">
                                        <label for="service_quality_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_fair"
                                            value="fair">
                                        <label for="service_quality_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_poor"
                                            value="poor">
                                        <label for="service_quality_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Ambience
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id=ambience_excellent"
                                            value="excellent">
                                        <label for="ambience_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_good" value="good">
                                        <label for="ambience_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_fair" value="fair">
                                        <label for="ambience_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_poor" value="poor">
                                        <label for="ambience_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Location
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_excellent"
                                            value="excellent">
                                        <label for="location_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_good" value="good">
                                        <label for="location_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_fair" value="fair">
                                        <label for="location_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_poor" value="poor">
                                        <label for="location_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                </div>
                            </div>
                            <div x-show="selectedOption === 'CC'" class="space-y-2 md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    Chillcorner Characteristics <span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Cleanliness and Hygiene
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_excellent"
                                            value="excellent">
                                        <label for="cleanliness_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_good"
                                            value="good">
                                        <label for="cleanliness_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_fair"
                                            value="fair">
                                        <label for="cleanliness_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_poor"
                                            value="poor">
                                        <label for="cleanliness_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Housekeeping service
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_excellent"
                                            value="excellent">
                                        <label for="housekeeping_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_good"
                                            value="good">
                                        <label for="housekeeping_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_fair"
                                            value="fair">
                                        <label for="housekeeping_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeepings_poor"
                                            value="poor">
                                        <label for="housekeepings_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Staff Friendliness
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness"
                                            id="staff_friendliness_excellent" value="excellent">
                                        <label for="staff_friendliness_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="staff_friendliness_good"
                                            value="good">
                                        <label for="staff_friendliness_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="staff_friendliness_fair"
                                            value="fair">
                                        <label for="staff_friendliness_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="hstaff_friendliness_poor"
                                            value="poor">
                                        <label for="hstaff_friendliness_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Staff Competence
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staf_competence_excellent"
                                            value="excellent">
                                        <label for="staf_competence_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_good"
                                            value="good">
                                        <label for="staff_competence_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_fair"
                                            value="fair">
                                        <label for="staff_competence_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_poor"
                                            value="poor">
                                        <label for="staff_competence_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Service Quality
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id=service_quality_excellent"
                                            value="excellent">
                                        <label for="service_quality_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_good"
                                            value="good">
                                        <label for="service_quality_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_fair"
                                            value="fair">
                                        <label for="service_quality_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_poor"
                                            value="poor">
                                        <label for="service_quality_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Ambience
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id=ambience_excellent"
                                            value="excellent">
                                        <label for="ambience_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_good" value="good">
                                        <label for="ambience_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_fair" value="fair">
                                        <label for="ambience_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_poor" value="poor">
                                        <label for="ambience_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Location
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_excellent"
                                            value="excellent">
                                        <label for="location_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_good" value="good">
                                        <label for="location_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_fair" value="fair">
                                        <label for="location_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_poor" value="poor">
                                        <label for="location_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                </div>
                            </div>
                            <div x-show="selectedOption === 'BTS'" class="space-y-2 md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    BTS Villa Characteristics <span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Cleanliness and Hygiene
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_excellent"
                                            value="excellent">
                                        <label for="cleanliness_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_good"
                                            value="good">
                                        <label for="cleanliness_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_fair"
                                            value="fair">
                                        <label for="cleanliness_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="cleanliness" id="cleanliness_poor"
                                            value="poor">
                                        <label for="cleanliness_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Housekeeping service
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_excellent"
                                            value="excellent">
                                        <label for="housekeeping_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_good"
                                            value="good">
                                        <label for="housekeeping_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeeping_fair"
                                            value="fair">
                                        <label for="housekeeping_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="housekeeping" id="housekeepings_poor"
                                            value="poor">
                                        <label for="housekeepings_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Staff Friendliness
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness"
                                            id="staff_friendliness_excellent" value="excellent">
                                        <label for="staff_friendliness_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="staff_friendliness_good"
                                            value="good">
                                        <label for="staff_friendliness_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="staff_friendliness_fair"
                                            value="fair">
                                        <label for="staff_friendliness_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_friendliness" id="hstaff_friendliness_poor"
                                            value="poor">
                                        <label for="hstaff_friendliness_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Staff Competence
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staf_competence_excellent"
                                            value="excellent">
                                        <label for="staf_competence_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_good"
                                            value="good">
                                        <label for="staff_competence_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_fair"
                                            value="fair">
                                        <label for="staff_competence_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="staff_competence" id="staff_competence_poor"
                                            value="poor">
                                        <label for="staff_competence_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Service Quality
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id=service_quality_excellent"
                                            value="excellent">
                                        <label for="service_quality_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_good"
                                            value="good">
                                        <label for="service_quality_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_fair"
                                            value="fair">
                                        <label for="service_quality_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="service_quality" id="service_quality_poor"
                                            value="poor">
                                        <label for="service_quality_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Ambience
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id=ambience_excellent"
                                            value="excellent">
                                        <label for="ambience_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_good" value="good">
                                        <label for="ambience_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_fair" value="fair">
                                        <label for="ambience_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="ambience" id="ambience_poor" value="poor">
                                        <label for="ambience_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                    <div class="col-span-2 font-medium text-sm text-neutral-600">
                                        Location
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_excellent"
                                            value="excellent">
                                        <label for="location_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_good" value="good">
                                        <label for="location_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_fair" value="fair">
                                        <label for="location_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="location" id="location_poor" value="poor">
                                        <label for="location_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    General Review <span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-8">
                                    <div class="flex items-center space-x-2">
                                        <input required type="radio" name="general_review" id="general_review_excellent"
                                            value="excellent">
                                        <label for="general_review_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="general_review" id="general_review_good"
                                            value="good">
                                        <label for="general_review_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="general_review" id="general_review_fair"
                                            value="fair">
                                        <label for="general_review_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="general_review" id="general_review_poor"
                                            value="poor">
                                        <label for="general_review_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    Quality and Price <span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-8">
                                    <div class="flex items-center space-x-2">
                                        <input required type="radio" name="quality_and_price"
                                            id="quality_and_price_excellent" value="excellent">
                                        <label for="quality_and_price_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="quality_and_price" id="quality_and_price_good"
                                            value="good">
                                        <label for="quality_and_price_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="quality_and_price" id="quality_and_price_fair"
                                            value="fair">
                                        <label for="quality_and_price_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="quality_and_price" id="quality_and_price_poor"
                                            value="poor">
                                        <label for="quality_and_price_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2  md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    How do you rate our service?<span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-8">
                                    <div class="flex items-center space-x-2">
                                        <input required type="radio" name="unit_service" id="unit_service_excellent"
                                            value="excellent">
                                        <label for="unit_service_excellent"
                                            class="font-normal text-sm text-neutral-600">Excellent</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="unit_service" id="unit_service_good"
                                            value="good">
                                        <label for="unit_service_good"
                                            class="font-normal text-sm text-neutral-600">Good</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="unit_service" id="unit_service_fair"
                                            value="fair">
                                        <label for="unit_service_fair"
                                            class="font-normal text-sm text-neutral-600">Fair</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="unit_service" id="unit_service_poor"
                                            value="poor">
                                        <label for="unit_service_poor"
                                            class="font-normal text-sm text-neutral-600">Poor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2  md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    Would you consider our service in the future?<span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="flex items-center space-x-2">
                                        <input required type="radio" name="consideration" id="unit_service_yes"
                                            value="excellent">
                                        <label for="unit_service_yes"
                                            class="font-normal text-sm text-neutral-600">Yes</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="consideration" id="unit_service_no"
                                            value="good">
                                        <label for="unit_service_no"
                                            class="font-normal text-sm text-neutral-600">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    Would you recommend us to someone else?<span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="flex items-center space-x-2">
                                        <input required type="radio" name="recommendation" id="recommendation_yes"
                                            value="excellent">
                                        <label for="recommendation_yes"
                                            class="font-normal text-sm text-neutral-600">Yes</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="recommendation" id="recommendation_no"
                                            value="good">
                                        <label for="recommendation_no"
                                            class="font-normal text-sm text-neutral-600">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2  md:col-span-2">
                                <label for="employee_who_made_stay_more_pleasurable"
                                    class="font-normal text-sm text-neutral-600">
                                    Was there any employee who made your stay more pleasurable? <span
                                        class="text-red-600">*</span>
                                </label>
                                <input type="text" name="employee_who_made_stay_more_pleasurable"
                                    id="employee_who_made_stay_more_pleasurable"
                                    class="w-full border border-neutral-200" placeholder="e.g Sam, because . . ."
                                    required value="{{ old('employee_who_made_stay_more_pleasurable') }}">
                            </div>
                            <div class="space-y-2  md:col-span-2">
                                <label for="review_writings" class="font-normal text-sm text-neutral-600">
                                    Please write your review about us and our service that we provided. <span
                                        class="text-red-600">*</span>
                                </label>
                                <input type="text" name="review_writings" id="review_writings"
                                    class="w-full border border-neutral-200" placeholder="e.g The service is amazing."
                                    required value="{{ old('review_writings') }}">
                            </div>
                            <div class="space-y-2  md:col-span-2">
                                <div class="font-normal text-sm text-neutral-600">
                                    Would you like to subscribe to BVR Group Asia Business Bulletin Insights to receive
                                    15%
                                    Discount for your next booking?<span class="text-red-600">*</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4  md:col-span-2">
                                    <div class="flex items-center space-x-2">
                                        <input required type="radio" name="subscribe_to_newsletter"
                                            id="subscribe_to_newsletter_yes" value="yes">
                                        <label for="subscribe_to_newsletter_yes"
                                            class="font-normal text-sm text-neutral-600">Yes</label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="radio" name="subscribe_to_newsletter"
                                            id="subscribe_to_newsletter_no" value="no">
                                        <label for="subscribe_to_newsletter_no"
                                            class="font-normal text-sm text-neutral-600">No</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="md:col-span-2 py-2.5 w-full bg-[#ff5700] text-white font-medium">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @if ($errors->any())
        <div class="absolute bottom-2 right-2 max-w-sm bg-red-100 p-4">
            <div class="text-red-800 font-medium text-xs">
                There's an error with your input.
            </div>
            <ul class="space-y-2 text-xs px-2">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
