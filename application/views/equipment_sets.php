<h1>Pizza Delicious Pizza</h1>

<script>
    function getSelection() {
        var selectTag = document.getElementById("select");
        var selection = selectTag.options[selectTag.selectedIndex].text;
    }
</script>

<div>
    <!--The menu dropdown for equipment sets-->
    
    <select id="select">
    {pizzas}
        <option value="{name}" name="pizza">{name}</option>
    {/pizzas}
    </select>
    
</div>

<!--The div for the image-->

<div>
    {pizza}
    <img class="pizzaLayer" src="">
    <img class="pizzaLayer" src="sauceImg">
    <img class="pizzaLayer" src="cheeseImg">
    <img class="pizzaLayer" src="meatImg">
    <img class="pizzaLayer" src="cheeseImg">
    </br>
    <b>{name}</b>
    </br>
    <b>Total Cost:</b> {totalCost}
    </br>
    <b>Total Calories:</b> {totalCalories}
    {/pizza}    
</div>