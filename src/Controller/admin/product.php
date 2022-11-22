<?php
include "../../config/config.php";
?>
<form action="" method="POST" id="prForm" enctype="multipart/form-data">
    <div class="row mt-5 mb-2">
        <div class="col text-center"><h3 class="text-muted">Add Product</h3></div>
    </div>
    <div class="row ms-3 me-3 mb-2">
        <div class="col">
            <label for="prName">Product Name</label>
            <input type="text" class="form-control" name="prName" id="prName" placeholder="Prduct Name">
        </div>
        <div class="col">
            <label for="prCategory">Product Category</label>
            <select class="form-control" id="prCategory" name="prCategory">
                <option value="">SELECT CATEGORY</option>
            </select>
        </div>
    </div>
    <div class="row ms-3 me-3 mb-2">
        <div class="col">
            <label for="prCost">Product Cost</label>
            <input type="number" class="form-control" name="prCost" id="prCost" placeholder="Prduct Cost">
        </div>
        <div class="col">
            <label for="prPrice">Product Price</label>
            <input type="number" class="form-control" name="prPrice" id="prPrice" placeholder="Prduct Price">
        </div>
        <div class="col">
            <label for="prQuantity">Product Quantity</label>
            <input type="number" class="form-control" name="prQuantity" id="prQuantity" placeholder="Prduct Quantity">
        </div>
    </div>
    <div class="row ms-3 me-3 mb-2">
        <div class="col">
            <label for="prImage">Product Image</label>
            <input type="file" class="form-control" name="prImage" id="prImage">
        </div>
        <div class="col">
            <label for="brImage">Brand Image</label>
            <input type="file" class="form-control" name="brImage" id="brImage">
        </div>
        <div class="col">
            <label for="brName">Brand Name</label>
            <input type="text" class="form-control" name="brName" id="brName">
        </div>
    </div>
    <div class="row ms-3 me-3 mb-2">
        <div class="col">
            <label for="prSdescription">Product Short Description</label>
            <textarea class="form-control" name="prSdescription" id="prSdescription"></textarea>
        </div>
        <div class="col">
            <label for="prLdescription">Product Long Description</label>
            <textarea class="form-control" name="prLdescription" id="prLdescription"></textarea>
        </div>
    </div>
    <div class="row mb-3 mt-3 me-3">
        <div class="col text-end">
            <button class="btn btn-md btn-success">Add Product</button>
        </div>
    </div>
</form>