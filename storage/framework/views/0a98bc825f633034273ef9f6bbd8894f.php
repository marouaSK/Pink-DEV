<?php $__env->startSection('title', 'Request Details'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <h1 style="text-align: center; background-color: #ff9800; color: white; padding: 15px;">Request Details</h1>

    <div class="card shadow">
        <div class="card-body">
            <form>
                <div id="items-container">
                    <!-- Initial row with Item Name, Quantity, and Unit -->
                    <div class="row mb-4" id="item-row-1">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="item-name-1">Item Name</label>
                                <input type="text" name="item-name[]" class="form-control" placeholder="Enter Item Name">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="item-quantity-1">Quantity</label>
                                <input type="number" name="item-quantity[]" class="form-control" placeholder="Enter Quantity">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="item-unit-1">Unit</label>
                                <input type="text" name="item-unit[]" class="form-control" placeholder="Enter Unit">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger remove-item-btn" style="margin-top: 30px;">Remove</button>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary" id="add-item-row">Add Item</button>
                    <button type="submit" class="btn btn-danger mx-2">Reject Request</button>
                    <button type="submit" class="btn btn-success mx-2">Accept Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include JS to dynamically add rows -->
<?php $__env->startSection('scripts'); ?>
<script>
    let itemCount = 1;

    document.getElementById('add-item-row').addEventListener('click', function() {
        itemCount++;

        // Create a new row with inputs for Item Name, Quantity, and Unit
        let newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-4');
        newRow.id = 'item-row-' + itemCount;

        newRow.innerHTML = `
            <div class="col-md-3">
                <div class="form-group">
                    <label for="item-name-${itemCount}">Item Name</label>
                    <input type="text" name="item-name[]" class="form-control" placeholder="Enter Item Name">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="item-quantity-${itemCount}">Quantity</label>
                    <input type="number" name="item-quantity[]" class="form-control" placeholder="Enter Quantity">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="item-unit-${itemCount}">Unit</label>
                    <input type="text" name="item-unit[]" class="form-control" placeholder="Enter Unit">
                </div>
            </div>

            <div class="col-md-3">
                <button type="button" class="btn btn-danger remove-item-btn" style="margin-top: 30px;">Remove</button>
            </div>
        `;

        // Append the new row to the container
        document.getElementById('items-container').appendChild(newRow);
    });

    // Remove item row functionality
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('remove-item-btn')) {
            event.target.closest('.row').remove();
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pink-dev\resources\views/requests/show.blade.php ENDPATH**/ ?>