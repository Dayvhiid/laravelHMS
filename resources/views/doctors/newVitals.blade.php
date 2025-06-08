<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

    <title>Vitals Page</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
<form method="post" action="{{route('vitals.store')}}">   
   @csrf
  @method('POST')     
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
        style='font-family: Manrope, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f1f2f4] px-10 py-3">
                <div class="flex items-center gap-4 text-[#121416]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em]">Diagnosis Vitals</h2>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-[#121416] text-sm font-medium leading-normal" href="{{route('doctors.treatment')}}">Treatment Plan</a>
                        <a class="text-[#121416] text-sm font-medium leading-normal" href="{{route('search.vitals')}}">Vitals Records</a>
                        <a class="text-[#121416] text-sm font-medium leading-normal" href="{{route('search.treatment')}}">Treatment
                            Records</a>
                    </div>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuALqV6KVgC3KmPbR3PqTj9vqWq9mAJsFvuld_8sqAHKtIpkCvl4MypJ8opVVByUUSdDxutaXZSY2LTweD_wfUqExHS-A4rYD2zgzpLnkgzPzSNUDKBHb6tK0UyFjrSHsxDGaSQsRAc4H06taDnKqVfn7nvtOYqeJNXMIwpbbNoMrpKeSzISAOIXndhRqf54MXYAS9Tk54T3XJb8YAQLfeTeVVXDhhWyU12OyL84o_ayO9rqxYB8NoA8M1a6e9d_mTNLw-PdPiekDhQ");'>
                    </div>
                </div>
            </header>
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#121416] tracking-light text-[32px] font-bold leading-tight min-w-72">
                            Comprehensive Eye Examination</p>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Patient Identification</h3>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121416] text-base font-medium leading-normal pb-2">Patient ID</p>
                            <input placeholder="Enter Patient ID"
                               name="patient_code"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Medical History</h3>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121416] text-base font-medium leading-normal pb-2">CC</p>
                            <textarea placeholder="Chief Complaint"
                                 name="cc"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] min-h-36 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121416] text-base font-medium leading-normal pb-2">POHX</p>
                            <textarea placeholder="Past Ocular History"
                                 name="pohx"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] min-h-36 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121416] text-base font-medium leading-normal pb-2">LEE</p>
                            <textarea placeholder="Last Eye Exam"
                                 name="lee"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] min-h-36 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121416] text-base font-medium leading-normal pb-2">PmHx</p>
                            <textarea placeholder="Past Medical History"
                                    name="pmhx"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] min-h-36 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#121416] text-base font-medium leading-normal pb-2">PfoHx</p>
                            <textarea placeholder="Past Family Ocular History"
                                    name="pfohx"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] min-h-36 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Visual
                        Activity</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th></th>
                                        <th
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            Unaided</th>
                                        <th
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            Pinhole</th>
                                        <th
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-360 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            Near V/A</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                        <td class="text-[#121416] text-base font-medium leading-normal pb-2">OD:</td>
                                        <td
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input name="ODunaided"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal" />
                                        </td>
                                        <td
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input name="ODpinhole"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal" />
                                        </td>
                                        <td
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input name="ODnearVA"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal" />
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#dde0e3]">
                                        <td class="text-[#121416] text-base font-medium leading-normal pb-2">OS:</td>
                                        <td
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input name="OSunaided"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal" />
                                        </td>
                                        <td
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input name="OSpinhole"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                value="" />
                                        </td>
                                        <td
                                            class="table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input name="OSnearVA"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                value="" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:120px)

                                {
                                .table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-120 {
                                    display: none;
                                }
                            }

                            @container(max-width:240px)

                                {
                                .table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-240 {
                                    display: none;
                                }
                            }

                            @container(max-width:360px)

                                {
                                .table-84efdf4d-6f29-4998-ac96-b8ff6bc2af6d-column-360 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Lensometry</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            SPH</th>
                                         <th
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            CYL</th>
                                         <th
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            AXIS</th>
                                         <th
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            VA</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OD:</H1>
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                               name="ODSPH"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ODCYL"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ODAXIS"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                value="" />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ODVA"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                value="" />
                                        </td>
                                    </tr>
                                    
                                     <tr class="border-t border-t-[#dde0e3]">
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td> 
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="OSSPH"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="OSCYL"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                 name="OSAXIS"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="OSVA"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                />
                                        </td>
                                    </tr>


                                     <tr class="border-t border-t-[#dde0e3]">
                                            <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ADDSPH"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ADDCYL"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ADDAXIS"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="ADDVA"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:120px)

                                {
                                .table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-120 {
                                    display: none;
                                }
                            }

                            @container(max-width:240px)

                                {
                                .table-813d7553-8f69-4f0b-b043-f2a935dc8386-column-240 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Auto-Refraction</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            SPHERE</th>
                                        <th
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            CYL</th>
                                        <th
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            AXIS</th>        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OD:</H1>
                                        </td>
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="arodsph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="arodcyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="arodaxis"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>

                                     <tr class="border-t border-t-[#dde0e3]">
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td>
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                 name="arosph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="aroscyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="arosaxis"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:120px)

                                {
                                .table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 {
                                    display: none;
                                }
                            }

                            @container(max-width:240px)

                                {
                                .table-92717181-a147-4ddb-adb4-6625d5f172ab-column-240 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Retinoscope</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            SPHERE</th>
                                        <th
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            CYL</th>
                                        <th
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            AXIS</th>        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                        <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OD:</H1>
                                        </td>
                                        <td
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="rodsph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                         <td
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                              <input 
                                                 name="rodcyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                         <td
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input        
                                                 name="rodaxis"                                
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#dde0e3]">
                                         <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td>
                                        <td
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="rossph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                         <td
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                              <input 
                                                 name="roscyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                         <td
                                            class="table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input  
                                                 name="rosaxis"                                      
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:120px)

                                {
                                .table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-120 {
                                    display: none;
                                }
                            }

                            @container(max-width:240px)

                                {
                                .table-bbcba2a0-62a2-4c7e-a50d-2ba8ff3dc7f1-column-240 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Subjective Refraction</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            SPH
                                        </th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            CYL</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            AXIS</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            VA</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            ADD</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            NVA</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OD:</H1>
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="srodsph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                               name="srodcyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="srodaxis"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                 name="srodva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                              <input 
                                                name="srodadd"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="srodnva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>

                                    <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="srosph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="sroscyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="srosaxis"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="srosva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                              <input 
                                                 name="srosadd"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="srosnva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:120px)

                                {
                                .table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-120 {
                                    display: none;
                                }
                            }

                            @container(max-width:240px)

                                {
                                .table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 {
                                    display: none;
                                }
                            }

                            @container(max-width:360px)

                                {
                                .table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 {
                                    display: none;
                                }
                            }

                            @container(max-width:480px)

                                {
                                .table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>

                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Final RX</h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            SPH
                                        </th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            CYL</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            AXIS</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            VA</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            ADD</th>
                                        <th
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            NVA</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OD:</H1>
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="fodsph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                               name="fodcyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="fodaxis"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                 name="fodva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                              <input 
                                                name="fodadd"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="fodnva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>

                                    <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="fossph"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-360 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                             <input 
                                                name="foscyl"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="fosaxis"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="fosva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                              <input 
                                                 name="fosadd"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-be3808f4-ae65-4348-847f-97c6c2c80b35-column-480 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                            <input 
                                                name="fosnva"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">IOP
                    </h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            NCT</th>
                                         <th
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            CCT</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OD:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input
                                               name="odnct"                                 
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                             
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                          name="odcct"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>

                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>OS:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                                name="osnct"                               
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                                name="oscct"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                        <h3 class="text-[#121416] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">External Examination And Internal Examination
                    </h3>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-xl border border-[#dde0e3] bg-white">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-white">
                                        <th
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-120 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            </th>
                                        <th
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            OD</th>
                                         <th
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 px-4 py-3 text-left text-[#121416] w-[400px] text-sm font-medium leading-normal">
                                            OS</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Eyelid:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input
                                               name="eyelidod"                                 
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                           
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                            name="eyelidos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>

                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Conjuctiva:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                              name="conjuctivaod"                            
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                            name="conjuctivaos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>

                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Cornea:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                               name="corneaod"                            
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                                name="corneaos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Pupil:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                                 name="pupilod"                             
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                                name="pupilos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Iris:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                               name="irisod"                            
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                                name="irisos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Lens:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                              name="lensod"                          
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                               name="lensos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Virtreous:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                                name="vitreousod"                       
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                                name="vitreousos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>C/D Ratio:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                               name="cdratiood"                               
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                               name="cdratioos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                     <tr class="border-t border-t-[#dde0e3]">
                                          <td
                                            class="table-92717181-a147-4ddb-adb4-6625d5f172ab-column-120 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal"><H1>Macula:</H1>
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                         <input  
                                                  name="macularod"                            
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                        <td
                                            class="table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 h-[72px] px-4 py-2 w-[400px] text-[#6a7581] text-sm font-normal leading-normal">
                                          <input 
                                                 name="maculaos"
                                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#121416] focus:outline-0 focus:ring-0 border border-[#dde0e3] bg-white focus:border-[#dde0e3] h-14 placeholder:text-[#6a7581] p-[15px] text-base font-normal leading-normal"
                                                 />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:120px)

                                {
                                .table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-120 {
                                    display: none;
                                }
                            }

                            @container(max-width:240px)

                                {
                                .table-2a0821a5-4bd2-415b-9ea6-35dff5cd1bb2-column-240 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>

                    
                    <div class="flex px-4 py-3 justify-end">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#5e92c9] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Save</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>    
</body>

</html>
