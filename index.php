<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Handlee" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <div id = "app">
        <div class = "Main">
            <h2 class = "Main__title">Shopping List</h2>
            <div class = "Main__content">
                <button @click = "editProduct()" v-show = "!addingProduct">Edit List</button>
                <div v-for = "(item, index) in items" :key = "item.id" v-show = "!addingProduct" class = "Main__item" >
                            
                    <p><span>Product:</span> {{ item.product }}</p>
                    <p><span>Quantity:</span> {{ item.quantity }}</p>
                    <p><span>Price:</span> {{ item.price }} $</p>
                    <!-- <image-api></image-api> -->
                    <div class= "container"></div>
                    <!-- <button class = "buttonBuy" v-on:click = "isActive = !isActive" :class = "{active: isActive}">Buy</button> -->
                    <button class = "buttonBuy" @click = "itemBought(item)" v-show = "!item.done">Buy</button>
                    <button class = "buttonBought" v-show = "item.done">Bought</button>
                    <hr>
                </div>
                
                <div v-for = "(item, index) in items" :key = "item.id" v-show = "addingProduct" class = "Main__edit">
                    <div>
                        <label for = "product">Product:</label>
                        <input type = "text" v-model = "item.product" id = "product" class = "prod">
                    </div>
                    <div>
                        <label for = "product">Quantity:</label>
                        <input v-model = "item.quantity" id = "quantity" type = "number" min=0 step = "0.1">
                    </div>
                    <div>
                        <label for = "product">Price:</label>
                        <input v-model = "item.price" id = "price" type = "number" min=0 step = "0.1">
                    </div>
                    <p id = "subtotal">Subtotal: {{ subtotal[index] }}</p>
                    <button @click = "removeProduct(index)">Remove item</button>
                    
                </div>
                <div class = "Main__button">
                    <button @click = "addNewProduct()" v-show = "addingProduct">Add New Product</button>
                </div>
                <div class = "Main__button">
                    <button @click = "uneditProduct(); imageWp();" v-show = "addingProduct">Done</button>
                </div>
                
            
                <p class = "Main__total">Total: {{ total }}</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src = "script.js"></script>
</body>
</html>