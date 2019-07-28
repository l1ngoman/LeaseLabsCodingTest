function imageHover(num){
	var images = {
		man: {
			heading: 'Man Image',
			description: 'Image of a man.',
			path: 'img/man.jpg'
		},
		wizard: {
			heading: 'Wizard Image',
			description: 'Image of a wizard.',
			path: 'img/wizard.jpg'
		},
		beast: {
			heading: 'Beast Image',
			description: 'Image of a beast.',
			path: 'img/beast.jpg'
		}
	};

	const backgroundElements = document.getElementsByClassName('image-hover');
	const headingElement = document.getElementById(`heading${num}`);
	const descriptionElement = document.getElementById(`description${num}`);

	switch(num){
		case 1:
			heading = images.man.heading;
			description = images.man.description;
			break;
		case 2:
			heading = images.wizard.heading;
			description = images.wizard.description;
			break;
		case 3:
			heading = images.beast.heading;
			description = images.beast.description;
			break;
	}

	backgroundElements[num-1].style.backgroundColor = 'rgba(26,106,223,.7)';
	headingElement.innerHTML = heading;
	descriptionElement.innerHTML = description;
}

function imageNoHover(num){
	const backgroundElements = document.getElementsByClassName('image-hover');
	const headingElement = document.getElementById(`heading${num}`);
	const descriptionElement = document.getElementById(`description${num}`);

	backgroundElements[num-1].style.backgroundColor = 'rgba(0,0,0,0)';
	headingElement.innerHTML = '';
	descriptionElement.innerHTML = '';
}

function ToggleCollapsedMenu(){
	const toggle = document.getElementById('links');

	toggle.style.display = (toggle.style.display == 'block') ? 'none' : 'block' ;
}
