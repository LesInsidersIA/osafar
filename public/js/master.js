//select landing page element
let landingpage = document.querySelector(".landing-page")
//get array of imgs
let imgsArray = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg"]

setInterval(()=>{
//Get random number
let randomNumber = Math.floor(Math.random() * imgsArray.length);
//change background image url
landingpage.style.background = 'url("//public/imgs/' +imgsArray[randomNumber] + '")';

//console.log(randomNumber);
},5000);


// Toggle Menu 
let toggleBtn = document.querySelector(".toggle-menu");
let tLinks = document.querySelector(".links");

toggleBtn.onclick = function (e) {

      // Stop Propagation
    e.stopPropagation();

      // Toggle Class "menu-active" On Button
    this.classList.toggle("menu-active");

      // Toggle Class "open" On Links
    tLinks.classList.toggle("open");

};

// Click Anywhere Outside Menu And Toggle Button
document.addEventListener("click", (e) => {

    if (e.target !== toggleBtn && e.target !== tLinks) {

      // Check If Menu Is Open
    if (tLinks.classList.contains("open")) {

      // Toggle Class "menu-active" On Button
    toggleBtn.classList.toggle("menu-active");

      // Toggle Class "open" On Links
    tLinks.classList.toggle("open");

    }

    }

});

// Stop Propagation On Menu 
tLinks.onclick = function (e) {
    e.stopPropagation();
}

// //search flight or hotel section
// let tabs = document.querySelectorAll(".tabs li");
//       let tabsArray = Array.from(tabs);
//       let divs = document.querySelectorAll(".content > div");
//       let divsArray = Array.from(divs);

//       tabsArray.forEach((ele) => {
//             ele.addEventListener("click", function (e){
//                   tabsArray.foreach((ele) =>{
//                   ele.classList.remove("active");
//                   });
//                   e.currentTarget.classList.add("active");
//                   divsArray.forEach((div) => {
//                   div.style.display = "none";
//                   });
//                   document.querySelector(e.currentTarget.dataset.cont).style.display ="block";
//             });
//       });


// start offre.js

let thumbnails = document.getElementsByClassName('thumbnail');

		let activeImages = document.getElementsByClassName('active');

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})

// end offre.js

//start package.js
//end package.js