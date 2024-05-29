<!DOCTYPE html>
<html>
<head>
    <title>Drug Dropdown with Search</title>
</head>
<body>
    <h2>Drug Dropdown with Search</h2>
    <form action="{{ route('drugs.search') }}" method="GET">
        <input type="text" name="search" placeholder="Search drug...">
        <button type="submit">Search</button>
    </form>
    <button type="button" name="add" id="add" class="btn btn-success">Add Row</button>
    <form id="myForm"  action="{{route('invoice.save')}}" method="POST">
        @csrf
        @method('POST')
        <div class="inputs">
            <select name="drug_id[]" id="drug_id">
                <option value="">Select Drug</option>
                @foreach($mergedResults as $item)
                    <option name="inputs[0][name]" value="{{ $item->id }}" data-price="{{ $item->price }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <input type="text" name="inputs[0][price]" id="price" readonly>
            <input type="number" name="inputs[0][qty]" placeholder="Quantity">
            <button type="button" class="remove-row">Remove</button>
        </div>
        <div id="newRow"></div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.getElementById('drug_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var priceInput = document.getElementById('price');
            if (selectedOption.dataset.price) {
                priceInput.value = selectedOption.dataset.price;
            } else {
                priceInput.value = ''; // Reset price input if no price is available
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var rowCounter = 0;

            $('#add').click(function() {
                rowCounter++;
                var newRow = '<div class="inputs" data-id="' + rowCounter + '">';
                newRow += '<select name="drug_id[' + rowCounter + ']" id="drug_id_' + rowCounter + '">';
                newRow += '<option value="">Select Drug</option>';
                @foreach($mergedResults as $item)
                    newRow += '<option name="inputs[' + rowCounter + '][name]" value="{{ $item->id }}" data-price="{{ $item->price }}">{{ $item->name }}</option>';
                @endforeach
                newRow += '</select>';
                newRow += '<input type="text" name="inputs[' + rowCounter + '][price]" id="price_' + rowCounter + '" readonly>';
                newRow += '<input type="number" name="inputs[' + rowCounter + '][qty]" placeholder="Quantity">';
                newRow += '<button type="button" class="remove-row">Remove</button>';
                newRow += '</div>';
                $('#newRow').append(newRow);

                // Add event listener for the newly added drug dropdown
                $('#drug_id_' + rowCounter).change(function() {
                    var selectedOption = this.options[this.selectedIndex];
                    var priceInput = $('#price_' + rowCounter);
                    if (selectedOption.dataset.price) {
                        priceInput.val(selectedOption.dataset.price);
                    } else {
                        priceInput.val(''); // Reset price input if no price is available
                    }
                });
            });

            $(document).on('click', '.remove-row', function() {
                $(this).closest('.inputs').remove();
            });
        });
    </script>
</body>
</html>
