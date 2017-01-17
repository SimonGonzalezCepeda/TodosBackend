<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FlexBox</title>
</head>

<style>

    .container{
        display: flex;
        flex-direction: row;
    }

    nav{
        background: indianred;
        padding: 10px;
        flex: 1;
        -moz-box-flex: 1;
        -webkit-box-flex: 1;
    }

    section.articles{
        background: cornflowerblue;
        padding: 10px;
        flex: 8;
        display: flex;
        flex-direction: column;
    }

    section.articles > article{
        margin: 20px 10px;
    }

    section.articles > article:first-child{
        margin-top: 10px;
    }

    footer{
        position: fixed;
        bottom:0px;
        background: forestgreen;
        width:100%;
        height: auto;
        min-height: 50px;
    }

    header{
        background: black;
        color: white;
        width: 100%;
        height: auto;
        text-align: center;
    }

    header h1{
        margin: 0;
        padding: 30px 0;
    }

</style>

<body>

<header>
    <h1>Heather here!</h1>
</header>

<section class="container">

    <nav class="debug">
        <ul>
            <li>link1</li>
            <li>Link2</li>
            <li>Link3</li>
            <li>Contact</li>
            <li>About</li>
        </ul>
    </nav>

    <section class="articles">

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>

        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam dicta, doloremque doloribus fugiat id, minima officiis provident, quam quas quia quisquam saepe sapiente sit vel vero? Voluptate, voluptatum.</article>
    </section>


    <footer>
        @copyright Acacha Inc. asdas dasd asd
    </footer>
</section>


</body>
</html>