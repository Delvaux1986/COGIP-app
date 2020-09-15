<section class="col-md-6 offset-md-3 mt-5 mb-5 rounded border border-primary justify-content-center align-item-center bg-light container-fluid">
<h1 class="text-center text-info p-3">Add company</h1>


<form action="" method="POST" class="font-weight-bold text-primary">
    <label for="compName">
        <input type="text" name="compName" placeholder="Company's name"></label></br>
    <label for="compCountry">
        <input type="text" name="compCountry" placeholder="Country"></label></br>
    <label for="compVAT">
        <input type="text" name="compVAT" placeholder="VAT"></label></br>
    <label for="comType">
        <select name="compType">
            <option value="1" selected>Client</option>
            <option value="2">Supplier</option>
        </select>
        </label></br>
    <button type="submit" class="btn btn-primary" name="submitNewCompany">Submit</button>
</form>


</section>