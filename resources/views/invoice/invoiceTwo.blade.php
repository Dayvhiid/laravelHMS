<!DOCTYPE html>

<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Thermal Invoice</title>

    <style>
        body {

            width: 384px;
            /* approx. 101.6mm at 96 DPI */

            margin: 0 auto;

            font-family: 'Courier New', Courier, monospace;

            font-size: 14px;

            color: #000;

            background: #fff;

        }



        .receipt {

            padding: 10px;

        }



        .center {

            text-align: center;

            margin-bottom: 10px;

        }



        .line {

            border-top: 1px dashed #000;

            margin: 8px 0;

        }



        table {

            width: 100%;

            border-collapse: collapse;

            font-size: 14px;

        }



        th,
        td {

            text-align: left;

            padding: 2px 0;

        }



        .right {

            text-align: right;

        }



        .note {

            font-size: 12px;

            margin-top: 10px;

        }



        .bold {

            font-weight: bold;

        }

        @media print {
            .invoice-btns {
                display: none;
            }
        }
    </style>

</head>

<body>

    <div class="receipt">

        <div class="center bold">OLA OLUWA EYE CLINIC</div>

        <div class="center">Invoice</div>

        <div>Date: @php echo date('Y-m-d H:i:s') @endphp</div>

        <div>Patient: {{ $invoice->pid }}</div>



        <div class="line"></div>



        <table>

            <thead>

                <tr>

                    <th>Description</th>

                    <th class="right">Rate</th>

                    <th class="right">Qty</th>

                    <th class="right">Amount</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <?php $subtotal = 0; ?>
                    @foreach ($invoice->name as $index => $item)
                        <td>{{ $item }}</td>

                        <td class="right">{{ $invoice->price[$index] }}</td>

                        <td class="right">{{ $invoice->qty[$index] }}</td>

                        <td class="right">{{ $invoice->price[$index] * $invoice->qty[$index] }}</td>

                        <?php $subtotal += $invoice->price[$index] * $invoice->qty[$index]; ?>
                        <?php $discount_amount = $subtotal * ($invoice->discount / 100); ?>
                        <?php $discounted_subtotal = $subtotal - $discount_amount; ?>
                    @endforeach
                </tr>


            </tbody>

        </table>



        <div class="line"></div>

        <div class="right bold">Sub Total: @php echo $discounted_subtotal @endphp</div>



        <div class="line"></div>

        <div class="note">NOTE: The price is generated at {{ $invoice->discount }}% discount.</div>

        <div class="line"></div>

    </div>
    <div class = "invoice-btns">
        <button type = "button" class = "invoice-btn" onclick="printInvoice()">
            <span>
                <i class="fa-solid fa-print"></i>
            </span>
            <span>Print</span>
        </button>
        {{-- <button type = "button" class = "invoice-btn" onclick="downloadInvoice()">
                                <span>
                                    <i class="fa-solid fa-download"></i>
                                </span>
                                <span>Download</span>
                            </button> --}}
        <button type="button" class="invoice-btn" id="downloadPdfBtn">
            <span>
                <i class="fa-solid fa-download"></i>
            </span>
            <span>Download as PDF</span>
        </button>
    </div>

</body>
<script>
    function printInvoice() {
        window.print();
    }
</script>
<script>
    document.getElementById('downloadPdfBtn').addEventListener('click', function() {
        // Select the HTML content to be converted
        const element = document.documentElement; // Entire page

        // PDF options (customize as needed)
        const opt = {
            margin: 10,
            filename: 'webpage.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'portrait'
            }
        };

        // Generate PDF
        html2pdf().set(opt).from(element).save();
    });
</script>


</html>
