<?php $__env->startSection('title', 'Inventory'); ?>

<?php $__env->startSection('content'); ?>
<div class="inventory-container">
    <h1 style="text-align: center; background-color: #ff9800; color: white; padding: 15px;">Inventory</h1>

    <div class="inventory-summary" style="display: flex; justify-content: space-around; padding: 20px;">
        <div class="inventory-item" style="background-color: white; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <p>Deliveries</p>
            <h2>25</h2>
        </div>
        <div class="inventory-item" style="background-color: white; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <p>Suppliers</p>
            <h2>45</h2>
        </div>
        <div class="inventory-item" style="background-color: white; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <p>Raw Materials</p>
            <h2>45</h2>
        </div>
    </div>

    <div class="inventory-details" style="padding: 20px;">
        <div class="delivery-section" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
            <p>Delivery</p>
            <p>Last 24 Hours</p>
            <h2>Amount: 2,500,000 DA</h2>
            <p>35%</p>
        </div>

        <div class="charts" style="display: flex; justify-content: space-around;">
            <div class="chart" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); width: 45%;">
                <h3>Delivery Costs</h3>
                <!-- Placeholder for Delivery Costs Plot -->
                <div style="height: 200px; background-color: #f4f4f4; text-align: center; line-height: 200px; color: #aaa;">[Delivery Costs Plot]</div>
            </div>
            <div class="chart" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); width: 45%;">
                <h3>Product Costs</h3>
                <!-- Placeholder for Product Costs Plot -->
                <div style="height: 200px; background-color: #f4f4f4; text-align: center; line-height: 200px; color: #aaa;">[Product Costs Plot]</div>
            </div>
        </div>

        <div class="links" style="margin-top: 20px; text-align: center;">
            <a href="/stock-activity" style="margin: 0 10px; text-decoration: none; color: #ff9800;">Stock Activity</a>
            <a href="/requests" style="margin: 0 10px; text-decoration: none; color: #ff9800;">Requests</a>
            <a href="/performance" style="margin: 0 10px; text-decoration: none; color: #ff9800;">Performance</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pink-dev\resources\views/inventory.blade.php ENDPATH**/ ?>