import fetch from 'node-fetch'
import cheerio from  'cheerio'
import fs from 'fs/promises'

const newScrapper = []

async function fetchData(url){
	try{
	const reponse = await fetch(url)
	const data = await reponse.text()
	getContenus(data) 
	} catch(error){
		console.error(error)
}
}
fetchData("http://vps-a47222b1.vps.ovh.net:8484");


//recuperation des données

async function getContenus(html){
	const $ = cheerio.load(html)


	$(".card", html).each(function(){

		const newScrappe = {
			id : newScrapper.length + 1,
		//	title : $(this).text().trim(),
			btn : `${$(this).text().trim()}`, 
			url : `${$(this).children("img").attr("src")}`,
		}

		newScrapper.push(newScrappe)

	})

//envoi des données vers le fichier json
	try{
	await fs.writeFile("data.json", JSON.stringify(newScrapper))
	} catch(error){
		console.error(error)
}//console.log(newScrapper)

}
/*
//Automatisation de la requete fetch
setInterval(() =>{
	fetchData("http://vps-a47222b1.vps.ovh.net:8484");

},1000 * 60 * 60 * 2)*/