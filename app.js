let button = document.getElementById("button");
let image = document.getElementById("image");
let pokeNumber = document.getElementById("number");
let pokeName = document.getElementById("name");

const changePokemon = async () => {
  let randomNumber = Math.ceil(Math.random() * 150) + 1; // 1 et 151

  let requestString = `https://pokeapi.co/api/v2/pokemon/${randomNumber}`;

  let data = await fetch(requestString);
  console.log(data);

  let response = await data.json();
  console.log(response);

  image.src = response.sprites.front_default;
  pokeNumber.textContent = `#${response.id}`;
  pokeName.textContent = response.name;
};

changePokemon();
button.addEventListener("click", changePokemon);


const url = 'https://esportapi1.p.rapidapi.com/api/esport/search/ATK';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
		'X-RapidAPI-Host': 'esportapi1.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}