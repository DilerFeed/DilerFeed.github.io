<!DOCTYPE html>

<style>
html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
a {
    text-decoration: none;
}
li {
    list-style: none;
}
header {
    width: 100%;
    height: 50px;
    line-height: 50px;
    text-align: center;
    font-family: sans-serif;
    background-color: #040d37;
    color: white;
}
.brand {
    width: auto;
    height: 100%;
    float: left;
    margin: 0 0 0 5%;
}
.menu {
    width: 60%;
    height: 100%;
    float: right;
}
.menu ul {
    width: 100%;
    height: inherit;
    margin: 0;
    padding: 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}
.menu ul a {
    width: 20%;
    height: inherit;
    color: #222;
    display: inline-block;
}
.menu ul a:hover {
    background-color: #222;
    color: #fff;
}
#menuToggle {
    display: none;
}
.menu-icon {
    display: none;
}
.main {
  position: absolute;
  padding: 1rem;
  width: 420px;
  box-shadow: 0 15px 30px 0 rgba(0,0,0,0.11),
    0 5px 15px 0 rgba(0,0,0,0.08);
  background-color: #FFFFFF;
  border-radius: 0.5rem;

  border-left: 0 solid #00ff99;
  transition: border-left 300ms ease-in-out, padding-left 300ms ease-in-out;
}

.main:hover {
  padding-left: 0.5rem;
  border-left: 0.5rem solid #00ff99;
}

.main > :first-child {
  margin-top: 0;
}

.main > :last-child {
  margin-bottom: 0;
}

section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100vw;
  height: 100vh;
  background-image: url("https://img.freepik.com/free-vector/abstract-business-professional-background-banner-design-multipurpose_1340-16858.jpg?w=996&t=st=1670264274~exp=1670264874~hmac=7c222c4488eea8b0a9903e7e66b6109240f2aa78a1f2ad308c23208e1c66cc77");
  background-size: cover;
  padding-bottom:0px;
}


@media screen and (max-width: 768px) {
    .menu {
        width: 100%;
        height: auto;
    }
    .menu ul {
        display: block;
        max-height: 0;
    	overflow: hidden;
    	-webkit-transition: max-height 0.3s;
    	-moz-transition: max-height 0.3s;
        -ms-transition: max-height 0.3s;
        -o-transition: max-height 0.3s;
    	transition: max-height 0.3s;
    }
    .menu ul a {
        text-align: left;
        width: 100%;
        height: 50px;
        background-color: #f1c40f;
        padding: 10px 0px 10px 5%;
    }
    .menu-icon {
        width: 100px;
        height: inherit;
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        line-height: 60px;
    }
    #menuToggle:checked ~ ul {
        max-height: 350px;
    }
    .menu-icon i {
        font-size: 1.7em;
    }
}
</style>

<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>LAB 5 OS</title>
</head>
<body>
    <header>
        <figure class="brand">LAB 5 OS</figure>
    </header>
    <section>
		<div class="main">
      <h2>CLIENT IP</h2>
      <?php
      echo "is " . $_SERVER['REMOTE_ADDR'] . "<br>";
      ?>
    </div>
    <section>
</body>
</html>