<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C93 Cut and Edge</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
</head>
<body class="bg-light py-5">
<div class="container">
    <a class="btn btn-primary" style="width: 100px" href="{{route('login')}}" id="checkout-btn">Login</a>
    <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
        <h4 class="text-center mb-4">C93 Cut and Edge</h4>


        <input type="number" class="form-control col-md-6" id="num_of_white_boards" placeholder="Number of White Boards" name="num_of_white_boards">
        <div class="mb-3">
            <label class="form-label fw-bold">White Boards</label>
            <select class="form-select" id="white_board">
                <option selected>Choose...</option>
                @foreach($white_boards as $item)
                    <option value="1"  data-white-board-price="{{$item->price}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Sizes</label>
            <select class="form-select" id="rooms">
                <option selected>Choose...</option>
                @foreach($white_board_dimensions as $item)
                    <option value="{{$item->id}}" data-white-board-id="{{$item->white_board_id}}" data-white-board-size-price="{{$item->price}}">{{$item->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="row">
            <input type="number" placeholder="Length" class="form-control col-md-6" id="length" name="length">
            <input type="number"  placeholder="Width"class="form-control col-md-6" id="width" name="width">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Add Ons</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="nails">
                <label class="form-check-label" for="nails">Nails</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rails">
                <label class="form-check-label" for="rails">Rails</label>
            </div>

        </div>

        <button class="btn btn-primary w-100" id="checkout-btn">Proceed to Checkout</button>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const whiteBoardSelect = document.getElementById("white_board");
        const sizeSelect = document.getElementById("rooms");
        const numBoardsInput = document.getElementById("num_of_white_boards");
        const lengthInput = document.getElementById("length");
        const widthInput = document.getElementById("width");
        const nailsCheckbox = document.getElementById("nails");
        const railsCheckbox = document.getElementById("rails");
        const checkoutBtn = document.getElementById("checkout-btn");

        const prices = {
            nails: 5, // Example price
            rails: 10, // Example price
        };

        checkoutBtn.addEventListener("click", function () {
            let itemizedList = "<h5>Checkout Summary</h5><ul>";
            let totalCost = 0;

            // White Board selection
            const whiteBoardOption = whiteBoardSelect.options[whiteBoardSelect.selectedIndex];
            const whiteBoardPrice = parseFloat(whiteBoardOption.getAttribute("data-white-board-price")) || 0;
            const numBoards = parseInt(numBoardsInput.value) || 1;
            if (whiteBoardPrice > 0) {
                itemizedList += `<li>White Board: K${whiteBoardPrice} x ${numBoards} = K${whiteBoardPrice * numBoards}</li>`;
                totalCost += whiteBoardPrice * numBoards;
            }

            // Size selection
            const sizeOption = sizeSelect.options[sizeSelect.selectedIndex];
            const sizePrice = parseFloat(sizeOption.getAttribute("data-white-board-size-price")) || 0;
            if (sizePrice > 0) {
                itemizedList += `<li>Size: K${sizePrice}</li>`;
                totalCost += sizePrice;
            }

            // Custom dimensions (optional, assuming per sq unit pricing)
            const length = parseFloat(lengthInput.value) || 0;
            const width = parseFloat(widthInput.value) || 0;
            if (length > 0 && width > 0) {
                const area = length * width;
                const areaPrice = area * 2; // Example pricing per unit area
                itemizedList += `<li>Custom Size (${length}x${width}): K${areaPrice}</li>`;
                totalCost += areaPrice;
            }

            // Add-ons
            if (nailsCheckbox.checked) {
                itemizedList += `<li>Nails: K${prices.nails}</li>`;
                totalCost += prices.nails;
            }
            if (railsCheckbox.checked) {
                itemizedList += `<li>Rails: K${prices.rails}</li>`;
                totalCost += prices.rails;
            }

            itemizedList += `</ul><h5>Total Cost: K${totalCost.toFixed(2)}</h5>`;

            // Display the summary
            const summaryDiv = document.createElement("div");
            summaryDiv.innerHTML = itemizedList;
            summaryDiv.classList.add("alert", "alert-info", "mt-3");
            document.querySelector(".container").appendChild(summaryDiv);
        });
    });

</script>

</body>
</html>
