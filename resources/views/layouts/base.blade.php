<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    @include('partials.header')
    @include('partials.main')
    @include('partials.footer')
    
</body>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: black;
}

body {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
  background-color: black;
}

header {
  display: flex;
  justify-content: space-around;
  background-color: white;
}

header img {
  padding: 20px;
}

header #optionsHeader {
  display: flex;
  justify-content: space-evenly;
  gap: 20px;
  align-items: center;
}

header #optionsHeader a {
  color: #2c3e50;
  text-decoration: none;
}

header #optionsHeader a h1 {
  font-size: 20px;
}

main{
  background-color: #1C1C1C;
}

main #contentHere {
  background-color: #1C1C1C;
  padding: 100px;
  color: white;
  text-align: center;
}

main #teenTitansHeroBanner {
  padding: 0 10% 0 10%;
  background-image: url("https://cdn.discordapp.com/attachments/824615274413817866/985685671580696647/jumbotron.jpg");
  height: 400px;
}

main #teenTitansHeroBanner span {
  color: white;
  background-color: #0282F9;
  font-size: 40px;
  position: relative;
  top: 390px;
}

main #cardsContainer {
  padding: 0 10% 0 10%;
  margin-top: 100px;
  width: 100%;
  padding-bottom: 30px
}

main #cardsContainer ul {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  flex-wrap: wrap;
}

main #cardsContainer ul li {
  width: 200px;
  list-style-type: none;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

main #cardsContainer ul li img {
  width: 200px;
  height: 200px;
  -o-object-fit: cover;
     object-fit: cover;
}

main #cardsContainer ul li span {
  color: white;
}

footer #blueBar {
  background-color: #0282F9;
  padding: 50px;
  display: flex;
  justify-content: center;
  gap: 4%;
}

footer a {
  display: flex;
  align-items: center;
  gap: 10px;
  text-decoration: none;
}

footer a img {
  width: 60px;
}

footer a h1 {
  color: white;
  font-weight: 100;
  font-size: 22px;
}

footer #heroFooter {
  height: 500px;
  background-image: url("https://cdn.discordapp.com/attachments/824615274413817866/985685671337406474/footer-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 300px;
  padding: 0 10% 0 10%;
}

footer #links {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  height: 300px;
}

footer #links ul li:first-child {
  color: white;
  font-size: 30px;
}

footer #links ul li {
  list-style-type: none;
  color: rgb(131, 131, 131);
  font-size: 15px;
}

footer #socials {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 0 10% 0 10%;
}

footer #socials #followUs {
  display: flex;
  flex-direction: row;
  gap: 35px;
}

footer #socials #followUs ul {
  display: flex;
  align-items: center;
  gap: 20px;
}

footer #socials #followUs ul li {
  list-style-type: none;
}

</style>

</html>