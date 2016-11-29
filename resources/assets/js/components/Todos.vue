<template>
    <div>
        <p v-show="seen">{{message}}<p>
        <input type="text" v-model="message">
        <buttom v-on:click="reverseMessage">Reverse</buttom>
        <ol>
            <li v-for="todo in todos">@{{ {todo.name }} | @{{todo.priority}} | @{{ todo.done }}</li>
        </ol>
    </div>
</template>
<style>
    body{
        background-color:#ff0000;
    }
</style>
<script>
    export default{
        data() {
            return {
                message: 'Hola que tal',
                seen: false,
                todos: [],
            }
        },
        created(){
            console.log('Component todos created.');
            this.fetchData();
        },
        methods: {
            reversedMessage: function(){

            }

        }

    };
</script>

<!--data: {-->
<!--message: 'Hello Vue Que tal!',-->

<!--}-->