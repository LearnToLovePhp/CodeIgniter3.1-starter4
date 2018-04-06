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
        {bases}
            <img class="pizzaLayer base-container {name}" src="{img}">
        {/bases}
        {sauces}
            <img class="pizzaLayer sauce-container {name}" src="{img}">
        {/sauces}
        {cheeses}
            <img class="pizzaLayer cheese-container {name}" src="{img}">
        {/cheeses}
        {meats}
            <img class="pizzaLayer meat-container {name}" src="{img}">
        {/meats}
        {veg}
            <img class="pizzaLayer veg-container {name}" src="{img}">
        {/veg}
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $(".base-container").hide();
        var pSelected = $('#selectBase').val();
        $("." + pSelected).show();
    });

    $('#selectBase').change(function() {
        $(".base-container").hide();
        $("." + this.value).show();

    });
    $(document).ready(function(){
        $(".sauce-container").hide();
        var pSelected = $('#selectSauce').val();
        $("." + pSelected).show();
    });

    $('#selectSauce').change(function() {
        $(".sauce-container").hide();
        $("." + this.value).show();

    });
    $(document).ready(function(){
        $(".cheese-container").hide();
        var pSelected = $('#selectCheese').val();
        $("." + pSelected).show();
    });

    $('#selectCheese').change(function() {
        $(".cheese-container").hide();
        $("." + this.value).show();

    });
    $(document).ready(function(){
        $(".meat-container").hide();
        var pSelected = $('#selectMeat').val();
        $("." + pSelected).show();
    });

    $('#selectMeat').change(function() {
        $(".meat-container").hide();
        $("." + this.value).show();

    });
    $(document).ready(function(){
        $(".veg-container").hide();
        var pSelected = $('#selectVeg').val();
        $("." + pSelected).show();
    });

    $('#selectVeg').change(function() {
        $(".veg-container").hide();
        $("." + this.value).show();

    });
</script>