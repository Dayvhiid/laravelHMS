<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900" />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
        style='font-family: "Public Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f1f3f4] px-10 py-3">
                <div class="flex items-center gap-4 text-[#121516]">
                    <div class="size-20 flex items-center justify-center rounded-full ">
                        <img class="logo" src="/icons/logo.png">
                        {{-- <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> --}}
                        {{-- <path
                  d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"
                  fill="currentColor"
                ></path> --}}
                        </svg>
                    </div>
                    <h2 class="text-[#121516] text-lg font-bold leading-tight tracking-[-0.015em]">Register Patients
                    </h2>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-[#121516] text-sm font-medium leading-normal"
                            href="{{ route('generate.show') }}">Invoice Records</a>
                        <a class="text-[#121516] text-sm font-medium leading-normal"
                            href="{{ route('public.records') }}">Records</a>
                        <a class="text-[#121516] text-sm font-medium leading-normal" href="/doctors/index">Doctors
                            Portal</a>
                        <a class="text-[#121516] text-sm font-medium leading-normal"
                            href="{{ route('optician.index') }}">Opticianry</a>
                        <a class="text-[#121516] text-sm font-medium leading-normal"
                            href="{{ route('admin.admin2') }}">Admin 2</a>
                        <a class="text-[#121516] text-sm font-medium leading-normal"
                            href="{{ route('image.upload') }}">Case File Upload</a>
                    </div>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("/public/icons/logo.png");'></div>
                </div>
            </header>
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#121516] tracking-light text-[32px] font-bold leading-tight min-w-72">New
                            Patient</p>
                    </div>
                    <h3 class="text-[#121516] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Patient Information</h3>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">First Name</p>
                            <input placeholder="Enter first name" name="firstname"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" required />
                        </label>
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Last Name</p>
                            <input placeholder="Enter last name"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" name="lastname" required />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Date of Birth</p>
                            <input placeholder="MM/DD/YYYY"
                                type="date"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" name="dob" required />
                        </label>
                        {{-- <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#121516] text-base font-medium leading-normal pb-2">Gender</p>
                <input
                  placeholder="Select"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label> --}}
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Gender</p>
                            <select
                                class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </label>

                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Phone</p>
                            <input placeholder="Enter phone number"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Email</p>
                            <input placeholder="Enter email address"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Address</p>
                            <input placeholder="Enter address"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">City</p>
                            <input placeholder="Enter city"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">State</p>
                            <input placeholder="Select"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Street</p>
                            <input placeholder="Enter street"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Occupation</p>
                            <input placeholder="Enter occupation"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <h3 class="text-[#121516] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Emergency Contact</h3>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Full Name</p>
                            <input placeholder="Enter full name"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Relationship</p>
                            <input placeholder="Enter relationship"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Phone</p>
                            <input placeholder="Enter phone number"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121516] text-base font-medium leading-normal pb-2">Email</p>
                            <input placeholder="Enter email address"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121516] focus:outline-0 focus:ring-0 border border-[#dde1e3] bg-white focus:border-[#dde1e3] h-14 placeholder:text-[#6a7881] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <h3 class="text-[#121516] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        System Generated ID</h3>
                    <p class="text-[#121516] text-base font-normal leading-normal pb-3 pt-1 px-4">PatientID:
                        368/07/2025</p>
                    <div class="flex px-4 py-3 justify-center">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#b2d1e5] text-[#121516] text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Submit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
