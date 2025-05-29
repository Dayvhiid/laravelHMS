@php
    $drugs = \App\Models\Drug::all();
    $frames = \App\Models\Frame::all();
    $lenses = \App\Models\Lens::all();
@endphp
<script>
    // Pass PHP collections to JS as arrays of objects
    const drugs = @json($drugs);
    const frames = @json($frames);
    const lenses = @json($lenses);

    function buildOptions(items) {
  return items.map(item => `<option value="${item.id}">${item.name}</option>`).join('');
}
</script>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Invoice</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
     <form id="invoice-form" method="POST" action="{{ route('invoices.store') }}">
              @csrf   
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Public Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0d141c]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"
                  fill="currentColor"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M39.998 35.764C39.9944 35.7463 39.9875 35.7155 39.9748 35.6706C39.9436 35.5601 39.8949 35.4259 39.8346 35.2825C39.8168 35.2403 39.7989 35.1993 39.7813 35.1602C38.5103 34.2887 35.9788 33.0607 33.7095 32.5189C30.9875 31.8691 27.6413 31.4783 24 31.4783C20.3587 31.4783 17.0125 31.8691 14.2905 32.5189C12.0012 33.0654 9.44505 34.3104 8.18538 35.1832C8.17384 35.2075 8.16216 35.233 8.15052 35.2592C8.09919 35.3751 8.05721 35.4886 8.02977 35.589C8.00356 35.6848 8.00039 35.7333 8.00004 35.7388C8.00004 35.739 8 35.7393 8.00004 35.7388C8.00004 35.7641 8.0104 36.0767 8.68485 36.6314C9.34546 37.1746 10.4222 37.7531 11.9291 38.2772C14.9242 39.319 19.1919 40 24 40C28.8081 40 33.0758 39.319 36.0709 38.2772C37.5778 37.7531 38.6545 37.1746 39.3151 36.6314C39.9006 36.1499 39.9857 35.8511 39.998 35.764ZM4.95178 32.7688L21.4543 6.30267C22.6288 4.4191 25.3712 4.41909 26.5457 6.30267L43.0534 32.777C43.0709 32.8052 43.0878 32.8338 43.104 32.8629L41.3563 33.8352C43.104 32.8629 43.1038 32.8626 43.104 32.8629L43.1051 32.865L43.1065 32.8675L43.1101 32.8739L43.1199 32.8918C43.1276 32.906 43.1377 32.9246 43.1497 32.9473C43.1738 32.9925 43.2062 33.0545 43.244 33.1299C43.319 33.2792 43.4196 33.489 43.5217 33.7317C43.6901 34.1321 44 34.9311 44 35.7391C44 37.4427 43.003 38.7775 41.8558 39.7209C40.6947 40.6757 39.1354 41.4464 37.385 42.0552C33.8654 43.2794 29.133 44 24 44C18.867 44 14.1346 43.2794 10.615 42.0552C8.86463 41.4464 7.30529 40.6757 6.14419 39.7209C4.99695 38.7775 3.99999 37.4427 3.99999 35.7391C3.99999 34.8725 4.29264 34.0922 4.49321 33.6393C4.60375 33.3898 4.71348 33.1804 4.79687 33.0311C4.83898 32.9556 4.87547 32.8935 4.9035 32.8471C4.91754 32.8238 4.92954 32.8043 4.93916 32.7889L4.94662 32.777L4.95178 32.7688ZM35.9868 29.004L24 9.77997L12.0131 29.004C12.4661 28.8609 12.9179 28.7342 13.3617 28.6282C16.4281 27.8961 20.0901 27.4783 24 27.4783C27.9099 27.4783 31.5719 27.8961 34.6383 28.6282C35.082 28.7342 35.5339 28.8609 35.9868 29.004Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#0d141c] text-lg font-bold leading-tight tracking-[-0.015em]">ClinicPro</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0d141c] text-sm font-medium leading-normal" href="#">Dashboard</a>
              <a class="text-[#0d141c] text-sm font-medium leading-normal" href="#">Patients</a>
              <a class="text-[#0d141c] text-sm font-medium leading-normal" href="#">Appointments</a>
              <a class="text-[#0d141c] text-sm font-medium leading-normal" href="#">Invoices</a>
              <a class="text-[#0d141c] text-sm font-medium leading-normal" href="#">Inventory</a>
            </div>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 bg-[#e7edf4] text-[#0d141c] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#0d141c]" data-icon="Bell" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDgvi94cD3tDXOpfMCqmX0rpAGTPgERJ--6pWGJdzb74nY0ZjZcxk7C2dAoZ-RyiUErnn3W04s7vCA9AkQMyI4mWKAsvqHwViVDXDfj80xamyOmhlQyy4hRrH7GtU8zVq0j9_yFTtbDd7wdbyPm7yLEzPAextfjUr4V7YZ-X_dxiqZgvkQPHJtiLvIJqxuba5WW2najAFyGpaMr7gtT3uDQ_HL2gWTZ6ZzN8Mv8Dulm5OeXMeXWHsJLHInqR_PXyzFniJTnaBQRA88m");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#0d141c] tracking-light text-[32px] font-bold leading-tight min-w-72">Generate Invoice</p></div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
            
                <p  class="text-[#0d141c] text-base font-medium leading-normal pb-2">Patient Name</p>
                <input
                name="patient_name"
                  placeholder="Search for patient"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#0d141c] text-base font-medium leading-normal pb-2">Discount</p>
                <input
                name="discount"
                  placeholder="Enter discount"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#cedbe8] bg-slate-50">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-slate-50">
                      <th class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-120 px-4 py-3 text-left text-[#0d141c] w-[400px] text-sm font-medium leading-normal">
                        Drug Name
                      </th>
                      <th class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-240 px-4 py-3 text-left text-[#0d141c] w-[400px] text-sm font-medium leading-normal">
                        Frame Name
                      </th>
                      <th class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-360 px-4 py-3 text-left text-[#0d141c] w-[400px] text-sm font-medium leading-normal">
                        Lens Name
                      </th>
                        <th class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-360 px-4 py-3 text-left text-[#0d141c] w-[400px] text-sm font-medium leading-normal">
                        Quantity
                      </th>
                      <th
                        class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-480 px-4 py-3 text-left text-[#0d141c] w-60 text-[#49719c] text-sm font-medium leading-normal"
                      ></th>
                    </tr>
                  </thead>
  <tbody id="table-body">
    <tr class="border-t border-t-[#cedbe8]">
      <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0d141c] text-sm font-normal leading-normal">
        <select class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal">
           @foreach($drugs as $drug)
            <option value="{{ $drug->id }}">{{ $drug->name }}</option>
          @endforeach
            {{-- <option>Amoxicillin</option>

          <option>Paracetamol</option>
          <option>Ibuprofen</option> --}}
        </select>
      </td>
      <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#0d141c] text-sm font-normal leading-normal">
        <select name="name" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal">
             @foreach($frames as $frame)
            <option value="{{ $frame->id }}">{{ $frame->name }}</option>
          @endforeach
        </select>
      </td>
      <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#0d141c] text-sm font-normal leading-normal">
        <select class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal">
               @foreach($lenses as $lens)
            <option value="{{ $lens->id }}">{{ $lens->name }}</option>
          @endforeach
        </select>
      </td>
      <td>
        <input
        name="quantity[]"
          placeholder="Enter quantity"
          class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal"
          value=""
        />
      </td>
      <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-480 h-[72px] px-4 py-2 w-60 text-[#49719c] text-sm font-bold leading-normal tracking-[0.015em] cursor-pointer " id="add-button">
        Add
      </td>
    </tr>
  </tbody>
         <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
            Save Invoice
        </button>
   
 </form> 

 
   

                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-5369db92-c542-4f94-b6c7-59de35deae4d-column-120{display: none;}}
                @container(max-width:240px){.table-5369db92-c542-4f94-b6c7-59de35deae4d-column-240{display: none;}}
                @container(max-width:360px){.table-5369db92-c542-4f94-b6c7-59de35deae4d-column-360{display: none;}}
                @container(max-width:480px){.table-5369db92-c542-4f94-b6c7-59de35deae4d-column-480{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>



<script>

document.getElementById('invoice-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const rows = document.querySelectorAll('#table-body tr');
    
    const names = [];
    const prices = [];
    const quantities = [];
    const types = []; // To track if it's drug, frame or lens
    
    rows.forEach(row => {
        // Use more specific selectors to find elements
        const drugSelect = row.querySelector('td:nth-child(1) select');
        const frameSelect = row.querySelector('td:nth-child(2) select');
        const lensSelect = row.querySelector('td:nth-child(3) select');
        const qtyInput = row.querySelector('td:nth-child(4) input');
        
        // Skip rows that don't have the expected structure
        if (!drugSelect || !frameSelect || !lensSelect || !qtyInput) {
            console.warn('Skipping row - missing required elements');
            return;
        }
        
        // Determine which product was selected
        let selectedProduct = null;
        let type = '';
        
        if (drugSelect.value && drugSelect.value !== '') {
            selectedProduct = drugs.find(d => d.id == drugSelect.value);
            type = 'drug';
        } else if (frameSelect.value && frameSelect.value !== '') {
            selectedProduct = frames.find(f => f.id == frameSelect.value);
            type = 'frame';
        } else if (lensSelect.value && lensSelect.value !== '') {
            selectedProduct = lenses.find(l => l.id == lensSelect.value);
            type = 'lens';
        }
        
        // Only add if we have a valid product and quantity
        if (selectedProduct && qtyInput.value && qtyInput.value !== '') {
            names.push(selectedProduct.name);
            prices.push(selectedProduct.price);
            quantities.push(parseInt(qtyInput.value));
            types.push(type);
        }
    });
    
    // Validate we have at least one item
    if (names.length === 0) {
        alert('Please add at least one item to the invoice');
        return;
    }
    
    // Create hidden inputs for the arrays
    const namesInput = document.createElement('input');
    namesInput.type = 'hidden';
    namesInput.name = 'names';
    namesInput.value = JSON.stringify(names);
    
    const pricesInput = document.createElement('input');
    pricesInput.type = 'hidden';
    pricesInput.name = 'prices';
    pricesInput.value = JSON.stringify(prices);
    
    const quantitiesInput = document.createElement('input');
    quantitiesInput.type = 'hidden';
    quantitiesInput.name = 'quantities';
    quantitiesInput.value = JSON.stringify(quantities);
    
    const typesInput = document.createElement('input');
    typesInput.type = 'hidden';
    typesInput.name = 'types';
    typesInput.value = JSON.stringify(types);
    
    // Clear any previous hidden inputs
    const existingHiddenInputs = form.querySelectorAll('input[type="hidden"]');
    existingHiddenInputs.forEach(input => input.remove());
    
    // Add new hidden inputs
    form.appendChild(namesInput);
    form.appendChild(pricesInput);
    form.appendChild(quantitiesInput);
    form.appendChild(typesInput);
    
    // Debug output
    console.log('Submitting form with data:', {
        names: names,
        prices: prices,
        quantities: quantities,
        types: types
    });
    
    // Submit the form
    form.submit();
});

// document.getElementById('invoice-form').addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     const form = e.target;
//     const rows = document.querySelectorAll('#table-body tr');
    
//     const names = [];
//     const prices = [];
//     const quantities = [];
    
//     rows.forEach(row => {
//         const drugSelect = row.querySelector('select:nth-child(1)');
//         const frameSelect = row.querySelector('select:nth-child(2)');
//         const lensSelect = row.querySelector('select:nth-child(3)');
//         const qtyInput = row.querySelector('input[type="text"]');
        
//         // Determine which product was selected
//         let selectedProduct = null;
//         if (drugSelect.value) {
//             selectedProduct = drugs.find(d => d.id == drugSelect.value);
//         } else if (frameSelect.value) {
//             selectedProduct = frames.find(f => f.id == frameSelect.value);
//         } else if (lensSelect.value) {
//             selectedProduct = lenses.find(l => l.id == lensSelect.value);
//         }
        
//         if (selectedProduct && qtyInput.value) {
//             names.push(selectedProduct.name);
//             prices.push(selectedProduct.price); // Assuming your models have a price field
//             quantities.push(parseInt(qtyInput.value));
//         }
//     });
    
    // Create hidden inputs for the arrays
    const namesInput = document.createElement('input');
    namesInput.type = 'hidden';
    namesInput.name = 'names';
    namesInput.value = JSON.stringify(names);
    
    const pricesInput = document.createElement('input');
    pricesInput.type = 'hidden';
    pricesInput.name = 'prices';
    pricesInput.value = JSON.stringify(prices);
    
    const quantitiesInput = document.createElement('input');
    quantitiesInput.type = 'hidden';
    quantitiesInput.name = 'quantities';
    quantitiesInput.value = JSON.stringify(quantities);
    
    form.appendChild(namesInput);
    form.appendChild(pricesInput);
    form.appendChild(quantitiesInput);
    
    form.submit();
// });
    
  const tableBody = document.getElementById('table-body');
  const addButtonId = 'add-button';

  // Function to create a new row string — keep the same HTML structure as your row
  function createNewRow() {
    return `
      <tr class="border-t border-t-[#cedbe8]">
        <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0d141c] text-sm font-normal leading-normal">
          <select class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal">
               @foreach($drugs as $drug)
            <option value="{{ $drug->id }}">{{ $drug->name }}</option>
          @endforeach
          </select>
        </td>
        <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-240 h-[72px] px-4 py-2 w-[400px] text-[#0d141c] text-sm font-normal leading-normal">
          <select class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal">
            @foreach($frames as $frame)
            <option value="{{ $frame->id }}">{{ $frame->name }}</option>
          @endforeach
          </select>
        </td>
        <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-360 h-[72px] px-4 py-2 w-[400px] text-[#0d141c] text-sm font-normal leading-normal">
          <select class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal">
              @foreach($lenses as $lens)
            <option value="{{ $lens->id }}">{{ $lens->name }}</option>
          @endforeach
          </select>
        </td>
        <td>
          <input
            placeholder="Enter quantity"
            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#cedbe8] h-14 placeholder:text-[#49719c] p-[15px] text-base font-normal leading-normal"
            value=""
          />
        </td>
        <td class="table-5369db92-c542-4f94-b6c7-59de35deae4d-column-480 h-[72px] px-4 py-2 w-60 text-[#49719c] text-sm font-bold leading-normal tracking-[0.015em] cursor-pointer">
          Add
        </td>
      </tr>
    `;
  }


  tableBody.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-row')) {
      const row = e.target.closest('tr');
      if (row) row.remove();
    }
  });

  // Delegate click events on tbody for any "Add" buttons (including dynamically added ones)
  tableBody.addEventListener('click', function(event) {
    if (event.target && event.target.matches('.table-5369db92-c542-4f94-b6c7-59de35deae4d-column-480.cursor-pointer')) {
      const newRowHTML = createNewRow();
      tableBody.insertAdjacentHTML('beforeend', newRowHTML);
    }
  });
</script>


