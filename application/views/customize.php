<div class="content center">
<h1>Create a new pizza! - {role}</h1>

<div>
    <!--The menu dropdown for equipment sets-->
    <select id="selectBase">
    {bases}
        <option value="{name}" name="pizza">{name}</option>
    {/bases}
    </select>
    <select id="selectSauce">
    {sauces}
        <option value="{name}" name="pizza">{name}</option>
    {/sauces}
    </select>
    <select id="selectCheese">
    {cheeses}
        <option value="{name}" name="pizza">{name}</option>
    {/cheeses}
    </select>
    <select id="selectMeat">
    {meats}
        <option value="{name}" name="pizza">{name}</option>
    {/meats}
    </select>
    <select id="selectVeg">
    {veg}
        <option value="{name}" name="pizza">{name}</option>
    {/veg}
    </select>
    
</div>

<!--The div for the image-->
<div class="pizza-container">
    <div class="pizza-photos">
        <img class="pizzaLayer" src="{baseImg}">
        <img class="pizzaLayer" src="{sauceImg}">
        <img class="pizzaLayer" src="{cheeseImg}">
        <img class="pizzaLayer" src="{meatImg}">
        <img class="pizzaLayer" src="{vegImg}">
    </div>
    <div>
    </br>
    <b>{name}</b>
    </br>
    <b>Total Cost:</b> {totalCost}
    </br>
    <b>Total Calories:</b> {totalCalories}
    </div>
</div>

</div>
<script>
    $(document).ready(function(){
        $(".pizza-container").hide();
        var pSelected = $('#selectBase').val();
        $("." + pSelected).show();
    });

    $('#select').change(function() {
        $(".pizza-container").hide();
        $(".").show();

    });
</script>