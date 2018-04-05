<div class="content center">
<h1>Customize Your Pizza! - {role}</h1>

<div>
    <!--The menu dropdown for equipment sets-->
    <select id="select">
    {pizzas}
        <option value="{pizzaID}" name="pizza">{name}</option>
    {/pizzas}
    </select>
    
</div>

<!--The div for the image-->
{pizzas}
<div class="pizza-container {pizzaID}">
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
{/pizzas}

</div>
<script>
    $(document).ready(function(){
        $(".pizza-container").hide();
        var pSelected = $('#select').val();
        $("." + pSelected).show();
    });

    $('#select').change(function() {
        $(".pizza-container").hide();
        $("." + this.value).show();

    });
</script>