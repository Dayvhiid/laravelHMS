<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="font-weight-bold">Generate Invoice</h1>
        <form action="{{route('invoice.save')}}" method="POST">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Patient Name" aria-label="Recipient's username" aria-describedby="basic-addon2" name="pid">
                <td><input type="number" name="discount" placeholder="Enter Percentage discounts" class="form-control" required></td>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Button</button>
                </div>
            </div>
            <table class="table table-bordered" id="table">
                <tr>
                    <th>Drug  Name</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td><input type="text" name="inputs[0][name]" class="form-control" placeholder="Enter Drug Name"></td>
                    <td><input type="text" name="inputs[0][price]" placeholder="Enter Drug Price" class="form-control"></td>
                    <td><input type="number" name="inputs[0][qty]" placeholder="Enter Quantity" class="form-control"></td>
                    
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                </tr>
            </table>

            {{-- <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or phone number" name="contact">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> --}}
        </form>
    </div>
    <script>
        var rowCounter = 0;
      
        $('#add').click(function() {
          rowCounter++;
      
          var newRow = $('<tr>'); // Create the new row element
      
          newRow.append($('<td>').append($('<input>', {
            type: 'text',
            name: 'inputs[' + rowCounter + '][name]',
            placeholder: 'Enter Drug Name',
            class: 'form-control'
          })));
          newRow.append($('<td>').append($('<input>', {
            type: 'text',
            name: 'inputs[' + rowCounter + '][price]',
            placeholder: 'Enter Drug Price',
            class: 'form-control'
          })));
          // Add similar code for remaining fields (name, patient code, etc.)
          newRow.append($('<td>').append($('<input>', {
            type: 'number',
            name: 'inputs[' + rowCounter + '][qty]',
            placeholder: 'Enter Quantity',
            class: 'form-control'
          })));
  newRow.append($('<td>').append($('<button>', {
            type: 'button',
            class: 'btn btn-danger remove-table-row',
            text: 'Remove'
          })));
      
      
          newRow.appendTo('#table'); // Add the new row to the table
        });
      
        // console.log('pressed');
      
        $(document).on('click', '.remove-table-row', function() {
          $(this).closest('tr').remove();
        });
      </script>
</body>
</html>