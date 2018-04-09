<div class="content center">
    <h1>Pizza Topping Maintenance - {role}</h1>
<table class="center">
    <tr>
        <th class="title">
           Category
        </th>
        <th colspan="2">
           Varieties
        </th>

    </tr>
    <tr id="base">
        <td class="title">
		{baseName}
			<form action="/action_page.php"> 
				Category: <input type="text" name="FirstName" value="Your new category here"></br>
				<input type="submit" value="Submit">
			</form>
        </td>
        {bases}
        <td>
            <img src="{img}" style="width:150px;height:150px" title="{name}"/>
            </br>
            <b>{name}</b>
            </br>
            Type: {type}
            </br>
            price: {price}
            </br>
            Calories: {calories}
        </td>
		<td>
		<form method="post" action="/maintenance/changeItem"> 
			<input type="hidden" name="ingrID" value="{ingrID}">
			<input type="hidden" name="catID" value="{catID}">
			Name: <input type="text" name="type" value="Your new name here"></br>
			Price: <input type="number" name="price" value="Your new price here"></br>
			kCals: <input type="number" name="calories" value="Your new calories here"></br>
			<input type="hidden" name="image" value="{img}">
			<input type="submit" value="Submit">
		</form>
		</td>
        {/bases}
    </tr>

    <tr id="sauces">
        <td class="title">
            Sauces
        </td>
        {sauces}
        <td>
            <img src="{img}" style="width:150px;height:150px" title="{name}"/>
            </br>
            <b>{name}</b>
            </br>
            Type: {type}
            </br>
            price: {price}
            </br>
            Calories: {calories}
        </td>
		<td>
		<form method="post" action="/maintenance/changeItem"> 
			<input type="hidden" name="ingrID" value="{ingrID}">
			<input type="hidden" name="catID" value="{catID}">
			Name: <input type="text" name="type" value="Your new name here"></br>
			Price: <input type="number" name="price" value="Your new price here"></br>
			kCals: <input type="number" name="calories" value="Your new calories here"></br>
			<input type="hidden" name="image" value="{img}">
			<input type="submit" value="Submit">
		</form>
		</td>
        {/sauces}
    </tr>

    <tr id="cheese">
        <td class="title">
            Cheese
        </td>
        {cheeses}
        <td>
            <img src="{img}" style="width:150px;height:150px" title="{name}"/>
            </br>
            <b>{name}</b>
            </br>
            Type: {type}
            </br>
            price: {price}
            </br>
            Calories: {calories}
        </td>
		<td>
		<form method="post" action="/maintenance/changeItem"> 
			<input type="hidden" name="ingrID" value="{ingrID}">
			<input type="hidden" name="catID" value="{catID}">
			Name: <input type="text" name="type" value="Your new name here"></br>
			Price: <input type="number" name="price" value="Your new price here"></br>
			kCals: <input type="number" name="calories" value="Your new calories here"></br>
			<input type="hidden" name="image" value="{img}">
			<input type="submit" value="Submit">
		</form>
		</td>
        {/cheeses}
    </tr>

    <tr id="meat">
        <td class="title">
            Meats
        </td>
        {meats}
        <td>
            <img src="{img}" style="width:150px;height:150px" title="{name}"/>
            </br>
            <b>{name}</b>
            </br>
            Type: {type}
            </br>
            price: {price}
            </br>
            Calories: {calories}
        </td>
		<td>
		<form method="post" action="/maintenance/changeItem"> 
			<input type="hidden" name="ingrID" value="{ingrID}">
			<input type="hidden" name="catID" value="{catID}">
			Name: <input type="text" name="type" value="Your new name here"></br>
			Price: <input type="number" name="price" value="Your new price here"></br>
			kCals: <input type="number" name="calories" value="Your new calories here"></br>
			<input type="hidden" name="image" value="{img}">
			<input type="submit" value="Submit">
		</form>
		</td>
        {/meats}
    </tr>

    <tr id="veg">
        <td class="title">
            Veggies
        </td>
        {veg}
        <td>
            <img src="{img}" style="width:150px;height:150px" title="{name}"/>
            </br>
            <b>{name}</b>
            </br>
            Type: {type}
            </br>
            price: {price}
            </br>
            Calories: {calories}
        </td>
		<td>
		<form method="post" action="/maintenance/changeItem"> 
			<input type="hidden" name="ingrID" value="{ingrID}">
			<input type="hidden" name="catID" value="{catID}">
			Name: <input type="text" name="type" value="Your new name here"></br>
			Price: <input type="number" name="price" value="Your new price here"></br>
			kCals: <input type="number" name="calories" value="Your new calories here"></br>
			<input type="hidden" name="image" value="{img}">
			<input type="submit" value="Submit">
		</form>
		</td>
        {/veg}
    </tr>
    </table>
</div>
