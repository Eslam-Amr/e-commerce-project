<div class="stock-button-wrap pt-3">

    <div class="input-group product-qty">
        <span class="input-group-btn">
            <button type="button" class="quantity-left-minus btn btn-number"
                data-type="minus" data-field="">
                -
            </button>
        </span>
        <input type="text" id="quantity" name="quantity"
            class="form-control input-number" value="1" min="1" max="100">
        <span class="input-group-btn">
            <button type="button" class="quantity-right-plus btn btn-number"
                data-type="plus" data-field="">
                +
            </button>
        </span>
    </div>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const productStock = <?= $stock; ?>; // Dynamically set product stock value from PHP
                const quantityInput = document.getElementById('quantity');
                const plusButton = document.querySelector('.quantity-right-plus');
                const minusButton = document.querySelector('.quantity-left-minus');

                quantityInput.max = productStock;

                plusButton.addEventListener('click', () => {
                    let currentValue = parseInt(quantityInput.value);
                    let max = parseInt(quantityInput.max);
                    if (currentValue < max) {
                        quantityInput.value = currentValue + 1;
                    }
                });

                minusButton.addEventListener('click', () => {
                    let currentValue = parseInt(quantityInput.value);
                    let min = parseInt(quantityInput.min);
                    if (currentValue > min) {
                        quantityInput.value = currentValue - 1;
                    }
                });
            });
        </script>
        </div>
