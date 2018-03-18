window.onscroll = ()=>{
	if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
		//console.log('abajo');
		cargarPost(1);

	}else{
		//console.log('arriba');
	}
}
let offset=0;
let nodeContent = document.getElementById('content');
function cargarPost(num){
	let urlApi = `http://localhost:8888/dev.local/scroll/php/api.php?offset=${offset}&limit=${num}`;
	axios({
		method:'get',
		url: urlApi,
		responseType:'json'
	})
	.then((response) =>	{
		console.log(response);
		let vTotal = response.data.posts.length;
		for(let i=0; i< vTotal; i++){
			offset++;
			let item = response.data.posts[i];
			let html = `
				<div class="box">
					${item.id}
					${item.content}
					${item.date}
				</div>`;
			nodeContent.innerHTML += html	
		}
	})
	.catch((error)=> console.log(error));
}

cargarPost(7);










