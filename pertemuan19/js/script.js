const tombolCari = document.getElementById('tombol-cari');
const container = document.getElementById('container');
const keyword = document.getElementById('keyword');


const image = document.getElementsByTagName('img');

for (let i = 0; i < image.length; i++) {
	image[i].style.borderRadius = '10px';
}


keyword.addEventListener('keyup', function(){
	// buat object ajax
	let ajax = new XMLHttpRequest();

	// cek kesiapan ajax 
	ajax.onreadystatechange = function(){
		if (ajax.readyState == 4 && ajax.status == 200) {
			container.innerHTML =  ajax.responseText;
		}
	}

	// eksekusi ajax

	ajax.open('GET', 'ajax/smartphones.php?keyword= '+ keyword.value, true);
	ajax.send();

});